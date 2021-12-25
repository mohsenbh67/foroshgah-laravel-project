@extends('Admin.layouts.master')

@section('head-tag')
<title>فایل های ایمیل</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  اطلاع رسانی </li>
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.notify.email.index') }}">   اطلاع رسانی ایمیلی </a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> فایل ها </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    فایل ها
                </h4>

            </section>

            @include('Admin.Alerts.alert-section.success')
            @include('Admin.Alerts.alert-section.warning')
            @include('Admin.Alerts.alert-section.info')
            @include('Admin.Alerts.alert-section.error')

            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.notify.email-file.create', $email->id ) }}" class="btn btn-info btn-sm"> ایجاد فایل</a>
                <div class="max-width-16-rem">
                    <input type="text"  class="form-control form-control-sm form-text" name="" id="" placeholder="جستجو...">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان ایمیل</th>
                            <th>سایز فایل</th>
                            <th>نوع فایل</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i>  تنظیمات  </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($email->files as $key =>$file )

                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $email->subject }}</td>
                            <td>{{ $file->file_size }} </td>
                            <td>{{ $file->file_type }} </td>
                            <td>
                                <label>
                                    <input id="{{ $file->id }}" onchange="changeStatus({{ $file->id }})" data-url="{{ route('admin.notify.email-file.status',$file->id ) }}" type="checkbox" @if ($file->status === 1)
                                        checked
                                    @endif>
                                </label>
                            </td>
                            <td class="width-22-rem text-left">
                                <a href="{{ route('admin.notify.email-file.edit', $file->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"> </i>  ویرایش</a>
                                <form class="d-inline" action="{{ route('admin.notify.email-file.destroy', $file->id) }}" method="POST">
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
                        successToast('فایل ایمیل با موفقیت فعال شد')
                    }
                    else{
                        element.prop('checked', false);
                        successToast('فایل ایمیل با موفقیت غیر فعال شد')

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

