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
 
        

        

            
            
    <table cellspacing="5" cellpadding="5">
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

            

            
            <tr>
                
                
            </tr>
          
          </table>
                <br/>
                
                
                <button>Reset</button>
                
                <script>
            // JavaScript function to generate and print a dynamic report
        function generateAndPrintReport() {
            // Create a new document for the dynamic report
            var newDoc = document.implementation.createHTMLDocument('Sales Report');

            // Create a new div element for the dynamic report
            var dynamicReportDiv = newDoc.createElement('div');
            dynamicReportDiv.classList.add('dynamic-report');

            // Add content to the dynamic report with inline styles
            dynamicReportDiv.innerHTML =
            '<br/><br/><div class="centre" style="text-align: center; margin: 0 auto;">' +
            '<img src="KuanTan Hotels2.png" style="max-width: 100%; height: auto;">' +
            '<h1>KuanTan Hotels</h1></div>' +
            '<br/><hr/><br/>' +
            '<h1><u>Sales Report</u></h1>' +
            '<table cellspacing="5" cellpadding="5" style="background-color: #ffffff;color: #000000;border: 1px solid #ccc; margin-top: 10px;border: 10; width: 60%;">'+       
            '<tr><td>Room No :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A1</td></tr>'+ 
            '<tr><td>Room Type :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Presidential Suite</td></tr>'  + 
            '<tr><td>Customer Name :&nbsp;&nbsp;&nbsp;&nbsp;LO JIN KAI</td></tr>'+ 
            '<tr><td>Booking Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8-2-2024</td></tr>'+ 
            '<tr><td>Check In :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10-2-2024</td></tr>'+ 
            '<tr><td>Check Out :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12-2-2024</td></tr>'+ 
            '<tr><td>Room Status :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Occupied</td></tr>'+ 
            '</table>';

            // Append the dynamic report to the new document's body
            newDoc.body.appendChild(dynamicReportDiv);

            // Print the dynamic report
            newWin = window.open("");
            newWin.document.write(newDoc.documentElement.innerHTML);
            newWin.document.close();
            newWin.print();
            newWin.close();
        }

        </script>

        <button onclick="generateAndPrintReport()">Generate</button>

               
    </body>


</html>