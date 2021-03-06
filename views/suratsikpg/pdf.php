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
      padding-top: 40px;
      margin-left: 150px;
      width: 450px;
      text-align: center;
    }

    .content-2 {
      padding-top: 40px;
      width: 90%;
      margin-left: 5%;
    }

    .content-3 {
      padding-top: 40px;
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
      height: 220px;
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
    td{
       padding-bottom: 20px;
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
      font-weight: bold;">SURAT IZIN KERJA PERAWAT GIGI (SIKPG)</p>
      <p>Nomor :  440/005.XII.17/SIKPG/DPMPTSP</p>
    </div>
    <div class ="content-2">
      <p style="line-height: 27px;">Berdasarkan Peraturan Menteri Kesehatan Republik Indonesia Nomor 58 Tahun 2012 tentang Penyelenggaraan Pekerjaan Perawat Gigi, yang bertanda tangan di bawah ini Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Bandung memberikan Izin Kerja kepada :</p>
      <?php
            echo '<p style="font-size: 25px; font-weight: bold;text-align:center; padding-top:30px;">'.$model['nama'].'</p>'
          ?>
      <table style="padding-top: 30px;">
       <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td>
          <?php
            echo '<td>'.$model['tempatLahir'].',</td> 
            <td> '.$model['tanggalLahir'].'</td>'
          ?>
        </td>
       </tr>
       <tr>
        <td>Untuk bekerja sebagai Perawat Gigi
        </td>
        <td>:</td>
        <td>
          <?php
            echo '<td colspan=2>'.$model['tempatGigi'].'</td>'
          ?>
        </td>
       </tr>
       <tr>
        <td>Nomor SIPG/STRPG</td>
        <td>:</td>
        <td>
          <?php
            if ($model['noSipg'] == null) {
              echo '<td colspan=2>'.$model['noStrpg'].'</td>';
            }elseif ($model['noStrpg'] == null) {
              echo '<td colspan=2>'.$model['noSipg'].'</td>';
            }else{
              echo '<td colspan=2>-</td>';
            }
            
          ?>
        </td>
       </tr>
       <tr>
        <td>Berlaku sampai dengan</td>
        <td>:</td>
        <td>
          <?php
            echo '<td colspan=2>'.$model['maxBerlaku'].'</td>'
          ?>
        </td>
       </tr>
      </table>
      <p style="padding-top: 10px; line-height: 27px;">Surat Izin Kerja (SIK) ini berlaku sesuai tanggal masa berlaku SIPG/STRPG, dengan catatan akan diadakan perbaikan/penyempurnaan apabila di kemudian hari ternyata terdapat kekeliruan dan atau tidak sesuai dengan Peraturan Perundang-undangan.</p>
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
            <td style="padding-bottom: 0px;">1.</td><td style="padding-bottom: 0px;">Kepala Dinas Kesehatan Provinsi Jawa Barat;</td>
          </tr>
          <tr>
            <td style="padding-bottom: 0px;">2.</td><td style="padding-bottom: 0px;">Ketua DPC PPGI Kabupaten Bandung.</td>
          </tr>
        </table>
        
    </div>
  </div>