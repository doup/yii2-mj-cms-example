<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use mobilejazz\yii2\cms\common\models\Menu;
use mobilejazz\yii2\cms\frontend\views\utils\NavUtils;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<main>
    <?php
    $menu = Menu::findOne([ 'key' => 'main-menu', ]);
    if (isset($menu)) {
        $menu = NavUtils::buildMenu($menu);
    }
    NavBar::begin([
        'brandLabel' => \Yii::$app->name,
        'brandUrl'   => Yii::$app->homeUrl,
        'options'    => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    /*
    if (isset($menu)) {
        $menuItems = $menu;
    } else {
        $menuItems = [
            [ 'label' => 'Home', 'url' => [ '/site/index' ] ],
            [ 'label' => 'About', 'url' => [ '/site/about' ] ],
            [ 'label' => 'Contact', 'url' => [ '/site/contact' ] ],
        ];
    }

    if (Yii::$app->user->isGuest) {
        $menuItems[] = [ 'label' => 'Signup', 'url' => [ '/site/signup' ] ];
        $menuItems[] = [ 'label' => 'Login', 'url' => [ '/site/login' ] ];
    } else {
        $menuItems[] = '<li>' . Html::beginForm([ '/site/logout' ],
                'post') . Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',
                [ 'class' => 'btn btn-link logout' ]) . Html::endForm() . '</li>';
    }
    */
    echo Nav::widget([
        'options' => [ 'class' => 'navbar-nav navbar-right' ],
        'items'   => $menuItems,
    ]);
    NavBar::end();
    ?>   
    <?= $content ?> 
</main>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; doup, <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
