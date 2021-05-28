const flashdata = $('.flash-data').data('flashdata');

$('.tombol-sukses').on('click', function (e) {
	Swal({
		title: 'Perhitungan',
		text: 'Berhasil' + flashdata,
		type: 'success'
	});
}