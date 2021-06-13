<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/styles.css" rel="stylesheet">
    <title>Form</title>
</head>
<body class="d-flex align-items-center flex-column w-20 p-3 text-center"
      style=" height: 100vh; background-image: url(/img/background.jpg); background-size: cover">

<h1><?= $title ?? '' ?></h1>

<main>
    <?= include 'templates/menu.php' ?>
    <!-- проверяем если есть сессия с ключем мессадж то выводим его через алерт, если нет, то ничего, затем завершаем вызов сессии и закрываем проверку -->
    <?php if (isset($_SESSION['message'])) : ?>
    <div class="alert alert-primary" role="alert">
        <?= $_SESSION['message'] ?>
    </div>
    <?php unset($_SESSION['message']); endif; ?>
    <!-- здесь будет контент (стрианцы) которые собирается в буфер в файле index.php -->
    <?= $content ?? '' ?>

</main>

<footer class="bottom-0">
    <?= include 'templates/footer.php' ?>
</footer>
</body>
</html>