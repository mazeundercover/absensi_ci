$(document).ready(function() {
	const urlweb = 'http://localhost/mvc_absensi_rev/public'; 
	$('#filterLevelSiswa').on('change', function() {
		let id_this = $(this).val();
		console.log(id_this);
		if (id_this == "") {
			$('#filterKelasKelas').html("");
			$("#filterKelasKelas").prop('disabled', 'disabled');
		} else {
			$.ajax({
				url: urlweb+'/profil/ddkelas',
				data: {id: id_this},
				method: 'post',
				// dataType: 'json',
				success: function(data) {
					console.log(data);
					$('#filterKelasKelas').html(data);
					$("#filterKelasKelas").removeAttr("disabled");
				}
			});
		}	
	});

	


});
	// $('.trigger-ubahAbsensiModal').on('click', function() {

	// 	const id = $(this).data('id');
	// 	console.log(id);
	// 	$.ajax({
	// 		url: urlweb+'/absensi/getdetaildataabsensi',
	// 		data: {id: id},
	// 		method: 'post',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			$('#formstatic-namasiswa-absensi').html(data.NAMA);
	// 			$('#idabsen-absensi').val(data.ID_PERSENSI);
	// 			$('#idkelas-absensi').val(data.ID_KELAS);
	// 			$('#statusabsen-absensi').val(data.KEHADIRAN);
	// 		}
	// 	});
	// });

	// $('.trigger-ubahTAModal').on('click', function() {
	// 	const id = $(this).data('id');
	// 	console.log(id);
	// 	$('#modalta-stitle').html("Edit Tahun Ajaran");
	// 	$('#ubahTAModal form').attr("action",urlweb+"/tahunajar/updatedetaildatata");
	// 	$('#modalta-id').attr('readonly', true); 

	// 	$.ajax({
	// 		url: urlweb+'/tahunajar/getdetaildatata',
	// 		data: {id: id},
	// 		method: 'post',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			$('#modalta-id').val(data.ID_TAHUN_AJARAN);
	// 			$('#modalta-nama').val(data.NAMA_TAHUN_AJARAN);
	// 			$('#modalta-status').val(data.STATUS_TAHUN_AJARAN);
	// 		}
	// 	});
	// });

	// $('.trigger-tambahTAModal').on('click', function() {
	// 	const id = $(this).data('id');
	// 	console.log(id);
	// 	$('#modalta-stitle').html("Tambah Tahun Ajaran");
	// 	$('#ubahTAModal form').attr("action",urlweb+"/tahunajar/insertdetaildatata");
	// 	$('#modalta-id').attr('readonly', false);

	// 	$('#modalta-id').val('');
	// 	$('#modalta-nama').val('');
	// 	$('#modalta-status').val('A');
	// 	$.ajax({
	// 		url: urlweb+'/tahunajar/getdetaildatata',
	// 		data: {id: id},
	// 		method: 'post',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			// $('#modalta-id').val(data.ID_TAHUN_AJARAN);
	// 			// $('#modalta-nama').val(data.NAMA_TAHUN_AJARAN);
	// 			// $('#modalta-status').val(data.STATUS_TAHUN_AJARAN);
	// 		}
	// 	});
	// });

	// $('.trigger-ubahJurusanModal').on('click', function() {
	// 	const id = $(this).data('id');
	// 	console.log(id);
	// 	$('#modaljur-stitle').html("Edit Data Jurusan");
	// 	$('#ubahJurusanModal form').attr("action",urlweb+"/jurusan/updatedetaildatajur");
	// 	// $('#modaljur-id').addClass("invisible");
	// 	$('#modaljur-id').attr('readonly', true);
	// 	$.ajax({
	// 		url: urlweb+'/jurusan/getdetaildatajur',
	// 		data: {id: id},
	// 		method: 'post',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			$('#modaljur-id').val(data.ID_JURUSAN);
	// 			$('#modaljur-nama').val(data.NAMA_JURUSAN);
	// 			$('#modaljur-status').val(data.STATUS);
	// 		}
	// 	});
	// });

	// $('.trigger-tambahJurusanModal').on('click', function() {
	// 	const id = $(this).data('id');
	// 	console.log(id);
	// 	$('#modaljur-stitle').html("Tambah Data Jurusan");
	// 	$('#ubahJurusanModal form').attr("action",urlweb+"/jurusan/insertdetaildatajur");
	// 	// $('#modaljur-id').addClass("invisible");
	// 	$('#modaljur-id').attr('readonly', false);

	// 	$('#modaljur-id').val('');
	// 	$('#modaljur-nama').val('');
	// 	$('#modaljur-status').val('A');

		// $.ajax({
		// 	url: urlweb+'/jurusan/getdetaildatajur',
		// 	data: {id: id},
		// 	method: 'post',
		// 	dataType: 'json',
		// 	success: function(data) {
		// 		console.log(data);
		// 		$('#modaljur-id').val(data.ID_JURUSAN);
		// 		$('#modaljur-nama').val(data.NAMA_JURUSAN);
		// 		$('#modaljur-status').val(data.STATUS);
		// 	}
		// });
	// });

	// $('.trigger-ubahKelasModal').on('click', function() {
	// 	const id = $(this).data('id');
	// 	console.log(id);
	// 	$('#modalkel-stitle').html("Edits Data Kelas");
	// 	$('#ubahKelasModal form').attr("action",urlweb+"/kelas/updatedetaildatakel");
	// 	$('#modalkel-id').addClass("invisible");
	// 	$.ajax({
	// 		url: urlweb+'/kelas/getdetaildatakel',
	// 		data: {id: id},
	// 		method: 'post',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			$('#modalkel-level').html(data.leveldd);
	// 			$('#modalkel-jurusan').html(data.jurusandd);
	// 			$('#modalkel-taangkatan').html(data.taangkatandd);
				
	// 			$('#modalkel-id').val(data.ID_KELAS);
	// 			$('#modalkel-nama').val(data.KELAS);
	// 			$('#modalkel-status').val(data.STATUS);
	// 			$('#modalkel-level').val(data.LEVEL);
	// 			$('#modalkel-taangkatan').val(data.ID_TAHUN_AJARAN_ANGKATAN);
	// 			$('#modalkel-jurusan').val(data.JURUSAN);
	// 		}
	// 	});
	// });

	// $('.trigger-tambahKelasModal').on('click', function() {
	// 	// const id = $(this).data('id');
	// 	// console.log(id);
	// 	$('#modalkel-stitle').html("Tambah Data Kelas");
	// 	$('#ubahKelasModal form').attr("action",urlweb+"/kelas/insertdetaildatakel");
	// 	$('#modalkel-id').addClass("invisible");
	// 	$.ajax({
	// 		url: urlweb+'/kelas/getdetaildatakel',
	// 		data: {},
	// 		method: 'post',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			$('#modalkel-level').html(data.leveldd);
	// 			$('#modalkel-jurusan').html(data.jurusandd);
	// 			$('#modalkel-taangkatan').html(data.taangkatandd);
				
	// 			$('#modalkel-id').val('');
	// 			$('#modalkel-nama').val('');
	// 			$('#modalkel-status').val('A');
	// 			$('#modalkel-level').val('');
	// 			$('#modalkel-taangkatan').val('');
	// 			$('#modalkel-jurusan').val('');
	// 		}
	// 	});
	// });

	// $('body').on('click','.trigger-ubahSiswaModal', function() {
	// 	const id = $(this).data('id');
	// 	console.log(id);
	// 	$('#modalsiswa-stitle').html("Edit Data Siswa");
	// 	$('#ubahSiswaModal form').attr("action",urlweb+"/siswa/updatedetaildatasiswa");
	// 	$('#modalsiswa-id').addClass("invisible");
	// 	$.ajax({
	// 		url: urlweb+'/siswa/getdetaildatasiswa',
	// 		data: {id: id},
	// 		method: 'post',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			$('#modalsiswa-kelas').html(data.kelasdd);
	// 			// $('#modalsiswa-semester').html(data.semesterdd);
	// 			// $('#modalsiswa-tahunajar').html(data.tahunajardd);
				
	// 			$('#modalsiswa-id').val(data.NIS);
	// 			$('#modalsiswa-idbaru').val(data.NIS);
	// 			$('#modalsiswa-nama').val(data.NAMA);
	// 			$('#modalsiswa-jk').val(data.JK);
	// 			$('#modalsiswa-status').val(data.STATUS_SISWA);
	// 			$('#modalsiswa-kelas').val(data.ID_KELAS);
	// 			// $('#modalsiswa-semester').val(data.ID_SEMESTER_MASUK);
	// 			// $('#modalsiswa-tahunajar').val(data.ID_TAHUN_AJARAN_MASUK);
	// 		}
	// 	});
	// });

	// $('body').on('click','.trigger-tambahSiswaModal', function() {
	// 	$('#modalsiswa-stitle').html("Tambah Data Siswa");
	// 	$('#ubahSiswaModal form').attr("action",urlweb+"/siswa/insertdetaildatasiswa");
	// 	$('#modalsiswa-id').addClass("invisible");

	// 	$('#modalsiswa-idbaru').val('');
	// 	$('#modalsiswa-nama').val('');
	// 	$('#modalsiswa-jk').val('P');
	// 	$('#modalsiswa-status').val('A');
	// 	$('#modalsiswa-kelas').val('1');
		

	// 	$.ajax({
	// 		url: urlweb+'/siswa/getdetaildatasiswatambah',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			$('#modalsiswa-kelas').html(data.kelasdd);
	// 		}
	// 	});
	// });

	// $('#master_kelas_level').on('change', function() {
	// 	const id_master_kelas_level = $(this).val();
	// 	// console.log(id_master_kelas_level);
	// 	$.ajax({
	// 		url: urlweb+'/siswa/browsedropdownkelas',
	// 		data: {id: id_master_kelas_level},
	// 		method: 'post',
	// 		// dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			$('#master_kelas_kelas').html(data);
	// 		}
	// 	});
	// });

	// $('#cari_siswa_kelas').on('click', function() {
	// 	const id_master_kelas_level = $('#master_kelas_level').val();
	// 	const id_master_kelas_kelas = $('#master_kelas_kelas').val();
	// 	// console.log(id_master_kelas_level);
	// 	// console.log(id_master_kelas_kelas);
	// 	$.ajax({
	// 		url: urlweb+'/siswa/browsesiswakelasajax',
	// 		data: {kelas_level: id_master_kelas_level,kelas_kelas: id_master_kelas_kelas,},
	// 		method: 'post',
	// 		// dataType: 'json',
	// 		success: function(data) {
	// 			console.log(data);
	// 			$('#tbody-siswa-kelas').html(data);
	// 		}
	// 	});
	// });

// });