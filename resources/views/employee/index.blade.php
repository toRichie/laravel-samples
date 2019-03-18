@extends('layout')
	@section('content')
		<style>
			.btn-link{
				border:none;
				outline:none;
				background:none;
				cursor:pointer;
				color:red;
				padding:0;
				text-decoration:underline;
				font-family:inherit;
				font-size:inherit;
			}
		</style>
	<!-- index content -->
    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Name</th>
                        <th>Email</th>
						<th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
				@foreach ($employees as $key => $value)
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="{{$key}}">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
						<td>{{ $value->address}}</td>
                        <td>{{ $value->phone}}</td>
                        <td>
							<a href="{{route('employees.edit',$value->id)}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<form action="{{ route('employees.destroy', $value->id)}}" method="post">
								@csrf
								@method('DELETE')
								<button type="submit"  onclick="return confirm('Are you sure?')" class="btn-link"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
							</form>
                        </td>
                    </tr>
				@endforeach
				</tbody>
            </table>
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form  action="{{ route('employees.store')}}" method='post'>
				@csrf 
					<div class="modal-header">						
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name='name' required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name='email' required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name='address' required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" name='phone' required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	@endsection
