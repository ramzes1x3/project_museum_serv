<main class="page-main">
  <div class="page-main__container">
    <section class="news-article">
      <article class="news-article__wrapper">
        <h1 class="news-article__title">
            <?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>
        </h1>
        <p class="news-article__date">
        <?php echo htmlspecialchars($data['date'], ENT_QUOTES); ?>
        </p>
        <img src='/public/materials/posts/<?php echo $data['id']; ?>.jpg' alt="Новостное фото" class="news-article__photo" width="620" height="450">
        <p class="news-article__text">
            <?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?>
        </p>
        <a href="/posts" class="news-article__link-back">
          НАЗАД
        </a>
      </article>
    </section>
  </div>
</main>

<!-- <header class="masthead" style="background-image: url('/public/materials/posts/<?php echo $data['id']; ?>.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h1>
                    <span class="subheading"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></p>
        </div>
    </div>
</div> -->