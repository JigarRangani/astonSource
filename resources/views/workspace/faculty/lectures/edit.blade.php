@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Hod/Subjects/Create
@stop

@section('page-heading')
    <i class="fa fa-lg fa-television"> </i> Lectures
@stop

@section('page-heading-small')
    Existing one
@stop

@section('panel-heading')
    Edit you lecture
@stop()
@section('page-buttons')

    <a href="{{route('lectures.index')}}" class="btn btn-default">Back</a>
@stop

@section('panel-body')
    <div class="row panel-body">

            <form action="{{route('lectures.update',['id'=>$lecture->id])}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="col-md-3">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name"  class="control-label">Title</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text"  value="{{$lecture->title}}" name="title" class="form-control">
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name" class="control-label">Subject</label>
                        </div>
                        <div class="col-md-10">
                            <select name="subject_id"   class="form-control">
                                @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}" @if($lecture->subject_id == $subject->id)
                                    Selected @endif>{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label">Informaion</label>
                        </div>
                        <div class="col-md-10">
                            <textarea name="info" id="" cols="30" rows="10" class="form-control">{{$lecture->info}}</textarea>
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="lecture" id="" cols="30" rows="200"
                                      class="form-control aston-summernote">{{$lecture->lecture}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Save"
                                   class="btn btn-sm btn-success pull-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('page-js')
    <script src="{{asset('core/vue/all.js')}}"></script>
@stop