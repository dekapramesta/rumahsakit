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
                                            <th>Lama Penyimpanan</th>
                                            <th>Tanggal Kunjungan Akhir</th>
                                            <th>Jenis RM</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <?php $no = 0;
                                            foreach ($Rekam as $rkm) : $no++; ?>
                                                <?php
                                                $tgl_awal = null;
                                                foreach ($tanggal as $tgl) {

                                                    if ($rkm['id_pasien'] == $tgl['id_pasien']) {
                                                        $id_akhir = $tgl['id_pasien'];
                                                        $tgl_akhir = $tgl['tgl_periksa'];
                                                        if ($tgl_awal == null) {
                                                            $tgl_awal = $tgl['tgl_periksa'];
                                                        }
                                                    }
                                                }
                                                ?>
                                                <td><?= $no; ?></td>
                                                <td><?= $rkm['no_rm'] ?></td>
                                                <td><?= $rkm['nama_pasien'] ?></td>
                                                <td><?= $rkm['tgl_periksa'] ?></td>
                                                <td><?php if ($rkm['nama_file'] != null) {
                                                        echo hitung_hari($rkm['tgl_periksa']);
                                                    } else {
                                                        echo "Belum Memasukan Scan";
                                                    }  ?></td>
                                                <td><?php if ($rkm['id_pasien'] == $id_akhir) {
                                                        if (@$tgl_akhir == null) {
                                                            echo "Belum Melakukan Kunjungan";
                                                        } else {
                                                            echo $tgl_akhir;
                                                        }
                                                    } else {
                                                        echo "Belum Melakukan Kunjungan";
                                                    } ?></td>
                                                <td><?php if ($rkm['status_rm'] == 0) {
                                                        echo "Inaktif";
                                                    } else {
                                                        echo "Aktif";
                                                    }  ?></td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown" class="btn btn-primary  dropdown-toggle ">Options</a>
                                                        <div class="dropdown-menu">
                                                            <?php $file = $this->db->get('tb_file')->result_array();
                                                            $idrm = array_column($file, 'id_rm');
                                                            if (!in_array($rkm['id_rm'], $idrm)) : ?>
                                                                <a onclick="TambahScan(<?= $rkm['id_rm'] ?>)" class="dropdown-item has-icon"><i class="far fa-list-alt"></i> Tambah file scan</a>
                                                            <?php endif; ?>
                                                            <a href="<?= base_url('DataKunjungan/EditKunjungan/' . $rkm['id_rm']) ?>" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                                                            <a href="<?= base_url('DataKunjungan/DeleteKunjungan/' . $rkm['id_rm']) ?>" class="dropdown-item has-icon"><i class="far fa-trash-alt"></i> Delete</a>
                                                            <?php if ($rkm['nama_file'] != null) : ?>
                                                                <a href="<?= base_url('DataKunjungan/DownloadRM/' . $rkm['nama_file']) ?>" class="dropdown-item has-icon"><i class="fas fa-download"></i> Download</a>
                                                            <?php endif; ?>

                                                        </div>
                                                    </div>
                                                </td>

                                        </tr>
                                    <?php endforeach ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function TambahScan(i) {
                $('#upload_scan').appendTo("body").modal('show');
                document.getElementById('id_rm').value = i;
            }
        </script>
        <div class="modal fade" id="upload_scan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah File Scan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('DataKunjungan/TambahScan') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">File Scan</label><br>
                                <input hidden type="text" id="id_rm" name="id_rm">
                                <input type="file" name="file_scan">
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