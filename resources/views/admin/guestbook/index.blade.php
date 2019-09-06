<html>
<head>
	<title>List Admin Guestbook </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="padding: 50px">
			<h2>List Guestbook</h2>
			@if (\Session::has('success'))
			    <div class="alert alert-success">
					{!! \Session::get('success') !!}
			    </div>
			@endif
			@if (\Session::has('danger'))
			    <div class="alert alert-danger">
					{!! \Session::get('danger') !!}
			    </div>
			@endif
			<a href="{{url('admin/guestbook/create')}}" class="btn btn-info">Create</a>
			<br><br>
			<table class="table table-hover table-stripped">
				<thead>
					<th>ID</th>
					<th>Nama</th>
					<th>No Telp</th>
					<th>Instansi</th>
					<th>Alamat</th>
					<th>Action</th>
				</thead>
				<tbody>
					@foreach($guestbooks as $i => $guestbook)
					<tr>
						<td> {{$i+1}} </td>
						<td> {{$guestbook->nama}} </td>
						<td> {{$guestbook->no_telp}} </td>
						<td> {{$guestbook->instansi}} </td>
						<td> {{$guestbook->alamat}} </td>
						<td>
							<a href="{{url('admin/guestbook/edit/'.$guestbook->id)}}" class="btn btn-info">Edit</a>
							<a href="{{url('admin/guestbook/delete/'.$guestbook->id)}}" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>