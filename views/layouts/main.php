<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="/"><?php echo Yii::$app->id?></a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
										<li><a href="#">Dashboard</a></li>
										<li><a href="#">Settings</a></li>
										<li><a href="#">Profile</a></li>
										<li><a href="#">Help</a></li>
								</ul>
								<?php echo \app\widgets\SearchWidget::widget(['searchText' => \app\helpers\CustomerHelper::getActiveSearch()])?>
						</div>
				</div>
		</nav>
		<div class="container-fluid">
				<div class="row">
						<div class="col-sm-3 col-md-2 sidebar">
								<?php echo \app\widgets\NavWidget::widget([
										'activeGroup' => \app\helpers\CustomerHelper::getActiveGroup(),
										'activeSkill' => \app\helpers\CustomerHelper::getActiveSkill()
								]) ?>
						</div>
						<?= $content ?>
				</div>
		</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
