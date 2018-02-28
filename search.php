
				<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="project1";
	$output="";
	$conn=mysqli_connect($servername, $username, $password, $database);
	if ($conn==TRUE){
		echo 'Konekcija na bazu je uspjesna. ';
	}else {
		echo 'Greska. Konekcija na bazu nije uspjela. ';
	}
	if (isset($_POST['searchVal'])){
		$searchq=$_POST['searchVal'];
		$searchq=preg_replace("#[^0-9a-z]#", "", $searchq);
		$query=mysqli_query($conn, "SELECT * FROM members WHERE lastname LIKE '%$searchq%' OR firstname LIKE '%$searchq%'");
		$count=mysqli_num_rows($query);
		if ($count==0){
			$output='There was no search results. ';
		}else{
			while ($row=mysqli_fetch_array($query)){
				$fname=$row['firstname'];
				$lname=$row['lastname'];
				$id=$row['id'];
				$output .='<div> '. $fname. ' '.$lname. '</div>';
			}
		}
	}
	echo ($output);
?>