<section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
<div class="section-title">
          <h2>BERITA HARI INI</h2>
          <p></p>
        </div>
    <div class="row">

<ul class="list-unstyled">
<?php
          foreach ($berita as $b) : ?>
  <!-- <li><?= $b['judul']; ?> | <?= $b['created_at']; ?></li> -->
  <p class="h1"><?= $b['judul']; ?> | <?= $b['created_at']; ?></p>
  <blockquote class="blockquote">
<p class="mb-0"><?= $b['deskripsi']; ?></p>
</blockquote>
  <!-- <li><?= $b['deskripsi']; ?></li> -->
  <!-- <li>Structurally, it's still a list.</li>
  <li>However, this style only applies to immediate child elements.</li>
  <li>Nested lists:
    <ul>
      <li>are unaffected by this style</li>
      <li>will still show a bullet</li>
      <li>and have appropriate left margin</li>
    </ul>
  </li>
  <li>This may still come in handy in some situations.</li>
</ul> -->

<img src="<?= base_url('assets/img/ekskul/') . $b['image']; ?>" class="rounded float-start" alt="...">
<?php endforeach; ?>
</div>

</div>
</section><!-- End Team Section -->