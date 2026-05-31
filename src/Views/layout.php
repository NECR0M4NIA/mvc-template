<!DOCTYPE html>
<html lang="en">

<head>

    <!-- METAS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITLE -->
    <title><?= $title ?? '' ?></title>

    <!-- CSS -->
     <link rel="stylesheet" href="/css/app.css">

</head>

<body>

<main><?php require_once $view ?></main>

</body>

</html>