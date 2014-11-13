<div class="sidebar-back"></div>
<div class="sidebar-content">
    <div class="nav-brand">
        <a class="main-brand" href="{{ URL::route('students') }}">
            {{ HTML::image('img/logos/logo_sidebar_top.png', '', array('id' => 'tmip-sidebar-logo')) }}
        </a>
    </div>

    <ul class="main-menu">
    @foreach($menu_list as $top_level_menu_list)

        @if($top_level_menu_list->getIsExpand())
        <li class="expanded">
        @elseif($top_level_menu_list->getIsActive())
        <li class="active">
        @else
        <li>
        @endif

        @if($top_level_menu_list->isHasSubMenu())
            <a href="javascript:void(0);">
        @else
            <a href="{{ URL::route($top_level_menu_list->getUrl()) }}">
        @endif
                <i class="fa fa-spinner"></i><span class="title">{{ $top_level_menu_list->getName(); }}</span>
                @if($top_level_menu_list->isHasSubMenu())
                    <span class="expand-sign">+</span>
                @endif
            </a>

            @if($top_level_menu_list->isHasSubMenu())
                @include('TrinityCommonViews::Layouts.Partials.sidebarSubMenu',
                            array('sub_menu' => $top_level_menu_list->getSubMenu()))
            @endif
        </li>
    @endforeach
    </ul>
</div>