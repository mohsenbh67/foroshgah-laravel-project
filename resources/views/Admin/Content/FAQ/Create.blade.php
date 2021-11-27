@extends('Admin.layouts.master')

@section('head-tag')
<title>ایجاد سوال جدید</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش محتوا </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.content.faq.index') }}"> سوالات متداول </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد سوال جدید </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ایجاد سوال جدید
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.content.faq.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="" method="">
                    <section class="row">
                        <section class="col-12">
                            <div class="form-group">
                                <label for="">پرسش</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12">
                            <div class="form-group">
                                <label for="">پاسخ</label>
                                <textarea name="body" id="body"  rows="7" class="form-control form-control-sm"></textarea>
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

@section('script')

<script src="{{ asset('Admin-assets/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('body');
</script>
@endsection
