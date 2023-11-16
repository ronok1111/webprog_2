<html>
    <head>
        <title>AS15</title>
    </head>
    <body>
        <form action="" method="POST">
            <label> ENTER A YEAR : </label>
            <input type="number" name="n1" id="n1">
            <input type="SUBMIT" name="SUBMIT">
        </form>
        <?php
            if(isset($_POST["SUBMIT"]))
            {
                $n=$_POST["n1"];
                if($n%4==0)
                {
                    echo"The year ".$n." is a LEAP year";
                }
                else
                {
                    echo"The year ".$n." is NOT a LEAP year";
                }
            }
        ?>
    </body>
</html>