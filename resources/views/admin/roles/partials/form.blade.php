<div class="card">
    <div class="card-header"><strong>Roles</strong>
        <small> Form</small>
    </div>
    <div class="card-body">
        <div class="default-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Fields</a>
                </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="card-block">
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Role name</label>
                            <input type="text"  name="name" placeholder="Enter article title" value="{{$role->name or ''}}" class="form-control {{ !empty($errors->password) ? 'is-invalid' : '' }}">
                            <div class="text-danger">{{ !empty($errors->name) ? $errors->name[0] : ''}}</div>
                        </div>
                        @include('admin.partials.rules')
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
</div>