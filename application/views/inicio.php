<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" type="text/css" href="<?= $this->config->item('css') ?>/styles.css" media="screen"/>
<script type="text/javascript" src="<?= $this->config->item('js') ?>/jquery-1.8.2.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?= $this->config->item('js') ?>/js.js" charset="utf-8"></script>
<script type="text/javascript">base_url='<?php echo base_url(); ?>index.php/';</script>
<title>Tributos</title>
</head>

<body>


<div id="contenedor" class="ins">
<form method="post" action="" name="f1">
<div>Buscar <input type="text" name="txtruc" id="txtruc" maxlength="11" /> <input type="button" onclick="buscar()" value="Consultar" onMouseover=this.style.backgroundColor='#7EB9EC';this.style.color='#FFF'; onMouseout=this.style.backgroundColor='#003333';this.style.color='#FFF'; style='border:1px #FFF solid; background-color:#003333; font-size:11px; cursor:pointer;width:90px;padding: 3px 3px 3px 3px; color:#FFFFFF' /></div>
</form>

<div id="resultado"></div>
<!-- fin-->
</div>


</body>
</html>
