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
                 <form action="<?= base_url('user/changepassword'); ?>" method="post">
                                
  <div class="form-group">
    <label for="current_password">Current Password</label>
    <input type="password" class="form-control" id="current_password" name="current_password" >
    <?= form_error('curent_password', '<small class="text-danger pl-3">', '</small>'); ?>
  </div>
  <div class="form-group">
    <label for="new_password1">New Password</label>
    <input type="password" class="form-control" id="new_password1" name="new_password1" >
    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
  </div>
  <div class="form-group">
    <label for="new_password2">Repeat Password</label>
    <input type="password" class="form-control" id="new_password2" name="new_password2" >
    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary">Ganti</button>

  </div>
</form>           
            </div>
        </div>

    </section>
</div>

