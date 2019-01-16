@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <!-- {{$user}} -->
                    @if( empty($user->wa_number) or empty($user->birth_place) or $user->birth_date == '0000-00-00' or empty($user->gender) or empty($user->profession) or empty($user->country) or empty($user->postal_code) or empty($user->address))
                        Assalamu'akum {{$user->name}}. <br>
                        Silakan melengkapi profile terlebih dahulu 
                        <a href="{{route('user.create')}}">isi profil</a>
                    @else
                        <br>
                        role akan dibuatkan oleh admin
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
