<style>
    table,
    tr,
    td,
    th {
        text-align: center;

    }

    .img-fluid {
        max-height: 75px;
        min-height: 75px;
        max-width: 75px;
        min-width: 75px;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }
</style>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10"><?= $title ?></h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!"><?= $title ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5><?= $title ?></h5>
                <div class="card-header-right">
                	<button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                    </button>
                    <div class="btn-group card-option">
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
            <thead>
                <tr>
                     <th>No</th>
                     <th>Nama kriteria</th>
                     <th>Bobot Kriteria</th>
                     <th>Aksi</th>
                </tr>
            </thead>
            <tbody>


            <?php
                $no = 1;
                foreach ($kriteria as $row) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->nama_kriteria ?></td>
                        <td><?php echo $row->bobot_kriteria ?></td>
                        <td>
                         <a  data-toggle="modal" data-target="#editModal<?php echo $row->id_kriteria; ?>"
                         href="javascript:;" class="btn btn-sm btn-gradient-warning" class="feather icon-edit">
                             <i class="feather icon-edit"></i>Ubah Bobot
                         </a>
                         <a  data-toggle="modal" data-target="#detailModal<?php echo $row->id_kriteria; ?>"
                         href="javascript:;" class="btn btn-sm btn-gradient-primary" class="feather icon-eye">
                             <i class="feather icon-eye"></i>Detail
                         </a>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

         <a class="btn btn-gradient-secondary" href="<?php echo base_url('kriteria/pdf'); ?>"><i class="fa fa-file"></i>Export PDF</a>

    </div>

<!-- Modal Ubah -->
<?php  $no = 0;
foreach ($kriteria as $row) : $no++; ?>
        <div class="modal fade" id="editModal<?php echo $row->id_kriteria; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
	        <form class="form-horizontal" action="<?php echo base_url('kriteria/ubah')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
            <input type="hidden" readonly value="<?php echo $row->id_kriteria;?>" name="id_kriteria">
            
                <div class="form-group">
                    <label>Nama kriteria</label>
                    <input type="text" class="form-control" name="nama_kriteria" placeholder="Masukan Nama kriteria" value="<?php echo $row->nama_kriteria;?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" readonly>
                </div>
                
                <div class="form-group">
                    <label>Bobot kriteria</label>
                    <input type="number" min="10" max="100" class="form-control" name="bobot_kriteria" placeholder="Masukan Bobot kriteria" value="<?php echo $row->bobot_kriteria;?>" required>
                </div>

            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
   <?php endforeach; ?>
 <!-- END Modal Ubah -->
    
<!-- Modal Detail -->
<?php  $no = 0;
foreach ($kriteria as $row) : $no++; ?>
        <div class="modal fade" id="detailModal<?php echo $row->id_kriteria; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Tabel Sub Kriteria Dari <b><?php echo $row->nama_kriteria;?></b></h4>
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
			</button>
			</div>

			<div class="modal-body">

			<div class="table-responsive">
			  <table class="table table-bordered table-hover">
			    <thead>
			      <th>Sub Kriteria</th>
			      <th>Nilai Bobot Sub Kriteria</th>
			    </thead>
			    <tbody>
			     <?php
                 if($row->id_kriteria == 1) {
                    ?>
                    <tr>
                        <td>Sedang</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Kuat</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Lemah</td>
                        <td>1</td>
                    </tr>
                    <?php
                 }
                 ?>

                 <?php
                 if($row->id_kriteria == 2) {
                    ?>
                    <tr>
                        <td>< 2 Jam</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>>= 2 Jam dan  < 5 Jam</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>>= 5 Jam dan < 8Jam</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>> 8 jam</th>
                        <td>4</td>
                    </tr>
                    <?php
                 }
                 ?>
                                 <?php
                 if($row->id_kriteria == 3) {
                    ?>
                    <tr>
                        <td>25% Bibit : 75% Alkohol</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>50% Bibit : 50% Alkohol</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>75% Bibit : 25% Alkohol</td>
                        <td>3</td>
                    </tr>
                    <?php
                 }
                 ?>

                 <?php
                 if($row->id_kriteria == 4) {
                    ?>
                    <tr>
                        <td>< Rp.15.000</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>>= Rp.15.000 dan < Rp.50.000</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>>= Rp.50.000 dan < Rp.150.000</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>>= Rp.150.000 dan < Rp.400.000</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>> Rp.400.000</td>
                        <td>1</td>
                    </tr>
                    <?php
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
 <!-- END Modal Detail -->

</body>
</html>
