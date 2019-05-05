<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
    </head>

    <body>
    <?php require_once("logical.php")?>
    <!-- 
      Line 14, require_once, berfungsi sebagai memanggil file logical.php.
      Yang bisa disimpulkan meringkah kode pada file index.php agar tidak terlalu panjang,
      maka kita buat file di luar index 
    -->
    <form method="post" action="index.php">
    <div class="row container">
        <div class="col s12 m6 l6 card">
        <table class="tg">
        <thead>
          <tr>
              <th>ID</th>
              <th>Factor</th>
              <th>DI</th>
          </tr>
        </thead>
        <tbody>
  <tr>
    <td class="tg-s268">C1</td>
    <td class="tg-s268">Data Communications</td>
    <td class="tg-s268"><div class="input-field">
          <input id="c1" type="text" class="validate" name="tdi[1]">
          <label for="c1">C1</label>
        </div></td>
  </tr>
  <tr>
    <td class="tg-s268">C2</td>
    <td class="tg-s268">Distributed function</td>
    <td class="tg-s268"><div class="input-field">
          <input id="c2" type="text" class="validate" name="tdi[2]">
          <label for="c2">C2</td>
  </tr>
  <tr>
    <td class="tg-s268">C3</td>
    <td class="tg-s268">Perfomance objective</td>
    <td class="tg-s268"><div class="input-field">
          <input id="c3" type="text" class="validate" name="tdi[3]">
          <label for="c3">C3</td>
  </tr>
  <tr>
    <td class="tg-s268">C4</td>
    <td class="tg-s268">Heavily used configuration</td>
    <td class="tg-s268"><div class="input-field">
          <input id="c4" type="text" class="validate" name="tdi[4]">
          <label for="c4">C4</td>
  </tr>
  <tr>
    <td class="tg-s268">C5</td>
    <td class="tg-s268">Transaction rate</td>
    <td class="tg-s268"><div class="input-field">
          <input id="c5" type="text" class="validate" name="tdi[5]">
          <label for="c5">C5</td>
  </tr>
  <tr>
    <td class="tg-0lax">C6</td>
    <td class="tg-0lax">On-line data entry</td>
    <td class="tg-0lax"><div class="input-field">
          <input id="c6" type="text" class="validate" name="tdi[6]">
          <label for="c6">C6</td>
  </tr>
  <tr>
    <td class="tg-0lax">C7</td>
    <td class="tg-0lax">ENd-user efficiency</td>
    <td class="tg-0lax"><div class="input-field">
          <input id="c7" type="text" class="validate" name="tdi[7]">
          <label for="c7">C7</td>
  </tr>
  <tr>
    <td class="tg-0lax">C8</td>
    <td class="tg-0lax">On-line update</td>
    <td class="tg-0lax"><div class="input-field">
          <input id="c8" type="text" class="validate" name="tdi[8]">
          <label for="c8">C8</td>
  </tr>
  <tr>
    <td class="tg-0lax">C9</td>
    <td class="tg-0lax">Complex processing</td>
    <td class="tg-0lax"><div class="input-field">
          <input id="c9" type="text" class="validate" name="tdi[9]">
          <label for="c9">C9</td>
  </tr>
  <tr>
    <td class="tg-0lax">C10</td>
    <td class="tg-0lax">Reusability</td>
    <td class="tg-0lax"><div class="input-field">
          <input id="c10" type="text" class="validate" name="tdi[10]">
          <label for="c10">C10</td>
  </tr>
  <tr>
    <td class="tg-0lax">C11</td>
    <td class="tg-0lax">Installation ease</td>
    <td class="tg-0lax"><div class="input-field">
          <input id="c11" type="text" class="validate" name="tdi[11]">
          <label for="c11">C11</td>
  </tr>
  <tr>
    <td class="tg-0lax">C12</td>
    <td class="tg-0lax">Operational ease</td>
    <td class="tg-0lax"><div class="input-field">
          <input id="c12" type="text" class="validate" name="tdi[12]">
          <label for="c12">C12</td>
  </tr>
  <tr>
    <td class="tg-0lax">C13</td>
    <td class="tg-0lax">Multiple sites</td>
    <td class="tg-0lax"><div class="input-field">
          <input id="c13" type="text" class="validate" name="tdi[13]">
          <label for="c13">C13</td>
  </tr>
  <tr>
    <td class="tg-0lax">C14</td>
    <td class="tg-0lax">Facilitate change</td>
    <td class="tg-0lax"><div class="input-field">
          <input id="c14" type="text" class="validate" name="tdi[14]">
          <label for="c14">C14</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
