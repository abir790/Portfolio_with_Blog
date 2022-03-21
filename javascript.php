<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1 id="name">Thi s is neader </h1>
	<p id="d">JavaScript can change HTML content.</p>
	<button type="button" onclick='document.getElementById("d").innerHTML = "This is footer"'>try to it!</button>

	<a href="index.php" onclick="return confirm('Are u sure')">delete</a>
	<a href="index.php" onclick="alert('Are u')">delete</a>

<p id="text" style="color: red;">This is test script</p>

<script>
	document.getElementById('text').style.color="black";
</script>


<p id="write"></p>
<script>
	document.getElementById('write').innerHTML="Valus write";
</script>


<script>
	document.write(5+7);
</script>

<button type="button" onclick="document.write(5 + 6)">Try it</button> /* korle all html value delete kore just write tai show korbe*/


</body>
</html>
