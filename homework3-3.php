<!DOCTYPE type>
<html>
    <body>
        <form action="homework3-3.php" method="POST">
            숫자를 입력하세요 : <input type="number" name="num"><br>
        </form>
        <?php
        if($_POST["num"] >100 )
        {
            echo "100 이하의 숫자를 입력해 주세요.";
        }
        else
        {
            
            $n = $_POST["num"];
            $f1=1;
            $f2=1;
            $ff=0;
            for($i=0;$i<$n;$i++)
            {   
                $f3=$f1+$f2;
                $ff= $f2/$f1;
                echo $i+1," ",$f1," ",$ff,"<br>";
                $f1 = $f2;
                $f2 = $f3;
            }
               
        }
               

        ?>
    </body>
</html>