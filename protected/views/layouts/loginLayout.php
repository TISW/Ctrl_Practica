<?php $this->beginContent(''); ?>
<title>Autentificacion UBB Sistema de Practicas</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
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
<div class="container">
      <img src="<?php echo Yii::app()->baseUrl.'/images/Escudo.jpg'?>" width="244" height="58" border="0">
  <div class="row">

    <div class="col-xs-12 col-sm-8 col-md-9">
      <h1>Noticias</h1>
      <br>

      Buenos dias Mundo lalalall(8)
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3 form-login">
      <?php echo $content; ?>
    </div>
  </div>
</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<?php $this->endContent(); ?>