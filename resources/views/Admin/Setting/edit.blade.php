@extends('Admin.layouts.master')

@section('head-tag')
<title>ویرایش تنظیمات </title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.setting.index') }}"> تنظیمات</a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش تنظیمات </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ویرایش تنظیمات
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.setting.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>s
                <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST" id="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <section class="row">
                        <section class="col-12">
                            <div class="form-group">
                                <label for="title">عنوان سایت</label>
                                <input class="form-control form-control-sm" type="text" name="title" id="title" value="{{ old('title',$setting->title) }}">
                            </div>
                            @error('title')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>
                        <section class="col-12">
                            <div class="form-group">
                                <label for="description">توضیحات</label>
                                <input class="form-control form-control-sm" type="text" name="description" id="description" value="{{ old('description',$setting->description) }}">
                            </div>
                            @error('description')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>
                        <section class="col-12">
                            <div class="form-group">
                                <label for="keywords">کلمات کلیدی سایت</label>
                                <input class="form-control form-control-sm" type="text" name="keywords" id="keywords" value="{{ old('keywords',$setting->keywords) }}">
                            </div>
                            @error('keywords')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="logo">لوگو</label>
                                <input class="form-control form-control-sm" type="file" name="logo" id="logo">
                            </div>
                            @error('logo')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="icon">آیکون</label>
                                <input class="form-control form-control-sm" type="file" name="icon" id="icon">
                            </div>
                            @error('icon')
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
