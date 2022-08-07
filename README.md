<h2>phpCrypto Kullanımı</h2>

<p>
$data = "https://mtrolab.com";<br>
$chiper = "AES-128-CBC";<br>
$key = "12345";<br>
$crypto = new Crypto($chiper,$key);<br>
<br>
echo $crypto->Encrypt($data);<br>
print_r($crypto->Decrypt("GTMt22IZikvst5BuuGqnln"));

</p>
