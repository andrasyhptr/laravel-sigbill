@extends('layout.maindashboard')
@section('title')
    SIGBill | Tentang
@endsection
@section('style')
<script type="text/javascript">var centreGot = false;</script>
    {!!$map['js']!!}
@endsection
@section('content')
<div class="col-lg-12">
    <p>
        <center>
        <div class="h3"><strong>TENTANG SIGBill</strong>
        </center>
    </p>
    <p></p>>
</div>

<div class="col-lg-12"> 
    <p></p> 
    <p>
        <center><strong>SIGBill</strong> adalah aplikasi sistem informasi geografis pencarian lokasi billboard, dimana kamu bisa mencari dimana saja lokasi billboard yang sangat strategis.</center>
    </p> 
    <p>
        <center>Aplikasi sistem informasi geografis pencarian lokasi billboard ini dibuat sebagai bagian dari penelitian skripsi dengan judul <strong>"Sistem Informasi Geografis Pencarian Lokasi Billboard Di Samarinda Berbasis Web".</strong></center>
    </p>
    <p>
        <center>Saat ini semakin banyak peminat yang ingin menggunakan billboard sebagai media promosi mereka, tentunya mereka akan mencari lokasi billboard yang sangat strategis dan sesuai dengan target masyarakat yang melihat iklan mereka. Misalnya perusahaan produksi makanan atau masakan ingin produknya terlihat di sekitar pasar, atau instansi pemerintahan ingin mencari lokasi di sekitar kantor dinas untuk acara nasional. Adapun dalam proses pencarian lokasi billboard tersebut masih tradisional yaitu dengan melihat atau mengunjungi langsung lokasi billboard tersebut berada, tentunya akan susah dan memakan banyak waktu dan biaya apabila peminat tersebut berada di lokasi yang cukup jauh atau di luar kota. Kemudian pencarian informasi terkait pengelola billboard yang bisa dihubungi juga sangat minim, hanya beberapa billboard yang mencantumkan data informasi dan kontak pengelola sehingga menjadi kendala para peminat dalam berkomunikasi dengan pengelola.</center>
    </p> 
    <p>
        <center>Dengan adanya aplikasi ini diharapkan dapat mempermudah pengguna untuk mengetahui letak lokasi strategis dan informasi tentang billboard. Selain itu pengembang aplikasi sistem ini juga dapat menambahkan lokasi tertentu yang sekira perlu apabila lokasi yang bersangkutan belum tersedia di dalam aplikasi.</center>
    </p>
</div>
<img src="{{asset('images/').'/'.'tentang-logo.jpg'}}" width="100%" class="img-responsive">
<div class="col-lg-12">
    <p>
        <center>2019 @ SIGBill | Sistem Informasi Geografis Billboard</center>
    </p> 
</div>
@endsection
@section('script')
@endsection