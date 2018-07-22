@extends('admin-lte.app')

@php
$setting_menus = [
    [
        'link' => '#',
        'icon' => 'fa-tags',
        'title' => 'スタッフ分類',
    ],
];
$breadcrumbs = [
    [
        'link' => '#',
        'icon' => 'fa-dashboard',
        'title' => 'ダッシュボード',
    ],
    [
        'link' => '#',
        'icon' => 'fa-calendar',
        'title' => 'カレンダー',
    ],
];
$sidebar_menus = [
    [
        'header' => 'メインメニュー',
        'link' => '#',
        'icon' => 'fa-calendar',
        'title' => 'カレンダー',
        'sub_menus' => [
            [
                'link' => '#',
                'title' => '一覧',
            ]
        ]
    ],
    [
        'link' => '#',
        'icon' => 'fa-users',
        'title' => 'スタッフ',
        'sub_menus' => [
            [
                'link' => '#',
                'title' => '一覧',
            ]
        ]
    ],
];
$page_title = 'Blank Page';
@endphp

@section('content')
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
