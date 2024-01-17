<?php
    if(isset($_POST['delete'])){
        $delete = $_POST['delete'];
        print "<form action=\"delete.php\" Method=\"POST\">";
        print "คุณแน่ใจใช่ไหม ว่าจะลบ กระทู้นี้? <br><br>";
        $fs = fopen("./kratoo/kratoo{$delete}.txt", "r");
        $e = fpassthru($fs);
        print "<button type=\"submit\" name=\"delete\" value=\"{$delete}\">delete</button>";
        print "<button type=\"submit\" name=\"back\">back</button>";
        print "</form>";
    }else if(isset($_POST['edit'])){
        $edit = $_POST['edit'];
        print "<form action=\"delete.php\" Method=\"POST\">";
        print "แก้ไข <br><br>";
        // $fs = fopen("./kratoo/kratoo{$edit}.txt", "r");
        // $e = fpassthru($fs);

        $lines=file("./kratoo/kratoo{$edit}.txt");
        $last=sizeof($lines);
        $header = (explode(" ",$lines[0],3)[2]);
        $content = (explode(" ",$lines[1],3)[2]);
        $by = (explode(" ",$lines[2],3)[2]);
        $date = (explode(" ",$lines[3],3)[2]);

        print "หัวข้อ : <input type=\"text\" name=\"header\" placeholder=\"{$header}\"><br><br>";
        print "เนื้อหา : <textarea rows=\"4\" cols=\"50\" name=\"content\" placeholder=\"{$content}\"></textarea><br><br>";
        print "โพสต์โดย : <input type=\"text\" name=\"by\" placeholder=\"{$by}\"><br><br>";
        print "วัน-เวลา : <input type=\"text\" name=\"by\" placeholder=\"{$date}\" disabled><br><br>";
        print "<button type=\"submit\" name=\"save\" value=\"{$edit}\">save</button>";
        print "<button type=\"submit\" name=\"back\" >back</button>";
        print "</form>";
    }else if(isset($_POST['create'])){
        $create = $_POST['create'];
        print "<form action=\"add.php\" Method=\"POST\">";
        print "หัวข้อ : <input type=\"text\" name=\"header\"><br><br>";
        print "เนื้อหา : <textarea rows=\"4\" cols=\"50\" name=\"content\"></textarea><br><br>";
        print "โพสต์โดย : <input type=\"text\" name=\"by\"><br><br>";
        print "<button type=\"submit\" name=\"create\">create</button>";
        print "<button type=\"submit\" name=\"back\" >back</button>";
        print "</form>";
    }else if(isset($_POST['see'])){
        $see = $_POST['see'];
        $lines=file("./kratoo/kratoo{$see}.txt");
            $last=sizeof($lines);
            for($j=0; $j<$last; $j++)
            {
                $ptext=$lines[$j];
                echo $ptext . "<br>";
                if($j==$last-1){
                    echo "<hr>";
                }
            }
        print "<button type=\"submit\" name=\"back\" >back</button>";
    }
?>
