<section class="catalog">
  <div class="container">
    <h1 class="catalog-title">Overzicht Docenten</h1>
    <ul class="products-list">
    <?php foreach ($teachers as $teacher): ?>
      <li>
        <a class="product-card" href="#">
          <h2><?= $teacher['name'] ?></h2>
          <img src="<?= $teacher['img_url'] ?>" width="156" height="120" alt="<?= $teacher['name'] ?>">
          <div class="product-options">
            <span class="price"><?= $teacher['courses'] ?></span>
          </div>
        </a>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>
</section>
