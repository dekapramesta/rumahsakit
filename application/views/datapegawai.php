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
                                        <h4>Data Petugas</h4>
                                    </div>
                                    <div class="col text-right">
                                        <a href="<?= base_url('DataPegawai/TambahPegawai') ?>" type="button" class="btn btn-primary" href="">Add Data</a>


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
                                                No
                                            </th>
                                            <th>Nama Lengkap</th>
                                            <th>NIP</th>
                                            <th>No Hp</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($pegawai as $pgw) : $no++; ?>

                                            <tr>


                                                <td><?= $no; ?></td>

                                                <td><?= $pgw['nama_lengkap'] ?></td>
                                                <td><?= $pgw['nip'] ?></td>
                                                <td><?= $pgw['no_hp'] ?></td>
                                                <td><?= $pgw['email'] ?></td>
                                                <td><?= $pgw['username'] ?></td>
                                                <td><?php if ($pgw['status_user'] == 1) {
                                                        echo "Aktif";
                                                    } else {
                                                        echo "Non-Aktif";
                                                    }  ?></td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown" class="btn btn-primary  dropdown-toggle ">Options</a>
                                                        <div class="dropdown-menu">
                                                            <a onclick="ChangePass('<?= $pgw['id_user'] ?>')" class="dropdown-item has-icon"><i class="far fa-edit"></i> Password</a>
                                                            <a href="<?php echo base_url('DataPegawai/EditPegawai/' . $pgw['id_pegawai']) ?>" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                                                            <?php if ($pgw['status_user'] == 1) : ?>
                                                                <a href="<?= base_url('DataPegawai/GantiStatus/' . $pgw['id_user']) ?>" class="dropdown-item has-icon"><i class="far fa-trash-alt"></i> Non-Aktifkan</a>
                                                            <?php else : ?>
                                                                <a href="<?= base_url('DataPegawai/GantiStatus/' . $pgw['id_user']) ?>" class="dropdown-item has-icon"><i class="far fa-trash-alt"></i> Aktifkan</a>

                                                            <?php endif; ?>
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
            function ChangePass(id) {

                $('#ubah_pass').appendTo("body").modal('show');
                $('#id_user').val(id)

            }
        </script>

        <div class="modal fade" id="ubah_pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('DataPegawai/UbahPassword') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="id_user" id="id_user" hidden>
                                <input type="text" class="form-control" name="password">
                                <!-- <input id="nisn" placeholder="NISN" type="text" name="nisn" class="form-control " required=""> -->
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