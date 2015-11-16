<?php
		/**
		*   	@author ekoca
		*	MCRYPTL: aes128 CBC mode
		*	Keygen : none
		*	Padding: PKCS7
		*	key    : yourPTAkey (Check your RNT admin)
		* 	PASSWORD_REQUIRE_DISABLED
		*/
 
		const CONFIG_PROPERTY_RNT_URL = 'rnt_url';
		const PTA_KEY                 = 'yourPTAkey';
		const IV                      = "\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0";
	

		//build the PTA table with all the REQUIRE_DISABLED customer data
		$ptaDataArray = array(
				'p_userid' => 'user_id',
				// We enabled “ignore password” settings
				'p_redirect' => true
		);

		//Convert PTA data array to string and open the module
		$ptaDataString  = urldecode(http_build_query($ptaDataArray));
		$cipher         = mcrypt_module_open(MCRYPT_RIJNDAEL_128,'','cbc','');
		// Padding PKCS7
		$blockSize      = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
		$len            = strlen($ptaDataString);
		$pad            = $blockSize - ($len % $blockSize);
		$ptaDataString .= str_repeat(chr($pad), $pad);

		// Init the encryption
		mcrypt_generic_init(
			$cipher, 
			$key, 
			$iv //mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_RAND)
		);

		// Start the encryption
		$encrypted = base64_encode(mcrypt_generic($cipher,$ptaDataString));
		mcrypt_generic_deinit($cipher);
		$encrypted = strtr($encrypted, array('+' => '_', '/' => '~', '=' => '!'));

		// Start the dencryption
		mcrypt_generic_init($cipher, $key, $iv);
		$decrypted = strtr($encrypted, array('_' => '+', '~' => '/', '!' => '='));
		$decrypted = mdecrypt_generic($cipher,base64_decode($decrypted));
		mcrypt_generic_deinit($cipher);

		$encrypted_data = array();
		$encrypted_data['encrypt'] = $encrypted;
		$encrypted_data['decrypt'] = $decrypted;
		//echo_array($encrypted_data);

		header("location:http://{RNT_URL}/ci/pta/login/redirect/home/p_li/" . $encrypted);
?>
