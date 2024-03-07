<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/assets/css/styles.css')}}">
    @vite('resources/css/app.css')
    <title>FRONT END DEVELOPMENT TEST</title>
</head>
<body>
    @include('layouts.header')
        <main>
            {{$slot}}
        </main>
    @include('layouts.footer')
    {{-- <script type="module" src="{{ mix('js/app.js') }}"></script> --}}

    @vite(['resources/js/app.js'])
    <script type='module' src="{{asset('/assets/js/custom.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>