<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h2 class="bg-info mt-3">DETAIL LAPORAN</h2>
<table class="table table-hover mt-2">
    <thead class="table-dark">
        <tr>
            <th scope="col">N0</th>
            <th scope="col">Nama</th>
            <th scope="col">No HP</th>
            <th scope="col">Pekerjaan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 + (6 * ($currentPage - 1)); ?>
        <?php foreach ($teman as $t) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $t['nama_teman']; ?></td>
                <td><?= $t['no_hp_teman']; ?></td>
                <td><?= $t['pekerjaan_teman']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="container">
    <div class="row">
        <div class="col">
            <?= $pager->links('teman', 'teman_pagination'); ?>
            <a class="btn btn-danger float-end" href="/pages/rava">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>