<?php
if (isset($_POST['quantity']) && isset($_POST['maximum'])) {

    $quantity = $_POST['quantity'];
    $maximum = $_POST['maximum'];

    $randomNumbers = [];
    $sum = 0;

    if ($quantity >= 2 && $maximum >= 1) {

        for ($i = 0; $i < $quantity; $i++) {
            $random = rand(1, $maximum);

            $randomNumbers[] = $random;
            $sum += $random;
        }

        $average = $sum / $quantity;

        $result = "რანდომ რიცხვები: ";

        foreach ($randomNumbers as $number) {
            $result .= $number . ", ";
        }

        $result .= "\nსაშუალო არითმეტიკული: " . $average;

        echo $result;

        file_put_contents('log.txt', $result . PHP_EOL, FILE_APPEND);
    } else {
        echo "რაოდენობა უნდა იყოს მინიმუმ 2!";
    }
}
?>

<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>Lecture 8</title>
</head>
<body>

    <h1>შემთხვევითი რიცხვების გენერირება</h1>

    <form method="POST">
        <label>შეიყვანეთ რიცხვების რაოდენობა (მინიმუმ 2):</label>
        <input type="number" name="quantity" min="2" required>

        <br><br>

        <label>შეიყვანეთ მაქსიმალური რიცხვი:</label>
        <input type="number" name="maximum" min="1" required>

        <br><br>

        <button type="submit">გენერირება</button>
    </form>

</body>
</html>
