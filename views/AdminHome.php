<!DOCTYPE  html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">IOReno</a>
      <input class="form-control form-control-dark w-100" placeholder="Search" aria-label="Search" type="text">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="AdminHome.php?id=Dashboard">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AdminHome.php?id=Customers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AdminHome.php?id=Contractors">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Contractors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AdminHome.php?id=Projects">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Projects
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AdminHome.php?id=Reports">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Totals
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AdminHome.php?id=6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2"><?php echo $_GET["id"];?></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
              </button>
            </div>
          </div>
            
            <!-- CHART DRAWING MATE -->
          <!--<canvas class="my-4 chartjs-render-monitor" id="myChart" width="1522" height="642" style="display: block; height: 514px; width: 1218px;"></canvas>-->

            <div class="table-responsive">
            <table class="table table-striped table-sm">
            <h2>Section title</h2>
            <?php
                require '../Classes/Database.php';
                $db=new Database;
                if($_GET["id"]=="Contractors"){
            ?>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Company #</th>
                  <th>Company Name</th>
                  <th>Contractor Name</th>
                  <th>Contractor Phone</th>
                  <th>Contractor Email</th>
                  <th>Date Registered</th>
                  <th>Approved</th>
                </tr>
              </thead>
            <?php
                    $contractors=$db->reportContractors();
                    var_dump($contractors);
                    echo '<br>';
                    var_dump($db);
                    foreach($contractors as $contractor){
            ?>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $contractor->get_coNum();?></td>
                  <td><?php echo $contractor->get_name();?></td>
                  <td><?php echo $contractor->get_date();?></td>
                  <td><?php echo $contractor->get_phone();?></td>
                  <td><?php echo $contractor->get_email();?></td>
                  <td><?php echo $contractor->get_date();?></td>
                  <td><?php echo $contractor->get_approved();?></td>
                    
                </tr>
            <?php
                    }
                }
                else if($_GET["id"]=="Customers"){
            ?>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Customer Phone</th>
                  <th>Customer Email</th>
                  <th>Date Registered</th>
                  <th>Approved</th>
                </tr>
              </thead>
            <?php
                    $customers=$db->reportCustomers();
                    var_dump($customers);
                    foreach($customers as $customer){
            ?>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $contractor->get_coNum();?></td>
                  <td><?php echo $contractor->get_name();?></td>
                  <td><?php echo $contractor->get_date();?></td>
                  <td><?php echo $contractor->get_phone();?></td>
                  <td><?php echo $contractor->get_email();?></td>
                  <td><?php echo $contractor->get_date();?></td>
                  <td><?php echo $contractor->get_approved();?></td>
                    
                </tr>
            <?php
                    }
                }
                else if($_GET["id"]=="Projects"){
            ?>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Company #</th>
                  <th>Company Name</th>
                  <th>Contractor Name</th>
                  <th>Contractor Phone</th>
                  <th>Contractor Email</th>
                  <th>Date Registered</th>
                  <th>Approved</th>
                </tr>
              </thead>
            <?php
                    $contractors=$db->reportContractors();
                    foreach($contractors as $contractor){
            ?>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $contractor->get_coNum();?></td>
                  <td><?php echo $contractor->get_name();?></td>
                  <td><?php echo $contractor->get_date();?></td>
                  <td><?php echo $contractor->get_phone();?></td>
                  <td><?php echo $contractor->get_email();?></td>
                  <td><?php echo $contractor->get_date();?></td>
                  <td><?php echo $contractor->get_approved();?></td>
                    
                </tr>
            <?php
                    }
                }
                else if($_GET["id"]=="Reports"){
            ?>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Company #</th>
                  <th>Company Name</th>
                  <th>Contractor Name</th>
                  <th>Contractor Phone</th>
                  <th>Contractor Email</th>
                  <th>Date Registered</th>
                  <th>Approved</th>
                </tr>
              </thead>
            <?php
                    $contractors=$db->reportContractors();
                    foreach($contractors as $contractor){
            ?>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $contractor->get_coNum();?></td>
                  <td><?php echo $contractor->get_name();?></td>
                  <td><?php echo $contractor->get_date();?></td>
                  <td><?php echo $contractor->get_phone();?></td>
                  <td><?php echo $contractor->get_email();?></td>
                  <td><?php echo $contractor->get_date();?></td>
                  <td><?php echo $contractor->get_approved();?></td>
                    
                </tr>
            <?php
                    }
                }
            ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../bootstrap4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../bootstrap4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="../bootstrap4.0.0/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs GRAPHING MATE
        http://www.chartjs.org/docs/latest/getting-started/
    ---------------
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  <!-- Graphs GRAPHING MATE-------------------->

</body></html>
