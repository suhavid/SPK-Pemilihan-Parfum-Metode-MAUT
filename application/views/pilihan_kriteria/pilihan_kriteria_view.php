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
                     <th>Kriteria</th>
                     <th>Nama Pilihan Kriteria</th>
                     <th>Nilai</th>
                     <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                foreach ($pilihan_kriteria as $row) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>           
                        <td><?php echo $row->nama_kriteria ?></td>
                        <td><?php echo $row->nama_pilihan_kriteria ?></td>
                        <td><?php echo $row->nilai ?></td>
                        <td>
                         <a data-toggle="modal" data-target="#editModal<?php echo $row->id_pilihan_kriteria; ?>"
                         href="javascript:;" class="btn btn-sm btn-gradient-warning" class="feather icon-edit">
                            <i class="feather icon-edit"></i>Edit
                         </a>
                            <?php echo anchor("pilihan_kriteria/hapus/$row->id_pilihan_kriteria}", "<i class='feather icon-trash-2'></i>Hapus", ['class' => 'btn btn-sm btn-gradient-danger remove-data']) ?>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <a class="btn btn-gradient-secondary" href="<?php echo base_url('pilihan_kriteria/pdf'); ?>"><i class="fa fa-file"></i>Export PDF</a>

    </div>
    
    <!-- Modal Add pilihan_kriteria-->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data pilihan_kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
	        <form class="form-horizontal" action="<?php echo base_url('pilihan_kriteria/tambah')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
            
                <div class="form-group">
                    <label>Kriteria</label>
                    <select class="form-control" name="kriteria_id" id="kriteria_id">
                    	<option value="">-- Pilih Kriteria --</option>
                    	<?php foreach ($kriteria as $row) : ?> 
                    	<option value="<?php echo $row->id_kriteria;?>"><?php echo $row->nama_kriteria;?></option>
                    	<?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Pilihan Kriteria</label>
                    <input type="text" class="form-control" name="nama_pilihan_kriteria" placeholder="Masukan Nama Pilihan Kriteria" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
                
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="number" class="form-control" name="nilai" placeholder="Masukan Nilai" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
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
    <!-- End Modal Add pilihan_kriteria-->
    
<!-- Modal Ubah -->
<?php  $no = 0;
foreach ($pilihan_kriteria as $row) : $no++; ?>
 <div class="modal fade" id="editModal<?php echo $row->id_pilihan_kriteria;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data pilihan_kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
	        <form class="form-horizontal" action="<?php echo base_url('pilihan_kriteria/ubah')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
            <input type="hidden" readonly value="<?php echo $row->id_pilihan_kriteria;?>" name="id_pilihan_kriteria">
                
                <div class="form-group">
                    <label>Nama Pilihan Kriteria</label>
                    <input type="text" class="form-control" name="nama_pilihan_kriteria" value="<?php echo $row->nama_pilihan_kriteria;?>" placeholder="Masukan Nama Pilihan Kriteria" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">    
                </div>
                
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="number" class="form-control" name="nilai" value="<?php echo $row->nilai;?>" placeholder="Masukan Nilai" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>


                <div class="form-group">
                    <label>Kriteria</label>
                    <select class="form-control" name="kriteria_id" id="kriteria_id" required>
                    	<option value="<?php echo $row->kriteria_id;?>"><?php echo $row->nama_kriteria;?>
                    	<?php foreach ($kriteria as $row) { ?> 
                    	<option value="<?php echo $row->id_kriteria;?>"><?php echo $row->nama_kriteria;?></option>
                    	<?php } ?>
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
  <?php endforeach ?>
 <!-- END Modal Ubah -->
</body>
</html>
