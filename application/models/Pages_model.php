<?php
class Pages_model extends CI_Model {

        public function __construct()
        {
				$username='mikk';
				$password='parool';
				
				try {
					$conn = new PDO('mysql:host=localhost;dbname=andmebaas', $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				}
                
        }
		public function get_people()
{			$username='mikk';
				$password='parool';
				try {
					$conn = new PDO('mysql:host=localhost;dbname=andmebaas', $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$stmt = $conn->prepare('SELECT * FROM inimesed');
				$stmt->execute();
 
				$result = $stmt->fetchAll();
				} catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				}
        return $result;
}
public function add_people($eesnimi, $perenimi, $meil) {
	$username='mikk';
				$password='parool';
	try {
	$pdo = new PDO('mysql:host=localhost;dbname=andmebaas', $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
	$stmt = $pdo->prepare('INSERT INTO `inimesed` (`Id`, `Eesnimi`, `Perenimi`,  `Elukoht`, `Telefon`, `Isikukood`, `Meil`, `Pangakonto`) 
	VALUES (NULL, :Eesnimi,:Perenimi, NULL, NULL, NULL, :Meil, NULL)');
	$stmt->execute(array(
    ':Eesnimi' => $eesnimi,
	':Perenimi' => $perenimi,
	':Meil' => $meil
  ));
 
  # Affected Rows?
  echo $stmt->rowCount(); // 1
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
}
}