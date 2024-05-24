<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style type="text/css">
        body {
            font-family: Arial;
            color: black
        }
    </style>
</head>

<body>
    <center>
        <h1>BKPSDM KABUPATEN PAMEKASAN</h1>
        <H2>Laporan Kehadiran Pegawai</H2>
    </center>

    <?php
    $bulan = $this->input->post('bulan');
    $tahun = $this->input->post('tahun');

    ?>

    <table>
        <tr>
            <td>Bulan</td>
            <td>:</td>
            <td><?= $bulan ?></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><?= $tahun ?></td>
        </tr>
    </table>

    <table class="table table-bordered table-striped">

        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>NIK</th>
            <th>Jabatan</th>
            <th>Hadir</th>
            <th>Sakit</th>
            <th>Alpha</th>
        </tr>

        <?php $no = 1;
        foreach ($lap_kehadiran as $l) : ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $l->nama_pegawai ?></td>
                <td><?= $l->nik ?></td>
                <td><?= $l->jabatan ?></td>
                <td><?= $l->hadir ?></td>
                <td><?= $l->sakit ?></td>
                <td><?= $l->alpha ?></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>

<script type="text/javascript">
    window.print();
</script>