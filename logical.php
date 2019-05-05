<?php
 if(isset($_POST['submit'])){ 
   /*
   Line 2, menjelaskan jika user menekan tombol submit maka akan menjalankan proses dibawah ini
   */
  $data = $_POST['data'];
  $tdi = $_POST['tdi'];
  /*
  Kita buat variable data sebagai penampung dari 
  inputan data[] yang menampung inputan untuk menghitung UFP (Unadjusted Function Point)
  Dan juga kita buat variable tdi sebagai penampung dari inputan tdi[] yang menampung inputan untuk menghitung TDI (Total Degree of Influence). 
  Setelah itu kita kalikan setiap nilai yang ada pada variable data[] dikalikan dengan nilai yang sudah ditentukan paper. Disini saya memakai paper yang berjudul 
  “Estimasi Ukuran Perangkat Lunak Menggunakan Function Point Analysis – Studi Kasus Aplikasi Pengujian dan Pembelajaran Berbasis Web”, 
  bisa didapatkan di https://gitlab.com/afrizal-my/nguliah-rpl-php/raw/master/papernya.pdf
  */
  $sumtdi = array_sum($tdi);
  // menghitung semua nilai yang ada pada array
  $hasilEIlow = 3 * $data[1];
  $hasilEImed = 4 * $data[2];
  $hasilEIhei = 6 * $data[3];
  $hasilEI = $hasilEIlow + $hasilEImed + $hasilEIhei;
  //echo $hasilEI.'<br/>';
  //
  $hasilEOlow = 4 * $data[4];
  $hasilEOmed = 5 * $data[5];
  $hasilEOhei = 7 * $data[6];
  $hasilEO = $hasilEOlow + $hasilEOmed + $hasilEOhei;
  //echo $hasilEO.'<br/>' ;
  //
  $hasilILFlow = 7 * $data[7];
  $hasilILFmed = 10 * $data[8];
  $hasilILFhei = 15 * $data[9];
  $hasilILF = $hasilILFlow + $hasilILFmed + $hasilILFhei;
  //echo $hasilILF.'<br/>' ;
  //
  $hasilEIFlow = 5 * $data[10];
  $hasilEIFmed = 7 * $data[11];
  $hasilEIFhei = 10 * $data[12];
  $hasilEIF = $hasilEIFlow + $hasilEIFmed + $hasilEIFhei;
  //echo $hasilEIF.'<br/>' ;
  //
  $hasilEQlow = 3 * $data[13];
  $hasilEQmed = 4 * $data[14];
  $hasilEQhei = 6 * $data[15];
  $hasilEQ = $hasilEQlow + $hasilEQmed + $hasilEQhei;
  //echo $hasilEQ.'<br/>' ;
 /* 
 Line 17 sampai 44
 Setiap User Function Types akan disimpan divariable hasil sesuai nama UFTnya. 
 Semisal variable hasilEI , dimana variable tersebut adalah hasil dari UFT External Input (EI), 
 dan seterusnya.
 */
  $hasilUFP = $hasilEI+ $hasilEO+ $hasilILF+ $hasilEIF+ $hasilEQ;
  /* Line 52
  Setelah semua sudah tersimpan pada variable hasil. Maka kita akan menjumlahkan semua variable tersebut. 
  Hasil dari penjumlah semua UFT tersebut adalah hasil perhitungan dari UFP dan disampan divariable hasilUFP
  */
  $TCA = 0.65 + 0.01 * $sumtdi;
  /* line 57
  Setelah itu kita akan menghitung TCA yaitu dengan cara kita menjumlah semua indexs 
  inputan pada variable tdi[]. 
  Setelah itu kalikan dengan 0.65 + 0.01. hasil pehitungan tersebut masuk kedalam variable TCA.
  */
  $fp= $hasilUFP * $TCA;
  /*
  Setelah TCA sudah ketemu nilainya, lalu kita menghitung nilai function pointnya, 
  yaitu dengan cara hasil perhitungan UFP dikalikan dengan TCA dan disampan pada variable fp.
  */
  $loc = $fp * 53;
  $biaya = 20000 * $fp;
  $kerja = 1 * $fp * 60;
  $menit = number_format($kerja, 0, '.', '');
  $d = floor ($menit / 1440);
  $h = floor (($menit - $d * 1440) / 60);
  $m = $menit - ($d * 1440) - ($h * 60);
  /*
   Line 21 sampai 231, sudah ada pada laporan https://gitlab.com/afrizal-my/nguliah-rpl-php/raw/master/penjelasan-code.pdf
  Setelah semua selesai maka tinggal menampilkan hasil pada index.php dengan memangil nama variablenya.
   */
} 
?>