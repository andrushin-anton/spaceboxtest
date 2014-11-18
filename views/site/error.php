<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h1 class="page-header"><?= Html::encode($this->title) ?></h1>
		<div class="alert alert-danger">
				<?= nl2br(Html::encode($message)) ?>
		</div>
</div>
