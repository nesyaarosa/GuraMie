<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "guramie");
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
 
$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label dari setiap field table, sesuaikan tipe data nya
	array('label' => 'Jenis Obat', 'type' => 'string'),
	array('label' => 'Jumlah Penjualan', 'type' => 'number')
);
 
//melakukan query ke database select yaitu table kelas
$sql = $conn->query("SELECT * FROM penjualan");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
	//membuat array
	$temp = array();
	//memasukkan data sesuai field table
	$temp[] = array('v' => (string)$data['nama']);
	$temp[] = array('v' => (int)$data['jumlah_jual']);
	//memasukkan data diatas ke dalam array $rows
	$rows[] = array('c' => $temp);
}
 
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode
$jsonTable = json_encode($table);

//table buku
/*$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label dari setiap field table buku, sesuaikan tipe data nya
	array('label' => 'Nama Buku', 'type' => 'string'),
	array('label' => 'Stok Buku', 'type' => 'number')
);
 
//melakukan query ke database select yaitu table buku
$sql = $conn->query("SELECT * FROM buku");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
	//membuat array
	$temp = array();
	//memasukkan data sesuai field table
	$temp[] = array('v' => (string)$data['nama_buku']);
	$temp[] = array('v' => (int)$data['stok_buku']);
	//memasukkan data diatas ke dalam array $rows
	$rows[] = array('c' => $temp);
}
 
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode, diberi nama variable jsonTable2
//agar file json tidak menimpa file yang sebelumnya
$jsonTable2 = json_encode($table);
 
 //table pembelian
$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label dari setiap field table buku, sesuaikan tipe data nya
	array('label' => 'Nama Barang', 'type' => 'string'),
	array('label' => 'Jumlah Beli', 'type' => 'number')
);
 
//melakukan query ke database select yaitu table pembelian
$sql = $conn->query("SELECT * FROM pembelian");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
	//membuat array
	$temp = array();
	//memasukkan data sesuai field table
	$temp[] = array('v' => (string)$data['nama_barang']);
	$temp[] = array('v' => (int)$data['jml_beli']);
	//memasukkan data diatas ke dalam array $rows
	$rows[] = array('c' => $temp);
}
 
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode, diberi nama variable jsonTable3
//agar file json tidak menimpa file yang sebelumnya
$jsonTable3 = json_encode($table);*/
?>

<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	//memanggil file json untuk charts dari gstatic
	//pemanggilan function
	google.charts.load('current', {'packages':['corechart']});
	//google.charts.setOnLoadCallback(drawChart);
	/*function drawChart() {
 
		// membuat data chart dari json yang sudah ada di panggil
		var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
 
		// Set options, mengubah judul dan ukuran
		var options = {'title':'Data Penjualan',
					   'width':500,
					   'height':400};
		
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	}
	
/*	function drawChart2() {
 
		// membuat data chart dari json yang sudah ada di panggil
		//variable yang dipanggil adalah jsonTable2 karena jsonTable2 berisi data table buku
		var data = new google.visualization.DataTable(<?php echo $jsonTable2; ?>);
 
		// Set options, mengubah judul dan ukuran
		var options = {'title':'Data Buku',
					   'width':500,
					   'height':400};
		
		//pada variable chart, bagian document.getElementById diinisialkan chart_div2
		//untuk pemanggilan chart saat proses output
		var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
		chart.draw(data, options);
	}*/
	
	function drawChart3() {
 
		// membuat data chart dari json yang sudah ada di panggil
		//variable yang dipanggil adalah jsonTable2 karena jsonTable2 berisi data table pembelian
		var data = new google.visualization.DataTable(<?php echo $jsonTable3; ?>);
 
		// Set options, mengubah judul dan ukuran
		var options = {'title':'Data Penjualan',
					   'width':500,
					   'height':400};
 
		//pada variable chart, bagian document.getElementById diinisialkan chart_div3
		//untuk pemanggilan chart saat proses output
		var chart = new google.visualization.AreaChart(document.getElementById('chart_div3'));
		chart.draw(data, options);
	}
    </script>
</head>
<body>
    
	<!--Div yang akan menampilkan chart, sesuaikan dengan nama yg sudah
	diinisialkan pada bagian document.getElementById setiap function-->
    <!--<div id="chart_div"></div>
	<div id="chart_div2"></div>-->
	<div id="chart_div3"></div>
	
</body>
</html>