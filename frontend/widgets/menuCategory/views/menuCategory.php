<?php
use yii\helpers\Url;
?>

<a href="<?= Url::to([/*'category/'. $category['slug'],*/ 'id' => $category['id'], 'slug' => $category['slug']]) ?>" class="list-group-item">
    <?= $category['title']; ?>
</a>
<?php if (isset($category['childs'])) : ?>
    <ul>
        <?= $this->getMenuHtml($category['childs']) ?>
    </ul>
<?php endif; ?>
