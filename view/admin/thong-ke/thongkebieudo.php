<div id="piechart" style="width: 900px; height: 500px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // var data = google.visualization.arrayToDataTable([
        //   ['Task', 'Hours per Day'],
        //   ['Work',     11],
        //   ['Eat',      2],
        //   ['Commute',  2],
        //   ['Watch TV', 2],
        //   ['Sleep',    7]
        // ]);
        var data = google.visualization.arrayToDataTable([
            ['Danh mục','Số lượng'],
            <?php
            foreach($thongke as $item){
                extract($item);
                echo "['$ten_loai',$sl],";
            }
               
            ?>
            
        ]);

        var options = {
            title: 'Thống kê biểu đồ hàng hóa '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
