<?php
$student = [
    "name" => "John", //key => value, 키. 연산자. 값
    "age" => 20,
    "city" => "New York"
];
?>

<!DOCTYPE html> //연관 배열 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Candy Store</h1>
    <p>Name: <?php echo $student["name"]; ?></p>
    <p>Age: <?php echo $student["age"]; ?></p>
    <p>City: <?php echo $student["city"]; ?></p>
</body>
</html>