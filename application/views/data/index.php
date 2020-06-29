<?php
include 'assets/db/koneksi.php';
?>

<style>
    .chart-pie {
        
        padding-bottom:50%; // This is the aspect ratio
        height: 100%;

    }

    .chart-pie canvas {

        width: 100% !important;
        
    }
    .chartjs-size-monitor {

        width: 100% !important;
        height : 230px !important;
        
    }
    .chartjs-size-monitor-expand {

        width: 100% !important;
        height : 230px !important;
        
    }
    .wrapper{
        height:200px !important;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <!-- Pie Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Status Penduduk</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie wrapper">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="text-center small mt-4">
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(255, 0, 255)"></i> Menikah :
                            <?php
                            $jumlah_menikah = "SELECT * FROM data_masyarakat WHERE sts='menikah'";
                            $query = mysqli_query($koneksi, $jumlah_menikah);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(0, 255, 191)"></i> Belum Menikah :
                            <?php
                            $jumlah_janda = "SELECT * FROM data_masyarakat WHERE sts='belum-menikah'";
                            $query = mysqli_query($koneksi, $jumlah_janda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(64, 255, 0)"></i> Cerai :
                            <?php
                            $jumlah_duda = "SELECT * FROM data_masyarakat WHERE sts='cerai'";
                            $query = mysqli_query($koneksi, $jumlah_duda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(112,128,144)"></i> Meninggal :
                            <?php
                            $jumlah_duda = "SELECT * FROM data_masyarakat WHERE sts='meninggal'";
                            $query = mysqli_query($koneksi, $jumlah_duda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Penduduk</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie wrapper">
                        <canvas id="myBarChart"></canvas>
                    </div>
                    <div class="text-center small mt-4">
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(255, 0, 255)"></i> Perempuan :
                            <?php
                            $jumlah_menikah = "SELECT * FROM data_masyarakat WHERE jenis_kelamin='perempuan'";
                            $query = mysqli_query($koneksi, $jumlah_menikah);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(0, 255, 191)"></i> Laki Laki :
                            <?php
                            $jumlah_janda = "SELECT * FROM data_masyarakat WHERE jenis_kelamin='laki-laki'";
                            $query = mysqli_query($koneksi, $jumlah_janda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <!--<span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(64, 255, 0)"></i> Cerai :
                            <?php
                            $jumlah_duda = "SELECT * FROM data_masyarakat WHERE sts='cerai'";
                            $query = mysqli_query($koneksi, $jumlah_duda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(112,128,144)"></i> Meninggal :
                            <?php
                            $jumlah_duda = "SELECT * FROM data_masyarakat WHERE sts='meninggal'";
                            $query = mysqli_query($koneksi, $jumlah_duda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Agama</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie wrapper">
                        <canvas id="myBarChart2"></canvas>
                    </div>
                    
                    <div class="text-center small mt-4">
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(0, 255, 191)"></i> Islam :
                            <?php
                            $jumlah_menikah = "SELECT * FROM data_masyarakat WHERE agama='islam'";
                            $query = mysqli_query($koneksi, $jumlah_menikah);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(0, 255, 123)"></i> Kristen :
                            <?php
                            $jumlah_janda = "SELECT * FROM data_masyarakat WHERE agama='kristen'";
                            $query = mysqli_query($koneksi, $jumlah_janda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(112,128,144)'"></i> Katolik :
                            <?php
                            $jumlah_menikah = "SELECT * FROM data_masyarakat WHERE agama='katolik'";
                            $query = mysqli_query($koneksi, $jumlah_menikah);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(0, 255, 191)"></i> Hindu :
                            <?php
                            $jumlah_janda = "SELECT * FROM data_masyarakat WHERE agama='hindu'";
                            $query = mysqli_query($koneksi, $jumlah_janda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(160, 160, 160)"></i> Buddha :
                            <?php
                            $jumlah_duda = "SELECT * FROM data_masyarakat WHERE agama='buddha'";
                            $query = mysqli_query($koneksi, $jumlah_duda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        <span class="mr-4">
                            <i class="fas fa-circle" style="color:rgb(255, 0, 255)"></i> KongHuCu :
                            <?php
                            $jumlah_duda = "SELECT * FROM data_masyarakat WHERE agama='konghucu'";
                            $query = mysqli_query($koneksi, $jumlah_duda);
                            $count = mysqli_num_rows($query);
                            echo "$count ";
                            ?>
                        </span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>




<!---------------------------------------------------------------------------------------->




<script>
    var ctx = document.getElementById('myPieChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Menikah', 'Belum-Menikah', 'Cerai', 'Meninggal'],
            datasets: [{
                label: '# of Votes',
                data: [
                    <?php
                    $jumlah_menikah = mysqli_query($koneksi, "select * from data_masyarakat where sts='menikah'");
                    echo mysqli_num_rows($jumlah_menikah);
                    ?>,
                    <?php
                    $jumlah_janda = mysqli_query($koneksi, "select * from data_masyarakat where sts='belum-menikah'");
                    echo mysqli_num_rows($jumlah_janda);
                    ?>,
                    <?php
                    $jumlah_bujang = mysqli_query($koneksi, "select * from data_masyarakat where sts='cerai'");
                    echo mysqli_num_rows($jumlah_bujang);
                    ?>,
                    <?php
                    $jumlah_bujang = mysqli_query($koneksi, "select * from data_masyarakat where sts='meninggal'");
                    echo mysqli_num_rows($jumlah_bujang);
                    ?>
                ],


                backgroundColor: [
                    'rgb(255, 0, 255)',
                    'rgb(0, 255, 191)',
                    'rgb(64, 255, 0)',
                    'rgb(112,128,144)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 0
            }]
        }

    });

    var myPie = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
            responsive: true
        }
    });
</script>

<script>
    var ctx = document.getElementById('myBarChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Laki Laki', 'Perempuan'],
            datasets: [{
                label: '# Jumlah',
                data: [
                    <?php
                    $jumlah_lakilaki = mysqli_query($koneksi, "select * from data_masyarakat where jenis_kelamin='laki-laki'");
                    echo mysqli_num_rows($jumlah_lakilaki);
                    ?>,
                    <?php
                    $jumlah_peremuan = mysqli_query($koneksi, "select * from data_masyarakat where jenis_kelamin='perempuan'");
                    echo mysqli_num_rows($jumlah_peremuan);
                    ?>,
                   
                ],
                backgroundColor: [
                    'rgb(0, 255, 191)',
                    'rgb(255, 0, 255)'
                    
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 0
            }]
        }

    });

    var myBar = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }

    });
