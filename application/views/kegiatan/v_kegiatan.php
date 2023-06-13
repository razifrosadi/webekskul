</section><!-- End About Us Section -->
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>kegiatan</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-basketball of sman 1 cisaat">Sport</li>
          <li data-filter=".filter-karate shindoka">Science</li>
          <li data-filter=".filter-japanese">Art</li>
        </ul>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
       
        <?php
          foreach ($profil as $p) : ?>
          <div class="col-md-4 col-md-6 portfolio-item filter-app">
            <?= $this->session->flashdata('message'); ?>
    <div class="portfolio-img"> <img src="<?= base_url('assets/img/ekskul/') . $p['imagep']; ?>" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
                <h4> <?= $p['judul']; ?></h4>
                <p> <?= $p['isi']; ?></p>
                <a href="<?= base_url('assets/img/ekskul/') . $p['imagep']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $p['judul']; ?>" ><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('beranda/kegiatan') ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
            <?php endforeach; ?>
      </div>
    </div>
