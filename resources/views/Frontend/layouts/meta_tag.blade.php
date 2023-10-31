@section('meta_tag')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="{{ \App\Models\Setting::value('meta_description') }}">
<meta name="keywords" content="{{ \App\Models\Setting::value('meta_keywords') }}">
@endsection