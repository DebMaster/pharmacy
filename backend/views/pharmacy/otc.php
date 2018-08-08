<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Over The Counter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agile-signup">			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2><h1><?= Html::encode($this->title) ?></h1>
</h2>
				</div>
				<form action="<?=Url::to(['pharmacy/check']); ?>" method="post">
					<input type="text" name="text" placeholder="Enter symptoms here">
					<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
					<input type="submit" class="btn btn-primary" value="Search">
				</form>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© 2016 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<!-- //footer -->
			
		</div>
