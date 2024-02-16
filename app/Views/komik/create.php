<?= $this->extend("layout/template") ?>
<?= $this->section("content") ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2>Form Tambah Komik</h2>
      <form action="/komik/save" method="post">
        <?= csrf_field(); ?>
  <div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul">
  </div>
  <div class="mb-3">
    <label for="penulis" class="form-label">Penulis</label>
    <input type="text" class="form-control" id="penulis" name="penulis">
  </div>
  <div class="mb-3">
    <label for="penerbit" class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="penerbit" name="penerbit">
  </div>
  <div class="mb-3">
    <label for="sampul" class="form-label">Sampul</label>
    <input type="text" class="form-control" id="sampul" name="sampul">
  </div>
  <button type="submit" class="btn btn-primary">Tambah komik</button>
</form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
