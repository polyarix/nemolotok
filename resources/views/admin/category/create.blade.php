@extends('admin.layouts.app')

@section('content')
    <form action="{{route('admin.category.store')}}" method="post">
        <div class="col-lg-12">
            {{csrf_field()}}
            @include('admin.category.partials.form')
        </div>
    </form>
@endsection