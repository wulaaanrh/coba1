@extends('dashboard.layouts.main')

@section('container')
<link rel="stylesheet" type="text/css" href="css/index1.css">
<body>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
</div>
</body>
@endsection