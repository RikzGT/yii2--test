<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\newsList\NewsList;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-9">
        <div class="site-about">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>This is the About page. You may modify the following file to customize its content:</p>

            <code><?= __FILE__ ?></code>
        </div>
    </div>
    <div class="col-md-3">
        <?php echo NewsList::widget(['showLimit' => 3]); ?>
    </div>
</div>