<main class="page-main">
  <div class="page-main__container page-main-article-expo">
    <section class="main-article-expo">
      <article class="article-expo">
        <div class="article-expo__title-wrraper">
          <div class="article-expo__wrapper-expo-article-photo">
            <img src='/public/materials/objects/<?php echo $data['id']; ?>.png' alt="Фото экспоната" class="article-expo__photo" width="420" height="265"></picture>
          </div>
          <h3 class="article-expo__title"><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h3>
        </div>
        <div class="article-expo__wrraper-about wrraper-about">
          <span class="wrraper-about__bold-text wrraper-about__bold-text--date">Дата выпуска:</span>
          <p class="wrraper-about__date">22.04.2014</p>
          <span class="wrraper-about__bold-text wrraper-about__bold-text--category">Категория:</span>
          <p class="wrraper-about__category">Радиотехника и телевидение</p>
          <span class="wrraper-about__bold-text wrraper-about__bold-text--description">Описание:</span>
          <p class="wrraper-about__description"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></p>
          <span class="wrraper-about__bold-text wrraper-about__bold-text--history">История:</span>
          <p class="article-expo__history"><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></p>
        </div>
        <a href="#" id="ref_link_expo" class="article-expo__link-back">НАЗАД</a>
      </article>
    </section>
  </div>
</main>

<!-- <img class="main-image-expo" src="('/public/materials/objects/<?php echo $data['id']; ?>.jpg')" alt="Photo_of_object">
<div class="container">
    <div class="column">
        <div class="page-head">
            <h1><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h1>
            <span class="subheading"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></span>
            <p><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></p>
        </div>
    </div>
</div> -->