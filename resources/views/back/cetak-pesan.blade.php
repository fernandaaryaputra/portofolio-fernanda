<!DOCTYPE html>
<html>
<head>
	<title>DATA PESAN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Daftar Pesan</h4>
		
	</center>
 
	<table class='table table-bordered' align="center" style="width: 95%" >
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>FROM</th>
				<th>INSTAGRAM</th>
				<th>PESAN</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($tamus as $data)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $data->name }}</td>
                <td>{{ $data->from }}</td>
                <td>{{ $data->instagram }}</td>
                <td>{{ $data->pesan }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 <script type="text/javascript">
    window.print();
</script>
</body>
</html>