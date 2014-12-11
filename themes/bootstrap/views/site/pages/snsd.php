<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - SNSD';
$this->breadcrumbs=array(
	'Division'=>array('/site/division'),
	'SNSD',
);
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'System Network and Security Division (SNSD)',
)); ?>
<br>

Fokus bergerak di bidang pengamanan jaringan dengan mengikuti trend security saat ini.<br>
Divisi ini juga mengadakan Pelatihan di Bidang Keamanan Jaringan, seperti :
<ul>
	<li><i>Building Secure Network Using GNS3 & Packet Tracer</i></li>
</ul>

<?php $this->endWidget(); ?>