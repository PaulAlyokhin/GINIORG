<header id="m_header" class="m-grid__item       m-header " m-minimize="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200">
    <div class="m-header__top">
        <div class="m-container m-container--responsive m-container--full-height m-page__container">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- begin::Brand -->
                <div class="m-stack__item m-brand">
                    <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="{{ url('admin/dashboard') }}" class="m-brand__logo-wrapper">
                                <img alt="" src="{{ url('admin_assets/assets/demo/demo5/media/img/logo/logo.png') }}" />
                            </a>
                        </div>
                    </div>
                    <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                        <span></span>
                    </a>

                    <!-- END -->

                    <!-- begin::Responsive Header Menu Toggler-->
                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                        <span></span>
                    </a>

                                <!-- end::Responsive Header Menu Toggler-->
                </div>



                <!-- end::Brand -->

                <!-- begin::Topbar -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light m-list-search m-list-search--skin-light" m-dropdown-toggle="click" id="m_quicksearch" m-quicksearch-mode="dropdown" m-dropdown-persistent="1" aria-expanded="true">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-icon"><i class="flaticon-search-1"></i></span>
                                    </a>
                                    <div class="m-dropdown__wrapper" style="z-index: 101;">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                        <div class="m-dropdown__inner ">
                                            <div class="m-dropdown__header">
                                                <form class="m-list-search__form">
                                                    <div class="m-list-search__form-wrapper">
                                                        <span class="m-list-search__form-input-wrapper">
                                                            <input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
                                                        </span>
                                                        <span class="m-list-search__form-icon-close" id="m_quicksearch_close">
                                                            <i class="la la-remove"></i>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__scrollable m-scrollable m-scroller ps" data-scrollable="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                                                    <div class="m-dropdown__content">
                                                    </div>
                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps__rail-y" style="top: 0px; right: 4px;">
                                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                                    <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                        <span class="m-nav__link-icon">
                                            <span class="m-nav__link-icon-wrapper">
                                                <i class="flaticon-alarm"></i>
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                <span class="m-dropdown__header-title">9 New</span>
                                                <span class="m-dropdown__header-subtitle">User Notifications</span>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                                                Alerts
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                            <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                                                <div class="m-list-timeline m-list-timeline--skin-light">
                                                                    <div class="m-list-timeline__items">
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                            <span class="m-list-timeline__text">12 new users registered</span>
                                                                            <span class="m-list-timeline__time">Just now</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                                                            <span class="m-list-timeline__time">14 mins</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">New invoice received</span>
                                                                            <span class="m-list-timeline__time">20 mins</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                                                            <span class="m-list-timeline__time">1 hr</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                                                            <span class="m-list-timeline__time">2 hrs</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                                                            <span class="m-list-timeline__time">7 hrs</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">Production server down</span>
                                                                            <span class="m-list-timeline__time">3 hrs</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">Production server up</span>
                                                                            <span class="m-list-timeline__time">5 hrs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                            <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                                                <div class="m-list-timeline m-list-timeline--skin-light">
                                                                    <div class="m-list-timeline__items">
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                            <a href="" class="m-list-timeline__text">New order received</a>
                                                                            <span class="m-list-timeline__time">Just now</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                            <a href="" class="m-list-timeline__text">New invoice received</a>
                                                                            <span class="m-list-timeline__time">20 mins</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                            <a href="" class="m-list-timeline__text">Production server up</a>
                                                                            <span class="m-list-timeline__time">5 hrs</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="" class="m-list-timeline__text">New order received</a>
                                                                            <span class="m-list-timeline__time">7 hrs</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="" class="m-list-timeline__text">System shutdown</a>
                                                                            <span class="m-list-timeline__time">11 mins</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="" class="m-list-timeline__text">Production server down</a>
                                                                            <span class="m-list-timeline__time">3 hrs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                            <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                    <span class="">All caught up!<br>No new logs.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click" aria-expanded="true">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                        <span class="m-nav__link-icon"><i class="flaticon-clipboard"></i></span>
                                    </a>
                                    <div class="m-dropdown__wrapper" style="z-index: 101;">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 29.5px;"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(./assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                <span class="m-dropdown__header-title">Quick Actions</span>
                                                <span class="m-dropdown__header-subtitle">Shortcuts</span>
                                            </div>
                                            <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                <div class="m-dropdown__content">
                                                    <div class="m-scrollable" data-scrollable="false" data-height="380" data-mobile-height="200">
                                                        <div class="m-nav-grid m-nav-grid--skin-light">
                                                            <div class="m-nav-grid__row">
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-file"></i>
                                                                    <span class="m-nav-grid__text">Generate Report</span>
                                                                </a>
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-time"></i>
                                                                    <span class="m-nav-grid__text">Add New Event</span>
                                                                </a>
                                                            </div>
                                                            <div class="m-nav-grid__row">
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                    <span class="m-nav-grid__text">Create New Task</span>
                                                                </a>
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                    <span class="m-nav-grid__text">Completed Tasks</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-topbar__welcome">Hello,&nbsp;</span>
                                        <span class="m-topbar__username">Admin</span>
                                        <span class="m-topbar__userpic">
                                            <img src="{{ url('admin_assets/assets/app/media/img/users/user4.png') }}" class="m--img-rounded m--marginless m--img-centered" alt="" />
                                        </span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url({{ url('admin_assets/assets/app/media/img/misc/user_profile_bg.jpg') }}); background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img src="{{ url('admin_assets/assets/app/media/img/users/user4.png') }}" class="m--img-rounded m--marginless" alt="" />
                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name m--font-weight-500">Mark Andre</span>
                                                        <a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
                                                                    <span class="m-nav__link-wrap">
                                                                        <span class="m-nav__link-text">My Profile</span>
                                                                        <span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Activity</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="{{ url('admin/faq') }}" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="{{ url('/admin/signout') }}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- end::Topbar -->
            </div>
        </div>
    </div>
    <div class="m-header__bottom">
        <div class="m-container m-container--responsive m-container--full-height m-page__container">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- begin::Horizontal Menu -->
                <div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                    <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
                        <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                            <li class="m-menu__item  m-menu__item--active " aria-haspopup="true"><a href="index.html" class="m-menu__link "><span class="m-menu__link-text">Dashboard</span></a></li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/manage_list') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Create / Manage Certificates</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/produce_list') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Produce Certificates</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/assign_list') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Assign Certificates</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/application_list') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">IDU Applications</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/masterbookids') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Masterbook IDs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/credentials') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Credential Applications</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/userslist') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Bulk Users Settings</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="create-edit-certificate.html" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">E-Commerce</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="create-edit-certificate.html" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">CRM</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="create-edit-certificate.html" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Email Templates</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/newsletters') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Newsletter</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>  
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/blogs') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Blogs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>  
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="create-edit-certificate.html" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Notifications</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li> 
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/pages') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li> 
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/faq') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">FAQs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="{{ url('admin/seo') }}" class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">SEO</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Search-->
            </div>
        </div>
    </div>
</header>