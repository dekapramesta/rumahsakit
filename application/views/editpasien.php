 <div class="main-content">
     <section class="section">
         <div class="section-body">
             <div class="row justify-content-center">
                 <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                     <div class="card">
                         <form action="<?= base_url('DataPasien/EditDataPasien') ?>" enctype="multipart/form-data" method="post">
                             <div class="card-header">
                                 <h4>Tambah Data Kunjungan</h4>
                             </div>
                             <div class="card-body">
                                 <div class="form-group">
                                     <label>Nama Pasien</label>
                                     <input name="nama" required="" type="text" value="<?= $pasien->nama_pasien ?>" class="form-control">
                                     <input hidden name="id_pasien" required="" type="text" value="<?= $pasien->id_pasien ?>" class="form-control">

                                 </div>
								  <div class="form-group">
                                     <label>No RM</label>
                                     <input name="no_rm" required="" type="text" value="<?= $pasien->no_rm ?>" class="form-control">

                                 </div>
                                
                                
                                 <div class="form-group">
                                     <label>Jenis Kelamin</label>
                                     <select name="gender" class="form-control">
                                         <?php if ($pasien->jenis_kelamin == "L") : ?>
                                             <option selected value="L">Laki-Laki</option>
                                             <option value="P">Perempuan</option>
                                         <?php else : ?>
                                             <option value="L">Laki-Laki</option>
                                             <option selected value="P">Perempuan</option>
                                         <?php endif; ?>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label>Alamat</label>
                                     <textarea name="alamat" class="form-control" required=""><?= $pasien->alamat ?></textarea>

                                 </div>
                                 <div class="form-group">
                                     <label>No Telp</label>
                                     <input name="no_telp" type="number" value="<?= $pasien->no_telp ?>" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                     <label for="">Agama</label><br>
                                     <select name="agama" class="form-control">
                                         <option <?php if ($pasien->agama == "Islam") {
                                                        echo "selected";
                                                    } ?> value="Islam">Islam</option>
                                         <option <?php if ($pasien->agama == "Kristen Protestan") {
                                                        echo "selected";
                                                    } ?> value="Kristen Protestan">Kristen Protestan</option>
                                         <option <?php if ($pasien->agama == "Katolik") {
                                                        echo "selected";
                                                    } ?>value="Katolik">Katolik</option>
                                         <option <?php if ($pasien->agama == "Hindu") {
                                                        echo "selected";
                                                    } ?> value="Hindu">Hindu</option>
                                         <option <?php if ($pasien->agama == "Budha") {
                                                        echo "selected";
                                                    } ?> value="Budha">Budha</option>
                                         <option <?php if ($pasien->agama == "Konghucu") {
                                                        echo "selected";
                                                    } ?> value="Konghucu">Konghucu</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="">Tanggal Lahir</label><br>
                                     <input value="<?= $pasien->tgl_lahir ?>" type="date" name="tgl_lahir" class="form-control" required="">

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
                                 <!-- <div class="form-group">
                                     <label>Dokter</label>
                                     <select name="id_dokter" class="form-control">
                                         <option disabled selected hidden>Pilih Dokter</option>
                                         <?php foreach ($dokter as $dt) : ?>
                                             <option value="<?= $dt['id_dokter'] ?>"><?= $dt['nama_dokter'] ?></option>
                                         <?php endforeach; ?>

                                     </select>

                                 </div>
                                 <div class="form-group mb-0">
                                     <label>Keluhan</label>
                                     <textarea name="keluhan" class="form-control" required=""></textarea>

                                 </div>
                                 <div class="form-group mb-0">
                                     <label>Diagnosa</label>
                                     <textarea name="diagnosa" class="form-control" required=""></textarea>

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