{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ユーザ一覧</h1>
@stop

@section('content')
    <table class="table" id="table">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">CreatedAt</th>
                <th class="text-center">UpdatedAt</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $item)
            <tr class="item{{$item->id}}">
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td><button class="edit-modal btn btn-info"
                        data-info="{{$item->id}},{{$item->name}},{{$item->email}},{{$item->created_at}},{{$item->updated_at}}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="delete-modal btn btn-danger"
                        data-info="{{$item->id}},{{$item->name}},{{$item->email}},{{$item->created_at}},{{$item->updated_at}}">
                        <i class="fas fa-trash-alt"></i> Delete
                    </button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    $(document).ready(function() {
        $('#table').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        });
    } );
    </script>
@stop
