@extends('Admin.layouts.master')

@section('head-tag')
<title>ایجاد کالا</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش فروش </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.market.product.index') }}"> کالا </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد کالا </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ایجاد کالا
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.market.product.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="" method="">
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام کالا</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">دسته کالا</label>
                                <select class="form-control form-control-sm" name="" id="">
                                    <option value="">-- دسته را انتخاب کنید--</option>
                                    <option value="">وسایل الکترونیکی</option>
                                </select>
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">فرم کالا</label>
                                <select class="form-control form-control-sm" name="" id="">
                                    <option value="">-- دسته را انتخاب کنید--</option>
                                    <option value="">وسایل الکترونیکی</option>
                                </select>
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تصویر کالا</label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">وزن</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">قیمت</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12">
                            <div class="form-group">
                                <label for="">توضیحات</label>
                                <textarea name="body" id="body" rows="6" class="form-control form-control-sm"></textarea>
                            </div>
                        </section>


                        <section class="col-12 border-top border-bottom py-3 mb-3">

                            <section class="row">
                                <section class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input class="form-control form-control-sm" type="text" placeholder="ویژگی ....">
                                    </div>
                                </section>
                                <section class="col-6 col-md-3">
                                    <div class="form-group">
                                        <input class="form-control form-control-sm" type="text" placeholder="مقدار ....">
                                    </div>
                                </section>
                            </section>
                            <section>
                                <button type="button" class="btn btn-success btn-sm"> افزودن</button>
                            </section>
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

@section('script')

    <script src="{{ asset('Admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body');
    </script>

@endsection
