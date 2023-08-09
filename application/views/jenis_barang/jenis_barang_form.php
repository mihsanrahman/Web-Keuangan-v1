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
                 <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Jenis Barang <?php echo form_error('jenis_barang') ?></label>
            <input type="text" class="form-control" name="jenis_barang" id="jenis_barang" placeholder="Jenis Barang" value="<?php echo $jenis_barang; ?>" />
        </div>
        <input type="hidden" name="id_jenis" value="<?php echo $id_jenis; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('jenis_barang') ?>" class="btn btn-default">Cancel</a>
    </form> 
            </div>
        </div>

    </section>
</div>

