<html>
<HEAD>
	<title>KULIAH WEB</title>
<style>
div.container{
	width: 100%;
	border: 2px solid gray;
}
header, footer{
	padding: 1em;
	background-color: pink;
	clear: left;
	text-align: center; 
}
nav{
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1em;
}
nav ul{
	list-style-type: none;
	padding: 0;
}
nav ul a{
	text-decoration: none;
}
article{
	margin-left: 170px;
	border-left: 1px solid gray;
	padding: 1em;
	overflow: hidden;
}
</style>
<script>
	function edit_id(id) {
		if (confirm('sure to edit?')) {
			window.location.href = 'edit.php?edit_id='+id;
	}
	}
	function delete_id(id) {
		if (confirm('sure to delete?')) {
			window.location.href = 'halamanawal.php?delete_id='+id;
		}
	}
	</script>
	
</HEAD>
<body>
@include ('templates.header')
@yield('content')
@include ('templates.footer')
</body>
</html>