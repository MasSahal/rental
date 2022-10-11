@extends('layout.template')

@section('title', 'Home - Rental')
@section('title-page', 'Home')

@section('breadcrumb')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Example Card</h5>
                    <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
                </div>
            </div>

        </div>

        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Example Card</h5>
                    <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
