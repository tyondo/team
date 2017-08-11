<!-- navigation links -->
@foreach( $navigation as $nav_menu )
    @if($nav_menu['type'] == 'single')
        <li><a href="{{ route($nav_menu['route']) }}">{{ $nav_menu['title'] }}</a></li>
    @else
        <li class="dropdown"><a href="#">{{$nav_menu['group']}}</a>
            <ul class="submenu">
                @forelse($nav_menu['links'] as $navlink)
                    @if ($navlink == 'separator')
                        <li role="separator" class="divider"></li>
                    @elseif ($navlink['route'] === 'header')
                        <li class="text-muted text-center"><i class="{{ $navlink['class'] }}"></i> {{ $navlink['title'] }}</li>
                    @else
                        <li><a href="{{ route($navlink['route']) }}">{{ $navlink['title'] }}</a></li>
                    @endif
                @empty
                    <li><a href="#">No links defined yet</a></li>
                @endforelse
            </ul>
        </li>
    @endif
@endforeach

<!-- navigation links -->