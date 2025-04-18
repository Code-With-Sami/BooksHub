@extends('master')

@section('content')
<style>
        .competition-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .btn-submit {
            background-color: #004E64;
            color: white;
        }
        .btn-submit:hover {
            background-color: #003349;
        }
</style>

<!-- Breadcumb Section Start -->
<div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="{{asset('assets/users/assets/img/hero/book1.png')}}" alt="book">
        </div>
        <div class="book2">
            <img src="{{asset('assets/users/assets/img/hero/book2.png')}}" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>{{ $competition->title }}</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{url('competitions-index')}}">
                                Competitions
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                        {{ $competition->title }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="competition-container">
            <h2 class="text-center">{{ $competition->title }}</h2>
            <p class="text-muted">{{ $competition->description }}</p>
            <p class="text-muted">Category: {{ $competition->category }}</p>
            <p><strong>Ends At:</strong> {{ $competition->end_time }}</p>
            @if(now() < $competition->end_time)
            <h4 class="mt-4">Submit Your Entry</h4>
            <form action="{{ route('competitions.submit', $competition->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="file" name="file" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-submit w-100">Submit</button>
            </form>
            @else
            <p>Submission time has ended.</p>
            @endif
        </div>
    </div>
@endsection