<?php
namespace izisoft\number;

use izisoft\base\AssetBundle;

class NumberControlAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->depends = array_merge($this->depends, ['yii\widgets\MaskedInputAsset']);
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/number']);
        parent::init();
    }
}