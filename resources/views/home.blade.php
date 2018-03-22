@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Analysis Stck</h3>
                   <ul>
                       <li><a href="{{route('peg')}}">PEG</a></li>
                       <li><a href="{{route('ddm')}}">DDM</a></li>
                       <li><a href="{{route('dcf')}}">DCF</a></li>
                       <li><a href="{{route('ps')}}">PS</a></li>
                       <li><a href="{{route('ev')}}">EV/Ebitda</a></li>
                   </ul>

                        <h3>Find value</h3>
                        <ul>
                            <li><a href="{{route('peg')}}">PE</a></li>
                            <li><a href="{{route('ddm')}}">P/BV</a></li>
                        </ul>

                        <h3>??????????????????????????</h3>
                        <ul>
                            <li><a href="{{route('peg')}}">????????????</a></li>

                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
