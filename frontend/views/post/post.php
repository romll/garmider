<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAssetArticle;
use frontend\assets\AppAssetArticleFoter;
use yii2mod\comments\widgets\Comment;
use hauntd\vote\widgets\Vote;

//AppAssetArticleFoter::noConflict($this);
AppAssetArticle::register($this);
AppAssetArticleFoter::register($this);

$this->title = $postOne->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $postOne->brief
], 'description');

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to(['post/post', 'id' => $postOne->id, 'slug'=>$postOne->slug], true)
]);

$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'article'
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $postOne->title
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $postOne->brief
]);

$this->registerMetaTag([
    'property' => 'og:image',
    'content' => $postOne->getThumbFileUrl('banner', 'thumb')
]);

$this->registerMetaTag([
    'property' => 'fb:app_id',
    'content' => '296745754318879'
]);

$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('headerArticle.php');?>
<?php //var_dump($postOne);?>

<div class="row vertical-row">
    <div class="col-md-8">
        <div class="tag-row">
            <span><i class="fa fa-calendar"></i> <a href="#"><?= Yii::$app->formatter->asDate($postOne->created_at, 'php:d/m/Y'); ?></a></span>
            <!--<span><i class="fa fa-bookmark"></i> <a href="#"><?/*= $postOne->category->title; */?></a></span>-->
            <span><i class="fa fa-pencil"></i><a href="#"><?= $postOne->user->username; ?></a></span>
            <span>
                <?= Vote::widget([
                    'entity' => 'itemVote',
                    'model' => $postOne,
                    'viewFile' => '@frontend/views/vote/vote',
                    'options' => ['class' => 'vote vote-visible-buttons']
                ]); ?>
            </span>
        </div>
    </div>
    <div class="col-md-4 text-right">
        <div class="btn-group social-group">
            <a target="_blank" href="#" data-social="share-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook text-s circle"></i></a>
            <a target="_blank" href="#" data-social="share-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter text-s circle"></i></a>
            <!--<a target="_blank" href="#" data-social="share-google" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus text-s circle"></i></a>-->
        </div>
    </div>
</div>
<hr class="space m" />
<div class="row">
    <!--<div class="col-md-4 col-sm-12">
        <a class="img-box lightbox" href="../images/gallery/image-10.jpg" data-lightbox-anima="fade-top">
            <img src="../images/gallery/image-10.jpg" alt="">
        </a>
        <hr class="space s" />
        <a class="img-box lightbox" href="../images/gallery/image-7.jpg" data-lightbox-anima="fade-top">
            <img src="../images/gallery/image-7.jpg" alt="">
        </a>
    </div>-->
    <div class="col-md-12 col-sm-12">
        <p>
            <?= $postOne->content; ?>
        </p>
    </div>
</div>
<hr class="space m" />

