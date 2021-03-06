<div class="card"
@if(!empty($product))
    data-image-remove-url="{{route('admin.product.image-delete', ['id' => $product->id])}}"
@endif
@if(!empty($attributes))
    data-attributes="{{$attributes}}"
@endif
>
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
                <a class="nav-item nav-link" id="nav-attributes-tab" data-toggle="tab" href="#nav-attributes"
                   aria-controls="nav-images" aria-selected="false">Атрибуты</a>
            </div>
        </nav>
        <div class="tab-content pl-3 pt-2 card-body" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                <div class="form-group">
                    <label for="name" class=" form-control-label">Название товара</label>
                    <input type="text" id="name" name="name" value="{{$product->description->name or ""}}"
                           class="form-control {{ !empty($errors->name) ? 'is-invalid' : '' }}">

                    <div class="text-danger">{{ !empty($errors->name) ? $errors->name[0] : ''}}</div>
                </div>
                <div class="form-group">
                    <label for="description" class=" form-control-label">Описание</label>
                    <textarea id="description"
                              class="form-control ckeditor {{ !empty($errors->description) ? 'is-invalid' : '' }}"
                              name="description">{!! $product->description->description or "" !!}</textarea>
                    <div class="text-danger">{{ !empty($errors->description) ? $errors->description[0] : ''}}</div>
                </div>
                @include('admin.partials.form.meta_data', ['item' => $product])
            </div>
            <div class="tab-pane fade" id="nav-data" role="tabpanel" aria-labelledby="nav-data-tab">
                <div class="form-group">
                    <label for="article" class=" form-control-label">Артикул</label>
                    <input type="text" id="sku" name="sku" value="{{$product->sku or ""}}"
                           class="form-control {{ !empty($errors->sku) ? 'is-invalid' : '' }}">
                    <div class="text-danger">{{ !empty($errors->sku) ? $errors->sku[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="enabled" class=" form-control-label">Отображать на сайте</label>
                    <select name="enabled" id="enabled" class="form-control">
                        <option value="0" @if(!empty($product) && $product->enabled == 0) selected @endif>Нет</option>
                        <option value="1" @if(!empty($product) && $product->enabled == 1) selected @endif>Да</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sorting" class=" form-control-label {{ !empty($errors->sorting) ? 'is-invalid' : '' }}">Сортировка</label>
                    <input type="text" id="sorting" name="sorting" value="{{$product->sorting or ""}}"
                           class="form-control">
                    <div class="text-danger">{{ !empty($errors->sorting) ? $errors->sorting[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="price"
                           class=" form-control-label {{ !empty($errors->price) ? 'is-invalid' : '' }}">Цена</label>
                    <input type="text" id="price" name="price" value="{{$product->price or ""}}" class="form-control">
                    <div class="text-danger">{{ !empty($errors->price) ? $errors->price[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="amount" class=" form-control-label {{ !empty($errors->amount) ? 'is-invalid' : '' }}">Количество</label>
                    <input type="text" id="amount" name="amount" value="{{$product->amount or ""}}"
                           class="form-control">
                    <div class="text-danger">{{ !empty($errors->amount) ? $errors->amount[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="unit" class=" form-control-label {{ !empty($errors->unit) ? 'is-invalid' : '' }}">Единицы
                        измерения</label>
                    <input type="text" id="unit" name="unit" value="{{$product->unit or ""}}" class="form-control">
                    <div class="text-danger">{{ !empty($errors->unit) ? $errors->unit[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="discount"
                           class=" form-control-label {{ !empty($errors->discount) ? 'is-invalid' : '' }}">Скидка</label>
                    <input type="text" id="discount" name="discount" value="{{$product->discount or ""}}"
                           class="form-control">
                    <div class="text-danger">{{ !empty($errors->discount) ? $errors->discount[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="shippingprice"
                           class=" form-control-label {{ !empty($errors->shippingprice) ? 'is-invalid' : '' }}">Цена
                        доставки</label>
                    <input type="text" id="shippingprice" name="shippingprice" value="{{$product->shippingprice or ""}}"
                           class="form-control">
                    <div class="text-danger">{{ !empty($errors->shippingprice) ? $errors->shippingprice[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="preorder"
                           class=" form-control-label {{ !empty($errors->preorder) ? 'is-invalid' : '' }}">Цена
                        доставки</label>
                    <input type="text" id="preorder" name="preorder" value="{{$product->preorder or ""}}"
                           class="form-control">
                    <div class="text-danger">{{ !empty($errors->preorder) ? $errors->preorder[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="slug"
                           class=" form-control-label {{ !empty($errors->slug) ? 'is-invalid' : '' }}">Slug</label>
                    <input type="text" id="slug" name="slug" value="{{(!empty($product)) ? $product->slug->first()->slug : ""}}"
                           class="form-control">
                    <div class="text-danger">{{ !empty($errors->slug) ? $errors->slug[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="status" class=" form-control-label">Статус</label>
                    <select name="status" id="status" class="form-control">
                        <option value="0" @if(!empty($product) && $product->status === 0) selected @endif>нет в наличии</option>
                        <option value="1" @if(!empty($product) && $product->status === 1) selected @endif>в наличии</option>
                        <option value="2" @if(!empty($product) && $product->status === 2) selected @endif>ожидание</option>
                    </select>
                </div>

            </div>

            <div class="tab-pane fade" id="nav-relations" role="tabpanel" aria-labelledby="nav-relations-tab">
                @include('admin.partials.form.categories', ['item' => $product, 'categories' => $categories, 'multiple' => true])
            </div>

            <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-images-tab">
                    @include('admin.partials.form.image.image-list', ['item' => $product, 'data_list_type' => 'multiplicity'])
            </div>

            <div class="tab-pane fade" id="nav-attributes" role="tabpanel" aria-labelledby="nav-attributes-tab">
                @include('admin.partials.form.attributes.attributes')
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Отправить
    </button>
</div>