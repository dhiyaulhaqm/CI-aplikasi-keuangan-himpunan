 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-users mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="POST" class="mx-5 my-3">
  <div class="form-group">
    <input hidden type="text" name="kode_kas" class="form-control" id="kode_kas" value="<?= $kas_masuk['kode_kas']; ?>">
    <small class="form-text text-danger"><?= form_error('kode_kas'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Anggota</label>
    <select class="form-control" name="NIM" id="exampleFormControlSelect1">
        <?php foreach ($anggota as $anggota) :  ?>
          <?php if( $anggota['NIM'] == $kas_masuk['NIM']) : ?>
            <option value="<?= $anggota["NIM"] ?>" selected><?= $anggota["Nama"] ?></option>
            <?php else :  ?>
              <option value="<?= $anggota["NIM"] ?>"><?= $anggota["Nama"] ?></option>
              <?php endif; ?>
        <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah :</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $kas_masuk['jumlah']; ?>">
    <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
  </div>
  <div class="form-group">
    <label for="tanggal_bayar">tanggal bayar :</label>
    <input type="date" name="tanggal_bayar" class="form-control" id="tanggal_bayar" value="<?= $kas_masuk['tanggal_bayar']; ?>">
    <small class="form-text text-danger"><?= form_error('tanggal_bayar'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Pembayaran</label>
    <select class="form-control" name="id_pembayaran" id="exampleFormControlSelect1">
        <?php foreach ($jenis as $jenis) :  ?>
          <?php if( $jenis['id_pembayaran'] == $kas_masuk['id_pembayaran']) : ?>
            <option value="<?= $jenis["id_pembayaran"] ?>" selected><?= $jenis["jenis_pembayaran"] ?></option>
            <?php else :  ?>
              <option value="<?= $jenis["id_pembayaran"] ?>"><?= $jenis["jenis_pembayaran"] ?></option>
              <?php endif; ?>
        <?php endforeach; ?>
    </select>
  </div>

  
  <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
  <a href="<?= base_url('kas_masuk') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
