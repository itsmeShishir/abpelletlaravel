@section('html_head')
<title>{{ \App\Models\Setting::value('title') }}</title>
<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/contact.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/global.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/aboutus.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/product.css')}}">
<link rel="shortcut icon" href="{{ \App\Models\Setting::value('favicon') }}">
{{-- Bootstrap css --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/4ac34e39cf.js" crossorigin="anonymous"></script>
@endsection