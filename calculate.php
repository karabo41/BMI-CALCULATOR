<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];

    // BMI Formula
    $bmi = $weight / ($height * $height);
    $bmi = round($bmi, 2);

    // BMI Category
    if ($bmi < 18.5) {
        $category = "Underweight";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        $category = "Normal weight";
    } elseif ($bmi >= 25 && $bmi < 30) {
        $category = "Overweight";
    } else {
        $category = "Obese";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>BMI Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <h1>BMI Result</h1>

    <p>Name: <?php echo $firstname . " " . $lastname; ?></p>
    <p>Age: <?php echo $age; ?></p>
    <p>Your BMI: <strong><?php echo $bmi; ?></strong></p>
    <p>Category: <strong><?php echo $category; ?></strong></p>

    <a href="index.php">
        <button>Calculate Again</button>
    </a>

</div>

</body>
</html>
