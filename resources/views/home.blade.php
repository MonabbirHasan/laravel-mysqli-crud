@extends('pages.main')
@push('title')
    <title>{{session()->get('name');}}</title>
@endpush
@section('main-section')
    <div class="text-center">
        <h1>Welcome to our Home page</h1>
    </div>
@endsection
