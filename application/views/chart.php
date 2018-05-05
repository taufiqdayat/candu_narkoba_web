    <script src=<?=base_url()."assets/chart/jquery.min.js"?> type="text/javascript"></script>
    <script src=<?=base_url()."assets/chart/highcharts.js"?> type="text/javascript"></script>
    <script type="text/javascript">
        var chart1;

        $(document).ready(function() {
            chart1 = new Highcharts.Chart({
                chart: {
                    renderTo: 'container',
                    type: 'column'
                },

                title: {
                    text: 'grafik pengguna'
                },

                xAxis: {
                    categories: ['Jumlah']
                },

                yAxis: {
                    title: {
                        text: 'jumlah (orang)'
                    }
                },

                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                        }
                },
                series:
                [

                    {
                        name: 'User',
                        data: [<?=$user?>]
                    },
                    {
                        name: 'Be User',
                        data: [<?=$beuser?>]
                    },
                    {
                        name: 'Addict',
                        data: [<?=$addict?>]
                    }
                ]
            });
        });
    </script>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Grafik</h3>
            </div>
            <div class="panel-body">
                <div id="container">coba</div>
            </div>
        </div>                          
    </div>
</div>