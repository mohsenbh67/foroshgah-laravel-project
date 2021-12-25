@extends('Admin.layouts.master')

@section('head-tag')
<title>ویرایش فایل</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  اطلاع رسانی </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.notify.email-file.index',$file->email->id) }}"> فایل های ایمیل </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش فایل </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                  ویرایش فایل
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.notify.email-file.index', $file->email->id) }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="{{ route('admin.notify.email-file.update', $file->id,) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="file">تصویر</label>
                                <input class="form-control form-control-sm" type="file" name="file" id="file">
                            </div>
                            @error('file')
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
                                    <option value="0" @if (old('status', $file->status) == 0) selected @endif> -- غیرفعال-- </option>
                                    <option value="1" @if (old('status', $file->status) == 1) selected @endif> -- فعال-- </option>
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

