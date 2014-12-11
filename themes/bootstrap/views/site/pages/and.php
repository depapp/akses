<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - AND';
$this->breadcrumbs=array(
	'Division'=>array('/site/division'),
	'AND',
);
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Access Network Division (AND)',
)); ?>
<br>

Divisi yang memimpin riset tentang Telecommunication Access Network, Integrity Technology, dan juga Internetworking.<br>
Divisi ini juga mengadakan Pelatihan di Bidang Jaringan, seperti :
<ul>
	<li><i>Network Fundamentar Training</li>
	<li>OPNET Beginner Training</li>
	<li>OPNET Advance Training</li>
	<li>NS (Network Simulator)</i></li>
</ul>

<?php $this->endWidget(); ?>