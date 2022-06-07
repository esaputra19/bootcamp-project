@extends('layouts.app')
@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    Mulai Langkah Masa Depan
                </p>
                <h2 class="primary-header">
                    Investasikan Diri Anda Sekarang
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="/assets/images/item_bootcamp.png" alt="" class="cover">
                            <h1 class="package text-uppercase">
                                {{$camps->title}}
                            </h1>
                            <p class="description">
                                Bootcamp ini merupakan sebuah pelatihan skill pemrograman dengann sertifikat yang kredibel didunia industri
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('checkout.store', $camps->id) }}" class="basic-form"  method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Nama lengkap</label>
                                <input name="name" type="text" class="form-control" value="{{Auth::user()->name}}"/>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input name="email"type="email" class="form-control" value="{{Auth::user()->email}}"/>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Occupation</label>
                                <input name="occupation" type="text" class="form-control" value="{{Auth::user()->occupation}}"/>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Card Number</label>
                                <input name="card_number" type="number" class="form-control"/>
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">Expired</label>
                                        <input name="expired" type="month" class="form-control"/>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">CVC</label>
                                        <input name="cvc" type="text" class="form-control" maxlength="3">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Bayar !</button>
                            <p class="text-center subheader mt-4">
                                <img src="/assets/images/ic_secure.svg" alt=""> Your payment is secure and encrypted.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
