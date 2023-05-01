@extends('dashboard.layouts.layout')

    @section('body')
        
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ __('words.dashboard') }}</a></li>
        <li class="breadcrumb-item active">{{ __('words.setting') }}</li>

        <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a href="#" class="btn btn-secondary"><i class="icon-speech"></i></a>
                <a href="{{ route('dashboard.index') }}" class="btn btn-secondary"><i class="icon-graph"></i> {{ __('words.dashboard') }}</a>
                <a href="{{ route('dashboard.settings') }}" class="btn btn-secondary"><i class="icon-settings"></i> {{ __('words.setting') }}</a>
            </div>
        </li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('dashboard.settings.update', ['setting'=>$setting]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('words.setting') }}</strong>
                        </div>
                        <div class="card-block">
                                <div class="form-group col-md-6">
                                    <label for="">{{ __('words.logo') }}</label>
                                    <img src="{{ asset($setting->logo) }}" alt="" style="height: 50px">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">{{ __('words.favicon') }}</label>
                                    <img src="{{ asset($setting->favicon) }}" alt="" style="height: 50px">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">{{ __('words.logo') }}</label>
                                    <input type="file" name="logo" id="logo" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">{{ __('words.favicon') }}</label>
                                    <input type="file" name="favicon" id="favicon" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">{{ __('words.facebooklink') }}</label>
                                    <input type="text" name="facebook" id="facebook" class="form-control" placeholder="{{ __('words.faceholder') }}" value="{{ $setting->facebook }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">{{ __('words.twitterlink') }}</label>
                                    <input type="text" name="twitter" id="twitter" class="form-control" placeholder="{{ __('words.twitterholder') }}" value="{{ $setting->twitter }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">{{ __('words.phone') }}</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="{{ __('words.phoneholder') }}" value="{{ $setting->phone }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">{{ __('words.email') }}</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('words.emailholder') }}" value="{{ $setting->email }}">
                                </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('words.translation') }}</strong>
                        </div>
                        <div class="card-block">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach (config('app.languages') as $key=>$lang)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->index == 0) active @endif" id="home-tab" data-toggle="tab" href="#{{ $key }}" role="tab" aria-controls="home" aria-selected="true">{{ $lang }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                @foreach (config('app.languages') as $key=>$lang)
                                    <div class="tab-pane fade @if($loop->index == 0) show active in @endif" id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="form-group mt-2 col-md-12">
                                            <label for="">{{ __('words.title') }}</label>
                                            <input type="text" name="{{ $key }}[title]" id="title" class="form-control" placeholder="{{ __('words.titleholder') }}" value="{{ $setting->translate($key)->title }}">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="">{{ __('words.email') }}</label>
                                            <textarea name="{{ $key }}[content]" id="content" class="form-control" cols="30" rows="10"> {{ $setting->translate($key)->content }}</textarea>
                                        </div>

                                        <div class="form-group mt-2 col-md-12">
                                            <label for="">{{ __('words.address') }}</label>
                                            <input type="text" name="{{ $key }}[address]" id="address" class="form-control" placeholder="{{ __('words.addressholder') }}" value="{{ $setting->translate($key)->address }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> {{ __('words.save') }}</button>
                        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> {{ __('words.reset') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection