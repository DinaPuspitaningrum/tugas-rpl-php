<?php
  
  $data = $_POST['data'];
  $tdi = $_POST['tdi'];
  $sumtdi = array_sum($tdi);
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

  $hasilUFP = $hasilEI+ $hasilEO+ $hasilILF+ $hasilEIF+ $hasilEQ;

  $TCA = 0.65 + 0.01 * $sumtdi;
  $fp= $hasilUFP * $TCA;
  $loc = $fp * 53;
  $biaya = 20000 * $fp;
  $kerja = 1 * $fp * 60;
  $menit = number_format($kerja, 0, '.', '');
  $d = floor ($menit / 1440);
  $h = floor (($menit - $d * 1440) / 60);
  $m = $menit - ($d * 1440) - ($h * 60);
  //echo "{$menit}min converts to {$d}d {$h}h {$m}m";
  echo 'Hasil function pointnya adalah '.$fp.'<br>Hasil dari Line Of Codesnya adalah '.$loc.'<br>' ;
  echo 'Estimasi biaya development sofware adalah '.$biaya."<br>Estimasi khusus produksi sofware adalah {$d}hari {$h}jam {$m}menit <br>" ;
  /*foreach($tdi as $key => $val){

  echo 'data = '.$tdi[$key].'<br/>';

  }*/

  //echo array_sum($cobaq);
  ?>