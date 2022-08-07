<?php
class Crypto
{
    public $Chiper;
    public $Key;

    public function __construct($Chiper, $Key)
    {
        $this->Chiper = $Chiper;
        $this->Key = $Key;
    }

    public function Encrypt($Data)
    {
        return openssl_encrypt($Data, $this->Chiper,$this->Key);
    }

    public function Decrypt($Data)
    {
        return openssl_decrypt($Data,$this->Chiper,$this->Key);
    }
}
