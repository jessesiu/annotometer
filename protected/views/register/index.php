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

    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../js/script.js"></script>
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
								<li><a href="http://www.annotometer.com/leaderboard">Leaderboard</a></li>
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
                                            <div class="art-postcontent">
                                                <!-- article-content -->


	
         <div class="container" id="wrap">
    <div id="content">
	
	<div class="form well">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'user-form',
				'enableAjaxValidation'=>false,
				'htmlOptions'=>array('class'=>'form-horizontal')
			)) ?>				
                                <div class="control-group">
                                    <?= $form->labelEx($model,'username', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->textField($model,'username',array('size'=>30,'maxlength'=>128)) ?>
						<?= $form->error($model,'username') ?>
					</div>
				</div>											</div>
				
            <br/>
                               <div class="control-group">
					<?= $form->labelEx($model,'email', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->textField($model,'email',array('size'=>30,'maxlength'=>128)) ?>
						<?= $form->error($model,'email') ?>
					</div>
				</div>
            <br/>
				<div class="control-group">
					<?= $form->labelEx($model,'firstname', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->textField($model,'firstname',array('size'=>30,'maxlength'=>60)) ?>
						<?= $form->error($model,'firstname') ?>
					</div>
				</div>
            <br/>
				<div class="control-group">
					<?= $form->labelEx($model,'lastname', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->textField($model,'lastname',array('size'=>30,'maxlength'=>60)) ?>
						<?= $form->error($model,'lastname') ?>
					</div>
				</div>
             <br/>
				<div class="control-group">
					<?= $form->labelEx($model,'password', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->passwordField($model,'password',array('size'=>30,'maxlength'=>60)) ?>
						<?= $form->error($model,'password') ?>
					</div>
				</div>
              <br/>
				<div class="control-group">
					<?= $form->labelEx($model,'password_repeat', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->passwordField($model,'password_repeat',array('size'=>30,'maxlength'=>60)) ?>
						<?= $form->error($model,'password_repeat') ?>
					</div>
				</div>
               <br/>
				<div class="control-group">
					<?= $form->labelEx($model,'institute', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->textField($model,'institute',array('size'=>30,'maxlength'=>60)) ?>
						<?= $form->error($model,'institute') ?>
					</div>
				</div>
                <br/>
                               <div class="control-group">
					<?= $form->labelEx($model,'role', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->textField($model,'role',array('size'=>30,'maxlength'=>60)) ?>
						<?= $form->error($model,'role') ?>
					</div>
				</div>
                 <br/>
                                <div class="control-group">
					<?= $form->labelEx($model,'iclikname', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->textField($model,'iclikname',array('size'=>30,'maxlength'=>60)) ?>
						<?= $form->error($model,'iclikname') ?>
					</div>
				</div>
                  <br/>
                               <div class="control-group">
					<?= $form->labelEx($model,'hyponame', array('class'=>'control-label')) ?>
					<div class="controls">
						<?= $form->textField($model,'hyponame',array('size'=>30,'maxlength'=>60)) ?>
						<?= $form->error($model,'hyponame') ?>
					</div>
				</div>
                                <br/>
                              <div class="control-group">
					<?= $form->labelEx($model,'agree', array('class'=>'control-label')) ?>
					<?php echo $form->checkbox($model,'agree'); ?>
                                        <?= $form->error($model,'agree') ?>
                                    <br/>
                                    <br/>
                                       <textarea rows="25" cols="50">
Terms and conditions for; Giga-Curation competition 2016, (BioCuration2016, Geneva, April 8th-11th).

The competition is open to anyone attending the BioCuration2016 conference in Geneva1.
The competition will run for the duration of Biocuration2016, the exact times to be announced at the conference.
No gaming of the system will be tolerated. Automated systems adding annotations will be excluded.<br>The registered user accounts must be individuals (same individual for both tools) i.e. no group accounts permitted.
Anyone caught adding nonsense2 annotations for the purpose of boosting their numbers will be disqualified.
The judges will manually check a portion of the leaders annotations to ensure compliance.
As suppliers of the prize, GigaScience retain all authority in the competition, and their decision on any dispute will be final.
All results will be publicly available, including usernames, additional personal details will only be released if agreed by the user.
Only annotations that are public will be counted.
1. excluding staff of iCLiKVAL, Hypothes.is, GigaScience and BMC.
2. For the purposes of this competition, nonsense will be determined as anything that cannot be easily reconciled by the judges as meaningful and relevant annotations.
</textarea>
				</div>
            
                                <div class="control-group">
                                    <p><b>Marketing:</b><br/>As default, your email address will only be used directly in connection with this competition and will not be used for any further marketing.<br/>If you WOULD like to receive information from the tools listed below please tick the appropriate box(s):
</p>
				</div>

			    <div class="control-group">
				    <div class="controls">
                                        <?= $form->labelEx($model,'mjournal', array('class'=>'control-label')) ?>
				    	<?php echo $form->checkbox($model,'mjournal',array('checked'=>'checked')); ?>
	
				    </div>
                                <div class="controls">
                                        <?= $form->labelEx($model,'mgigadb', array('class'=>'control-label')) ?>
				    	<?php echo $form->checkbox($model,'mgigadb',array('checked'=>'checked')); ?>
	
				    </div>
                                <div class="controls">
                                        <?= $form->labelEx($model,'mhypo', array('class'=>'control-label')) ?>
				    	<?php echo $form->checkbox($model,'mhypo',array('checked'=>'checked')); ?>
	
				    </div>
                                <div class="controls">
                                        <?= $form->labelEx($model,'miclik', array('class'=>'control-label')) ?>
				    	<?php echo $form->checkbox($model,'miclik',array('checked'=>'checked')); ?>
	
				    </div>
                                <div class="controls">
                                        <?= $form->labelEx($model,'misb', array('class'=>'control-label')) ?>
				    	<?php echo $form->checkbox($model,'misb',array('checked'=>'checked')); ?>
	
				    </div>
			    </div>



		</div><!--well-->
		<div class="pull-right">
			<?php echo CHtml::submitButton('Create') ?>
		</div>

	<?php $this->endWidget() ?>

</div><!-- content -->
        </div>       

                                                <!-- /article-content -->
                                            </div>
                                            <div class="cleared"></div>
                            </div>
                            
                            		
                                </div>
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
