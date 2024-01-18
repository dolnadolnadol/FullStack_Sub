<?php
    if(isset($_POST['delete'])){
        $delete = $_POST['delete'];
        print "<form action=\"delete.php\" Method=\"POST\">";
        print "คุณแน่ใจใช่ไหม ว่าจะลบ กระทู้นี้? <br><br>";

        $lines=file("./kratoo/kratoo{$delete}.txt");
        $last=sizeof($lines);
        for($j=0; $j<$last; $j++)
        {
            $ptext=$lines[$j];
            echo $ptext . "<br>";
            if($j==$last-1){
                echo "<hr>";
            }
        }

        print "<button type=\"submit\" name=\"delete\" value=\"{$delete}\">delete</button>";
        print "<button type=\"submit\" name=\"back\">back</button>";
        print "</form>";
    }else if(isset($_POST['edit'])){
        $edit = $_POST['edit'];
        print "<form action=\"edit.php\" Method=\"POST\">";
        print "แก้ไข <br><br>";

        $lines=file("./kratoo/kratoo{$edit}.txt");
        $last=sizeof($lines);
        $header = (explode(" ",$lines[0],3)[2]);
        $content = (explode(" ",$lines[1],3)[2]);
        $by = (explode(" ",$lines[2],3)[2]);
        $date = (explode(" ",$lines[3],3)[2]);

        print "หัวข้อ : <input type=\"text\" name=\"header\" placeholder=\"{$header}\" value=\"{$header}\"><br><br>";
        print "เนื้อหา : <textarea rows=\"4\" cols=\"50\" name=\"content\" placeholder=\"{$content}\" value=\"{$content}\"></textarea><br><br>";
        print "โพสต์โดย : <input type=\"text\" name=\"by\" placeholder=\"{$by}\" value=\"{$by}\"><br><br>";
        print "วัน-เวลา : <input type=\"text\" name=\"by\" placeholder=\"{$date}\" value=\"{$date}\" disabled><br><br>";
        print "<button type=\"submit\" name=\"save\" value=\"{$edit}\">save</button>";
        print "<button type=\"submit\" name=\"back\" >back</button>";
        print "</form>";
    }else if(isset($_POST['create'])){
        $create = $_POST['create'];
        print "สร้างกระทู้ <br><br>";
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
        print "<form action=\"comment.php\" Method=\"POST\">";
        print "แสดงความคิดเห็นของคุณ<br>";
        print "คอมเม้น : <textarea rows=\"2\" cols=\"25\" name=\"comment\"></textarea><br><br>";
        print "โพสต์โดย : <input type=\"text\" name=\"by\"><br><br>";
        print "<button type=\"submit\" name=\"post\" value=\"{$see}\">post</button>";
        print "<button onclick=\"history.back()\" name=\"back\">back</button><hr>";
        print "</form>";

        if(file_exists("./kratoo/comment/kratoo{$see}_comment.txt")){
            $fs = fopen("./kratoo/comment/kratoo{$see}_comment.txt","r");
            $e = fpassthru($fs);
        }
        

    }
?>
