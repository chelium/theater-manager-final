<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Create-Edit</title>
  <script src="./script.js"></script>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="layout.css" />
  <link href="normalize2.css" rel="stylesheet"/>
</head>

<body id="page-index">
  
  <?php include 'includes/_header.php'; ?>
  <main>
	<div>
	  <h2>Create/Edit</h2>
	</div>
	
    <table align="center">

      <thead>
        <tr id="days of week">
          <th>MONDAY</th>
          <th>TUESDAY</th>
          <th>WEDNESDAY</th>
          <th>THURSDAY</th>
          <th>FRIDAY</th>
          <th>SATURDAY</th>
          <th>SUNDAY</th>
        </tr>
      </thead>
      
      <tbody>
        <tr>
          
          <td><a href="createMonday.php">+create/edit</a></td>
          <td><a href="createTuesday.php">+create/edit</a></td>
          <td><a href="createWednesday.php">+create/edit</a></td>
          <td><a href="createThursday.php">+create/edit</a></td>
          <td><a href="createFriday.php">+create/edit</a></td>
          <td><a href="createSaturday.php">+create/edit</a></td>
          <td><a href="createSunday.php">+create/edit</a></td>
          
        </tr>
        
      </tbody>
    </table>
    
  </main>
  
</body>
</html>
