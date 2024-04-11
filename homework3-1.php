<!DOCTYPE html>
<html>
    <body>
        <form action="homework3-1.php" method="GET">
            숫자를 입력 하세요 : <input type="number" name="y" /><br />
            <input type="submit" value="확인" />
        </form>
        <?php
        $n = $_GET["y"];
        $sum = 0;
        $prod = 1;
        if(isset($_GET['y'])==TRUE)
            {
                for($i=1;$i <= $n;$i++)
                {
                    echo("   $i");
                }
            }
        echo("<br>");
        for($i=1;$i <= $n;$i++)
        {
            $sum +=$i;
        }
        echo("sum : $sum <br>");
        for($i=1;$i <= $n;$i++)
        {
            $prod = $i * $prod;
        }
        echo("prod : $prod <br>");
        ?>
    </body>
</html>