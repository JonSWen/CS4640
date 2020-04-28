<!-- Created by Margaret Chen (mdc5bv) and Jonathan Wen (jsw2dg) for CS4640 Web PL project -->


<?php
session_start();
$username = "";
$email    = "";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: dashboard.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: dashboard.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  //header('Access-Control-Allow-Origin: http://localhost:4200');
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
 header('Access-Control-Max-Age: 1000');
 header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');
 
  // retrieve data from the request
  $postdata = file_get_contents("php://input");
  
  // Process data
  // (this example simply extracts the data and restructures them back)

  // Extract json format to PHP array
  $request = json_decode($postdata);

  $data = [];
  // $data[0]['length'] = $content_length;
  foreach ($request as $k => $v)
  {
    $data[0]['post_'.$k] = $v;
  }
  

  $fooddesc = mysqli_real_escape_string($db, $data[0]['post_food']);
  $calories = mysqli_real_escape_string($db, $data[0]['post_calories']);
  $protein = mysqli_real_escape_string($db, $data[0]['post_protein']);
  $carbs = mysqli_real_escape_string($db, $data[0]['post_carbohydrates']);
  $fat = mysqli_real_escape_string($db, $data[0]['post_fat']);
  $username = $_SESSION['username'];

  $query = "INSERT INTO foodentyr (userID, food, calories, protein, carbs, fat) 
        VALUES('$username', '$fooddesc', '$calories', '$protein','$carbs','$fat')";
  if (mysqli_query($db, $query)){
    http_response_code(201);
    $foodentry = [
      'food' => $foodesc,
      'calories' => $calories,
      'protein' => $protein,
      'carbs' => $carbs,
      'fat' => $fat
    ];
  }


  // Send response (in json format) back the front end
  echo json_encode(['content'=>$data]);

 
  ?>