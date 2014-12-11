<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - PD';
$this->breadcrumbs=array(
	'Division'=>array('/site/division'),
	'PD',
);
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Practicum Division (PD)',
)); ?>
<br>
Memberikan praktikum kepada Mahasiswa Telkom Applied Science School Jurusan Teknik Telekomunikasi (Teknik Jarmulmed, Bengkel Jarmulmed, PMT).

<?php $this->endWidget(); ?>