@extends('layout.app')
@section('main')
<div class="min-h-screen flex items-center">
    <div class="w-100 h-100">
        <img src="{{ asset('images/shirt_1.svg') }}" alt="Gambar Baju">
        {{-- <x-icons.shirt_1/> --}}
    </div>
    <div class="flex flex-col items-center justify-center gap-10 lg:gap-10 md:gap-5 lg:mx-10 md:mx-5 mx-2">
        <div class="text-center text-7xl ">
            Jersey Custom <br>Berkualitas
        </div>
        <div class="text-center">Dari tim komunitas sampai klub kompetitif, kami produksi jersey yang sesuai identitas tim Anda. Bahan tahan lama, cetak presisi, dan kualitas konsisten di setiap produksi.</div>
        <div class="flex gap-10">
            <x-ui.button>Cek Daftar Produk</x-ui.button>
            <x-ui.button>Hubungi Kami</x-ui.button>
        </div>
    </div>
    <div class="">
        <img src="{{ asset('images/shirt_2.svg') }}" alt="Gambar Baju">
        {{-- <x-icons.shirt_2/> --}}
    </div>
</div>
<div class="bg-[url('/images/substract.svg')] w- h-auto bg-repeat bg-[length:50px_50px]">

</div>
@endsection
