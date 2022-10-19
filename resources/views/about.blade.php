
@extends('layouts.main')
@section('container')
    
    {{-- <h2>halaman about</h2>
    <h3>Ibe</h3>
    <p>ibraahim.id@gmail.com</p>
    <img src="img/onepiece.webp" alt="">
    <script src="js/script.js"></script>

    <h3><?php echo $name; ?></h3>
    <p><?= $email; ?></p>
    <img src="img/<?=  $image?>" alt=""> --}}

    {{-- blade template engine --}}
    <br>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="" width="200" class="img-thumbnail rounded-circle">
@endsection
