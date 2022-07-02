 <div class="main-content">
     <section class="section">
         <div class="section-body">
             <div class="row justify-content-center">
                 <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                     <div class="card">
                         <form action="<?= base_url('DataPegawai/DaftarPegawai') ?>" enctype="multipart/form-data" method="post">
                             <div class="card-header">
                                 <h4>Tambah Data Pegawai</h4>
                             </div>
                             <div class="card-body">
                                 <div class="form-group">
                                     <label>Username</label>
                                     <input name="username" type="text" class="form-control" required="">
                                     <span class="ml-2 text-danger"><b><?= form_error('username') ?></b> </span>
                                 </div>
                                 <div class="row">
                                     <div class="form-group  col-md-6 col-12">
                                         <label>Password</label>
                                         <input name="password" type="password" class="form-control" required="">
                                         <span class="ml-2 text-danger"><b><?= form_error('password') ?></b> </span>

                                     </div>
                                     <div class="form-group  col-md-6 col-12">
                                         <label>Confirm Password</label>
                                         <input name="confirm_password" type="password" class="form-control" required="">
                                         <span class="ml-2 text-danger"><b><?= form_error('confirm_password') ?></b> </span>

                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="form-group  col-md-6 col-12">
                                         <label>Nama Lengkap </label>
                                         <input name="nama_lengkap" type="text" class="form-control">
                                         <span class="ml-2 text-danger"><b><?= form_error('nama_lengkap') ?></b> </span>

                                     </div>
                                     <div class="form-group col-md-6 col-12">
                                         <label>NIP</label>
                                         <input name="nip" type="text" class="form-control">
                                         <span class="ml-2 text-danger"><b><?= form_error('nip') ?></b> </span>

                                     </div>

                                 </div>
                                 <div class="row">

                                     <div class="form-group  col-md-6 col-12">
                                         <label>Email </label>
                                         <input name="email" type="email" class="form-control">
                                         <span class="ml-2 text-danger"><b><?= form_error('email') ?></b> </span>

                                     </div>

                                     <div class="form-group col-md-6 col-12">
                                         <label>No Hp</label>
                                         <input name="no_hp" type="number" class="form-control">
                                         <span class="ml-2 text-danger"><b><?= form_error('no_hp') ?></b> </span>

                                     </div>
                                     <!-- <div class="form-group mb-0">
                                     <label>Almat</label>
                                     <textarea name="alamat" class="form-control" required=""></textarea>
                                     <span class="ml-2 text-danger"><b><?= form_error('alamat') ?></b> </span>

                                 </div> -->
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