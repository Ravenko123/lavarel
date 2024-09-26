    <html>
    <body>

    <h1>Welcome</h1> 
    <?php
    echo $users[0]["name"];
    ?>
    <br>
    <br>

    <?php

    foreach ($users as $user) {
        echo $user["name"];
        echo $user["vek"];
        echo "<br>";
    }
    ?>

    @foreach ($users as $user)
        <h1>{{$user["name"]}}</h1>
        <h2>{{$user["vek"]}}</h2>
        @if ($user["vek"] >= 21 ) {
            <p>{{ $user['name'] }} moze pit</p>
            @else
            <p>{{ $user['name'] }} nemoze pit</p>
        }
    
        @endif      
    @endforeach

 

    </body>
    </html>