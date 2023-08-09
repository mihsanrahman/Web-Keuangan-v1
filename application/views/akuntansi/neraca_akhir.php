<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Neraca Saldo Akhir</h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a class="my-5 font-weight-bold text-secondary"><b>Cari Periode Waktu</b></a>
                <div style='float: right;'>
                    <button onclick="printDiv('print-section')" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print fa-sm"></i> Cetak</button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col my-0">
                        <div class="box-body box-bg ">
                            <div class="make-container-center">
                                <?php
                $attributes = array('id'=>'leadgerAccounst','method'=>'post','class'=>'');
            ?>
            <?php echo form_open_multipart('statements/trail_balance_final',$attributes); ?>
            <div class="row no-print">
                <div class="col-md-3">
                    <div class="form-group">
                        <?php echo form_label('Pilih Tahun Periodik'); ?>
                        <select class="form-control input-lg" name="year">
                            <option  value="<?php echo date('Y');?>"> Tahun Sekarang</option>
                            <option  value="2019"> 2019</option>
                            <option  value="2020"> 2020</option>
                            <option  value="2021"> 2021</option>
                            <option  value="2022"> 2022</option>
                            <option  value="2023"> 2023</option>
                            <option  value="2024"> 2024</option>
                            <option  value="2025"> 2025</option>
                            <option  value="2026"> 2026</option>
                        </select>
                    </div>
                </div>                    
                <div class="col-md-3">
                    <div class="form-group" style="margin-top:8px;">
                        <?php
                            $data = array('class'=>'d-none d-sm-inline-block btn btn-danger shadow-sm mt-3','type' => 'submit','name'=>'btn_submit_customer','value'=>'true', 'content' => '<i  aria-hidden="true"></i> 
                                Lihat Neraca Saldo');
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
                   <h5 style="text-align:center"><b>NERACA SALDO SETELAH PENYESUAIAN</b></h5>
                   <h5 style="text-align:center"><b><br></b></h5>
                   <h5 style="text-align:center">Tahun :  <?php echo $year; ?> 
                   </h5>
                </div>
            <div class="col-md-3"></div>  
        </div>
        <div class="row">
            <table class="table table-striped table-hover">
                     <thead>
                         <tr class="balancesheet-header">
                             <th class="col-md-8">NAMA AKUN</th>
                             <th class="col-md-2">DEBIT</th>
                             <th class="col-md-2">KREDIT</th>
                         </tr>
                     </thead>
                     <tbody>
                        <?php echo $trail_records; ?>
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
        </div>            
    </div>
</div>
    </section>
</div>