<hr />
<hr class="space m" />
<!--<div class="flexslider carousel outer-navs" data-options="minWidth:300,itemMargin:30,numItems:3">
    <ul class="slides">
        <li>
            <div class="advs-box niche-box-blog text-m">
                <div class="block-top">
                    <div class="block-infos">
                        <div class="block-data">
                            <p class="bd-day">25</p>
                            <p class="bd-month">July</p>
                        </div>
                        <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
                    </div>
                    <div class="block-title">
                        <h2 class="text-m"><a href="#">Techstars launches at the partech experience around the world</a></h2>
                        <div class="tag-row">
                            <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a></span>
                            <span><i class="fa fa-pencil"></i><a>Admin</a></span>
                        </div>
                    </div>
                </div>
                <a class="img-box img-scale-up" href="#">
                    <img src="../images/gallery/image-5.jpg" alt="">
                </a>
                <p class="excerpt">
                    Officiis, ante nec pretium cursus netus morbi. Rerum quod,
                    ullam molestias aborum lacinia qui numquam fermentum veniam sociis etisus elementum, placeat metus velidiess prgoressonum bertollo.
                </p>
                <a class="btn btn-sm" href="#">Read more </a>
            </div>
        </li>
        <li>
            <div class="advs-box niche-box-blog text-m">
                <div class="block-top">
                    <div class="block-infos">
                        <div class="block-data">
                            <p class="bd-day">02</p>
                            <p class="bd-month">July</p>
                        </div>
                        <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
                    </div>
                    <div class="block-title">
                        <h2 class="text-m"><a href="#">Free speech against abuse or die trying it until the goal reached</a></h2>
                        <div class="tag-row">
                            <span><i class="fa fa-bookmark"></i> <a href="#">Business</a></span>
                            <span><i class="fa fa-pencil"></i><a>Admin</a></span>
                        </div>
                    </div>
                </div>
                <a class="img-box img-scale-up" href="#">
                    <img src="../images/gallery/image-6.jpg" alt="">
                </a>
                <p class="excerpt">
                    Officiis, ante nec pretium cursus netus morbi. Rerum quod, ullam molestia aborum
                    lacinia qui numquam, fermentum veniam sociis etisus elementum, placeat metuso palentio pertolu abnomunus partello.
                </p>
                <a class="btn btn-sm" href="#">Read more </a>
            </div>
        </li>
        <li>
            <div class="advs-box niche-box-blog text-m">
                <div class="block-top">
                    <div class="block-infos">
                        <div class="block-data">
                            <p class="bd-day">19</p>
                            <p class="bd-month">July</p>
                        </div>
                        <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
                    </div>
                    <div class="block-title">
                        <h2 class="text-m"><a href="#">Idea cellular to form the largest technological company</a></h2>
                        <div class="tag-row">
                            <span><i class="fa fa-bookmark"></i> <a href="#">Web</a></span>
                            <span><i class="fa fa-pencil"></i><a>Admin</a></span>
                        </div>
                    </div>
                </div>
                <a class="img-box img-scale-up" href="#">
                    <img src="../images/gallery/image-8.jpg" alt="">
                </a>
                <p class="excerpt">
                    Officiis, ante nec pretium cursus netus morbi. Rerum quodullam molestias
                    Laborum lacinia qui numquam, fermentum veniam sociis eRisus elementum, placeat metus machines.
                </p>
                <a class="btn btn-sm" href="#">Read more </a>
            </div>
        </li>
        <li>
            <div class="advs-box niche-box-blog text-m">
                <div class="block-top">
                    <div class="block-infos">
                        <div class="block-data">
                            <p class="bd-day">25</p>
                            <p class="bd-month">July</p>
                        </div>
                        <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
                    </div>
                    <div class="block-title">
                        <h2 class="text-m"><a href="#">Double down on its recruitment business insiderd and finance</a></h2>
                        <div class="tag-row">
                            <span><i class="fa fa-bookmark"></i> <a href="#">Technology</a></span>
                            <span><i class="fa fa-pencil"></i><a>Admin</a></span>
                        </div>
                    </div>
                </div>
                <a class="img-box img-scale-up" href="#">
                    <img src="../images/gallery/image-7.jpg" alt="">
                </a>
                <p class="excerpt">
                    Officiis, ante nec pretium cursus netus morbi. Rerum quod, ullam molestias! Laborum lacinia qui numquam, fermentum veniam sociis et? Risus elementum, placeat metus.
                </p>
                <a class="btn btn-sm" href="#">Read more </a>
            </div>
        </li>
        <li>
            <div class="advs-box niche-box-blog text-m">
                <div class="block-top">
                    <div class="block-infos">
                        <div class="block-data">
                            <p class="bd-day">02</p>
                            <p class="bd-month">July</p>
                        </div>
                        <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
                    </div>
                    <div class="block-title">
                        <h2 class="text-m"><a href="#">And wants startups building robots and intellgient softwares</a></h2>
                        <div class="tag-row">
                            <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a></span>
                            <span><i class="fa fa-pencil"></i><a>Admin</a></span>
                        </div>
                    </div>
                </div>
                <a class="img-box img-scale-up" href="#">
                    <img src="../images/gallery/image-3.jpg" alt="">
                </a>
                <p class="excerpt">
                    Officiis, ante nec pretium cursus netus morbi. Rerum quod, ullam molestias! Laborum lacinia qui numquam, fermentum veniam sociis et? Risus elementum, placeat metus.
                </p>
                <a class="btn btn-sm" href="#">Read more </a>
            </div>
        </li>
        <li>
            <div class="advs-box niche-box-blog text-m">
                <div class="block-top">
                    <div class="block-infos">
                        <div class="block-data">
                            <p class="bd-day">19</p>
                            <p class="bd-month">July</p>
                        </div>
                        <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
                    </div>
                    <div class="block-title">
                        <h2 class="text-m"><a href="#">The food delivery robots are real and are truly coming now</a></h2>
                        <div class="tag-row">
                            <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a></span>
                            <span><i class="fa fa-pencil"></i><a>Admin</a></span>
                        </div>
                    </div>
                </div>
                <a class="img-box img-scale-up" href="#">
                    <img src="../images/gallery/image-5.jpg" alt="">
                </a>
                <p class="excerpt">
                    Officiis, ante nec pretium cursus netus morbi. Rerum quod, ullam molestias! Laborum lacinia qui numquam, fermentum veniam sociis et? Risus elementum, placeat metus.
                </p>
                <a class="btn btn-sm" href="#">Read more </a>
            </div>
        </li>
    </ul>
</div>-->


<div id="comments" class="section-bg-color">
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
                <div class="comment-list">
                    <?= Comment::widget([
                        'model' => $postOne,
                    ]); ?>
                    <!--<h4>Comments</h4>
                    <div class="item row">
                        <img src="../images/users/user-9.jpg" class="col-md-1" alt="" />
                        <div class="col-md-10">
                            <p class="name">Vaky Yo <span>25 feb, 2018</span></p>
                            <p class="msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>-->
                </div>
            </div>
            <!--<div class="col-md-6">
                <div class="form-box">
                    <h4>Leave a comment</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Name</p>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <p>Email</p>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr class="space xs" />
                    <div class="row">
                        <div class="col-md-12">
                            <p>Website</p>
                            <input type="text" class="form-control" placeholder="">
                            <hr class="space xs" />
                            <p>Messagge</p>
                            <textarea name="messagge" class="form-control"></textarea>
                            <hr class="space s" />
                            <button class="btn btn-sm" type="button">Send comment</button>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>