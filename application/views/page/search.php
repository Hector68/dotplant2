<?php
    /**
     * @var \yii\web\View $this
     * @var \app\models\Page[] $pagelist
     * @var \yii\data\Pagination $pages
     */
?>
<?php if (count($pagelist) > 0): ?>
    <div class="tab-pane  active" id="blockView">
        <ul>
            <?php foreach($pagelist as $page): ?>
                <li><a href="<?= \yii\helpers\Url::to(['page/show', 'id' => $page->id]) ?>"><?= $page->breadcrumbs_label; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php if ($pages->pageCount > 1): ?>
        <div class="pagination">
            <?=
            yii\widgets\LinkPager::widget(
                [
                    'firstPageLabel' => '&laquo;&laquo;',
                    'lastPageLabel' => '&raquo;&raquo;',
                    'pagination' => $pages,
                ]
            );
            ?>
        </div>
    <?php endif; ?>
<?php else: ?>
    <p class="no-results"><?= Yii::t('shop', 'No results found') ?></p>
<?php endif; ?>