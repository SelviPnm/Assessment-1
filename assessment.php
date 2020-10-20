<?php
if(isset($_GET['cari'])){

$cari = $_GET['cari'];
$laptop = array(
    array(
        "merek"         => "Apple",
        "ram"           => "8",
        "harddisk"      => "512",
        "usb_type_c"    => TRUE,
        "harga"         => "20000000" 
    ),
    array(
        "merek"         => "Asus",
        "ram"           => "16",
        "harddisk"      => "512",
        "usb_type_c"    => FALSE,
        "harga"         => "18000000" 
    ),
    array(
        "merek"         => "Lenovo",
        "ram"           => "8",
        "harddisk"      => "256",
        "usb_type_c"    => TRUE,
        "harga"         => "8000000"
    )
);
$keyword = $cari;
$ketemu  = FALSE;
for($i=0;$i<count($laptop);$i++) {
    if($laptop[$i]["harga"] == $keyword){
        $ketemu = TRUE;
        break;
    }
}

if($ketemu == TRUE){
    echo "Keyword $keyword berhasil ditemukan";
}
else{
    echo "Keyword $keyword tidak ditemukan";
}

$x=0;
$y=0;

foreach($laptop as $z){
if(strtoupper($z["harga"]) == strtoupper($cari)){
$x=1;
$y=$z;} 
}

if($x){

    echo "<ul>";
    echo "<li>Nama              : ".$y["merek"]."</li>";
    echo "<li>Ram               : ".$y["ram"]."</li>";
    echo "<li>Hardisk           : ".$y["harddisk"]."</li>";
    echo "<li>USB Type C        : ".$y["usb_type_c"]."</li>";
    echo "<li>Harga             : ".$y["harga"]."</li>";
    echo "</ul>";}

}
?>