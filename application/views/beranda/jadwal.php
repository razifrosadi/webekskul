  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?= $title; ?></h2>
          <p>SMANCIS BRILIAN</p>
        </div>
        <?php
        foreach ($jadwal as $j) : ?>
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><?= $j['nama_ekskul']; ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    <?= $j['jadwal_latihan']; ?>
                  </p>
                </div>
              </li>
        </ul>
            </div>
            <?php endforeach; ?>
        </section>