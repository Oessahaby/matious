<!DOCTYPE html>
<html>
<head>
   <title>MyBlog</title>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Matious
  </title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/black-dashboard" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, black dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, black design, black dashboard bootstrap 4 dashboard">
  <meta name="description" content=">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Black Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Black Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Black Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg" />
  <meta property="og:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/css/black-dashboard.min.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="sidebar-mini">
  <div class="wrapper">
    <div class="navbar-minimize-fixed">
      <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
      </button>
    </div>
  
    <div class="main-panel">
      <!-- Navbar -->
      
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-primary">
                      <i class="tim-icons icon-single-02"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Nombre d'enregistrements</p>
                      <h3 class="card-title"><?php echo ($count)?></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                      <i class="tim-icons icon-shape-star"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category"><?php echo($labelPayment[0])?></p>
                      <h3 class="card-title"><?php echo($dataPayment[0])?></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
         
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-success">
                      <i class="tim-icons icon-shape-star"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category"><?php echo($labelPayment[1])?></p>
                      <h3 class="card-title"><?php echo($dataPayment[1])?></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-danger">
                      <i class="tim-icons icon-shape-star"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category"><?php echo($labelPayment[2])?></p>
                      <h3 class="card-title"><?php echo($dataPayment[2])?></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
          
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Revenue brut par catégorie</h5>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Nombre d'achats par client</h5>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="CountryChart" height="120"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Moyenne Rating par Sex</h5>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card card-chart" style="height:500px">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">le nombre d'achat dans 2019</h5>
                    
                  </div>
                
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1" height="80px"></canvas>
                </div>
              </div>
            </div>
          </div>
     
      
    </div>
  </div>
 
  <!--   Core JS Files   -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/core/jquery.min.js"></script>
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/core/popper.min.js"></script>
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/core/bootstrap.min.js"></script>
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/sweetalert2.min.js"></script>
  <!--  Plugin for Sorting Tables -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/jquery.tablesorter.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>
  <!-- Chart JS -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/demo/demo.js"></script>
  <!-- Sharrre libray -->
  <script src="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/demo/jquery.sharrre.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46172202-12"></script>
  <script>
const ctx = document.getElementById('CountryChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($label); ?>,
        datasets: [{
           
            data: <?php echo json_encode($data); ?>,
            backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
     
    ],
        }]
    },
    options: {
      legend: {
                display: false,
                
            },
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


//------------------------------------Chart Revue Per Category------------------//
const ctx1 = document.getElementById('chartLinePurple').getContext('2d');
const myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($labelRevue); ?>,
        datasets: [{
            data: <?php echo json_encode($dataRevue); ?>,
            backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)',
      'rgb(255, 100, 86)',
      'rgb(255, 33, 10)',
      'rgb(53, 205, 86)'
    ],
            
        }]
    },
    options: {
      legend: {
                display: false,
                
            },
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

//-------------------------Rating par Sex ------------------------------------//

const ctx2 = document.getElementById('chartLineGreen').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($labelRating); ?>,
        datasets: [{
           
            data: <?php echo json_encode($dataRating); ?>,
            backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
     
    ],
        }]
    },
    options: {
      legend: {
                display: false,
                
            },
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

const ctx3 = document.getElementById('chartBig1').getContext('2d');
const myChart3 = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($labelDate); ?>,
        datasets: [{
           
            data: <?php echo json_encode($dataDate); ?>,
            backgroundColor: [
      'rgb(10, 99, 132)',
      
     
    ],
        }]
    },
    options: {
      legend: {
                display: false,
                
            },
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script> -->
</body>

</html>
</body>
</html>