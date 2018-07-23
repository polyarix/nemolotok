<div class="card" @if(!empty($category))
data-image-remove-url="{{route('admin.product-category.image-delete', ['id'=> $category->id])}}"
        @endif>
    <div class="default-tab">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-general" role="tab"
                   aria-controls="nav-general" aria-selected="true">Общее</a>
                <a class="nav-item nav-link" id="nav-data-tab" data-toggle="tab" href="#nav-data" role="tab"
                   aria-controls="nav-data" aria-selected="false">Данные</a>
                <a class="nav-item nav-link" id="nav-relations-tab" data-toggle="tab" href="#nav-relations"
                   aria-controls="nav-relations" aria-selected="false">Связи</a>
                <a class="nav-item nav-link" id="nav-images-tab" data-toggle="tab" href="#nav-images"
                   aria-controls="nav-images" aria-selected="false">Изображения</a>
            </div>
        </nav>
        <div class="tab-content pl-3 pt-2 card-body" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Имя категории</label>
                    <input type="text" name="name" placeholder="Title" value="{{$category->description->name or ''}}"
                           class="form-control {{ !empty($errors->name) ? 'is-invalid' : '' }}">
                    <div class="text-danger">{{ !empty($errors->name) ? $errors->name[0] : ''}}</div>
                </div>
                @include('admin.partials.form.meta_data', ['item' => $category])
            </div>
            <div class="tab-pane fade" id="nav-data" role="tabpanel" aria-labelledby="nav-data-tab">
                <div class="form-group">
                    <label for="slug"
                           class=" form-control-label">Slug</label>
                    <input type="text" id="slug" name="slug"
                           value="@if(!empty($category)){{$category->slug->first()->slug or ""}}@endif"
                           class="form-control {{ !empty($errors->slug) ? 'is-invalid' : '' }}">
                    <div class="text-danger">{{ !empty($errors->slug) ? $errors->slug[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="enabled" class=" form-control-label">Отображать на сайте</label>
                    <select name="enabled" id="enabled"
                            class="form-control {{ !empty($errors->enabled) ? 'is-invalid' : '' }}">
                        <option value="0" @if(!empty($category) && $category->enabled == 0) selected @endif>Нет</option>
                        <option value="1" @if(!empty($category) && $category->enabled == 1) selected @endif>Да</option>
                        <div class="text-danger">{{ !empty($errors->enabled) ? $errors->enabled[0] : ''}}</div>
                    </select>
                </div>


                <div class="form-group">
                    <label for="is-in-catalog" class=" form-control-label">Отображать в меню каталога</label>
                    <select name="is_in_catalog" id="is-in-catalog"
                            class="form-control {{ !empty($errors->is_in_catalog) ? 'is-invalid' : '' }}">
                        <option value="0" @if(!empty($category) && $category->is_in_catalog == 0) selected @endif>Нет</option>
                        <option value="1" @if(!empty($category) && $category->is_in_catalog == 1) selected @endif>Да</option>
                        <div class="text-danger">{{ !empty($errors->is_in_catalog) ? $errors->is_in_catalog[0] : ''}}</div>
                    </select>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-relations" role="tabpanel" aria-labelledby="nav-relations-tab">
                <div class="form-group">
                    <label for="multiple-select" class=" form-control-label">Родительская категория</label>
                    <div class="card-body">
                        <select name="categories[]" data-placeholder="Choose a Country..."
                                class="form-control {{ !empty($errors->categories) ? 'is-invalid' : '' }}" tabindex="1">
                            <option value=""></option>
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}"
                                        @if(!empty($category->parent))
                                        @foreach($category->parent as $item_category)
                                        @if($category->parent['id'] == $cat->id)
                                        selected
                                        @endif
                                        @endforeach
                                        @endif
                                >{{$cat->description->name}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">{{ !empty($errors->categories) ? $errors->categories[0] : ''}}</div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-images-tab">
                @include('admin.partials.form.image.image-list', ['item' => $category, 'data_list_type' => 'single'])
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
</div>