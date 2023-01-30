<?php
include "application/models/crud.php";
$db = new crud;

if(isset($_GET['action'])){
	$action = $_GET['action'];
} else {
	$action = "";
}
switch ($action) {
	case "add":
		if (isset($_POST['submit'])){
			$id = $_POST['id'];
			$subjectName = $_POST['subjectName'];
			$subjectCode = $_POST['subjectCode'];
			$date1 = $_POST['date1'];
			$time1 = $_POST['time1'];
			$lecturer = $_POST['lecturer'];
			$faculty = $_POST['faculty'];
			if(empty($id) || empty($subjectName) || empty($subjectCode)|| empty($date1) || empty($time1) || empty($lecturer) || empty($faculty)){
				$error = "Not null";
			}else{
				$db->action(sql: "INSERT INTO lecture (id,subjectName,subjectCode,date1,time1,lecturer,faculty) VALUES ('$id', '$subjectName','$subjectCode','$date1','$time1','$lecturer','$faculty')");
				header("Location:?controller=lecture");
			}		
			$data = $db->getData(sql:"SELECT * FROM lecture");
			require_once "application/views/courseinfo.php";
		} else {
			$data = $db->getData(sql:"SELECT * FROM lecture");
			require_once "application/views/add.php";
			
		}
		break;
	case "edit":
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			foreach ($db->getData(sql: "SELECT * FROM lecture WHERE id='$id'") as $row){
				$id = isset($row['id'])?$row['id']:'';
				$subjectName = isset($row['subjectName'])?$row['subjectName']:'';
				$subjectCode = isset($row['subjectCode'])?$row['subjectCode']:'';
				$date1 = isset($row['date1'])?$row['date1']:'';
				$time1 = isset($row['time1'])?$row['time1']:'';
				$lecturer = isset($row['lecturer'])?$row['lecturer']:'';
				$faculty = isset($row['faculty'])?$row['faculty']:'';
			}
			if(isset($_POST['submit'])){
				
				$id_new = $_POST['id'];
				$subjectName_new = $_POST['subjectName'];
				$subjectCode_new = $_POST['subjectCode'];
				$date1_new = $_POST['date1'];
				$time1_new = $_POST['time1'];
				$lecturer_new = $_POST['lecturer'];
				$faculty_new = $_POST['faculty'];
				if(empty($id) || empty($subjectName) || empty($subjectCode)|| empty($date1) || empty($time1) || empty($lecturer) || empty($faculty)){
				$error = "Not null";
			}else{
				$db->action(sql: "UPDATE lecture SET id='$id_new',subjectName= '$subjectName_new',subjectCode='$subjectCode_new',date1='$date1_new',time1='$time1_new',lecturer='$lecturer_new',faculty='$faculty_new' WHERE id = '$id'");
				header("Location:?controller=lecture");
			}
			
		    }
			$data = $db->getData(sql:"SELECT * FROM lecture");
			require_once "application/views/edit.php";
		} else {
			$data = $db->getData(sql:"SELECT * FROM lecture");
			require_once "application/views/courseinfo.php";
			
		}
		break;
	case "delete":
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$db->action(sql: "DELETE FROM lecture WHERE id = '$id'");
			header("Location:?controller=lecture");
			
		}
		$data = $db->getData(sql:"SELECT * FROM lecture");
		require_once "application/views/courseinfo.php";
		break;
	default:
		$data = $db->getData(sql:"SELECT * FROM lecture");
		require_once "application/views/courseinfo.php";
		break;
}




?>