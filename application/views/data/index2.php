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
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Status Penduduk Laki-laki</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie wrapper">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Status Penduduk Perempuan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie wrapper">
                        <canvas id="myPieChart2"></canvas>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Penduduk</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie wrapper">
                        <canvas id="myBarChart"></canvas>
                    </div>
                    <div class="text-center small mt-4">
                        <span class="mr-4">
                            
                            <i class="fas fa-circle" style="color:rgb(0, 255, 191)"></i> Laki-Laki :
                            <?php echo $total_lakilaki ?>
                            
                        </span>
                        <span class="mr-4">
                        <i class="fas fa-circle" style="color:rgb(255, 0, 255)"></i> Perempuan :
                        <?php echo $total_perempuan ?>
                        </span>
                        <span class="mr-4">
                        <i class="fas fa-circle" style="color:rgb(112,128,144)"></i> Selisih :
                        <?php echo $total_lakilaki-$total_perempuan ?>
                        </span>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Wajib & Elektronik KTP [L+P]</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie wrapper">
                        <canvas id="myBarChart3"></canvas>
                    </div>
                    <div class="text-center small mt-4">
                        <span class="mr-4">
                            
                            <i class="fas fa-circle" style="color:rgb(0, 255, 191)"></i> Wajib KTP :
                            <?php echo $jumlahwajibktpl+$jumlahwajibktpp ?>
                            
                        </span>
                        <span class="mr-4">
                        <i class="fas fa-circle" style="color:rgb(255, 0, 255)"></i> Elektronik KTP :
                        <?php echo $jumlahelktpl+$jumlahelktpp ?>
                        </span>
                        <span class="mr-4">
                        <i class="fas fa-circle" style="color:rgb(112,128,144)"></i> Selisih : 
                        <?php 
                        $wajibktp = $jumlahwajibktpl+$jumlahwajibktpp;
                        $elktp = $jumlahelktpl+$jumlahelktpp;

                     //$jumlah = $wajibktp-$elktp; 
                    echo ($jumlahwajibktpl+$jumlahwajibktpp)-($jumlahelktpl+$jumlahelktpp)
                     ///echo $jumlah?>
                        </span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Kepala Keluarga & Penduduk Ber KK</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie wrapper">
                        <canvas id="myBarChart2"></canvas>
                    </div>
                    
                    <div class="text-center small mt-4">
                        
                        
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
        type: 'polarArea',
        data: {
            labels: ['Socah', 'Keleyan', 'Bilaporah', 'Parseh','Jaddih','Buluh','Junganyar','Dakiring','Petaonan','Pernajuh','SanggraAgung'],
            datasets: [{
                label: '# of Votes',
                data: [
                    <?php echo $socah ?>,
                    <?php echo $keleyan ?>,
                    <?php echo $bilaporah ?>,
                    <?php echo $parseh ?>,
                    <?php echo $jaddih ?>,
                    <?php echo $buluh ?>,
                    <?php echo $junganyar ?>,
                    <?php echo $dakiring ?>,
                    <?php echo $petaonan ?>,
                    <?php echo $pernajuh ?>,
                    <?php echo $sanggraagung ?>

                ],


                backgroundColor: [
                    'rgb(255, 0, 255)',
                    'rgb(0, 255, 191)',
                    'rgb(64, 255, 0)',
                    'rgb(112,128,144)',
                    'rgb(255, 0, 255)',
                    'rgb(0, 255, 191)',
                    'rgb(64, 255, 0)',
                    'rgb(112,128,144)',
                    'rgb(0, 255, 191)',
                    'rgb(64, 255, 0)',
                    'rgb(112,128,144)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 1)',
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
    var ctx = document.getElementById('myPieChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: ['Socah', 'Keleyan', 'Bilaporah', 'Parseh','Jaddih','Buluh','Junganyar','Dakiring','Petaonan','Pernajuh','SanggraAgung'],
            datasets: [{
                label: '# of Votes',
                data: [
                    <?php echo $socah2 ?>,
                    <?php echo $keleyan2 ?>,
                    <?php echo $bilaporah2 ?>,
                    <?php echo $parseh2 ?>,
                    <?php echo $jaddih2 ?>,
                    <?php echo $buluh2 ?>,
                    <?php echo $junganyar2 ?>,
                    <?php echo $dakiring2 ?>,
                    <?php echo $petaonan2 ?>,
                    <?php echo $pernajuh2 ?>,
                    <?php echo $sanggraagung2 ?>

                ],


                backgroundColor: [
                    'rgb(255, 0, 255)',
                    'rgb(0, 255, 191)',
                    'rgb(64, 255, 0)',
                    'rgb(112,128,144)',
                    'rgb(255, 0, 255)',
                    'rgb(0, 255, 191)',
                    'rgb(64, 255, 0)',
                    'rgb(112,128,144)',
                    'rgb(0, 255, 191)',
                    'rgb(64, 255, 0)',
                    'rgb(112,128,144)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(153, 102, 255, 1)',
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
                    <?php echo $total_lakilaki ?>,
                    <?php echo $total_perempuan ?>,
                   
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
    var ctx = document.getElementById('myBarChart3').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Wajib KTP', 'Elektronik KTP'],
            datasets: [{
                label: '# Jumlah',
                data: [
                    <?php echo $jumlahwajibktpl+$jumlahwajibktpp ?>,
                    <?php echo $jumlahelktpl+$jumlahelktpp?>
                   
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
        type: 'doughnut',
        data: {
            labels: ['Kepala Keluarga', 'Penduduk KK'],
            datasets: [{
                label: '# Jumlah',
                data: [
                    <?php echo $jumlahkepkel ?>,
                    <?php echo $jumlahkk?>
                   
                ],
                backgroundColor: [
                    'rgb(0, 255, 191)',
                    'rgb(0, 255, 123)'
                    
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
        type: 'doughnut',
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