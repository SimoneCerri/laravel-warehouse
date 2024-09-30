@extends('layouts.admin')

@section('content')
    @include('partials.header')
    <div class="container py-5">
        <div class="container-fluid bg-dark py-3 text-danger shadow rounded-top">
            <div class="container d-flex align-items-center justify-content-between">
                <h1>
                    <strong>
                        Dashboard
                    </strong>
                </h1>
                <a class="btn btn-danger text-dark" href="{{ route('admin.inventories.index') }}">Inventory</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card rounded-0 rounded-bottom">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
