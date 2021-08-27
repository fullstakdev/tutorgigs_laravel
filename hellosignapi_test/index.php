<?php


function curl_1(){
    $ch = curl_init();
    $fileName = __DIR__.'/fw9.pdf';
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $finfo = finfo_file($finfo, $fileName);

    $cFile = new CURLFile($fileName, $finfo, basename($fileName));
    curl_setopt($ch, CURLOPT_URL, 'https://api.hellosign.com/v3/signature_request/create_embedded');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_USERPWD, 'd872894e321c830dc174b8ab16cec30718079f2e5f7cb79305b17905fa8a5f7c');
    $post = array(
        'client_id' => '8ca3f3eb57cbb3715f0922dd712aea41',
        'subject' => 'My First embedded signature request',
        'message' => 'Awesome, right?',
        'signers[0][email_address]' => '341f803a@mailinator.com',
        'signers[0][name]' => 'Me',
        'file[0]' =>$cFile,
        'test_mode' => '1'
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}

function curl_2($signature_id){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.hellosign.com/v3/embedded/sign_url/'.$signature_id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_USERPWD, 'd872894e321c830dc174b8ab16cec30718079f2e5f7cb79305b17905fa8a5f7c');
    /*$post = array(
        'client_id' => '8ca3f3eb57cbb3715f0922dd712aea41',
        'subject' => 'My First embedded signature request',
        'message' => 'Awesome, right?',
        'signers[0][email_address]' => '341f803a@mailinator.com',
        'signers[0][name]' => 'Me',
        'file[0]' =>$cFile,
        'test_mode' => '1'
    );*/
     $post = [];
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $post = [];

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}

$result = json_decode(curl_1());
$result2 = json_decode(curl_2($result->signature_request->signatures[0]->signature_id));
$signature_url = $result2->embedded->sign_url;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.hellosign.com/public/js/embedded/v2.10.0/embedded.development.js"></script>

</head>
<body>
    <script>
const client = new window.HelloSign({
  clientId: '8ca3f3eb57cbb3715f0922dd712aea41'
});

// ...

client.open('<?=$signature_url?>',
{skipDomainVerification: true});

    </script>


</body>
</html>