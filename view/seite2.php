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
    	<input type="checkbox" name="options" id="option1" autocomplete="off" checked data-toggle="toggle">Energieverbrauch
  		</label>
  		<label class="btn btn-primary">
   		<input type="checkbox" name="options" id="option2" autocomplete="off" data-toggle="toggle"> CO2-Emission
  		</label>
	
</div>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Produktionsbereich 1
  </button>

  <div  class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">1995</button>
    <button class="dropdown-item" type="button">1996</button>
    <button class="dropdown-item" type="button">1997</button>
    <button class="dropdown-item" type="button">1998</button>
    <button class="dropdown-item" type="button">1999</button>
    <button class="dropdown-item" type="button">2000</button>
    <button class="dropdown-item" type="button">2001</button>
    <button class="dropdown-item" type="button">2002</button>
    <button class="dropdown-item" type="button">2003</button>
    <button class="dropdown-item" type="button">2004</button>
    <button class="dropdown-item" type="button">2005</button>
    <button class="dropdown-item" type="button">2006</button>
    <button class="dropdown-item" type="button">2007</button>
    <button class="dropdown-item" type="button">2008</button>
    <button class="dropdown-item" type="button">2009</button>
    <button class="dropdown-item" type="button">2010</button>
    <button class="dropdown-item" type="button">2011</button>
    <button class="dropdown-item" type="button">2012</button>
    <button class="dropdown-item" type="button">2013</button>
    <button class="dropdown-item" type="button">2014</button>
  </div>
</div>
		
		<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Produktionsbereich 2
  </button>

  <div  class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">1995</button>
    <button class="dropdown-item" type="button">1996</button>
    <button class="dropdown-item" type="button">1997</button>
    <button class="dropdown-item" type="button">1998</button>
    <button class="dropdown-item" type="button">1999</button>
    <button class="dropdown-item" type="button">2000</button>
    <button class="dropdown-item" type="button">2001</button>
    <button class="dropdown-item" type="button">2002</button>
    <button class="dropdown-item" type="button">2003</button>
    <button class="dropdown-item" type="button">2004</button>
    <button class="dropdown-item" type="button">2005</button>
    <button class="dropdown-item" type="button">2006</button>
    <button class="dropdown-item" type="button">2007</button>
    <button class="dropdown-item" type="button">2008</button>
    <button class="dropdown-item" type="button">2009</button>
    <button class="dropdown-item" type="button">2010</button>
    <button class="dropdown-item" type="button">2011</button>
    <button class="dropdown-item" type="button">2012</button>
    <button class="dropdown-item" type="button">2013</button>
    <button class="dropdown-item" type="button">2014</button>
  </div>
</div>
		
		</header>
    <div>
      <script src="..\dist\Chart.bundle.js"></script>
      <script src="..\dist\Chart.js"></script>
      <script src="..\dist\Chart.min.js"></script>
      <script src="..\dist\Chart.bundle.min.js"></script>
      <div style="width:75%;">
        <canvas id="canvas"></canvas>
      </div>
    <script src="..\js\chart2.js"></script>
    </div>


		<script src="..\js\seite1.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="..\bootstrap\js\bootstrap.min.js"></script>
	</body>
	
	
</html>

