@extends('workspace.layout.main')

@include('workspace.student.partial.student_menu')

@include('workspace.student.assingments.page_menu')

@section('page-title')
    Assingment Fill | Aston
@stop

@section('page-content')
    <div class="container">
        <div class="row">

            <div class=" col-md-4 card-block">{{$assingment->name}}</div>
            <div class="col-md-4">
                <a href="{{route('workspace.faculty.assingments.questions.index',['id'=>$assingment->id])}}"
                   class="btn btn-sm btn-success">Add new Question</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 card-block">
                "Compete Your Task "
            </div>
        </div>
    </div>
@stop