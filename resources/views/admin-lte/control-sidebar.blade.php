<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-eye-tab" data-toggle="tab"><i class="fa fa-eye"></i> {{ __('Skin') }}</a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i> {{ __('Settings') }}</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Skin tab content -->
        <div class="tab-pane" id="control-sidebar-eye-tab">
            <h3 class="control-sidebar-heading">{{ __('Select Skins') }}</h3>
            <ul id="skins-list" class="control-sidebar-menu">
                <li><a href="#" data-skin="skin-blue"><i class="fa fa-circle text-aqua"></i> <span>{{ __('blue & dark') }}</span></a></li>
                <li><a href="#" data-skin="skin-blue-light"><i class="fa fa-circle text-aqua"></i> <span>{{ __('blue & light') }}</span></a></li>
                <li><a href="#" data-skin="skin-yellow"><i class="fa fa-circle text-yellow"></i> <span>{{ __('yellow & dark') }}</span></a></li>
                <li><a href="#" data-skin="skin-yellow-light"><i class="fa fa-circle text-yellow"></i> <span>{{ __('yellow & light') }}</span></a></li>
                <li><a href="#" data-skin="skin-green"><i class="fa fa-circle text-green"></i> <span>{{ __('green & dark') }}</span></a></li>
                <li><a href="#" data-skin="skin-green-light"><i class="fa fa-circle text-green"></i> <span>{{ __('green & light') }}</span></a></li>
                <li><a href="#" data-skin="skin-purple"><i class="fa fa-circle text-purple"></i> <span>{{ __('purple & dark') }}</span></a></li>
                <li><a href="#" data-skin="skin-purple-light"><i class="fa fa-circle text-purple"></i> <span>{{ __('purple & light') }}</span></a></li>
                <li><a href="#" data-skin="skin-red"><i class="fa fa-circle text-red"></i> <span>{{ __('red & dark') }}</span></a></li>
                <li><a href="#" data-skin="skin-red-light"><i class="fa fa-circle text-red"></i> <span>{{ __('red & light') }}</span></a></li>
                <li><a href="#" data-skin="skin-black"><i class="fa fa-circle text-black"></i> <span>{{ __('white & dark') }}</span></a></li>
                <li><a href="#" data-skin="skin-black-light"><i class="fa fa-circle text-black"></i> <span>{{ __('white & light') }}</span></a></li>
            </ul>
        </div>
        <!-- Setting tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <h3 class="control-sidebar-heading">{{ __('Settings') }}</h3>
            <ul class="control-sidebar-menu">
                @forelse($setting_menus as $menu)
                <li>
                    @isset($menu['link'])
                    <a href="{{ url($menu['link']) }}">
                    @else
                    <a href="#">
                    @endisset

                        @isset($menu['icon'])
                        <i class="fa {{ $menu['icon'] }} text-black"></i>
                        @else
                        <i class="fa fa-square text-black"></i>
                        @endisset

                        @isset($menu['title'])
                        &nbsp;<span>{{ $menu['title'] }}</span>
                        @else
                        &nbsp;<span>no title</span>
                        @endisset

                    </a>
                </li>
                @empty
                @endforelse
            </ul>
        </div>
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
