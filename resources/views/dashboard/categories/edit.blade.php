@extends('dashboard.layouts.layout')

@section('body')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{__('words.dashboard')}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('dashboard.category.index') }}">{{ __('words.categories') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('words.edit category') }}</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                <a class="btn btn-secondary" href="{{ route('dashboard.index') }}"><i class="icon-speedometer"></i> &nbsp;{{ __('words.dashboard') }}</a>
                <a class="btn btn-secondary" href="{{ route('dashboard.category.index') }}"><i class="fa fa-tags"></i> &nbsp;{{ __('words.categories') }}</a>
                <a class="btn btn-secondary" href="#"><i class="fa fa-tag"></i> &nbsp;{{ $category->title }}</a>
            </div>
        </li>
    </ol>


    <div class="container-fluid">

        <div class="animated fadeIn">
            <form action="{{ Route('dashboard.category.update', $category) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    @if ($errors->any())
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
                            <strong>{{ __('words.categories') }}</strong>
                        </div>
                        <div class="card-block">


                            <img src="{{ asset($category->image) }}" alt="" height="50px">

                            <div class="form-group col-md-12">
                                <label>{{ __('words.category image') }}</label>
                                <input type="file" name="image" class="form-control" placeholder="{{ __('words.category image') }}"
                                   >
                            </div>
                            <div class="form-group col-md-12">
                                <label>{{ __('words.status') }}</label>
                                <select name="parent" id="" class="form-control">
                                  <option value="0" @if ($category->parent == 0 ||$category->parent == null)
                                      selected
                                  @endif>قسم رئيسى</option>
                                  @foreach ($categories as $item)
                                    @if ($item->id != $category->id)
                                      <option @if ($category->parent == $item->id)
                                          selected
                                      @endif value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endif
                                  @endforeach
                                </select>
                               
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
                                                <input type="text" name="{{ $key }}[title]" id="title" class="form-control" placeholder="{{ __('words.titleholder') }}" value="{{ $category->translate($key)->title }}">
                                            </div>
    
                                            <div class="form-group col-md-12">
                                                <label for="">{{ __('words.content') }}</label>
                                                <textarea name="{{ $key }}[content]" id="content" class="form-control" cols="30" rows="10"> {{ $category->translate($key)->content }}</textarea>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>




                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                {{ __('words.save') }}</button>
                      
                        </div>



                    </div>
            </form>
        </div>
    </div>
@endsection