@extends('Admin.layouts.master')

@section('head-tag')
<title>ایجاد نقش جدید</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش کاربران </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.user.role.index') }}"> نقش ها </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد نقش جدید </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ایجاد نقش جدید
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.user.role.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="" method="">
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">عنوان نقش</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">توضیح نقش</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                    </section>

                    <section class="col-12">
                        <section class="row border-top mt-3 py-3">
                            <section class="col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" checked>
                                    <label for="check1" class="form-check-lable mr-3">نمایش دسته جدید</label>
                                </div>
                            </section>
                            <section class="col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check2" checked>
                                    <label for="check2" class="form-check-lable mr-3">نمایش دسته جدید</label>
                                </div>
                            </section>
                            <section class="col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check3" checked>
                                    <label for="check3" class="form-check-lable mr-3">نمایش دسته جدید</label>
                                </div>
                            </section>
                            <section class="col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check4" checked>
                                    <label for="check4" class="form-check-lable mr-3">نمایش دسته جدید</label>
                                </div>
                            </section>
                            <section class="col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check5" checked>
                                    <label for="check5" class="form-check-lable mr-3">نمایش دسته جدید</label>
                                </div>
                            </section>
                            <section class="col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check6" checked>
                                    <label for="check6" class="form-check-lable mr-3">نمایش دسته جدید</label>
                                </div>
                            </section>
                            <section class="col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check7" checked>
                                    <label for="check7" class="form-check-lable mr-3">نمایش دسته جدید</label>
                                </div>
                            </section>
                            <section class="col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check8" checked>
                                    <label for="check8" class="form-check-lable mr-3">نمایش دسته جدید</label>
                                </div>
                            </section>

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
