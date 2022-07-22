<?php

function conectar(){
    $host="localhost";
    $user="id19277826_mondongoddbb";
    $pass="gY>n]O\a6)wV1>X9";

    $bd="id19277826_mondongo";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}

?>
