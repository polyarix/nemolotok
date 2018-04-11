@extends('admin.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="text-right">
            <button type="button" class="btn btn-primary" onclick="location='{{route('admin.category.create')}}'"><i
                        class="fa fa-plus"></i></button>
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
                                        <td>{{$category->name or ''}}</td>
                                        <td>{{$category->created_at or ''}}</td>
                                        <td>{{$category->updated_at or ''}}</td>
                                        <td class="text-left">
                                            <button type="button" class="btn btn-primary" onclick="location='{{route('admin.category.show', ['category' => $category])}}'"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-success" onclick="location='{{route('admin.category.edit', ['category' => $category])}}'"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-danger item_destroy" data-url="{{ route('admin.category.destroy', ['id' => $category->id]) }}"><i class="fa fa-trash"></i></button>
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