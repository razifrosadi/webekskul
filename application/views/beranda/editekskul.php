
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Daftar Ekstrakurikuler</h2>
          <p>SMANCIS BRILIAN</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-basketball of sman 1 cisaat">Ekskul Wajib</li>
          <li data-filter=".filter-karate shindoka">Olahraga</li>
          <li data-filter=".filter-japanese">Kesenian</li>
          <li data-filter=".filter-japanese">Akademik</li>
          <li data-filter=".filter-japanese">Budaya</li>
          <li data-filter=".filter-japanese">Keagamaan</li>
        </ul>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
       
        <?php
        $r = 1;
          foreach ($profil as $p) : ?>
          <div class="col-md-4 col-md-6 portfolio-item filter-app">
            
    <div class="portfolio-img"> <img src="<?= base_url('assets/img/ekskul/') . $p['imagep']; ?>" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
                <h4> <?= $p['judul_informasi']; ?></h4>
                <p> <?= $p['isi_informasi']; ?></p>
                <a href="<?= base_url('assets/img/ekskul/') . $p['imagep']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $p['judul_informasi']; ?>" ><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('beranda/kegiatan/') .$p['id_profil'] ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
            <?php $r++; ?>
            <?php endforeach; ?>
      </div>
    </div>
    </section><!-- End Team Section -->