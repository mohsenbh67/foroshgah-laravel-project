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
                <form action="" method="">
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام خانوادگی</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">ایمیل</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">شماره موبایل</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">کلمه عبور</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تکرار کلمه عبور</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تصویر</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">وضعیت کاربر</label>
                                <select class="form-control form-control-sm" name="" id="">
                                    <option value="">-- دسته را انتخاب کنید--</option>
                                    <option value="">وسایل الکترونیکی</option>
                                </select>
                            </div>
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
