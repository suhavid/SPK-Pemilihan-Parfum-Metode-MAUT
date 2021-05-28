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
	<h3>&nbsp;DAFTAR KRITERIA</h3><br><br>
	<table>     
		          <tr>
			         <th>NO</th>
                     <th>NAMA KRITERIA</th>
                     <th>BOBOT KRITERIA</th>
                  </tr>
            <?php
                $no = 1;
                foreach ($kriteria as $row) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->nama_kriteria ?></td>
                        <td><?php echo $row->bobot_kriteria ?></td>
                    </tr>
        <?php endforeach; ?>
    </table>

</body></html>