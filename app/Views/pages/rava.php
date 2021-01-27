<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h2 class="bg-info mt-3">LAPORAN</h2>

<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">No Handphone</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Jumlah Kenalan</th>
            <th scope="col">Detail</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 + (6 * ($currentPage - 1)); ?>
        <?php
        foreach ($teman->getResult() as $t) :
            if ($count->where("kenalan_dari", $t->kenalan_dari)->countAllResults() != 0) :
        ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $t->nama_teman; ?></td>
                    <td><?= $t->no_hp_teman; ?></td>
                    <td><?= $t->pekerjaan_teman; ?></td>
                    <td><?= $count->where("kenalan_dari", $t->nama_teman)->countAllResults(); ?></td>
                    <td><a href="/pages/wahid/<?= $t->nama_teman; ?>" class="btn btn-success">Detail</a></td>
                </tr>
        <?php
            endif;
        endforeach;
        ?>
    </tbody>
</table>
<?= $pager->links('temanRava', 'teman_pagination'); ?>
<?= $this->endSection(); ?>