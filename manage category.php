
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="manage room.css">

        <title>Admin Manage Category</title>
  
        

    </head>
    <body >
        
    <?php include('jkai_admin_menu.php'); ?>
 
        <br/><br/>

        <div class="search-bar">
            <form action="#">
              <input type="text" class="search-input" placeholder="Search">
              &nbsp;&nbsp;
              <button>Enter</button>
                

            </div>

            <button id="add" >Add</button>
            <br/><br/>
            <table cellspacing="5" cellpadding="5">
                <thead>
                  <tr>
                    
                    

                    <th>Room Type</th>
                    <th>Quantity of the Rooms</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    
                    <th>
                        <select class="field">
                            <option value="Presidential Suite">Presidential Suite</option>
                            <option value="Executive Suite">Specialty Suite</option>
                            <option value="Executive Suite">Executive Suite</option>
                            <option value="Club Premier Room">Club Premier Room</option>
                            <option value="Deluxe Rooms">Deluxe Rooms</option>                                  
                        </select>
                    </th>
                    <th><input type="text" class="field" placeholder="Quantity of the Rooms"></th>
                </tr>
                </tbody>
                </table>
                <br/><hr/><br/>

        <table cellspacing="5" cellpadding="5">
            <thead>
              <tr>
                
                
                <th>Room Type</th>
                <th>Quantity of the Rooms</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
        
                <tr>
                    
                    <td>Presidential Suite</td>
                    <td>5</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    
                    <td>Specialty Suite</td>
                    <td>5</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    
                    <td>Executive Suite</td>
                    <td>5</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    
                    <td>Club Premier Room</td>
                    <td>5</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    
                    <td>Deluxe Rooms</td>
                    <td>5</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                


            </tbody>
          </table>
        
    </body>


</html>