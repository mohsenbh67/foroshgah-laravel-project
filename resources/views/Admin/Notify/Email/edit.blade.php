@extends('Admin.layouts.master')

@section('head-tag')
<title>ویرایش ایمیل</title>
<link rel="stylesheet" href="{{ asset('Admin-assets/jalalidatepicker/persian-datepicker.min.css') }}">

@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  اطلاع رسانی </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.notify.email.index') }}"> اطلاعیه ایمیلی </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش ایمیل </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ایجاد ایمیل جدید
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.notify.email.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="{{ route('admin.notify.email.update',$email->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <section class="row">
                        <section class="col-12">
                            <div class="form-group">
                                <label for="subject">عنوان ایمیل</label>
                                <input class="form-control form-control-sm" type="text" name="subject" id="subject"
                                    value="{{ old('subject',$email->subject) }}">
                            </div>
                            @error('subject')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="published_at">تاریخ انتشار</label>
                                <input class="form-control form-control-sm" type="text" name="published_at"
                                    id="published_at" style="display: none" value="{{ old('published_at',$email->published_at) }}">
                                <input class="form-control form-control-sm" type="text" id="published_at_view" value="{{ old('published_at',$email->published_at) }}">
                            </div>
                            @error('published_at')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="status">وضعیت</label>
                                <select class="form-control form-control-sm" name="status" id="status">
                                    <option value="0" @if (old('status') == 0) selected @endif> -- غیرفعال-- </option>
                                    <option value="1" @if (old('status') == 1) selected @endif> -- فعال-- </option>
                                </select>
                            </div>
                            @error('status')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>
                        <section class="col-12">
                            <div class="form-group">
                                <label for="">متن ایمیل</label>
                                <textarea name="body" id="body" rows="7"
                                    class="form-control form-control-sm">{{ old('body',$email->body) }}</textarea>
                            </div>
                            @error('body')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
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
<script src="{{ asset('Admin-assets/jalalidatepicker/persian-date.min.js') }}"></script>
<script src="{{ asset('Admin-assets/jalalidatepicker/persian-datepicker.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#published_at_view').persianDatepicker({
            format: 'YYYY/MM/DD',
            altField: '#published_at',
            timePicker: {
                enabled: true,
                meridiem: {
                    enabled: true
                }
            }

        })




    });
</script>
@endsection
