
@extends('employees.emplayout')

@section('content2')
<div class="container">

  <h1>Edit Employee </h1>
    <form method="Put", action="/employees/{{$employee->id}}"> 
        @csrf
        @method('PUT')
        
        <table>
            <tr>
                <td> Employee name </td>
                <td> <input type="text" name="emp_name" value="{{$employee->emp_name}}"> </td>
                <td > <p class="help is-danger"> {{$errors->first('emp_name')}}  </p> <td>

            </tr>
            <tr>
                <td> Email </td>
                <td> <input type="text" name="email" value="{{$employee->email}}"> </td>
                <td > <p class="help is-danger"> {{$errors->first('email')}}  </p> <td>

            </tr>
            <tr>
                <td> Bio </td>
                <td> <input type="text" name="bio" value="{{$employee->bio}}"> </td>
            </tr>
            <tr>
                <td> salary </td>
                <td> <input type="text" name="bio" value="{{$employee->salary}}"> </td>
                <td > <p class="help is-danger"> {{$errors->first('salary')}}  </p> <td>

            </tr>
            <tr>
                <td> 
                    <a href="{{ URL::previous()}}" class="btn btn-primary">Back</a>
                    <button type="submit"  class="btn btn-success" > Update</button>
                    
                </td>
            </tr>
        <table>
       
    </form>
</div>

@endsection
