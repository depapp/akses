<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	'collapse'=>'true',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Division', 'url'=>'#', 'items'=>array(
                	array('label'=>'All Division', 'url'=>array('/site/division')),
                    '---',
                    array('label'=>'AND', 'url'=>array('/site/page', 'view'=>'and')),
                    array('label'=>'SNSD', 'url'=>array('/site/page', 'view'=>'snsd')),
                    array('label'=>'UID', 'url'=>array('/site/page', 'view'=>'uid')),
                    array('label'=>'GIS', 'url'=>array('/site/page', 'view'=>'gis')),
                    array('label'=>'Practicum', 'url'=>array('/site/page', 'view'=>'practicum')),
                    //array('label'=>'NAV HEADER'),
                    )),
                // array('label'=>'Contact', 'url'=>array('/site/contact')),
                // array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                // array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<CENTER>
		Copyright &copy; <?php echo date('Y'); ?> by Access Net Lab<br/>
		All Rights Reserved<br/>
		<?php echo Yii::powered(); ?>
		</CENTER>
		<br>
		<br>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
