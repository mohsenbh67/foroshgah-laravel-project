@extends('Admin.layouts.master')

@section('head-tag')
<title>اطلاعیه پیامکی</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  اطلاع رسانی </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> اطلاعیه پیامکی </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    اطلاعیه پیامکی
                </h4>

            </section>
            @include('Admin.Alerts.alert-section.success')
            @include('Admin.Alerts.alert-section.warning')
            @include('Admin.Alerts.alert-section.info')
            @include('Admin.Alerts.alert-section.error')

            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.notify.sms.create') }}" class="btn btn-info btn-sm"> ایجاد پیامک جدید</a>
                <div class="max-width-16-rem">
                    <input type="text"  class="form-control form-control-sm form-text" name="" id="" placeholder="جستجو...">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان اطلاعیه</th>
                            <th>متن پیام</th>
                            <th>تاریخ ارسال</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i>  تنظیمات  </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sms as $key =>$single_sms )

                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $single_sms->title }}</td>
                            <td>{{ Str::limit($single_sms->body, 10) }} </td>
                            <td>{{ jalaliDate($single_sms->published_at, 'H:i:s Y-m-d') }} </td>
                            <td>
                                <label>
                                    <input id="{{ $single_sms->id }}" onchange="changeStatus({{ $single_sms->id }})" data-url="{{ route('admin.notify.sms.status',$single_sms->id ) }}" type="checkbox" @if ($single_sms->status === 1)
                                        checked
                                    @endif>
                                </label>
                            </td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.notify.sms.edit', $single_sms->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"> </i>  ویرایش</a>
                                <form class="d-inline" action="{{ route('admin.notify.sms.destroy', $single_sms->id) }}" method="POST">
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
                        successToast('پیامک با موفقیت فعال شد')
                    }
                    else{
                        element.prop('checked', false);
                        successToast('پیامک با موفقیت غیر فعال شد')

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

