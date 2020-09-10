
<div class="container">

        <h1>Add Employee </h1>
            <form method="POST", action="/employees"> 
                @csrf
                <table>
                    <tr>
                        <td> Employee name <td>
                        <td> <input type="text" name="emp_name" value="{{old('emp_name')}}"> </td>
                        <td > <p class="help is-danger"> {{$errors->first('emp_name')}}  </p> <td>
                    </tr>
                    <tr>
                        <td> Email <td>
                        <td> <input type="text" name="email" value="{{old('email')}}"> </td>
                        <td>  <p class="help is-danger"> {{$errors->first('email')}} </p> <td>
                    </tr>
                    <tr>
                        <td> Bio <td>
                        <td> <input type="text" name="bio" value="{{old('email')}}" > </td>
                    </tr>
                    <tr>
                        <td> Salary <td>
                        <td> <input type="text" name="salary" value="{{old('salary')}}" > </td>
                        <td>  <p class="help is-danger"> {{$errors->first('salary')}} </p> <td>

                    </tr>
                    <tr>
                        <td> 
                            <button type="submit" class="btn btn-success" >Submit Emp </button>
                        </td>
                    </tr>
                <table>
                @csrf
            </form>
    </div>

