<h1> Employee INFo </h1>
        <table class="table">
            <tr>
                <td> Employee name </td>
                <td> {{$employee->emp_name}}</td>
            </tr>
            <tr>
                <td> Email </td>
                <td> {{$employee->email}}</td>
            </tr>
            <tr>
                <td> Bio </td>
                <td> {{$employee->bio}}</td>

            </tr>
            <tr>
                <td> salary </td>
                <td> {{$employee->salary}}</td>

            </tr>
            <tr>
                <td>  
                    <a href="{{ URL::previous()}}" class="btn btn-primary">Back</a>
                </td>
            </tr>
        <table>