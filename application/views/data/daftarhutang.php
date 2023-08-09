<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Hutang</h3><br />
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header" style="display: none">
                <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2" data-toggle="modal" data-target="#newHutangModal"><i class="fas fa-plus fa-sm" data-toggle="modal" data-target="#newHutangModal"></i> Tambah Hutang Baru</a>
            </div>
            <div class="card-body">
               <table class="table table-hover" id="dataTable">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Tanggal</th>
                                  <th scope="col">Debit</th>
                                  <th scope="col">Kredit</th>
                                </tr>
    
                              </thead>
                              <tbody>
                                <?php $i = 0; ?>
                                <?php foreach($id as $id) : 
                                  $i++;
                                  $debitamount = 0;
                                  $creditamount = 0;
                                  $total_ledger =0;
                        
                                  if($id['type'] == 0)
                                  {
                                    $debitamount = $id['amount'];        
                                    $total_ledger = $total_ledger+$debitamount;
                                  }
                                  else if($id['type'] == 1)
                                  {
                                    $creditamount = $id['amount'];        
                                    $total_ledger = $total_ledger-$creditamount;
                                  }
                                  else
                                  {

                                  }?>
                                <tr>
                                  <th scope="row"><?= $i; ?></th>
                                  <td><?= $id['naration']; ?></td>
                                  <td><?= $id['date']; ?></td>
                                  <td><?= "Rp " . number_format($debitamount,0,',','.'); ?></td>
                                  <td><?= "Rp " . number_format($creditamount,0,',','.'); ?></td>
                                </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="newHutangModal" tabindex="-1" aria-labelledby="newHutangModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newPiutangModalLabel">Tambah Hutang Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('data/tambahhutang'); ?>" method="post" id="formD" name="formD" >
      <div class="modal-body">
          <div class="form-group">
            <label>Nama Hutang :</label>
            <input type="text" class="form-control" id="nama_hutang" name="nama_hutang">
          </div>
          
          <div class="form-group">
            <label>Tanggal Hutang :</label>
            <input type="date" class="form-control" id="tanggal_hutang" name="tanggal_hutang" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">
          </div>
          <div class="form-group">
            <label>Debit :</label>
            <input type="text" class="form-control" id="penambahan" name="penambahan" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">
          </div>
          <div class="form-group">
            <label>Kredit :</label>
            <input type="text" class="form-control" id="pengurangan" name="pengurangan" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">
          </div>
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      
      </form>


      
 

    </div>
  </div>
</div>