@extends('Admin.layouts.master')

@section('head-tag')
<title>نمایش نظرات</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش محتوا </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.content.comment.index') }}"> نظرات </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">نمایش نظرات  </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    نمایش نظرات
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.content.comment.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section class="card mb-3">
                <section class="card-header text-white bg-custom-yellow">
                    {{ $comment->user->full_name }} - {{ $comment->user->id }}
                </section>
                <section class="card-body">
                    <h5 class="card-title">کد پست:{{ $comment->commentable->id }}  مشخصات: {{ $comment->commentable->title }}</h5>
                    <p class="card-text">{{ $comment->body }}</p>
                </section>

            </section>


            @if ($comment->parent_id == null)
            <section>
                <form action="{{ route('admin.content.comment.answer', $comment->id) }}" method="POST">
                    @csrf
                    <section class="row">
                        <section class="col-12 ">
                            <div class="form-group">
                                <label for="body">پاسخ ادمین</label>
                                <textarea name="body" id="body" rows="4" class="form-control form-control-sm"></textarea>
                            </div>
                        </section>
                    </section>
                    <section class="col-12 text-center">
                        <button class="btn btn-primary btn-sm">
                            ثبت
                        </button>
                    </section>

                </form>
            </section>
            @endif


        </section>
    </section>
</section>



@endsection
