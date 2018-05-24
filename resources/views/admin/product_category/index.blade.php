@extends('admin.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="text-right">
            <button type="button" class="btn btn-primary" onclick="location='{{route('admin.product-categories.create')}}'"
                    title="create new category"><i
                        class="fa fa-plus"></i>
            </button>
            <button type="button" class="btn btn-primary" onclick="location='{{ \URL::previous() }}'" title="back"><i
                        class="fa fa-mail-reply"></i>
            </button>
        </div>
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                @if(count($categories)>0)
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Category name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                @endif
                                <tbody>
                                @forelse($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->description->title or ''}}</td>
                                        <td>{{$category->created_at or ''}}</td>
                                        <td>{{$category->updated_at or ''}}</td>
                                        <td class="text-left">
                                            @if(\App\Helpers\Access::hasRouteAccess('admin.category.view.show'))
                                                <button type="button" class="btn btn-primary"
                                                        onclick="location='{{route('admin.product-categories.show', ['category' => $category->id])}}'">
                                                    <i class="fa fa-eye"></i></button>
                                            @endif
                                            @if(\App\Helpers\Access::hasRouteAccess('admin.product-categories.edit'))
                                                <button type="button" class="btn btn-success"
                                                        onclick="location='{{route('admin.product-categories.edit', ['category' => $category->id])}}'">
                                                    <i class="fa fa-pencil"></i></button>
                                            @endif
                                            @if(\App\Helpers\Access::hasRouteAccess('admin.product-categories.destroy'))
                                                <button type="button" class="btn btn-danger item_destroy"
                                                        data-url="{{ route('admin.product-categories.destroy', ['id' => $category->id]) }}">
                                                    <i class="fa fa-trash"></i></button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Categories</td>
                                    </tr>
                                @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/admin/actions.js')}}"></script>
@endsection