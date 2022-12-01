<?php
$myfile = fopen("Q3_3_TextFile.txt", "w") or die("Unable to open file!");
$txt = "Hi,I am Chirag Choudhary, Roll no. A009 from Batch 1 & currently pursuing MCA from MPSTME.....\n";
fwrite($myfile, $txt);
fclose($myfile);
?>