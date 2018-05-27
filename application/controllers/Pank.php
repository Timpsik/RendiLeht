<?php
	class Pank extends CI_Controller{

		public function maksa(){
			
			if(!$this->session->userdata('sisselogitud'))
				redirect('kasutajad/sisselogimine');

			$andmed['pealkiri'] = 'Pangamakse';
			$admmed['sisu'] = 'Maksa rentida soovitava eseme eest';
			
			$selgitus=$this->input->post('nimi');
			$hind=$this->input->post('price');
			$dt = new DateTime("now", new DateTimeZone('Europe/Helsinki'));
			$time= $dt->format('Y-m-d\TH:i:s\+0300');

			$fields = array(
					"VK_SERVICE"     => "1011",
					"VK_VERSION"     => "008",
					"VK_SND_ID"      => "uid13",
					"VK_STAMP"       => "12345",
					"VK_AMOUNT"      => "$hind",
					"VK_CURR"        => "EUR",
					"VK_ACC"         => "EE842200221035134364",
					"VK_NAME"        => "Rendileht OÜ",
					"VK_REF"         => "1234561",
					"VK_LANG"        => "EST",
					"VK_MSG"         => "$selgitus",
					"VK_RETURN"      => base_url('bank/success'),
					"VK_CANCEL"      => base_url('bank/success'),
					"VK_DATETIME"    => $time,
					"VK_ENCODING"    => "utf-8",
				);

			$private_key = openssl_pkey_get_private(
				"-----BEGIN RSA PRIVATE KEY-----
				MIICXAIBAAKBgQD2YUw/Emn+S9ax/FaqtvHj6iORDBLtRMxrQelJ/pD4zs8Lwcxo
				t7ZET2zHQHEuoGdmnu8jGRe4q7FeM7TcSSsyitc7IlpXutgo6g5RTVURgMUrX595
				qbWk/MxTWc1ZBRL7vjkv67Ttl5kS+9nmBTAmEpdNcn3T1vUhv6N9+GbLLQIDAQAB
				AoGAch7XRk+tMNDH/WE4c5KRsFP/bWv+SFCZrwS0nkV/uP9x/6wgllCh6Dox1IkQ
				49wAiRQNCGDTEALXAR9KIs7xZmskQ1Mt2yBKe+bC3gz02O9XbUlyR62ajASL0gvT
				MrXIFCp2Ai92ICvJi4H5fBtd46CikOE2j9vNqcWKgNCoE7ECQQD+OciqZPPvCbKw
				YfeDtR5m7SbOdMPsYmpFWEHVVhI+q6ROW6LRKrglvXkFemVIIX+TfGUPZJAxXN7B
				ZypTzhLLAkEA+Bl/FuYOOyVJ/aOKIObF5afgIMWi4j54SXwtHTLYMJsBDxnK/cv1
				Iip5pnN9MHmPEIJ9OBgB0FJagwGtyOLC5wJAORu96hkXewEQtPKs6VdMZw6rAwHT
				6UwKV12GHGhjXNSt6jRHlPkluMShZQujqNptkDIHebe7dHtKRuPn7D+ElQJBAJwU
				BiTUs803pzWehY4vP/47Pz++tbrZC/lG2mbNDr59NQxX8KD7h4pn6EHz06UERCFh
				xf7c838n3/McwkRni68CQAav08H7cJJvOrdN1EWF0KeY2c6Xp7fHXrk4she2FiTJ
				TNkqqruapKMUfNsd0GjJQ9W98bSgWb/Ja7HAIlz6mW8=
				-----END RSA PRIVATE KEY-----");

			$bank = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1011 */
			str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
			str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* uid13 */
			str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
			str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 150 */
			str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
			str_pad (mb_strlen($fields["VK_ACC"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_ACC"] .        /* EE842200221035134364 */
			str_pad (mb_strlen($fields["VK_NAME"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_NAME"] .       /* Rendileht OÜ */
			str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
			str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* Torso Tiger */
			str_pad (mb_strlen($fields["VK_RETURN"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_RETURN"] .     /* http://localhost:3480/project/5ac0d97c019cca71600fcabb?payment_action=success */
			str_pad (mb_strlen($fields["VK_CANCEL"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_CANCEL"] .     /* http://localhost:3480/project/5ac0d97c019cca71600fcabb?payment_action=cancel */
			str_pad (mb_strlen($fields["VK_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_DATETIME"];    /* 2018-04-10T14:35:24+0300 */

			openssl_sign ($bank, $signature, $private_key, OPENSSL_ALGO_SHA1);
			$fields["VK_MAC"] = base64_encode($signature);
			$andmed['fields']=$fields;

			$this->load->view('mallid/header', $andmed);
			$this->load->view('pank/maksa', $andmed);
			$this->load->view('mallid/footer');
		}

		public function edukas(){

			$andmed['pealkiri'] = 'Pangamakse sooritatud';
			$admmed['sisu'] = 'Tagasi kaupmehe juurde';
			
			$this->load->view('mallid/header', $andmed);
			$this->load->view('pank/edukas', $andmed);
			$this->load->view('mallid/footer');
		}

		public function katkesta(){

			$andmed['pealkiri'] = 'Pangamakse ebaõnnestus';
			$admmed['sisu'] = 'Tagasi kaupmehe juurde';
				
			$this->load->view('mallid/header', $andmed);
			$this->load->view('pank/katkesta', $andmed);
			$this->load->view('mallid/footer');
		}
	}