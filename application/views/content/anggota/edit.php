 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-users mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">
  <div class="form-group">
    <label for="NIM">NIM :</label>
    <input type="text" readonly name="NIM" class="form-control" id="NIM" value="<?= $anggota['NIM']; ?>">
    <small class="form-text text-danger"><?= form_error('NIM'); ?></small>
  </div>
  <div class="form-group">
    <label for="perusahaan">Nama :</label>
    <input type="text" name="Nama" class="form-control" id="Nama" value="<?= $anggota['Nama']; ?>">
    <small class="form-text text-danger"><?= form_error('Nama'); ?></small>
  </div>
  <div class="form-group">
    <label for="alamat">Angkatan :</label>
    <input type="text" name="Angkatan" class="form-control" id="Angkatan" value="<?= $anggota['Angkatan']; ?>">
    <small class="form-text text-danger"><?= form_error('Angkatan'); ?></small>
  </div>
  <div class="form-group">
    <label for="no_telp">Divisi</label>
    <input type="no_telp" name="Divisi" class="form-control" id="Divisi" value="<?= $anggota['Divisi']; ?>">
    <small class="form-text text-danger"><?= form_error('Divisi'); ?></small>
  </div>
  <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
  <a href="<?= base_url('anggota') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
