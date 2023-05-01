<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <!DOCTYPE html>
 <html lang="IR-fa" dir="rtl">
 
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="{{ $setting->translate(app()->getLocale())->content }}">
     <meta name="keyword" content="{{ $setting->translate(app()->getLocale())->title }}">
     <link rel="shortcut icon" href="{{ asset($setting->favicon) }}"> >
     <title>{{ $setting->translate(app()->getLocale())->title }}</title>
     <!-- Icons -->
     <link href="{{ asset('adminassets/css/font-awesome.min.css') }}" rel="stylesheet">
     <link href="{{ asset('adminassets/css/simple-line-icons.css') }}" rel="stylesheet">
     <!-- Main styles for this application -->
     <link href="{{ asset('adminassets/dest/style.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
 </head>
 
 <body class="navbar-fixed sidebar-nav fixed-nav">
     @include('dashboard.layouts.header')

     @include('dashboard.layouts.sidebar')
     
     <!-- Main content -->
     <main class="main">
        @yield('body')
     </main>
 
     <aside class="aside-menu">
         <ul class="nav nav-tabs" role="tablist">
             <li class="nav-item">
                 <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
             </li>
         </ul>
         <!-- Tab panes -->
         <div class="tab-content">
             <div class="tab-pane active" id="timeline" role="tabpanel">
                 <div class="callout m-a-0 p-y-h text-muted text-xs-center bg-faded text-uppercase">
                     <small><b>Today</b>
                     </small>
                 </div>
                 <hr class="transparent m-x-1 m-y-0">
                 <div class="callout callout-warning m-a-0 p-y-1">
                     <div class="avatar pull-xs-right">
                         <img src="{{ asset('adminassets/img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                     </div>
                     <div>Meeting with
                         <strong>Lucas</strong>
                     </div>
                     <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                     <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                 </div>
                 <hr class="m-x-1 m-y-0">
                 <div class="callout callout-info m-a-0 p-y-1">
                     <div class="avatar pull-xs-right">
                         <img src="{{ asset('adminassets/img/avatars/4.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                     </div>
                     <div>Skype with
                         <strong>Megan</strong>
                     </div>
                     <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                     <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line</small>
                 </div>
                 <hr class="transparent m-x-1 m-y-0">
                 <div class="callout m-a-0 p-y-h text-muted text-xs-center bg-faded text-uppercase">
                     <small><b>Tomorrow</b>
                     </small>
                 </div>
                 <hr class="transparent m-x-1 m-y-0">
                 <div class="callout callout-danger m-a-0 p-y-1">
                     <div>New UI Project -
                         <strong>deadline</strong>
                     </div>
                     <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                     <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                     <div class="avatars-stack m-t-h">
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/2.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/3.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/4.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/5.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                     </div>
                 </div>
                 <hr class="m-x-1 m-y-0">
                 <div class="callout callout-success m-a-0 p-y-1">
                     <div>
                         <strong>#10 Startups.Garden</strong>Meetup</div>
                     <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                     <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                 </div>
                 <hr class="m-x-1 m-y-0">
                 <div class="callout callout-primary m-a-0 p-y-1">
                     <div>
                         <strong>Team meeting</strong>
                     </div>
                     <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                     <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                     <div class="avatars-stack m-t-h">
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/2.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/3.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/4.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/5.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                         <div class="avatar avatar-xs">
                             <img src="{{ asset('adminassets/img/avatars/8.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                         </div>
                     </div>
                 </div>
                 <hr class="m-x-1 m-y-0">
             </div>
             <div class="tab-pane p-a-1" id="messages" role="tabpanel">
                 <div class="message">
                     <div class="p-y-1 p-b-3 m-r-1 pull-left">
                         <div class="avatar">
                             <img src="{{ asset('adminassets/img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                             <span class="avatar-status tag-success"></span>
                         </div>
                     </div>
                     <div>
                         <small class="text-muted">Lukasz Holeczek</small>
                         <small class="text-muted pull-left m-t-q">1:52 PM</small>
                     </div>
                     <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                     <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                 </div>
                 <hr>
                 <div class="message">
                     <div class="p-y-1 p-b-3 m-r-1 pull-left">
                         <div class="avatar">
                             <img src="{{ asset('adminassets/img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                             <span class="avatar-status tag-success"></span>
                         </div>
                     </div>
                     <div>
                         <small class="text-muted">Lukasz Holeczek</small>
                         <small class="text-muted pull-left m-t-q">1:52 PM</small>
                     </div>
                     <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                     <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                 </div>
                 <hr>
                 <div class="message">
                     <div class="p-y-1 p-b-3 m-r-1 pull-left">
                         <div class="avatar">
                             <img src="{{ asset('adminassets/img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                             <span class="avatar-status tag-success"></span>
                         </div>
                     </div>
                     <div>
                         <small class="text-muted">Lukasz Holeczek</small>
                         <small class="text-muted pull-right m-t-q">1:52 PM</small>
                     </div>
                     <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                     <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                 </div>
                 <hr>
                 <div class="message">
                     <div class="p-y-1 p-b-3 m-r-1 pull-left">
                         <div class="avatar">
                             <img src="{{ asset('adminassets/img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                             <span class="avatar-status tag-success"></span>
                         </div>
                     </div>
                     <div>
                         <small class="text-muted">Lukasz Holeczek</small>
                         <small class="text-muted pull-right m-t-q">1:52 PM</small>
                     </div>
                     <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                     <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                 </div>
                 <hr>
                 <div class="message">
                     <div class="p-y-1 p-b-3 m-r-1 pull-left">
                         <div class="avatar">
                             <img src="{{ asset('adminassets/img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                             <span class="avatar-status tag-success"></span>
                         </div>
                     </div>
                     <div>
                         <small class="text-muted">Lukasz Holeczek</small>
                         <small class="text-muted pull-right m-t-q">1:52 PM</small>
                     </div>
                     <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                     <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                 </div>
             </div>
             <div class="tab-pane p-a-1" id="settings" role="tabpanel">
                 <h6>Settings</h6>
                 <div class="aside-options">
                     <div class="clearfix m-t-2">
                         <small><b>Option 1</b>
                         </small>
                         <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                             <input type="checkbox" class="switch-input" checked>
                             <span class="switch-label" data-on="On" data-off="Off"></span>
                             <span class="switch-handle"></span>
                         </label>
                     </div>
                     <div>
                         <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                     </div>
                 </div>
                 <div class="aside-options">
                     <div class="clearfix m-t-1">
                         <small><b>Option 2</b>
                         </small>
                         <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                             <input type="checkbox" class="switch-input">
                             <span class="switch-label" data-on="On" data-off="Off"></span>
                             <span class="switch-handle"></span>
                         </label>
                     </div>
                     <div>
                         <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                     </div>
                 </div>
                 <div class="aside-options">
                     <div class="clearfix m-t-1">
                         <small><b>Option 3</b>
                         </small>
                         <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                             <input type="checkbox" class="switch-input">
                             <span class="switch-label" data-on="On" data-off="Off"></span>
                             <span class="switch-handle"></span>
                         </label>
                     </div>
                 </div>
                 <div class="aside-options">
                     <div class="clearfix m-t-1">
                         <small><b>Option 4</b>
                         </small>
                         <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                             <input type="checkbox" class="switch-input" checked>
                             <span class="switch-label" data-on="On" data-off="Off"></span>
                             <span class="switch-handle"></span>
                         </label>
                     </div>
                 </div>
                 <hr>
                 <h6>System Utilization</h6>
                 <div class="text-uppercase m-b-q m-t-2">
                     <small><b>CPU Usage</b>
                     </small>
                 </div>
                 <progress class="progress progress-xs progress-info m-a-0" value="25" max="100">25%</progress>
                 <small class="text-muted">348 Processes. 1/4 Cores.</small>
                 <div class="text-uppercase m-b-q m-t-h">
                     <small><b>Memory Usage</b>
                     </small>
                 </div>
                 <progress class="progress progress-xs progress-warning m-a-0" value="70" max="100">70%</progress>
                 <small class="text-muted">11444GB/16384MB</small>
                 <div class="text-uppercase m-b-q m-t-h">
                     <small><b>SSD 1 Usage</b>
                     </small>
                 </div>
                 <progress class="progress progress-xs progress-danger m-a-0" value="95" max="100">95%</progress>
                 <small class="text-muted">243GB/256GB</small>
                 <div class="text-uppercase m-b-q m-t-h">
                     <small><b>SSD 2 Usage</b>
                     </small>
                 </div>
                 <progress class="progress progress-xs progress-success m-a-0" value="10" max="100">10%</progress>
                 <small class="text-muted">25GB/256GB</small>
             </div>
         </div>
     </aside>
 
     @include('dashboard.layouts.footer')
     <!-- Bootstrap and necessary plugins -->
     <script src="{{ asset('adminassets/js/libs/jquery.min.js') }}"></script>
     <script src="{{ asset('adminassets/js/libs/tether.min.js') }}"></script>
     <script src="{{ asset('adminassets/js/libs/bootstrap.min.js') }}"></script>
     <script src="{{ asset('adminassets/js/libs/pace.min.js') }}"></script>
 
     <!-- Plugins and scripts required by all views -->
     <script src="{{ asset('adminassets/js/libs/Chart.min.js') }}"></script>
 
     <!-- CoreUI main scripts -->
 
     <script src="{{ asset('adminassets/js/app.js') }}"></script>
 
     <!-- Plugins and scripts required by this views -->
     <!-- Custom scripts required by this view -->
     <script src="{{ asset('adminassets/js/views/main.js') }}"></script>
 
     <!-- Grunt watch plugin -->
     <script src="//localhost:35729/livereload.js"></script>

     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
     <script>
        var allEditors = document.querySelectorAll("#editor");
        for (var i = 0; i < allEditors.length; i++) {
            ClassicEditor
                    .create(allEditors[i], {
                        alignment: {
                            options: ['left', 'right', 'center', 'justify']
                        },
                    });
        }

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
     </script>

     @stack('javascripts')
 </body>
 
 </html>
 