 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-users mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">
    <input type="hidden" name="id_admin" value="<?= $admin['id_admin']; ?>">
  <div class="form-group">
    <label for="nama">Nama :</label>
    <input type="text" name="username" class="form-control" id="username" value="<?= $admin['username']; ?>">
    <small class="form-text text-danger"><?= form_error('username'); ?></small>
  </div>
  <div class="form-group">
    <label for="emai1">Email :</label>
    <input type="text" name="email" class="form-control" id="emai1" value="<?= $admin['email']; ?>">
    <small class="form-text text-danger"><?= form_error('email'); ?></small>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" value="<?= $admin['password']; ?>">
    <small class="form-text text-danger"><?= form_error('password'); ?></small>
  </div>
  <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
  <a href="<?= base_url('admin') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
