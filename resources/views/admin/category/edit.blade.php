@extends('admin.layouts.app')

@section('content')
    <form action="{{route('admin.category.update', ['category' => $category])}}" method="post">
        <div class="col-lg-12">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.category.partials.form')
        </div>
    </form>
@endsection