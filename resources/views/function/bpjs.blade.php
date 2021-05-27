@extends('template/landingtemplate')

@section('title', 'Hosvital: Home')

@section('content')

<div class="container mb-5 pt-5 pb-5">

              <div class="row justify-content-md-center">

                  <div class="col" style="background-color: #CC4848; height: 775px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                  <center>
                  <h1 style= "margin-top: 60%; font-size: 55px; color: white">PANDUAN BPJS</h1>
                  </center>
                  </div>

                  <div class="col" style="background-color: white; height: 500px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;"">
                  <img src = "{{ 'https://indonesia.go.id/assets/img/assets/1547118467_BPJS.jpeg' }}" width="86%">
                </div>

            </div>

        </div>

@endsection