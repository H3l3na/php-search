


<!doctype html>
<html>
	<head>
		<title>Search</title>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			function searchq(){
				var searchTxt=$("input[name='search']").val();
				$.post("search.php", {searchVal: searchTxt}, function(output) {
					$("#output").html(output);
				});
			}
		</script>
	</head>
	<body>
		<form action="index.php" method="post">
			<input type="text" name="search" placeholder="Search for members..." onkeydown="searchq()"/>
			<input type="submit" value=">>" />
		</form>
		<div id="output"></div>
	</body>
</html>

























