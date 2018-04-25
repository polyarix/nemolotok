<div class="card">
    <div class="card-header"><strong>User</strong>
        <small> Form</small>
    </div>

    <div class="card-body card-block">

        <div class="form-group">
            <label for="company" class=" form-control-label">Email</label>
            <input type="email"  name="email" placeholder="user email" value="{{ $user->name or ''}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="company" class=" form-control-label">Name</label>
            <input type="text"  name="name" placeholder="user name" value="{{ $user->name or ''}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="company" class=" form-control-label">Password</label>
            <input type="password"  name="password" placeholder="password" value="" class="form-control">
        </div>

        <div class="form-group">
            <label for="company" class=" form-control-label">Confirm password</label>
            <input type="password"  name="password_confirmation" placeholder="confirm password" value="" class="form-control">
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
</div>