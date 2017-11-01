<div class="page-header page-header-block">
    <div class="page-header-section">
        <h4 class="title semibold"><span class="figure"><i class="ico-tasks"></i></span> Stats & Widgets</h4>
    </div>
    <div class="page-header-section">
        <!-- Toolbar -->
        <div class="toolbar">
            <ol class="breadcrumb breadcrumb-transparent nm">
                @foreach( $bread_crumbs as $crumb)
                <li>
                    @if ( !$loop->last )
                    <a href="{{ isset($crumb['name'])? route($crumb['name']): $crumb['url']}}">
                    @endif
                        {{ isset($crumb['name'])? trans('menu.'.$crumb['name']): $crumb['label'] }}
                    @if ( !$loop->last )
                    </a>
                    @endif
                </li>
                @endforeach
            </ol>
        </div>
        <!--/ Toolbar -->
    </div>
</div>