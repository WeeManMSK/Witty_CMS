<?php
/**
 * @var \yii\web\View $this
 * @var \common\models\FaqLine $model
 */
use backend\helper\ErrorHelper;
use backend\extensions\WtHtml;
use backend\helper\FormHelper;
use yii\widgets\ActiveForm;

?>

<?php
$form = ActiveForm::begin([
    'options'=>[
        'class'=>'form-horizontal'
    ],
    'method'=>'post',
    'action'=>'create'
]);
?>

<?= ErrorHelper::showErrors($model->errors) ?>

    <div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Main fields</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'id', ['template'=>"{input}"])->hiddenInput() ?>
                <?= $form->field($model, 'question', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
                <?= $form->field($model, 'answer', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
                <?= $form->field($model, 'order', FormHelper::FormHorizontalFieldOptions)->textInput() ?>
                <?= $form->field($model, 'faq_header_id', FormHelper::FormHorizontalFieldOptions)->dropDownList($model->faqHeaderList) ?>
            </div>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <?= WtHtml::backToIndexButton()?>
                    <?= WtHtml::saveButton()?>
                </div>
            </div>
        </div>
    </div>
<?php ActiveForm::end() ?>