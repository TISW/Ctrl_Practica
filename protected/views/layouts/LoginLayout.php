<?php $this->beginContent(''); ?>
<title>Autentificacion UBB Sistema de Practicas</title>
<link href="<?php echo Yii::app()->baseUrl.'/assets/css/bootstrap.min.css'?>" rel="stylesheet">
<meta charset="utf-8">
<style type="text/css">
      body 
      {
        padding-top: 40px;
        padding-bottom: 40px;
      }

      .form-login 
      {
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color:#FFCC33 ;
        border: 1px solid #e5e5e5;
        border-radius: 20px;
        box-shadow: 0 1px 2px rgba(0,0,0,.0.5);
      }

      .form-control
      {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .text
      {
        color: #fff;
      }
</style>     
<?php echo $content; ?>
<script src="<?php echo Yii::app()->baseUrl.'/assets/js/jquery.min.js'?>"></script>
<script src="<?php echo Yii::app()->baseUrl.'/assets/js/bootstrap.min.js'?>"></script>
<?php $this->endContent(); ?>
