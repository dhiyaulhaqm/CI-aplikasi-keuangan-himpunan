 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-users mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">

<div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Anggota</label>
    <select class="form-control" name="NIM" id="exampleFormControlSelect1">
        <?php foreach ($anggota as $anggota) :  ?>
            <option value="<?= $anggota["NIM"] ?>"><?= $anggota["Nama"] ?></option>
        <?php endforeach; ?>
    </select>
  </div>
  
  <div class="form-group">
    <label for="jumlah">Jumlah :</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah">
    <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
  </div>
  <div class="form-group">
    <label for="tanggal">tanggal_bayar :</label>
    <input type="date" name="tanggal_bayar" class="form-control" id="tanggal_bayar">
    <small class="form-text text-danger"><?= form_error('tanggal_bayar'); ?></small>
  </div>
  

  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Jenis Pembayaran</label>
    <select class="form-control" name="id_pembayaran" id="exampleFormControlSelect1">
        <?php foreach ($jenis as $jenis) :  ?>
            <option value="<?= $jenis["id_pembayaran"] ?>"><?= $jenis["jenis_pembayaran"] ?></option>
        <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
  <a href="<?= base_url('kas_masuk') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
