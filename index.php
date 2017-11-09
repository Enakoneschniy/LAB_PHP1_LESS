<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<div>
			<input type="file" name="image">
		</div>
		<div>
			<input type="text" placeholder="Book" name="book">
		</div>
		<div>
			<input type="text" placeholder="Author" name="author">
		</div>
		<div>
			<textarea name="description"></textarea>
		</div>
		<div>
			<input type="submit" name="submit" value="Submit">
		</div>
	</form>
</body>
</html>
<?php
ini_set('display_errors',1);

	$arrBooks = [];
	$fileContent = file_get_contents('./storage.json');
	if($fileContent){
		$arrBooks = json_decode($fileContent, true);
	}
	echo "<pre>";
	if($_POST['submit']){
		$uploaddir = 'uploads/';
		$uploadfile = $uploaddir . basename($_FILES['image']['name']);
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    		echo "Файл корректен и был успешно загружен.";
    		$arrBooks[] = [
    			'book' => $_POST['book'],
    			'author' => $_POST['author'],
    			'description' => $_POST['description'],
    			'image' => $uploadfile
    		];
    		file_put_contents('./storage.json', json_encode($arrBooks));
		} else {
    		echo "Возможная атака с помощью файловой загрузки!";
		}

		echo 'Некоторая отладочная информация:';
	}
	print_r($arrBooks);

?>