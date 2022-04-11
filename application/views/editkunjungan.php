 <div class="main-content">
     <section class="section">
         <div class="section-body">
             <div class="row justify-content-center">
                 <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                     <div class="card">
                         <form action="<?= base_url('DataKunjungan/EditDataKunjungan') ?>" enctype="multipart/form-data" method="post">
                             <div class="card-header">
                                 <h4>Tambah Data Kunjungan</h4>
                             </div>
                             <div class="card-body">
                                 <div class="form-group">
                                     <label>Nama Pasien</label>
                                     <select name="id_pasien" class="form-control">
                                         <?php $pasien = $this->db->get('tb_pasien')->result_array();
                                            foreach ($pasien as $ps) : ?>
                                             <option <?php if ($Rekam->id_pasien == $ps['id_pasien']) {
                                                            echo "selected";
                                                        } ?> value="<?= $ps['id_pasien'] ?>"><?= $ps['nama_pasien'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                     <!-- <input readonly name="nama" required="" type="text" value="<?= $Rekam->nama_pasien ?>" class="form-control">
                                     <input hidden name="id_rm" required="" type="text" value="<?= $Rekam->id_rm ?>" class="form-control"> -->

                                 </div>
                                 <div class="form-group">
                                     <label>Nama Dokter</label>
                                     <select name="id_dokter" class="form-control">
                                         <?php $dokter = $this->db->get('tb_dokter')->result_array();
                                            foreach ($dokter as $dkt) : ?>
                                             <option <?php if ($Rekam->id_dokter == $dkt['id_dokter']) {
                                                            echo "selected";
                                                        } ?> value="<?= $dkt['id_dokter'] ?>"><?= $dkt['nama_dokter'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                     <!-- <input readonly name="nama" required="" type="text" value="<?= $Rekam->nama_dokter ?>" class="form-control">
                                     <input hidden name="id_rm" required="" type="text" value="<?= $Rekam->id_rm ?>" class="form-control"> -->

                                 </div>
                                 <div class="form-group">
                                     <label>Tanggal Kunjungan</label>
                                     <input hidden value="<?= $Rekam->id_rm ?>" name="id_rm" type="tex" class="form-control" required="">
                                     <input value="<?= $Rekam->tgl_periksa ?>" name="tgl_periksa" type="date" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                     <label>Keluhan</label>
                                     <textarea name="keluhan" class="form-control" required=""><?= $Rekam->keluhan ?></textarea>

                                 </div>
                                 <div class="form-group">
                                     <label>Diagnosa</label>
                                     <textarea name="diagnosa" class="form-control" required=""><?= $Rekam->diagnosa ?></textarea>

                                 </div>


                                 <div class="form-group">
                                     <label for="">Jenis Rekam Medis</label><br>
                                     <select name="status_rm" class="form-control">
                                         <?php if ($Rekam->status_rm == 1) : ?>
                                             <option selected value="1">Aktif</option>
                                             <option value="0">Tidak Aktif</option>
                                         <?php else : ?>
                                             <option value="1">Aktif</option>
                                             <option selected value="0">Tidak Aktif</option>
                                         <?php endif ?>


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