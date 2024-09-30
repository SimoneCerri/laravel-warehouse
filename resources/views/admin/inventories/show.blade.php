@extends('layouts.admin')

@section('content')
    <header>
        <div class="container-fluid bg-dark py-3 text-danger shadow">
            <div class="container d-flex align-items-center justify-content-between">
                <h1>
                    <strong>
                        ID : {{ $inventory->id }}
                    </strong>
                </h1>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container py-5">
            {{-- @include('partials.session-message') --}}
            <div class="row py-3 bg-secondary rounded text-center">
                <div class="col-4"><span class="fw-bold">Inventory ID:</span></div>
                <div class="col-4"><span class="fw-bold">Product ID:</span></div>
                <div class="col-4"><span class="fw-bold">Quantity:</span></div>
            </div>
        </div>
        <div class="container">
            <div class="row bg-secondary rounded text-center">
                <div class="col-4">
                    <span scope="row">{{ $inventory->id }}</span>
                </div>
                <div class="col-4">
                    <span scope="row">{{ $inventory->product_id }}</span>
                </div>
                <div class="col-4">
                    <span scope="row">{{ $inventory->quantity }}</span>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <hr>
        </div>
        <div class="container py-5">
            <hr>
        </div>
        <div class="container py-5 d-flex align-items-center justify-content-between">
            <div class="d-flex">
                <div class="">
                    <a class="btn btn-dark" href="{{ route('admin.inventories.edit', $inventory) }}">
                        <i class="fas fa-pencil fa-lg fa-fw"></i>
                        <span class="px-2 fw-bold">
                            EDIT
                        </span>
                    </a>
                </div>
                <div class="px-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#modalId-{{ $inventory->id }}">
                        <span class="px-2 fw-bold">
                            DELETE
                        </span>
                        <i class="fas fa-trash-can fa-lg fa-fw"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modalId-{{ $inventory->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                        Are you sure to delete {{ $inventory->id }} item ?
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">❌care❌care❌</div>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('admin.inventories.destroy', $inventory) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Delete this item
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <a class="btn btn-dark text-danger fw-bold" href="{{ route('admin.inventories.index') }}">
                    <i class="fa-solid fa-rotate-left"></i>
                    <span>
                        RETURN TO INVENTORY
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection
