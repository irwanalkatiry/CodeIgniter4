<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2>Kontak Kita!</h2>
        <?php foreach($alamat as $x): ?>
            <ul>
              <li><?=$x['alamat'];?></li>
              <li><?=$x['tipe'];?></li>
              <li><?=$x['kota'];?></li>
            </ul>
        <?php endforeach;?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>