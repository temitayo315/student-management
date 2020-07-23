@extends('inc.master')
@section('edit')
    <div class="row" style="margin-top: 30px">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h2 style="color: #ff6600; text-align: center;">Update Course</h2><br><br>
        <div class="form">
            <form class="form-horizontal" role="form" method="post" action="{{url('/updateCourse/'.$edit->id)}}">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="firstname">Course Code:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Request::old('code')?: $edit->code}}" name="code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="firstname">Course Title:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Request::old('title')?: $edit->title}}" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lastname">Course Unit:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Request::old('unit')?: $edit->unit}}" name="unit">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Nature:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Request::old('nature')?: $edit->nature}}" name="nature">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-lg btn_signUp"> Update Course</button>
                    </div>
                </div>
            </form>
        </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
@endsection