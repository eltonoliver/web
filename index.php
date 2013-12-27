<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css"/>
<title>AJE - AM</title>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="MM_preloadImages('images/idealive2.png','images/menu.png')">
<table width="976" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div style="height:29px; margin-top:10px"><span class="txt6">hoje, 
      <?php
$dia = date("d");
$mes = date("F"); 
$ano = date("Y"); 
		if($mes == 'January'){
		$mes = 'Janeiro';}		
		elseif($mes == 'February'){
		$mes = 'Fevereiro';}	
		elseif($mes == 'March'){
		$mes = 'Mar&ccedil;o';}	
		elseif($mes == 'April'){
		$mes = 'Abril';}		
		elseif($mes == 'May'){
		$mes = 'Maio';}		
		elseif($mes == 'June'){
		$mes = 'Junho';}	
		elseif($mes == 'July'){
		$mes = 'Julho';}	
		elseif($mes == 'August'){
		$mes = 'Agosto';}		
		elseif($mes == 'September'){
		$mes = 'Setembro';}		
		elseif($mes == 'October'){
		$mes = 'Outubro';}		
		elseif($mes == 'November'){
		$mes = 'Novembro';}		
		elseif($mes == 'December'){
		$mes = 'Dezembro';}			
		$data = "$dia de $mes de $ano";		
		echo "$data";
?>
    </span>
 
    </div>
    <div class="borda"><img src="images/logo.png" width="255" height="221" align="left" />
    <img src="images/banner.jpg" width="715" height="221" /></div>
    <div style="float:left;">
      <a href="?pg=home.php"><div class="menulink">Principal</div></a>
      <a href="?pg=quemsomos.php"><div class="menulink">Quem Somos</div></a>
      <a href="?pg=sobreborracha.php"><div class="menulink">Sobre a Aje</div></a>
      <a href="?pg=cicloprodutivo.php"><div class="menulink">Projetos e Eventos</div></a>
      <a href="?pg=parceiros.php"><div class="menulink"><?=utf8_decode("Bate Papo de Negócios");  ?> </div></a>
      <a href="?pg=localizacao.php"><div class="menulink">Parceiros</div></a>
    <a href="?pg=contatos.php"><div class="menulink">Contatos</div></a>    </div></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
  </tr>
</table>
<?php      
    include 'home.php';
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="213" valign="top" style="background-color:#225b22;" ><table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="62" colspan="2" align="right">
        <div class="selecao2"><a href="javascript:void(0);"><img src="images/orkut.png" width="41" height="42" border="0" align="absmiddle" /></a></div>
        <div class="selecao2"><a href="javascript:void(0);"><img src="images/twitter.png" width="41" height="42" hspace="8" border="0" align="absmiddle" /></a></div>
        <div class="selecao2"><a href="javascript:void(0);"><img src="images/facebook.png" width="41" height="42" border="0" align="absmiddle" /></a></div>
        <span style="float:right; margin-top:20px" class="titulo5">Redes Sociais: </span>        </td>
        </tr>
      <tr>
        <td width="50%"><p class="txt5"><strong>BF Borracha da Floresta</strong></p>
          <p class="txt5">Endere&ccedil;o: Av. nomedarua n&ordm;1234 - Centro - Manaus-AM</p>
          <p class="txt5">Fone: (92) 1234.1234 - 1234.5678</p>
          <p class="txt5">&copy; 2011 - Copyright - Todos os direitos reservados</p></td>
        <td width="50%" align="right" valign="bottom"><a href="http://www.idealive.com.br" target="_blank"><img src="images/idealive.png" width="99" height="34" border="0" align="absmiddle" / title="Desenvolvimento" onmouseover="this.src='images/idealive2.png'" onmouseout="this.src='images/idealive.png'"></a></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>