<!DOCTYPE html>
<html>
<head>
	<title>USER | PORTOFOLIO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 {{-- link icon --}}
  <link rel="icon" type="image/svg" href="font-sans-serif.svg">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Daftar User</h4>
		
	</center>
 
	<table class='table table-bordered' align="center" style="width: 95%" >
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($users as $u)
			<tr>
			    @if ($u->level == 'user')
				<td>{{ $i++ }}</td>
				<td>{{$u->name}}</td>
				<td>{{$u->username}}</td>
				<td>{{$u->email}}</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
 <script type="text/javascript">
    window.print();
</script>
</body>
</html>