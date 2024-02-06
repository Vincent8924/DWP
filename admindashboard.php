<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="admindashboard.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Admin Dashbaord | KuanTan Hotels</title><img>
        
    </head>
    <?php include('jkai_admin_menu.php'); ?>
    
        
        

        <div class="grid">
            <div class="grid_container ">
                <h2>
                    20
                </h2>
                <p>
                    member
                </p>
            </div>
            <div class="grid_container ">
                <h2>
                    20
                </h2>
                <p>
                    admin
                </p>
            </div>
            <div class="grid_container ">
                <h2>
                    25
                </h2>
                <p>
                    Room
                </p>
            </div>
            <div class="grid_container ">
                <h2>
                    5
                </h2>
                <p>
                    Order
                </p>
            </div>
        </div>


        <div class="chart">
            <canvas id="saleChart"></canvas>
        </div>
        
        
    </body>
    <script>
        const saleData = [19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    
        // Chart.js configuration
        const ctx = document.getElementById("saleChart").getContext("2d");
        const saleChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "August", "September", "October", "November", "December"],
                datasets: [
                    {
                        label: "Sale Report",
                        borderColor: "#3498db",
                        backgroundColor: "rgba(52, 152, 219, 0.2)",
                        data: saleData,
                    },
                ],
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Monthly Sales Report 2023'
                        
                    },
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Sales(000)'
                        },
                        
                        
                    }
                }
            }
        });
    </script>
      
    