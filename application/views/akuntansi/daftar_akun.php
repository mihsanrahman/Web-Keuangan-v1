<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Akun</h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('statements/opening_balance') ?>" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm"></i> Buka Saldo</a>
            
            <button type="button" class="btn btn-sm btn-primary shadow-sm"  onclick="show_modal_page('<?php echo base_url().'accounts/popup/add_chart_of_accounts'; ?>')" ><i class="fas fa-plus fa-sm" aria-hidden="true">  </i>   Buat Akun
                </button>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Nama Akun</th>
                            <th>Head</th>
                            <th>Grup Akun</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                                <?php
                                    if($chart_list != NULL)
                                    {
                                    foreach ($chart_list as $single_account)
                                    {
                                ?>
                                    <tr>
                                        <td style="text-align: left;">
                                            <?php echo $single_account->name; ?>
                                        </td>
                                        <td>
                                            <?php echo $single_account->nature; ?>
                                        </td>
                                        <td>
                                            <?php echo $single_account->type; ?>
                                        </td>
                                        
                                        <td>
                                            
                                            <a onclick="show_modal_page('<?php echo base_url().'accounts/popup/edit_chart_of_accounts/'.$single_account->id; ?>')" class="btn btn-warning btn-icon-split pr-2 pl-2 mr-2">Edit</a>

                                            <a href="<?php echo base_url().'accounts/delete/'.$single_account->id; ?>" class="btn btn-danger btn-icon-split pr-2 pl-2 mr-2">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                        }
                                     ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>