</script>
<script>
    var ctx = document.getElementById('myBarChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Islam', 'Kristen', 'Katolik','Hindu','Buddha','KongHuCu'],
            datasets: [{
                label: '# Jumlah',
                data: [
                    <?php
                    $jumlah_islam = mysqli_query($koneksi, "select * from data_masyarakat where agama='islam'");
                    echo mysqli_num_rows($jumlah_islam);
                    ?>,
                    <?php
                    $jumlah_kristen = mysqli_query($koneksi, "select * from data_masyarakat where agama='kristen'");
                    echo mysqli_num_rows($jumlah_kristen);
                    ?>,
                    <?php
                    $jumlah_katolik = mysqli_query($koneksi, "select * from data_masyarakat where agama='katolik'");
                    echo mysqli_num_rows($jumlah_katolik);
                    ?>,
                    <?php
                    $jumlah_hindu = mysqli_query($koneksi, "select * from data_masyarakat where agama='kristen'");
                    echo mysqli_num_rows($jumlah_hindu);
                    ?>,
                    <?php
                    $jumlah_buddha = mysqli_query($koneksi, "select * from data_masyarakat where agama='buddha'");
                    echo mysqli_num_rows($jumlah_buddha);
                    ?>,
                    <?php
                    $jumlah_konghucu = mysqli_query($koneksi, "select * from data_masyarakat where agama='konghucu'");
                    echo mysqli_num_rows($jumlah_konghucu);
                    ?>
                   
                ],
                backgroundColor: [
                    'rgb(0, 255, 191)',
                    'rgb(0, 255, 123)',
                    'rgb(64, 255, 0)',
                    'rgb(112,128,144)',
                    'rgb(160, 160, 160)',
                    'rgb(255, 0, 255)'
                    
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 0
            }]
        }

    });

    var myBar = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }

    });
</script>


<!-- Bootstrap core JavaScript-->
<!--<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>-->
<!--<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

<!-- Core plugin JavaScript-->
<!--<script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>-->

<!-- Custom scripts for all pages-->
<!--<script src="<?= base_url('assets'); ?>/vendor/js/sb-admin-2.min.js"></script>-->

<!-- Page level plugins -->
<!--<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script>-->

<!-- Custom styles for this template-->
<!--<link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">-->

<!--<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script>-->
<!--<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.js"></script>-->