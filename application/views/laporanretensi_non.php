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
                                        <h4>Laporan Retensi Non-Aktif</h4>
                                    </div>
                                    <div class="col text-right">
                                        <a href="<?= base_url('LaporanRetensi/CetakPdf/0') ?>" class="btn btn-primary" href="">Cetak Pdf</a>
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

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($rekam_aktif as $ra) : $no++; ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $ra['no_rm'] ?></td>
                                                <td><?= $ra['nama_pasien'] ?></td>
                                                <td><?= $ra['tgl_periksa'] ?></td>
                                               
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