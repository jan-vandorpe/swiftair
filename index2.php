<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<title>SwiftAir</title>
<link rel="stylesheet" href="bootstrap.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="style.css">
</head>

<body>
<header>
	<form method="get" action="#" id="login">
    	<fieldset>
        <input type="email" name="email" id="email" placeholder="emailadres@hier.com" required />
        <input type="password" name="paswoord" id="paswoord" placeholder="paswoord" required/>
        <input type="submit" value="login"  />
        </fieldset>
    	
    </form>
    
    <!--<div id="logo">
 	<a href="#"><img src="img/2008-vliegtuigje met staart.gif"></a></div>
    </div> -->
</header>
<article>
Welkomsttekst blablabla
</article>

<section>
<form method="post" action="#" id="ZoekVlucht">
	<fieldset>
    <label for="land"> Van </label>
    	<select id="land" name="land" title="Vertrek" required>
        	<option value="#"> België </option>
            <option value="#"> Nederland </option>
            <option value="#"> Frankrijk </option>
            <option value="#"> Spanje </option>
            <option value="#"> Duitsland </option>
            <option value="#"> Luxemburg </option>
         </select>
         </input>
     <label for="land"> Naar </label>
    	<select id="land" name="land" title="Aankomst" required>
        	<option value="#"> België </option>
            <option value="#"> Nederland </option>
            <option value="#"> Frankrijk </option>
            <option value="#"> Spanje </option>
            <option value="#"> Duitsland </option>
            <option value="#"> Luxemburg </option>
         </select>
    
    	<label> Vertrekdatum <input type="date" name="vertrekdatum" id="vertrekdatum" required /> </label>
       	<label> Retour?  <input type="checkbox" valuename="retour" id="retour" onclick='tehFunc();' /> </label>
        <label> Retourdatum <input type="date" name="retourdatum" id="retourdatum" disabled/> </label>
        <label> Aantal personen <input type="number" name="aantalPersonen" id="aantalPersonen" /> </label>
        <label> <input type="submit" name="zoek" id="ZoekKnop" value="Zoek de beste vlucht" /> </label>
	</fieldset>
</form>
</section>

<footer>
Scrum opdracht in stand gebracht door Afaf, Pieter, Karel en Vicky als opdracht voor VDAB Oostende 
</footer>

<script>
function tehFunc() { document.getElementById("retourdatum").disabled = false; }
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
