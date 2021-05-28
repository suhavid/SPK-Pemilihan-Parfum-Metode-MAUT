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
	<H3>&nbsp;DAFTAR PILIHAN KRITERIA</H3><br><br>
	<table>
		<tr>
			<th>NO</th>
			<th>KRITERIA</th>
			<th>NAMA PILIHAN KRITERIA</th>
			<th>NILAI</th>
		</tr>

		<?php
		$no=1;
		foreach ($pilihan_kriteria as $row) : ?>

		<tr>
			<td><?php echo $no++ ?></td>           
            <td><?php echo $row->nama_kriteria ?></td>
            <td><?php echo $row->nama_pilihan_kriteria ?></td>
            <td><?php echo $row->nilai ?></td>
        </tr>

        <?php endforeach; ?>
    </table>

</body></html>