<aside class="main-sidebar">
    <div class="logo">
        <img src="" alt="">
    </div>
    <section class="sidebar">
        <ul>
            @foreach ($sites as $site)
            <li class="@isset($siteInformation)
                @if ($siteInformation->site->id == $site->id)
                    active
                @endif
            @endisset">
                <a href="javascript:;">{{$site->name}}<i class="fa fa-angle-right fa-lg float-right pl-2 pt-1"></i></a>
                
                <ul class="sub-menu d-none">
                    {{-- {!! Form::open(['method' => 'POST', 'route' => 'portfolio.site']) !!}
                    {!! Form::hidden('site_id', $site->id) !!}
                    {!! Form::hidden('type', 'admin') !!}
                    <li class="@isset($type)
                        @if ($type == 'admin')
                            active
                        @endif
                    @endisset"><a href="javascript:void(0);" onclick="$(this).closest('form').submit();">Admin</a></li>
                    {!! Form::close() !!} --}}

                    <li class="@if($url[count($url)-1] == 'frontend') 
                        active 
                    @elseif(isset($siteInformation))
                        @if ($siteInformation->type == 'frontend')
                            active
                        @endif
                    @endif">
                        <a href="/portfolio/site/{{$site->id}}/frontend">Frontend</a></li>
                    </li>

                    <li class="@if($url[count($url)-1] == 'admin') 
                        active 
                    @elseif(isset($siteInformation))
                        @if ($siteInformation->type == 'admin')
                            active
                        @endif
                    @endif">
                        <a href="/portfolio/site/{{$site->id}}/admin">Admin</a></li>
                    </li>
                </ul>
            </li>
            @endforeach
        </ul>
    </section>
</aside>
@push('script')
<script>
@isset($siteInformation)
    @if ($siteInformation->site->id == $site->id)
    $('.sub-menu').removeClass('d-none');
    @endif
@endisset
$('.nav-bar').addClass('portfolio-header');
</script>
@endpush