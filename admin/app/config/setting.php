<?php
// End Point
$urlAssets          = "assets/dist/img/";
$urlApi             = "http://localhost/uapi";
$urlAdmin           = "http://localhost/sdn_pakis_baru/admin/index.php";
$urlModal           = "http://localhost/sdn_pakis_baru/admin/view/content";
$urlPageBerita      = "http://localhost/sdn_pakis_baru/admin/index.php?id=berita&start=";
$urlPageRpp         = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_rpp&start=";
$urlProta           = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_prota&start=";
$urlSilabus         = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_silabus&start=";
$urlPengetahuan     = "http://localhost/sdn_pakis_baru/admin/index.php?id=input_pengetahuan&start=";
$urlPromes          = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_promes&start=";
$urlRpp             = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_rpp&start=";
$urlBercerita       = "http://localhost/sdn_pakis_baru/admin/index.php?id=input_bercerita&start=";
$urlInventaris      = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_inventaris&start=";
$urlDataGuru        = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_guru&start=";
$urlDataSTAFF       = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_staff&start=";
$urlDataSiswa       = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_siswa&start=";
$urlPageMembaca     = "http://localhost/sdn_pakis_baru/admin/index.php?id=input_membaca&start=";
$urlEbook           = "http://localhost/sdn_pakis_baru/admin/index.php?id=input_ebook&start=";
$urlKeuanganRkas    = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_rkas&start=";
$urlKeuanganRapbs   = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_rapbs&start=";
$urlPageRangking    = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_rangking&start=";
$urlAnalisisHB      = "http://localhost/sdn_pakis_baru/admin/index.php?id=data_analisis_hb&start=";
$urlAbsenSiswa      = "http://localhost/sdn_pakis_baru/admin/index.php?id=input_absen_siswa&guru=";
$urlRaport          = "http://localhost/sdn_pakis_baru/admin/index.php?id=input_raport&start=";

$publicUser         = "resource/public/User/";
$publicReport       = "resource/public/Raport/";
$publicFolder       = "resource/public/";
$publicImage        = "../../assets/img/";
$publicJs           = "../../assets/js/";
$publicSiswa        = "resource/public/Siswa/";
$publicGuru         = "resource/public/Guru/";
$publicBerita       = "resource/public/Berita/";
$publicMembaca      = "resource/public/Membaca/";

$database           = "sdn_pakis";
$databaseApi        = "sdnpakis";

// LogicException
if (isset($_REQUEST['start'])) {
  $start            = $_REQUEST['start'];
}
 ?>
