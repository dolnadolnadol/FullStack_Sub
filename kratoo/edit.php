<?php
header("location:./welcomepage.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $header = $_POST['header'];
    $content = $_POST['content'];
    $by = $_POST['by'];
    $save = $_POST['save'];
    if(isset($_POST['back'])){

    }else{
        $fs = fopen("./kratoo/kratoo{$save}.txt", "w");
        fputs($fs, "หัวข้อ : $header\n");
        fputs($fs, "เนื้อหา : $content\n");
        fputs($fs, "โพสต์โดย : $by\n");
        fputs($fs, "วันเวลา : " . date("Y-M-d") ." ". date("h:i:sa") . "\n");
        fclose($fs);
    }
}
