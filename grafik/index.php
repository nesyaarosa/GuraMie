<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "prestashop");
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
 

$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label dari setiap field table, sesuaikan tipe data nya
	array('label' => 'Jenis Obat', 'type' => 'string'),
	array('label' => 'Jumlah Jual', 'type' => 'number')
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
?>

<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	//memanggil file json untuk charts dari gstatic
	//pemanggilan function
	google.charts.load('current', {'packages':['corechart']});
	//google.charts.setOnLoadCallback(drawChart);
	google.charts.setOnLoadCallback(drawChart2);
	//google.charts.setOnLoadCallback(drawChart3);
	
	
	
	function drawChart2() {
 
		// membuat data chart dari json yang sudah ada di panggil
		//variable yang dipanggil adalah jsonTable2 karena jsonTable2 berisi data table buku
		var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
 
		// Set options, mengubah judul dan ukuran
		var options = {'title':'Data Penjualan Obat',
					   'width':500,
					   'height':400};
		
		//pada variable chart, bagian document.getElementById diinisialkan chart_div2
		//untuk pemanggilan chart saat proses output
		var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
		chart.draw(data, options);
	}
	
	
    </script>
</head>
<body>
    
	<!--Div yang akan menampilkan chart, sesuaikan dengan nama yg sudah
	diinisialkan pada bagian document.getElementById setiap function-->
<!--  <div id="chart_div"></div>
	<div id="chart_div2"></div> -->
<div id="chart_div2"></div>
	
</body>
</html>