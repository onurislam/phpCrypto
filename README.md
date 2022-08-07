# phpCrypto Kullanımı

$data = "https://mtrolab.com";
$chiper = "AES-128-CBC";
$key = "12345";
$crypto = new Crypto($chiper,$key);

echo $crypto->Encrypt($data);
print_r($crypto->Decrypt("GTMt22IZikvst5BuuGqnlnYUUl4iGfa2XWio0yw6gr8="));

