    <head>
        <meta charset="UTF-8">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <link rel="stylesheet" href="/public/styles/style.min.css">
        <link rel="stylesheet" href="/public/styles/objects1.css">
        <link rel="preload" as="font" type="font/woff2"
          href="/public/fonts/OpenSans-Regular.woff2" crossorigin>
        <link rel="preload" as="font" type="font/woff2"
          href="/public/fonts/OpenSans-Bold.woff2" crossorigin>

        <script src="/public/scripts/jquery.js"></script>
        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/popper.js"></script>
        <script src="/public/scripts/bootstrap.js"></script>
    </head>
            <div class="container" style="background-image: url('/public/images/Expo_radio_back.png')">
                <h1 class="expo-title">  Радиотехника и телевидение  </h1>
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
        </div>

