@extends('admin.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="text-right">
            <button type="button" class="btn btn-primary" onclick="location='{{route('admin.news.create')}}'" title="create new category"><i
                        class="fa fa-plus"></i></button>
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
                                @if(count($articles)>0)
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @endif
                                <tbody>
                                @forelse($articles as $article)
                                    <tr>
                                        <td>{{$article->id}}</td>
                                        <td>{{$article->title or ''}}</td>
                                        <td>{{$article->created_at or ''}}</td>
                                        <td>{{$article->updated_at or ''}}</td>
                                        <td class="text-left">
                                            @if(\App\Helpers\Access::hasRouteAccess('admin.news.show'))
                                                <button type="button" class="btn btn-primary" onclick="location='{{route('admin.news.show', ['article' => $article->id])}}'"><i class="fa fa-eye"></i></button>
                                            @endif
                                            @if(\App\Helpers\Access::hasRouteAccess('admin.news.edit'))
                                                <button type="button" class="btn btn-success" onclick="location='{{route('admin.news.edit', ['article' => $article->id])}}'"><i class="fa fa-pencil"></i></button>
                                            @endif
                                            @if(\App\Helpers\Access::hasRouteAccess('admin.news.destroy'))
                                                <button type="button" class="btn btn-danger item_destroy" data-url="{{ route('admin.news.destroy', ['id' => $article->id]) }}"><i class="fa fa-trash"></i></button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Articles</td>
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