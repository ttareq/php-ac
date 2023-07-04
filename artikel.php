<?php 
// require 'fungsi.php'; // Require akan meletakkan isi dari halaman lain kedalam halaman yang digunakan

$artikel = $_POST;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
</head>

<body>
    <h2><?php echo $artikel["judul"] ?></h2>
    <h4>Oleh : <?php echo $artikel["author"] ?></h4>
    <hr>
    <h4>Isi Artikel :</h4>
    <p><?php echo $artikel["body"]; ?></p>

    <br>

    <form action="./fungsi.php" method="post">
        <input type="hidden" name="string" id="string" value=" <?php echo $artikel["body"]; ?> ">
        <label for="quote">Hitung Kata</label>
        <input type="text" name="quote" id="quote">
        <button type="submit">Hitung</button>
    </form>



</body>

</html>