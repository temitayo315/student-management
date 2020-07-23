@extends('inc.master')
@section('content')
    <div class="row" style="margin-top: 30px">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h2 style="color: #ff6600; text-align: center;">Register new course</h2><br><br>
        <div class="form">
            <form class="form-horizontal" role="form" method="post" action="/storeCourse">
                @csrf
                @include('inc.alert')
                <div class="form-group">
                    <label class="control-label col-sm-2" for="firstname">Course Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Course Code" name="code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="firstname">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Course Title" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lastname">Unit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Course Unit" name="unit">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Nature:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Core or elective" name="nature">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-lg btn_signUp"> Register</button>
                    </div>
                </div>
            </form>
        </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
@endsection