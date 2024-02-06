
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="manage room.css">

        <title>Admin Manage Room</title>
  
        

    </head>
    <body >
        
    <?php include('jkai_admin_menu.php'); ?>
          
        
        
        
        
        
 
        <br/><br/>

        <div class="search-bar">
            <form action="#">
              <input type="text" class="search-input" placeholder="Search">
              
              &nbsp;&nbsp;
              <button>Enter</button>
              <br/>
                

            </div>

            <button id="add" >Add</button>
            <br/><br/>
            <table cellspacing="5" cellpadding="5">
                <thead>
                  <tr>
                    
                    
                    <th>Room No</th>
                    <th>Room Type</th>
                    <th>Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <th><input type="text" class="field" placeholder="Room No"></th>
                    <th>
                        <select class="field">
                            <option value="Presidential Suite">Presidential Suite</option>
                            <option value="Executive Suite">Specialty Suite</option>
                            <option value="Executive Suite">Executive Suite</option>
                            <option value="Club Premier Room">Club Premier Room</option>
                            <option value="Deluxe Rooms">Deluxe Rooms</option>                                  
                        </select>
                    </th>
                    <th>
                      <select class="field">
                        <option value="Vacant">Vacant</option>
                        <option value="Booked">Booked</option>
                        <option value="Occupied">Occupied</option>
                        <option value="Cleaning">Cleaning</option>
                        <option value="Under Maintenance">Under Maintenance</option>
                        <option value="Cancelled">Cancelled</option>                                  
                    </select>
                    </th>

                </tr>
                </tbody>
                </table>
                <br/><hr/><br/>

        <table cellspacing="5" cellpadding="5">
            <thead>
              <tr>
                <th>Room No</th>
                
                <th>Room Type</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A1</td>
                    <td>Presidential Suite</td>
                    <td>Vacant</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>
                
                <tr>
                    <td>A2</td>
                    <td>Presidential Suite</td>
                    <td>Vacant</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    <td>A3</td>
                    <td>Presidential Suite</td>
                    <td>Occupied</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>
                  
                <tr>
                    <td>A4</td>
                    <td>Presidential Suite</td>
                    <td>Cleaning</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    <td>A5</td>
                    <td>Presidential Suite</td>
                    <td>Under Maintenance</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    <td>B1</td>
                    <td>Specialty Suite</td>
                    <td>Occupied</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    <td>C1</td>
                    <td>Executive Suite</td>
                    <td>Booked</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    <td>D1</td>
                    <td>Club Premier Room</td>
                    <td>Occupied</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                <tr>
                    <td>E1</td>
                    <td>Deluxe Rooms</td>
                    <td>Occupied</td>
                    <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
                </tr>

                


            </tbody>
          </table>
        
    </body>


</html>