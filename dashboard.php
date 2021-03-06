<!--Created by Margaret Chen (mdc5bv), working with Jonathan Wen (jsw2dg) on CS4640 Web PL project-->
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Daily Health</title>
    <link rel="stylesheet" href="dashboard-styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="./dashboard.js"></script>
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


<!----------Summary Dashboard Card---------->
<h5 id="dashboard-title">Summary Dashboard</h5>
<div class="summaryDash container card card-body">
<div class="row">
    <div class="col-3">Calories Remaining: 1300</div>
    <div class="progress col-9">
    <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">700 cal</div>
    </div>
</div>
<p>Goal: 2000cal &nbsp; &nbsp; Goal weight: 140lb</p>

<div class="row">
    <div class="col-6" id="stats">
        <ul class="list-group">
            <li class="list-group-item">Carbohydrates: &nbsp; 33% &nbsp; 30%</li>
            <li class="list-group-item">Fat: &nbsp; 33% &nbsp; 30%</li>
            <li class="list-group-item">Protein: &nbsp; 33% &nbsp; 40%</li>
        </ul>
    </div>

    <?php 

         $countArray = array(0, 0, 0);   
         for ($row = 0; $row < count($rows); $row +=1) {
             for ($entry = 3; $entry < 6; $entry += 1) {
                 $countArray[$entry - 3] += $rows[$row][$entry];
            }
         }
         echo $countArray[1];
    ?>
    <div class="col-4">
        <!----------For pie chart---------->
        <canvas id="chartjs-4" class="chartjs" width="748" height="374" style="display: block; height: 187px; width: 374px;"></canvas>
        <script>
            new Chart(document.getElementById("chartjs-4"),{"type":"pie","data":{"labels":["Carbohydrates","Fat","Protein"],"datasets":[{"label":"My First Dataset","data":[<?php echo $countArray[0]?>,<?php echo $countArray[1]?>,<?php echo $countArray[2]?>],"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]}});
        </script>
        <!----------For pie chart END---------->
    </div>
</div>

</div>
<!----------Summary Dashboard Card END---------->

<div class="container card card-body" style="margin-top: 40px; margin-bottom: 50px;">
    <h5 id="exercise-title">Today's Exercise</h5>
    <div class="row container" id="test">
        <div class="col-3" id="chart1">Calories
        <canvas id="chartjs-3" class="chartjs" style="display: block; height: 187px; width: 374px;"></canvas>
        <script>
            new Chart(document.getElementById("chartjs-3"),{"type":"doughnut","data":{"labels":["Calories"],"datasets":[{"label":"My First Dataset","data":[120, 240],"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]}});
        </script>
        </div>
        
        <div class="col-3" id="chart2">Steps
        <canvas id="chartjs-2" class="chartjs" style="display: block; height: 187px; width: 374px;"></canvas>
        <script>
            new Chart(document.getElementById("chartjs-2"),{"type":"doughnut","data":{"labels":["Steps"],"datasets":[{"label":"My First Dataset","data":[120, 240],"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]}});
        </script>
        </div>
        
        <div class="col-3" id="chart3">Distance (miles)
        <canvas id="chartjs-1" class="chartjs" style="display: block; height: 187px; width: 374px;"></canvas>
        <script>
            new Chart(document.getElementById("chartjs-1"),{"type":"doughnut","data":{"labels":["Miles"],"datasets":[{"label":"My First Dataset","data":[120, 240],"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]}});
        </script>
        </div>
        
        <div class="col-3" id="chart4">Active Minutes
        <canvas id="chartjs-5" class="chartjs" style="display: block; height: 187px; width: 374px;"></canvas>
        <script>
            new Chart(document.getElementById("chartjs-5"),{"type":"doughnut","data":{"labels":["Minutes"],"datasets":[{"label":"My First Dataset","data":[120, 240],"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]}});
        </script>
        </div>
    </div>
</div>

<button id="myBtn">Change Display</button>
<script>
    document.getElementById("myBtn").addEventListener("click", changeDisplay);
</script>


</body>
</html>
