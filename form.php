<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  
  <title>PHP and database</title>    
</head>
<body>
  <!----------Navbar---------->
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <img src="logo.png" class="navbar-brand" style="width:150px"/>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="personalinfo.html">Profile</a>
        <a class="nav-item nav-link" href="form.php">Upload</a>
        <a class="nav-item nav-link" href="#">Contact Us</a>
        </div>
    </div>
    </nav>
<!----------Navbar END---------->
  <div class="container">
  <br/>
  
  <form method="post">
   <div class="form-group">
      <label for="fooddesc">Food</label>
      <input type="text" name="fooddesc" class="form-control"
             value="<?php if (!empty($task_to_update)) echo $task_to_update['test1'] ?>" />        
   </div>     
   <div class="form-group">
      <label for="calories">Calories</label>  
      <input type="text" name="calories" class="form-control" 
             value="<?php if (!empty($task_to_update)) echo $task_to_update['test2'] ?>" />  
   </div>      
   <div class="form-group">
      <label for="protein">Protein</label>  
      <input type="text" name="protein" class="form-control" 
             value="<?php if (!empty($task_to_update)) echo $task_to_update['test3'] ?>" />  
   </div>    
   <div class="form-group">
      <label for="carbs">Carbohydrates</label>  
      <input type="text" name="carbs" class="form-control" 
             value="<?php if (!empty($task_to_update)) echo $task_to_update['test4'] ?>" />  
   </div>    
   <div class="form-group">
      <label for="fat">Fat</label>  
      <input type="text" name="fat" class="form-control" 
             value="<?php if (!empty($task_to_update)) echo $task_to_update['test5'] ?>" />  
   </div>    
   <input type="submit" value="Add" name="action"  class="btn btn-dark" title="Create 'todo' table" />   
  </form>
    
  </div>
</body>
</html>

