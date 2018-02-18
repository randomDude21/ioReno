<!DOCTYPE  html>
<html lang="en">
<?php 
    session_start();
    if ($_SESSION["admin"]==null)
    {
        header("location:index.php");
    }
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!--OPEN ICONIC icons-->
    <link href="../open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <style type="text/css">
        /* Chart.js */

        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">IOReno</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="../php/logout.php">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <br>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="AdminHome.php?<?php 
                            //<!-- using php url query string to keep the state of the choice in the dropdown when changing views from dashboard to Customers to Contractors etc.-->
                                                                    if(isset($_GET["time"]))
                                                                        echo 'time='.$_GET["time"].'&';
                                                                    else 
                                                                        echo "time=All Time& ";
                                                                ?>id=Dashboard">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdminHome.php?<?php
                            //<!-- using php url query string to keep the state of the choice in the dropdown when changing views from dashboard to Customers to Contractors etc. Same as up top-->
                                                            if(isset($_GET["time"]))
                                                                echo 'time='.$_GET["time"].'&';
                                                            else 
                                                                echo "time=All Time& ";
                                                        ?>id=Customers">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Customers
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdminHome.php?<?php 
                            //<!-- using php url query string to keep the state of the choice in the dropdown when changing views from dashboard to Customers to Contractors etc. Same as up top-->
                                                            if(isset($_GET["time"]))
                                                                echo 'time='.$_GET["time"].'&';
                                                            else 
                                                                echo "time=All Time& ";
                                                        ?>id=Contractors">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Contractors
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdminHome.php?<?php 
                            //<!-- using php url query string to keep the state of the choice in the dropdown when changing views from dashboard to Customers to Contractors etc. Same as up top-->
                                                            if(isset($_GET["time"]))
                                                                echo 'time='.$_GET["time"].'&';
                                                            else 
                                                                echo "time=All Time& ";
                                                        ?>id=Payments">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  
                  Payments
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdminHome.php?<?php 
                            //<!-- using php url query string to keep the state of the choice in the dropdown when changing views from dashboard to Customers to Contractors etc. Same as up top-->
                                                            if(isset($_GET["time"]))
                                                                echo 'time='.$_GET["time"].'&';
                                                            else 
                                                                echo "time=All Time& ";
                                                        ?>id=Denied Payments">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Denied Payments
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdminHome.php?<?php 
                                                      //<!-- using php url query string to keep the state of the choice in the dropdown when changing views from dashboard to Customers to Contractors etc. Same as up top-->
                                                            if(isset($_GET["time"]))
                                                                echo 'time='.$_GET["time"].'&';
                                                            else 
                                                                echo "time=All Time& ";
                                                        ?>id=Totals">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Totals
                </a>
                        </li>
            </ul>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">
                        <?php 
                        //<!-- If ever nothing is selected, tells user what to select -->
                            if(isset($_GET["time"])){
                                if(isset($_GET["id"]))
                                    echo $_GET["id"];
                                else
                                    echo "<- Please select what you wish to view";
                             }
                             else 
                                 echo "Please select a timeframe ->";?>
                    </h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary" onClick="PrintDoc()">Print</button>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <?php if(isset($_GET["time"]))echo $_GET["time"];
                           else echo "Select Timeframe"?>
                  </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                
                                <a class="dropdown-item" href="AdminHome.php?time=Last Week<?php
                               //<!-- using php url query string to stay on the same page when selecting from the dropdown -->
                                                                                    if(isset($_GET["id"]))
                                                                                        echo "&id=".$_GET["id"];
                                                                                    else 
                                                                                        echo "&id=Dashboard";?>">Last Week</a>
                                <a class="dropdown-item" href="AdminHome.php?time=All Time<?php 
                                                                                    if(isset($_GET["id"]))
                                                                                        echo "&id=".$_GET["id"];
                                                                                    else 
                                                                                        echo "&id=Dashboard";?>">All Time</a>
                            </div>
                        </div>

                    </div>
                </div>
                <?php
                //<!-- using php to verify if the time, and id is set in the url query string -->
        if(isset($_GET["time"])){
            if(isset($_GET["id"])){
                if($_GET["time"]=="Last Week"){
                    //<!-- do this if the time in the query string is Last Week -->
        ?>
                    <div class="table-responsive" id="printar">
                        <table class="table table-striped table-sm">
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
                                        <th>Approve or Deny</th>
                                    </tr>
                                </thead>
                                <?php
                    $i=1;
                    $contractors=$db->reportContractors();
                    foreach($contractors as $contractor){
            ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $i;?>
                                            </td>
                                            <td>
                                                <?php echo $contractor->get_coNum();?>
                                            </td>
                                            <td>
                                                <?php echo $contractor->get_coName();?>
                                            </td>
                                            <td>
                                                <?php echo $contractor->get_name();?>
                                            </td>
                                            <td>
                                                <?php echo $contractor->get_phone();?>
                                            </td>
                                            <td>
                                                <?php echo $contractor->get_email();?>
                                            </td>
                                            <td>
                                                <?php echo $contractor->get_date();?>
                                            </td>
                                             <?php if($contractor->get_approved()=='0'){
                                            ?>
                                            <!-- do this if the contractor isn't approved -->
                                            <td>
                                            <a href="<?php 
                                            //<!-- use the php url query string to keep the same page and dropdown selection but also add the variable to either approve or deny using the contractor company number-->
                                            echo '../views/AdminHome.php?'.'time='.$_GET['time'].'&'.'id='.$_GET['id'].'&'.'approve='.$contractor->get_coNum();?>" class="btn btn-primary">Approve</a>
                                            </td>
                                            <td>
                                                <a href="<?php echo '../views/AdminHome.php?'.'time='.$_GET['time'].'&'.'id='.$_GET['id'].'&'.'deny='.$contractor->get_coNum();?>" class="btn btn-danger ">Deny</a>
                                            </td>
                                            <?php
                                                    }
                                                else if($contractor->get_approved()!='0'){

                                            ?>
                                            <td>
                                            <?php
                                                //display those icons
                                                if($contractor->get_approved()=='1'){
                                            ?>
                                                <span class="oi oi-check text-success" title="icon name" aria-hidden="true"></span>
                                            <?php
                                                    }
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                if($contractor->get_approved()=='2'){
                                            ?>
                                                <span class="oi oi-x text-danger" title="icon name" aria-hidden="true"></span>
                                            <?php
                                                    }
                                            ?>
                                            </td>
                                            <?php
                                                }
                                            ?>
                                        </tr>
                                    </tbody>
                                    <?php
                        ++$i;
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
                                            </tr>
                                        </thead>
                                        <?php
                    $i=1;
                    $customers=$db->reportCustomers();
                    foreach($customers as $customer){
            ?>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php echo $i;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $customer->get_name();?>
                                                    </td>
                                                    <td>
                                                        <?php echo $customer->get_phone();?>
                                                    </td>
                                                    <td>
                                                        <?php echo $customer->get_email();?>
                                                    </td>
                                                    <td>
                                                        <?php echo $customer->get_date();?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php
                        ++$i;
                    }
                }
                else if($_GET["id"]=="Payments"){
            ?>
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Payment ID</th>
                                                        <th>Company Company #</th>
                                                        <th>Payment Amount</th>
                                                        <th>Proposal ID</th>
                                                        <th>Payment Status</th>
                                                        <th>Payment Date</th>
                                                    </tr>
                                                </thead>
                                                <?php
                    $i=1;
                    $payments=$db->reportPayments();
                    foreach($payments as $payment){
            ?>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <?php echo $i;?>
                                                            </td>
                                                            <td>
                                                                <?php echo $payment->get_id();?>
                                                            </td>
                                                            <td>
                                                                <?php echo $payment->get_coNum();?>
                                                            </td>
                                                            <td>
                                                                <?php echo $payment->get_amount();?>
                                                            </td>
                                                            <td>
                                                                <?php echo $payment->get_proposal();?>
                                                            </td>
                                                            <td>
                                                                <?php echo $payment->get_status();?>
                                                            </td>
                                                            <td>
                                                                <?php echo $payment->get_date();?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <?php
                        ++$i;
                    }
                }
                else if($_GET["id"]=="Denied Payments"){
            ?>
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Payment ID</th>
                                                                <th>Company Company #</th>
                                                                <th>Payment Amount</th>
                                                                <th>Proposal ID</th>
                                                                <th>Payment Status</th>
                                                                <th>Payment Date</th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                    $i=1;
                    $payments=$db->deniedPaymentsWeek();
                    foreach($payments as $payment){
            ?>
                                                            <tbody>
                                                                <tr>

                                                                    <td>
                                                                        <?php echo $i;?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $payment->get_id();?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $payment->get_coNum();?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $payment->get_amount();?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $payment->get_proposal();?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $payment->get_status();?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $payment->get_date();?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <?php
                        ++$i;
                    }
                }
                else if($_GET["id"]=="Totals"){
            ?>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Number of Payments</th>
                                                                        <th>Total Payments</th>
                                                                    </tr>
                                                                </thead>
                                                                <?php
                    $total=$db->totalsWeek();
            ?>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <?php echo $total['number']?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $total['total'];?>
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                }
                else if($_GET["id"]=="Dashboard"){
                    
                    //calculate number of customers to use in the chart in the script at the bottom
                    $nb_customers=0;
                    $customers=$db->reportCustomers();
                    foreach($customers as $customer){
                        $nb_customers++;
                    }
                    
                    //calculate number of contractors to use in the chart in the script at the bottom
                    $nb_contractors=0;
                    $contractors=$db->reportContractors();
                    foreach($contractors as $contractor){
                        $nb_contractors++;
                    }
            ?>
                <!-- CHART DRAWING MATE -->
                    <canvas class="my-4 chartjs-render-monitor" id="cust_contr" width="1522" height="642" style="display: block; height: 514px; width: 514px;"></canvas>
                <?php
                }
            ?>
                                                                    </tbody>
                        </table>
                    </div>
                    <?php
            }
                
        //-------------------------------------------------------------------------
        //----------------- Get All Time Data --------------------------------------
        //-------------------------------------------------------------------------
        //code is basically the same as up top but with some different php database functions to get all time info
                
            else if($_GET["time"]=="All Time"){
            ?>
                        <div class="table-responsive" id="printar">
                            <table class="table table-striped table-sm">
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
                                            <th>Approve</th>
                                            <th>Deny</th>
                                        </tr>
                                    </thead>
                                    <?php
                    $i=1;
                    if(isset($_GET["approve"])){
                        $contractor=$db->getContractor($_GET["approve"]);
                        $db->approveContractor($contractor);
                    }
                    else if(isset($_GET["deny"])){
                        $contractor=$db->getContractor($_GET["deny"]);
                        $db->denyContractor($contractor);
                    }
                    $contractors=$db->getContractors();
                    foreach($contractors as $contractor){
            ?>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <?php echo $i;?>
                                                </td>
                                                <td>
                                                    <?php echo $contractor->get_coNum();?>
                                                </td>
                                                <td>
                                                    <?php echo $contractor->get_coName();?>
                                                </td>
                                                <td>
                                                    <?php echo $contractor->get_name();?>
                                                </td>
                                                <td>
                                                    <?php echo $contractor->get_phone();?>
                                                </td>
                                                <td>
                                                    <?php echo $contractor->get_email();?>
                                                </td>
                                                <td>
                                                    <?php echo $contractor->get_date();?>
                                                </td>
                                                    <?php if($contractor->get_approved()=='0'){
                                                ?>
                                                <td>
                                                    <a href="<?php echo '../views/AdminHome.php?'.'time='.$_GET['time'].'&'.'id='.$_GET['id'].'&'.'approve='.$contractor->get_coNum();?>" class="btn btn-primary">Approve</a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo '../views/AdminHome.php?'.'time='.$_GET['time'].'&'.'id='.$_GET['id'].'&'.'deny='.$contractor->get_coNum();?>" class="btn btn-danger ">Deny</a>
                                                </td>
                                                <?php
                                                        }
                                                    else if($contractor->get_approved()!='0'){
                                                        
                                                ?>
                                                <td>
                                                <?php
                                                    if($contractor->get_approved()=='1'){
                                                ?>
                                                    <span class="oi oi-check text-success" title="icon name" aria-hidden="true"></span>
                                                <?php
                                                        }
                                                ?>
                                                </td>
                                                <td>
                                                <?php
                                                    if($contractor->get_approved()=='2'){
                                                ?>
                                                    <span class="oi oi-x text-danger" title="icon name" aria-hidden="true"></span>
                                                <?php
                                                        }
                                                ?>
                                                </td>
                                                <?php
                                                    }
                                                ?>
                                            </tr>
                                        </tbody>
                                        <?php
                        ++$i;
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
                                                </tr>
                                            </thead>
                                            <?php
                    $i=1;
                    $customers=$db->getCustomers();
                    foreach($customers as $customer){
            ?>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <?php echo $i;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $customer->get_name();?>
                                                        </td>
                                                        <td>
                                                            <?php echo $customer->get_phone();?>
                                                        </td>
                                                        <td>
                                                            <?php echo $customer->get_email();?>
                                                        </td>
                                                        <td>
                                                            <?php echo $customer->get_date();?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php
                        ++$i;
                    }
                }
                else if($_GET["id"]=="Payments"){
            ?>
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Payment ID</th>
                                                            <th>Company Company #</th>
                                                            <th>Payment Amount</th>
                                                            <th>Proposal ID</th>
                                                            <th>Payment Status</th>
                                                            <th>Payment Date</th>
                                                        </tr>
                                                    </thead>
                                                    <?php
                    $i=1;
                    $payments=$db->getPayments();
                    foreach($payments as $payment){
            ?>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $i;?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $payment->get_id();?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $payment->get_coNum();?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $payment->get_amount();?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $payment->get_proposal();?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $payment->get_status();?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $payment->get_date();?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <?php
                        ++$i;
                    }
                }
                else if($_GET["id"]=="Denied Payments"){
            ?>
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Payment ID</th>
                                                                    <th>Company Company #</th>
                                                                    <th>Payment Amount</th>
                                                                    <th>Proposal ID</th>
                                                                    <th>Payment Status</th>
                                                                    <th>Payment Date</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                    $i=1;
                    $payments=$db->deniedPayments();
                    foreach($payments as $payment){
            ?>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $i;?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $payment->get_id();?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $payment->get_coNum();?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $payment->get_amount();?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $payment->get_proposal();?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $payment->get_status();?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $payment->get_date();?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <?php
                        ++$i;
                    }
                }
                else if($_GET["id"]=="Totals"){
            ?>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Number of Payments</th>
                                                                            <th>Total Payments</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <?php
                    $total=$db->totals();
            ?>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <?php echo $total['number']?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $total['total'];?>
                                                                                </td>
                                                                            </tr>
                                                                            <?php
                }
                else if($_GET["id"]=="Dashboard"){
                    //calculate number of customers
                    $nb_customers=0;
                    $customers=$db->getCustomers();
                    foreach($customers as $customer){
                        $nb_customers++;
                    }
                    
                    //calculate number of contractors
                    $nb_contractors=0;
                    $contractors=$db->getContractors();
                    foreach($contractors as $contractor){
                        $nb_contractors++;
                    }
            ?>
                <!-- CHART DRAWING MATE -->
                <canvas class="my-4 chartjs-render-monitor" id="cust_contr" width="1522" height="642" style="display: block; height: 514px; width: 514px;"></canvas>
                <?php
                }
                  ?>
                                                                        </tbody>
                            </table>
                        </div>
                        <?php
                }
            }
        }
            ?>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../bootstrap4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="../bootstrap4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="../bootstrap4.0.0/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()

    </script>

    <!-- Graphs GRAPHING MATE 
        http://www.chartjs.org/docs/latest/getting-started/
    --------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    
    <script>
    var gtx=document.getElementById("cust_contr");
        var chart=new Chart(gtx,{"type":"doughnut","data":{"labels":["Customers","Contractors"],"datasets":[{"label":"CustomersVSContractors","data":[<?php echo $nb_customers;?>,<?php echo $nb_contractors;?>],"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)"]}]}});
    </script>
    
    <!-- Graphs GRAPHING MATE-------------------->
    

    

<script type="text/javascript">
    
    /*--This JavaScript method for Print command--*/
    
    function PrintDoc() {

        var toPrint = document.getElementById('printar');

        var popupWin = window.open('', '_blank', 'width=1200,height=650,location=no,left=20px');

        popupWin.document.open();

        popupWin.document.write('<!DOCTYPE html><html><head><title>Report 1</title><link rel="stylesheet" type="text/css"  href="print.css"/><link href="../bootstrap4.0.0/dist/css/bootstrap.min.css" rel="stylesheet"></head><body onload="window.print()">')

        popupWin.document.write(toPrint.innerHTML);

        popupWin.document.write('</html>');

        popupWin.document.close();

    }
</script>

</body>

</html>


<!-- TO DO  -------
    >> add approvals to contractors
-->
