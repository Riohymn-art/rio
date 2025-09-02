<?php

$tnama=@$_POST['tnama'];

$tpass=@$_POST['tpass'];

if ($tnama=="rio_hymn" and $tpass=="riosukabuah")

{

header("location: betul.php");

}else

{ echo "USER NAME / PASSWORD SALAH";

} ?>

<p><p><p>

<a href="pass.php">Back To Password</a>

</p>