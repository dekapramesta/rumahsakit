<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="row ">
                                    <div class="col">
                                        <h4>Data pasien</h4>
                                    </div>
                                    <div class="col text-right">
                                        <button onclick="modal_pasien()" type="button" class="btn btn-primary" href="">Tambah Data</button>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>No RM</th>
                                            <th>Nama Pasien</th>
                                            <th>Alamat</th>
                                            <th>Gender</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Tanggal Kunjungan Awal</th>
                                            <th>Tanggal Kunjungan Akhir</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tanggal as $tgl) {
                                            $idpasien[] = $tgl['id_pasien'];
                                        }
                                        ?>
                                        <?php
                                        $no = 0;
                                        foreach ($pasien as $ps) :
                                            $no++; ?>

                                            <?php

                                            foreach ($tanggal as $tgl) {
                                                if ($ps['id_pasien'] == $tgl['id_pasien']) {
                                                    $cok = $tgl['tgl_periksa'];
                                                }
                                            }
                                            ?>

                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $ps['id_rm'] ?></td>
                                                <td><?= $ps['nama_pasien'] ?></td>
                                                <td><?= $ps['alamat'] ?></td>
                                                <td><?= $ps['jenis_kelamin'] ?></td>
                                                <td><?= $ps['tgl_lahir'] ?></td>
                                                <td><?= $ps['agama'] ?></td>
                                                <td><?= $ps['tgl_periksa'] ?></td>
                                                <td><?= $cok ?></td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown" class="btn btn-primary  dropdown-toggle ">Options</a>
                                                        <div class="dropdown-menu">
                                                            <a onclick="" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                                                            <a href="" class="dropdown-item has-icon"><i class="far fa-trash-alt"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function modal_pasien() {
                $('#tambah_pasien').appendTo("body").modal('show');
            }
        </script>
        <div class="modal fade" id="tambah_pasien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('DataPasien/TambahPasien') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">No Identitas</label><br>
                                <input id="no_identitas" placeholder="No Identitas" type="text" name="no_identitas" class="form-control " required="">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pasien</label><br>
                                <input id="nama_pasien" placeholder="Nama Pasien" type="text" name="nama_pasien" class="form-control " required="">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label><br>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="L">Laki Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">No Telp</label><br>
                                <input id="no_telp" placeholder="No Telp" type="number" name="no_telp" class="form-control " required="">
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label><br>
                                <select name="agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label><br>
                                <input type="date" name="tgl_lahir" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label><br>
                                <textarea name="alamat" class="form-control" required=""></textarea>
                            </div>
                            <div align="right">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" name="import" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>