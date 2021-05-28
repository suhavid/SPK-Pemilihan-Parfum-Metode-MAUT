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
                    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal"><i class="feather icon-user-plus"></i>Tambah Data</button>
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
                     <th>Nama Alternatif</th>
                     <th>Kriteria</th>
                     <th>Pilihan Kriteria</th>
                     <th>Nilai</th>
                     <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                foreach ($nilai as $row) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->nama_alternatif ?></td>           
                        <td><?php echo $row->nama_kriteria ?></td>
                        <td><?php echo $row->nama_pilihan_kriteria ?></td>
                        <td><?php echo $row->nilai ?></td>
                        <td>
                         <a  data-toggle="modal" data-target="#editModal<?php echo $row->id_nilai; ?>"
                         href="javascript:;" class="btn btn-sm btn-gradient-warning" class="feather icon-edit">
                             <i class="feather icon-edit"></i>Edit
                         </a>
                            <?php echo anchor("nilai/hapus/$row->id_nilai}", "<i class='feather icon-trash-2'></i>Hapus", ['class' => 'btn btn-sm btn-gradient-danger remove-data']) ?>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <a class="btn btn-gradient-secondary" href="<?php echo base_url('nilai/pdf'); ?>"><i class="fa fa-file"></i>Export PDF</a>

    </div>
    
    <!-- Modal Add nilai-->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
	        <form class="form-horizontal" action="<?php echo base_url('nilai/tambah')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
            
                <div class="form-group">
                    <label>Alternatif</label>
                    <select class="form-control" name="alternatif_id" id="alternatif_id" required>
                    	<option value="">-- Pilih Alternatif --</option>
                    	<?php foreach ($alternatif as $row) : ?> 
                    	<option value="<?php echo $row->id_alternatif;?>"><?php echo $row->nama_alternatif;?></option>
                    	<?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kriteria</label>
                    <select class="form-control" name="kriteria_id" id="kriteria_id" required>
                    	<option value="">-- Pilih Kriteria --</option>
                    	<?php foreach ($kriteria as $row) : ?> 
                    	<option value="<?php echo $row->id_kriteria;?>"><?php echo $row->nama_kriteria;?></option>
                    	<?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilihan Kriteria</label>
                    <select class="form-control" name="pilihan_kriteria_id" id="pilihan_kriteria_id" required>
                    	<option value="">-- Pilihan Kriteria --</option>
                    	<?php foreach ($pilihan_kriteria as $row) : ?> 
                    	<option value="<?php echo $row->id_pilihan_kriteria;?>"><?php echo $row->nama_kriteria;?> - <?php echo $row->nama_pilihan_kriteria;?> - Nilai: <?php echo $row->nilai;?> </option>
                    	<?php endforeach; ?>
                    </select>
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
    <!-- End Modal Add nilai-->
    
<!-- Modal Ubah -->
<?php  $no = 0;
foreach ($nilai as $row) : $no++; ?>
 <div class="modal fade" id="editModal<?php echo $row->id_nilai; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
	        <form class="form-horizontal" action="<?php echo base_url('nilai/ubah')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
            <input type="hidden" readonly value="<?php echo $row->id_nilai;?>" name="id_nilai">
                <div class="form-group">
                    <label>Alternatif</label>
                    <select class="form-control" name="alternatif_id" required>
                    	<?php if ($alternatif !=NULL): ?> 
                        <?php foreach ($alternatif as $key => $value) {
                            $selected = "";
                            if($row->alternatif_id == $value->id_alternatif) {
                                $selected = "selected";
                            }
                        ?>
                            <option value="<?php echo $value->id_alternatif;?>" <?php echo $selected ?>><?php echo $value->nama_alternatif;?></option>
                        <?php
                        } ?>
                    	
                    	<?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kriteria</label>
                    <select class="form-control" name="kriteria_id" required>
                    	<?php if ($kriteria !=NULL): ?> 
                        <?php foreach ($kriteria as $key => $value) {
                            $selected = "";
                            if($row->kriteria_id == $value->id_kriteria) {
                                $selected = "selected";
                            }
                        ?>
                            <option value="<?php echo $value->id_kriteria;?>" <?php echo $selected ?>><?php echo $value->nama_kriteria;?></option>
                        <?php
                        } ?>
                    	<?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilihan Kriteria</label>
                    <select class="form-control" name="pilihan_kriteria_id" value="<?php echo $row->pilihan_kriteria_id;?>" required>
                        <?php foreach ($pilihan_kriteria as $key => $value) {
                            $selected = "";
                            if($row->pilihan_kriteria_id == $value->id_pilihan_kriteria) {
                                $selected = "selected";
                            }
                        ?>
                            <option value="<?php echo $value->id_pilihan_kriteria;?>" <?php echo $selected ?>><?php echo $value->nama_kriteria;?> - <?php echo $value->nama_pilihan_kriteria;?> - Nilai: <?php echo $value->nilai;?></option>
                        <?php
                        } ?>

                    </select>
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
</body>
</html>
