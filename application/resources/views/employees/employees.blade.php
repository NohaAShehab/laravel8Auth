
@extends('employees.emplayout')

@section('content2')
<div class="container">
   

    <h1>Employees list </h1>
    
    <table class="table" >
        <tr> 
            <th> Name </th> 
            <th> Email </th>
            <th> Bio </th>
            <th> salary </th>
            <th> Show </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>
            @foreach($employees as $employee)
                <tr>
                    <td> {{$employee->emp_name}} </td>
                    <td> {{$employee->email}} </td>
                    <td> {{$employee->bio}} </td>
                    <td> {{$employee->salary}} </td>
                    <td>
                        <a href="/employees/{{$employee->id}}" 
                            class="btn btn-primary">show</a>
                    </td>
                    <td>
                        <a href="/employees/{{$employee->id}}/edit" 
                            class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="/employees/{{$employee->id}}/delete"> 
                            @csrf
                            @method("delete")
                            <button type="submit"
                                class="btn btn-danger"> Delete</button>
                        </form>
                    </td>

        
                </tr>    
            @endforeach
    </table>

</div>
@endsection