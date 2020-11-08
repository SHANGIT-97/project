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
            text-align: left;
            color:#233455;
            
        }

        div.b{
            text-align: center;
            color:#233455;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            color:#233455;
        }

        .col-25 {
            float: right;
            width: 25%;
            margin-top: 10px;
}

        .col-75 {
        float: left;
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
            float: right;
        }

        .container { 
        height: 400px;
        width:800px;
        position: relative;
        border: 3px solid white; 
}
    </style>
</head>
 <body>
        <div class="container">
            <div class="a" >
            <h3>Register</h3>
            
                <div class="row">
                    <div class="col-md-6" style="margin-top:20px">
                    
                        <form  method="post" action="register" class="form-horizontal">
                        {{@csrf_field()}}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label  for="ID">ID:</label>
                                </div>
                                <div class="col-75">
                                <input type="text" class="form-control" name="ID" placeholder="Enter ID">
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label for="User name" class="control-label">User name:</label>
                                </div>
                                <div class="col-75">
                                <input type="text" class="form-control" name="Username" placeholder="Enter username">
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                                <div class="col-25">
                                <label for="Password" class="control-label">Password:</label>
                                </div>
                                <div class="col-75">
                                <input type="text" class="form-control" name="Password" placeholder="Enter password">
                                </div>
                            </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="{{url('/Enter/register')}}" value="Register">
                            </div>
                        </form>
                        
                    </div>
                </div>
                </div>
        </div>        
                  
 </body>
 </html>