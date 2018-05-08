
    <div class="form-group">
        <label for="role" class=" form-control-label">Role</label>
        <select name="role_id" id="role" class="form-control">
            <option></option>
            @foreach($roles as $role)
                <option value="{{$role->id}}"
                        @if(!empty($user->role_id))
                        @if($user->role_id == $role->id)
                        selected
                        @endif
                        @endif
                >{{$role->name}}</option>
            @endforeach
        </select>
    </div>
