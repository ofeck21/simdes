<?php  
require_once 'config.php';

if (empty($_SESSION['simdes'])) {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin | Sistem Informasi Desa Jambringin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/simpleside.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
       <!-- data tables css -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">  

    <script type="text/javascript" src="js/sweetalert.min.js"></script>  
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a href="index.php" class="navbar-brand">Sismdes Jambringin</a>
		<a href="#menu-toggle" class="navbar-toggler-icon" id="menu-toggle"></a>
	</nav>

	<div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="margin-top: 10px;">
                <li>
                    <a href="index.php"><i class="fa fa-home"></i> Beranda</a>
                </li>
                <li>
                    <a href="?penduduk"><i class="fa fa-address-card"></i> Data Penduduk</a>
                </li>
                <li>
                    <a href="?surat"><i class="fa fa-file-word-o"></i> Surat Keluar</a>
                </li>
                <li>
                    <a href="?request"><i class="fa fa-wpforms"></i> Permohonan Surat</a>
                </li>
                <li>
                	<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="margin-top: 50px;">
            <div class="container-fluid">
                <?php if (isset($_GET['penduduk'])) {
                	require_once 'page/penduduk.php';
                }elseif (isset($_GET['surat'])) {
                	require_once 'page/surat.php';
                }elseif (isset($_GET['request'])) {
                	require_once 'page/request.php';
                }
                else{
                	require_once 'page/home.php';
                } 
                ?>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php 
require_once "modal.php"; 
require_once "proses.php"; 
require_once 'hapus.php';
?>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function() {
        $('#table').DataTable();

        $('#detail').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detailing.php',
                data :  'id_penduduk='+ id,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });

        $('#edit').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'editing.php',
                data :  'id_penduduk='+ id,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });

        $('#proses').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detailing.php',
                data :  'id_req='+ id,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
    </script>

</body>
</html>