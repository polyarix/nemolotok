<div class="card">
    <div class="card-header"><strong>Атрибут</strong>
    </div>
    <div class="card-body card-block">
        <div class="form-group">
            <label for="name" class=" form-control-label">Имя атрибута</label>
            <input type="text"  name="name" placeholder="Имя атрибута" value="{{$attribute->name or ''}}" class="form-control">
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Сохранить
    </button>
</div>