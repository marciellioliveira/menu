<?php
$path = "/var/www/novo.guiataubate.com.br/htdocs/uikit/";
$diretorio = dir($path);
 


echo "Lista de Arquivos do diretório:<br />";
while($arquivo = $diretorio->read()){
	if (substr($arquivo,-4) == "html")
		echo "<a target='_blank' style='font-size: 17px; margin-top: 6px; display: block' href='".$arquivo."'>".$arquivo."</a>";
}


$diretorio->close();
?>