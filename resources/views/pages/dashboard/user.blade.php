@extends('layout.app')
@section('main')
    <div class="absolute top-1/3 left-4">
        <x-icons.shirt_1 class="" />
    </div>
    <div class="absolute top-1/3 right-0">
        <x-icons.shirt_2 class="" />
    </div>
    <div class="h-screen flex flex-col justify-center items-center align-center">
        <h1 class="h1 text-center">Jersey Custom Berkualitas</h1>
        <div class="h3">Dari tim komunitas sampai klub kompetitif, kami produksi jersey yang sesuai identitas tim Anda.
            Bahan
            tahan lama, cetak presisi, dan kualitas konsisten di setiap produksi.</div>
        <x-ui.button>Mulai</x-ui.button>
    </div>
@endsection
