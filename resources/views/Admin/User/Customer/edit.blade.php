@extends('Admin.layouts.master')

@section('head-tag')
<title>ویرایش مشتری</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش کاربران </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.user.customer.index') }}"> کاربران مشتری </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش مشتری </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ویرایش مشتری
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.user.customer.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="{{ route('admin.user.customer.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="first_name">نام</label>
                                <input name="first_name" id="first_name" class="form-control form-control-sm" type="text" value="{{ old('first_name', $user->first_name) }}">
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
                                <input name="last_name" id="last_name" class="form-control form-control-sm" type="text" value="{{ old('last_name',$user->last_name) }}">
                            </div>
                            @error('last_name')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12">
                            <div class="form-group">
                                <label for="profile_photo_path">تصویر</label>
                                <input name="profile_photo_path" id="profile_photo_path" class="form-control form-control-sm" type="file" value="{{ old('profile_photo_path') }}">
                                <img src="{{ asset($user->profile_photo_path)}}" alt="" width="100" height="50" class="mt-3">
                            </div>
                            @error('profile_photo_path')
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
