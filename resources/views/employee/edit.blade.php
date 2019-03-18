@extends('layout')
@section('content')
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('employees.update', $empdetail->id) }}">
                        @csrf
                        @method('PATCH')
                <div class="modal-header">
                    <h4 class="modal-title">Edit Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value='{{@$empdetail->name}}' class="form-control" name='name' required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value='{{@$empdetail->email}}' class="form-control" name='email' required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control"  name='address' required>{{@$empdetail->address}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" value='{{@$empdetail->phone}}'  class="form-control" name='phone' required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection