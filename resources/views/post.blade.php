<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanu SS2</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>
    <h1>{{ $post->title }}</h1>
    <p> {{ $post->body }} </p>
    <button type="button" class="btn btn-danger" onclick="clickMe()">Don't Click</button>
    <div id="myWife" style="display:none">
        <img src="{{ asset('storage/000018.jpg') }}" />
    </div>

    <script>
        function clickMe() {
            var x = document.getElementById("myWife");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</body>

</html>