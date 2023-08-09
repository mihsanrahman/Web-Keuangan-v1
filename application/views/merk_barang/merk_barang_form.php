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
            <label for="varchar">Merk Barang <?php echo form_error('merk_barang') ?></label>
            <input type="text" class="form-control" name="merk_barang" id="merk_barang" placeholder="Merk Barang" value="<?php echo $merk_barang; ?>" />
        </div>
        <input type="hidden" name="id_merk" value="<?php echo $id_merk; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('merk_barang') ?>" class="btn btn-default">Cancel</a>
    </form> 
            </div>
        </div>

    </section>
</div>

