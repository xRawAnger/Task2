<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>name</th>
			<th>lastname</th>
			<th>address</th>
			<th>biography</th>
			<th>date of birth</th>
		</tr>


		<tr>
			@foreach ($newdata as $data)
				<td>{{ $data->name }}</td>
				<td>{{ $data->lastname }}</td>
				<td>{{ $data->address }}</td>
				<td>{{ $data->biography }}</td>
				<td>{{ $data->date }}</td>
			@endforeach
		</tr>
	</table>
</body>
</html>