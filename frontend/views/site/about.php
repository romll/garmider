<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\assets\AppAssetArticle;
use frontend\assets\AppAssetArticleFoter;

AppAssetArticle::register($this);
AppAssetArticleFoter::register($this);

$this->title = $this->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('headerArticle.php');?>

<div class="row vertical-row">
    <div class="col-md-8">
        <div class="tag-row">
            <span><i class="fa fa-calendar"></i> <a href="#">25 / 05 / 2025</a></span>
            <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a></span>
            <span><i class="fa fa-pencil"></i><a href="#">Admin</a></span>
        </div>
    </div>
    <div class="col-md-4 text-right">
        <div class="btn-group social-group">
            <a target="_blank" href="#" data-social="share-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook text-s circle"></i></a>
            <a target="_blank" href="#" data-social="share-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter text-s circle"></i></a>
            <a target="_blank" href="#" data-social="share-google" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus text-s circle"></i></a>
        </div>
    </div>
</div>
<hr class="space m" />
<div class="row">
    <div class="col-md-4 col-sm-12">
        <a class="img-box lightbox" href="../images/gallery/image-10.jpg" data-lightbox-anima="fade-top">
            <img src="../images/gallery/image-10.jpg" alt="">
        </a>
        <hr class="space s" />
        <a class="img-box lightbox" href="../images/gallery/image-7.jpg" data-lightbox-anima="fade-top">
            <img src="../images/gallery/image-7.jpg" alt="">
        </a>
    </div>
    <div class="col-md-8 col-sm-12">
        <p>
            Fames ultrices dolores vitae euismod lobortis corporis facere id nullam aspernatur litora, vitae numquam do molestiae iaculis. Ullamco, assumenda tempor,
            ullamco blanditiis, pharetra laborum rutrum sunt ipsam, sed, varius dolores nam curabitur, nisi mus, impedit faucibus veritatis aliqua parturient nonummy
            ipsam aptent lacus commodo, doloremque eaque dolor lorem fermentum leo done ass, ipsam, illum condimentum massa delectus, sagittis?
            Voluptatem quis ornare proident qui, mi saepe urna exercitation deserunt phasellus primis, primis quibusdam voluptates saepe etiam accusamus fames cubilia reiciendis
            cumque sunt parturient porttitor repudiandae ullamco nobis fugit porta, aut vero, mus! Minim posuere vivamus. Quod eligendi, repellendus conubia.
            Ultrices sem sapien aliquam velit sed vero, habitasse alias minim voluptates tempore! Suspendisse aperiam, atque aute semper ante, aliquip cillum.
            Eleifend consequat sollicitudin architecto.Allamco nobis fugit porta, aut vero, mus! Minim posuere vivamus. Quod eligendi, repellendus conubia.
            Ultrices sem sapien aliquam velit sed vero, habitasse alias minim voluptates tempore! Suspendisse aperiam, atque aute semper ante, aliquip cillum.
            Eleifend consequat sollicitudin architecto.
        </p>
        <p>
            Fames ultrices dolores vitae euismod lobortis corporis facere id nullam aspernatur litora, vitae numquam do molestiae iaculis. Ullamco, assumenda tempor,
            ullamco blanditiis, pharetra laborum rutrum sunt ipsam, sed, varius dolores nam curabitur, nisi mus, impedit faucibus veritatis aliqua parturient nonummy
            ipsam aptent lacus commodo, doloremque eaque dolor lorem fermentum leo done ass, ipsam, illum condimentum massa delectus, sagittis?
            Voluptatem quis ornare proident qui, mi saepe urna exercitation deserunt phasellus primis, primis quibusdam voluptates saepe etiam accusamus fames cubilia reiciendis
            cumque sunt parturient porttitor repudiandae
        </p>
    </div>
</div>
<hr class="space m" />
<hr />
<hr class="space m" />
<div class="flexslider carousel outer-navs" data-options="minWidth:300,itemMargin:30,numItems:3">
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
</div>


<div id="comments" class="section-bg-color">
    <div class="container content">
        <div class="row">
            <div class="col-md-6">
                <div class="comment-list">
                    <h4>Comments</h4>
                    <div class="item row">
                        <img src="../images/users/user-9.jpg" class="col-md-1" alt="" />
                        <div class="col-md-10">
                            <p class="name">Vaky Yo <span>25 feb, 2018</span></p>
                            <p class="msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                    <div class="item row">
                        <img src="../images/users/user-4.jpg" class="col-md-1" alt="" />
                        <div class="col-md-10">
                            <p class="name">Federico Schiocchet <span>25 feb, 2018</span></p>
                            <p class="msg">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                            </p>
                        </div>
                    </div>
                    <div class="item row">
                        <img src="../images/users/user-7.jpg" class="col-md-1" alt="" />
                        <div class="col-md-10">
                            <p class="name">Vaky Yo <span>25 feb, 2018</span></p>
                            <p class="msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
            </div>
        </div>
    </div>
</div>