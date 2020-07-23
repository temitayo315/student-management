@extends('inc.master')
@section('edit')
    <div class="row" style="margin-top: 30px">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h2 style="color: #ff6600; text-align: center;">Edit Student Data</h2><br><br>
        <div class="form">
            <form class="form-horizontal" role="form" method="post" action="/update">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="firstname">Matric No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Request::old('matric')?: $edit->matric}}" name="matric">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="firstname">First Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Request::old('firstname')?: $edit->firstname}}" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Request::old('lastname')?: $edit->lastname}}" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="gender">Gender:</label>
                    <div class="col-sm-10">
                       Male <input type="radio" value="{{Request::old('gender')?: $edit->gender}}" name="gender">&nbsp;&nbsp;&nbsp;
                       Female <input type="radio" value="{{Request::old('gender')?: $edit->gender}}" name="gender">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Department:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{Request::old('department')?: $edit->department}}" name="department">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-lg btn_signUp"> Submit Record</button>
                    </div>
                </div>
            </form>
        </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
@endsection