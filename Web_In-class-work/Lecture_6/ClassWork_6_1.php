<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 4</title>
    <style>
        .div-1{
            border:solid;
            padding: 20px;
            margin: auto;
            width: 700px;
            background: silver;
        }
                .div-2{
            border:solid;
            padding: 20px;
            margin: auto;
            width: 700px;
            background: silver;
            text-align: center;
        }

    </style>
</head>
<body>
        <div class="div-2">
        <h1> <a href="page.php">Folders and Files</a></h1>
        <?php
        $items = scandir("folders/");

        foreach ($items as $item) {
            if ($item != "." && $item != "..") {
                if (is_dir("folders/" . $item)) {
                    echo "📁 " . $item . "<br>";
                }else {
                    echo "📄 " . $item . "<br>";
                }       
            }
        }
?>
        </div>
    <div class="div-1">
        <div>
            <form method="post">
                <input type="text" name="folderi"> - Create a Folder
                <br> <br>
                <button>Create Folder</button>
                <br> <br>
            </form>
        </div>
        <hr> <hr>
        <div>
            <form method="post">
                <input type="text" name="file"> - Create a file
                <br> <br>
                <button>Create file</button>
                <br> <br>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['folderi'])){
            $fold = $_POST['folderi'];
            mkdir("folders/".$fold);
        }

        if(isset($_POST['file'])){
            $f = $_POST['file'];
            fopen("folders/".$f.".txt", 'w');
        }
    ?>
</body>
</html>