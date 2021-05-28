<!DOCTYPE html>
<html><head>
	<title></title>
</head><style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}
</style><body>
	<H3>&nbsp;DAFTAR NILAI</H3><br><br>
	<table>
		<tr>
			<th>NO</th>
			<th>NAMA ALTERNATIF</th>
			<th>KRITERIA</th>
			<th>PILIHAN KRITERIA</th>
			<th>NILAI</th>
		</tr>

		<?php
		$no=1;
		foreach ($nilai as $row) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
            <td><?php echo $row->nama_alternatif ?></td>           
            <td><?php echo $row->nama_kriteria ?></td>
            <td><?php echo $row->nama_pilihan_kriteria ?></td>
            <td><?php echo $row->nilai ?></td>
        </tr>

        <?php endforeach; ?>
    </table>

</body></html>