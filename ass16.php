<!--Write a program in php to find the area of triangle,circle and rectangle using 3 different functions with arguments -->
<html>
    <head>
        <title>AS16</title>
    </head>
    <body>
        <form action="" method="POST">
            <h1>RECTANGLE</h1><br>
            Enter LENGTH:<input type="number" name="l" id="l">
            Enter BREADTH:<input type="number" name="b" id="b">
            <input type="submit" name="S1"><br><br>

            <h1>TRIANGLE</h1><br>
            Enter BASE:<input type="number" name="ba" id="ba">
            Enter HEIGHT:<input type="number" name="h" id="h">
            <input type="submit" name="S2"><br><br>

            <h1>CIRCLE</h1><br>
            Enter RADIUS:<input type="number" name="r" id="r">
            <input type="submit" name="S3"><br><br>
        </form>
        <?php
            function rec($l,$b)
            {
                print("Area of RECTANGLE : ".$l*$b);
            }
            function tri($ba,$h)
            {
                print("Area of TRIANGLE : ".(0.5)*$ba*$h);
            }
            function cir($r,$pi)
            {
                print("Area of CIRCLE : ".$pi*$r*$r);
            }

            if(isset($_POST["S1"]))
            {
                $l=$_POST["l"];
                $b=$_POST["b"];
                rec($l,$b);
            }
            elseif(isset($_POST["S2"]))
            {
                $ba=$_POST["ba"];
                $h=$_POST["h"];
                tri($ba,$h);
            }
            elseif(isset($_POST["S3"]))
            {
                $r=$_POST["r"];
                define("pi",3.14);
                cir($r,pi);
            }
        ?>

    </body>
</html>
