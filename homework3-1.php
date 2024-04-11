<!DOCTYPE html>
<html>
    <body>
        <form action="test2.php" method="GET">
            숫자를 입력 하세요 : <input type="number" name="y" /><br />
            <input type="submit" value="확인" />
        </form>
        <?php
        $n = $_GET["y"];
        $sum = 0;
        $prod = 1;
        for($i=1;$i <= $n;$i++)
        {
            echo("   $i");
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