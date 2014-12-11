<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Division';
$this->breadcrumbs=array(
	'Division',
);
?>

<!-- AND -->
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Access Network Division (AND)',
)); ?>
 
    <p>Bergerak di bidang Jaringan.</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'small',
        'label'=>'Read more', 'url'=>array('/site/page', 'view'=>'and'),
    )); ?></p>
 
<?php $this->endWidget(); ?>
<!-- END AND -->

<!-- SNSD -->
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'System Network and Security Division (SNSD)',
)); ?>
 
    <p>Bergerak di bidang Pengamanan Jaringan.</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'small',
        'label'=>'Read more', 'url'=>array('/site/page', 'view'=>'snsd'),
    )); ?></p>
 
<?php $this->endWidget(); ?>
<!-- END SNSD -->

<!-- UID -->
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'User Interface Division (UID)',
)); ?>
 
    <p>Bergerak di bidang Aplikasi Web dan Mobile.</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'small',
        'label'=>'Read more', 'url'=>array('/site/page', 'view'=>'uid'),
    )); ?></p>
 
<?php $this->endWidget(); ?>
<!-- END UID -->

<!-- GIS -->
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Geographic Information System (GIS)',
)); ?>
 
    <p>Bergerak di bidang Pengolahan Peta.</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'small',
        'label'=>'Read more', 'url'=>array('/site/page', 'view'=>'gis'),
    )); ?></p>
 
<?php $this->endWidget(); ?>
<!-- END GIS -->

<!-- PD -->
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Practicum Division (PD)',
)); ?>
 
    <p>Bergerak di bidang Praktikum.</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'small',
        'label'=>'Read more', 'url'=>array('/site/page', 'view'=>'practicum'),
    )); ?></p>
 
<?php $this->endWidget(); ?>
<!-- END PD -->