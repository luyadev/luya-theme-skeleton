<?php
/**
 * @var $this \luya\web\View
 */
 
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->composition->language; ?>">
    <head>
        <title><?= $this->title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="boehsermoe">
        <?php $this->head() ?>
    </head>
    <body class="theme-THEME_NAME">
    <?php $this->beginBody() ?>

        <div id="theme-wrapper">
            <?php echo $content ?>
        </div>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
