<?= $this->extend("layout/template") ?>

<?= $this->section("content") ?>
<div class="container">
 <h1 mt-2> <?= $tittle ?> </h1>
 <a href="/komik/create" class="btn btn-primary">Tambah Komik</a>
 <br></br>
<table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Komik</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php $i = 1; ?>
      <?php foreach ($komik as $x): ?>
      <th scope="row"><?= $i++ ?></th>
      <td><img src="/img/<?= $x["Sampul"] ?>" alt="" class = "sampul"></td>
      <td><?= $x["Judul"] ?></td>
      <td>
        <a href="/komik/<?= $x["Slug"] ?>" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
<?= $this->endSection() ?>

