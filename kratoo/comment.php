<?php
header("location:./welcomepage.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['back'])){

    }else{
        $post = $_POST['post'];
        $comment = $_POST['comment'];
        $by = $_POST['by'];
        $fs = fopen("./kratoo/comment/kratoo{$post}_comment.txt", "a+");
        fputs($fs, "คอมเม้น : $comment<br>\n");
        fputs($fs, "โพสต์โดย : $by<br>\n");
        fputs($fs, "วันเวลา : " . date("Y-M-d") ." ". date("h:i:sa") . "<br><br>\n");
        fclose($fs);
    }
}
?>