
<!doctype html>
<html>
<head>
<title><?=(null!==Registry::get('TITLE'))?Registry::get('TITLE'):'DEFAULT';?></title>
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <?=(null!==Registry::get('BOOTSTRAPCDN'))?Registry::get('BOOTSTRAPCDN'):'BOOTSTRAPCDN NOT SET';?>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- jqueryui -->
   <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<?=(null!==Registry::get('LINK'))?Registry::get('LINK'):'DEFAULT';?>
	<style><?=(null!==Registry::get('STYLE'))?Registry::get('STYLE'):'DEFAULT';?></style>
</head>

