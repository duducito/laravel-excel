<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>AJAX SIMPLE</title>
</head>
<body>
<button onclick="sendRequest();">
	send Ajax Request
</button>
<h1 id="title"></h1>
<script >
	function sendRequest(){
		var theobject=new XMLHttpRequest();
		theobject.open('GET','backend.php',true);
		theobject.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		theobject.onreadystatechange=function(){
			//console.log(theobject.responseText);
			document.getElementById('title').innerHtml=theobject.responseText;
		}
		theobject.send();

	}
</script>
</body>
</html>