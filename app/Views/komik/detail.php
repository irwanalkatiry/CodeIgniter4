<?= $this->extend("layout/template") ?>

<?= $this->section("content") ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="mt-2">Detail Komik</h2>
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $komik['Sampul']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $komik['Judul'];  ?></h5>
        <p class="card-text"><b>Penulis :</b><?= $komik['Penulis'];  ?></p>
        <p class="card-text"><small class="text-body-secondary"><b>Penerbit :</b></small><?= $komik['Penerbit']; ?></p>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
