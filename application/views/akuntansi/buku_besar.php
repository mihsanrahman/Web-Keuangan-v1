<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Buku Besar</h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a class="my-5 font-weight-bold text-secondary"><b>Cari Periode Waktu</b></a> <div style='float: right;'><button onclick="printDiv('print-section')" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print fa-sm"></i> Cetak</button></div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col my-3">
                        <div class="box-body box-bg ">
                            <div class="make-container-center">
                                <?php
                                    $attributes = array('id'=>'leadgerAccounst','method'=>'post','class'=>'');
                                ?>
                                <?php echo form_open_multipart('statements/leadgerAccounst',$attributes); ?>
                                    <div class="row no-print">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <?php echo form_label('Dari Tanggal'); ?>
                                                <?php
                                                    $data = array('class'=>'form-control input-lg','type'=>'date','name'=>'from','reqiured'=>'');
                                                    echo form_input($data);
                                                ?>
                                            </div>
                                        </div>                    
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <?php echo form_label('Sampai Tanggal'); ?>
                                                <?php
                                                    $data = array('class'=>'form-control input-lg','type'=>'date','name'=>'to','reqiured'=>'');
                                                    echo form_input($data);
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" style="margin-top:8px;">
                                                <?php
                                                    $data = array('class'=>'d-none d-sm-inline-block btn btn-danger shadow-sm mt-3','type' => 'submit','name'=>'btn_submit_customer','value'=>'true', 'content' => '<i aria-hidden="true"></i> 
                                                        Tampilkan Buku Besar');
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
                    <div class="col my-3">
                        <div class="box-body box-bg ">
                            <div class="row">
                                <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <h5 style="text-align:center"><b>BUKU BESAR</b></h5>
                                        <h5 style="text-align:center"><b><br></b></h5>
                                       <h5 style="text-align:center"><b> Periode </b> <?php echo $from; ?> <b> s/d </b> <?php echo $to; ?></h5>
                                    </div>
                        <div class="col-md-3"></div>  
                    </div>
                <div class="row">
            <?php echo $ledger_records; ?>
            </div>
        </div>            
    </div>
</div>
</div>
    </section>
</div>