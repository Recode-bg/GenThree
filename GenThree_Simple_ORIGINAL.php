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
	
<?php
	include 'includes/dbh.php';
	$conn = OpenCon();
	
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * from relations WHERE ID = 'N31';";
	$result = $conn->query($sql);
	
	
	echo '
	<div id="main">
	<div id="canvas">
		
		
		
		
		
		
	<div id="GP_roll">';
	
	while($row = $result->fetch_assoc()) {
		
		foreach($row as $key => $field) {
			
			if(startsWith($key,'GP')) {
				$gender = 'male';
				$lining = 'husband_line';
				if(endsWith($key,'2')) {
					$gender = 'female';
					$lining = 'wife_line';
				}
				echo '<div id="'.$key.'" class="person">';
				echo '<div class="holder '.$gender.'">'. htmlspecialchars($field).'</div>';
				echo '<div class=" '.$lining.'"></div>';
				echo '</div>';
			}
		}
	}
	echo '
	</div>
	
	<svg id="GPP" viewBox="0 0 1890 150" xmlns="http://www.w3.org/2000/svg">
		<line x1="600" y1="0" x2="780" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="830" y1="0" x2="880" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1060" y1="0" x2="1010" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1290" y1="0" x2="1110" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
	</svg>
		
	<div id="P_roll">';
	
	mysqli_data_seek($result, 0);
	while($row = $result->fetch_assoc()) {
		
		foreach($row as $key => $field) {
			
			if(startsWith($key,'P')) {
				$gender = 'male';
				$lining = 'husband_line';
				if(endsWith($key,'2')) {
					$gender = 'female';
					$lining = 'wife_line';
				}
				echo '<div id="'.$key.'" class="person">';
				echo '<div class="holder '.$gender.'">'. htmlspecialchars($field).'</div>';
				echo '<div class=" '.$lining.'"></div>';
				echo '</div>';
			}
		}
	}
	echo '
	</div>
	
	<svg id="PN" viewBox="0 0 1890 150" xmlns="http://www.w3.org/2000/svg">
		<line x1="370" y1="0" x2="320" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="600" y1="0" x2="550" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="830" y1="0" x2="420" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="830" y1="0" x2="650" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="830" y1="0" x2="895" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1060" y1="0" x2="995" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1060" y1="0" x2="1240" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1060" y1="0" x2="1570" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1290" y1="0" x2="1340" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1520" y1="0" x2="1470" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
	</svg>
	
	<div id="N_roll">';
	
	mysqli_data_seek($result, 0);
	while($row = $result->fetch_assoc()) {
		
		foreach($row as $key => $field) {
			
			if(startsWith($key,'N')) {
				$gender = 'male';
				$lining = 'husband_line';
				if(endsWith($key,'2')) {
					$gender = 'female';
					$lining = 'wife_line';
				}
				echo '<div id="'.$key.'" class="person">';
				echo '<div class="holder '.$gender.'">'. htmlspecialchars($field).'</div>';
				echo '<div class=" '.$lining.'"></div>';
				echo '</div>';
			}
		}
	}
	echo '
	</div>
		
	<svg id="NC" viewBox="0 0 1890 150" xmlns="http://www.w3.org/2000/svg">
		<line x1="370" y1="0" x2="190" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="600" y1="0" x2="320" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="600" y1="0" x2="650" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="945" y1="0" x2="780" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="945" y1="0" x2="1110" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1290" y1="0" x2="1290" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1520" y1="0" x2="1470" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1520" y1="0" x2="1800" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
	</svg>
		
	<div id="C_roll">';
	
	mysqli_data_seek($result, 0);
	while($row = $result->fetch_assoc()) {
		
		foreach($row as $key => $field) {
			
			if(startsWith($key,'C')) {
				$gender = 'male';
				$lining = 'husband_line';
				if(startsWith($key,'C61')) {
					$lining = 'male_sibling_line';
				}
				if(endsWith($key,'2')) {
					$gender = 'female';
					$lining = 'wife_line';
					if(startsWith($key,'C62')) {
						$lining = 'female_sibling_line';
					}
				}
				echo '<div id="'.$key.'" class="person">';
				if(startsWith($key,'C6')) {
					echo '<div class=" '.$lining.'"></div>';
					echo '<div class="holder '.$gender.'">'. htmlspecialchars($field).'</div>';
				} else {
					echo '<div class="holder '.$gender.'">'. htmlspecialchars($field).'</div>';
					echo '<div class=" '.$lining.'"></div>';
				}
				echo '</div>';
			}
		}
	}
	echo '
	</div>
		
	<svg id="CGC" viewBox="0 0 1890 150" xmlns="http://www.w3.org/2000/svg">
		<line x1="370" y1="0" x2="370" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="600" y1="0" x2="600" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="830" y1="0" x2="830" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1060" y1="0" x2="1060" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1520" y1="0" x2="1520" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
		<line x1="1750" y1="0" x2="1750" y2="150" stroke="white" stroke-width="1px" vector-effect="non-scaling-stroke"></line>
	</svg>
	
		
	<div id="GC_roll">';
	
	mysqli_data_seek($result, 0);
	while($row = $result->fetch_assoc()) {
		
		foreach($row as $key => $field) {
			
			if(startsWith($key,'GC')) {
				$gender = 'male';
				$lining = 'male_sibling_line';
				if(endsWith($key,'2')) {
					$gender = 'female';
					$lining = 'female_sibling_line';
				}
				echo '<div id="'.$key.'" class="person">';
				echo '<div class=" '.$lining.'"></div>';
				echo '<div class="holder '.$gender.'">'. htmlspecialchars($field).'</div>';
				echo '</div>';
			}
		}
	}
	echo '	
	</div>
		
	</div>
</div>';
		$conn->close();
	?>
</body>
</html>
