<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - GIS';
$this->breadcrumbs=array(
	'Division'=>array('/site/division'),
	'GIS',
);
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Geographic Information System (GIS)',
)); ?>
<br>
Berkutat pada pengolahan peta dan penerapan peta di aplikasi baik Mobile, Desktop ataupun Web.<br>
Divisi ini juga mengadakan Pelatihan di Bidang Aplikasi Pengolahan Peta, seperti :
<ul>
	<li><i>ArcGIS Training</i></li>
</ul>

<?php $this->endWidget(); ?>