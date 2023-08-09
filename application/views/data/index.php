
                <!-- Begin Page Content -->
                <div id="main-content">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <section class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        
                        
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class='iconly-boldWallet'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Saldo Kas</h6>
                                    <h6 class='font-extrabold mb-0'><?= 'Rp. '.number_format($cash_in_hand,0,',','.') ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class='iconly-boldWallet'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Utang Usaha</h6>
                                    <h6 class='font-extrabold mb-0'><?= 'Rp. '.number_format(-$payables,0,',','.') ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class='iconly-boldWallet'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Piutang Usaha</h6>
                                    <h6 class='font-extrabold mb-0'><?= 'Rp. '.number_format($account_recieveble,0,',','.') ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class='iconly-boldSearch'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Perkiraan</h6>
                                    <h6 class='font-extrabold mb-0'><a href="<?php base_url()?>accounts">Lihat Disini</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class='iconly-boldDocument'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Akuntansi</h6>
                                    <h6 class='font-extrabold mb-0'><a href="<?php base_url()?>statements/leadgerAccounst">Buku Besar</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon yellow">
                                        <i class='iconly-boldDocument'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Akuntansi</h6>
                                    <h6 class='font-extrabold mb-0'><a href="<?php base_url()?>statements/trail_balance_final">Neraca Saldo</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class='iconly-boldDocument'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Posisi</h6>
                                    <h6 class='font-extrabold mb-0'><a href="<?php base_url()?>statements/balancesheet">Keuangan</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class='iconly-boldDocument'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Laporan</h6>
                                    <h6 class='font-extrabold mb-0'><a href="<?php base_url()?>statements/income_statement">Laba Rugi</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class='iconly-boldProfile'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Ubah Profil</h6>
                                    <h6 class='font-extrabold mb-0'><a href="<?php base_url()?>user/edit">Klik Disini</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class='iconly-boldSetting'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Ubah Email</h6>
                                    <h6 class='font-extrabold mb-0'><a href="<?php base_url()?>user/edit2">Klik Disini</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class='iconly-boldSetting'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Ubah Nama</h6>
                                    <h6 class='font-extrabold mb-0'><a href="<?php base_url()?>user/edit3">Klik Disini</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class='iconly-boldPassword'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Ubah Password</h6>
                                    <h6 class='font-extrabold mb-0'><a href="<?php base_url()?>user/changePassword">Klik Disini</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            


</section>
