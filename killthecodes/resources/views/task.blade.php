<?php
?>
{{--thua ke tu app.blade--}}
@extends('layouts.app');

{{--noi dung trang con--}}
{{--dung app.css--}}
@section('content')

{{--    dinh nghia phan noi dung cua trang task--}}
    <div class="panel-body">
{{--        hirn thi thong bao loi--}}
        @include('errors.503')

{{--        form nhap thong tin task moi--}}
        <form action="{{url('task')}}" method="post" class="form-horizontal">
            {{csrf_field()}}

{{--            ten task--}}
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>
{{--            nut task--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add task
                    </button>
                </div>
            </div>
        </form>

{{--        hien thi noi dung trong database--}}
        @if(count($tasks)>0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Task
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
{{--                        tieu de task--}}
                        <thead>
                            <td>Task</td>
                            <td>&nbsp;</td>
                        </thead>
{{--                        noi dung task--}}
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$task->name}}</div>
                                    </td>
{{--                                    them nut xoa--}}
                                    <td>
                                        <form action="/task/{{$task->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button>X</button>
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
