<body class="vote-body">
    <div class="jumbotron main-jumbotron">
        <div class="container">
        <p style="font-size: 40px; color: #E5CECE; font-family: 'Nunito', sans-serif; font-weight: 900; text-align: center;">Hasil Statistika Pemilihan Umum</p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card statistik-card" style="background-color:#E5CECE;">
                        Pemilihan Umum Ketua BEM Kema Unpad
                        <div id="piechart"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            // Load google charts
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            // Draw the chart and set the chart values
                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Fakultas', 'Hasil Presentase'],
                            ['FK', 16],
                            ['FEB', 9],
                            ['FIB', 12],
                            ['FISIP', 22],
                            ['FMIPA', 9],
                            ['Belum Memilih', 32],
                            ]);

                            // Optional; add a title and set the width and height of the chart
                            var options = {'title':'Hasil Presentase yang Sudah Memilih', 'width':400, 'height':300};

                            // Display the chart inside the <div> element with id="piechart"
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                            }
                        </script>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card statistik-card" style="background-color:#E5CECE;">
                        Pemilihan Umum Ketua BEM Kema FMIPA Unpad
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card disclaimer-card" style="background-color:#E5CECE;">
                    <h2 style="font-weight:900">Disclaimer</h2>
                    1. Data Entri yang ditampilkan pada Statistik Hitung suara adalah data yang disalin apa adanya sesuai pemungutan suara
                    <br>
                    2. Apabila terdapat kekeliruan pengisian data atau perbedaan, maka akan dilalukan perbaikan sesuai data pemungutan suara
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>