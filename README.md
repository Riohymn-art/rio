<?php
// Cek apakah form sudah disubmit
if (isset($_POST['login'])) {
    $tnama = $_POST['tnama'] ?? '';
    $tpass = $_POST['tpass'] ?? '';

    if ($tnama == "rio_hymn" && $tpass == "riosukabuah") {
        // Jika benar, tampil halaman sukses
        ?>
        <html>
        <head><title>Login Berhasil</title></head>
        <body>
            <center>
                <h2>PASSWORD BETUL</h2>
                <p><a href="login.php">Kembali</a></p>
            </center>
        </body>
        </html>
        <?php
        exit; // Hentikan eksekusi setelah tampil halaman sukses
    } else {
        // Jika salah, tampil pesan error dan form login kembali
        $error = "USER NAME / PASSWORD SALAH";
    }
}
?>

<html>
<head><title>Login Password</title></head>
<body><font size="2">
<div align="center">

<form action="" method="post">
<table width="286" border="0">
<tr bgcolor="grey">
<td colspan="2" align="center">LOGIN ADMINISTRATOR</td></tr>
<tr><td></td><td></td></tr>

<tr><td>Username :</td><td><input name="tnama" type="text" id="tnama" required></td></tr>
<tr><td height="4">&nbsp;</td><td></td></tr>
<tr><td>Password :</td><td valign="middle">
<input name="tpass" type="password" id="tpass" size="10" required></td></tr>
<tr><td>&nbsp;</td><td></td></tr>
<tr><td><input name="reset" type="reset" value="Batal"></td>
<td><input name="login" type="submit" value="Login"></td></tr>
</table></form>

<?php
// Tampilkan error jika ada
if (!empty($error)) {
    echo "<p style='color:red; text-align:center;'>$error</p>";
}
?>

</body></html>
