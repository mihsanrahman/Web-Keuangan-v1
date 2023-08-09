<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $title; ?></h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                 <?php
                                $attributes = array('id'=>'Service_form','method'=>'post','class'=>'form-horizontal');
                            ?>
                            <?php echo form_open_multipart('database/take_backup',$attributes); ?>

                                <div class="form-group text-center">                  
                                        <?php
                                            $data = array('class'=>'btn btn-default btn-outline-primary ','type' => 'submit','name'=>'btn_submit_Service','value'=>'true', 'content' => '<i class="fa fa-download" aria-hidden="true"></i> Klik disini untuk backup');
                                            echo form_button($data);
                                         ?>    
                                  </div>
                              <?php echo form_close(); ?>     
            </div>
        </div>

    </section>
</div>

