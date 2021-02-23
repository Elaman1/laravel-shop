@extends('auth.layouts.master')

@section('title', __('main.autorize'))

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h1>@lang('main.autorize')</h1></div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" aria-label="Login">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control"
                                   name="email" value="" required autofocus>

                        </div>
                    </div>
                    @csrf
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">@lang('main.password')</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                @lang('main.login')
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
