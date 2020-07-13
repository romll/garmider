<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Панель адміністратора';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <?= HTML::a(
                '<div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-orange"><i class="fa fa-book"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Блог</span>
                        <span class="box-success">Керування контентом, коментарями, категоріями та хеш-тегами</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>',
            ['/blog'],
            ['data-method' => 'post'])?>
                <div class="col-lg-4">
                    <?= HTML::a(
                        '<div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-orange"><i class="fa fa-comments"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Коментарі</span>
                        <span class="box-success">Керування коментарями</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>',
                        ['/comment/manage'],
                        ['data-method' => 'post'])?>
            <div class="col-lg-4">
                <?= Html::a(
                '<div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Користувачі</span>
                        <span class="box-info">Керування користувачами: створення, блокування, інформація</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>', 
            ['/user/admin/index'],
            ['data-method' => 'post'])?>
            <div class="col-lg-4">
                <?= Html::a('
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-blue"><i class="fa fa-unlock"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">RBAC</span>
                        <span class="box-info">Керування доступом на основі ролей користувача</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>',
                ['/admin'],
                ['data-method' => 'post'])?>
            </div>
        </div>

    </div>
</div>
