<?php include('dataconnection.php'); ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="sales report.css" media="all">

        <title>Admin Sales Report</title>
  
        

    </head>
    <body >
        
    <?php include('jkai_admin_menu.php'); ?>
 
    <br/><br/><br/><br/>
    <?php
        

        // 查询数据库
        $sql = "SELECT booking_date, price FROM user_order";
        $result = $connect->query($sql);

        // 创建数组来存储每个年份的总销售额和每个月份的销售额
        $yearlyTotal = array();
        $monthlyTotal = array();

        // 处理查询结果
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $date = strtotime($row["booking_date"]);
                $year = date("Y", $date);
                $month = date("n", $date);

                // 计算每个年份的总销售额
                if (!isset($yearlyTotal[$year])) {
                    $yearlyTotal[$year] = 0;
                }
                $yearlyTotal[$year] += $row["price"];

                // 计算每个月份的销售额
                if (!isset($monthlyTotal[$year][$month])) {
                    $monthlyTotal[$year][$month] = 0;
                }
                $monthlyTotal[$year][$month] += $row["price"];
            }
        }


        ?>
        

            
            
    <table class="" cellspacing="5" cellpadding="5">
            <thead>
            <tr>
                <th rowspan="2">Years</th>
                <th rowspan="2">Total Sales</th>
                <th colspan="12">Monthly Sales</th>
            </tr>
                  <tr>
                    <th>Jan</th>
                    <th>February</th>
                    <th>March</th>
                    <th>April</th>
                    <th>May</th>
                    <th>June</th>
                    <th>July</th>
                    <th>August</th>
                    <th>September</th>
                    <th>October</th>
                    <th>November</th>
                    <th>December</th>
                    

                  </tr>
            </thead>
            <tbody>
            <?php
            // 显示每个年份的总销售额和每个月份的销售额
            foreach ($yearlyTotal as $year => $total) {
                echo "<tr>";
                echo "<td>$year</td>";
                echo "<td>$total</td>";
                for ($month = 1; $month <= 12; $month++) {
                    $monthlyAmount = isset($monthlyTotal[$year][$month]) ? $monthlyTotal[$year][$month] : 0;
                    echo "<td>$monthlyAmount</td>";
                }
                echo "</tr>";
            }
            ?>
    </tbody>

          
          </table>
                <br/>
                
                
                
                
                <script>
    function printSalesReport() {
        // 获取表格数据
        var tableData = document.getElementsByTagName('table')[0].outerHTML;

        // 创建新窗口，将表格数据嵌入其中
        var printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Sales Report</title></head><body>');
        printWindow.document.write(tableData);
        printWindow.document.write('</body></html>');

        // 请确保在加载完成后执行打印
       
            printWindow.print();S
            printWindow.close();
        
    }
</script>

        <button onclick=" printSalesReport() ">Generate</button>

               
    </body>


</html>