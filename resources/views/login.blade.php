@extends('layouts.layout')
@section('title',"Trang đăng nhập")

@section('contents')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh; background: var(--background-color);">
    <div class="card p-4" style="background: var(--surface-color); border-radius: 16px; box-shadow: 0 4px 30px rgba(0,0,0,0.1); min-width: 350px;">
        <h2 class="mb-4 text-center" style="color: var(--heading-color);">Đăng nhập</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label" style="color: var(--default-color);">Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus style="background: var(--background-color); color: var(--default-color); border: 1px solid var(--accent-color);">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="color: var(--default-color);">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" required style="background: var(--background-color); color: var(--default-color); border: 1px solid var(--accent-color);">
            </div>
            <button type="submit" class="btn w-100" style="background: var(--accent-color); color: var(--contrast-color); font-weight: 600; border-radius: 8px;">Đăng nhập</button>
        </form>
        <div class="mt-3 text-center">
            <a href="{{ route('register') }}" style="color: var(--accent-color);">Chưa có tài khoản? Đăng ký</a>
        </div>
    </div>
</div>
@endsection 