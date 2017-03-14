<?php
$json_data=file_get_contents("pekerja2.json");
$obj = json_decode($json_data);
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "NoHp : "; echo $obj->nohp;
echo "<br>";
echo "Mata Kuliah: ";echo $obj->matakuliah[0];
echo "<br>";
echo $obj->matakuliah[1];
echo "<br>";
echo $obj->matakuliah[2];
echo "<br>";
?>