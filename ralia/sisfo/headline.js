/* parameter untuk menjalankan fungsi openContent ini adalah 	 
	     1. Element trigger (link) yang akan membuka content apabila di click
	     2. Id dari content yang akan ditampilkan
	  */
	 /* Update 08 Maret 2009
		 -> Slideshow diberikan animasi otomatis berpindah-pindah content		 
	 */
	 // siapkan variable timer yang akan menyimpan fungsi animasi 
	 var timer = null; 
	 function bukaContent(trigger,divID){ 
	 	// semua link pada div dengan id='divTrigger' akan di setarakan style-nya menjadi style normal 
	 	$('#divTrigger a').each( 
	 		function(){
			 	$(this).css({'background-color':'#FFF','color':'#000'});			 	
			}
	 	);
	 	// semua div di dalam element dengan id='divContent' disembunyikan
	 	$('#divContent div').hide();
	 	
	 	// div yang akan ditampilkan diberi efek fadeIn (built-in dari JQuery) ketika ditampilkan
	 	$('#'+divID).fadeIn('slow');
	 	
	 	// link menjadi trigger diberi style berbeda dengan link lainnya agar dapat diketahui content nomor berapa yang sedang aktif
	 	$(trigger).css({'background-color':'#900','color':'#FFF'});	 	
		
		// Update 08 Maret 2009
		// timer di set 
		if(timer != null) clearTimeout(timer);
		timer = setTimeout( 
		  function(){		
			/* Cek terlebih dahulu apakah link yang sedang di-click saat ini ada link lagi setelah itu
			   apabila tidak ada link lagi setelah element yang sedang di-click maka pilih element link pertama
			   dengan selector ':first' dari jquery. Setelah sudah ditentukan link, maka lakukan event click
			   pada link tersebut. Setiap link yang di click akan menjalankan fungsi ini sehingga terjadi animasi
			   perpindahan content slideshow.
			*/	  
			var nextAnchor = ($(trigger).next('a').text() == '') ? $('#divTrigger a:first') : $(trigger).next('a');
			nextAnchor.click();
		  }, 3000 // 3 detik waktu perpindahan antar content di headline
		);
	 }	 
