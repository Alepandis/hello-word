<!DOCTYPE html>
<html>

<head>

	<link href="Metro-UI-CSS-master\docs\css\metro.css" rel="stylesheet">
    <script src="Metro-UI-CSS-master\test\RequireJS\scripts\jquery.js"></script>
    <script src="Metro-UI-CSS-master\test\RequireJS\scripts\metro.js"></script>

</head>

	<div class="container">
        <header class="margin30 no-margin-left no-margin-right" style="text-align: center;">
            <div class="clear-float">
            	<div class="heading bg-darkRed fg-white">
            
                    <h1>Bienvenido a Suntech</h1>
      			</div>
            </div>
    </div>

		<div class="tile-big tile-wide-y bg-white" data-role="tile" style="width: 100%; text-align: center;">
	            <div class="panel bg-grayLighter" style="height: 100%; width: 50%; left:25%">
	                <div class="heading bg-darkRed fg-white text-bold">
	                        Busca celdas
	                </div>

	                <form action="tablainfocel_mapa.php" method="get">	
						<div class="input-control text margin30" style="width: 60%">
							</br>		
							<input type="text" name="mcc" placeholder="Ingresa el mcc"></br></br>
							<input type="text" name="mnc" placeholder="Ingresa el mnc"></br></br>
							<input type="text" name="lac" placeholder="Ingresa el lac"></br></br>
							<input type="text" name="cid" placeholder="Ingresa el cid"></br></br>
							<input class="bg-gray fg-grayLighter text-bold" type="submit" style="width: 50%;">
						</div>
					</form>

	            </div>
	    </div>
</body>
</html>