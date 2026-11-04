<?php
    if(isset($_POST['f-text'])){
        $txt = $_POST['f-text'];

        $ff = fopen("drive/test-1.txt", "a");
        fwrite($ff, $txt . PHP_EOL);
        fclose($ff);
    }

    if(isset($_POST['read'])){
        $f = file("drive/data.txt");

        // echo "<pre>";
        // print_r($f);
        // echo "</pre>";

        for($i = 0; $i < count($f); $i++){
            echo "<pre>";
            print_r($f[$i]);
            echo "</pre>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture_7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>ფაილებთან მუშაობა</h1>
        <form method="post">

            <label>Please Write Something ...</label>

            <textarea name="f-text" rows="10" calls="10" placeholder="Please Write Something ..."></textarea>
            <br> <br>
            <button>Click For Save</button>
            
        </form>

        <h2>ფაილის წაშლა</h2>
        <form method="post">
            <button name="read">Read File</button>
        </form>
        
        <div class="file">

        </div>
</body>
</html>