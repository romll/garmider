<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;
use frontend\assets\AppAsset;
use frontend\assets\AppAssetBlog;
use frontend\assets\AppAssetIndexFoter;
use yii\web\View;
use common\widgets\Alert;
use Da\User\Widget\LoginWidget;

//AppAsset::register($this);
AppAssetBlog::register($this);
AppAssetIndexFoter::register($this);
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
    <link rel="icon" href="../images/favicon.png">
</head>
<body class="home">
<?php $this->beginBody() ?>

<div id="preloader"></div>
<header class="fixed-top scroll-change" data-menu-anima="fade-in">
    <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top scroll-hide" role="navigation">
        <div class="navbar-mini scroll-hide">
            <div class="container">
                <!--<div class="nav navbar-nav navbar-left">
                    <span><i class="fa fa-phone"></i>1-800-405-377</span>
                    <hr />
                    <span><i class="fa fa-envelope"></i>info@company.com</span>
                    <hr />
                    <span>  <i class="fa fa-map-marker"></i>Collins Street 8007, USA</span>
                    <hr />
                    <span><i class="fa fa-calendar"></i>Mon - Sat: 8.00 - 19:00</span>
                </div>-->
                <div class="nav navbar-nav navbar-right">
                    <div class="minisocial-group">
                        <a target="_blank" href="#"><i class="fa fa-facebook first"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
                        <!--<a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-main scroll-hide">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <?= Html::img('@web/images/logo.png', ['alt' => 'logo']) ?>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <?php
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Реєстрація', 'url' => ['/user/registration/register'],];
                        $menuItems[] = ['label' => 'Вхід', 'url' => ['/user/security/login'],];
                    } else {
                        $menuItems[] = [
                            'label' => 'Профіль',
                            'url' => ['/user/settings/profile'],
                        ];
                        $menuItems[] = [
                            'label' => 'Вихід (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/user/security/logout'],
                            'template' => '<a href="{url}" data-method="post">{label}</a>',
                        ];
                    }
                    echo Menu::widget([
                        'options' => ['class' => 'nav navbar-nav pull-right',],
                        'itemOptions' => ['class' => 'dropdown'],
                        'items' => $menuItems,
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>

<?/*= $this->blocks['sidebar'];*/?> <!--use headerNews.php-->

<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            
            <?= Alert::widget() ?>
            
            <?php if(Yii::$app->controller->module->id === 'user') : ?>
                <div class="col-md-12 col-sm-12">
                    <?= $content ?>
                </div>
            <?php else: ?>
            <div class="col-md-9 col-sm-12">
                <?= $content ?>
            </div>
            
            <div class="col-md-3 col-sm-12 widget">

                <?php if(Yii::$app->user->isGuest) : ?>

                    <div class="list-group list-blog">
                        <?= LoginWidget::widget() ?>
                    </div>

                <?php endif; ?>

                <?= $this->render(
                    'right.php'//,
                //['directoryAsset' => $directoryAsset, 'usernam' => $usernam]
                )?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>

<?= $this->render(
    'footer.php'//,
//['directoryAsset' => $directoryAsset, 'usernam' => $usernam]
)?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
