<DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
       div.a{
            text-align: center;
            color: #233455;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            color: #233554;
            margin-left: auto;
            margin-right: auto;
            font-size:18px;
}

        td, th {
            border: 1px solid #233554;
            text-align: left;
            padding: 4px;
        }

        td:nth-child(1) {
            text-align: center;
        }

        tr:nth-child(even) {
             background-color: #233554;
            color: white; 
        }

        th{
             text-align: center;
        }

      
    </style>
</head>
 <body>
        <div class="container">
                <div class="a" >
                    <h3>Save new user</h3>
                </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-top:20px">
                        <form action="save" method="post"></form>
                            <table>
                                <th>EmpID</th>
                                <th>Name</th>
                                <th>Salary</th>
                                <th>Email</th>
                                <th>MobileNo</th>
                                <th>Address</th>
                                <th>EmpType</th>
                                <th>Action</th>
                                <tbody>
                                    @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$employee->EmpID}}</td>
                                        <td>{{$employee->name}}</td>
                                        <td>{{$employee->salary}}</td>
                                        <td>{{$employee->email}}</td>
                                        <td>{{$employee->mobileNo}}</td>
                                        <td>{{$employee->address}}</td>
                                        <td>{{$employee->EmpType}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="" class="btn btn-danger">Delete</a>
                                                <a href="" class="btn btn-primary">Update</a>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </form>
                        </div>
                    </div>
        </div>        
                  
 </body>
 </html>