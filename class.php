<?php
class Crypt {
	public function AES($data, $function){
		$Config = new Config();
		if($function == TRUE){
			$data = bin2hex($data);
			$return = openssl_encrypt($data, $Config->Crypt_Method, $Config->Crypt_Key, FALSE, $Config->Crypt_IV);
		}elseif($function == FALSE){
			$data = openssl_decrypt($data, $Config->Crypt_Method, $Config->Crypt_Key, FALSE, $Config->Crypt_IV);
			$return = hex2bin($data);
		}
		return $return;
	}
}
$Crypt = new Crypt();