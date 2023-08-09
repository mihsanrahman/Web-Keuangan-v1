<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Aset</h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2" data-toggle="modal" data-target="#newAsetModal"><i class="fas fa-plus fa-sm" data-toggle="modal" data-target="#newAsetModal"></i> Tambah Aset Baru</a>
            
            </div>
            <div class="card-body">
                <table class="table table-hover" id="dataTable">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col-md-6">Nama Aset</th>
                                  <th scope="col">Tanggal Perolehan</th>
                                  <th scope="col">Unit</th>
                                  <th scope="col">Umur Manfaat (Bulan)</th>
                                  <th scope="col">Harga Perolehan</th>
                                  <th scope="col">Akumulasi Penyusutan Perbulan</th>
                                </tr>
    
                              </thead>
                              <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($id as $id) : ?>

                                <tr>
                                  <th scope="row"><center><?= $i; ?></th>
                                  <td><?= $id['nama_aset']; ?></td>
                                  <td><?= $id['tanggal_perolehan']; ?></td>
                                  <td><?= $id['jumlah_unit']; ?></td>
                                  <td><?= $id['umur_manfaat']; ?></td>
                                  <td><?= "Rp " . number_format($id['harga_perolehan'],0,',','.'); ?></td>
                                  <td><?= "Rp " . number_format($id['akumulasi_penyusutan'],0,',','.'); ?></td>

                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="newAsetModal" tabindex="-1" aria-labelledby="newAsetModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newAsetModalLabel">Tambah Aset Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('data/tambahaset'); ?>" method="post" id="formD" name="formD" >
      <div class="modal-body">
          <div class="form-group">
            <label>Nama Aset :</label>
            <input type="text" class="form-control" id="nama_aset" name="nama_aset">
          </div>
          <div class="form-group">
            <label>Tanggal Perolehan :</label>
            <input type="date" class="form-control" id="tanggal_perolehan" name="tanggal_perolehan">
          </div>
          <div class="form-group">
            <label>Jumlah Unit :</label>
            <input type="text" class="form-control" id="jumlah_unit" name="jumlah_unit" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">
          </div>
          <div class="form-group">
            <label>Umur Manfaat (Bulan) :</label>
            <input type="text" class="form-control" id="umur_manfaat" name="umur_manfaat" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">
          </div>
          <div class="form-group">
            <label>Harga Perolehan :</label>
            <input type="text" class="form-control" id="harga_perolehan" name="harga_perolehan" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">
          </div>
          <div class="form-group">
            <label>Akumulasi Penyusutan (Perbulan) :</label>
            <input type="text" class="form-control" id="akumulasi_penyusutan" name="akumulasi_penyusutan" readonly="readonly">
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      <script type="text/javascript" language="Javascript">
   harga_perolehan = document.formD.harga_perolehan.value;
   document.formD.akumulasi_penyusutan.value = harga_perolehan;
   jumlah_unit = document.formD.jumlah_unit.value;
   document.formD.akumulasi_penyusutan.value = jumlah_unit;
   umur_manfaat = document.formD.umur_manfaat.value;
   document.formD.akumulasi_penyusutan.value = umur_manfaat;

   function OnChange(value){
     harga_perolehan = document.formD.harga_perolehan.value;
     jumlah_unit = document.formD.jumlah_unit.value;
     umur_manfaat = document.formD.umur_manfaat.value;

     akumulasi_penyusutan = harga_perolehan * jumlah_unit / umur_manfaat;
     document.formD.akumulasi_penyusutan.value = akumulasi_penyusutan;
   }
 </script>
      </form>
    </div>
  </div>
</div>