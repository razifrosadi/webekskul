<section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
<div class="section-title">
          <h2>PRESTASI</h2>
          <p></p>
        </div>
    <div class="row">

<ul class="list-unstyled">
<?php
          foreach ($prestasi as $r) : ?>
  <!-- <li><?= $r['judul_prestasi']; ?> | <?= $r['created_at']; ?></li> -->
  <p class="h1"><?= $r['judul_prestasi']; ?> | <?= $r['created_at']; ?></p>
  <blockquote class="blockquote">
<p class="mb-0"><?= $r['deskripsi_prestasi']; ?></p>
</blockquote>
  

<img src="<?= base_url('assets/img/ekskul/') . $r['image_prestasi']; ?>" class="rounded float-start" alt="...">
<?php endforeach; ?>
</div>

</div>
</section><!-- End Team Section -->