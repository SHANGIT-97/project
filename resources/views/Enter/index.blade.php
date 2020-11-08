<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer Relationship Management System</title>
        <style>
            div.a {
                text-align: center;
                color:#233455;
            }

            div.b {
                text-align: center;
            }
            div.c {
                text-align: center;
            }

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
        <div class="content" >
            <div class="a">
                <div class="title-m-b-md">
                    <h1 style="font-size:50px;">Customer Relationship Management System</h1>
                </div>
            </div>

            <div class="b">
                <img src="/images/image1.jpeg " alt="cover Image" style="width:350px;height:250px;"> 
            </div>
            <br>
            <br>
            <form method="post">
            {{@csrf_field()}}
            <div class="c">
                <div class="form-group"> 
                    <input type="submit" formaction="{{url('/Enter/logto')}}" value="Login">
                </div>
            <br>
            <br>
                <div class="form-group">
                    <input type="submit" formaction="{{url('/Enter/regto')}}"  value="Register">
                </div>
            </div>
            </form>
        </div>

    </body>
</html>
