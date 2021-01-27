<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h2 class="bg-info mt-3">Daftar Kenalan Dari Teman</h2>
<table class="table table-hover mt-2">
    <thead class="table-dark">
        <tr>
            <th scope="col">N0</th>
            <th scope="col">Nama</th>
            <th scope="col">Kenalan Dari</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 + (6 * ($currentPage - 1)); ?>
        <?php foreach ($teman as $t) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $t['nama_teman']; ?></td>
                <td>
                <?php if ($count->where("kenalan_dari", $t['kenalan_dari'])) : ?>
                    <a href="/pages/eyeHierarki/<?= $t['nama_teman']; ?>">
                        <i class="waw bg-gradient btn btn-outline-info bi bi-eye"></i>
                    </a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="container">
    <div class="row">
        <div class="col">
            <?= $pager->links('teman', 'teman_pagination'); ?>
            <a class="btn btn-danger float-end" href="/pages/hierarki">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>