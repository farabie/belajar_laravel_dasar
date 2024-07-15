{{-- 
11. Sisip Jika diperlukan
Untuk sebagai informasi jika kita menerapkan {{$styles}} atau slot pada induknya artinya kita harus
menerapkan semuanya ke page yang ada

Untuk mengakali kita bisa buat kondisi seperti dibawah

@if(isset($styles))

{{$styles}}

@endif

atau bisa langsung saja seperti ini

@isset($styles)

{{$styles}}
    
@endisset


atau juga bisa tambahkan $styles == null pada constructor nya

-- }}