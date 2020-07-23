@extends('inc.master')

@section('studentList')
 <h2 style="color: #ff6600; text-align: center;">List of Registered Student</h2><br><br>
 @include('inc.alert')
<div class="table">
    <table class="table table-stripped table-hover">
        <tr>
            <th>s/n</th>
            <th>Matric No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Gender</th>
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
@endsection