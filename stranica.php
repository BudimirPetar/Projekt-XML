<html>
<head>
<title>Login</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	
	<link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="F1.svg.png" alt="Bootstrap"  height="24">
    </a>
  </div>
</nav>
<?php
    $xml = simplexml_load_file('utrke.xml');
 ?>


<div class="container">
    
    <?php foreach($xml->utrka as $utrka): ?>
        <div class="card d-inline-block" style="width: 18rem;">
        <img src="<?php echo $utrka-> slika ?>" class="card-img-top" alt="..." >
        <div class="card-body">
        <h5 class="card-title"><?php echo $utrka-> naziv ?></h5>
        <p class="card-text"><?php echo $utrka-> datum ?></p>
        <button type="button" class="btn btn-warning" style="margin-bottom:5px; width:150px;"><?php echo $utrka-> pobjednik ?></button></button>
        <button type="button" class="btn btn-warning" style="margin-bottom:5px; width:150px; background-color:silver; border: silver;"><?php echo $utrka-> drugi ?></button></button>
        <button type="button" class="btn btn-warning" style="margin-bottom:5px; width:150px; background-color:#CD7F32; border: #CD7F32;"><?php echo $utrka-> treći ?></button></button>
        
        
          
    </div>
    </div>
    <?php endforeach; ?>
</div>  


</body>
</html>