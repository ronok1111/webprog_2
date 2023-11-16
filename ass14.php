
<html>
<head>
    <title>Calculate Square</title>
</head>
<body>
    <h2>Calculate Square of a Number</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['calculate'])) {
        // Get the user input
        $number = $_POST['number'];

        // Calculate the square
        $square = $number * $number;

        // Display the result
        echo "<p>The square of $number is $square.</p>";
    }
    ?>
</body>
</html>
