<?php
    $fs = fopen("numberofkratoo.txt","r");
    $count = fgets($fs, 255);
    $co=strval($count);
    for ($i=0; $i < strlen($co); $i++) {
        print "{$count}";
        $fs2 = fopen("kratoo{$i}.txt","r");
        $e = fpassthru($fs2);
    }
?>