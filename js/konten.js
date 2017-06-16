/* Confirm */
function klikHapus(){
	var konfirmasi = confirm("Apakah Anda Yakin Ingin Menghapus Data ?");
	return konfirmasi;
}

function klikTambah(){
	var konfirmasi = confirm("Apakah Anda Yakin Ingin Menambah Data ?");
	return konfirmasi;
}

function klikUbah(){
	var konfirmasi = confirm("Apakah Anda Yakin Ingin Mengubah Data ?");
	return konfirmasi;
}

/* Dropdown */
$(document).ready(function(){
	$(".dropdown").hide();
	//menggunakan jquery
	$(".dropdown-slide").click(function(){
		$(".dropdown").slideToggle();
	});
});

$(document).ready(function(){
	$(".dropdown1").hide();
	//menggunakan jquery
	$(".dropdown-slide1").click(function(){
		$(".dropdown1").slideToggle();
	});
});

$(document).ready(function(){
	$(".dropdown2").hide();
	//menggunakan jquery
	$(".dropdown-slide2").click(function(){
		$(".dropdown2").slideToggle();
	});
});

$(document).ready(function(){
	$(".dropdown3").hide();
	//menggunakan jquery
	$(".dropdown-slide3").click(function(){
		$(".dropdown3").slideToggle();
	});
});

$(document).ready(function(){
	$(".dropdown4").hide();
	//menggunakan jquery
	$(".dropdown-slide4").click(function(){
		$(".dropdown4").slideToggle();
	});
});

/* AJAX Home */
$(document).ready(function(){
	$(".load a").click(function(){
		var url = $(this).prop("href");
		$(".middle").load(url);
		return false;
	});
});



