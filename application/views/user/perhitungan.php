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
  <link rel="stylesheet" type="text/css" href="assets/backend/template/assets/plugins/sweetalert/js/sweetalert.css">
  <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/template/assets/plugins/sweetalert/js/sweetalert2.all.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" ></script>
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
 <!-- Close primary -->

      <div class="container"><br><br>
		<div class="row">
		 <div class="col-md-12">	 
		  <div class="card-body">

		 	    <div class="alert alert-info alert-dismissible fade show" role="alert">
			      <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
			      <span class="alert-inner--text"><strong>Perhitungan!</strong> Sistem Pendukung Keputusan Parfum Metode MAUT!</span>
			      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			      </button>

			    </div>
          <div class="row">
            <div class="col-md-6">
              <i>Inputkan Bobot Kriteria min 1, jumlah total tidak boleh melebihi 100</i>  
            </div>
          </div>
          <br>
            
            
	        <div class="dt-responsive table-responsive">
	          <table class="table table-hover table-bordered">
	           <form action="<?php echo base_url('user/save_perhitungan') ?>" method="POST">
              <thead>
                  <tr>
                       <th colspan="2" style="background-color: #00008B; color: white;"><center>INPUTKAN NILAI BOBOT KRITERIA</center></th>
                  </tr>
              </thead>
              <?php 
                foreach ($kriteria as $key => $value) {
              ?>
              <tr>
                <td>
                  <?php echo $value->nama_kriteria ?>
                </td>
                <td>
                  <input type="hidden" name="id_kriteria[]" value="<?php echo $value->id_kriteria ?>">
                  <input type="number" min="1" max="100" class="form-control" placeholder="Masukkan Nilai Disini" name="bobot_kriteria[]" value="<?php echo $value->bobot_kriteria ?>" required>
                </td>
              </tr>
              <?php
                }
              ?>
	            
				      <td colspan="2">
				        <input class="btn btn-primary" type="submit" name="proses" value="Proses Perhitungan">
				      </td>
			       </tr>
	            </tbody>
	           </form>
        	  </table>
         </div>
        </div>
      </div>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="card-body">
             <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th colspan="11" style="background-color: #00008B;
    color: white;"><center>NORMALISASI NILAI BOBOT KRITERIA</center></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <th>K1</th>
      <th>K2</th>
      <th>K3</th>
      <th>K4</th>
      <th>JUMLAH</th>
    </tr>
    <tr>
      <th>NILAI BOBOT KRITERIA</th>
      <?php 
        $sum = 0;
        foreach ($kriteria as $key => $value) {
          $sum += $value->bobot_kriteria;
      ?>
        <td><?php echo $value->bobot_kriteria ?></td>
      <?php
        }
      ?>
      <td><?php echo $sum ?></td>
    </tr>
    <tr>
      <th>HASIL NORMALISASI</th>
      <?php 
        $sum_normalisasi = 0;
        foreach ($kriteria as $key => $value) {
          $bobot_kriteria=$value->bobot_kriteria/$sum;
          $sum_normalisasi += $bobot_kriteria;
      ?>
        <td><?php echo round($bobot_kriteria, 2) ?></td>
      <?php
        }
      ?>
      <td><?php echo $sum_normalisasi ?></td>
    </tr>
<!-- menampilkan nilai kriteria dari array yang telah dibuat -->
  </tbody>
