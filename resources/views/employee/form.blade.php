{!! Form::open(array('action' => 'route('employees.store')')) !!}
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
    {!! Form::close() !!}
       