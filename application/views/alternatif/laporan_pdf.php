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
	<H3>&nbsp;DAFTAR ALTERNATIF</H3><br><br>
	<table>
		<tr>
			<th>NO</th>
			<th>NAMA PARFUM</th>
			<th>HARGA</th>
			<th>JENIS AROMA</th>
			<th>KOMPOSISI</th>
			<th>KETAHANAN</th>
		</tr>

		<?php
		$no=1;
		foreach ($alternatif as $row) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
            <td><?php echo $row->nama_alternatif; ?></td>
            <td><?php echo $row->harga; ?></td>
            <td><?php echo $row->jenis_aroma; ?></td>
            <td><?php echo $row->komposisi; ?></td>
            <td><?php echo $row->ketahanan; ?></td>
        </tr>

        <?php endforeach; ?>
    </table>

</body></html>