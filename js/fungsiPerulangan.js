function ambilData (student){//menyatakan fungsi
	var i,x=1;
	//for (i=1;i<=10;i++)untuk menghasilkan perulangan isi tabel
	//string dapat di gunakan dengan petik satu dan
	for (i in student){   // untuk melakukan perulangan nama dalam bentuk array
		if (i%2) {
			document.write("<tr style= 'background-color: #F9ACFF'>");
		} else {
			document.write("<tr>");
		} //ini untuk memberi warna belang2 pada table
		//document.write ("<tr>");
		document.write("<td>"+x+"</td>"); //+i+ untuk menambahkan string jad dalam tabel akan berno urut
		document.write("<td>"+student [i]+"</td>"); //student [i] mengisi dengan nama dalam array dan urutan i
		document.write("</tr>");
		x++;
		}
	}
	function peringatan(nama){
		alert("awas kamu"+nama+"Pasukan sudah saya kepung");
	}