<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Api</title>
</head>
<body>
<div class="container">
    <h1>Users</h1>
    @foreach($posts as $post)
        <div class="panel panel-default">
            <div class="panel-body">
                {{ $post->username }}
            </div>
        </div>
    @endforeach
</div>
</body>
</html>