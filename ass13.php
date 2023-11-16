
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <h2>String Operations</h2>
    <form method="post" action="">
        <label for="string1">Enter the first string:</label>
        <input type="text" name="string1" id="string1" required>
        <br>
        <label for="string2">Enter the second string:</label>
        <input type="text" name="string2" id="string2" required>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get the user input
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];

        // Join the strings
        $joinedString = $string1 . $string2;

        // Reverse the joined string
        $reversedString = strrev($joinedString);

        // Calculate the lengths of all strings
        $lengthString1 = strlen($string1);
        $lengthString2 = strlen($string2);
        $lengthJoinedString = strlen($joinedString);
        $lengthReversedString = strlen($reversedString);

        // Display the results
        echo "<p>Joined String: $joinedString</p>";
        echo "<p>Reversed Joined String: $reversedString</p>";
        echo "<p>Length of String 1: $lengthString1</p>";
        echo "<p>Length of String 2: $lengthString2</p>";
        echo "<p>Length of Joined String: $lengthJoinedString</p>";
        echo "<p>Length of Reversed Joined String: $lengthReversedString</p>";
    }
    ?>
</body>
</html>
