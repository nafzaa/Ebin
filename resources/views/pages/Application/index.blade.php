@extends('layouts.main')

@section('content')
<div>
    <div class="pagetitle">
        <h1>Application</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('application')}}">Application</a></li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    {{-- content --}}
    @livewire('application')
</div>
@endsection