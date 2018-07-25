@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Task
                </div>

                <div class="card-body">
                    <form action="{{ url('/task/new') }}" method="post">
                        {{csrf_field()}}
                        Title : <input type="text" name="title" required>
                        <br><br>
                        <button class="btn btn-success" type="submit"> Add </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
