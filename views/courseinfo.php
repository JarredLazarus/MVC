
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Schedule</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<a href="CourseInfo?controller=lecture&action=add" class="btn btn-primary">Add</a>
		<a href="Welcome" class="btn btn-danger">Home</a>
		<table class="table" style = "margin-top:20px">
			<thead>
				<th>#</th>
				<th>Subject Name</th>
				<th>Subject Code</th>
				<th>Date</th>
				<th>Time</th>
				<th>Lecturer</th>
				<th>Faculty</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				foreach ($data as $lecture){
					?>
					<tr>
					<td><?=$lecture['id'] ?></td>
					<td><?=$lecture['subjectName'] ?></td>
					<td><?=$lecture['subjectCode'] ?></td>
					<td><?=$lecture['date1'] ?></td>
					<td><?=$lecture['time1'] ?></td>
					<td><?=$lecture['lecturer'] ?></td>
					<td><?=$lecture['faculty'] ?></td>
					<td>
						<a href="CourseInfo?controller=lecture&action=edit&id=<?=$lecture['id'] ?>" class="btn btn-primary">Edit</a>
						<a href="CourseInfo?controller=lecture&action=delete&id=<?=$lecture['id'] ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
					<?php
				}
			?>
				
		</table>
	</div>
</body>
