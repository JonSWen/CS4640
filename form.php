<?php
include('./connectdb.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  
  <title>PHP and database</title>    
</head>
<body>
  
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

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //server-side input validation to check non-null inputs
        if (!empty($_POST['fooddesc']) && !empty($_POST['calories']))
        {
            global $db;
            $test1 = $_POST['fooddesc'];
            $test2 = $_POST['calories'];
            $test3 = $_POST['protein'];
            $test4 = $_POST['carbs'];
            $test5 = $_POST['fat'];
        
            $query = "INSERT INTO foodentry (food, calories, protein, carbs, fat) VALUES ('$test1', '$test2', '$test3', '$test4', '$test5');";
            $statement = $db->prepare($query);
            if(!$statement->execute()) {
                echo 'something went wrong here calories: ' . $test2;
                print_r($statement->errorInfo());
                
            }     
            // if the statement is successfully executed, execute() returns true
            // false otherwise
            
            $statement->closeCursor();
            //addTask($_POST['taskdesc'], $_POST['duedate'], $_POST['priority']);
            //header("Location: main.php?action=list_tasks");
        }
    }


?>