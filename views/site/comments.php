<?php

use yii\widgets\LinkPager;

?>

<h1>Комментарии</h1>

<ul>
<?php foreach ($comments as $comment) { ?>
	<li><b><a href="<?=Yii::$app->urlManager->createURL(['site/user', 'name' => $comment->name])?>"><?=$comment->name?>:</a></b> <?=$comment->text?></li>
<?php } ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>