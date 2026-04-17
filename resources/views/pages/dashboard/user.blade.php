<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>User Dashboard</title>
</head>
<body>
    @include('layout.app')
    <ul>
        <li><x-icons.shirt_1 class="flex "/></li>
        <li>
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </li>
        <li></li>
    </ul>
</body>
</html>