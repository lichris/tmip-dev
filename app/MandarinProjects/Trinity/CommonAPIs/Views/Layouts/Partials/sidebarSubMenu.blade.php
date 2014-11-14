<ul>
    @foreach($sub_menu as $next_level_menu)

    @if($next_level_menu->getIsExpand())
        <li class="expanded">
    @elseif($next_level_menu->getIsActive())
        <li class="active">
    @else
        <li>
    @endif

    @if($next_level_menu->hasSubMenu())
        <a href="javascript:void(0);">
            <span class="title">{{ $next_level_menu->getName(); }}</span>
            <span class="expand-sign"><i class="fa fa-arrow-left"></i></span>
    @else
        <a href="{{ URL::route($next_level_menu->getUrl()) }}">
            <span class="title">{{ $next_level_menu->getName(); }}</span>
    @endif
        </a>
    @if($next_level_menu->hasSubMenu())
        @include('TrinityCommonViews::Layouts.Partials.sidebarSubMenu',
                 array('sub_menu' => $next_level_menu->getSubMenu()))
    @endif

    </li>
    @endforeach
</ul>