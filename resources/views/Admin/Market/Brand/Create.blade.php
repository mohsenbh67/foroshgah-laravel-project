@extends('Admin.layouts.master')

@section('head-tag')
<title>ایجاد برند جدید</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش فروش </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.market.brand.index') }}"> برند </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">ایجاد برند  </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ایجاد برند
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.market.brand.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="{{ route('admin.market.brand.store') }}" method="POST" id="form" enctype="multipart/form-data">
                    @csrf
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="persian_name">نام فارسی</label>
                                <input class="form-control form-control-sm" type="text" id="persian_name" name="persian_name" value="{{ old('persian_name') }}">
                            </div>
                            @error('persian_name')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="original_name">نام اوریجینال</label>
                                <input class="form-control form-control-sm" type="text" id="original_name" name="original_name" value="{{ old('original_name') }}">
                            </div>
                            @error('original_name')
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
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="tags">تگ ها</label>
                                <input class="form-control form-control-sm" type="hidden" name="tags" id="tags" value="{{ old('tags') }}">
                                <select name="" class="select2 form-control form-control-sm" id="select_tags" multiple></select>
                            </div>
                            @error('tags')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12">
                            <div class="form-group">
                                <label for="logo">لوگو</label>
                                <input class="form-control form-control-sm" type="file" name="logo" id="logo">
                            </div>
                            @error('logo')
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
<script>
    $(document).ready(function(){
        var tags_input = $('#tags');
        var select_tags = $('#select_tags');
        var default_tags = tags_input.val();
        var default_data = null;

        if(tags_input.val() !==null && tags_input.val().length >0){
            default_data = default_tags.split(',');
        }

        select_tags.select2({
            placeholder: 'لطفا تگ های خود را وارد نمایید',
            tags: true,
            data: default_data
        });

        select_tags.children('option').attr('selected', true).trigger('change');


        $('#form').submit(function(event){
            if(select_tags.val() !==null && select_tags.val().length > 0){
                var selectedSource = select_tags.val().join(',');
                tags_input.val(selectedSource)
            }

        });
    })
</script>

@endsection
