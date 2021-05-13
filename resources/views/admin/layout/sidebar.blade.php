<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/events') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.event.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/teachers') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.teacher.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/courses') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.course.title') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/science-manager') }}"><i class="nav-icon icon-drawer"></i> Науковий керівник</a></li>

            {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
