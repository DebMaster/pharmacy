<?php
use app\models\Disease;
use app\models\Medication;
use app\models\Symptoms;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
			<div class="social grid">
					<div class="grid-info">
						<div class="col-md-4 top-comment-grid">
							<div class="comments likes">
								<div class="comments-icon">
									<i class="fa fa-facebook"></i>
								</div>
								<div class="comments-info likes-info">
									<h3><?=Disease::find()->count(); ?></h3>
									<a href="#">Diseases</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-4 top-comment-grid">
							<div class="comments">
								<div class="comments-icon">
									<i class="fa fa-comments"></i>
								</div>
								<div class="comments-info">
									<h3><?=Medication::find()->count(); ?></h3>
									<a href="#">Medications</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-4 top-comment-grid">
							<div class="comments tweets">
								<div class="comments-icon">
									<i class="fa fa-twitter"></i>
								</div>
								<div class="comments-info tweets-info">
									<h3><?=Symptoms::find()->count(); ?></h3>
									<a href="#">Symptoms</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						
						<div class="clearfix"> </div>
					</div>
			</div>