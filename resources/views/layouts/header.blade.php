<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
	const homeurl = '{{ url("/") }}';
    const asset = '{{ asset('') }}';
</script>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="robots" content="noindex, nofollow"/>
<title>@yield('title')</title>
@yield('head')
