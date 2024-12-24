<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard MIZAN BOOKSTORE</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/styleGraph.css">

</head>

<body style="margin-top:60px;">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
			<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
	<center>
    <p class="highcharts-description">
        Berikut merupakan grafik untuk menampilkan Reseller dengan pembelian terbanyak
		    </p>
	</center>
</figure>

<script type ="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Reseller dengan Pembelian Terbanyak'
    },
    subtitle: {
        text: 'Source: Database MIZAN Bookstore'
    },
    xAxis: {
        type:'category'
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Pembelian'
        }
    },
    
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Total Pembelian',
        data: [
		<?php
		$conn = mysqli_connect("localhost", "root", "", "bookstoremizan");

        // Query untuk menjumlahkan total_barang per reseller
        $sql = "SELECT r.nama as nama_reseller, 
                SUM(p.total_barang) as total_penjualan 
                FROM pembelian_produk p
                JOIN reseller r ON p.idreseller = r.idreseller 
                GROUP BY p.idreseller, r.nama 
                ORDER BY total_penjualan DESC";
        
        $query = mysqli_query($conn, $sql);
        
        // Error handling
        if (!$query) {
            die("Query Error: " . mysqli_error($conn));
        }
        
        // Format data untuk chart
        while ($row = mysqli_fetch_array($query)) {
            $nama_reseller = $row['nama_reseller'];
            $total_penjualan = $row['total_penjualan'];
            echo "['" . $nama_reseller . "'," . $total_penjualan . "],";
        }
		?>
		]

    }]
});

</script>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dashboard MIZAN BOOKSTORE</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

</html>