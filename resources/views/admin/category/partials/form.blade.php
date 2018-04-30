<div class="card">
    <div class="card-header"><strong>Category</strong>
        <small> Form</small>
    </div>
    <div class="card-body card-block">
        <div class="form-group">
            <label for="company" class=" form-control-label">Title</label>
            <input type="text"  name="name" placeholder="Enter article title" value="{{$category->name or ''}}" class="form-control">
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
</div>