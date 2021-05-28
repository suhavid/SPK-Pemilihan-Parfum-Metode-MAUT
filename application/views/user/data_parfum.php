<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/frontend/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/frontend/img/favicon.png">
  <title>
    SPK Pemilihan Parfum
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url();?>assets/frontend/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/frontend/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url();?>assets/frontend/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/frontend/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>assets/frontend/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/frontend/css/custom.css" rel="stylesheet" />
  <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<style>
    table,
    tr,
    td,
    th {
        text-align: center;

    }
    .table td,
    .table th {
        vertical-align: middle;
    }
</style>

<body class="landing-page">     
      <!-- Navbar primary -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-custom-2 mt-4">
        <div class="container">
          <a class="navbar-brand" href="<?= base_url('user');?>">
          	<img src="<?php echo base_url();?>assets/frontend/img/brand/whites.png" height="80" width="110">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-primary">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="./index.html">
                    <img src="./assets/img/brand/blue.png">
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item">
            <a href="<?= base_url('user/data_parfum');?>" class="nav-link" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Data Parfum</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/perhitungan');?>" class="nav-link" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Perhitungan</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/metode_perhitungan');?>" class="nav-link" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Perhitungan Filtering</span>
            </a>
          </li>    
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" data-toggle="tooltip" title="Follow us on Twitter">
              <i class="fa fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" data-toggle="tooltip" title="Star us on Github">
              <i class="fa fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
          <li class="nav-item d-none d-lg-block ml-lg-4">
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Auth');?>" class="nav-link" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="btn btn-sm btn-primary">Login</span>
            </a>
          </li>
        </ul>
          </div>
        </div>
      </nav>
  <!-- End Navbar -->

  <div class="container"><br><br>
   <div class="row">
	<div class="col-md-12">	 
	 <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Data Parfum </b></h5>
                  </div>
                </div>
              </div>
	              <div class="card-body">
	                <table border="border-left-info" class="table table-striped table-bordered" id="example" width="100%"
	                  cellspacing="0">
			            <thead align="center">
			                <tr>
			                     <th>No</th>
			                     <th>Nama Parfum</th>
			                     <th>Harga</th>
			                     <th>Jenis Aroma</th>
			                     <th>Komposisi</th>
			                     <th>Ketahanan</th>
			                </tr>
			            </thead>
			            <tbody>
			            <?php
 			                $no = 1;
			                foreach ($alternatif as $row) { ?>
			                    <tr>
			                        <td><?php echo $no++ ?></td>
			                        <td><?php echo $row->nama_alternatif; ?></td>
			                        <td>Rp.<?php echo $row->harga; ?></td>
			                        <td><?php echo $row->jenis_aroma; ?></td>
			                        <td><?php echo $row->komposisi; ?></td>
			                        <td><?php echo $row->ketahanan; ?></td>
			                </tr>
			            <?php } ?>
			            </tbody>
	        		</table>
	    	   	 </div>
             </div>
   	       </div>
         </div>
        </div>
      </div>
    </div>
   </div>
 </div>

   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

   <script type="text/javascript">
   	$(document).ready(function() {
    $('#example').DataTable();
	} );
    </script>

  </body>
</html>

   