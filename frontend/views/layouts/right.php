<?php

use frontend\widgets\menuCategory\MenuCategoryWidget;

?>

    <!--<div class="input-group search-blog list-blog">
        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
    </div>-->
    <hr class="space s" />

    <div class="list-group list-blog">
        <p class="list-group-item active">Категорії</p>
            <?= MenuCategoryWidget::widget(['tpl' => 'menuCategory']) ?>
    </div>

    <!--<div class="list-group list-blog">
        <p class="list-group-item active">Latest posts</p>
        <div class="list-group-item">
            <div class="tag-row icon-row"><span><i class="fa fa-calendar"></i>26.05.2018</span></div>
            <a href="#">
                <h5>Return to the future day</h5>
            </a>
            <p>
                Lorem ipsum dolor sit amet, conse adipisicing elit, sed do eiusmod tempor incididunt ...
            </p>
        </div>
        <div class="list-group-item">
            <div class="tag-row icon-row"><span><i class="fa fa-calendar"></i>28.05.2018</span></div>
            <a href="#">
                <h5>The web 3.0 vision</h5>
            </a>
            <p>
                Lorem ipsum dolor sit amet, conse adipisicing elit, sed do eiusmod tempor incididunt ...
            </p>
        </div>
        <div class="list-group-item">
            <div class="tag-row icon-row"><span><i class="fa fa-calendar"></i>02.06.2018</span></div>
            <a href="#">
                <h5>Where to go on holiday ?</h5>
            </a>
            <p>
                Lorem ipsum dolor sit amet, conse adipisicing elit, sed do eiusmod tempor incididunt ...
            </p>
        </div>
    </div>
    <div class="list-group latest-post-list list-blog">
        <p class="list-group-item active">Latest posts</p>
        <div class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <a class="img-box circle">
                        <img src="../images/gallery/square-4.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-8">
                    <a href="#">
                        <h5>Return to the future day</h5>
                    </a>
                    <div class="tag-row icon-row"><span><i class="fa fa-calendar"></i>02.06.2018</span></div>
                </div>
            </div>
        </div>
        <div class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <a class="img-box circle">
                        <img src="../images/gallery/square-1.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-8">
                    <a href="#">
                        <h5>We can do</h5>
                    </a>
                    <div class="tag-row icon-row"><span><i class="fa fa-calendar"></i>02.06.2018</span></div>
                </div>
            </div>
        </div>
        <div class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <a class="img-box circle">
                        <img src="../images/gallery/square-2.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-8">
                    <a href="#">
                        <h5>Hacking team 24</h5>
                    </a>
                    <div class="tag-row icon-row"><span><i class="fa fa-calendar"></i>02.06.2018</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-group list-blog">
        <p class="list-group-item active">Tags</p>
        <div class="tagbox">
            <span>Hello!</span><span>Big deal</span><span>A new happy time</span><span>Food</span><span>Cheese</span><span>Food</span>
            <div class="clear"></div>
        </div>
    </div>-->