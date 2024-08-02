 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-users mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">
  <div class="form-group">
    <label for="id_pembayaran">Id Kategori :</label>
    <input type="text" readonly name="id_pembayaran" class="form-control" id="id_pembayaran" value="<?= $jenis['id_pembayaran']; ?>">
    <small class="form-text text-danger"><?= form_error('id_pembayaran'); ?></small>
  </div>
  <div class="form-group">
    <label for="jenis_pembayaran">jenis pembayaran :</label>
    <input type="text" name="jenis_pembayaran" class="form-control" id="jenis_pembayaran" value="<?= $jenis['jenis_pembayaran']; ?>">
    <small class="form-text text-danger"><?= form_error('jenis_pembayaran'); ?></small>
  </div>
  <div class="form-group">
    <label for="bukti_pembayaran">No rak :</label>
    <input type="text" name="bukti_pembayaran" class="form-control" id="bukti_pembayaran" value="<?= $jenis['bukti_pembayaran']; ?>">
    <small class="form-text text-danger"><?= form_error('bukti_pembayaran'); ?></small>
  </div>
  <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
  <a href="<?= base_url('Jenis') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
