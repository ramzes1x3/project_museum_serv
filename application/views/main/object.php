<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="/public/styles/style.min.css">
    <link rel="stylesheet" href="/public/styles/one-object.css">
    <link rel="preload" as="font" type="font/woff2"
      href="/public/fonts/OpenSans-Regular.woff2" crossorigin>
    <link rel="preload" as="font" type="font/woff2"
      href="/public/fonts/OpenSans-Bold.woff2" crossorigin>
</head>
<img class="main-image-expo" src="('/public/materials/objects/<?php echo $data['id']; ?>.jpg')" alt="Photo_of_object">
<div class="container">
    <div class="column">
        <div class="page-head">
            <h1><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h1>
            <span class="subheading"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></span>
            <p><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></p>
        </div>
    </div>
</div>