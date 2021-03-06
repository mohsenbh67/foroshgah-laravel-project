@extends('Admin.layouts.master')

@section('head-tag')
<title>ایجاد منوی جدید</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش محتوا </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.content.menu.index') }}"> منوها </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد منو </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ایجاد منو
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.content.menu.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="{{ route('admin.content.menu.store') }}" method="POST" id="form">
                    @csrf
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="name">نام منو</label>
                                <input class="form-control form-control-sm" type="text" id="name" name="name" value="{{ old('name') }}">
                            </div>
                            @error('name')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="parent_id">منو والد</label>
                                <select class="form-control form-control-sm" name="parent_id" id="parent_id">
                                    <option value="">-- منوی اصلی--</option>
                                    @foreach ($menus as $menu)
                                    <option value="{{ $menu->id }}" @if (old('parent_id') == $menu->id) selected @endif>{{ $menu->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('parent_id')
                            <span class="alert_required text-danger p-1" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="url">ادرس URL</label>
                                <input class="form-control form-control-sm" type="text" name="url" id="url" value="{{ old('url') }}">
                            </div>
                            @error('url')
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
