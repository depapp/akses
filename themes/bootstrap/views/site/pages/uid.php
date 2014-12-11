<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - UID';
$this->breadcrumbs=array(
	'Division'=>array('/site/division'),
	'UID',
);
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'User Interface Division (UID)',
)); ?>
<br>
Bergerak di pengembangan Aplikasi Mobile dan Aplikasi Web.<br>
Divisi ini juga mengadakan Pelatihan di Bidang Aplikasi Mobile dan Aplikasi Web, seperti :
<ul>
	<li><i>Android Basic Training</li>
	<li>PHP Framework Training</li>
</ul>

<?php $this->endWidget(); ?>