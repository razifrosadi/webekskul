<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Daftar Ekstrakurikuler</h2>
          <p>SMANCIS BRILIAN</p>
        </div>
        <div class="row">
        <?php 
        $c = 1;
        foreach ($kategori as $g) : ?>
<ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
<div style="display: flex; flex-wrap: nowrap;">
  <li data-filter=".filter-" class="filter-"><?=$g['kategori_ekskul']; ?></li>
  <!-- <li data-filter=".filter-<?=$p['kategori_id']; ?>"></li> -->
</ul>
  <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
  
    </div>
    </div>
  <?php $c++; ?>
  <?php endforeach; ?>
</div>
</div>
  
    </section><!-- End Team Section -->