<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wellcome</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Lobster" rel="stylesheet">
    <style>
            html,body{
            font-family: 'Roboto', sans-serif;


        }
        .cursive-marker{font-family: 'Lobster', cursive;}

        nav>div>span{
            margin-top: 24px; 
            color: white; 
            font-size: 24px;
        }
        button {
            padding: 12px 16px; 
            font-size: 16px;  
            color: white; 
            border: none; 
            background-color: rgba(27,157,116,1);
            box-shadow: 1px 2px 5px rgba(0,0,0,0.3); 
            border-radius: 3px; 
        }
        button:hover{  
            background-color: rgba(27,157,116,1);

        }
    </style>
</head>
<body>

    <main>

        <div style="text-align: center; margin-top: 80px" class="container">
            <img src="https://doc-0c-00-docs.googleusercontent.com/docs/securesc/ha0ro937gcuc7l7deffksulhg5h7mbp1/1v7rj6ikk0khf8tvmmki7ivl61f1lg5s/1541671200000/07635287236685665338/*/1J_rROhJjeCKJlsLyfgRO_KcXmkPv3wK_">     
        </div> 
        <div style="text-align: center;font-size: 48px; margin-top: 8px" class="cursive-marker">Welcome to fidel</div>
        <div style="text-align: center">
            <p>This is your temporary password. Please use your registral id as user name and login.</p>
            <div class="password" style="margin: 24px;padding: 8px 16px; font-size: 14px; background-color: rgba(0,0,0,0.1); display:inline-block">
                <strong>{{$password}}</strong>
            </div>
            <div>
                <a href="">
                    <button>LOG IN</button>
                </a>
            </div>
            
        </div>
        
    </main>
            

</body>
</html>