<?php

use yii\helpers\Html;
use frontend\assets\AppAssetBlogFoter;

?>

<footer class="footer-base">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-center text-left">
                    <?= Html::img('@web/images/logo.png', ['alt' => 'logo']) ?>
                    <hr class="space m" />
                    <!--<p class="text-s">Collins Street West 8007, San Fransico, United States.</p>-->
                    <div class="tag-row text-s">
                        <!--<span>support@company.com</span>
                        <span>+02 3205550678</span>-->
                    </div>
                    <hr class="space m" />
                    <div class="btn-group social-group btn-group-icons">
                        <a target="_blank" href="#" data-social="share-facebook">
                            <i class="fa fa-facebook text-xs circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-twitter">
                            <i class="fa fa-twitter text-xs circle"></i>
                        </a>
                       <!-- <a target="_blank" href="#" data-social="share-google">
                            <i class="fa fa-google-plus text-xs circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-linkedin">
                            <i class="fa fa-linkedin text-xs circle"></i>
                        </a>-->
                    </div>
                </div>
                <div class="col-md-4 footer-left text-left">
                    <div class="row">
                        <!--<div class="col-md-6 text-s">
                            <h3>Menu</h3>
                            <a href="#">Home</a><br />
                            <a href="#">Contacts</a><br />
                            <a href="#">Future projects</a><br />
                            <a href="#">Locations</a><br />
                            <a href="#">Latest news</a><br />

                        </div>-->
                        <!--<div class="col-md-6 text-s">
                            <h3>Pages</h3>
                            <a href="#">Support</a><br />
                            <a href="#">Terms of services</a><br />
                            <a href="#">RSS Feeds</a><br />
                            <a href="#">Partnerships</a><br />
                            <a href="#">Latest news</a><br />
                        </div>-->
                    </div>
                </div>
                <div class="col-md-4 footer-left text-left">
                    <!--<h3>You can trust us</h3>
                    <p class="text-s">
                        Utenim ad minim veniam quis nostrud exercitation ullamco lorem ipsum dolor sit ametullamco lorem ipsum dolor sit ametullamco lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmo.
                    </p>-->
                    <hr class="space xs" />
                    <!--<img src="../images/cards-icon.png" alt="" />-->
                </div>
            </div>
        </div>
        <div class="row copy-row">
            <div class="col-md-12 copy-text">
                <p>&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
                <p><?= Yii::powered() ?></p>
            </div>
        </div>
    </div>

    <?php
        AppAssetBlogFoter::register($this);
    ?>

</footer>