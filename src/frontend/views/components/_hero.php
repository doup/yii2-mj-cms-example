<?php

use mobilejazz\yii2\cms\common\models\Components;
use mobilejazz\yii2\cms\common\models\ContentComponent;
use common\models\Fields;

/**
 * @var yii\web\View     $this
 * @var int              $size
 * @var ContentComponent $component
 */
$fields = Components::getFieldsFromComponentAsArray($component);
?>
<div class="hero" style="background: url(<?php echo $fields[Fields::HERO_BACKGROUND] ?>)">
    <div class="hero__content">
        <div class="hero__text">
            <h2 class="hero__title"><?php echo $fields[Fields::HERO_TITLE] ?></h2>
            <h3 class="hero__subtitle"><?php echo $fields[Fields::HERO_SUBTITLE] ?></h3>
            <div class="hero__intro">
                <?php echo $fields[Fields::HERO_INTRO] ?>
            </div>
        </div>
        <img class="hero__poster" src="<?php echo $fields[Fields::HERO_POSTER] ?>">
    </div>
</div>
<?php
var_dump($fields);
