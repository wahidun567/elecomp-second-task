<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>
<h2 class="bg-warning bg-gradient my-3">&nbsp Form Ubah Data Teman</h2>
<form action="/pages/update/<?= $teman['id_teman']; ?>" method="post">
    <?= csrf_field(); ?>
    <?= old(''); ?>
    <div class="row mb-3">
        <label for="namaTeman" class="col-sm-2 col-form-label">Nama Teman</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('namaTeman')) ? 'is-invalid' : ''; ?>" id="namaTeman" name="namaTeman" value="<?= (old('nama_teman')) ? old('nama_teman') : $teman['nama_teman']; ?>" autofocus>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validation->getError('namaTeman'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="noHp" class="col-sm-2 col-form-label">No Handphone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('no_hp_teman')) ? 'is-invalid' : ''; ?>" id="noHp" name="no_hp_teman" value="<?= (old('no_hp_teman')) ? old('no_hp_teman') : $teman['no_hp_teman']; ?>">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validation->getError('no_hp_teman'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="pekerjaanTeman" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_teman')) ? 'is-invalid' : ''; ?>" id="pekerjaanTeman" name="pekerjaan_teman" value="<?= (old('pekerjaan_teman')) ? old('pekerjaan_teman') : $teman['pekerjaan_teman']; ?>">
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
                <?php foreach($kenalan as $k): ?>
                    <option value="<?= $k['nama_teman']; ?>"><?= $k['nama_teman']; ?></option>
                <?php endforeach; ?>
            </select>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validation->getError('kenalan_dari'); ?>
            </div>
        </div>
    </div>

    <button class="btn btn-primary mb-2">Ubah data</button>
    <br>
    <a href="/pages/index">Kembali Ke Menu Home</a>
</form>
<?= $this->endSection(); ?>