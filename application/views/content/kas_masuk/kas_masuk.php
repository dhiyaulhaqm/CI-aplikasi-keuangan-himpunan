 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-money-bill-alt mx-2"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
  <!-- Button tambah -->
  <a href="<?= base_url('kas_masuk/tambah') ?>" class="btn btn-primary mx-3">
    <i class="fas fa-plus mr-2"></i>Kas Masuk
    </a>
     
    <div class="card-body">
        <div class="table-responsive">
        <?php if ( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"> Kas
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
                        <th>Kode Kas</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Jenis Pembayaran</th>
                        <th>tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($kas_masuk as $masuk) :  
                    
                    ?>
                    <tr>
                        <td><?= $masuk['kode_kas'] ?></td>
                        <td><?= $masuk['Nama'] ?></td>
                        <td><?= $masuk['jumlah'] ?></td>
                        <td><?= $masuk['jenis_pembayaran'] ?></td>
                        <td><?= $masuk['tanggal_bayar'] ?></td>
                      
                        <td>
                        <a class="btn btn-warning" href="<?= base_url('kas_masuk/edit/') ?><?= $masuk['kode_kas']; ?>"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin Ingin hapus?');" href=" <?= base_url('kas_masuk/hapus/') ?><?= $masuk['kode_kas'] ?>"><i class="fas fa-trash"></i></a>
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