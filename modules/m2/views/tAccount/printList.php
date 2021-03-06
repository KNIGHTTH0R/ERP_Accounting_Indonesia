<?php
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->getClientScript()->registerCoreScript('maskedinput');

Yii::app()->clientScript->registerScript('datepick', "
		$(function() {
		$( \"#" . CHtml::activeId($model, 'begindate') . "\" ).datepicker({
			
		'dateFormat' : 'dd-mm-yy',
});
		$( \"#" . CHtml::activeId($model, 'enddate') . "\" ).datepicker({
			
		'dateFormat' : 'dd-mm-yy',
});
		$( \"#" . CHtml::activeId($model, 'begindate') . "\" ).mask('99-99-9999');
		$( \"#" . CHtml::activeId($model, 'enddate') . "\" ).mask('99-99-9999');
});


		");
?>

<?php
$this->breadcrumbs = array(
    'Print List Journal',
);

$this->menu = array(
    array('label' => 'Home', 'icon' => 'home', 'url' => array('/m2/tAccount')),
);
?>

<div class="page-header">
    <h1>
        Print List Journal
    </h1>
</div>

<?php
$form = $this->beginWidget('TbActiveForm', array(
    'id' => 'allocation-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
        ));
?>


<?php echo $form->errorSummary($model); ?>

<?php echo $form->dropDownListRow($model, 'account_no_id', tAccount::item()); ?>

<?php echo $form->textFieldRow($model, 'begindate'); ?>
<?php echo $form->textFieldRow($model, 'enddate'); ?>

<?php
/*
  $this->widget('ext.monthpicker.MonthPicker', array(
  'model'=>$model,
  'name'=>'begindate',
  ));
 */
?>

<?php
echo $form->dropDownListRow($model, 'type_report_id', array(
    '1' => 'Summary Style',
    '2' => 'Detail Style',
));
?>

<?php echo $form->dropDownListRow($model, 'post_id', sParameter::items("cStatus", 2)
);
?>

<div class="form-actions">
<?php echo CHtml::htmlButton('<i class="icon-ok"></i> Report', array('class' => 'btn', 'type' => 'submit')); ?>
</div>

<?php $this->endWidget(); ?>