</table> 
           </div>
         </div>
       </div>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="card-body">
             <table class="table table-hover table-bordered">
               <thead>
                <tr>
                  <th colspan="11" style="background-color: #00008B;
                color: white;"><center>MATRIKS NILAI ALTERNATIF</center></th>
                </tr>
              </thead>
              <tbody>
    <tr>
      <th>NO</th>
      <th>ALTERNATIF</th>
      <?php foreach ($kriteria as $key => $value) {
      ?>
      <th>K<?php echo ($key + 1) ?></th>
      <?php
      } ?>
        
    </tr>
    
      <?php 
      $this->load->helper('alternatif');
        $no=1;
        foreach ($alternatif as $key => $value) {
      ?>
      <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $value->nama_alternatif; ?></td>
      <?php foreach ($kriteria as $key => $val) {
      ?>
          <td><?php echo get_nilai_alternatif($value->id_alternatif, $val->id_kriteria); ?></td>
        <?php
      }
      ?>
      
      </tr>
      <?php
        }
      ?>
    
             </table>
           </div>
         </div>
       </div>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="card-body">
             <table class="table table-hover table-bordered">
               <thead>
                <tr>
                  <th colspan="11" style="background-color: #00008B;
                color: white;"><center>TABEL NILAI MAX, MIN</center></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th></th>
                  <?php foreach ($kriteria as $key => $value) {
                  ?>
                  <th>K<?php echo ($key + 1) ?></th>
                  <?php
                  } ?>
                </tr>
                <tr>
                  <th>NILAI MAX</th>
                  <?php foreach ($kriteria as $key => $value) {
                  ?>
                  <td><?php echo get_nilai_max($value->id_kriteria); ?></td>
                  <?php
                  } ?>
                </tr>
                <tr>
                  <th>NILAI MIN</th>
                  <?php foreach ($kriteria as $key => $value) {
                  ?>
                  <td><?php echo get_nilai_min($value->id_kriteria); ?></td>
                  <?php
                  } ?>
                </tr>
              </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="card-body">
             <table class="table table-hover table-bordered">
               <thead>
                <tr>
                  <th colspan="11" style="background-color: #00008B;
                color: white;"><center>MATRIKS NORMALISASI NILAI ALTERNATIF</center></th>
                </tr>
              </thead>
              <tbody>
                <tr>
      <th>NO</th>
      <th>ALTERNATIF</th>
      <?php foreach ($kriteria as $key => $value) {
      ?>
      <th>K<?php echo ($key + 1) ?></th>
      <?php
      } ?>
        
    </tr>
                <?php 
      $this->load->helper('alternatif');
        $no=1;
        foreach ($alternatif as $key => $value) {
      ?>
      <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $value->nama_alternatif; ?></td>
      <?php foreach ($kriteria as $key => $val) {
      ?>
          <td><?php 
            $nilai_alternatif = get_nilai_alternatif($value->id_alternatif, $val->id_kriteria); 
            $nilai_max = get_nilai_max($val->id_kriteria);
            $nilai_min = get_nilai_min($val->id_kriteria);
            if($nilai_alternatif == "" || $nilai_alternatif == 0) {
              $nilai_alternatif = 0;
            }
            $nilai_alternatif_min = $nilai_alternatif - $nilai_min;
            $nilai_max_min = $nilai_max - $nilai_min;
            if($nilai_max_min == 0) {
              echo 0;
            } else {
              echo $nilai_alternatif_min / $nilai_max_min;  
            }
            
            
            ?>
              
          </td>
        <?php
      }
      ?>
      
      </tr>
      <?php
        }
      ?>
              </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
     <div class="container">
       <div class="col-md-12">
         <div class="card-body">
           <table class="table table-hover table-bordered">
               <thead>
                <tr>
                   <th colspan="11" style="background-color: #00008B;
                color: white;"><center>NILAI AKHIR</center></th>
                </tr>
              </thead>
              <tbody>
                <tr>
     <th>NO</th>
      <th>ALTERNATIF</th>
      <?php foreach ($kriteria as $key => $value) {
      ?>
      <th>K<?php echo ($key + 1) ?></th>
      <?php
      } ?>
        
    </tr>
                <?php 
      $this->load->helper('alternatif');
        $no=1;
        foreach ($alternatif as $key => $value) {
      ?>
      <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $value->nama_alternatif; ?></td>
      <?php foreach ($kriteria as $key => $val) {
      ?>
          <td><?php 

            $nilai_alternatif = get_nilai_alternatif($value->id_alternatif, $val->id_kriteria); 
            $nilai_max = get_nilai_max($val->id_kriteria);
            $nilai_min = get_nilai_min($val->id_kriteria);
            if($nilai_alternatif == "" || $nilai_alternatif == 0) {
              $nilai_alternatif = 0;
            }
            $nilai_alternatif_min = $nilai_alternatif - $nilai_min;
            $nilai_max_min = $nilai_max - $nilai_min;
            $matrix = 0;
            if($nilai_alternatif_min == 0 || $nilai_max_min == 0) {
              $matrix = 0;
            }  else {
              $matrix =  $nilai_alternatif_min / $nilai_max_min;
            }




            $nilai_bobot = get_nilai_bobot($val->id_kriteria);
            $nilai_normalisasi = round($nilai_bobot / $sum, 2);
            /*echo $matrix;
            echo '<br />';
            echo $nilai_normalisasi;*/
            echo $matrix * $nilai_normalisasi;

            ?>
              
          </td>
        <?php
      }
      ?>
      
      </tr>
      <?php
        }
      ?>
              </tbody>
             </table>
         </div>
       </div>
     </div>
     <div class="container">
       <div class="col-md-12">
         <div class="card-body">
           <table class="table table-hover table-bordered">
               <thead>
                <tr>
                  <th colspan="11" style="background-color: #00008B;
                color: white;"><center>RANGKING</center></th>
                </tr>
              </thead>
              <tbody>
                <tr>
      <th>NO</th>
      <th>ALTERNATIF</th>
      <th>HASIL</th>
      <th>DETAIL</th>
        
    </tr>
                <?php 
      $this->load->helper('alternatif');
        $no=1;
        $arRanking = [];
        foreach ($alternatif as $key => $value) {
          $rangking = 0;
          $id_alternatif = "";
          
          foreach ($kriteria as $key => $val) {
            $nilai_alternatif = get_nilai_alternatif($value->id_alternatif, $val->id_kriteria); 
            if($nilai_alternatif == "" || $nilai_alternatif == 0) {
              $nilai_alternatif = 0;
            }
            $nilai_bobot = get_nilai_bobot($val->id_kriteria);
            $rangking += $nilai_alternatif * $nilai_bobot;
            $id_alternatif .= $value->id_alternatif. ",";
          }

          $dataAlternatif = explode(",", $id_alternatif);

          foreach ($dataAlternatif as $key => $value) {

            if($key == 0) {
              array_push($arRanking, [
                "id_alternatif" => $value,
                "rangking" => $rangking
              ]);
            }
          }
          
        }
        usort($arRanking,function($first,$second){
          return $first['rangking'] < $second['rangking'];
        });
      ?>
      <?php foreach ($arRanking as $key => $value) { 
          if($key <= "4") {


        ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo get_nama_alternatif($value['id_alternatif']); ?></td>
            <td><?php echo $value['rangking'] ?></td>
            <td>
	            <a data-toggle="modal" data-target="#detailModal<?php echo $value['id_alternatif']; ?>"
		         href="javascript:;" class="btn btn-sm btn-primary">
		             <i class="feather icon-eye"></i>Detail
		        </a>
            </td>
          </tr>
      <?php } 
        }
      ?>
      
              </tbody>
             </table>
         </div>
       </div>
     </div>

     <div class="container">
       <div class="col-md-12">
         <div class="card-body">
           <table class="table table-hover table-bordered">
               <thead>
                <tr>
                  <th colspan="11" style="background-color: #00008B;
                color: white;"><center>Hasil Rekomendasi</center></th>
                </tr>
              </thead>
              <tbody>
                
                <?php 
      $this->load->helper('alternatif');
        $arRanking = [];
        foreach ($alternatif as $key => $value) {

          $rangking = 0;
          $id_alternatif = "";
          
          foreach ($kriteria as $key => $val) {
            $nilai_alternatif = get_nilai_alternatif($value->id_alternatif, $val->id_kriteria); 
            if($nilai_alternatif == "" || $nilai_alternatif == 0) {
              $nilai_alternatif = 0;
            }
            $nilai_bobot = get_nilai_bobot($val->id_kriteria);
            $rangking += $nilai_alternatif * $nilai_bobot;
            $id_alternatif .= $value->id_alternatif. ",";
          }

          $dataAlternatif = explode(",", $id_alternatif);

          foreach ($dataAlternatif as $key => $value) {

            if($key == 0) {
              array_push($arRanking, [
                "id_alternatif" => $value,
                "rangking" => $rangking
              ]);
            }
          }
          
        }
        
        usort($arRanking,function($first,$second){
          return $first['rangking'] < $second['rangking'];
        });
      ?>
      <?php foreach ($arRanking as $key => $value) { 
          if($key == "0") {


        ?>
          <tr><td>
            Hasilnya adalah alternatif
            <b><?php echo get_nama_alternatif($value['id_alternatif']); ?></b>
            dengan nilai optimasi
            <b><?php echo $value['rangking'] ?></b>
            yang terpilih
          </td></tr>
      <?php } 
      }
      ?>
      
              </tbody>
             </table>
         </div>
       </div>
     </div>

     <!-- Modal Detail -->
