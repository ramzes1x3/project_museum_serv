<main class="page-main">
  <div class="page-main__container">
    <section class="main-events-article">
      <articel class="main-events-article__main-article article-event">
        <h1 class="article-event__title">
            <?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>
        </h1>
        <div class="article-event__info">
          <p class="article-event__date">
          <?php echo htmlspecialchars($data['date'], ENT_QUOTES); ?>
          </p>
          <!-- <p class="article-event__time">
            16:00
          </p> -->
          <a href="/visit" class="article-event__btn-join">
            ЗАПИСАТЬСЯ
          </a>
        </div>
        <img src='/public/materials/events/<?php echo $data['id']; ?>.jpg' alt="Фото события" class="article-event__photo" width="635" height="400">
        <p class="article-event__text">
            <?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?>
        </p>
        <a href="/events" class="article-event__link">
          НАЗАД
        </a>
      </articel>
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