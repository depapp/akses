<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'About',
)); ?>
<br>

<center> <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/logo_akses.jpg'); ?> </center>

<br>Access Network Laboratory atau yang biasa diketahui sebagai Laboratorium Jaringan Akses merupakan salah
satu Laboratorium yang berada di Telkom Engineering School (Fakultas Teknik Elektro).<br>
Laboratorium Jaringan Akses memiliki 5 Divisi di dalamnya, diantaranya :<br>
<ul>
  <li>Access Network Division (AND)</li>
  <li>System Network and Security Division (SNSD)</li>
  <li>User Interface Division (UID)</li>
  <li>Geographic Information System (GIS)</li>
  <li>Practicum Division (PD)</li>
</ul><br>
More Information :
<ul>
<i class="fa fa-building"></i> N111, Telkom Engineering School - Telkom University<br>
<i class="fa fa-facebook-square"></i> Access Network Laboratory<br>
<i class="fa fa-twitter-square"></i> @AccessNetLab<br>
<i class="fa fa-envelope-square"></i> accessnetlab@gmail.com
</ul>

<?php $this->endWidget(); ?>

<!-- 
to add image + descr. + size
echo CHtml::image(Yii::app()->request->baseUrl.'/img/image.png',
      "this is alt tag of image",
      array("width"=>"50px" ,"height"=>"50px")); -->