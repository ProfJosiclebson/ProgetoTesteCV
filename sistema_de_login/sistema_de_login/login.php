<?php ob_start(); ?><title>TITULO DO SEU SITE</title>
<body text="#000000" leftmargin="0" topmargin="0">
<form method="post" target="_parent">
  <table width="260" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr> 
      <th width="259" colspan="2" valign="bottom" scope="col"><font size="1" face="Arial, Helvetica, sans-serif">&nbsp;Usu&aacute;rio:</font><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input style="BORDER-RIGHT: #666666 1px solid; BORDER-TOP: #666666 1px solid; BORDER-LEFT: #666666 1px solid; WIDTH: 70px; BORDER-BOTTOM: #666666 1px solid; FONT-FAMILY: verdana; HEIGHT: 19px" name="us" type="text" id="us">
        </font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"></font><font size="1" face="Arial, Helvetica, sans-serif">&nbsp;Senha:</font><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input style="BORDER-RIGHT: #666666 1px solid; BORDER-TOP: #666666 1px solid; BORDER-LEFT: #666666 1px solid; WIDTH: 60px; BORDER-BOTTOM: #666666 1px solid; FONT-FAMILY: verdana; HEIGHT: 19px" name="se" type="password" id="se2">
        &nbsp; </font><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input name="Submit" type=image src="botao_ok.gif" width=19 height=19>
        </font></th>
    </tr>
  </table>
</form>
<?php
if (isset($_POST['us'])){
$usuario = $_POST['us'];
$senha = $_POST['se'];

if(($usuario=="vinicius") && ($senha=="garagem69")){
header("Location: logado.htm");

}elseif (($usuario=="adm") && ($senha=="senha")){
header("Location: adm.htm");

}elseif (($usuario=="teste3") && ($senha=="senha3")){
header("Location: teste3.htm");

}else{
header("Location: errou.htm");
}
}
?>

