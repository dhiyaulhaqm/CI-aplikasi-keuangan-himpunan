 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-money-check-alt mr-2"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <!-- Button trigger modal -->

    <a href="<?= base_url('Jenis/tambah') ?>" class="btn btn-primary mx-3">
    <i class="fas fa-plus mr-2"></i>Jenis Pembayaran
    </a>

    <div class="card-body">
        <div class="table-responsive">
        <?php if ( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"> Jenis Pembayaran
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
                        <th>Id Pembayaran</th>
                        <th>jenis Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($jenis as $jenis) :  ?>
                    <tr>
                        <td><?= $jenis['id_pembayaran'] ?></td>
                        <td><?= $jenis['jenis_pembayaran'] ?></td>
                        <td><?= $jenis['bukti_pembayaran'] ?></td>
                        <td class="my-5">
                        <a class="btn btn-warning" href="<?= base_url('Jenis/edit/') ?><?= $jenis['id_pembayaran']; ?>"><i class="fas fa-edit"></i></a>
                        <a type="button" class="btn btn-danger" onclick confirm="return confirm('Yakin Ingin hapus?');" href="<?= base_url('Jenis/hapus/'); ?><?= $jenis['id_pembayaran'] ?>"><i class="fas fa-trash"></i></a>
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