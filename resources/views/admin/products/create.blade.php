@extends('admin.layouts.app')

@section('content')
    <form action="{{route('admin.products.store')}}" method="post">
        <div class="col-lg-12">
            <div class="text-right">
                <button type="button" class="btn btn-primary" onclick="location='{{ \URL::previous() }}'" title="back"><i
                            class="fa fa-mail-reply"></i>
                </button>
            </div>
            {{csrf_field()}}
            @include('admin.products.partials.form')
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{asset('js/admin/actions.js')}}"></script>
    <script src="{{asset('js/admin/products/product-images.js')}}">
@endsection