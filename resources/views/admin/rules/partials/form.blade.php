<div class="card">
    <div class="card-header"><strong>Roles</strong>
        <small> Form</small>
    </div>
    <div class="card-body">
        <div class="default-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Fields</a>
                    {{--<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Permissions</a>--}}
                </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="card-block">

                        <div class="form-group">
                            <label for="company" class=" form-control-label">Rule name</label>
                            <input type="text"  name="name" placeholder="Rule name" value="{{$rule->name or ''}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="company" class=" form-control-label">rule description</label>
                            <input type="text"  name="description" placeholder="Rule description" value="{{$rule->name or ''}}" class="form-control">
                        </div>

                        <div class="tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            @include('admin.partials.permissions')
                        </div>

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