<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    

    asdsa


    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
        Echo.private('test')
            .listen('TestEvent', e => {
                console.log(e.data)
                console.log("e.data")
            })
    </script>
    </body>
</html>