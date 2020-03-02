@extends('layouts.login')

@section('title', 'Easy Web Tour - '. __('Forgetpassword'))



@section('footer_scripts')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

    @if(session()->has('message'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'คำร้องขอผิดพลาด',
            text: "ไม่พบข้อมูล Email ของท่านในระบบ",
            focusConfirm: false,
            allowOutsideClick: false,
        }).then(function() {

            window.location.reload();
        });
    </script>
    @else
    @section('content')
<div class="d-md-flex align-items-center justify-content-around h-100 text-uppercase">
    
    <div class="px-5 px-md-0">
        <div class="CardLayout">

            <header><h4 class="spectrum-Heading1">{{ __('กรุณากรอก Email ของท่าน') }}</h4></header>

            <form method="POST" action="{{ asset('/users/forgetpassword') }}" data-plugins="formSubmit">
                @csrf

                <div class="form-group">
                    <!-- <label for="email" class="col-form-label text-md-right">{{ __('Email') }}</label> -->
                    <br>

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

               

                <div class="form-group d-flex justify-content-between align-items-center mb-0">
                    <div></div>
                    <div>
                        <button type="submit" class="btn btn-primary text-uppercase">
                            {{ __('ส่งคำขอเปลี่ยนรหัสผ่าน') }}
                        </button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>


@endsection
    @endif
@endsection

