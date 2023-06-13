  <!-- ======= Frequently Asked Questions Section ======= -->

  <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
<div class="section-title">
          <h2>BERITA HARI INI</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
    <div class="row">
    <?php
          foreach ($berita as $b) : ?>
        <div class="col-3" data-aos="zoom-in" data-aos-delay="100">
            <img
              class="rounded-4"
              style="object-fit: cover; width: 100%; aspect-ratio: 1/1"
              src="<?= base_url('assets/img/ekskul/') . $b['image']; ?>"
              alt=""
            />
            <p class="mt-3">
            <a href="<?= base_url('beranda/vberita2/'). $b['id'] ?>" class="btn-learn-more"> <b> <?= $b['judul']; ?> | <?= $b['created_at']; ?></b> <br /></a>
              <!-- <b><?= $b['judul']; ?> | <?= $b['created_at']; ?></b> <br /> -->
              <?= $b['deskripsi']; ?>
            </p>
        </div>
        <?php endforeach; ?>
        </div>

</div>
</section><!-- End Team Section -->
