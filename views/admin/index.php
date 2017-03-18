<?php

use yii
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use humhub\modules\discord\controllers\AdminController;
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= Yii::t('DiscordModule.base', '<strong>Discord</strong>'); ?></div>
	<div class="panel-body">
		<?php $form = ActiveForm::begin(['id' => 'discord-settings-form']); ?>
			<?= $form->errorSummary($model); ?>
			<p class="help-block"><?= Yii::t('DiscordModule.base', 'eg:  "99999999"'); ?></p>
			<div class="form-group">
				<?= $form->labelEx($model, 'sort'); ?>
				<?= $form->textField($model, 'sort', ['class' => 'form-control', 'readonly' => Setting::IsFixed('sort', 'discord')]); ?>
			</div>
			<p class="help-block"><?= Yii::t('DiscordModule.base', 'Widget positioning.'); ?></p>
			<?= Html::submitButton(Yii::t('DiscordModule.base', 'save'), ['class' => 'btn btn-primary']); ?>
			<?= \humhub\widgets\DataSaved::widget(); ?>
		<?php ActiveForm::end(); ?>
	</div>
</div>
