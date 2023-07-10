<?php
interface Encryptable {
    public function encrypt($data);
    public function decrypt($data);
}

class AES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting using AES algorithm.\n";
        // perform AES encryption
    }
    
    public function decrypt($data) {
        echo "Decrypting using AES algorithm.\n";
        // perform AES decryption
    }
}

class DES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting using DES algorithm.\n";
        // perform DES encryption
    }
    
    public function decrypt($data) {
        echo "Decrypting using DES algorithm.\n";
        // perform DES decryption
    }
}

$aes = new AES();
$aes->encrypt("data");
$aes->decrypt("encrypted_data");

$des = new DES();
$des->encrypt("data");
$des->decrypt("encrypted_data");
?>