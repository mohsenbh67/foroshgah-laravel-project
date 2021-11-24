@extends('Admin.layouts.master')

@section('head-tag')
<title>فروش شگفت انگیز</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش فروش </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> فروش شگفت انگیز </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    فروش شگفت انگیز
                </h4>

            </section>

            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.market.discount.amazingSale.create') }}" class="btn btn-info btn-sm">افزودن کالا به لیست فروش شگفت انگیز</a>
                <div class="max-width-16-rem">
                    <input type="text"  class="form-control form-control-sm form-text" name="" id="" placeholder="جستجو...">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام کالا</th>
                            <th>درصد تخفیف</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
                            <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i>  تنظیمات  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>موبایل سامسونگ</td>
                            <td>30%</td>
                            <td>24 اردیبهشت 99</td>
                            <td>30 اردیبهشت 99</td>
                            <td class="width-16-rem text-left">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"> </i>  ویرایش</a>
                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-alt"></i>  حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>موبایل سامسونگ</td>
                            <td>30%</td>
                            <td>24 اردیبهشت 99</td>
                            <td>30 اردیبهشت 99</td>
                            <td class="width-16-rem text-left">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"> </i>  ویرایش</a>
                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-alt"></i>  حذف</button>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>



@endsection