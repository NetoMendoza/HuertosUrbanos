<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-light font-sans antialiased">
    {{ $slot }}
    <script>
        $("#seeAnotherField").change(function() {
            if ($(this).val() == "3"||$(this).val() == "4") {
                $('#otherFieldDiv').show();
                $('#otherField').attr('required', '');
                $('#otherField').attr('data-error', 'This field is required.');
            } else {
                $('#otherFieldDiv').hide();
                $('#otherField').removeAttr('required');
                $('#otherField').removeAttr('data-error');
            }
        });
        $("#seeAnotherField").trigger("change");
    </script>
</body>

</html>