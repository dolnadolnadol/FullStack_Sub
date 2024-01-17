<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KRATOO</title>
</head>

<body>
    <center>
        <font color=red size=7>KRATOO</font>
    </center>

    <form method="POST" action="action.php">
        <?php
        $fs = fopen("numberofkratoo.txt", "r");
        $count = fgets($fs, 255);
        for ($i = 1; $i <= $count; $i++) {
            // $fs2 = fopen("./kratoo/kratoo{$i}.txt", "r");
            if(file_exists("./kratoo/kratoo{$i}.txt")){
                $lines=file("./kratoo/kratoo{$i}.txt");
                $last=sizeof($lines);
                for($j=0; $j<$last; $j++)
                {
                    if($j%2 == 0){
                        $ptext=$lines[$j];
                        echo $ptext . "<br>";
                        if($j == 2){
                            echo "<br>";
                        }
                    }
                }
                print "<button type=\"submit\" name=\"see\" id=\"see\" value=\"{$i}\">SeeMore</button> ";
                print "<button type=\"submit\" name=\"edit\" id=\"edit\" value=\"{$i}\">edit</button> ";
                print "<button type=\"submit\" name=\"delete\" id=\"delete\" value=\"{$i}\">delete</button><hr>";
            }
            
        }
        ?>
        <button type="submit" name="create" id="create">Create POST</button>
    </form>

</body>

</html>