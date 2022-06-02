 <div class="main-content">
     <section class="section">
         <div class="section-body">
             <div class="row justify-content-center">
                 <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                     <div class="card">
                         <form action="<?= base_url('DataPegawai/UbahPegawai/' . $pegawai->id_pegawai) ?>" enctype="multipart/form-data" method="post">
                             <div class="card-header">
                                 <h4>Edit Data Pegawai</h4>
                             </div>
                             <div class="card-body">
                                 <div class="form-group">
                                     <label>Username</label>
                                     <input name="username" type="text" value="<?= $pegawai->username ?>" class="form-control" required="">
                                     <span class="ml-2 text-danger"><b><?= form_error('username') ?></b> </span>
                                 </div>

                                 <div class="row">
                                     <div class="form-group  col-md-6 col-12">
                                         <label>Nama Lengkap </label>
                                         <input name="nama_lengkap" value="<?= $pegawai->nama_lengkap ?>" type="text" class="form-control">
                                         <span class="ml-2 text-danger"><b><?= form_error('nama_lengkap') ?></b> </span>

                                     </div>
                                     <div class="form-group  col-md-6 col-12">
                                         <label>Email </label>
                                         <input name="email" type="email" value="<?= $pegawai->email ?>" class="form-control">
                                         <span class="ml-2 text-danger"><b><?= form_error('email') ?></b> </span>

                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label>No Hp</label>
                                     <input name="no_hp" type="number" value="<?= $pegawai->no_hp ?>" class="form-control">
                                     <span class="ml-2 text-danger"><b><?= form_error('no_hp') ?></b> </span>

                                 </div>
                                 <div class="form-group">
                                     <label>Level Akses</label>
                                     <select name="level" class="form-control" id="">
                                         <option <?php if ($pegawai->level == 2) {
                                                        echo "selected";
                                                    } ?> value="2">Super Admin</option>
                                         <option <?php if ($pegawai->level == 1) {
                                                        echo "selected";
                                                    } ?> value="1">Admin</option>
                                     </select>
                                     <!-- <input name="no_hp" type="number" value="<?= $pegawai->level ?>" class="form-control"> -->
                                     <span class="ml-2 text-danger"><b><?= form_error('no_hp') ?></b> </span>

                                 </div>

                             </div>
                             <div class="card-footer text-right">
                                 <button class="btn btn-primary">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>

             </div>
         </div>
     </section>

 </div>