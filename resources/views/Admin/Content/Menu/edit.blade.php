@extends('Admin.layouts.master')

@section('head-tag')
<title>ویرایش منو</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}"> خانه </a></li>
      <li class="breadcrumb-item font-size-12">  بخش محتوا </li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.content.menu.index') }}"> منوها </a> </li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش منو </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                    ویرایش منو
                </h4>

            </section>
            <section class="d-flex justify-content-between align-item-center mt-4 mb-3">
                <a href="{{ route('admin.content.menu.index') }}" class="btn btn-info btn-sm"> بازگشت</a>

            </section>
            <section>
                <form action="{{ route('admin.content.menu.update', $menu->id) }}" method="POST" id="form">
                    @csrf
                    @method('PUT')

                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="name">نام منو</label>
                                <input class="form-control form-control-sm" type="text" id="name" name="name" value="{{ old('name', $menu->name) }}">
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
                                    @foreach ($parent_menus as $parent_menu)
                                    <option value="{{ $parent_menu->id }}" @if (old('parent_id', $menu->parent_id) == $parent_menu->id) selected @endif>{{ $parent_menu->name }}</option>
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
                                <input class="form-control form-control-sm" type="text" name="url" id="url" value="{{ old('url',$menu->url) }}">
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
                                    <option value="0" @if (old('status',$menu->status) == 0) selected @endif> -- غیرفعال-- </option>
                                    <option value="1" @if (old('status',$menu->status) == 1) selected @endif> -- فعال-- </option>
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
