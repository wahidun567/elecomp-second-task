<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h2 class="bg-info mt-3 mb-2">HIERARKI | Kenalan Dari Teman</h2>
<table class="table table-hover">
    <thead class="thead thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Teman</th>
            <th>Kenalan Dari</th>
        </tr>
    </thead>
    <?php $i = 1 + (6 * ($currentPage - 1)) ?>
    <tbody>
        <?php foreach ($teman as $t) : ?>
            <tr>
                <th><?= $i++; ?></th>
                <th><?= $t['nama_teman']; ?></th>
                <th>
                    <?php if ($count->where("kenalan_dari", $t['nama_teman'])->countAllResults() != 0) : ?>
                        <a href="/pages/eyeHierarki/<?= $t['nama_teman']; ?>">
                            <i class="waw bg-gradient btn btn-outline-info bi bi-eye"></i>
                        </a>
                    <?php endif; ?>
                </th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $pager->links('teman', 'teman_pagination'); ?>
<?= $this->endSection() ?>