<div class="sidebar-back"></div>
<div class="sidebar-content">
    <div class="nav-brand">
        <a class="main-brand" href="{{ URL::route('trinity.index') }}">
            {{ HTML::image('img/logos/logo_sidebar_top.png', '', array('id' => 'tmip-sidebar-logo')) }}
        </a>
    </div>
    <ul class="main-menu">
        @foreach($menu_list as $top_level_menu_list)
            @if($top_level_menu_list->getIsExpandAndIsActive())
                <li class="active expanded">
            @elseif($top_level_menu_list->getIsActive())
                <li class="active">
            @elseif($top_level_menu_list->getIsExpand())
                <li class="expanded">
            @else
                <li>
            @endif

            @if($top_level_menu_list->hasSubMenu())
                <a href="javascript:void(0);">
            @else
                <a id="top-level-icon" href="{{ URL::route($top_level_menu_list->getUrl()) }}">
            @endif
                    <i class="{{ $top_level_menu_list->getFontAwesomeIcon() }}"></i>
                    <span class="title">{{ $top_level_menu_list->getName(); }}</span>
                    @if($top_level_menu_list->hasSubMenu())
                        <span id="top-level-expand" class="expand-sign"><i class="fa fa-arrow-left"></i></span>
                    @endif
                </a>

                @if($top_level_menu_list->hasSubMenu())
                    @include('TrinityCommonViews::Layouts.Partials.sidebarSubMenu',
                                                array('sub_menu' => $top_level_menu_list->getSubMenu()))
                @endif
            </li>
        @endforeach
    </ul>
</div>