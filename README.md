yii2-number
===========

[![Latest Stable Version](https://poser.pugx.org/izisoft/yii2-number/v/stable)](https://packagist.org/packages/izisoft/yii2-number)
[![Latest Unstable Version](https://poser.pugx.org/izisoft/yii2-number/v/unstable)](https://packagist.org/packages/izisoft/yii2-number)
[![License](https://poser.pugx.org/izisoft/yii2-number/license)](https://packagist.org/packages/izisoft/yii2-number)
[![Total Downloads](https://poser.pugx.org/izisoft/yii2-number/downloads)](https://packagist.org/packages/izisoft/yii2-number)
[![Monthly Downloads](https://poser.pugx.org/izisoft/yii2-number/d/monthly)](https://packagist.org/packages/izisoft/yii2-number)
[![Daily Downloads](https://poser.pugx.org/izisoft/yii2-number/d/daily)](https://packagist.org/packages/izisoft/yii2-number)

> ### Note
> This extension replaces the [yii2-money](https://github.com/izisoft/yii2-money) extension since Jan 2018. The [yii2-money](https://github.com/izisoft/yii2-money) extension will not be enhanced further or supported.

A number control input for Yii2 Framework that uses the [jQuery input mask plugin](https://github.com/RobinHerbots/Inputmask) (available also via `yii/widgets/MaskedInputAsset`) to render number input masks. This extension is similar to the [DateControl extension](http://demos.krajee.com/datecontrol) for dates, and allows one to control the display and save formats for numbers. The extension thus allows one to setup a number format display mask, use currency prefixes if needed, and modify the decimals and thousand separators. It lastly allow the display fields to be auto calculated as numbers when stored into the database.

Refer [detailed documentation and demos](http://demos.krajee.com/number).

## Latest Release
The latest version of the module is v1.0.1. Refer the [CHANGE LOG](https://github.com/izisoft/yii2-number/blob/master/CHANGE.md) for details. 

### Install

Either run

```
$ php composer.phar require izisoft/yii2-number "@dev"
```

or add

```
"izisoft/yii2-number": "@dev"
```

to the ```require``` section of your `composer.json` file.

## Usage
```php
use kartik\number\NumberControl;

// Normal decimal
echo NumberControl::widget([
    'name' => 'normal-decimal',
    'value' => 43829.39,
]);

// Integer only
echo NumberControl::widget([
    'name' => 'integer-only',
    'value' => 32892,
    'maskedInputOptions' => ['digits' => 0],
]);

// Currency style with prefix and suffix
echo NumberControl::widget([
    'name' => 'currency-num',
    'value' => 2018032.22,
    'maskedInputOptions' => ['prefix' => '$ ', 'suffix' => ' c'],
]);

// Usage with model 
$model->currency = 1298132.23;
echo NumberControl::widget([
    'model' => $model,
    'attribute' => 'currency',
    'maskedInputOptions' => ['prefix' => '$ ', 'suffix' => ' c'],
]);
```

## License

**yii2-number** is released under the BSD-3-Clause License. See the bundled `LICENSE.md` for details.

	
Xem thêm các dự án viết bằng yii framework
-----

[Kho hàng US - Dịch vụ đặt hàng Mỹ số 1 Việt Nam](https://www.khohangus.com)

[Mỹ phẩm cao cấp Hàn Quốc Amaranth - Sorabee - Bello Vita](https://www.amaranth.com.vn)

[Chia sẻ kinh nghiệm lập trình php - vps - hosting](https://www.truongbui.com)

[Chia sẻ coupon khuyến mãi từ các trang thương mại điện tử hàng đầu tại Việt Nam và trên toàn thế giới](https://www.phutchot.com)

[EMZ - Mua gì cũng có](https://www.emz.vn)

[Thao Chip Shop, Chuyên bán buôn, bán lẻ đồ ngủ nữ](https://thaochip.com)
