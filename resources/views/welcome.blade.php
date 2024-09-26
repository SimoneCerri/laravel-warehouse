@extends('layouts.app')

@section('content')
    @include('partials.header')
    <div class="container">
        <div class="row">
            <div class="col-12 my_text_for_bg">
                <div class="min-vh-100 py-5 d-flex flex-column justify-content-center align-items-center">
                    <div class="logo_warehouse text-center">
                        <img src="/img/warehouse.png" alt="" class="my_shadow">
                        <h1 class="display-5 fw-bold mt-5 my_shadow">
                            <i class="bi bi-box"></i> Welcome to the Warehouse <i class="bi bi-box"></i>
                        </h1>
                    </div>
                    <p class="col-md-8 fs-4 mt-5 text-center my_shadow">
                        There is a need for order, especially in the workplace. Let's think for example of a
                        warehouse of a large company, what would happen if there was no management system for
                        resources and materials?
                        <span class="text-danger">Chaos.</span>
                        <br>
                        Here comes the Jr. Web Developer who builds you a management system ad hoc for your
                        company.
                    </p>
                    <a href="https://github.com/SimoneCerri" class="btn btn-dark btn-lg mt-5 my_shadow" type="button"
                        target="_blank" rel="noopener noreferrer">GitHub</a>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
