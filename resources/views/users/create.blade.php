@extends('layout.index')
@section('mainWorkspace')

    <div class="col-lg-5" style="margin: auto">
        <div class="card">
            @if(session()->has('success'))
                <div class="alert alert-success text-dark text-right">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card-header" style="justify-content: center;font-size: 20px;font-weight: 600;color: #464a53;">
                @if($user['edit']) تعديل بيانات المستخدم
                @else إضافة مستخدم جـديـد @endif
            </div>
            <div class="card-body card-block">
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="form-group @if($errors->has('name'))is-invalid @endif">
                        <div class="input-group">
                            <input type="text" id="name" name="name" value="{{ old('name', $user['name']) }}"
                                   placeholder="إسم المستخدم" class="form-control-lg"
                                   style="width: 91%; text-align: right; min-height: 38px; direction: rtl; line-height: 45px; border: 1px solid #593bdb; border-right: none; border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        </div>
                    </div>
                    @if($errors->has('name'))
                        <div class="alert-danger"
                             style="text-align: right;width: 100%;margin: 15px 0;padding: 0 15px;color: #822424;">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                    <div class="form-group @if($errors->has('email')) has-error @endif">
                        <div class="input-group">
                            <input type="email" id="email" name="email" value="{{ old('email', $user['email']) }}"
                                   placeholder="البريد الالكتروني" class="form-control-lg"
                                   style="width: 91%; text-align: right; min-height: 38px; direction: rtl; line-height: 45px; border: 1px solid #593bdb; border-right: none; border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                            <div class="input-group-addon"><i class="fas fa-envelope"></i></div>
                        </div>
                    </div>
                    @if($errors->has('email'))
                        <div class="alert-danger"
                             style="text-align: right;width: 100%;margin: 15px 0;padding: 0 15px;color: #822424;">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                    <div class="form-group @if($errors->has('password')) has-error @endif">
                        <div class="input-group">
                            <input type="password" id="password" name="password" value="{{ old('password') }}"
                                   placeholder="كلمة المرور" class="form-control-lg"
                                   style="width: 91%; text-align: right; min-height: 38px; direction: rtl; line-height: 45px; border: 1px solid #593bdb; border-right: none; border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                            <div class="input-group-addon"><i class="fas fa-lock-alt"></i></div>
                        </div>
                    </div>
                    @if($errors->has('password'))
                        <div class="alert-danger"
                             style="text-align: right;width: 100%;margin: 15px 0;padding: 0 15px;color: #822424;">
                            {{$errors->first('password')}}
                        </div>
                    @endif
                    <div class="form-group @if($errors->has('password_confirmation')) has-error @endif">
                        <div class="input-group">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   value="{{ old('password_confirmation') }}" placeholder="إعادة كلمة المرور"
                                   class="form-control-lg"
                                   style="width: 91%; text-align: right; min-height: 38px; direction: rtl; line-height: 45px; border: 1px solid #593bdb; border-right: none; border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                            <div class="input-group-addon"><i class="fas fa-lock-alt"></i></div>
                        </div>
                    </div>
                    @if($errors->has('password_confirmation'))
                        <div class="alert-danger"
                             style="text-align: right;width: 100%;margin: 15px 0;padding: 0 15px;color: #822424;">
                            {{$errors->first('password_confirmation')}}
                        </div>
                    @endif
                    <div class="form-actions form-group col-lg-4 offset-lg-4" style="margin-bottom: 0px;">
                        <button type="submit" class="btn btn-secondary btn-md" style="width: 100%">
                            @if($user['edit']) تـعـديـل
                            @else إضــافــة @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('styles')
    <style>
        ::placeholder {
            color: black;
            opacity: 1;
        }

        select {
            -moz-appearance: none;
            -webkit-appearance: none;
        }

        select::-ms-expand {
            display: none;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection
