<?php 
require_once 'config.php'; 
require_once 'template/header.php';

if ( isset($_POST['request']) || isset($_POST['lanjut']) ) {
  require_once 'proses.php';
}
elseif (isset($_GET['layanan'])) {
  require_once 'template/layanan.php';
}
elseif (isset($_GET['kontak'])) {
  require_once 'template/kontak.php';
}
elseif (isset($_GET['tentang'])) {
  require_once 'template/tentang.php';
}
else{
  require_once 'template/beranda.php';
}
?>

<?php 
require_once 'template/footer.php'; 

require_once "modal.php";
?>