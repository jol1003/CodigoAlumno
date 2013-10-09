<div class="grilla">
<div class="cabecera">Que se paga</div>
<div class="cabecera">Ruc</div>
<div class="cabecera">Periodo Trib.</div>
<div class="cabecera">Resolucion</div>
<div class="cabecera">Codigo Trib.</div>
<div class="cabecera">Importe a Pagar</div>

<div class="clear"></div>
<?php
$d = 0;
foreach($listado as $row){

	$tributo = $row['tipo_tributo']==1?"Tributo":"Fraccionamiento";
	$periodo = explode("-",$row['periodo_tributo']);
	$fecha = date("M j" , strtotime($row['periodo_tributo']));

?>

<div class="detalle"><?=$tributo?></div>
<div class="detalle"><?=$row['ruc']?></div>
<div class="detalle"><?=$fecha?></div>
<div class="detalle"><?=$row['resolucion_tributo']?></div>
<div class="detalle"><?=$row['codigo_tributo']?></div>
<div class="detalle">S/. <?=$row['importe_tributo']?></div>
<div class="separacion"></div>
<?php
$d++;
}
?>
</div>
<div class="clear"></div>
<div>Nro de Reg : <strong><?=$d?></strong></div>