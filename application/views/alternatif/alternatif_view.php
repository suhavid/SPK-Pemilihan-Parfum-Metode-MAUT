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
                    <button type="button" class="btn btn-gradient-success mb-2" data-toggle="modal" data-target="#addModal"><i class="feather icon-user-plus"></i>Tambah Data</button>
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
                     <th>Harga</th>
                     <th>Jenis Aroma</th>
                     <th>Komposisi</th>
                     <th>Ketahanan</th>
                     <th>Aksi</th>
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
                        <td>
                        <a  data-toggle="modal" data-target="#editModal<?php echo $row->id_alternatif; ?>"
                         href="javascript:;" class="btn btn-sm btn-gradient-warning" class="feather icon-edit">
                             <i class="feather icon-edit"></i>Edit
                         </a>
                            <?php echo anchor("alternatif/hapus/$row->id_alternatif}", "<i class='feather icon-trash-2'></i>Hapus", ['class' => 'btn btn-sm btn-gradient-danger remove-data']) ?>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <a class="btn btn-gradient-secondary" href="<?php echo base_url('alternatif/pdf'); ?>"><i class="fa fa-file"></i>Export PDF</a>

    </div>
    
    <!-- Modal Add alternatif-->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data alternatif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
	        <form class="form-horizontal" action="<?php echo base_url('alternatif/tambah')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
            
                <div class="form-group">
                    <label>Nama Alternatif</label>
                    <input type="text" class="form-control" name="nama_alternatif" placeholder="Masukan Nama Alternatif" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
                
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Masukan Harga" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>

                <div class="form-group">
                    <label for="jenis_aroma">Jenis Aroma</label>
				    <select class="form-control" id="jenis_aroma" name="jenis_aroma">
				      <option value="">--Pilih Jenis Aroma--</option>
				      <option value="Lemah">Lemah</option>
				      <option value="Sedang">Sedang</option>
				      <option value="Kuat">Kuat</option>
				    </select>
                </div>

                <div class="form-group">
                    <label for="komposisi">Komposisi</label>
				    <select class="form-control" id="komposisi" name="komposisi">
				      <option value="">--Pilih Komposisi--</option>
				      <option value="25% Bibit : 75% Alkohol">25% Bibit : 75% Alkohol</option>
				      <option value="50% Bibit : 50% Alkohol">50% Bibit : 50% Alkohol</option>
				      <option value="75% Bibit : 25% Alkohol">75% Bibit : 25% Alkohol</option>
				    </select>
                </div>
                <div class="form-group">
                    <label for="ketahanan">Ketahanan</label>
				    <select class="form-control" id="ketahanan" name="ketahanan">
				      <option value="">--Pilih Ketahanan--</option>
				      <option value="< 2Jam">< 2Jam</option>
				      <option value=">= 2Jam dan < 5Jam">>= 2Jam dan < 5Jam</option>
				      <option value=">= 5Jam dan < 8Jam">>= 5Jam dan < 8Jam</option>
				      <option value=">= 8Jam">>= 8Jam</option>
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
    <!-- End Modal Add alternatif-->
    
<!-- Modal Ubah -->
<?php  $no = 0;
foreach ($alternatif as $row) : $no++; ?>
 <div class="modal fade" id="editModal<?php echo $row->id_alternatif; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Alternatif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
	        <form class="form-horizontal" action="<?php echo base_url('alternatif/ubah')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
            <input type="hidden" readonly value="<?php echo $row->id_alternatif;?>" name="id_alternatif">
                
                <div class="form-group">
                    <label>Nama Alternatif</label>
                    <input type="text" class="form-control" name="nama_alternatif" value="<?php echo $row->nama_alternatif;?>" placeholder="Masukan Nama Alternatif" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
                
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" value="<?php echo $row->harga;?>" placeholder="Masukan Harga" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>


                <div class="form-group">
                    <label for="jenis_aroma">Jenis Aroma</label>
                    <select name="jenis_aroma" id="jenis_aroma" class="form-control" required>
                      <option value="">--Pilih Jenis Aroma--</option>
                      <option value="Lemah" <?php if($row->jenis_aroma=='Lemah'){echo "selected";} ?>>Lemah</option>
                      <option value="Sedang" <?php if($row->jenis_aroma=='Sedang'){echo "selected";} ?>>Sedang</option>
                      <option value="Kuat" <?php if($row->jenis_aroma=='Kuat'){echo "selected";} ?>>Kuat</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="komposisi">Komposisi</label>
                    <select name="komposisi" id="komposisi" class="form-control" required>
                      <option value="">--Pilih Komposisi--</option>
                      <option value="25% Bibit : 75% Alkohol" <?php if($row->komposisi=='25% Bibit : 75% Alkohol'){echo "selected";} ?>>25% Bibit : 75% Alkohol</option>
                      <option value="50% Bibit : 50% Alkohol" <?php if($row->komposisi=='50% Bibit : 50% Alkohol'){echo "selected";} ?>>50% Bibit : 50% Alkohol</option>
                      <option value="75% Bibit : 25% Alkohol" <?php if($row->komposisi=='75% Bibit : 25% Alkohol'){echo "selected";} ?>>75% Bibit : 25% Alkohol</option>
                    </select></div>

                <div class="form-group">
                    <label for="ketahanan">Ketahanan</label>
                    <select class="form-control" id="ketahanan" name="ketahanan">
                      <option value="">--Pilih Ketahanan--</option>
                      <option value="< 2Jam" <?php if($row->ketahanan=='< 2Jam'){echo "selected";} ?>>< 2Jam</option>
                      <option value=">= 2Jam dan < 5Jam" <?php if($row->ketahanan=='>= 2Jam dan < 5Jam'){echo "selected";} ?>>>= 2Jam dan < 5Jam</option>
                      <option value=">= 5Jam dan < 8Jam"<?php if($row->ketahanan=='>= 5Jam dan < 8Jam'){echo "selected";} ?>> >= 5Jam dan < 8Jam</option>
                      <option value=">= 8Jam" <?php if($row->ketahanan=='>= 8Jam'){echo "selected";} ?>>>= 8Jam</option>
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
