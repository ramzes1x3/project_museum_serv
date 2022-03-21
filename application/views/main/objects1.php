<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Политехнический музей ИТА ЮФУ</title>
        <meta charset="UTF-8">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <meta name = "description" content = "Политехнический музей ИТА ЮФУ">
        <link rel="stylesheet" href="/public/styles/style.min.css">
        <link rel="stylesheet" href="/public/styles/objects1.css">
        <link rel="shortcut icon" href="/public/images//logo_museum_history.png">
        <link rel="preload" as="font" type="font/woff2"
          href="/public/fonts/OpenSans-Regular.woff2" crossorigin>
        <link rel="preload" as="font" type="font/woff2"
          href="/public/fonts/OpenSans-Bold.woff2" crossorigin>

        <script src="/public/scripts/jquery.js"></script>
        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/popper.js"></script>
        <script src="/public/scripts/bootstrap.js"></script>
    </head>
    <body class="page__body">
        <div class="page-wrapper">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список экспонатов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <a href="/object/<?php echo $val['id']; ?>">
                            <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h6 class="post-subtitle"><?php echo htmlspecialchars($val['date'], ENT_QUOTES); ?></h6>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
                        </a>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
    </body>
    <script src="app.min.js"></script>
</html>