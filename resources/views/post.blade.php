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
    <button type="button" class="btn btn-primary" id="1">Get</button>
    <p id="users"></p>
    <div id="myWife" style="display:none">
        <img src="{{ asset('storage/000018.jpg') }}" />
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function clickMe() {
            var x = document.getElementById("myWife");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        $("#1").click(function(){
            axios.get('/').then(res => {
                // console.log('123');
                $('#users').text(JSON.stringify(res.data.users));
            })
        });
    </script>
</body>

</html>