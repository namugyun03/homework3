<!DOCTYPE html>
<html>
    <body>
        <form action="homework3-2.php" method="POST">
            숫자를 입력하세요 : <input type="number" name="i"><br>
        </form>
        <?php
            $n=$_POST["i"];
            for($i=0; $i<$n;$i++)
            {
                $data[$i] = rand(10,100);
            }
            
            sort($data);

            for($i=0; $i<$n;$i++)
            {
                echo("$data[$i] ");
            }
        ?>
    </body>
</html>