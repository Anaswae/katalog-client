<div class="container">

    <div class="row mt-3">

        <div class="col-md-6 offset-md-3">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mobil
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mobil['id']; ?>">
                        <div class="form-group">
                            <label for="no_kerangka">No. Kerangka</label>
                            <input type="text" name="no_kerangka" class="form-control" id="no_kerangka" value="<?= $mobil['no_kerangka']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_kerangka'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_polisi">No. Polisi</label>
                            <input type="text" name="no_polisi" class="form-control" id="no_polisi" value="<?= $mobil['no_polisi']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_polisi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="brand">Merek</label>
                            <input type="text" name="brand" class="form-control" id="brand" value="<?= $mobil['brand']; ?>">
                            <small class="form-text text-danger"><?= form_error('brand'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="type">Tipe</label>
                            <input type="text" name="type" class="form-control" id="type" value="<?= $mobil['type']; ?>">
                            <small class="form-text text-danger"><?= form_error('type'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="year">Tahun</label>
                            <input type="text" name="year" class="form-control" id="year" value="<?= $mobil['year']; ?>">
                            <small class="form-text text-danger"><?= form_error('year'); ?></small>
                        </div>
                        
                        <button type="submit" name="ubah" class="btn btn-success btn-xs float-right">Ubah Data</button>
                        <a href="<?= base_url();?>" class="btn btn-primary btn-xs float-right" style="margin-right: 5px">Kembali</a>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>