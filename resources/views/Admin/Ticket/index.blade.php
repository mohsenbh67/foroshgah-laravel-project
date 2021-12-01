@extends('Admin.layouts.master')

@section('head-tag')
<title>تیکت</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12"> تیکت ها </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">  تیکت </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                   تیکت
                </h4>

            </section>

            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="#" class="btn btn-info btn-sm disabled"> ایجاد نظر جدید</a>
                <div class="max-width-16-rem">
                    <input type="text"  class="form-control form-control-sm form-text" name="" id="" placeholder="جستجو...">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نویسنده تیکت</th>
                            <th>عنوان تیکت</th>
                            <th>دسته تیکت</th>
                            <th>اولویت تیکت</th>
                            <th>ارجاع شده از</th>
                            <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i>  تنظیمات  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>حامد احمدی</td>
                            <td>پداخت انجام نمیشود</td>
                            <td>دسته فروش</td>
                            <td>فوری</td>
                            <td>-</td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.ticket.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"> </i>  مشاهده</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>



@endsection