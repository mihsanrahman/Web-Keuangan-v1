<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Daftar Gaji Karyawan</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2"></div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2" data-toggle="modal" data-target="#newGajiModal"><i class="fas fa-plus fa-sm" data-toggle="modal" data-target="#newGajiModal"></i> Tambah Gaji Baru</a>

                </div>
                <div class="card-body">
                    <table class="table table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col-md-6">Nama Karyawan</th>
                                <th scope="col">Jumlah Gaji</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($id as $id) : ?>

                                <tr>
                                    <th scope="row">
                                        <center><?= $i; ?>
                                    </th>
                                    <td><?= $id['nama']; ?></td>
                                    <td><?= "Rp " . number_format($id['gaji'], 0, ',', '.'); ?></td>

                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newGajiModal" tabindex="-1" aria-labelledby="newGajiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newGajiModalLabel">Tambah Gaji Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('data/tambahgaji'); ?>" method="post" id="formD" name="formD">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama :</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Gaji :</label>
                            <input type="text" class="form-control" id="gaji" name="gaji">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>

                    </script>
                </form>
            </div>
        </div>
    </div>