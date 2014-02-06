<?php
include_once('config.php');
include_once('BibleDAO.php');

$books = BibleDAO::getBooks();
$defaultChapters = BibleDAO::getChapterNumbers(1);
$defaultVerses = BibleDAO::getVerseNumbers(1, 1);
$defaultVerseText = BibleDAO::getVerseText(1, 1, 1);
?>
<html>
	<title></title>
</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/law.css">

	<body id = "bac">
		<div id = "back1" class = "span well" style = "background-image:url(dbw15.jpg)">
			<div id = "nav1" class = "span well">
				<center>
				<h2><font face = "tolkien">DIGITAL BIBLE</font></h2>
				</center>
			</div>

			<div id = "nav2" class = "span well" >
				<div id = "body1" class = "span well">
					<div id = "navigation1" class = "span well">
					Books:
					<select name="books" id="books">
						<?php foreach($books as $id => $book): ?>
							<option value="<?= $id ?>"><?= $book ?></option>
						<?php endforeach ?>
					</select>

					Chapters:
					<select name="chapters" id="chapters">
						<?php for($i = 1; $i <= $defaultChapters; $i++): ?>
							<option value="<?= $i ?>"><?= $i ?></option>
						<?php endfor ?>
					</select>

					Verses:
					<select name="verses" id="verses">
						<?php for($i = 1; $i <= $defaultVerses; $i++): ?>
							<option value="<?= $i ?>"><?= $i ?></option>
						<?php endfor ?>
					</select>
					</div>
					<div>
						<textarea id="verse_text" disabled>
							<?= $defaultVerseText ?>
						</textarea>
						
					</div>
					
					

					<script type="text/javascript" src="jquery.1.10.2.js"></script>

					<script type="text/javascript" src = "bible.js"></script>
					<script type="text/javascript" src = "search.js">

					</script>
				</div>

				<div id = "body2" class = "span well">
					<div id = "nav11" class = "span well">
						<center>
							<h3><font face = "tolkien">Search</font></h3>
							<form method = "POST">
							<input type = "text" placeholder = "Search word..." id = "search" name = "search">
							</form>
						</center>
					</div>

					<div id = "nav12" class = "span well"><textarea id = "searchout"></textarea></div>
				</div>
				
			</div>
			
		</div>
	</body>
</html>
