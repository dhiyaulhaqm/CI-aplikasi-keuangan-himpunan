 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-shipping-fast mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">

  <div class="form-group">
    <label for="NIM">NIM :</label>
    <input type="text" name="NIM" class="form-control" id="NIM" >
    <small class="form-text text-danger"><?= form_error('NIM'); ?></small>
  </div>
  <div class="form-group">
    <label for="Nama">Nama :</label>
    <input type="text" name="Nama" class="form-control" id="Nama">
    <small class="form-text text-danger"><?= form_error('Nama'); ?></small>
  </div>
  <div class="form-group">
    <label for="Angkatan">Angkatan :</label>
    <input type="text" name="Angkatan" class="form-control" id="Angkatan">
    <small class="form-text text-danger"><?= form_error('Angkatan'); ?></small>
  </div>
  <div class="form-group">
    <label for="Divisi">Divisi</label>
    <input type="text" name="Divisi" class="form-control" id="Divisi">
    <small class="form-text text-danger"><?= form_error('Divisi'); ?></small>
  </div>
  <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
  <a href="<?= base_url('anggota') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