<?php  $no = 0;
foreach ($alternatif as $row) : $no++; ?>
        <div class="modal fade" id="detailModal<?php echo $row->id_alternatif; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Detail Alternatif</h4>
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
			</button>
			</div>

			<div class="modal-body">

			<div class="table-responsive">
			  <table class="table table-bordered table-hover">
			    <thead>
			      <th>Nama Alternatif</th>
			      <th>Harga</th>
			      <th>Jenis Aroma</th>
			      <th>Komposisi</th>
			      <th>Ketahanan</th>
			    </thead>
			    <tbody>
			     <?php
                foreach ($alternatif as $value) { 
                        if($value->id_alternatif == $row->id_alternatif) {

                        
                    ?>
			      <tr>
			         <td><?php echo $value->nama_alternatif ?></td>
                     <td><?php echo $value->harga ?></td>
                     <td><?php echo $value->jenis_aroma ?></td>
                     <td><?php echo $value->komposisi ?></td>
                     <td><?php echo $value->ketahanan ?></td>
			      </tr>
			    <?php } 
                    }
                ?>
			    </tbody>
			  </table>
			</div>

			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

			</div>

			</div>
			</div>
			</div>
   <?php endforeach; ?>

   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Cari Data Perhitungan </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- begin:: form pencarian -->
        <form method="post">
          <div>
            <div class="form-group">
              <label>Jenis Aroma</label>
              <select id="jenis_aroma" name="jenis_aroma" class="form-control"  required>
              <option value="Kuat">Kuat</option>
              <option value="Lemah">Lemah</option>
              <option value="Sedang">Sedang</option>
              </select>
            </div>
          </div>

          <input type="submit" name="proses" value="Proses" class="btn btn-success">
          <input type="submit" name="hitung_semua" value="Hitung Semua" class="btn btn-success">
        </form>
        <!-- end:: form pencarian -->

      </div>
    </div>
  </div>
</div>
 <!-- END Modal Detail -->

	  <?php if($this->session->flashdata('success') == "0") : ?>

	  <script>
	  Swal.fire(
	    'Error!',
	    'Proses Perhitungan Lebih Dari 100 !',
	    'error'
	  )
	    </script>

	 <?php endif;?>

	 <?php if($this->session->flashdata('success') == "1") : ?>

	  <script>
	  Swal.fire(
	    'Success!',
	    'Perhitungan Berhasil!',
	    'success'
	  )
	    </script>

	 <?php endif;?>

    </body>
   </html>

   