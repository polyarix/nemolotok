@extends('admin.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="text-right">
            <button type="button" class="btn btn-primary" onclick="location='{{route('admin.users.create')}}'"
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
                                @if(count($users)>0)
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>User name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                @endif
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name or ''}}</td>
                                        <td>{{$user->created_at or ''}}</td>
                                        <td>{{$user->updated_at or ''}}</td>
                                        <td class="text-left">
                                            @if(\App\Helpers\Access::hasRouteAccess('admin.users.show'))
                                                <button type="button" class="btn btn-primary"
                                                        onclick="location='{{route('admin.users.show', ['user' => $user->id])}}'">
                                                    <i class="fa fa-eye"></i></button>
                                            @endif
                                            @if(\App\Helpers\Access::hasRouteAccess('admin.users.edit'))
                                                <button type="button" class="btn btn-success"
                                                        onclick="location='{{route('admin.users.edit', ['user' => $user->id])}}'">
                                                    <i class="fa fa-pencil"></i></button>
                                            @endif
                                            @if(\App\Helpers\Access::hasRouteAccess('admin.users.destroy'))
                                                <button type="button" class="btn btn-danger item_destroy"
                                                        data-url="{{ route('admin.users.destroy', ['id' => $user->id]) }}">
                                                    <i class="fa fa-trash"></i></button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No Users</td>
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