
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adminlist.css">
  <title>Manage Staff | KuanTan Hotels</title>
</head>
<body>
<?php include('jkai_admin_menu.php'); ?>
  

  <div class="container">
    <h1>Staff List</h1>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Username</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="staffTableBody">
      </tbody>
    </table>

    <button>Add</button>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script>
  <script id="staff-template" type="text/x-handlebars-template">
    {{#each staffList}}
      <tr>
        <td>{{name}}</td>
        <td>{{username}}</td>
        <td>
          <button>View</button>
          <button>Edit</button>
          <button>Delete</button>
        </td>
      </tr>
    {{/each}}
  </script>
    
  <script>
    // Sample data for initial staff list
    const initialStaffList = [
      { name: "Vincent", username: "vincent123" },
      { name: "Lo Jin Kai", username: "jinkai123" },
      { name: "Chee Jiong King", username: "jking123" },
      // Add more staff as needed
    ];

    // Function to initialize staff list using Handlebars
    function initStaffList() {
      const staffTableBody = document.getElementById("staffTableBody");
      const staffTemplate = document.getElementById("staff-template").innerHTML;
      const compiledTemplate = Handlebars.compile(staffTemplate);

      staffTableBody.innerHTML = compiledTemplate({ staffList: initialStaffList });
    }

    // Initialize staff list on page load
    initStaffList();
  </script>
  

  
  
</body>
</html>


  
</body>
</html>
