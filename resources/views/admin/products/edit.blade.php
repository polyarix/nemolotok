@extends('admin.layouts.app')

@section('content')
    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post">
        <div class="col-lg-12">
            <div class="text-right">
                <button type="button" class="btn btn-primary" onclick="location='{{ \URL::previous() }}'" title="back"><i
                            class="fa fa-mail-reply"></i></button>
            </div>

            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.products.partials.form')
        </div>
    </form>
@endsection