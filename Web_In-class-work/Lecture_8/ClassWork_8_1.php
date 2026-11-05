<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quantity = $_POST['quantity'];
    $maximum = $_POST['maximum'];

    $randomNumbers = [];
    $sum = 0;

    for ($i = 0; $i < $quantity; $i++) {
        $random = rand(1, $maximum);
        $randomNumbers[] = $random;

        $sum += $random;
    }

    $avarage = $sum / $quantity;

    $result = "რანდომ რიცხვები: " . implode(", ", $randomNumbers);
    $result = "საშვალო არითმეტიკული: " . $avarage;

    file_put_contents('log.txt', $result . PHP_EOL, FILE_APPEND);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture_8</title>
</head>

<body>
    <h1>შემთხვევითი რიცხვების გენერირება</h1>

    <form method="POST">
        <label>ჩაწერეთ მინიმუმ 2 რიცხვი:</label>
        <input type="number" name="quantity" min="1" required>
        <br><br>
        <label>ჩაწერეთ მაქსიმუმ რიცხვი:</label>
        <input type="number" name="maximum" min="1" required>
        <br><br>
        <button type="submit">გენერირება</button>
        <br><br>
        <label>რანდომ რიცხვები:</label>
        <input type="number" name="sum">
    </form>

    
</body>

</html>