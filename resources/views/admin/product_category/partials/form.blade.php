<div class="card">
    <div class="card-header"><strong>Category</strong>
        <small> Form</small>
    </div>
    <div class="card-body card-block">
        <div class="form-group">
            <label for="company" class=" form-control-label">Имя категории</label>
            <input type="text"  name="name" placeholder="Title" value="{{$category->description->name or ''}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="description" class=" form-control-label">Описание</label>
            <textarea id="description" class="form-control" name="description">{!! $category->description->description or "" !!}</textarea>
        </div>
        @include('admin.partials.form.meta_data', ['item' => $category])
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
</div>