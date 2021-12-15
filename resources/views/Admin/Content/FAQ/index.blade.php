@extends('Admin.layouts.master')

@section('head-tag')
<title>سوالات متداول</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش محتوا </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> سوالات متداول </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    سوالات متداول
                </h4>

            </section>

            @include('Admin.Alerts.alert-section.success')
            @include('Admin.Alerts.alert-section.warning')
            @include('Admin.Alerts.alert-section.info')
            @include('Admin.Alerts.alert-section.error')

            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.content.faq.create') }}" class="btn btn-info btn-sm"> ایجاد سوال جدید</a>
                <div class="max-width-16-rem">
                    <input type="text"  class="form-control form-control-sm form-text" name="" id="" placeholder="جستجو...">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>پرسش</th>
                            <th>خلاصه پاسخ</th>
                            <th>تگ ها</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"> <i class="fa fa-cogs"></i>  تنظیمات  </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $key => $faq )
                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $faq->question }}</td>
                            <td>{{ $faq->answer }}</td>
                            <td>{{ $faq->tags }}</td>
                            <td>
                                <label>
                                    <input id="{{ $faq->id }}" onchange="changeStatus({{ $faq->id }})" data-url="{{ route('admin.content.faq.status',$faq->id ) }}" type="checkbox" @if ($faq->status === 1)
                                        checked
                                    @endif>
                                </label>
                            </td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.content.faq.edit', $faq->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"> </i>  ویرایش</a>
                                <form class="d-inline" action="{{ route('admin.content.faq.destroy', $faq->id) }}" method="POST">
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
                        successToast('سوال با موفقیت فعال شد')
                    }
                    else{
                        element.prop('checked', false);
                        successToast('سوال با موفقیت غیر فعال شد')

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
