@extends('admin.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="text-right">
            <button type="button" class="btn btn-primary" onclick="location='{{ \URL::previous() }}'" title="back"><i
                        class="fa fa-mail-reply"></i></button>
        </div>
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <th>User name</th>
                                    <td>{{ $user->name or '' }}</td>
                                </tr>
                                <tr>
                                    <th>User email</th>
                                    <td>{!! $user->email or '' !!}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{ $user->role->name or '' }}</td>
                                </tr>
                                <tr>
                                    <th>Created at</th>
                                    <td>{{$user->created_at or ''}}</td>
                                </tr>
                                <tr>
                                    <th>Updated at</th>
                                    <td>{{$user->updated_at or ''}}</td>
                                </tr>
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