<?
if(!isset($model)) 
	$model = new YumUserLogin();

$module = Yum::module();

$this->pageTitle = Yum::t('Login');
if(isset($this->title))
$this->title = Yum::t('Login');
$this->breadcrumbs=array(Yum::t('Login'));

Yum::renderFlash();
?>

<div  class="form-box" id="login-box">
 <div class="header">Sign In</div>

<?php echo CHtml::beginForm(array('//user/auth/login'));  ?>
<div class="body bg-gray">
<?
if(isset($_GET['action']))
	echo CHtml::hiddenField('returnUrl', urldecode($_GET['action']));
?>

<?php echo CHtml::errorSummary($model); ?>
<?php
$_userclass = 'form-group';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	print 'username: '.$model['username'];
    if (isset($model['username'])){
		$_userclass = 'form-group has-error';
	}
}

?>
	
	<div class="<?php print $_userclass; ?>">
		<?php 
		if($module->loginType & UserModule::LOGIN_BY_USERNAME 
				|| $module->loginType & UserModule::LOGIN_BY_LDAP)
		if($module->loginType & UserModule::LOGIN_BY_EMAIL)
			printf ('<label for="YumUserLogin_username">%s <span class="required">*</span></label>', Yum::t('E-Mail address')); 
		if($module->loginType & UserModule::LOGIN_BY_OPENID)
			printf ('<label for="YumUserLogin_username">%s <span class="required">*</span></label>', Yum::t('OpenID username'));  ?>

		<?php echo CHtml::activeTextField($model,'username', array('class' => 'form-control', 'placeholder'=>'Name')) ?>
	</div>
	
	<div class="form-group">
		<?php echo CHtml::activePasswordField($model,'password', array('class' => 'form-control', 'placeholder'=>'Password'));
		if($module->loginType & UserModule::LOGIN_BY_OPENID)
			echo '<br />'. Yum::t('When logging in with OpenID, password can be omitted');
 ?>
		
	</div>
	
	<div class="form-group">
	<p class="hint">
	<?php 
	if(Yum::hasModule('registration') && Yum::module('registration')->enableRegistration)
	echo CHtml::link(Yum::t("Registration"),
			Yum::module('registration')->registrationUrl);
	if(Yum::hasModule('registration') 
			&& Yum::module('registration')->enableRegistration
			&& Yum::module('registration')->enableRecovery)
	echo ' | ';
	if(Yum::hasModule('registration') 
			&& Yum::module('registration')->enableRecovery) 
	echo CHtml::link(Yum::t("Lost password?"),
			Yum::module('registration')->recoveryUrl);
	?>
</p>
	</div>

<div class="form-group">
<?php echo CHtml::activeCheckBox($model,'rememberMe', array('style' => 'display: inline;')); ?>
<?php echo CHtml::activeLabelEx($model,'rememberMe', array('style' => 'display: inline;')); ?>
</div>


</div>
<div class="footer">
<?php echo CHtml::submitButton(Yum::t('Login'), array('class' => 'btn bg-olive btn-block')); ?>
</div>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->

<?
$form = new CForm(array(
			'elements'=>array(
				'username'=>array(
					'type'=>'text',
					'maxlength'=>32,
					),
				'password'=>array(
					'type'=>'password',
					'maxlength'=>32,
					),
				'rememberMe'=>array(
					'type'=>'checkbox',
					)
				),

			'buttons'=>array(
				'login'=>array(
					'type'=>'submit',
					'label'=>'Login',
					),
				),
			), $model);
?>

