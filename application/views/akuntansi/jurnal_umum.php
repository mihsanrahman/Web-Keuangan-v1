<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Jurnal Umum</h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
            <a href="<?= base_url('statements/journal_voucher') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2"><i class="fas fa-plus fa-sm"></i> Tambah Jurnal</a>
            <a href="<?= base_url('statements/journal_voucher_adj') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2"><i class="fas fa-plus fa-sm"></i> Tambah Penyesuaian</a>
            <div style='float: right;'>
                    <button onclick="printDiv('print-section')" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print fa-sm"></i> Cetak</button>
                </div><br><br>
                <a class="my-5 font-weight-bold text-secondary"><b>Cari Periode Waktu</b></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col my-0">
                        <div class="box-body box-bg ">
                            <div class="make-container-center">
                                <?php
                $attributes = array('id'=>'general_journal','method'=>'post','class'=>'');
            ?>
            <?php echo form_open_multipart('statements',$attributes); ?>
            <div class="row no-print">
                <div class="col-md-3 ">
                    <div class="form-group">
                        <?php echo form_label('Dari Tanggal'); ?>
                        <?php
                            $data = array('class'=>'form-control input-lg','type'=>'date','name'=>'from','reqiured'=>'');
                            echo form_input($data);
                        ?>
                    </div>
                </div>                    
                <div class="col-md-3 ">
                    <div class="form-group">
                        <?php echo form_label('Sampai Tanggal'); ?>
                        <?php
                            $data = array('class'=>'form-control input-lg','type'=>'date','name'=>'to','reqiured'=>'');
                            echo form_input($data);
                        ?>
                    </div>
                </div>
                <div class="col-md-3 ">
                <div class="form-group" style="margin-top: 8px;">
                        <?php
                            $data = array('class'=>'d-none d-sm-inline-block btn btn-danger shadow-sm mt-3','type' => 'submit','name'=>'btn_submit_customer','value'=>'true', 'content' => '<i  aria-hidden="true"></i> 
                                Tampilkan Jurnal');
                            echo form_button($data);
                         ?>  
                    </div>
                </div>      
            <?php form_close(); ?>
                                    </div>            
                                </div>
                            </div>
        <div class="card">
            <div class="card-header">
                
            </div>
            <div class="card-body">
                <div class="box" id="print-section">
                <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                   <h5 style="text-align:center"><b>JURNAL UMUM</b></h5>
                   <h5 style="text-align:center"><b><br></b></h5>
                   <h5 style="text-align:center"><b>Periode</b> <?php echo $from; ?> <b> s/d </b> <?php echo $to; ?>
                   </h5>
                </div>
            <div class="col-md-3"></div>  
        </div>
        <?php 
        if($transaction_records != NULL)
        {
        ?>
        <div class="row">
            <table class="table table-hover" id="dataTable">
                <thead class="ledger_head">
                     <th class="col-md-2">TANGGAL</th>
                     <th class="col-md-6">NAMA AKUN DAN TRANSAKSI</th>
                     
                     <th class="col-md-2">DEBIT</th>
                     <th class="col-md-2">KREDIT</th>
                </thead>
                <tbody>   
                        <?php echo $transaction_records; ?>
                </tbody>
            </table>
        </div>
        <?php 
            }
            else
            {
                echo '<p class="text-center"> </p>';
            }
        ?>
          </div>
        </div>
          </div>
          </div>
        </div>
    </div>
      </div>
            </div>
        </div>            
    </div>
</div>
    </section>
</div>

