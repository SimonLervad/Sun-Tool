<!DOCTYPE HTML>  
<html>
    <head>
        <meta charset="utf-8">
        <title>php test</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <header>
            <h1>
                Solopgang/ nedgang 
            </h1>
        </header>
        <content>
            <div class="wrapper">
                <div class="title">
                    <h2>
                      Vælg destination for ønsket solopgang/ solnedgang
                    </h2>
                    <form name="dkbyer" action="" method="POST">
                        <select id="byer">
						  <option selected="selected">Vælg mellem top 10 danske byer</option>
						  <option value="0">København</option>
						  <option value="1">Århus</option>
						  <option value="2">Odense</option>
						  <option value="3">Aalborg</option>
						  <option value="4">Esbjerg</option>
						  <option value="5">Randers</option>
						  <option value="6">Kolding</option>
						  <option value="7">Horsens</option>
						  <option value="8">Vejle</option>
						  <option value="9">Roskilde</option>
						</select>
						<!-- invisible input fields -->
						<input id="dkname" type="text" name="dkname" value="" readonly>
                        <input id="lat" type="text" name="lat" value="">
                        <input id="lon" type="text" name="lon" value="">
                        <label id="note">Vær opmærksom på sommertid/ vintertid. Hvis det er sommertid er GMT yderligere +1.</label>
                        <input id="gmt" type="text" name="gmt" value="">                  
                    </form>
                </div>
                	<?php include 'sun_loop.php'?>
                <div class="column">
                    <h3>Leder du efter en anden destination, eller en ny dato. Så udfyld formularen her!</h3>
                    <form name="minform" action="" method="POST">
                        <select id="city">
							<option>Vælg en by</option>
							<option value="0">København</option>
							<option value="1">Århus</option>
							<option value="2">Odense</option>
							<option value="3">Aalborg</option>
							<option value="4">Esbjerg</option>
							<option value="5">Randers</option>
							<option value="6">Kolding</option>
							<option value="7">Horsens</option>
							<option value="8">Vejle</option>
							<option value="9">Roskilde</option>
                        </select>
                        <input id="name" type="text" name="name" value="" readonly>
                        <input type="date" name="time" value="<?php echo date('Y-m-d', strtotime("now")); ?>">
                        <input type="text" name="latitude" value="" placeholder="Længdegrader">
                        <input type="text" name="longitude" value="" placeholder="Breddegrader">
                        <label>Vær opmærksom på sommertid/ vintertid. Hvis det er sommertid er GMT yderligere +1.</label>
                        <input type="text" name="gmtOffset" value="" placeholder="GMT">
                        <input type="submit" name="submit" value="Submit">                     
                    </form>
                </div>
                <?php include 'sun_input.php' ?>
            </div>
        </content>
    </body>
</html>