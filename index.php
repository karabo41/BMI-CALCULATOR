<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>BMI Calculator</h1>

    <form action="calculate.php" method="POST">

        <input type="text" name="firstname" placeholder="First Name" required>

        <input type="text" name="lastname" placeholder="Last Name" required>

        <div class="row">
            <input type="number" name="age" placeholder="Age" required>

            <input type="number" step="0.1" name="weight" placeholder="Weight (kg)" required>

            <input type="number" step="0.01" name="height" placeholder="Height (m)" required>
        </div>

        <button type="submit">Calculate</button>

    </form>
</div>

</body>
</html>
