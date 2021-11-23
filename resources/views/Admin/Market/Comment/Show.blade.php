@extends('Admin.layouts.master')

@section('head-tag')
<title>نمایش نظرات</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش فروش </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.market.comment.index') }}"> نظرات </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">نمایش نظرات  </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    نمایش نظرات
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.market.comment.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section class="card mb-3">
                <section class="card-header text-white bg-custom-yellow">
                    محسن بهروزی - 1232333
                </section>
                <section class="card-body">
                    <h5 class="card-title">مشخصات کالا : ساعت هوشمند apple watch کد کالا : 8974938</h5>
                    <p class="card-text">به نظر من ساعت خوبیه ولی تنها مشکلی که داره اینه که وزنش زیاده و زود شارژش تموم میشه!</p>
                </section>

            </section>

            <section>
                <form action="" method="">
                    <section class="row">
                        <section class="col-12 ">
                            <div class="form-group">
                                <label for="">پاسخ ادمین</label>
                                <textarea name="" id="" rows="4" class="form-control form-control-sm"></textarea>
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
