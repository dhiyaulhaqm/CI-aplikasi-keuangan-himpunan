 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-fw fa-users mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">

    <a href="<?= base_url('anggota/tambah') ?>" class="btn btn-primary ml-4">
    <i class="fas fa-plus mr-2"></i>Tambah Anggota
    </a>

    <div class="card-body">
        <div class="table-responsive">

        <?php if ( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"> Anggota
        <strong> berhasil</strong> 
        <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <?php endif; ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>Divisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $a) :  ?>
                    <tr>
                        <td><?= $a['NIM']; ?></td>
                        <td><?= $a['Nama']; ?></td>
                        <td><?= $a['Angkatan']; ?></td>
                        <td><?= $a['Divisi']; ?></td>
                        <td class="my-5">
                        <a class="btn btn-warning" href="<?= base_url('Anggota/edit/') ?><?= $a['NIM']; ?>"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin Ingin hapus?');" href="<?= base_url('Anggota/hapus/'); ?><?= $a['NIM'] ?>"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->