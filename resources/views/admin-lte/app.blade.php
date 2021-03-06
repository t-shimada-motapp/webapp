<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @hasSection('sub_title')
  <title>{{ config('app.name', 'Laravel') }} | @yield('sub_title')</title>
  @else
  <title>{{ config('app.name', 'Laravel') }}</title>
  @endif
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition {{ Auth::user()->skin }} sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    @include('admin-lte.header')
    @include('admin-lte.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          @isset($page_title)
          <h1>{!! $page_title !!}</h1>
          @else
          <h1>&nbsp;</h1>
          @endisset
          <ol class="breadcrumb">
            @isset($breadcrumbs)
            @forelse($breadcrumbs as $breadcrumb)
            <li>
                @isset($breadcrumb['link'])
                <a href="{{ url($breadcrumb['link']) }}">
                @else
                <a href="#">
                @endisset
                    @isset($breadcrumb['icon'])
                    <i class="fa {{ $breadcrumb['icon'] }}"></i>
                    @endisset
                    @isset($breadcrumb['title'])
                    &nbsp;{{ $breadcrumb['title'] }}
                    @else
                    &nbsp;
                    @endisset
                </a>
            </li>
            @empty
            @endforelse
            @isset($page_title)
            <li class="active">{!! $page_title !!}</li>
            @endisset
            @endisset
          </ol>
        </section>

        @yield('content')

    </div>
    <!-- /.content-wrapper -->
    @include('admin-lte.footer')
    @include('admin-lte.control-sidebar')
</div>
<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes
<script src="{{ asset('bower_components/admin-lte/dist/js/demo.js') }}"></script>
-->
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree();
    @if (Auth::user()->skin !== null)
    var currentSkin = '{{ Auth::user()->skin }}';
    @else
    var currentSkin = 'skin-blue';
    @endif
    $('#skins-list [data-skin]').click(function (e) {
      e.preventDefault();
      var skinName = $(this).data('skin');
      $.ajax({
        url: `{{ url('/api/user') }}/{{ Auth::user()->id }}`,
        type: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        data: {
          skin: skinName,
          _method: 'PUT',
        },
      }).then((...args) => {
        const [data, textStatus, jqXHR] = args;
        $('body').removeClass(currentSkin);
        $('body').addClass(skinName);
        currentSkin = skinName;
      }).catch((...args) => {
        const [jqXHR, textStatus, errorThrown] = args;
        console.log('oops')
        console.log(textStatus, errorThrown);
      });
    })
  })
</script>
</body>
</html>
