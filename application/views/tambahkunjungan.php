 <div class="main-content">
     <section class="section">
         <div class="section-body">
             <div class="row justify-content-center">
                 <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                     <div class="card">
                         <form action="<?= base_url('DataKunjungan/TambahData') ?>" enctype="multipart/form-data" method="post">
                             <div class="card-header">
                                 <h4>Tambah Data Kunjungan</h4>
                             </div>
                             <div class="card-body">
                                 <div class="form-group">
                                     <label>Pasien</label>
                                     <select name="id_pasien" class="form-control">
                                         <option disabled selected hidden>Pilih Pasien</option>
                                         <?php foreach ($pasien as $ps) : ?>
                                             <option value="<?= $ps['id_pasien'] ?>"><?= $ps['nama_pasien'] ?></option>
                                         <?php endforeach; ?>

                                     </select>
                                 </div>
                                 <!-- <div class="row">
                                     <div class="form-group  col-md-6 col-12">
                                         <label>Password</label>
                                         <input name="password" type="password" class="form-control" required="">

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
                                     <div class="form-group  col-md-6 col-12">
                                         <label>Email </label>
                                         <input name="email" type="email" class="form-control">
                                         <span class="ml-2 text-danger"><b><?= form_error('email') ?></b> </span>

                                     </div>
                                 </div> -->
                                 <div class="form-group">
                                     <label>Dokter</label>
                                     <select name="id_dokter" class="form-control">
                                         <option disabled selected hidden>Pilih Dokter</option>
                                         <?php foreach ($dokter as $dt) : ?>
                                             <option value="<?= $dt['id_dokter'] ?>"><?= $dt['nama_dokter'] ?></option>
                                         <?php endforeach; ?>

                                     </select>

                                 </div>
                                 <div class="form-group">
                                     <label>Keadaan Keluar</label>
                                     <select name="cara_keluar" class="form-control" id="">
                                         <option value="0">Sembuh</option>
                                         <option value="1">Perbaikan</option>
                                         <option value="2">Meninggal</option>


                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label>Cara Keluar</label>
                                     <select name="status_out" class="form-control" id="">
                                         <option value="0">Izin Dokter</option>
                                         <option value="1">Pulang Paksa</option>
                                         <option value="2">Meninggal</option>


                                     </select>
                                 </div>
                                 <div class="form-group mb-0">
                                     <label>Diagnosa</label>
                                     <textarea name="diagnosa" class="form-control" required=""></textarea>

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