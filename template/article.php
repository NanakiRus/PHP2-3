<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <article>
            <form method="post" action="/obychenie/Php2-02/saveArticle.php">
                <p><?php if (!empty($author = $news->author)) {
                    echo $author->firstname . ' ' . $author->lastname;
                    } ?></p>
                <input type="hidden" name="id" value="<?php echo $news->id; ?>">
                <p><input type="text" class="form-control" name="title" value="<?php echo $news->title; ?>"></p>
                <p><textarea name="text" class="form-control" rows="3"><?php echo $news->text; ?></textarea></p>
                <input value="Сохранить" class="btn btn-default btn-lg" type="submit">
                <a class="btn btn-default btn-lg" href="/obychenie/Php2-02/deleteArticle.php?id=<?php echo $news->id; ?>">Удалить</a>
            </form>
    </article>
</div>

</body>
</html>