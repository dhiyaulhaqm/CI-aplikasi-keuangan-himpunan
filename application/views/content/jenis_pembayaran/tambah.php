 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-grip-horizontal mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">

  <div class="form-group">
    <label for="jenis_pembayaran">Jenis pembayaran :</label>
    <input type="text" name="jenis_pembayaran" class="form-control" id="jenis_pembayaran">
    <small class="form-text text-danger"><?= form_error('jenis_pembayaran'); ?></small>
  </div>
  <div class="form-group">
    <label for="bukti_pembayaran">Bukti Pembayaran :</label>
    <input type="text" name="bukti_pembayaran" placeholder="sertakan bukti menggunakan link drive" class="form-control" id="bukti_pembayaran">
    <small class="form-text text-danger"><?= form_error('bukti_pembayaran'); ?></small>
  </div>
  <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
  <a href="<?= base_url('Jenis') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
