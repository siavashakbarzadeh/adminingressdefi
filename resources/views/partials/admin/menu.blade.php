{{--@php--}}
{{--    use App\Models\Utility;--}}
{{--      //  $logo=asset(Storage::url('uploads/logo/'));--}}
{{--        $logo=\App\Models\Utility::get_file('uploads/logo/');--}}
{{--        $company_logo=Utility::getValByName('company_logo_dark');--}}
{{--        $company_logos=Utility::getValByName('company_logo_light');--}}
{{--        $company_small_logo=Utility::getValByName('company_small_logo');--}}
{{--        $setting = \App\Models\Utility::colorset();--}}
{{--        $mode_setting = \App\Models\Utility::mode_layout();--}}
{{--        $emailTemplate     = \App\Models\EmailTemplate::first();--}}
{{--        $lang= Auth::user()->lang;--}}


{{--@endphp--}}

@if (isset($setting['cust_theme_bg']) && $setting['cust_theme_bg'] == 'on')
    <nav class="dash-sidebar light-sidebar transprent-bg">
@else
    <nav class="dash-sidebar light-sidebar">
@endif
    <div class="navbar-wrapper">
        <div class="m-header main-logo">
            <a href="#" class="b-brand">
{{--                <img src="{{ asset(Storage::url('uploads/logo/'.$logo)) }}" alt="{{ env('APP_NAME') }}" class="logo logo-lg" />--}}
                <img src="{{ asset('assets/images/adminingress.png') }}" alt="logo" width="40%"/>
{{--                @if($mode_setting['cust_darklayout'] && $mode_setting['cust_darklayout'] == 'on' )--}}
{{--                    <img src="{{ $logo . '/' . (isset($company_logos) && !empty($company_logos) ? $company_logos : 'logo-dark.png') }}"--}}
{{--                         alt="{{ config('app.name', 'ERPGo-SaaS') }}" class="logo logo-lg">--}}
{{--                @else--}}
{{--                    <img src="{{ $logo . '/' . (isset($company_logo) && !empty($company_logo) ? $company_logo : 'logo-dark.png') }}"--}}
{{--                         alt="{{ config('app.name', 'ERPGo-SaaS') }}" class="logo logo-lg">--}}
{{--                @endif--}}

            </a>
        </div>
        <div class="navbar-content">

            @if((\Auth::user()->type == 'super admin'))
                <ul class="dash-navbar">
                    <li class="dash-item dash-hasmenu
                                             ">
                        <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-share"></i></span><span class="dash-mtext">{{__('Manage category')}}</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">

                                <li class="dash-item  {{Request::segment(1) == 'project' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.list' ||Request::route()->getName() == 'projects.index' || Request::route()->getName() == 'projects.show' || request()->is('projects/*') ? 'active' : ''}}">
                                    <a class="dash-link" href="{{ route('category.index') }}">{{__('Listed')}}</a>
                                </li>


                                <li class="dash-item {{ (request()->is('taskboard*') ? 'active' : '')}}">
{{--                                    <a class="dash-link" href="{{ route('taskBoard.view', 'list') }}">{{__('Tasks')}}</a>--}}
                                    <a class="dash-link" href="{{ route('category.create') }}">{{__('Add')}}</a>
                                </li>



                        </ul>
                    </li>
                    <li class="dash-item dash-hasmenu
                                             ">
                        <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-share"></i></span><span class="dash-mtext">{{__('Manage vitrina')}}</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">

                                <li class="dash-item  {{Request::segment(1) == 'project' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.list' ||Request::route()->getName() == 'projects.index' || Request::route()->getName() == 'projects.show' || request()->is('projects/*') ? 'active' : ''}}">
                                    <a class="dash-link" href="{{ route('nft.index') }}">{{__('Listed')}}</a>
                                </li>


                                <li class="dash-item {{ (request()->is('taskboard*') ? 'active' : '')}}">
{{--                                    <a class="dash-link" href="{{ route('taskBoard.view', 'list') }}">{{__('Tasks')}}</a>--}}
                                    <a class="dash-link" href="">{{__('Tasks')}}</a>
                                </li>



                        </ul>
                    </li>
                    <li class="dash-item dash-hasmenu
                                            {{ ( Request::segment(1) == 'project' || Request::segment(1) == 'bugs-report' || Request::segment(1) == 'bugstatus' ||
                                                 Request::segment(1) == 'project-task-stages' || Request::segment(1) == 'calendar' || Request::segment(1) == 'timesheet-list' ||
                                                 Request::segment(1) == 'taskboard' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' ||
                                                 Request::segment(1) == 'project' || Request::segment(1) == 'projects' || Request::segment(1) == 'project_report') ? 'active dash-trigger' : ''}}">
                        <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-share"></i></span><span class="dash-mtext">{{__('Manage shipping')}}</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">

                                <li class="dash-item  {{Request::segment(1) == 'project' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.list' ||Request::route()->getName() == 'projects.index' || Request::route()->getName() == 'projects.show' || request()->is('projects/*') ? 'active' : ''}}">
                                    <a class="dash-link" href="{{ route('nft.index') }}">{{__('Listed')}}</a>
                                </li>


                                <li class="dash-item {{ (request()->is('taskboard*') ? 'active' : '')}}">
{{--                                    <a class="dash-link" href="{{ route('taskBoard.view', 'list') }}">{{__('Tasks')}}</a>--}}
                                    <a class="dash-link" href="">{{__('Tasks')}}</a>
                                </li>



                        </ul>
                    </li>
                    <li class="dash-item dash-hasmenu
                                            {{ ( Request::segment(1) == 'project' || Request::segment(1) == 'bugs-report' || Request::segment(1) == 'bugstatus' ||
                                                 Request::segment(1) == 'project-task-stages' || Request::segment(1) == 'calendar' || Request::segment(1) == 'timesheet-list' ||
                                                 Request::segment(1) == 'taskboard' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' ||
                                                 Request::segment(1) == 'project' || Request::segment(1) == 'projects' || Request::segment(1) == 'project_report') ? 'active dash-trigger' : ''}}">
                        <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-share"></i></span><span class="dash-mtext">{{__('Manage Bid')}}</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">

                                <li class="dash-item  {{Request::segment(1) == 'project' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.list' ||Request::route()->getName() == 'projects.index' || Request::route()->getName() == 'projects.show' || request()->is('projects/*') ? 'active' : ''}}">
                                    <a class="dash-link" href="{{ route('nft.index') }}">{{__('Listed')}}</a>
                                </li>


                                <li class="dash-item {{ (request()->is('taskboard*') ? 'active' : '')}}">
{{--                                    <a class="dash-link" href="{{ route('taskBoard.view', 'list') }}">{{__('Tasks')}}</a>--}}
                                    <a class="dash-link" href="">{{__('Tasks')}}</a>
                                </li>



                        </ul>
                    </li>
                    <li class="dash-item dash-hasmenu
                                            {{ ( Request::segment(1) == 'project' || Request::segment(1) == 'bugs-report' || Request::segment(1) == 'bugstatus' ||
                                                 Request::segment(1) == 'project-task-stages' || Request::segment(1) == 'calendar' || Request::segment(1) == 'timesheet-list' ||
                                                 Request::segment(1) == 'taskboard' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' ||
                                                 Request::segment(1) == 'project' || Request::segment(1) == 'projects' || Request::segment(1) == 'project_report') ? 'active dash-trigger' : ''}}">
                        <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-share"></i></span><span class="dash-mtext">{{__('Manage Nft')}}</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">

                                <li class="dash-item  {{Request::segment(1) == 'project' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.list' ||Request::route()->getName() == 'projects.index' || Request::route()->getName() == 'projects.show' || request()->is('projects/*') ? 'active' : ''}}">
                                    <a class="dash-link" href="{{ route('nft.index') }}">{{__('Listed')}}</a>
                                </li>


                                <li class="dash-item {{ (request()->is('taskboard*') ? 'active' : '')}}">
{{--                                    <a class="dash-link" href="{{ route('taskBoard.view', 'list') }}">{{__('Tasks')}}</a>--}}
                                    <a class="dash-link" href="">{{__('Tasks')}}</a>
                                </li>



                        </ul>
                    </li>
                    <li class="dash-item dash-hasmenu
                                            {{ ( Request::segment(1) == 'project' || Request::segment(1) == 'bugs-report' || Request::segment(1) == 'bugstatus' ||
                                                 Request::segment(1) == 'project-task-stages' || Request::segment(1) == 'calendar' || Request::segment(1) == 'timesheet-list' ||
                                                 Request::segment(1) == 'taskboard' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' ||
                                                 Request::segment(1) == 'project' || Request::segment(1) == 'projects' || Request::segment(1) == 'Manage Item') ? 'active dash-trigger' : ''}}">
                        <a href="#!" class="dash-link"><span class="dash-micon"><i class="ti ti-share"></i></span><span class="dash-mtext">{{__('Project System')}}</span><span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">

                                <li class="dash-item  {{Request::segment(1) == 'project' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.list' ||Request::route()->getName() == 'projects.index' || Request::route()->getName() == 'projects.show' || request()->is('projects/*') ? 'active' : ''}}">
                                    <a class="dash-link" href="">{{__('Projects')}}</a>
                                </li>


                                <li class="dash-item {{ (request()->is('taskboard*') ? 'active' : '')}}">
{{--                                    <a class="dash-link" href="{{ route('taskBoard.view', 'list') }}">{{__('Tasks')}}</a>--}}
                                    <a class="dash-link" href="">{{__('Tasks')}}</a>
                                </li>


                            @if(Gate::check('manage project task stage') || Gate::check('manage bug status'))
                                <li class="dash-item dash-hasmenu {{ (Request::segment(1) == 'bugstatus' || Request::segment(1) == 'project-task-stages') ? 'active dash-trigger' : ''}}">
                                    <a class="dash-link" href="#">{{__('Project System Setup')}}<span class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="dash-submenu">
                                        @can('manage project task stage')
                                            <li class="dash-item  {{ (Request::route()->getName() == 'project-task-stages.index') ? 'active' : '' }}">
                                                <a class="dash-link" href="{{route('project-task-stages.index')}}">{{__('Project Task Stages')}}</a>
                                            </li>
                                        @endcan
                                        @can('manage bug status')
                                            <li class="dash-item {{ (Request::route()->getName() == 'bugstatus.index') ? 'active' : '' }}">
                                                <a class="dash-link" href="{{route('bugstatus.index')}}">{{__('Bug Status')}}</a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </li>

                        <li class="dash-item dash-hasmenu {{ (Request::segment(1) == 'dashboard') ? ' active' : '' }}">
{{--                            <a href="{{ route('client.dashboard.view') }}" class="dash-link">--}}
                            <a href="" class="dash-link">
                                <span class="dash-micon"><i class="ti ti-home"></i></span><span class="dash-mtext">{{__('Dashboard')}}</span>
                            </a>
                        </li>




                        <li class="dash-item dash-hasmenu {{ (Request::route()->getName() == 'users.index' || Request::route()->getName() == 'users.create' || Request::route()->getName() == 'users.edit') ? ' active' : '' }}">
                            <a href="{{ route('users.index') }}" class="dash-link">
{{--                            <a href="" class="dash-link">--}}
                                <span class="dash-micon"><i class="ti ti-users"></i></span><span class="dash-mtext">{{__('User')}}</span>
                            </a>
                        </li>




                        <li class="dash-item dash-hasmenu {{ request()->is('plan_request*') ? 'active' : '' }}">
{{--                            <a href="{{ route('plan_request.index') }}" class="dash-link">--}}
                            <a href="" class="dash-link">
                                <span class="dash-micon"><i class="ti ti-arrow-up-right-circle"></i></span><span class="dash-mtext">{{__('Plan Request')}}</span>
                            </a>
                        </li>


                        <li class="dash-item dash-hasmenu {{ (Request::segment(1) == 'coupons')?'active':''}}">
{{--                            <a href="{{ route('coupons.index') }}" class="dash-link">--}}
                            <a href="" class="dash-link">
                                <span class="dash-micon"><i class="ti ti-gift"></i></span><span class="dash-mtext">{{__('Coupon')}}</span>
                            </a>
                        </li>


                        <li class="dash-item dash-hasmenu  {{ (Request::segment(1) == 'orders')?'active':''}}">
                            <a href="{{ route('order.index') }}" class="dash-link">
{{--                            <a href="" class="dash-link">--}}
                                <span class="dash-micon"><i class="ti ti-shopping-cart-plus"></i></span><span class="dash-mtext">{{__('Order')}}</span>
                            </a>
                        </li>

                        <li class="dash-item dash-hasmenu  {{ (Request::segment(1) == 'categories')?'active':''}}">
{{--                            <a href="{{ route('order.index') }}" class="dash-link">--}}
                            <a href="" class="dash-link">
                                <span class="dash-micon"><i class="ti ti-shopping-cart-plus"></i></span><span class="dash-mtext">{{__('Category')}}</span>
                            </a>
                        </li>

                        <li class="dash-item dash-hasmenu {{ (Request::route()->getName() == 'systems.index') ? ' active' : '' }}">
{{--                            <a href="{{ route('systems.index') }}" class="dash-link">--}}
                            <a href="" class="dash-link">
                                <span class="dash-micon"><i class="ti ti-settings"></i></span><span class="dash-mtext">{{__('Settings')}}</span>
                            </a>
                        </li>


                </ul>
            @endif

        </div>
    </div>
</nav>
