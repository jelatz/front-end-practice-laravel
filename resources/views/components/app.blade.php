<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.header')
    <main>
        {{ $slot }}
    </main>
    @include('layouts.footer')
</body>
</html>