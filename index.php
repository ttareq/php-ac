<?php 

session_start();

if(!isset($_SESSION["login"])){
    header('Location:login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Input</title>
</head>

<body>
    <h1>Masukkan Artikel</h1>

    <div class="id">
        <form action="./artikel.php" method="POST" name="ok">
            <div>
                <label for="judul">Judul</label> <br>
                <input type="text" id="judul" value="Menghitung Kata Dalam Artikel" name="judul">
            </div> <br>
            <div>
                <label for="body">Badan Artikel</label> <br>
                <!-- <input type="text" id="body" style="width: 300px; height: 300px;" name="body" value=""> -->
                <textarea name="body" id="body" cols="80" rows="25" style="font-family: sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, magnam sit quis officiis placeat, eum hic minima fuga quos assumenda officia autem ratione rem tempora molestias laudantium animi quia odio! Deserunt inventore ratione aperiam perferendis ab fugit accusamus quam ipsa, explicabo praesentium vel beatae, sed enim suscipit adipisci laudantium voluptatem recusandae laborum pariatur non fuga sequi. Voluptas quo, excepturi vitae totam veniam fuga saepe alias sint molestiae qui earum minus aspernatur repellat debitis eligendi ut in eaque reiciendis ea dignissimos, laboriosam quibusdam amet magni! Mollitia aliquid ipsum fugit accusantium maiores error facilis earum. Vitae magnam tempora a consectetur voluptatem. Ducimus sapiente mollitia cumque consequatur similique quasi debitis. Accusantium nobis cumque expedita ipsam eos. Illum dolor natus, ad corrupti expedita consectetur facere deleniti veniam maxime repudiandae? Reprehenderit, fugiat quas? Distinctio eius enim ipsum voluptatibus sint laboriosam quia libero pariatur aspernatur id illo veritatis soluta modi nulla, facilis ipsam optio quaerat aliquam expedita natus ullam laudantium aperiam dicta dolor. Vitae consectetur deleniti nihil ad saepe dolores eum laboriosam accusantium consequatur omnis cum modi dolor molestiae rem exercitationem blanditiis minus porro nesciunt atque nostrum qui, praesentium doloribus? Laudantium, nam cumque molestias aliquid iste perspiciatis atque repellat ab, autem nihil magnam qui corrupti excepturi deserunt placeat provident aperiam exercitationem recusandae obcaecati impedit dolores quos sint? Eum voluptates sit vitae? Soluta cumque architecto sapiente non est perspiciatis unde sit, beatae placeat ratione temporibus ipsum nesciunt voluptatum quaerat inventore pariatur exercitationem quisquam dolorum amet provident laboriosam eligendi obcaecati cupiditate! Odio debitis ipsa amet. Qui iste perspiciatis possimus repellendus, tenetur deleniti optio quas ea dolores maxime autem fuga at molestias odit. In esse tempore ullam natus illum officia, asperiores perspiciatis maiores vitae praesentium est velit eos adipisci sunt odit laborum minima odio, inventore voluptatibus! Placeat minus eaque praesentium error! Sit consequatur voluptas facilis est praesentium quod suscipit! 
                </textarea> <br>
            </div>
            <div>
                <label for="author">Penulis</label> <br>
                <input type="text" id="author" value="Sandhika Galih" name="author">
                <button type="submit">Submit</button>
            </div> <br>
        </form>
    </div>


</body>

</html>