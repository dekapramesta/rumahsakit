<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<?php foreach ($retensi as $rtn) : ?>

    <body>
        <div style="text-align:center">
            <h3><?= $title_pdf; ?></h3>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>No Rekam Medis</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Jenis Rekam Medis</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($rtn as $rtm) : $no++; ?>
                    <tr>
                        <td><?= $rtm['id_rm'] ?></td>
                        <td><?= $rtm['nama_pasien'] ?></td>
                        <td><?= $rtm['tgl_periksa'] ?></td>
                        <td><?php if ($rtm['status_rm'] == 1) {
                                echo "Aktif";
                            } else {
                                echo "Tidak Aktif";
                            } ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
<?php endforeach; ?>


</html>