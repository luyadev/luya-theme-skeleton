<?php
$this->beginPage();
?>
<html>
    <head>
        <title><?= $this->title; ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <!-- ADD YOUR THEME LAYOUT -->
        <?= $content ?>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>