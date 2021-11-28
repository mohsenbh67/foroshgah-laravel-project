@extends('Admin.layouts.master')

@section('head-tag')
<title>پیج ساز</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش محتوا </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> پیج ساز </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                   پیج ساز
                </h4>

            </section>

            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.content.page.create') }}" class="btn btn-info btn-sm"> ایجاد پیج جدید</a>
                <div class="max-width-16-rem">
                    <input type="text"  class="form-control form-control-sm form-text" name="" id="" placeholder="جستجو...">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان</th>
                            <th>آدرس پیج</th>
                            <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i>  تنظیمات  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>درباره ما</td>
                            <td>about us</td>
                            <td class="width-16-rem text-left">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"> </i>  ویرایش</a>
                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-alt"></i>  حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>درباره ما</td>
                            <td>about us</td>
                            <td class="width-16-rem text-left">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"> </i>  ویرایش</a>
                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-alt"></i>  حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>درباره ما</td>
                            <td>about us</td>
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