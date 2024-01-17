<?php
header("location:./welcomepage.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $header = $_POST['header'];
    $content = $_POST['content'];
    $by = $_POST['by'];
    $create = $_POST['create'];

    $fs = fopen("numberofkratoo.txt", "r");
    $e = fgets($fs)+1;
    fclose($fs);

    $fs = fopen("./kratoo/kratoo{$e}.txt", "a+");
    fputs($fs, "หัวข้อ : $header\n");
    fputs($fs, "เนื้อหา : $content\n");
    fputs($fs, "โพสต์โดย : $by\n");
    fputs($fs, "วันเวลา : " . date("Y-M-d") ." ". date("h:i:sa") . "\n");
    fclose($fs);

    $fs = fopen("numberofkratoo.txt", "w");
    fputs($fs, $e);
    fclose($fs);

}
