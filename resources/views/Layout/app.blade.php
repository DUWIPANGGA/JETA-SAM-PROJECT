<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>JETA Konveksi</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
    <style>
        .h1 {
            /* Jersey Custom Berkualitas */

            width: 713px;
            height: 128px;

            /* 5xl */
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-size: 64px;
            line-height: 64px;
            /* or 100% */
            text-align: center;
            letter-spacing: -0.04em;

            /* Black/Base */
            color: #1F2832;


            /* Inside auto layout */
            flex: none;
            order: 0;
            align-self: stretch;
            flex-grow: 0;

        }

        .h3 {
            /* Dari tim komunitas sampai klub kompetitif, kami produksi jersey yang sesuai identitas tim Anda. Bahan
            tahan lama, cetak presisi, dan kualitas konsisten di setiap produksi. */

            width: 713px;
            height: 96px;

            /* 2xl */
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 32px;
            /* identical to box height, or 133% */
            text-align: center;
            letter-spacing: -0.02em;

            /* Black/Base */
            color: #1F2832;


            /* Inside auto layout */
            flex: none;
            order: 1;
            align-self: stretch;
            flex-grow: 0;
        }

        .button-primary {
            /* ButtonBG */

            /* Auto layout */
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 4px 32px;
            gap: 8px;

            width: 205px;
            height: 50px;

            /* Accent/Base */
            background: #2579F6;
            box-shadow: 0px 4px 10px rgba(31, 40, 50, 0.2), 0px 2px 4px rgba(31, 40, 50, 0.2), inset 0px -2px 2px rgba(83, 83, 83, 0.4), inset 0px 2px 2px rgba(255, 255, 255, 0.5);
            border-radius: 100px;

            /* Inside auto layout */
            flex: none;
            order: 0;
            flex-grow: 0;

        }
    </style>
</head>

<body>
    <div class="bg-[url('/images/bg.png')] w-full min-h-screen bg-repeat bg-[length:50px_50px]">
        @include('layout.partials.navbar')
        @yield('main')
    </div>
</body>

</html>
