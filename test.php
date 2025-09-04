

<!DOCTYPE html>
<html>
	<title>GenThree Simple</title>
	<meta charset="UTF-8">
	<meta name="description" content="Безплатно приложение за определяне на роднински отношения">
	<meta name="keywords" content="HTML, CSS">
	<meta name="author" content="Alexander Grantcharov | Recode.bg">


<head>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="includes/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/flaticon.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="includes/scripts.js"></script>
	
	<style></style>
	
</head>


<body>
    
    test
    <?php
    

    echo 'Current PHP version: ' . phpversion();
    
    mysql_connect('127.0.0.1:3306','root','yohoho&aBOTTLE0R');
    mysql_select_db("genthree_new");
    $result = mysql_query('SELECT ID FROM relations');
    
    ?>
    
</body>
</html>