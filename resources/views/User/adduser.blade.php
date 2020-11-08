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
            color:#233455;
        }

        .col-25 {
            float: right;
            width: 25%;
            margin-top: 10px;
}

        .col-75 {
        float: right;
        width: 75%;
        margin-top: 10px;
        }

        input[type=submit] {
            background-color: #233455;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float:right;
        }
    </style>
</head>
 <body>
        <div class="container">
            <div class="a">
            <h3>Add new user</h3>
            </div>
                <div class="row">
                    <div class="col-md-6" style="margin-top:20px">

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success')}}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail')}}
                        </div>
                    @endif

                        <form action="/saveuser" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label for="">EmpID:</label>
                                </div>
                                <div class="col-75">
                                <input type="text" class="form-control" name="EmpID" placeholder="Enter EmpID">
                                </div>
                                </div>
                               
                            </div> 

                            <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label for="">Name:</label>
                                </div>
                                <div class="col-75">
                                <input type="text"  class="form-control" name="name" placeholder="Enter name">
                                </div>
                                </div>
                            </div> 

                            <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label for="">Salary:</label>
                                </div>
                                <div class="col-75">
                                <input type="text" class="form-control" name="salary" placeholder="Enter salary">
                                </div>
                                </div>
                            </div> 

                            <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label for="">Email:</label>
                                </div>
                                <div class="col-75">
                                <input type="text" class="form-control" name="email" placeholder="Enter email ">
                                </div>
                                </div>
                            </div> 

                            <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label for="">MobileNo:</label>
                                </div>
                                <div class="col-75">
                                <input type="text" class="form-control" name="mobileNo" placeholder="Enter mobileNo">
                                </div>
                                </div>
                            </div> 

                            <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label for="">Address:</label>
                                </div>
                                <div class="col-75">
                                <input type="text" class="form-control" name="address" placeholder="Enter address">
                                </div>
                                </div>
                            </div> 

                            <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label for="">EmpType:</label>
                                </div>
                                <div class="col-75">
                                <input type="text" class="form-control" name="EmpType" placeholder="Enter EmpType">
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                            
                                <input type="submit" formaction="{{url('/User/saveuser')}}" value="Save">
                         
                            </div>

                        </form>                             
                        
                    </div>
                </div>
        </div>        
                  
 </body>
 </html> 