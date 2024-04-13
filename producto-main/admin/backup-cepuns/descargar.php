<?php
include ("Function_Backup.php");

echo backup_tables("http://146.148.73.157","root","","cepuns");
$fecha=date("Y-m-d");
header("Content-disposition: attachment; filename=db-backup-".$fecha.".sql");
header("Content-type: MIME");
readfile("backups/db-backup-".$fecha.".sql");
