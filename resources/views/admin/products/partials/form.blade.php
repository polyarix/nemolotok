<div class="card">
    <div class="default-tab">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">Общее</a>
                <a class="nav-item nav-link" id="nav-data-tab" data-toggle="tab" href="#nav-data" role="tab" aria-controls="nav-data" aria-selected="false">Данные</a>
                <a class="nav-item nav-link" id="nav-relations-tab" data-toggle="tab" href="#nav-relations" aria-controls="nav-relations" aria-selected="false">Связи</a>
                <a class="nav-item nav-link" id="nav-images-tab" data-toggle="tab" href="#nav-images" aria-controls="nav-images" aria-selected="false">Изображения</a>
            </div>
        </nav>
        <div class="tab-content pl-3 pt-2 card-body" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                <div class="form-group">
                    <label for="name" class=" form-control-label">Название товара</label>
                    <input type="text" id="name" name="name" value="{{$product->description->name or ""}}" class="form-control {{ !empty($errors->name) ? 'is-invalid' : '' }}">

                    <div class="text-danger">{{ !empty($errors->name) ? $errors->name[0] : ''}}</div>
                </div>
                <div class="form-group">
                    <label for="description" class=" form-control-label">Описание</label>
                    <textarea id="description" class="form-control ckeditor {{ !empty($errors->description) ? 'is-invalid' : '' }}" name="description">{!! $product->description->description or "" !!}</textarea>
                    <div class="text-danger">{{ !empty($errors->description) ? $errors->description[0] : ''}}</div>
                </div>
                @include('admin.partials.form.meta_data', ['item' => $product])
            </div>
            <div class="tab-pane fade" id="nav-data" role="tabpanel" aria-labelledby="nav-data-tab">

                <div class="form-group">
                    <label for="article" class=" form-control-label">Артикул</label>
                    <input type="text" id="sku" name="sku" value="{{$product->sku or ""}}" class="form-control {{ !empty($errors->sku) ? 'is-invalid' : '' }}">
                    <div class="text-danger">{{ !empty($errors->sku) ? $errors->sku[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="enabled" class=" form-control-label">Отображать на сайте</label>
                    <select name="enabled" id="enabled" class="form-control">
                        <option value="0">Нет</option>
                        <option value="1">Да</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sorting" class=" form-control-label {{ !empty($errors->sorting) ? 'is-invalid' : '' }}">Сортировка</label>
                    <input type="text" id="sorting" name="sorting" value="{{$product->sorting or ""}}" class="form-control">
                    <div class="text-danger">{{ !empty($errors->sorting) ? $errors->sorting[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="price" class=" form-control-label {{ !empty($errors->price) ? 'is-invalid' : '' }}">Цена</label>
                    <input type="text" id="price" name="price" value="{{$product->price or ""}}" class="form-control">
                    <div class="text-danger">{{ !empty($errors->price) ? $errors->price[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="amount" class=" form-control-label {{ !empty($errors->amount) ? 'is-invalid' : '' }}">Количество</label>
                    <input type="text" id="amount" name="amount" value="{{$product->amount or ""}}" class="form-control">
                    <div class="text-danger">{{ !empty($errors->amount) ? $errors->amount[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="unit" class=" form-control-label {{ !empty($errors->unit) ? 'is-invalid' : '' }}">Единицы измерения</label>
                    <input type="text" id="unit" name="unit" value="{{$product->unit or ""}}" class="form-control">
                    <div class="text-danger">{{ !empty($errors->unit) ? $errors->unit[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="discount" class=" form-control-label {{ !empty($errors->discount) ? 'is-invalid' : '' }}">Скидка</label>
                    <input type="text" id="discount" name="discount" value="{{$product->discount or ""}}" class="form-control">
                    <div class="text-danger">{{ !empty($errors->discount) ? $errors->discount[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="shippingprice" class=" form-control-label {{ !empty($errors->shippingprice) ? 'is-invalid' : '' }}">Цена доставки</label>
                    <input type="text" id="shippingprice" name="shippingprice" value="{{$product->shippingprice or ""}}" class="form-control">
                    <div class="text-danger">{{ !empty($errors->shippingprice) ? $errors->shippingprice[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="preorder" class=" form-control-label {{ !empty($errors->preorder) ? 'is-invalid' : '' }}">Цена доставки</label>
                    <input type="text" id="preorder" name="preorder" value="{{$product->preorder or ""}}" class="form-control">
                    <div class="text-danger">{{ !empty($errors->preorder) ? $errors->preorder[0] : ''}}</div>
                </div>

                <div class="form-group">
                    <label for="status" class=" form-control-label">Отображать на сайте</label>
                    <select name="status" id="status" class="form-control">
                        <option value="0">нет в наличии</option>
                        <option value="1">в наличии</option>
                        <option value="2">ожидание</option>
                    </select>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-relations" role="tabpanel" aria-labelledby="nav-relations-tab">
                <div class="form-group">
                    <label for="multiple-select" class=" form-control-label">Categories</label>
                    <select name="categories[]" id="multiple-select" multiple="multiple" class="form-control select2">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                    @if(!empty($product->categories))
                                    @foreach($product->categories as $product_category)
                                    @if($product_category->id == $category->id)
                                    selected
                                    @endif
                                    @endforeach
                                    @endif
                            >{{$category->description->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-images-tab">
                <div class="content">

                </div>
                {{--<section class="image-section">--}}
                    {{--<div class="form-group col-lg-12">--}}
                        {{--<div class="text-left col-lg-3">--}}
                            {{--<img class="thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Eomys_BW.jpg/400px-Eomys_BW.jpg">--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-8">--}}
                                {{--<table class="table table-striped table-bordered">--}}
                                    {{--<tr>--}}
                                        {{--<th>Имя параметра: </th>--}}
                                        {{--<td> Значение</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<th>Имя параметра: </th>--}}
                                        {{--<td> Значение</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<th>Имя параметра: </th>--}}
                                        {{--<td> Значение</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<th>Имя параметра: </th>--}}
                                        {{--<td> Значение</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<th>Имя параметра: </th>--}}
                                        {{--<td> Значение</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<th>Имя параметра: </th>--}}
                                        {{--<td> Значение</td>--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                        {{--</div>--}}
                        {{--<div class="text-right col-lg-1">--}}
                            {{--<button class="btn btn-outline-danger btn-lg"><i class="fa fa-trash-o"></i></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="file" name="images[image1]">--}}
                    {{--</div>--}}
                {{--</section>--}}
                <button type="button" id="new-image" class="btn btn-outline-primary btn-lg btn-block">Добавить новое изображение</button>
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Отправить
    </button>
</div>