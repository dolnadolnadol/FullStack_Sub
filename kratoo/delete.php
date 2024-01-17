<?php
header("location:./welcomepage.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['back'])){

    }else{
        $delete = $_POST['delete'];
        unlink("./kratoo/kratoo{$delete}.txt");
    
        // $fs = fopen("numberofkratoo.txt", "r");
        // $e = fgets($fs);
        // fclose($fs);
    
        // $fs = fopen("numberofkratoo.txt", "w");
        // fputs($fs, $e-1);
        // fclose($fs);
    }
}
?>