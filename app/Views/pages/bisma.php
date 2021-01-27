<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<a href="/pages/create" class="btn btn-primary mt-3">Tambah Data Pertemanan</a>
<h2 class="bg-info mt-1">&nbsp DETAIL INFO PERTEMANAN</h2>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success pb-0 mt-2" role="alert">
        <h5><?= session()->getFlashdata('pesan'); ?></h5>
    </div>
<?php endif ?>
<table class="table table-hover mt-2">
    <thead class="table-dark">
        <tr>
            <th scope="col">N0</th>
            <th scope="col">Nama</th>
            <th scope="col">No HP</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Kenalan Dari</th>
            <th scope="col">Aksi</th>
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
                <td><?= $t['kenalan_dari']; ?></td>
                <td>
                    <a href="/pages/edit/<?= $t['id_teman']; ?>" class="btn btn-warning bg-gradient mr-1"><i class="bi bi-pencil-square"></i> Ubah</a>
                    <form action="/pages/<?= $t['id_teman']; ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger bg-gradient" onclick="return confirm('Apakah anda yakin?');"><i class="bi bi-trash"></i> Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $pager->links('teman', 'teman_pagination'); ?>
<?= $this->endSection(); ?>