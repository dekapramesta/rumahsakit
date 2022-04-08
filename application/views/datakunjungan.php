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
                                        <h4>Data Kunjungan</h4>
                                    </div>
                                    <div class="col text-right">
                                        <a class="btn btn-primary" href="<?= base_url('DataKunjungan/TambahKunjungan') ?>">Tambah Data</a>
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
                                            <th>Tanggal Kunjungan</th>
                                            <th>Lama Penyimapanan</th>
                                            <th>Jenis RM</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
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


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>