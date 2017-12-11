<?php
  use yii\helpers\Html;
  use yii\grid\GridView;
?>
  <style type="text/css">
    
    .logo {
      width:120px;
      float:left;
      padding-top: -10px;
      padding-left: 15px;
    }
    .text-header {
      width:522px;
      float:right;
      text-align: center;
      padding-top: 0px;
    }
    .header {
      width: 100%;
      height: 120px;
      border-bottom: 3px solid black;

    }

    .litle-font{
      font-size: 11px;
    }

    .header-font{
      font-size: 21px;
      font-weight: bold;
    }

    .content {
      width: 100%;
    }

    .content-1 {
      padding-top: 35px;
      margin-left: 200px;
      width: 290px;
      text-align: center;
    }

    .content-2 {
      padding-top: 35px;
      width: 90%;
      margin-left: 5%;
    }

    .content-3 {
      padding-top: 35px;
      width: 90%;
      margin-left: 5%;
    }

    .content-4 {
      padding-top: 35px;
      width: 90%;
      margin-left: 5%;
    }

    .ct1 {
      width:150px;
      height: 230px;
      float:left;
      border: 2px solid black;
      margin-left: 30px;
    }
    .ct2 {
      width:402px;
      height: 150px;
      float:right;
      /*text-align: center;*/
      padding-top: -10px;
      margin-left: 30px;
    }
    p{
      margin:0px;
    }


  </style>
  <div class ="header">
    <div class ="logo">
      <?php echo Html::img('@web/img/PEMKAB-BANDUNG.jpg'); ?>
    </div>
    <div class ="text-header">
      <p class="header-font">PEMERINTAH KABUPATEN BANDUNG<br>
      DINAS PENANAMAN MODAL DAN PELAYANAN<br>
      TERPADU SATU PINTU</p>
      <p class="litle-font">Jl. Raya Soreang KM. 17 Telp/Fax. (022). 589 6882 Soreang 40911 Kabupaten Bandung<br>
      Email : dpmptsp@bandungkab.go.id  Website. : ptsp.bandungkab.go.id</p>

    </div>
  </div>
  <div class ="content">
    <div class ="content-1">
      <p style="border-bottom: 1px solid black; font-size: 19px;
      font-weight: bold;">IZIN TUKANG GIGI</p>
      <p>Nomor : 440/006.VIII.17/ITG/DPMPTSP</p>
    </div>
    <div class ="content-2">
      <p style="text-indent: 0.5in;">Berdasarkan Peraturan Menteri Kesehatan Nomor Tahun tentang Pembinaan, Pengawasan, dan Perizinan Pekerjaan Tukang Gigi, bahwa kepada :</p>
      <table style="padding-top: 30px;">
      <tr>
        <td >Nama</td>
        <td>:</td>
        <td>
          <?php
            echo '<td colspan=2>'.$model['nama'].'</td>'
          ?>
        </td>
       </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
          <?php
            echo '<td colspan=2>'.$model['jenisKelamin'].'</td>'
          ?>
        </td>
       </tr>
       <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td>
          <?php
            echo '<td>'.$model['tempatLahir'].'</td> 
            <td>'.$model['tanggalLahir'].'</td>'
          ?>
        </td>
       </tr>
       <tr>
        <td>Agama</td>
        <td>:</td>
        <td>
          <?php
            echo '<td colspan=2>'.$model['agama'].'</td>'
          ?>
        </td>
       </tr>
       <tr>
        <td>Kewarganegaraan</td>
        <td>:</td>
        <td>
          <?php
            echo '<td colspan=2>'.$model['kewarganegaraan'].'</td>'
          ?>
        </td>
       </tr>
       <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>
          <?php
            echo '<td colspan=2>'.$model['pekerjaan'].'</td>'
          ?>
        </td>
       </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
          <?php
            echo '<td colspan=2>'.$model['alamat'].'</td>'
          ?>
        </td>
       </tr>
      <tr>
        <td>Tempat Kerja</td>
        <td>:</td>
        <td>
          <?php
            echo '<td colspan=2>'.$model['tempatKerja'].'</td>'
          ?>
        </td>
       </tr>
      </table>
      <p style="text-indent: 0.5in; padding-top: 30px;">Dinyatakan telah mendapat izin sebagai Tukang Gigi pada Dinas Kesehatan Kabupaten Bandung sejak tanggal sampai dengan tanggal (berlaku 2 (dua) tahun).</p>
   </div>

    <div class ="content-3">
      <div class ="ct1">
        &nbsp
      </div>
      <div class ="ct2">
        <table>
          <tr>
            <td>Dikeluarkan di</td>
            <td>:</td>
            <td>
              Soreang
            </td>
          </tr>
          <tr>
            <td>Pada Tanggal</td>
            <td>:</td>
            <td>
              <?php echo date("d-m-Y") ?>
            </td>
          </tr>
        </table>
        <p style="text-align: center; padding-top: 10px;">
          KEPALA DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU
        </p>
        <p style="text-align: center; border-bottom: 1px solid black; margin-top: 95px;
      font-weight: bold;">
          Drs. H. RULI HADIANA, S.Sos, M.I.Pol
        </p>
        <p style="text-align: center;">
          Pembina Utama Muda<br>
          NIP. 19690224 198903 1 001
        </p>
      </div>
    </div>
    <div class="content-4">
      TEMBUSAN :<br>
        <table>
          <tr>
            <td>1.</td><td>Kepala Dinas Kesehatan Provinsi Jawa Barat;</td>
          </tr>
          <tr>
            <td>2.</td><td>Persatuan Dokter Gigi Indonesia (PDGI);</td>
            </tr>
          <tr>
            <td>3.</td><td>Persatuan Teknisi Gigi Indonesia (PTGI);</td>
            </tr>
          <tr>
            <td>4.</td><td>Asosiasi/Perhimpunan Tukang Gigi Kabupaten Bandung.</td>
          </tr>
        </table>
        
    </div>
  </div>