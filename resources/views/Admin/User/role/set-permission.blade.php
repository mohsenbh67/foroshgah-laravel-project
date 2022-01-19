@extends('admin.layouts.master')

@section('head-tag')
<title>دسترسی های نقش</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href=""{{ route('admin.home') }}">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش کاربران</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.user.role.index') }}">نقش ها</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> دسترسی های نقش</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  دسترسی های نقش
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.user.role.index') }}" class="btn btn-info btn-sm">بازگشت</a>
            </section>

            <section>
                <form action="{{ route('admin.user.role.permission-update', $role->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <section class="row">
                        <section class="col-12">
                            <section class="row mt-3 py-3">

                                <section class="col-12 col-md-5">
                                    <div class="form_group">
                                        <label for=""><b class="h5"> نام نقش </b></label>
                                        <section>
                                            {{ $role->name }}
                                        </section>
                                    </div>
                                </section>
                                <section class="col-12 col-md-5">
                                    <div class="form_group">
                                        <label for=""><b class="h5"> توضیح نقش </b></label>
                                        <section>
                                            {{ $role->description }}
                                        </section>
                                    </div>
                                </section>




                                @php
                                    $rolePermissionArray = $role->permissions->pluck('id')->toArray();
                                @endphp

                                @foreach ($permissions as $key => $permission)


                                <section class="col-md-3 mt-3 py-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission->id }}" id="{{ $permission->id }}"

                                        @if (in_array($permission->id, $rolePermissionArray))
                                        checked
                                        @endif
                                        />
                                        <label for="{{ $permission->id }}" class="form-check-label mr-3 mt-1">{{ $permission->name }}</label>
                                    </div>
                                    <div class="mt-2">
                                        @error('permissions.' . $key)
                                        <span class="alert_required text-danger p-1" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                    </div>
                                </section>

                                @endforeach




                            </section>
                        </section>

                        <section class="col-12 col-md-2">
                            <button class="btn btn-primary btn-sm mt-md-4">ثبت</button>
                        </section>

                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection
