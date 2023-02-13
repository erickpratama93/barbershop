                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                
                    <div class="row">
                        <div class="col-lg-6">

                        <?= $this->session->flashdata('message') ;?>

                            <form action="<?= base_url('user/changePassword'); ?>" method="post">
                        
                            <div class="form-group">
                                <label for="passwordLama">Password Lama</label>
                                <input type="password" class="form-control" id="passwordLama" name="passwordLama">
                                <?= form_error('passwordLama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="passwordBaru1">Password Baru</label>
                                <input type="password" class="form-control" id="passwordBaru1" name="passwordBaru1">
                                <?= form_error('passwordBaru1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="passwordBaru2">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="passwordBaru2" name="passwordBaru2">
                                <?= form_error('passwordBaru2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                            </form>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->