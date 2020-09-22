<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('posttask') }}" method="POST">
		@csrf
		name
		<input type="text" name="name">
		lastname
		<input type="text" name="lastname">
		address
		<input type="text" name="address" id="address">
		biography
		<textarea type="text" name="biography">
		</textarea>
		date of birth
		<input type="text" name="date">
		<button>submit</button
	</form>
</body>
</html>