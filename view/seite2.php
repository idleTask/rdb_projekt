<!DOCTYPE html>

<html>

	<head>

		<title> Energieverbrauch und CO2-Emission in Deutschland</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css">
		<link rel="stylesheet"  href="style.css">

	</head>
	<body>
		<header>
			<h1 > Energieverbrauch und CO2-Emission in Deutschland</h1>
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="..\index.html">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="seite1.php">Diagramm 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="seite2.php">Diagramm 2</a>
  </li>
</ul>






<div id="auswahl">

  		<label class="btn btn-primary">
    	<input type="checkbox" name="options" id="checkEn" autocomplete="off" checked data-toggle="toggle">Energieverbrauch
  		</label>
  		<label class="btn btn-primary">
   		<input type="checkbox" name="options" id="checkCo" autocomplete="off" data-toggle="toggle"> CO2-Emission
  		</label>

</div>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Produktionsbereich 1
  </button>

  <div  id = "divDropdown1" class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenu2">
    
  </div>
</div>
<<<<<<< HEAD

		<div class="dropdown">
=======
		
<div class="dropdown">
>>>>>>> 2c340b01313059c5da24ee136577dcf342d358ec
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Produktionsbereich 2
  </button>

  <div id="divDropdown2" class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenu2">
  
  </div>
</div>

		</header>
    <div>
      <script src="..\dist\Chart.bundle.js"></script>
      <script src="..\dist\Chart.js"></script>
      <script src="..\dist\Chart.min.js"></script>
      <script src="..\dist\Chart.bundle.min.js"></script>
      <div class="chart-container">
        <canvas id="canvas"></canvas>
      </div>
    <?php include "..\js\chart2.php" ?>
    </div>


	<!-- <script src="..\js\seite1.js"></script> -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="..\bootstrap\js\bootstrap.min.js"></script>
	</body>


</html>
