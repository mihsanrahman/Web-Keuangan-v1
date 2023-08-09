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
            <label for="varchar">Kode Barang <?php echo form_error('kode_barang') ?></label>
            <!-- <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" value="<?php echo $kode_barang; ?>" /> -->
             <select name="kode_barang" class="form-control">
                <option value="<?php echo $kode_barang ?>"><?php echo $kode_barang ?></option>
                <?php 
                $sql = $this->db->get('barang');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->kode_barang ?>"><?php echo $row->nama_barang ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Tgl Keluar <?php echo form_error('tgl_keluar') ?></label>
            <input type="date" class="form-control tgl" name="tgl_keluar" id="tgl_keluar" placeholder="Tgl Keluar" value="<?php echo $tgl_keluar; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
        </div>
        <input type="hidden" name="id_barang_keluar" value="<?php echo $id_barang_keluar; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('barang_keluar') ?>" class="btn btn-default">Cancel</a>
    </form> 
            </div>
        </div>

    </section>
</div>

