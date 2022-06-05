@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('fullName*') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address*') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password*') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password*') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- living place -->
                        <div class="row mb-3">
                            <label for="living_place" class="col-md-4 col-form-label text-md-end">{{ __('Linving Place*') }}</label>
                            <div class="col-md-6">
                            <select name="living_place" style="width: 10vw;text-align: center;" id="">
                                   <option value="hawler">hawler</option>
                                   <option value="slemani">slemani</option> 
                                   <option value="duhok">duhok</option>
                                   <option value="halabja">halabja</option> 
                               </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('phone*') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('gender*') }}</label>
                            <div class="col-md-6">
                               <select name="gender" style="width: 10vw;text-align: center;" id="">
                                   <option value="male">male</option>
                                   <option value="female">female</option> 
                               </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="uni" class="col-md-4 col-form-label text-md-end">{{ __('uni*') }}</label>
                            <div class="col-md-6">
                                <input id="uni" type="text" class="form-control" name="uni" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bio" class="col-md-4 col-form-label text-md-end">{{ __('bio*') }}</label>
                            <div class="col-md-6">
                                <input id="bio" type="text" class="form-control" name="bio" required>
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="profission" class="col-md-4 col-form-label text-md-end">{{ __('profission*') }}</label>
                            <div class="col-md-6">
                                <input id="profission" type="text" class="form-control" name="profission" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('birthdate*') }}</label>
                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control" name="birthdate" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="img" class="col-md-4 col-form-label text-md-end">{{ __('upload image') }}</label>
                            <div class="col-md-6">
                                <input id="img" type="file" class="form-control" name="img" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lang" class="col-md-4 col-form-label text-md-end">{{ __('lang*') }}</label>
                            <div class="col-md-6">
                                <input id="lang" type="text" class="form-control" name="lang" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="skills" class="col-md-4 col-form-label text-md-end">{{ __('skills*') }}</label>
                            <div class="col-md-6">
                                <input id="skills" type="text" class="form-control" name="skills" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="activity" class="col-md-4 col-form-label text-md-end">{{ __('activity*') }}</label>
                            <div class="col-md-6">
                                <input id="activity" type="text" class="form-control" name="activity" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="linkedIn_acc" class="col-md-4 col-form-label text-md-end">{{ __('linkedIn_acc') }}</label>
                            <div class="col-md-6">
                                <input id="linkedIn_acc" type="text" class="form-control" name="linkedIn_acc">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="github_link" class="col-md-4 col-form-label text-md-end">{{ __('github_link') }}</label>
                            <div class="col-md-6">
                                <input id="github_link" type="text" class="form-control" name="github_link">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sof_acc" class="col-md-4 col-form-label text-md-end">{{ __('sof_acc') }}</label>
                            <div class="col-md-6">
                                <input id="sof_acc" type="text" class="form-control" name="sof_acc">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
