@extends('layouts.layout')

@section('contents')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh; background: var(--background-color); margin-top: 2em;">
    <div class="card p-4" style="background: var(--surface-color); border-radius: 16px; box-shadow: 0 4px 30px rgba(0,0,0,0.1); min-width: 350px;">
        <h2 class="mb-4 text-center" style="color: var(--heading-color);">Đăng ký</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" style="color: var(--default-color);">Tên</label>
                <input type="text" class="form-control" id="name" name="name" required autofocus style="background: var(--background-color); color: var(--default-color); border: 1px solid var(--accent-color);">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="color: var(--default-color);">Email</label>
                <input type="email" class="form-control" id="email" name="email" required style="background: var(--background-color); color: var(--default-color); border: 1px solid var(--accent-color);">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="color: var(--default-color);">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" required style="background: var(--background-color); color: var(--default-color); border: 1px solid var(--accent-color);">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label" style="color: var(--default-color);">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required style="background: var(--background-color); color: var(--default-color); border: 1px solid var(--accent-color);">
            </div>
            <button type="submit" class="btn w-100" style="background: var(--accent-color); color: var(--contrast-color); font-weight: 600; border-radius: 8px;">Đăng ký</button>
        </form>
        <div class="mt-3 text-center">
            <a href="{{ route('login') }}" style="color: var(--accent-color);">Đã có tài khoản? Đăng nhập</a>
        </div>
    </div>
</div>
@endsection 