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
                                        <h4>Data Pegawai</h4>
                                    </div>
                                    <div class="col text-right">
                                        <a href="<?= base_url('DataPegawai/TambahPegawai') ?>" type="button" class="btn btn-primary" href="">Tambah Data</a>


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
                                            <th>Nama Lengkap</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Email</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($pegawai as $pgw) : $no++; ?>

                                            <tr>


                                                <td><?= $no; ?></td>

                                                <td><?= $pgw['nama_lengkap'] ?></td>
                                                <td><?= $pgw['alamat'] ?></td>
                                                <td><?= $pgw['no_hp'] ?></td>
                                                <td><?= $pgw['email'] ?></td>
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