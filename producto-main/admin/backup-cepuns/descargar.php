<?php
include ("Function_Backup.php");

echo backup_tables("146.148.73.15","root","","cepuns");
$fecha=date("Y-m-d");
header("Content-disposition: attachment; filename=db-backup-".$fecha.".sql");
header("Content-type: MIME");
readfile("backups/db-backup-".$fecha.".sql");
