<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="card mb-5" style="width: 100%; margin: bottom 100px;">
        <div class="card-body">
            <form action="<?= base_url('admin/dataJabatan/tambahDataAksi') ?>" method="POST">
                <div class="form-group">
                    <label for="">Nama Jabatan</label>
                    <input type="text" name="jabatan" class="form-control ">
                    <?= form_error('jabatan', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label for="">Gaji Pokok</label>
                    <input type="number" name="gaji_pokok" class="form-control ">
                    <?= form_error('gaji_pokok', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label for="">Tunjangan Transportasi</label>
                    <input type="number" name="tj_transport" class="form-control ">
                    <?= form_error('tj_transport', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label for="">Uang Makan</label>
                    <input type="number" name="uang_makan" class="form-control ">
                    <?= form_error('uang_makan', '<div class="text-small text-danger"></div>') ?>
                </div>


                <button type="submit" class="btn btn-success">Submit</button>


            </form>
        </div>
    </div>

</div>