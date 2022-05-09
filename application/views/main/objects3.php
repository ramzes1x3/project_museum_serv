<main class="page-main page-expo-radio expo-bg">
    <div class="expo__container">
        <section class="expo">
        <h1 class="expo__title">
            Авиация и космонавтика
        </h1>
        <div class="container exposition-list">
                <?php if (empty($list)): ?>
                    <p class="clear-page" style="width: 1120px; text-align: center">Список экспонатов пуст</p>
                <?php else: ?>
                    <?php foreach ($list as $val): ?>
                        <div class="post-preview exposition-list__item" style="overflow: hidden">
                            <a href="/object/<?php echo $val['id']; ?>">
                            <div class="exposition-list__wrapper-photo"><picture><source srcset="/public/images/expo_item_photo.webp" type="image/webp"><img src="/public/images/expo_item_photo.png" alt="Фото экспоната" class="exposition-list__photo"></picture></div>
                                <h2 style="display: block; max-height: 47px; overflow: hidden" class="exposition-list__title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                                <h5 style="margin-top: -2px; line-height: 20px" class="exposition-list__text"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?php if (!empty($list)): ?>
                <div class="clearfix">
                        <?php echo $pagination; ?>
                </div>
            <?php endif; ?>  
        </div>
    </div>
</section>
</div>
</main>