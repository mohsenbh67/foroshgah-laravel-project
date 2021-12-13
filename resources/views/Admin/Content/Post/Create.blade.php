@extends('Admin.layouts.master')

@section('head-tag')
<title>ایجاد پست جدید</title>
<link rel="stylesheet" href="{{ asset('Admin-assets/jalalidatepicker/persian-datepicker.min.css') }}">
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش محتوا </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.content.post.index') }}"> پست ها </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">ایجاد پست جدید  </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ایجاد پست جدید
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.content.post.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="{{ route('admin.content.post.store') }}" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="title">عنوان پست</label>
                                <input class="form-control form-control-sm" type="text" name="title" id="title" value="{{ old('title') }}">
                            </div>
                            @error('title')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="category_id">انتخاب دسته</label>
                                <select class="form-control form-control-sm" name="category_id" id="category_id" >
                                    <option value="">-- دسته را انتخاب کنید--</option>
                                    @foreach ($postCategories as $postCategory)
                                    <option value="{{ $postCategory->id }}" @if (old('category_id') == $postCategory->id) selected @endif>{{ $postCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="image">تصویر</label>
                                <input type="file" class="form-control form-control-sm" name="image" id="image">
                            </div>
                            @error('image')
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
                                    <input class="form-control form-control-sm" type="text" name="published_at" id="published_at" style="display: none">
                                    <input class="form-control form-control-sm" type="text" id="published_at_view">
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
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="commentable">امکان درج کامنت</label>
                                    <select class="form-control form-control-sm" name="commentable" id="commentable">
                                        <option value="0" @if (old('commentable') == 0) selected @endif> -- غیرفعال-- </option>
                                        <option value="1" @if (old('commentable') == 1) selected @endif> -- فعال-- </option>
                                    </select>
                                </div>
                                @error('commentable')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                            </section>
                            <section class="col-12">
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
                                    <label for="summary">خلاصه</label>
                                    <textarea name="summary" id="summary" rows="10" class="form-control form-control-sm">{{ old('summary') }}</textarea>
                                </div>
                                @error('summary')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                            </section>
                            <section class="col-12">
                                <div class="form-group">
                                    <label for="body">متن پست</label>
                                    <textarea name="body" id="body" rows="10" class="form-control form-control-sm">{{ old('body') }}</textarea>
                                </div>
                                @error('body')
                                <span class="alert_required text-danger p-1" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
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
<script src="{{ asset('Admin-assets/jalalidatepicker/persian-date.min.js') }}"></script>
<script src="{{ asset('Admin-assets/jalalidatepicker/persian-datepicker.min.js') }}"></script>
<script>
    CKEDITOR.replace('body');
    CKEDITOR.replace('summary');
</script>

<script>
        $(document).ready(function(){
            $('#published_at_view').persianDatepicker({
                format: 'YYYY/MM/DD',
                altField: '#published_at'

            })




        });

</script>


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
