@extends('inc.master')

@section('studentList')
 <h2 style="color: #ff6600; text-align: center;">List of Registered Student</h2><br><br>
 @include('inc.alert')
<div class="table table-responsive">
    <table class="table table-stripped table-hover">
        <tr>
            <th>s/n</th>
            <th>Matric No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        <?php $counter =1; ?>
        @foreach($student as $students)

        <tr>
            <td>{{$counter++}}</td>
            <td>{{$students->matric}}</td>
            <td>{{$students->firstname}}</td>
            <td>{{$students->lastname}}</td>
            <td>{{$students->gender}}</td>
            <td>{{$students->department}}</td>
            <td><a href="{{url('/edit/'.$students->id)}}" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                <a href="{{url('/delete/'.$students->id)}}" class="btn btn-danger"><i class="fa fa-remove"></i> Remove</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

<h2 style="color: #ff6600; text-align: center;">List of Available Courses</h2><br><br>
 @include('inc.alert')
<div class="table table-responsive">
    <table class="table table-stripped table-hover">
        <tr>
            <th>s/n</th>
            <th>Course Code</th>
            <th>Course Title</th>
            <th>Unit</th>
            <th>Nature</th>
            <th>Action</th>
        </tr>
        <?php $counter =1; ?>
        @foreach($course as $courses)

        <tr>
            <td>{{$counter++}}</td>
            <td>{{$courses->code}}</td>
            <td>{{$courses->title}}</td>
            <td>{{$courses->unit}}</td>
            <td>{{$courses->nature}}</td>
            <td><a href="{{url('/editCourse/'.$courses->id)}}" class="btn btn-success"><i class="fa fa-edit"></i> </a>
                <a href="{{url('/deleteCourse/'.$courses->id)}}" class="btn btn-danger"><i class="fa fa-remove"></i> Remove</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection