<?php
use app\helpers\CustomerHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h1 class="page-header">Customers</h1>
		<? if(!count($customers)){?>
		<div class="alert alert-danger">
		no results!
		</div>
		<? } else { ?>
		<div class="table-responsive">
				<table class="table table-striped">
						<thead>
						<tr>
								<th>#</th>
								<th>Full Name</th>
								<th>Groups</th>
								<th>Skills</th>
								<th>Is in a place</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach($customers as $customer) { ?>
						<tr>
								<td><?php echo Html::encode($customer->id)?></td>
								<td><?php echo Html::encode($customer->name)?></td>
								<td><?php echo Html::encode(CustomerHelper::displayArrayInLine($customer->groups, 'name'))?></td>
								<td><?php echo Html::encode(CustomerHelper::displayArrayInLine($customer->skills, 'name'))?></td>
								<td><?php echo Html::encode(CustomerHelper::displayIfIsInPlace($customer->is_in_place))?></td>
						</tr>
						<? } ?>
						</tbody>
				</table>
		</div>
		<? } ?>
</div>