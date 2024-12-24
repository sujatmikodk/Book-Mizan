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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="css/styleGraph.css">

</head>

<body style="margin-top:60px;">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <figure class="">
                <center>
                    <h3 class="highcharts-description" style="margin-top: 40px;">
                        Berikut merupakan grafik untuk menampilkan jumlah data pada setiap kolom di setiap tabel
                    </h3>
                    <div style="margin-top: 40px;"></div>
                </center>
                <div id="charts-container"></div>
            </figure>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mock data representing the record count of each column in each table
            const tableData = [{
                    tableName: 'fakta_pembelian',
                    columns: [{
                            columnName: 'idreseller',
                            count: 150
                        },
                        {
                            columnName: 'idpembelian',
                            count: 150
                        },
                        {
                            columnName: 'idtanggal',
                            count: 150
                        },
                        {
                            columnName: 'idproduk',
                            count: 150
                        },
                        {
                            columnName: 'stok',
                            count: 150
                        }
                    ]
                },
                {
                    tableName: 'pembelian_produk',
                    columns: [{
                            columnName: 'idpembelian',
                            count: 200
                        },
                        {
                            columnName: 'idtanggal',
                            count: 200
                        },
                        {
                            columnName: 'idproduk',
                            count: 200
                        },
                        {
                            columnName: 'judul_buku',
                            count: 200
                        },
                        {
                            columnName: 'total_barang',
                            count: 200
                        },
                        {
                            columnName: 'total_harga',
                            count: 200
                        },
                        {
                            columnName: 'idreseller',
                            count: 200
                        }
                    ]
                },
                {
                    tableName: 'produk',
                    columns: [{
                            columnName: 'idproduk',
                            count: 50
                        },
                        {
                            columnName: 'judul_buku',
                            count: 50
                        },
                        {
                            columnName: 'harga',
                            count: 50
                        },
                        {
                            columnName: 'kategori',
                            count: 50
                        }
                    ]
                },
                {
                    tableName: 'reseller',
                    columns: [{
                            columnName: 'idreseller',
                            count: 25
                        },
                        {
                            columnName: 'nama',
                            count: 25
                        }
                    ]
                },
                {
                    tableName: 'tanggal',
                    columns: [{
                            columnName: 'idtanggal',
                            count: 365
                        },
                        {
                            columnName: 'tanggal',
                            count: 365
                        },
                        {
                            columnName: 'bulan',
                            count: 12
                        },
                        {
                            columnName: 'tahun',
                            count: 3
                        },
                        {
                            columnName: 'tanggal_lengkap',
                            count: 365
                        }
                    ]
                }
            ];

            // Container to hold all the charts
            const chartsContainer = document.getElementById('charts-container');

            tableData.forEach(table => {
                // Create a new div for each table's chart
                const chartDiv = document.createElement('div');
                chartDiv.id = `chart-${table.tableName}`;
                chartDiv.style.marginBottom = '50px';
                chartsContainer.appendChild(chartDiv);

                // Generate the chart for the current table
                Highcharts.chart(chartDiv.id, {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: `Jumlah Data pada Tabel : ${table.tableName}`
                    },
                    xAxis: {
                        categories: table.columns.map(column => column.columnName),
                        title: {
                            text: 'Columns'
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Jumlah Data'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">Jumlah Data: </td>' +
                            '<td style="padding:0"><b>{point.y}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Jumlah Data',
                        data: table.columns.map(column => column.count)
                    }]
                });
            });
        });
    </script>


</body>

</html>