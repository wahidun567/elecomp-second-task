<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h2 class="bg-info my-3">Form Tambah Data Teman</h2>

<form action="/pages/save" method="post">
    <?= csrf_field(); ?>
    <?= old(''); ?>
    <div class="row mb-3">
        <label for="namaTeman" class="col-sm-2 col-form-label">Nama Teman</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('namaTeman')) ? 'is-invalid' : ''; ?>" id="namaTeman" name="namaTeman" value="<?= old('namaTeman'); ?>" autofocus placeholder="Masukkan Nama Teman !">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validation->getError('namaTeman'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="noHp" class="col-sm-2 col-form-label">No Handphone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('no_hp_teman')) ? 'is-invalid' : ''; ?>" id="noHp" name="no_hp_teman" value="<?= old('no_hp_teman'); ?>" placeholder="Masukkan No Handphone Teman !">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validation->getError('no_hp_teman'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="pekerjaanTeman" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_teman')) ? 'is-invalid' : ''; ?>" id="pekerjaanTeman" name="pekerjaan_teman" value="<?= old('pekerjaan_teman'); ?>" placeholder="Masukkan Jenis Pekerjaan Teman !">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validation->getError('pekerjaan_teman'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="KenalanDari" class="col-sm-2 col-form-label">Kenalan Dari</label>
        <div class="col-sm-10">
            <select class="form-select <?= ($validation->hasError('kenalan_dari')) ? 'is-invalid' : ''; ?>" aria-label="Default select example" id="KenalanDari" name="kenalan_dari">
                <option value="<?= old('kenalan_dari'); ?>">Pilih Kenalan Dari Teman !</option>
                <?php foreach ($teman as $t) : ?>
                    <option value="<?= $t['nama_teman']; ?>"><?= $t['nama_teman']; ?></option>
                <?php endforeach; ?>
            </select>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validation->getError('kenalan_dari'); ?>
            </div>
        </div>
    </div>

    <button class="btn btn-primary mb-2">Tambah data</button>
    <br>
    <a href="/pages/index">Kembali Ke Menu Home</a>
</form>
<?= $this->endSection(); ?>