<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Originally created by Artisteer, adapted by GigaDB
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Annotometer </title>

    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../../js/script.js"></script>
</head>
<body>
<div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-header">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                    <div class="art-logo">
                        <h1 id="name-text" class="art-logo-name"><a href="#"></a></h1>
                    </div>
                </div>
                                  <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<li>
                			<a href="http://www.annotometer.com" class="active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">GigaCuration Challenge 2016</span></a>
                			<ul>
                                            <li><a href="http://www.annotometer.com/register">Register</a>
                					
                				</li>
                				<li><a href="http://www.annotometer.com/getting-started">Getting Started</a></li>
                				<li><a href="http://www.annotometer.com/site/terms">Terms and Conditions</a></li>
								<li><a href="./index.php/leaderboard">Leaderboard</a></li>
                                                                 <?php if(!Yii::app()->user->isGuest){?> 
								<li><a href="http://www.annotometer.com/user/view_profile">Personal Profile</a></li>
                                                                 <?php } ?>
                			</ul>
                		</li>		
                		<li>
                			<a href="http://www.annotometer.com/site/about"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
                		</li>
	<li>
                                                    <?php if(Yii::app()->user->isGuest){?> 
                			<a href="http://www.annotometer.com/site/login"><span class="l"></span><span class="r"></span><span class="t">Login</span></a>
                                        <?php }else{ ?>
                                        <a href="http://www.annotometer.com/site/logout"><span class="l"></span><span class="r"></span><span class="t">Logout</span></a>
                                        <?php } ?>        
                                                </li>                	
</ul>
                </div>
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
                            <div class="art-post">
                                <div class="art-post-body">
                            <div class="art-post-inner art-article">
							<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
        <br/>
	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>
          <br/>
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
<br>
<a href="http://www.annotometer.com/user/reset">Lost password</a>
 <div class="cleared"></div>
                            </div>
                            
                            		<div class="cleared"></div>
                                </div>
                            </div>
                        </div>
                        <div class="art-layout-cell art-sidebar1">    
						
                        </div>
                    </div>
                </div>
				
                <div class="cleared"></div><div class="art-footer">
                    <div class="art-footer-inner">
                        
                        <div class="art-footer-text">
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="art-footer-background"></div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
    </div>
    
</body>
</html>
