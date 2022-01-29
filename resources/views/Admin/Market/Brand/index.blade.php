@extends('Admin.layouts.master')

@section('head-tag')
<title>برند</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش فروش </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> برند </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    برند
                </h4>

            </section>

            @include('Admin.Alerts.alert-section.success')
            @include('Admin.Alerts.alert-section.warning')
            @include('Admin.Alerts.alert-section.info')
            @include('Admin.Alerts.alert-section.error')

            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.market.brand.create') }}" class="btn btn-info btn-sm"> ایجاد برند جدید</a>
                <div class="max-width-16-rem">
                    <input type="text"  class="form-control form-control-sm form-text" name="" id="" placeholder="جستجو...">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام فارسی</th>
                            <th>نام اورجینال</th>
                            <th>لوگو</th>
                            <th>اسلاگ</th>
                            <th>تگ ها</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i>  تنظیمات  </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($brands as $brand)

                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $brand->persian_name }}</td>
                            <td>{{ $brand->original_name }}</td>
                            <td>
                                @if (!empty($brand->logo))
                                <img src="{{ asset($brand->logo['indexArray'][$brand->logo['currentImage']]) }}" alt="" width="50" height="50">
                                @else
                                <p> بدون تصویر </p>
                                @endif
                            </td>
                            <td>{{ $brand->slug }}</td>
                            <td>{{ $brand->tags }}</td>
                            <td>
                                <label>
                                    <input id="{{ $brand->id }}" onchange="changeStatus({{ $brand->id }})" data-url="{{ route('admin.market.brand.status',$brand->id ) }}" type="checkbox" @if ($brand->status === 1)
                                        checked
                                    @endif>
                                </label>
                            </td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.market.brand.edit', $brand->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"> </i>  ویرایش</a>
                                <form class="d-inline" action="{{ route('admin.market.brand.destroy', $brand->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm delete"> <i class="fa fa-trash-alt"></i>  حذف</button></form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>



@endsection

@section('script')

<script type="text/javascript">
    function changeStatus (id) {
        var element = $('#'+ id)
        var url = element.attr('data-url')
        var elementValue = !element.prop('checked');


        $.ajax({
            type: "GET",
            url: url,
            success: function (response) {
                if(response.status){
                    if(response.checked){
                        element.prop('checked', true);
                        successToast('دسته با موفقیت فعال شد')
                    }
                    else{
                        element.prop('checked', false);
                        successToast('دسته با موفقیت غیر فعال شد')

                    }
                }
                  else{
                    element.prop('checked', elementValue);
                    errorToast('مشکلی پیش آمده است!!')

                }


            },

            error:function(){
                errorToast('مشکلی پیش آمده است!!');
            }
        });

        function successToast(message) {

            var successToastTag = '<section class="toast" data-delay="5000">\n' +
                '<section class="toast-body py-3 d-flex bg-success text-white">\n' +
                    '<strong class="ml-auto">'+message +'</strong>\n' +
                    '<button class="mr-2 close" type="button" data-dismiss="toast" aria-label="Close">\n' +
                        '<span aria-hidden="true">&times;</span>\n' +
                        '</button>\n' +
                        '</section>\n'
                        '</section>';


                    $('.toast-wrapper').append(successToastTag);
                    $('.toast').toast('show').delay(5500).queue(function(){
                        $(this).remove();

                    })

          }

        function errorToast(message) {

            var errorToastTag = '<section class="toast" data-delay="5000">\n' +
                '<section class="toast-body py-3 d-flex bg-danger text-white">\n' +
                    '<strong class="ml-auto">'+message +'</strong>\n' +
                    '<button class="mr-2 close" type="button" data-dismiss="toast" aria-label="Close">\n' +
                        '<span aria-hidden="true">&times;</span>\n' +
                        '</button>\n' +
                        '</section>\n'
                        '</section>';


                    $('.toast-wrapper').append(errorToastTag);
                    $('.toast').toast('show').delay(5500).queue(function(){
                        $(this).remove();

                    })

          }


    }

</script>
@include('Admin.Alerts.sweetalert.delete-confirm', ['className' => 'delete'])

@endsection
