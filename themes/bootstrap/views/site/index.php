<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>
<p><i>Make Faraway Technology so Close</i></p>
<?php $this->endWidget(); ?>

<!-- <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/banner.jpg'); ?> -->

<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'images/Untitled-1.jpg'),
        array('image'=>'images/Untitled-2.jpg'),
        array('image'=>'images/Untitled-3.jpg'),
        array('image'=>'images/Untitled-4.jpg'),
    ),
)); ?>