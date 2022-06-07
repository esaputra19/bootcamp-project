@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/assets/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
            </ul>
            <div class="d-flex user-logged">
                <a href="#">
                    Halo, Beatrice!
                    <img src="/assets/images/user_photo.png" class="user-photo" alt="">
                </a>
            </div>
        </div>
    </div>
</nav>

<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            <table class="table">
                <tbody>
                  @forelse ($checkouts as $checkout)
                  <tr class="align-middle">
                    <td width="18%">
                        <img src="/assets/images/item_bootcamp.png" height="120" alt="">
                    </td>
                    <td>
                        <p class="mb-2">
                            <strong>{{$checkouts->Camp->title}}</strong>
                        </p>
                        <p>
                            {{$checkouts->created_at->format('M,d Y')}}
                        </p>
                    </td>
                    <td>
                        <strong>{{$checkouts->Camp->price}}</strong>
                    </td>
                    <td>
                        @if ($checkouts->is_paid)
                            <strong class="text-success">Payment is Success</strong>

                        @else
                            <strong>Waiting Payment</strong>
                        @endif
                    </td>
                    <td>
                        <a href="https://wa.me/08972627234xx?text=Hi, Saya ingin menanyakan sesuatu tentang kelas {{$checkout->Camp->title}}" class="btn btn-primary">
                            Contact Support
                        </a>
                    </td>
                </tr>
                  @empty
                  <tr>
                      <td colspan="5">
                          <h3> No Data !</h3>
                      </td>
                  </tr>

                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
