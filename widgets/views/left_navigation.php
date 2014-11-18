<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<ul class="nav nav-sidebar">
		<li class="bg-info"><a href="#">Groups <span class="sr-only">(current)</span></a></li>
		<?php foreach($groups as $group) { ?>
				<li <? if($activeGroup == $group->id){ echo 'class="active"';} ?>><a href="<?php echo Url::toRoute(['/customer/'.$group->id.'/'.$activeSkill]) ?>"><?php echo Html::encode($group->name)?></a></li>
		<? } ?>
</ul>
<ul class="nav nav-sidebar">
		<li class="bg-info"><a href="#">Skills <span class="sr-only">(current)</span></a></li>
		<?php foreach($skills as $skill) { ?>
				<li <? if($activeSkill == $skill->id){ echo 'class="active"';} ?>><a href="<?php echo Url::toRoute(['/customer/'.$activeGroup.'/'.$skill->id]) ?>"><?php echo Html::encode($skill->name)?></a></li>
		<? } ?>
</ul>