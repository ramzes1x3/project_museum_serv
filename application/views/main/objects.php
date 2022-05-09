<div class="container">
    <div class="row">
            <?php if (empty($list)): ?>
                <p class="clear-page">Список экспонатов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <a href="/object/<?php echo $val['id']; ?>">
                            <img class="img-expo" src="/public/images/expo_item.png" alt="expo_photo">
                            <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h6 class="post-subtitle"><?php echo htmlspecialchars($val['date'], ENT_QUOTES); ?></h6>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
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