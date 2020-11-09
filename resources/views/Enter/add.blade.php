<DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        div.a {
                
                color:#233455;
            }
        div.b {
                
                color:#233455;
            }
            
            
           

            .button1{
                background-color: #233455;
                color: white;
                width:250px;
            }

            .button2{
                background-color: white;
                color: #233455;
                width:250px;
            }
            .button3{
                background-color: #233455;
                color: white;
                width:250px;
            }

            .button4{
                background-color: white;
                color: #233455;
                width:250px;
            }
            .button5{
                background-color: #233455;
                color: white;
                width:250px;
            }
            input[type=submit] {
                background-color: #233455  ;
                color: white;
                width:200px;
                padding: 10px 20px;
                border: none;
                border-radius: 20px;
                cursor: pointer;
                
            }
</style>
</head>

   
 <body>
        <div class="container">
            <div class="a" >
            <h3>Home Page</h3>
            </div>
                <div class="row">
                    <div class="col-md-6" style="margin-top:20px">
                        <form action="" method="post">
                        @csrf
                        <div class="b">
                            <div class="form-group">
                                <input type="submit" class="button button1" value="Dashboard">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="button button2" value="Analytics">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="button button3" value="Reports">
                            </div>

                            <div class="form-group">
                                <input type="submit" formaction="{{url('/User/adduser')}}" value="Users">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="button button5" value="Products">
                            </div>
                        </div>
                            
                        </form>
                    </div>
                </div>
        </div>        
                  
 </body>
 </html>
