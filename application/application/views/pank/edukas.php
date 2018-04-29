<?php

	$public_key = openssl_pkey_get_public("-----BEGIN CERTIFICATE-----
	MIICmzCCAgQCCQCGW8tvn+CTIjANBgkqhkiG9w0BAQUFADCBkTELMAkGA1UEBhMC
	RUUxETAPBgNVBAgMCEhhcmp1bWFhMRAwDgYDVQQHDAdUYWxsaW5uMRIwEAYDVQQK
	DAlSZW5kaWxlaHQxETAPBgNVBAsMCGJhbmtsaW5rMRIwEAYDVQQDDAlsb2NhbGhv
	c3QxIjAgBgkqhkiG9w0BCQEWE3JlbmRpbGVodEBnbWFpbC5jb20wHhcNMTgwNDAx
	MTMwNzA4WhcNMzgwMzI3MTMwNzA4WjCBkTELMAkGA1UEBhMCRUUxETAPBgNVBAgM
	CEhhcmp1bWFhMRAwDgYDVQQHDAdUYWxsaW5uMRIwEAYDVQQKDAlSZW5kaWxlaHQx
	ETAPBgNVBAsMCGJhbmtsaW5rMRIwEAYDVQQDDAlsb2NhbGhvc3QxIjAgBgkqhkiG
	9w0BCQEWE3JlbmRpbGVodEBnbWFpbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0A
	MIGJAoGBAK2vxL7cGY0z8rgEw13yOodIHPqdi/7dzVCLBa7v/AbI0HI32+QGABEE
	Uz+ZFxBNY1eZO4/x34nQlACS6a82Qq04acjb34OVRAX2Kj8BbcUChf5s9wwsyi2L
	I1tq4LHZhRMA1eBPPzekC+d3FnOrAsQX6mW+nwPWNAZdPdYARurjAgMBAAEwDQYJ
	KoZIhvcNAQEFBQADgYEADQRtWy6XHUOpZ0cil6iDGbSavqw1aTdRaUJzb71rcYnw
	nnGxeFZlvcYaDz7vXYw7sY5jCWu+l4pQEFwsG/0P0ybUkk0YbtEdbAgypV0I4rgJ
	UKhiPbqzRydGTu3prlc/5YYGHh306L7nQbXDbk/LIoA9Wl+lNcjTsmrQ3N8U3K4=
	-----END CERTIFICATE-----");

	$fields = array ();

	foreach ((array)$_REQUEST as $f => $v) {
		if (substr ($f, 0, 3) == 'VK_') 
		$fields[$f] = $v; 
	}
	if($fields["VK_SERVICE"]=="1111"){
		$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1111 */
		str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
		str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* GENIPIZZA */
		str_pad (mb_strlen($fields["VK_REC_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_REC_ID"] .     /* uid13 */
		str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
		str_pad (mb_strlen($fields["VK_T_NO"], "UTF-8"),      3, "0", STR_PAD_LEFT) . $fields["VK_T_NO"] .       /* 15 */
		str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 7 */
		str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),      3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
		str_pad (mb_strlen($fields["VK_REC_ACC"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_REC_ACC"] .    /* EE842200221035134364 */
		str_pad (mb_strlen($fields["VK_REC_NAME"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_REC_NAME"] .   /* Rendileht OÜ */
		str_pad (mb_strlen($fields["VK_SND_ACC"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_SND_ACC"] .    /* EE871600161234567892 */
		str_pad (mb_strlen($fields["VK_SND_NAME"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_NAME"] .   /* Tõõger Leõpäöld */
		str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
		str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* kool */
		str_pad (mb_strlen($fields["VK_T_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_T_DATETIME"];  /* 2018-04-15T17:13:55+0300 */
	} 
	else {
		$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1911 */
		str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
		str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* GENIPIZZA */
		str_pad (mb_strlen($fields["VK_REC_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_REC_ID"] .     /* uid13 */
		str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
		str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
		str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* kool */
		str_pad (mb_strlen($fields["VK_ENCODING"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_ENCODING"] .        /* utf8 */
		str_pad (mb_strlen($fields["VK_LANG"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_LANG"] .        /* EST */
		str_pad (mb_strlen($fields["VK_MAC"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_MAC"] .        /* PVAfCW7tRXi1p/2dekV9rFxyPwLNVHx3vwZgzIgI4WqP7T7H+YeQbBUUzmNmbo/VnqnNvrg28F34a0ppJsY3oKSAU3xEsUPRQqtELXwYkuLXTP+Dgze4kTm/BF+J6IG89GrMknljhCNWrXOHEVbN1VjvQlKVln+WRPiU4LLQ8nw= */
		str_pad (mb_strlen($fields["VK_AUTO"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_AUTO"];      /* N */
		}
/* $data = "0041111003008009GENIPIZZA005uid1300512345002150017003EUR020EE842200221035134364012Rendileht OÜ020EE871600161234567892015Tõõger Leõpäöld0071234561004kool0242018-04-15T17:13:55+0300"; */

	if (openssl_verify ($data, base64_decode($fields["VK_MAC"]), $public_key) !== 1)
		$signatureVerified = false;
	else
		$signatureVerified = true;

	if($fields["VK_SERVICE"] == "1111" and $signatureVerified=="verified"){
		echo '<h2>'. lang('PankÕnnestus').'</h2>'; 
		echo lang('PankÕnnestusTekst').'</p>'; 
	}
	else {
		echo '<h2>'. lang('PankEbannestus').'</h2>'; 
		echo lang('PankEbannestusTekst').'</p>'; 
	}
?>
