
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<form method="POST">
			<label for="id">ID</label>
			<input type="text" name="id" value="<?=$id?>" class="form-control">
			<label for="subjectName">Subject Name</label>
			<input type="text" name="subjectName" value="<?=$subjectName?>" class="form-control">
			<label for="subjectCode">Subject Code</label>
			<input type="text" name="subjectCode" value="<?=$subjectCode?>" class="form-control">
			<label for="date1">Date</label>
			<input type="text" name="date1" value="<?=$date1?>" class="form-control">
			<label for="time1">Time</label>
			<input type="text" name="time1" value="<?=$time1?>" class="form-control">
			<label for="lecturer">Lecturer Name</label>
			<input type="text" name="lecturer" value="<?=$lecturer?>" class="form-control">
			<label for="faculty">Faculty</label>
			<input type="text" name="faculty" value="<?=$faculty?>" class="form-control" style = "margin-bottom:20px">
			<input type="submit" name="submit" value="Add" class="btn btn-danger">
			<a href = "CourseInfo" class = "btn btn-danger">Back</a>
		</form>
</body>