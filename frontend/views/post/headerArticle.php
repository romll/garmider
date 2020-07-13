<?php

use yii\widgets\Breadcrumbs;

    $this->beginBlock('sidebar');

?>

<div class="header-base">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="title-base text-left">
                    <h1>Europe home business is raising to double down on its recruitment business</h1>
                    <p>Regional media startup Tech In Asia is close to raising as much as million in new funding.</p>
                </div>
            </div>
            <div class="col-md-3">
                <ol class="breadcrumb b white">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </ol>
            </div>
        </div>
    </div>
</div>

<?php $this->endBlock(); ?>