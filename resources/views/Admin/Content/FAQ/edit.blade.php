@extends('Admin.layouts.master')

@section('head-tag')
<title>ویرایش سوال</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش محتوا </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.content.faq.index') }}"> سوالات متداول </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش سوال </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ویرایش سوال
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.content.faq.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="{{ route('admin.content.faq.update', $faq->id) }}" method="POST" id="form">
                    @csrf
                    @method('PUT')

                    <section class="row">
                        <section class="col-12">
                            <div class="form-group">
                                <label for="question">پرسش</label>
                                <input class="form-control form-control-sm" type="text" name="question" id="question" value="{{ old('question', $faq->question) }}">
                            </div>
                            @error('question')
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
                                <input class="form-control form-control-sm" type="hidden" name="tags" id="tags" value="{{ old('tags',$faq->tags) }}">
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
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="status">وضعیت</label>
                                <select class="form-control form-control-sm" name="status" id="status">
                                    <option value="0" @if (old('status',$faq->status) == 0) selected @endif> -- غیرفعال-- </option>
                                    <option value="1" @if (old('status',$faq->status) == 1) selected @endif> -- فعال-- </option>
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
                                <label for="answer">پاسخ</label>
                                <textarea name="answer" id="answer"  rows="7" class="form-control form-control-sm">{{ old('answer',$faq->answer) }}</textarea>
                            </div>
                            @error('answer')
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
    CKEDITOR.replace('answer');
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
