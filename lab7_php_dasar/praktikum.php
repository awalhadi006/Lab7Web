<!DOCTYPE html>
<html>
<head>
    <style>
        body{background:lightgreen}
        fieldset{width:350px; margin: 190px 120px;}
        legend{text-align: center;}
        label{display: inline-flex; vertical-align: top; text-align: left; width: 140px; padding-left: 5px; margin-bottom: 20px;}
        .input{background: transparent; border: 0px;}
    </style>
</head>
<body>

<form method='POST' action=''>
 <fieldset style="float: left;">
  <legend>Input</legend>
    <label>Nama Lengkap&nbsp;&nbsp;&nbsp;:</label>
    <input type="text" name="nama">
    <label>Tanggal Lahir&emsp;&nbsp;:</label>
    <input type="date" name="tgl_lahir">
    <label>Pekerjaan&emsp;&emsp;&emsp;:</label>
    <select name="pekerjaan">
        <option value="pilih">~ Pilih Pekerjaan ~</option>
        <option value="software">Software Developer</option>
        <option value="database">Database Administrator</option>
        <option value="hardware">Hardware Engineer</option>
        <option value="system">System Analyst</option>
        <option value="network">Network Architect</option>
    </select>
    <button type="submit" name="btn">Kirim</button>

 </fieldset>
 
  <fieldset style="float: right;">
  <legend>Output</legend>

  <?php
  if (isset($_POST['btn'])) {
    $tgl_lahir = new DateTime($_POST['tgl_lahir']);
    $sekarang = new DateTime("today");
    if ($tgl_lahir > $sekarang) {
        $hari = "0";
        $bln = "0";
        $thn = "0";
    }
    $hari = $sekarang->diff($tgl_lahir)->d . ' Hari';
    $bln = $sekarang->diff($tgl_lahir)->m . ' Bulan ';
    $thn = $sekarang->diff($tgl_lahir)->y . ' Tahun ';

    $pekerjaan = $_POST['pekerjaan'];
    if ($pekerjaan == "software") {
        $kerja = "Software Developer" ;}
    elseif ($pekerjaan == "database") {
        $kerja = "Database Administrator" ;}
    elseif ($pekerjaan == "hardware") {
        $kerja = "Hardware Engineer" ;}
    elseif ($pekerjaan == "system") {
        $kerja = "System Analyst" ;}
    elseif ($pekerjaan == "network") {
        $kerja = "Network Architect" ;}
    else {$kerja = "" ;}   

    $pekerjaan = $_POST['pekerjaan'];
    if ($pekerjaan == "software") {
        $gaji = "Rp. 11.000.000" ;}
    elseif ($pekerjaan == "database") {
        $gaji = "Rp. 13.000.000" ;}
    elseif ($pekerjaan == "hardware") {
        $gaji = "Rp. 8.000.000" ;}
    elseif ($pekerjaan == "system") {
        $gaji = "Rp. 12.000.000" ;}
    elseif ($pekerjaan == "network") {
        $gaji = "Rp. 7.000.000" ;}
    else {$gaji = "" ;}
  }
  ?>
        <label>Nama Lengkap&nbsp;&nbsp;&nbsp;:</label>
        <input class = "input" type="text" value="<?=$_POST['nama']?>"/>
        <label>Tanggal Lahir&emsp;&nbsp;:</label>
        <input class = "input" type="text" value="<?=date('d-m-Y', strtotime($_POST['tgl_lahir']))?>"/>
        <label>Umur&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:</label>
        <input class = "input" type="text" value="<?=$thn . $bln . $hari?>"/>
        <label>Pekerjaan&emsp;&emsp;&emsp;:</label>
        <input class = "input" type="text" value="<?=$kerja?>"/>
        <label>Gaji&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:</label>
        <input class = "input" type="text" value="<?=$gaji?>"/>
 </fieldset>
</form>
</body>
</html>