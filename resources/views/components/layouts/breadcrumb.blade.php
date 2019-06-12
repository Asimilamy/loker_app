<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">{{ isset($title) ? $title : 'Home' }}</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    @if (isset($breadcrumbs))
                        @forelse ($breadcrumbs as $key => $breadcrumb)
                            <li class="breadcrumb-item">
                                <a href="{{ url($breadcrumb) }} {{ $key == count($breadcrumbs)? 'active' : '' }}">{{ ucwords($breadcrumb) }}</a>
                            </li>
                        @empty
                            <li class="breadcrumb-item">
                                <a href="{{ url('home') }}">{{ ucwords('home') }}</a>
                            </li>
                        @endforelse
                    @else
                        <li class="breadcrumb-item">
                            <a href="{{ url('home') }}">{{ ucwords('home') }}</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
