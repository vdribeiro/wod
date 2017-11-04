{include file=header.tpl}

<big><b>Developer</b></big>
<br><br>

<table>
	<tr>
	<th>Identificacao</th>
	<th>Trabalho</th>
	<th>Especialidade</th>
	<th>Salario</th>
	<th>Data de Contrato</th>
	<th>Estado</th>
	</tr>
	
	<tr>
	<td>{$elemento.id}</td>
	<td>{$elemento.job}</td>
	<td>{$elemento.speciality}</td>
	<td>{$elemento.salary}</td>
	<td>{$elemento.start_date}</td>
	<td>{$elemento.state}</td>
	</tr>
	
</table>

<p>
	<a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Anterior</a>
</p>


{include file=footer.tpl}
