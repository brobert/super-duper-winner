<ul
        class="{{$parent? 'submenu collapse': 'topmenu topmenu-responsive'}}"
        data-toggle="{{$parent? 'submenu': 'menu' }}"
        @if( $parent )
            id="{{$parent['name']}}"
        @endif
>
    @foreach( $children as $child)
    <li>
        <a
                href="{{$child['is_url']? $child['path']: 'javascript:void(0);'}}"
                data-target="#{{$child['name']}}"
                data-parent="{{ $parent? '#'.$parent['name']: '.topmenu'}}"
                @if( array_get($child, 'children', false) )
                    data-toggle="submenu"
                @endif
        >
            @if( array_get($child, 'icon', false) )
                <span class="figure"><i class="{{ $child['icon']}}"></i></span>
            @endif

            <span class="text">{{$child['name']}}</span>

            @if( array_get($child, 'children', false) )
                <span class="arrow"></span>
            @endif
        </a>

        @if( array_get($child, 'children', false) && $child['children'] )
            @include('landerv2/layouts/partials/menu_level', [ 'parent' => $child, 'children' => $child['children'] ])
        @endif
    </li>
    @endforeach
</ul>

