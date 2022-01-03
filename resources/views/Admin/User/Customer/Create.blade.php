@extends('Admin.layouts.master')

@section('head-tag')
<title>ایجاد مشتری جدید</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش کاربران </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.user.customer.index') }}"> مشتریان </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد مشتری جدید </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ایجاد مشتری جدید
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.user.customer.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="{{ route('admin.user.customer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="first_name">نام</label>
                                <input name="first_name" id="first_name" class="form-control form-control-sm" type="text" value="{{ old('first_name') }}">
                            </div>
                            @error('first_name')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="last_name">نام خانوادگی</label>
                                <input name="last_name" id="last_name" class="form-control form-control-sm" type="text" value="{{ old('last_name') }}">
                            </div>
                            @error('last_name')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="email">ایمیل</label>
                                <input name="email" id="email" class="form-control form-control-sm" type="text" value="{{ old('email') }}">
                            </div>
                            @error('email')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="mobile">شماره موبایل</label>
                                <input name="mobile" id="mobile" class="form-control form-control-sm" type="text" value="{{ old('mobile') }}">
                            </div>
                            @error('mobile')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="password">کلمه عبور</label>
                                <input name="password" id="password" class="form-control form-control-sm" type="password" value="{{ old('password') }}">
                            </div>
                            @error('password')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation">تکرار کلمه عبور</label>
                                <input name="password_confirmation" id="password_confirmation" class="form-control form-control-sm" type="password">
                            </div>
                            @error('password_confirmation')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="profile_photo_path">تصویر</label>
                                <input name="profile_photo_path" id="profile_photo_path" class="form-control form-control-sm" type="file" value="{{ old('profile_photo_path') }}">
                            </div>
                            @error('profile_photo_path')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="activation">وضعیت کاربر</label>
                                <select class="form-control form-control-sm" name="activation" id="activation">
                                    <option value="0" @if (old('activation') == 0) selected @endif> -- غیرفعال-- </option>
                                    <option value="1" @if (old('activation') == 1) selected @endif> -- فعال-- </option>
                                </select>
                            </div>
                            @error('activation')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                    </section>
                    <section class="col-12 text-center">
                        <button class="btn btn-primary btn-sm">
                            ثبت
                        </button>
                    </section>

                </form>
            </section>


        </section>
    </section>
</section>



@endsection
