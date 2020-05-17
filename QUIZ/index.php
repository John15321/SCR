<?php include 'database.php'; ?>
<?php

// Get Total Questions
$query = "SELECT * FROM questions";
//Get results
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Quiz about guns</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
	<header>
		<div class="container">
			<h1>Gun Quiz</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Test Your Gun Knowledge</h2>
			<p>This is a multiple choice quiz with only one good answer</p>
			<ul>
				<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Jan Bronicki
		</div>
	</footer>
</body>

</html>