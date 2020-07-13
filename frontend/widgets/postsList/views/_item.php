<?php
use kartik\social\FacebookPlugin;
use frontend\widgets\postsList\assets\AppAssetReadmoreInit;

AppAssetReadmoreInit::register($this);
?>

<div class="advs-box niche-box-blog">
    <div class="block-top">
        <div class="block-infos">
            <div class="block-data">
                <p class="bd-day"><?= $created_day ?></p>
                <p class="bd-month"><?= $created_month ?></p>
            </div>
            <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
        </div>
        <div class="block-title">
            <h2><a href="<?= $url ?>">
                    <?= $title; ?>
                </a></h2>
            <div class="tag-row">
                                <span><i class="fa fa-bookmark"></i>
                                    <a href="#">
                                        <?= $categoryTitle; ?>
                                    </a>
                                </span>
                                <span><i class="fa fa-pencil"></i>
                                    <a>
                                        <?= $username; ?>
                                    </a>
                                </span>
            </div>
        </div>
    </div>
    <!--<a class="img-box" href="blog-single-1.html">
        <img src="../images/gallery/image-1.jpg" alt="">
    </a>-->
    <div class="panel">
        <div class="inner">
            <article>
                <?= $content; ?>
            </article>
        </div>
    </div>
    <div class="block-top">
        <div class="block-infos">
            <div class="block-data">
                                <span><a href="<?= $urlAnchor; ?>"><i class="fa fa-comments-o text-xl"></i><?= $headerText; ?></a></span>
                <!--<p class="bd-month"><?/*= Yii::$app->formatter->asDate($post->created_at, 'php:F'); */?></p>-->
            </div>
            <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
        </div>
        <div class="block-title">
            <div class="tag-row">
                                <span>
                                    <?=
                                    \hauntd\vote\widgets\Vote::widget([
                                        'entity' => 'itemVote',
                                        'model' => $modelVote,
                                        'viewFile' => '@frontend/views/vote/vote',
                                        'options' => ['class' => 'vote vote-visible-buttons']
                                    ]);
                                    ?>
                                </span>
                                <span>
                                    <div class="btn-group btn-group-lg btn-group-icons" role="group">
                                        <!--<a data-social="share-facebook" class="btn b"><i class="fa fa-facebook"></i></a>-->
                                        <?=
                                        FacebookPlugin::widget(['type'=>FacebookPlugin::SHARE, 'settings' => ['size'=>'large', 'href' => $url ,'layout'=>'button_count']]);
                                        ?>
                                        <a data-social="share-twitter" class="btn btn-default"><i class="fa fa-twitter"></i></a>
                                        <!--<a data-social="share-google" class="btn btn-default"><i class="fa fa-google-plus"></i></a>-->
                                    </div>
                                </span>
            </div>
        </div>
    </div>
</div>
<hr class="space m" />