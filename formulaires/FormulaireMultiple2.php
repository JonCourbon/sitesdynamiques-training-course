<?php
	var_dump($_GET);
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<body>

<form id="regForm" action="FormulaireMultiple3.php" method="GET">
  <h1>Enregistrement:</h1>
  <div>Informations de contact:
    <p><input placeholder="E-mail..." name="email" required="required"></p>
    <p><input placeholder="Téléphone..." name="tel" required="required"></p>
  </div>
  <div>
	<p><input type="submit" value="Suivant"/></p>
  </div>
    <!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step active"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>
</form>

Inspiré du code: <a href="https://www.w3schools.com/howto/howto_js_form_steps.asp" target="_new">W3School How TO - Form with Multiple Steps</a>

<script>
</script>

</body>
</html>
