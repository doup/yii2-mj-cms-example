<?php
use common\models\Fields;
use mobilejazz\yii2\cms\common\models\Fields as CmsFields;
use mobilejazz\yii2\cms\backend\modules\filemanager\widgets\FileInput;

return [

    Fields::HERO_TITLE => [
        'name'  => Yii::t('app', 'Title'),
        'rules' => [
            [ [ 'text' ], 'required' ],
            [ [ 'text' ], 'string', 'max' => 200 ],
        ],
        'widget' => function ($form = null, $field, $label, $placeholder, $hint, $options) {
            return CmsFields::field($form, $field, "[$field->id]text", $options)
                         ->textInput([
                             'placeholder' => !empty($placeholder) ? $placeholder : false,
                         ])
                         ->label($label)
                         ->hint(!empty($hint) ? $hint : false);
        },
    ],

    Fields::HERO_SUBTITLE => [
        'name'  => Yii::t('app', 'Subtitle'),
        'rules' => [
            [ [ 'text' ], 'required' ],
            [ [ 'text' ], 'string', 'max' => 200 ],
        ],
        'widget' => function ($form = null, $field, $label, $placeholder, $hint, $options) {
            return CmsFields::field($form, $field, "[$field->id]text", $options)
                         ->textInput([
                             'placeholder' => !empty($placeholder) ? $placeholder : false,
                         ])
                         ->label($label)
                         ->hint(!empty($hint) ? $hint : false);
        },
    ],

    Fields::HERO_INTRO => [
        'name'  => Yii::t('app', 'Intro'),
        'rules' => [
            [ [ 'text' ], 'required' ],
            [ [ 'text' ], 'string' ],
        ],
        'widget' => function ($form = null, $field, $label, $placeholder, $hint, $options) {
            /** @var ActiveForm $form */
            return CmsFields::field($form, $field, "[$field->id]text", $options)
                         ->textArea([
                             'rows' => '6',
                             'placeholder' => !empty($placeholder) ? $placeholder : false,
                         ])
                         ->label($label);
        },
    ],

    Fields::HERO_BACKGROUND => [
        'name'   => Yii::t('app', 'Background'),
        'widget' => function ($form = null, $field, $label, $placeholder, $hint, $options) {
            /** @var ActiveForm $form */
            return CmsFields::field($form, $field, "[$field->id]text", $options)
                         ->widget(FileInput::className(), [
                             'buttonTag'            => 'button',
                             'buttonName'           => 'Browse',
                             'buttonOptions'        => [ 'class' => 'btn btn-default' ],
                             'options'              => [ 'class' => 'form-control' ],
                             // Widget template
                             'template'             => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                             'thumb'                => 'original',
                             'pasteData'            => FileInput::DATA_URL,
                             'callbackBeforeInsert' => 'function(e, data) {
                                    console.log(data);
                                    console.log(e);
                              }',
                         ])
                         ->label($label);
        },
    ],

    Fields::HERO_POSTER => [
        'name'   => Yii::t('app', 'Poster'),
        'widget' => function ($form = null, $field, $label, $placeholder, $hint, $options) {
            /** @var ActiveForm $form */
            return CmsFields::field($form, $field, "[$field->id]text", $options)
                         ->widget(FileInput::className(), [
                             'buttonTag'            => 'button',
                             'buttonName'           => 'Browse',
                             'buttonOptions'        => [ 'class' => 'btn btn-default' ],
                             'options'              => [ 'class' => 'form-control' ],
                             // Widget template
                             'template'             => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                             'thumb'                => 'original',
                             'pasteData'            => FileInput::DATA_URL,
                             'callbackBeforeInsert' => 'function(e, data) {
                                    console.log(data);
                                    console.log(e);
                              }',
                         ])
                         ->label($label);
        },
    ],

];
