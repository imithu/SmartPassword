<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Smart Password</title>
</head>
<body>





<section style='color: teal;'>

<?php

$pass = '';  // type your password

echo password_hash( $pass, PASSWORD_DEFAULT );

?>

</section>






    
</body>
</html>