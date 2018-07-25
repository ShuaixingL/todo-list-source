@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Our Todo Application
                    <small> (<a href="{{ url('/task/new') }}"> New Task </a>) </small>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>UserID</th>
                            <th>Title</th>
                            <th>Progress</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($tasks as $task)
                          <tr>
                            <td>{{$task['id']}}</td>
                            <td>{{$task['user_id']}}</td>
                            <td>{{$task['title']}}</td>
                            <td>
                                <form action="{{ url('/task/edit') }}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$task['id']}}">
                                <input type="checkbox" name="task" onclick="this.form.submit()" value="{{$task['id']}}" {{ $task['progress']?'checked':'' }}>
                                </form>
                            </td>
                            <td>
                                <small>(<a href="{{ url('/task/delete/'.$task['id']) }}">x</a>)</small>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
