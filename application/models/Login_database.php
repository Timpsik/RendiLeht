<?php
//Andmebaasiga suhtlemise model
Class Login_Database extends CI_Model {

// Insert registration data in database
public function registration_insert($data) {

// Query to check whether username already exist or not
$condition = "user_mail =" . "'" . $data['user_mail'] . "'";
$this->db->select('*');
$this->db->from('v_Auth');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {
$email=$data['user_mail'];
$parool=$data['user_password'];
// Query to insert data in database
$this->db->query("CALL lisa_kasutaja('$email','$parool')");
if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}


public function login($data) {
$this->db->select('*');
$this->db->from('v_Auth');
$this->db->where('user_password', $data['parool']) ;
$this->db->where('user_mail', $data['email']);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
}

// Read data from database
public function read_user_information($email) {
$this->db->select('*');
$this->db->from('v_Auth');
$this->db->where('user_mail', $email);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
	$result = $query->result();
return $result;
} else {
return false;
}
}
public function lisa_kuulutus($data) {
	$pealkiri = $data['pealkiri'];
	$kategooria = $data['kategooria'];
	$kirjeldus = $data['kirjeldus'];
	$telefon = $data['telefon'];
	$tund = $data['tund'];
	$päev = $data['päev'];
	$nädal = $data['nädal'];
	$kuu = $data['kuu'];
	$omanik = $data['omanik'];
	$pilt = $data['pilt'];
	$query = $this->db->query("CALL lisa_kuulutus('$pealkiri','$kirjeldus', '$kategooria', '$telefon', '$omanik', '$tund', '$päev', '$nädal', '$kuu')");
        // $query->result();
		return TRUE;
}
public function kuulutused($email){
	$query = "SELECT user_mail, COUNT(*) AS kuulutusi FROM v_Auth INNER JOIN v_kuulutused ON v_Auth.Id=v_kuulutused.Omanik GROUP BY Omanik";
	$result = $this->db->query($query)->result_array();;
	return $result;
}

	
}

?>