</tbody>
</table>
  </div>
        <div class="col s12 m6 l6 card">
        

<table>
        <thead>
          <tr>
              <th>User Funtion Types</th>
              <th>Low</th>
              <th>Medium</th>
              <th>Height</th>
          </tr>
        </thead>

        <tbody>
        <tr>
            <td>External Input(EI)</td>
            <td><div class="input-field">
          <input id="EI_Low" type="text" class="validate" name="data[1]">
          <label for="EI_Low">Low</label>
        </div></td>
        <td><div class="input-field">
          <input id="EI_Med" type="text" class="validate" name="data[2]">
          <label for="EI_Med">Medium</label>
        </div></td>
        <td><div class="input-field">
          <input id="EI_Hei" type="text" class="validate" name="data[3]">
          <label for="EI_Hei">Height</label>
        </div></td>
          </tr>
          <tr>
            <td>External Output(EO)</td>
            <td><div class="input-field">
          <input id="EO_Low" type="text" class="validate" name="data[4]">
          <label for="EO_Low">Low</label>
        </div></td>
        <td><div class="input-field">
          <input id="EO_Med" type="text" class="validate" name="data[5]">
          <label for="EO_Med">Medium</label>
        </div></td>
        <td><div class="input-field">
          <input id="EO_Hei" type="text" class="validate" name="data[6]">
          <label for="EO_Hei">Height</label>
        </div></td>
          </tr>
          <tr>
            <td>Internal Logical File(ILF)</td>
            <td><div class="input-field">
          <input id="ILF_Low" type="text" class="validate" name="data[7]">
          <label for="ILF_Low">Low</label>
        </div></td>
        <td><div class="input-field">
          <input id="ILF_Med" type="text" class="validate" name="data[8]">
          <label for="ILF_Med">Medium</label>
        </div></td>
        <td><div class="input-field">
          <input id="ILF_Hei" type="text" class="validate" name="data[9]">
          <label for="ILF_Hei">Height</label>
        </div></td>
          </tr>
          <tr>
            <td>External Interface File(EIF)</td>
            <td><div class="input-field">
          <input id="EIF_Low" type="text" class="validate" name="data[10]">
          <label for="EIF_Low">Low</label>
        </div></td>
        <td><div class="input-field">
          <input id="EIF_Med" type="text" class="validate" name="data[11]">
          <label for="EIF_Med">Medium</label>
        </div></td>
        <td><div class="input-field">
          <input id="EIF_Hei" type="text" class="validate" name="data[12]">
          <label for="EIF_Hei">Height</label>
        </div></td>
          </tr>
          <tr>
            <td>External Inquiry(EI)</td>
            <td><div class="input-field">
          <input id="EQ_Low" type="text" class="validate" name="data[13]">
          <label for="EQ_Low">Low</label>
        </div></td>
        <td><div class="input-field">
          <input id="EQ_Med" type="text" class="validate" name="data[14]">
          <label for="EQ_Med">Medium</label>
        </div></td>
        <td><div class="input-field">
          <input id="EQ_Hei" type="text" class="validate" name="data[15]">
          <label for="EQ_Hei">Height</label>
        </div></td>
          </tr>
        </tbody>
        <tr>
        </tbody>
        <tr>

  <td height="23" colspan="4" align="right">
  <button class="btn waves-effect waves-light" type="submit" name="submit" value="Submit">Hitung Semua
    <i class="material-icons right">send</i>
  </button>
  </td>
 <!-- 
   Line 21 sampai 231, sudah ada pada laporan https://gitlab.com/afrizal-my/nguliah-rpl-php/raw/master/penjelasan-code.pdf
 -->
  </tr>
      </table>
</form>
<?php if(isset($_POST['submit'])){ 
  echo 'Hasil function pointnya adalah '.$fp.'<br>Hasil dari Line Of Codesnya adalah '.$loc.'<br>' ;
  echo 'Estimasi biaya development sofware adalah '.$biaya."<br>Estimasi khusus produksi sofware adalah {$d}hari {$h}jam {$m}menit <br>" ; ?>
		<?php }else{ ?>
		<?php } ?>
  <!-- 
    line 243, jika user mengklik tombol submit maka akan menampilkan hasil perhitungan dari logical.php.
      Jika tidak, maka hanya menampilkan halaman kosong.
  -->		
        </div>
    </div>

      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      
      <script> 
   </script>
    </body>
  </html>
