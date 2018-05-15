<div class="card">
    <div class="card-header"><strong>User</strong>
        <small> Form</small>
    </div>

    <div class="card-body card-block">
        <div class="form-group">
            <label for="company" class=" form-control-label">Email</label>
            <input type="email"  name="email" placeholder="user email" value="{{ $user->email or ''}}" class="form-control {{ !empty($errors->email) ? 'is-invalid' : '' }}">
            <div class="text-danger">{{ !empty($errors->email) ? $errors->email[0] : ''}}</div>
        </div>
        <div class="form-group">
            <label for="company" class=" form-control-label">Name</label>
            <input type="text"  name="name" placeholder="user name" value="{{ $user->name or ''}}" class="form-control {{ !empty($errors->name) ? 'is-invalid' : '' }}">
            <div class="text-danger">{{ !empty($errors->name) ? $errors->name[0] : ''}}</div>
        </div>
        <div class="form-group">
            <label for="company" class=" form-control-label">Password</label>
            <input type="password"  name="password" placeholder="password" value="" class="form-control {{ !empty($errors->password) ? 'is-invalid' : '' }}">
            <div class="text-danger">{{ !empty($errors->password) ? $errors->password[0] : ''}}</div>
        </div>
        <div class="form-group">
            <label for="company" class=" form-control-label">Confirm password</label>
            <input type="password"  name="password_confirmation" placeholder="confirm password" value="" class="form-control">
        </div>
        @include('admin.users.partials.roles')
        <div class="form-group">
            <label for="file-input" class=" form-control-label">Avatar</label>
            <input type="file"  name="file[]" placeholder="avatar" multiple class="form-control {{ !empty($errors->file) ? 'is-invalid' : '' }}">
            <div class="text-danger">{{ !empty($errors->file) ? $errors->file[0] : ''}}</div>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
</div>