<?php include_once("headerlaporan.php"); ?>
		<center>
			<h1>SALURAN 1</h1>
		<?php
		$sql = "select * from tbl_sensor1";
		$query = mysql_query($sql);
		?></center>
		<center>
		<table class="gridtable" width="100%" bgcolor="#000">
			<tr bgcolor="#fff" height="40">
				<th class="outer" width="5%" scope="col">No</th>
				<th class="inner" width="12%" scope="col">Ketinggian</th>
				<th class="outer" width="11%" scope="col">Mengalir/Tidak</th>
				<th class="inner" width="15%" scope="col">BLN/TGL/THN</th>
				<th class="outer" width="10%" scope="col">Jam</th>
			</tr>
			<?php
			$i = 1;
			while($data = mysql_fetch_array($query)){
				echo "<tr bgcolor='white'>
					<td align='center'>$i</td>
					<td align='center'>$data[ketinggian] cm</td>";
					if($data['status_mengalir']==1){
						echo '<td align=center>Mengalir</td>';
					}else if($data['status_mengalir']==0){
						echo '<td align=center>Tidak Mengalir</td>';
					}
					echo
					"<td align='center'>$data[periode]</td>
					<td align='center'>$data[jam]</td>
					</tr>";
					$i++;
			}
			?>
		</table></center>
		<br/><br/>
		<center><h1>SALURAN 2</h1></center>
	<?php
	$sql = "select * from tbl_sensor2";
	$query = mysql_query($sql);
	?></center>
	<center>
	<table class="gridtable"  width="100%" bgcolor="#000">
		<tr bgcolor="#fff" height="40">
			<th class="outer" width="5%" scope="col">No</th>
			<th class="inner" width="12%" scope="col">Ketinggian</th>
			<th class="outer" width="11%" scope="col">Status Mengalir</th>
			<th class="inner" width="15%" scope="col">Periode</th>
			<th class="outer" width="10%" scope="col">Jam</th>
		</tr>
		<?php
		$i = 1;
		while($data = mysql_fetch_array($query)){
			echo "<tr bgcolor='white'>
				<td align='center'>$i</td>
				<td align='center'>$data[ketinggian] cm</td>";
				if($data['status_mengalir']==1){
					echo '<td align=center>Mengalir</td>';
				}else if($data['status_mengalir']==0){
					echo '<td align=center>Tidak Mengalir</td>';
				}
				echo
				"<td align='center'>$data[periode]</td>
				<td align='center'>$data[jam]</td>
				</tr>";
				$i++;
		}
		?>
	</table></center>
	<br/><br/>
	<center><h1>SALURAN 3</h1></center>
<?php
$sql = "select * from tbl_sensor3";
$query = mysql_query($sql);
?></center>
<center>
<table class="gridtable"  width="100%" bgcolor="#000">
	<tr bgcolor="#fff" height="40">
		<th class="outer" width="5%" scope="col">No</th>
		<th class="inner" width="12%" scope="col">Ketinggian</th>
		<th class="outer" width="11%" scope="col">Status Mengalir</th>
		<th class="inner" width="15%" scope="col">Periode</th>
		<th class="outer" width="10%" scope="col">Jam</th>
	</tr>
	<?php
	$i = 1;
	while($data = mysql_fetch_array($query)){
		echo "<tr bgcolor='white'>
			<td align='center'>$i</td>
			<td align='center'>$data[ketinggian] cm</td>";
			if($data['status_mengalir']==1){
				echo '<td align=center>Mengalir</td>';
			}else if($data['status_mengalir']==0){
				echo '<td align=center>Tidak Mengalir</td>';
			}
			echo
			"<td align='center'>$data[periode]</td>
			<td align='center'>$data[jam]</td>
			</tr>";
			$i++;
	}
	?>
</table></center>
<br/><br/>
<center><h1>SALURAN 4</h1></center>
<?php
$sql = "select * from tbl_sensor4";
$query = mysql_query($sql);
?></center>
<center>
<table class="gridtable"  width="100%" bgcolor="#000">
<tr bgcolor="#fff" height="40">
	<th class="outer" width="5%" scope="col">No</th>
	<th class="inner" width="12%" scope="col">Ketinggian</th>
	<th class="outer" width="11%" scope="col">Status Mengalir</th>
	<th class="inner" width="15%" scope="col">Periode</th>
	<th class="outer" width="10%" scope="col">Jam</th>
</tr>
<?php
$i = 1;
while($data = mysql_fetch_array($query)){
	echo "<tr bgcolor='white'>
		<td align='center'>$i</td>
		<td align='center'>$data[ketinggian] cm</td>";
		if($data['status_mengalir']==1){
			echo '<td align=center>Mengalir</td>';
		}else if($data['status_mengalir']==0){
			echo '<td align=center>Tidak Mengalir</td>';
		}
		echo
		"<td align='center'>$data[periode]</td>
		<td align='center'>$data[jam]</td>
		</tr>";
		$i++;
}
?>
</table></center>
<br/><br/>
<center><h1>SALURAN 5</h1></center>
<?php
$sql = "select * from tbl_sensor5";
$query = mysql_query($sql);
?></center>
<center>
<table class="gridtable"  width="100%" bgcolor="#000">
<tr bgcolor="#fff" height="40">
	<th class="outer" width="5%" scope="col">No</th>
	<th class="inner" width="12%" scope="col">Ketinggian</th>
	<th class="outer" width="11%" scope="col">Status Mengalir</th>
	<th class="inner" width="15%" scope="col">Periode</th>
	<th class="outer" width="10%" scope="col">Jam</th>
</tr>
<?php
$i = 1;
while($data = mysql_fetch_array($query)){
	echo "<tr bgcolor='white'>
		<td align='center'>$i</td>
		<td align='center'>$data[ketinggian] cm</td>";
		if($data['status_mengalir']==1){
			echo '<td align=center>Mengalir</td>';
		}else if($data['status_mengalir']==0){
			echo '<td align=center>Tidak Mengalir</td>';
		}
		echo
		"<td align='center'>$data[periode]</td>
		<td align='center'>$data[jam]</td>
		</tr>";
		$i++;
}
?>
</table></center>
</body>
</html>
