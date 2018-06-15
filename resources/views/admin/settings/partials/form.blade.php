<div class="card">
    <div class="default-tab">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">Изображения</a>
                {{--<a class="nav-item nav-link" id="nav-data-tab" data-toggle="tab" href="#nav-data" role="tab" aria-controls="nav-data" aria-selected="false">Данные</a>--}}
                {{--<a class="nav-item nav-link" id="nav-relations-tab" data-toggle="tab" href="#nav-relations" aria-controls="nav-relations" aria-selected="false">Связи</a>--}}
            </div>
        </nav>
        <div class="tab-content pl-3 pt-2 card-body" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                <h3 class="text-center">Товары</h3>
                <section class="product-image-settings">
                    <h6 class="text-right">Основное изображение</h6>

                    <div class="form-group">
                        <label for="company" class=" form-control-label">Высота</label>
                        <input type="text"  name="settings[product_image_big_height]" placeholder="Высота" value="{{$product_image_big_height or ""}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="company" class=" form-control-label">Ширина</label>
                        <input type="text"  name="settings[product_image_big_width]" placeholder="Ширина" value="{{$product_image_big_width or ""}}" class="form-control">
                    </div>

                    <h6 class="text-right">Изображение в списке товаров</h6>

                    <div class="form-group">
                        <label for="company" class=" form-control-label">Высота</label>
                        <input type="text"  name="settings[product_image_list_height]" placeholder="Высота" value="{{$product_image_list_height or ""}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Ширина</label>
                        <input type="text"  name="settings[product_image_list_width]" placeholder="Ширина" value="{{$product_image_list_width or ""}}" class="form-control">
                    </div>
                </section>
            </div>

            {{--<div class="tab-pane fade" id="nav-data" role="tabpanel" aria-labelledby="nav-data-tab">--}}
            {{--</div>--}}

            {{--<div class="tab-pane fade" id="nav-relations" role="tabpanel" aria-labelledby="nav-relations-tab">--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Отправить
    </button>
</div>