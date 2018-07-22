<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            @isset($sidebar_menus)
            @forelse($sidebar_menus as $menu)
            @isset($menu['header'])
            <li class="header">{{ $menu['header'] }}</li>
            @endisset
            <li class="treeview">
                @isset($menu['link'])
                <a href="{{ url($menu['link']) }}">
                @else
                <a href="#">
                @endisset
                    @isset($menu['icon'])
                    <i class="fa {{ $menu['icon'] }}"></i>
                    @endisset
                    @isset($menu['title'])
                    <span>{{ $menu['title'] }}</span>
                    @else
                    <span>no title</span>
                    @endisset
                    @isset($menu['sub_menus'])
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    @endisset
                </a>
                @isset($menu['sub_menus'])
                <ul class="treeview-menu">
                    @forelse($menu['sub_menus'] as $sub_menu)
                    <li>
                        @isset($sub_menu['link'])
                        <a href="{{ url( $sub_menu['link']) }}">
                        @else
                        <a href="#">
                        @endisset
                            @isset($sub_menu['icon'])
                            <i class="fa {{ $sub_menu['icon'] }}"></i>
                            @else
                            <i class="fa fa-square-o"></i>
                            @endisset
                            @isset($sub_menu['title'])
                            {{ $sub_menu['title'] }}
                            @else
                            no title
                            @endisset
                        </a>
                    </li>
                    @empty
                    @endforelse
                </ul>
                @endisset
            </li>
            @empty
            @endforelse
            @endisset
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
