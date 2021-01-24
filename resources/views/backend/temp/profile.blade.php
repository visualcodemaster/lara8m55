<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>

    <title>Metronic | Add User</title>
    <meta name="description" content="Add user example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="../../../../../../fonts.googleapis.com/css.css">        <!--end::Fonts -->


    <!--begin::Page Custom Styles(used by this page) -->
    <link href="../../../../../themes/metronic/theme/default/demo3/dist/assets/css/pages/wizard/wizard-4.css"
          rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="../../../../../themes/metronic/theme/default/demo3/dist/assets/plugins/global/plugins.bundle.css"
          rel="stylesheet" type="text/css"/>
    <link href="../../../../../themes/metronic/theme/default/demo3/dist/assets/css/style.bundle.css" rel="stylesheet"
          type="text/css"/>
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <!--end::Layout Skins -->

    <link rel="shortcut icon"
          href="https://www.keenthemes.com/metronic/themes/metronic/theme/default/demo3/dist/assets/media/logos/favicon.ico"/>
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">


<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="https://www.keenthemes.com/metronic/preview/demo3/index.html">
            <img alt="Logo"
                 src="../../../../../themes/metronic/theme/default/demo3/dist/assets/media/logos/logo-2-sm.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- begin:: Aside -->
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
             id="kt_aside">
            <!-- begin:: Aside -->
            <div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="https://www.keenthemes.com/metronic/preview/demo3/index.html">
                        <img alt="Logo"
                             src="../../../../../themes/metronic/theme/default/demo3/dist/assets/media/logos/logo-4.png"/>
                    </a>
                </div>
            </div>
            <!-- end:: Aside -->    <!-- begin:: Aside Menu -->
            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                <div
                        id="kt_aside_menu"
                        class="kt-aside-menu  kt-aside-menu--dropdown "
                        data-ktmenu-vertical="1"
                        data-ktmenu-dropdown="1" data-ktmenu-scroll="0"
                >

                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__item " aria-haspopup="true"><a
                                    href="https://www.keenthemes.com/metronic/preview/demo3/index.html"
                                    class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-gear"></i><span
                                        class="kt-menu__link-text">Export</span></a></li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-icon flaticon2-layers-1"></i><span
                                        class="kt-menu__link-text">Actions</span></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Actions</span></span></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add New</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Edit</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Delete</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Import</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a
                                    href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                    class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-graph"></i><span
                                        class="kt-menu__link-text">Reports</span></a></li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-icon flaticon2-drop"></i><span class="kt-menu__link-text">Config</span></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Config</span></span></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                    class="kt-menu__link-text">Import</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                    class="kt-menu__link-text">Backup</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a
                                    href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                    class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-analytics-2"></i><span
                                        class="kt-menu__link-text">Console</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a
                                    href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                    class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-protected"></i><span
                                        class="kt-menu__link-text">System</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a
                                    href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                                    class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-mail-1"></i><span
                                        class="kt-menu__link-text">Logs</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- end:: Aside Menu --></div>
        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                <!-- begin: Header Menu -->
                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                            class="la la-close"></i></button>
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="https://www.keenthemes.com/metronic/preview/demo3/index.html"
                                        class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                           class="kt-menu__link kt-menu__toggle"><span
                                            class="kt-menu__link-text">Components</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-start-up"></i><span
                                                        class="kt-menu__link-text">Base</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/colors.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">State Colors</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/typography.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Typography</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/buttons.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Buttons</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/button-group.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Button Group</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/dropdown.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Dropdown</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/tabs/bootstrap.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Bootstrap Tabs</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/tabs/line.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Line Tabs</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/accordions.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Accordions</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/tables.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Tables</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/progress.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Progress</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/modal.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Modal</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/alerts.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Alerts</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/popover.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Popover</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/base/tooltip.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Tooltip</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-photograph"></i><span
                                                        class="kt-menu__link-text">Custom</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/badge.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Badge</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/navs.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Navigations</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/lists.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Lists</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/notes.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Notes</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/timeline.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Timeline</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/media.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Media</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/spinners.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Spinners</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/pagination.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Pagination</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/iconbox.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Iconbox</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/infobox.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Infobox</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/callout.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Callout</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/ribbon.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Ribbon</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/custom/miscellaneous.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Miscellaneous</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-lorry"></i><span
                                                        class="kt-menu__link-text">Extended</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/extended/blockui.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Block UI</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/extended/perfect-scrollbar.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Perfect Scrollbar</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/extended/treeview.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Tree View</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/extended/bootstrap-notify.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Bootstrap Notify</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/extended/toastr.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Toastr</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/extended/sweetalert2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">SweetAlert2</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/extended/dual-listbox.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Dual Listbox</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-cube-1"></i><span
                                                        class="kt-menu__link-text">Icons</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/icons/flaticon.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Flaticon</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/icons/fontawesome5.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Fontawesome 5</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/icons/lineawesome.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Lineawesome</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/icons/socicons.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Socicons</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/icons/svg.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">SVG Icons</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-browser-1"></i><span
                                                        class="kt-menu__link-text">Portlets</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/portlets/base.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Base Portlets</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/portlets/advanced.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Advanced Portlets</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/portlets/tabbed.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Tabbed Portlets</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/portlets/draggable.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Draggable Portlets</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/portlets/tools.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Portlet Tools</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/portlets/sticky-head.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Sticky Head</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-pie-chart-4"></i><span
                                                        class="kt-menu__link-text">Widgets</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/widgets/lists.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Lists</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/widgets/charts.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Charts</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/widgets/general.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">General</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-calendar-2"></i><span
                                                        class="kt-menu__link-text">Calendar</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/calendar/basic.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Basic Calendar</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/calendar/list-view.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List Views</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/calendar/google.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Google Calendar</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/calendar/external-events.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">External Events</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/calendar/background-events.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Background Events</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-graph-1"></i><span
                                                        class="kt-menu__link-text">Charts</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">amCharts</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/components/charts/amcharts/charts.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">amCharts Charts</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/components/charts/amcharts/stock-charts.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">amCharts Stock Charts</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/components/charts/amcharts/maps.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">amCharts Maps</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/charts/flotcharts.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Flot Charts</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/charts/google-charts.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Google Charts</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/charts/morris-charts.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Morris Charts</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-location"></i><span
                                                        class="kt-menu__link-text">Maps</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/maps/google-maps.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Google Maps</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/maps/jqvmap.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">JQVMap</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-cube-1"></i><span
                                                        class="kt-menu__link-text">Utils</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/utils/session-timeout.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Session Timeout</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/components/utils/idle-timer.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Idle Timer</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                           class="kt-menu__link kt-menu__toggle"><span
                                            class="kt-menu__link-text">Crud</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span
                                                        class="kt-menu__link-text">Forms & Controls</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Form Controls</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/controls/base.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Base Inputs</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/controls/input-group.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Input Groups</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/controls/checkbox.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Checkbox</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/controls/radio.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Radio</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/controls/switch.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Switch</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/controls/option.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Mega Options</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Form Widgets</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-datepicker.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Datepicker</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-datetimepicker.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Datetimepicker</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-timepicker.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Timepicker</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-daterangepicker.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Daterangepicker</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/tagify.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Tagify</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-touchspin.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Touchspin</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-maxlength.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Maxlength</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-switch.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Switch</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-multipleselectsplitter.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Multiple Select Splitter</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-select.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Bootstrap Select</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/select2.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Select2</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/typeahead.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Typeahead</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Form Widgets 2</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/nouislider.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">noUiSlider</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/form-repeater.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Form Repeater</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/ion-range-slider.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Ion Range Slider</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/input-mask.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Input Masks</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/quill.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Quill Text Editor</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/summernote.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Summernote WYSIWYG</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/bootstrap-markdown.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Markdown Editor</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/autosize.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Autosize</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/clipboard.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Clipboard</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/dropzone.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Dropzone</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/widgets/recaptcha.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Google reCaptcha</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Form Layouts</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/layouts/default-forms.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Default Forms</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/layouts/multi-column-forms.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Multi Column Forms</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/layouts/action-bars.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Basic Action Bars</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/layouts/sticky-action-bar.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Sticky Action Bar</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Form Validation</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/validation/states.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Validation States</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/validation/form-controls.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Form Controls</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/forms/validation/form-widgets.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Form Widgets</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-browser-2"></i><span
                                                        class="kt-menu__link-text">KTDatatable</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Base</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/base/data-local.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Local Data</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/base/data-json.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">JSON Data</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/base/data-ajax.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Ajax Data</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/base/html-table.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">HTML Table</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/base/local-sort.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Local Sort</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/base/translation.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Translation</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Advanced</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/advanced/record-selection.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Record Selection</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/advanced/row-details.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Row Details</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/advanced/modal.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Modal Examples</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/advanced/column-rendering.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Column Rendering</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/advanced/column-width.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Column Width</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/advanced/vertical.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Vertical Scrolling</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Child Datatables</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/child/data-local.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Local Data</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/child/data-ajax.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Remote Data</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">API</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/api/methods.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">API Methods</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/metronic-datatable/api/events.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Events</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-list-3"></i><span
                                                        class="kt-menu__link-text">Datatables.net</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Basic</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/basic/basic.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Basic Tables</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/basic/scrollable.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Scrollable Tables</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/basic/headers.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Complex Headers</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/basic/paginations.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Pagination Options</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Advanced</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/advanced/column-rendering.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Column Rendering</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/advanced/multiple-controls.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Multiple Controls</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/advanced/column-visibility.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Column Visibility</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/advanced/row-callback.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Row Callback</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/advanced/row-grouping.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Row Grouping</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/advanced/footer-callback.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Footer Callback</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Data sources</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/data-sources/html.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">HTML</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/data-sources/javascript.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Javascript</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/data-sources/ajax-client-side.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Ajax Client-side</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/data-sources/ajax-server-side.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Ajax Server-side</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Search Options</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/search-options/column-search.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Column Search</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/search-options/advanced-search.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Advanced Search</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Extensions</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/extensions/buttons.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Buttons</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/extensions/colreorder.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">ColReorder</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/extensions/keytable.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">KeyTable</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/extensions/responsive.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Responsive</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/extensions/rowgroup.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">RowGroup</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/extensions/rowreorder.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">RowReorder</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/extensions/scroller.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Scroller</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/crud/datatables/extensions/select.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Select</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-list-3"></i><span
                                                        class="kt-menu__link-text">File Upload</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/crud/file-upload/dropzonejs.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">DropzoneJS</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/crud/file-upload/uppy.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Uppy</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here"
                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                           class="kt-menu__link kt-menu__toggle"><span
                                            class="kt-menu__link-text">Apps</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-cube-1"></i><span
                                                        class="kt-menu__link-text">Users</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/list-default.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Default</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/list-datatable.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Datatable</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/list-columns-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Columns 1</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/list-columns-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Columns 2</span></a>
                                                    </li>
                                                    <li class="kt-menu__item  kt-menu__item--active "
                                                        aria-haspopup="true"><a href="add-user.html"
                                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Add User</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/edit-user.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Edit User</span></a></li>
                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                        data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Profile 1</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                            <ul class="kt-menu__subnav">
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-1/overview.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                class="kt-menu__link-text">Overview</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-1/personal-information.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                class="kt-menu__link-text">Personal Information</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-1/account-information.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                class="kt-menu__link-text">Account Information</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-1/change-password.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                class="kt-menu__link-text">Change Password</span></a>
                                                                </li>
                                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-1/email-settings.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                class="kt-menu__link-text">Email Settings</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Profile 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-3.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Profile 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-4.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Profile 4</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-writing"></i><span
                                                        class="kt-menu__link-text">Contacts</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/contacts/list-columns.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Columns</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/contacts/list-datatable.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Datatable</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/contacts/view-contact.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">View Contact</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/contacts/add-contact.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Add Contact</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/contacts/edit-cotact.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Edit Contact</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-writing"></i><span
                                                        class="kt-menu__link-text">Chat</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/chat/private.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Private</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/chat/group.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Group</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/chat/popup.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Popup</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-telegram-logo"></i><span
                                                        class="kt-menu__link-text">Projects</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/projects/list-columns-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Columns 1</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/projects/list-columns-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Columns 2</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/projects/list-columns-3.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Columns 3</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/projects/list-columns-4.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Columns 4</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/projects/list-datatable.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">List - Datatable</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/projects/view-project.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">View Project</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/projects/add-project.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Add Project</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/projects/edit-project.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Edit Project</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                                                        class="kt-menu__link-icon flaticon2-rocket"></i><span
                                                        class="kt-menu__link-text">Support Center</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/support-center/home-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Home 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/support-center/home-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Home 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/support-center/faq-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">FAQ 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/support-center/faq-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">FAQ 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/support-center/faq-3.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">FAQ 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/support-center/feedback.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">Feedback</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/support-center/license.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                    class="kt-menu__link-text">License</span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/inbox.html"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-icon flaticon2-rocket"></i><span
                                                        class="kt-menu__link-text">Inbox</span><span
                                                        class="kt-menu__link-badge"><span
                                                            class="kt-badge kt-badge--danger kt-badge--inline">new</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                           class="kt-menu__link kt-menu__toggle"><span
                                            class="kt-menu__link-text">Pages</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--center"
                                     style="width:1000px">
                                    <div class="kt-menu__subnav">
                                        <ul class="kt-menu__content">
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle">
                                                    <span class="kt-menu__link-text">Pricing Tables</span><i
                                                            class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/pricing/pricing-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Pricing Tables 1</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/pricing/pricing-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Pricing Tables 2</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/pricing/pricing-3.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Pricing Tables 3</span></a>
                                                    </li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/pricing/pricing-4.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Pricing Tables 4</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle">
                                                    <span class="kt-menu__link-text">Wizards</span><i
                                                            class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/wizard/wizard-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Wizard 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/wizard/wizard-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Wizard 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/wizard/wizard-3.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Wizard 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/wizard/wizard-4.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Wizard 4</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Invoices & FAQ</span><i
                                                            class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/invoices/invoice-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Invoice 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/invoices/invoice-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Invoice 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/faq/faq-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">FAQ 1</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">User Pages</span><i
                                                            class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/user/login-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Login 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/user/login-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Login 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/user/login-3.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Login 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/user/login-4.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Login 4</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/user/login-5.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Login 5</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/user/login-6.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Login 6</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Error Pages</span><i
                                                            class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/error/error-1.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Error 1</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/error/error-2.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Error 2</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/error/error-3.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Error 3</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/error/error-4.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Error 4</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/error/error-5.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Error 5</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="https://www.keenthemes.com/metronic/preview/demo3/custom/pages/error/error-6.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                    class="kt-menu__link-text">Error 6</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Header Menu -->        <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">
                    <!--begin: Search -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"
                         id="kt_quick_search_toggle">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">
                            <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
                                 id="kt_quick_search_dropdown">
                                <form method="get" class="kt-quick-search__form">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="flaticon2-search-1"></i></span></div>
                                        <input type="text" class="form-control kt-quick-search__input"
                                               placeholder="Search...">
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                        class="la la-close kt-quick-search__close"></i></span></div>
                                    </div>
                                </form>
                                <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325"
                                     data-mobile-height="200">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search -->

                    <!--begin: Notifications -->
                    <div class="kt-header__topbar-item dropdown">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px"
                             aria-expanded="true">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
                            <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
                            <form>
                                <!--begin: Head -->
                                <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
                                    <h3 class="kt-head__title">
                                        User Notifications
                                        &nbsp;
                                        <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
                                    </h3>
                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" data-toggle="tab"
                                               href="add-user.html#topbar_notifications_notifications" role="tab"
                                               aria-selected="true">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab"
                                               href="add-user.html#topbar_notifications_events" role="tab"
                                               aria-selected="false">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab"
                                               href="add-user.html#topbar_notifications_logs" role="tab"
                                               aria-selected="false">Logs</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end: Head -->

                                <div class="tab-content">
                                    <div class="tab-pane active show" id="topbar_notifications_notifications"
                                         role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                                             data-scroll="true" data-height="300" data-mobile-height="200">
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Application has been approved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New file has been uploaded
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        5 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-drop kt-font-info"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New user feedback received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        8 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        System reboot has been successfully completed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        12 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-favourite kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been placed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        15 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#"
                                               class="kt-notification__item kt-notification__item--read">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-safe kt-font-primary"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Company meeting canceled
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        19 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-security kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer comment recieved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 days ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 days ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                                             data-scroll="true" data-height="300" data-mobile-height="200">
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Application has been approved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New file has been uploaded
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        5 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-drop kt-font-info"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New user feedback received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        8 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        System reboot has been successfully completed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        12 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-favourite kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been placed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        15 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#"
                                               class="kt-notification__item kt-notification__item--read">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-safe kt-font-primary"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Company meeting canceled
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        19 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-security kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer comment recieved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 days ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="add-user.html#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 days ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                        <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                                            <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                                                <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                                    All caught up!
                                                    <br>No new notifications.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end: Notifications -->

                    <!--begin: Quick Actions -->
                    <div class="kt-header__topbar-item dropdown">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px"
                             aria-expanded="true">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-gear"></i></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <form>
                                <!--begin: Head -->
                                <div class="kt-head kt-head--skin-dark"
                                     style="background-image: url(/metronic/themes/metronic/theme/default/demo3/dist/assets/media/misc/bg-1.jpg)">
                                    <h3 class="kt-head__title">
                                        User Quick Actions
                                        <span class="kt-space-15"></span>
                                        <span class="btn btn-success btn-sm btn-bold btn-font-md">23 tasks pending</span>
                                    </h3>
                                </div>
                                <!--end: Head -->

                                <!--begin: Grid Nav -->
                                <div class="kt-grid-nav kt-grid-nav--skin-light">
                                    <div class="kt-grid-nav__row">
                                        <a href="add-user.html#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1"
                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z"
              fill="#000000" opacity="0.3"/>
        <path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z"
              fill="#000000"/>
    </g>
</svg>            </span>
                                            <span class="kt-grid-nav__title">Accounting</span>
                                            <span class="kt-grid-nav__desc">eCommerce</span>
                                        </a>
                                        <a href="add-user.html#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1"
                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z"
              fill="#000000" opacity="0.3"/>
        <path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z"
              fill="#000000"/>
    </g>
</svg>            </span>
                                            <span class="kt-grid-nav__title">Administration</span>
                                            <span class="kt-grid-nav__desc">Console</span>
                                        </a>
                                    </div>
                                    <div class="kt-grid-nav__row">
                                        <a href="add-user.html#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1"
                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
              fill="#000000"/>
        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
              fill="#000000" opacity="0.3"/>
    </g>
</svg>            </span>
                                            <span class="kt-grid-nav__title">Projects</span>
                                            <span class="kt-grid-nav__desc">Pending Tasks</span>
                                        </a>
                                        <a href="add-user.html#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1"
                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
              fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>            </span>
                                            <span class="kt-grid-nav__title">Customers</span>
                                            <span class="kt-grid-nav__desc">Latest cases</span>
                                        </a>
                                    </div>
                                </div>
                                <!--end: Grid Nav -->                </form>
                        </div>
                    </div>
                    <!--end: Quick Actions -->

                    <!--begin: Cart -->
                    <div class="kt-header__topbar-item dropdown">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                            <form>
                                <!-- begin:: Mycart -->
                                <div class="kt-mycart">
                                    <div class="kt-mycart__head kt-head"
                                         style="background-image: url(/metronic/themes/metronic/theme/default/demo3/dist/assets/media/misc/bg-1.jpg);">
                                        <div class="kt-mycart__info">
                                            <span class="kt-mycart__icon"><i
                                                        class="flaticon2-shopping-cart-1 kt-font-success"></i></span>
                                            <h3 class="kt-mycart__title">My Cart</h3>
                                        </div>
                                        <div class="kt-mycart__button">
                                            <button type="button" class="btn btn-success btn-sm" style=" ">2 Items
                                            </button>
                                        </div>
                                    </div>

                                    <div class="kt-mycart__body kt-scroll" data-scroll="true" data-height="245"
                                         data-mobile-height="200">
                                        <div class="kt-mycart__item">
                                            <div class="kt-mycart__container">
                                                <div class="kt-mycart__info">
                                                    <a href="add-user.html#" class="kt-mycart__title">
                                                        Samsung
                                                    </a>
                                                    <span class="kt-mycart__desc">
                        Profile info, Timeline etc
                    </span>

                                                    <div class="kt-mycart__action">
                                                        <span class="kt-mycart__price">$ 450</span>
                                                        <span class="kt-mycart__text">for</span>
                                                        <span class="kt-mycart__quantity">7</span>
                                                        <a href="add-user.html#" class="btn btn-label-success btn-icon">&minus;</a>
                                                        <a href="add-user.html#" class="btn btn-label-success btn-icon">&plus;</a>
                                                    </div>
                                                </div>

                                                <a href="add-user.html#" class="kt-mycart__pic">
                                                    <img src="../../../../../themes/metronic/theme/default/demo3/dist/assets/media/products/product9.jpg"
                                                         title="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="kt-mycart__item">
                                            <div class="kt-mycart__container">
                                                <div class="kt-mycart__info">
                                                    <a href="add-user.html#" class="kt-mycart__title">
                                                        Panasonic
                                                    </a>

                                                    <span class="kt-mycart__desc">
                        For PHoto & Others
                    </span>

                                                    <div class="kt-mycart__action">
                                                        <span class="kt-mycart__price">$ 329</span>
                                                        <span class="kt-mycart__text">for</span>
                                                        <span class="kt-mycart__quantity">1</span>
                                                        <a href="add-user.html#" class="btn btn-label-success btn-icon">&minus;</a>
                                                        <a href="add-user.html#" class="btn btn-label-success btn-icon">&plus;</a>
                                                    </div>
                                                </div>

                                                <a href="add-user.html#" class="kt-mycart__pic">
                                                    <img src="../../../../../themes/metronic/theme/default/demo3/dist/assets/media/products/product13.jpg"
                                                         title="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="kt-mycart__item">
                                            <div class="kt-mycart__container">
                                                <div class="kt-mycart__info">
                                                    <a href="add-user.html#" class="kt-mycart__title">
                                                        Fujifilm
                                                    </a>
                                                    <span class="kt-mycart__desc">
                        Profile info, Timeline etc
                    </span>

                                                    <div class="kt-mycart__action">
                                                        <span class="kt-mycart__price">$ 520</span>
                                                        <span class="kt-mycart__text">for</span>
                                                        <span class="kt-mycart__quantity">6</span>
                                                        <a href="add-user.html#" class="btn btn-label-success btn-icon">&minus;</a>
                                                        <a href="add-user.html#" class="btn btn-label-success btn-icon">&plus;</a>
                                                    </div>
                                                </div>

                                                <a href="add-user.html#" class="kt-mycart__pic">
                                                    <img src="../../../../../themes/metronic/theme/default/demo3/dist/assets/media/products/product16.jpg"
                                                         title="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="kt-mycart__item">
                                            <div class="kt-mycart__container">
                                                <div class="kt-mycart__info">
                                                    <a href="add-user.html#" class="kt-mycart__title">
                                                        Candy Machine
                                                    </a>

                                                    <span class="kt-mycart__desc">
                        For PHoto & Others
                    </span>

                                                    <div class="kt-mycart__action">
                                                        <span class="kt-mycart__price">$ 784</span>
                                                        <span class="kt-mycart__text">for</span>
                                                        <span class="kt-mycart__quantity">4</span>
                                                        <a href="add-user.html#" class="btn btn-label-success btn-icon">&minus;</a>
                                                        <a href="add-user.html#" class="btn btn-label-success btn-icon">&plus;</a>
                                                    </div>
                                                </div>

                                                <a href="add-user.html#" class="kt-mycart__pic">
                                                    <img src="../../../../../themes/metronic/theme/default/demo3/dist/assets/media/products/product15.jpg"
                                                         title="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="kt-mycart__footer">
                                        <div class="kt-mycart__section">
                                            <div class="kt-mycart__subtitel">
                                                <span>Sub Total</span>
                                                <span>Taxes</span>
                                                <span>Total</span>
                                            </div>

                                            <div class="kt-mycart__prices">
                                                <span>$ 840.00</span>
                                                <span>$ 72.00</span>
                                                <span class="kt-font-brand">$ 912.00</span>
                                            </div>
                                        </div>
                                        <div class="kt-mycart__button kt-align-right">
                                            <button type="button" class="btn btn-primary btn-sm">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end:: Mycart -->            </form>
                        </div>
                    </div>
                    <!--end: Cart-->

                    <!--begin: Quick panel -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip"
                         title="Quick panel" data-placement="right">
		<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
			<i class="flaticon2-cube-1"></i>
		</span>
                    </div>
                    <!--end: Quick panel -->

                    <!--begin: Language bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
	        <span class="kt-header__topbar-icon">
				<img class=""
                     src="https://www.keenthemes.com/metronic/themes/metronic/theme/default/demo3/dist/assets/media/flags/012-uk.svg"
                     alt=""/>
			</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
                            <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                                <li class="kt-nav__item kt-nav__item--active">
                                    <a href="add-user.html#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img
                                                    src="https://www.keenthemes.com/metronic/themes/metronic/theme/default/demo3/dist/assets/media/flags/020-flag.svg"
                                                    alt=""/></span>
                                        <span class="kt-nav__link-text">English</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="add-user.html#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img
                                                    src="https://www.keenthemes.com/metronic/themes/metronic/theme/default/demo3/dist/assets/media/flags/016-spain.svg"
                                                    alt=""/></span>
                                        <span class="kt-nav__link-text">Spanish</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="add-user.html#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img
                                                    src="https://www.keenthemes.com/metronic/themes/metronic/theme/default/demo3/dist/assets/media/flags/017-germany.svg"
                                                    alt=""/></span>
                                        <span class="kt-nav__link-text">German</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end: Language bar -->

                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
                                <img class="kt-hidden" alt="Pic"
                                     src="../../../../../themes/metronic/theme/default/demo3/dist/assets/media/users/300_25.jpg"/>
                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">S</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                                 style="background-image: url(/metronic/themes/metronic/theme/default/demo3/dist/assets/media/misc/bg-1.jpg)">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden" alt="Pic"
                                         src="../../../../../themes/metronic/theme/default/demo3/dist/assets/media/users/300_25.jpg"/>
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                                </div>
                                <div class="kt-user-card__name">
                                    Sean Stone
                                </div>
                                <div class="kt-user-card__badge">
                                    <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                                </div>
                            </div>
                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                                <a href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-1/personal-information.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Profile
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Account settings and more
                                        </div>
                                    </div>
                                </a>
                                <a href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-3.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-mail kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Messages
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Inbox and tasks
                                        </div>
                                    </div>
                                </a>
                                <a href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-2.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Activities
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Logs and notifications
                                        </div>
                                    </div>
                                </a>
                                <a href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-3.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-hourglass kt-font-brand"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Tasks
                                        </div>
                                        <div class="kt-notification__item-time">
                                            latest tasks and projects
                                        </div>
                                    </div>
                                </a>

                                <a href="https://www.keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-1/overview.html"
                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-cardiogram kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Billing
                                        </div>
                                        <div class="kt-notification__item-time">
                                            billing & statements <span
                                                    class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="kt-notification__custom kt-space-between">
                                    <a href="https://www.keenthemes.com/metronic/preview/demo3/custom/user/login-v2.html"
                                       target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign
                                        Out</a>

                                    <a href="https://www.keenthemes.com/metronic/preview/demo3/custom/user/login-v2.html"
                                       target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
                                </div>
                            </div>
                            <!--end: Navigation -->
                        </div>
                    </div>
                    <!--end: User Bar -->
                </div>
                <!-- end:: Header Topbar -->
            </div>
            <!-- end:: Header -->
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <!-- begin:: Content Head -->
                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">

                            <h3 class="kt-subheader__title">
                                New User
                            </h3>

                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                            Enter user details and submit                                    </span>

                            </div>

                        </div>
                        <div class="kt-subheader__toolbar">

                            <a href="https://www.keenthemes.com/metronic/preview/demo3/#.html"
                               class="btn btn-default btn-bold">

                                Back </a>

                            <div class="btn-group">
                                <button type="button" class="btn btn-brand btn-bold">

                                    Submit
                                </button>
                                <button type="button"
                                        class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__item">
                                            <a href="add-user.html#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-writing"></i>
                                                <span class="kt-nav__link-text">Save &amp; continue</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="add-user.html#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-medical-records"></i>
                                                <span class="kt-nav__link-text">Save &amp; add new</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="add-user.html#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-hourglass-1"></i>
                                                <span class="kt-nav__link-text">Save &amp; exit</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end:: Content Head -->
                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first">
                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v4__nav">
                            <div class="kt-wizard-v4__nav-items nav">
                                <!--doc: Replace A tag with SPAN tag to disable the step link click -->
                                <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step"
                                     data-ktwizard-state="current">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            1
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                Profile
                                            </div>
                                            <div class="kt-wizard-v4__nav-label-desc">
                                                User's Personal Information
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            2
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                Account
                                            </div>
                                            <div class="kt-wizard-v4__nav-label-desc">
                                                User's Account & Settings
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            3
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                Address
                                            </div>
                                            <div class="kt-wizard-v4__nav-label-desc">
                                                User's Shipping Address
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            4
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                Submission
                                            </div>
                                            <div class="kt-wizard-v4__nav-label-desc">
                                                Review and Submit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Form Wizard Nav -->

                        <div class="kt-portlet">
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <div class="kt-grid">
                                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                                        <!--begin: Form Wizard Form-->
                                        <form class="kt-form" id="kt_user_add_form">
                                            <!--begin: Form Wizard Step 1-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                                 data-ktwizard-state="current">
                                                <div class="kt-heading kt-heading--md">User's Profile Details:</div>
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <div class="kt-avatar kt-avatar--outline"
                                                                                 id="kt_user_add_avatar">
                                                                                <div class="kt-avatar__holder"
                                                                                     style="background-image: url(./assets/media/users/300_10.jpg)"></div>
                                                                                <label class="kt-avatar__upload"
                                                                                       data-toggle="kt-tooltip"
                                                                                       title="Change avatar">
                                                                                    <i class="fa fa-pen"></i>
                                                                                    <input type="file"
                                                                                           name="kt_user_add_user_avatar">
                                                                                </label>
                                                                                <span class="kt-avatar__cancel"
                                                                                      data-toggle="kt-tooltip"
                                                                                      title="Cancel avatar">
																<i class="fa fa-times"></i>
															</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">First
                                                                            Name</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <input class="form-control" type="text"
                                                                                   value="Anna">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Last
                                                                            Name</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <input class="form-control" type="text"
                                                                                   value="Krox">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Company
                                                                            Name</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <input class="form-control" type="text"
                                                                                   value="Loop Inc.">
                                                                            <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Contact
                                                                            Phone</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"><span
                                                                                            class="input-group-text"><i
                                                                                                class="la la-phone"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control"
                                                                                       value="+45678967456"
                                                                                       placeholder="Phone"
                                                                                       aria-describedby="basic-addon1">
                                                                            </div>
                                                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email
                                                                            Address</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"><span
                                                                                            class="input-group-text"><i
                                                                                                class="la la-at"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control"
                                                                                       value="anna.krox@loop.com"
                                                                                       placeholder="Email"
                                                                                       aria-describedby="basic-addon1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group form-group-last row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Company
                                                                            Site</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control"
                                                                                       placeholder="Username"
                                                                                       value="loop">
                                                                                <div class="input-group-append"><span
                                                                                            class="input-group-text">.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 1-->

                                            <!--begin: Form Wizard Step 2-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <h3 class="kt-section__title kt-section__title-md">
                                                                                User's Account Details</h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Last
                                                                            Name</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <input class="form-control" type="text"
                                                                                   value="Anna">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email
                                                                            Address</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"><span
                                                                                            class="input-group-text"><i
                                                                                                class="la la-at"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control"
                                                                                       value="nick.watson@loop.com"
                                                                                       placeholder="Email"
                                                                                       aria-describedby="basic-addon1">
                                                                            </div>
                                                                            <span class="form-text text-muted">Email will not be publicly displayed. <a
                                                                                        href="add-user.html#"
                                                                                        class="kt-link">Learn more</a>.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Language</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <select class="form-control">
                                                                                <option>Select Language...</option>
                                                                                <option value="id">Bahasa Indonesia -
                                                                                    Indonesian
                                                                                </option>
                                                                                <option value="msa">Bahasa Melayu -
                                                                                    Malay
                                                                                </option>
                                                                                <option value="ca">Català - Catalan
                                                                                </option>
                                                                                <option value="cs">Čeština - Czech
                                                                                </option>
                                                                                <option value="da">Dansk - Danish
                                                                                </option>
                                                                                <option value="de">Deutsch - German
                                                                                </option>
                                                                                <option value="en" selected="">English
                                                                                </option>
                                                                                <option value="en-gb">English UK -
                                                                                    British English
                                                                                </option>
                                                                                <option value="es">Español - Spanish
                                                                                </option>
                                                                                <option value="eu">Euskara - Basque
                                                                                    (beta)
                                                                                </option>
                                                                                <option value="fil">Filipino</option>
                                                                                <option value="fr">Français - French
                                                                                </option>
                                                                                <option value="ga">Gaeilge - Irish
                                                                                    (beta)
                                                                                </option>
                                                                                <option value="gl">Galego - Galician
                                                                                    (beta)
                                                                                </option>
                                                                                <option value="hr">Hrvatski - Croatian
                                                                                </option>
                                                                                <option value="it">Italiano - Italian
                                                                                </option>
                                                                                <option value="hu">Magyar - Hungarian
                                                                                </option>
                                                                                <option value="nl">Nederlands - Dutch
                                                                                </option>
                                                                                <option value="no">Norsk - Norwegian
                                                                                </option>
                                                                                <option value="pl">Polski - Polish
                                                                                </option>
                                                                                <option value="pt">Português -
                                                                                    Portuguese
                                                                                </option>
                                                                                <option value="ro">Română - Romanian
                                                                                </option>
                                                                                <option value="sk">Slovenčina - Slovak
                                                                                </option>
                                                                                <option value="fi">Suomi - Finnish
                                                                                </option>
                                                                                <option value="sv">Svenska - Swedish
                                                                                </option>
                                                                                <option value="vi">Tiếng Việt -
                                                                                    Vietnamese
                                                                                </option>
                                                                                <option value="tr">Türkçe - Turkish
                                                                                </option>
                                                                                <option value="el">Ελληνικά - Greek
                                                                                </option>
                                                                                <option value="bg">Български език -
                                                                                    Bulgarian
                                                                                </option>
                                                                                <option value="ru">Русский - Russian
                                                                                </option>
                                                                                <option value="sr">Српски - Serbian
                                                                                </option>
                                                                                <option value="uk">Українська мова -
                                                                                    Ukrainian
                                                                                </option>
                                                                                <option value="he">עִבְרִית - Hebrew
                                                                                </option>
                                                                                <option value="ur">اردو - Urdu (beta)
                                                                                </option>
                                                                                <option value="ar">العربية - Arabic
                                                                                </option>
                                                                                <option value="fa">فارسی - Persian
                                                                                </option>
                                                                                <option value="mr">मराठी - Marathi
                                                                                </option>
                                                                                <option value="hi">हिन्दी - Hindi
                                                                                </option>
                                                                                <option value="bn">বাংলা - Bangla
                                                                                </option>
                                                                                <option value="gu">ગુજરાતી - Gujarati
                                                                                </option>
                                                                                <option value="ta">தமிழ் - Tamil
                                                                                </option>
                                                                                <option value="kn">ಕನ್ನಡ - Kannada
                                                                                </option>
                                                                                <option value="th">ภาษาไทย - Thai
                                                                                </option>
                                                                                <option value="ko">한국어 - Korean</option>
                                                                                <option value="ja">日本語 - Japanese
                                                                                </option>
                                                                                <option value="zh-cn">简体中文 - Simplified
                                                                                    Chinese
                                                                                </option>
                                                                                <option value="zh-tw">繁體中文 - Traditional
                                                                                    Chinese
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Time
                                                                            Zone</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <select class="form-control">
                                                                                <option data-offset="-39600"
                                                                                        value="International Date Line West">
                                                                                    (GMT-11:00) International Date Line
                                                                                    West
                                                                                </option>
                                                                                <option data-offset="-39600"
                                                                                        value="Midway Island">
                                                                                    (GMT-11:00) Midway Island
                                                                                </option>
                                                                                <option data-offset="-39600"
                                                                                        value="Samoa">(GMT-11:00) Samoa
                                                                                </option>
                                                                                <option data-offset="-36000"
                                                                                        value="Hawaii">(GMT-10:00)
                                                                                    Hawaii
                                                                                </option>
                                                                                <option data-offset="-28800"
                                                                                        value="Alaska">(GMT-08:00)
                                                                                    Alaska
                                                                                </option>
                                                                                <option data-offset="-25200"
                                                                                        value="Pacific Time (US &amp; Canada)">
                                                                                    (GMT-07:00) Pacific Time (US &amp;
                                                                                    Canada)
                                                                                </option>
                                                                                <option data-offset="-25200"
                                                                                        value="Tijuana">(GMT-07:00)
                                                                                    Tijuana
                                                                                </option>
                                                                                <option data-offset="-25200"
                                                                                        value="Arizona">(GMT-07:00)
                                                                                    Arizona
                                                                                </option>
                                                                                <option data-offset="-21600"
                                                                                        value="Mountain Time (US &amp; Canada)">
                                                                                    (GMT-06:00) Mountain Time (US &amp;
                                                                                    Canada)
                                                                                </option>
                                                                                <option data-offset="-21600"
                                                                                        value="Chihuahua">(GMT-06:00)
                                                                                    Chihuahua
                                                                                </option>
                                                                                <option data-offset="-21600"
                                                                                        value="Mazatlan">(GMT-06:00)
                                                                                    Mazatlan
                                                                                </option>
                                                                                <option data-offset="-21600"
                                                                                        value="Saskatchewan">(GMT-06:00)
                                                                                    Saskatchewan
                                                                                </option>
                                                                                <option data-offset="-21600"
                                                                                        value="Central America">
                                                                                    (GMT-06:00) Central America
                                                                                </option>
                                                                                <option data-offset="-18000"
                                                                                        value="Central Time (US &amp; Canada)">
                                                                                    (GMT-05:00) Central Time (US &amp;
                                                                                    Canada)
                                                                                </option>
                                                                                <option data-offset="-18000"
                                                                                        value="Guadalajara">(GMT-05:00)
                                                                                    Guadalajara
                                                                                </option>
                                                                                <option data-offset="-18000"
                                                                                        value="Mexico City">(GMT-05:00)
                                                                                    Mexico City
                                                                                </option>
                                                                                <option data-offset="-18000"
                                                                                        value="Monterrey">(GMT-05:00)
                                                                                    Monterrey
                                                                                </option>
                                                                                <option data-offset="-18000"
                                                                                        value="Bogota">(GMT-05:00)
                                                                                    Bogota
                                                                                </option>
                                                                                <option data-offset="-18000"
                                                                                        value="Lima">(GMT-05:00) Lima
                                                                                </option>
                                                                                <option data-offset="-18000"
                                                                                        value="Quito">(GMT-05:00) Quito
                                                                                </option>
                                                                                <option data-offset="-14400"
                                                                                        value="Eastern Time (US &amp; Canada)">
                                                                                    (GMT-04:00) Eastern Time (US &amp;
                                                                                    Canada)
                                                                                </option>
                                                                                <option data-offset="-14400"
                                                                                        value="Indiana (East)">
                                                                                    (GMT-04:00) Indiana (East)
                                                                                </option>
                                                                                <option data-offset="-14400"
                                                                                        value="Caracas">(GMT-04:00)
                                                                                    Caracas
                                                                                </option>
                                                                                <option data-offset="-14400"
                                                                                        value="La Paz">(GMT-04:00) La
                                                                                    Paz
                                                                                </option>
                                                                                <option data-offset="-14400"
                                                                                        value="Georgetown">(GMT-04:00)
                                                                                    Georgetown
                                                                                </option>
                                                                                <option data-offset="-10800"
                                                                                        value="Atlantic Time (Canada)">
                                                                                    (GMT-03:00) Atlantic Time (Canada)
                                                                                </option>
                                                                                <option data-offset="-10800"
                                                                                        value="Santiago">(GMT-03:00)
                                                                                    Santiago
                                                                                </option>
                                                                                <option data-offset="-10800"
                                                                                        value="Brasilia">(GMT-03:00)
                                                                                    Brasilia
                                                                                </option>
                                                                                <option data-offset="-10800"
                                                                                        value="Buenos Aires">(GMT-03:00)
                                                                                    Buenos Aires
                                                                                </option>
                                                                                <option data-offset="-9000"
                                                                                        value="Newfoundland">(GMT-02:30)
                                                                                    Newfoundland
                                                                                </option>
                                                                                <option data-offset="-7200"
                                                                                        value="Greenland">(GMT-02:00)
                                                                                    Greenland
                                                                                </option>
                                                                                <option data-offset="-7200"
                                                                                        value="Mid-Atlantic">(GMT-02:00)
                                                                                    Mid-Atlantic
                                                                                </option>
                                                                                <option data-offset="-3600"
                                                                                        value="Cape Verde Is.">
                                                                                    (GMT-01:00) Cape Verde Is.
                                                                                </option>
                                                                                <option data-offset="0" value="Azores">
                                                                                    (GMT) Azores
                                                                                </option>
                                                                                <option data-offset="0"
                                                                                        value="Monrovia">(GMT) Monrovia
                                                                                </option>
                                                                                <option data-offset="0" value="UTC">
                                                                                    (GMT) UTC
                                                                                </option>
                                                                                <option data-offset="3600"
                                                                                        value="Dublin">(GMT+01:00)
                                                                                    Dublin
                                                                                </option>
                                                                                <option data-offset="3600"
                                                                                        value="Edinburgh">(GMT+01:00)
                                                                                    Edinburgh
                                                                                </option>
                                                                                <option data-offset="3600"
                                                                                        value="Lisbon">(GMT+01:00)
                                                                                    Lisbon
                                                                                </option>
                                                                                <option data-offset="3600"
                                                                                        value="London">(GMT+01:00)
                                                                                    London
                                                                                </option>
                                                                                <option data-offset="3600"
                                                                                        value="Casablanca">(GMT+01:00)
                                                                                    Casablanca
                                                                                </option>
                                                                                <option data-offset="3600"
                                                                                        value="West Central Africa">
                                                                                    (GMT+01:00) West Central Africa
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Belgrade">(GMT+02:00)
                                                                                    Belgrade
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Bratislava">(GMT+02:00)
                                                                                    Bratislava
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Budapest">(GMT+02:00)
                                                                                    Budapest
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Ljubljana">(GMT+02:00)
                                                                                    Ljubljana
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Prague">(GMT+02:00)
                                                                                    Prague
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Sarajevo">(GMT+02:00)
                                                                                    Sarajevo
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Skopje">(GMT+02:00)
                                                                                    Skopje
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Warsaw">(GMT+02:00)
                                                                                    Warsaw
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Zagreb">(GMT+02:00)
                                                                                    Zagreb
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Brussels">(GMT+02:00)
                                                                                    Brussels
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Copenhagen">(GMT+02:00)
                                                                                    Copenhagen
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Madrid">(GMT+02:00)
                                                                                    Madrid
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Paris">(GMT+02:00) Paris
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Amsterdam">(GMT+02:00)
                                                                                    Amsterdam
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Berlin">(GMT+02:00)
                                                                                    Berlin
                                                                                </option>
                                                                                <option data-offset="7200" value="Bern">
                                                                                    (GMT+02:00) Bern
                                                                                </option>
                                                                                <option data-offset="7200" value="Rome">
                                                                                    (GMT+02:00) Rome
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Stockholm">(GMT+02:00)
                                                                                    Stockholm
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Vienna">(GMT+02:00)
                                                                                    Vienna
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Cairo">(GMT+02:00) Cairo
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Harare">(GMT+02:00)
                                                                                    Harare
                                                                                </option>
                                                                                <option data-offset="7200"
                                                                                        value="Pretoria">(GMT+02:00)
                                                                                    Pretoria
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Bucharest">(GMT+03:00)
                                                                                    Bucharest
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Helsinki">(GMT+03:00)
                                                                                    Helsinki
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Kiev">(GMT+03:00) Kiev
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Kyiv">(GMT+03:00) Kyiv
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Riga">(GMT+03:00) Riga
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Sofia">(GMT+03:00) Sofia
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Tallinn">(GMT+03:00)
                                                                                    Tallinn
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Vilnius">(GMT+03:00)
                                                                                    Vilnius
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Athens">(GMT+03:00)
                                                                                    Athens
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Istanbul">(GMT+03:00)
                                                                                    Istanbul
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Minsk">(GMT+03:00) Minsk
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Jerusalem">(GMT+03:00)
                                                                                    Jerusalem
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Moscow">(GMT+03:00)
                                                                                    Moscow
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="St. Petersburg">
                                                                                    (GMT+03:00) St. Petersburg
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Volgograd">(GMT+03:00)
                                                                                    Volgograd
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Kuwait">(GMT+03:00)
                                                                                    Kuwait
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Riyadh">(GMT+03:00)
                                                                                    Riyadh
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Nairobi">(GMT+03:00)
                                                                                    Nairobi
                                                                                </option>
                                                                                <option data-offset="10800"
                                                                                        value="Baghdad">(GMT+03:00)
                                                                                    Baghdad
                                                                                </option>
                                                                                <option data-offset="14400"
                                                                                        value="Abu Dhabi">(GMT+04:00)
                                                                                    Abu Dhabi
                                                                                </option>
                                                                                <option data-offset="14400"
                                                                                        value="Muscat">(GMT+04:00)
                                                                                    Muscat
                                                                                </option>
                                                                                <option data-offset="14400"
                                                                                        value="Baku">(GMT+04:00) Baku
                                                                                </option>
                                                                                <option data-offset="14400"
                                                                                        value="Tbilisi">(GMT+04:00)
                                                                                    Tbilisi
                                                                                </option>
                                                                                <option data-offset="14400"
                                                                                        value="Yerevan">(GMT+04:00)
                                                                                    Yerevan
                                                                                </option>
                                                                                <option data-offset="16200"
                                                                                        value="Tehran">(GMT+04:30)
                                                                                    Tehran
                                                                                </option>
                                                                                <option data-offset="16200"
                                                                                        value="Kabul">(GMT+04:30) Kabul
                                                                                </option>
                                                                                <option data-offset="18000"
                                                                                        value="Ekaterinburg">(GMT+05:00)
                                                                                    Ekaterinburg
                                                                                </option>
                                                                                <option data-offset="18000"
                                                                                        value="Islamabad">(GMT+05:00)
                                                                                    Islamabad
                                                                                </option>
                                                                                <option data-offset="18000"
                                                                                        value="Karachi">(GMT+05:00)
                                                                                    Karachi
                                                                                </option>
                                                                                <option data-offset="18000"
                                                                                        value="Tashkent">(GMT+05:00)
                                                                                    Tashkent
                                                                                </option>
                                                                                <option data-offset="19800"
                                                                                        value="Chennai">(GMT+05:30)
                                                                                    Chennai
                                                                                </option>
                                                                                <option data-offset="19800"
                                                                                        value="Kolkata">(GMT+05:30)
                                                                                    Kolkata
                                                                                </option>
                                                                                <option data-offset="19800"
                                                                                        value="Mumbai">(GMT+05:30)
                                                                                    Mumbai
                                                                                </option>
                                                                                <option data-offset="19800"
                                                                                        value="New Delhi">(GMT+05:30)
                                                                                    New Delhi
                                                                                </option>
                                                                                <option data-offset="19800"
                                                                                        value="Sri Jayawardenepura">
                                                                                    (GMT+05:30) Sri Jayawardenepura
                                                                                </option>
                                                                                <option data-offset="20700"
                                                                                        value="Kathmandu">(GMT+05:45)
                                                                                    Kathmandu
                                                                                </option>
                                                                                <option data-offset="21600"
                                                                                        value="Astana">(GMT+06:00)
                                                                                    Astana
                                                                                </option>
                                                                                <option data-offset="21600"
                                                                                        value="Dhaka">(GMT+06:00) Dhaka
                                                                                </option>
                                                                                <option data-offset="21600"
                                                                                        value="Almaty">(GMT+06:00)
                                                                                    Almaty
                                                                                </option>
                                                                                <option data-offset="21600"
                                                                                        value="Urumqi">(GMT+06:00)
                                                                                    Urumqi
                                                                                </option>
                                                                                <option data-offset="23400"
                                                                                        value="Rangoon">(GMT+06:30)
                                                                                    Rangoon
                                                                                </option>
                                                                                <option data-offset="25200"
                                                                                        value="Novosibirsk">(GMT+07:00)
                                                                                    Novosibirsk
                                                                                </option>
                                                                                <option data-offset="25200"
                                                                                        value="Bangkok">(GMT+07:00)
                                                                                    Bangkok
                                                                                </option>
                                                                                <option data-offset="25200"
                                                                                        value="Hanoi">(GMT+07:00) Hanoi
                                                                                </option>
                                                                                <option data-offset="25200"
                                                                                        value="Jakarta">(GMT+07:00)
                                                                                    Jakarta
                                                                                </option>
                                                                                <option data-offset="25200"
                                                                                        value="Krasnoyarsk">(GMT+07:00)
                                                                                    Krasnoyarsk
                                                                                </option>
                                                                                <option data-offset="28800"
                                                                                        value="Beijing">(GMT+08:00)
                                                                                    Beijing
                                                                                </option>
                                                                                <option data-offset="28800"
                                                                                        value="Chongqing">(GMT+08:00)
                                                                                    Chongqing
                                                                                </option>
                                                                                <option data-offset="28800"
                                                                                        value="Hong Kong">(GMT+08:00)
                                                                                    Hong Kong
                                                                                </option>
                                                                                <option data-offset="28800"
                                                                                        value="Kuala Lumpur">(GMT+08:00)
                                                                                    Kuala Lumpur
                                                                                </option>
                                                                                <option data-offset="28800"
                                                                                        value="Singapore">(GMT+08:00)
                                                                                    Singapore
                                                                                </option>
                                                                                <option data-offset="28800"
                                                                                        value="Taipei">(GMT+08:00)
                                                                                    Taipei
                                                                                </option>
                                                                                <option data-offset="28800"
                                                                                        value="Perth">(GMT+08:00) Perth
                                                                                </option>
                                                                                <option data-offset="28800"
                                                                                        value="Irkutsk">(GMT+08:00)
                                                                                    Irkutsk
                                                                                </option>
                                                                                <option data-offset="28800"
                                                                                        value="Ulaan Bataar">(GMT+08:00)
                                                                                    Ulaan Bataar
                                                                                </option>
                                                                                <option data-offset="32400"
                                                                                        value="Seoul">(GMT+09:00) Seoul
                                                                                </option>
                                                                                <option data-offset="32400"
                                                                                        value="Osaka">(GMT+09:00) Osaka
                                                                                </option>
                                                                                <option data-offset="32400"
                                                                                        value="Sapporo">(GMT+09:00)
                                                                                    Sapporo
                                                                                </option>
                                                                                <option data-offset="32400"
                                                                                        value="Tokyo">(GMT+09:00) Tokyo
                                                                                </option>
                                                                                <option data-offset="32400"
                                                                                        value="Yakutsk">(GMT+09:00)
                                                                                    Yakutsk
                                                                                </option>
                                                                                <option data-offset="34200"
                                                                                        value="Darwin">(GMT+09:30)
                                                                                    Darwin
                                                                                </option>
                                                                                <option data-offset="34200"
                                                                                        value="Adelaide">(GMT+09:30)
                                                                                    Adelaide
                                                                                </option>
                                                                                <option data-offset="36000"
                                                                                        value="Canberra">(GMT+10:00)
                                                                                    Canberra
                                                                                </option>
                                                                                <option data-offset="36000"
                                                                                        value="Melbourne">(GMT+10:00)
                                                                                    Melbourne
                                                                                </option>
                                                                                <option data-offset="36000"
                                                                                        value="Sydney">(GMT+10:00)
                                                                                    Sydney
                                                                                </option>
                                                                                <option data-offset="36000"
                                                                                        value="Brisbane">(GMT+10:00)
                                                                                    Brisbane
                                                                                </option>
                                                                                <option data-offset="36000"
                                                                                        value="Hobart">(GMT+10:00)
                                                                                    Hobart
                                                                                </option>
                                                                                <option data-offset="36000"
                                                                                        value="Vladivostok">(GMT+10:00)
                                                                                    Vladivostok
                                                                                </option>
                                                                                <option data-offset="36000"
                                                                                        value="Guam">(GMT+10:00) Guam
                                                                                </option>
                                                                                <option data-offset="36000"
                                                                                        value="Port Moresby">(GMT+10:00)
                                                                                    Port Moresby
                                                                                </option>
                                                                                <option data-offset="36000"
                                                                                        value="Solomon Is.">(GMT+10:00)
                                                                                    Solomon Is.
                                                                                </option>
                                                                                <option data-offset="39600"
                                                                                        value="Magadan">(GMT+11:00)
                                                                                    Magadan
                                                                                </option>
                                                                                <option data-offset="39600"
                                                                                        value="New Caledonia">
                                                                                    (GMT+11:00) New Caledonia
                                                                                </option>
                                                                                <option data-offset="43200"
                                                                                        value="Fiji">(GMT+12:00) Fiji
                                                                                </option>
                                                                                <option data-offset="43200"
                                                                                        value="Kamchatka">(GMT+12:00)
                                                                                    Kamchatka
                                                                                </option>
                                                                                <option data-offset="43200"
                                                                                        value="Marshall Is.">(GMT+12:00)
                                                                                    Marshall Is.
                                                                                </option>
                                                                                <option data-offset="43200"
                                                                                        value="Auckland">(GMT+12:00)
                                                                                    Auckland
                                                                                </option>
                                                                                <option data-offset="43200"
                                                                                        value="Wellington">(GMT+12:00)
                                                                                    Wellington
                                                                                </option>
                                                                                <option data-offset="46800"
                                                                                        value="Nuku'alofa">(GMT+13:00)
                                                                                    Nuku'alofa
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group form-group-last row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <div class="kt-checkbox-inline">
                                                                                <label class="kt-checkbox">
                                                                                    <input type="checkbox" checked="">
                                                                                    Email
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="kt-checkbox">
                                                                                    <input type="checkbox" checked="">
                                                                                    SMS
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="kt-checkbox">
                                                                                    <input type="checkbox"> Phone
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                                                                    <div class="form-group row">
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <h3 class="kt-section__title kt-section__title-md">
                                                                                User's Account Settings</h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Login
                                                                            verification</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <button type="button"
                                                                                    class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">
                                                                                Setup login verification
                                                                            </button>
                                                                            <span class="form-text text-muted">
															After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
															<a href="add-user.html#" class="kt-link">Learn more</a>.
														</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Password
                                                                            reset verification</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <div class="kt-checkbox-single">
                                                                                <label class="kt-checkbox">
                                                                                    <input type="checkbox"> Require
                                                                                    personal information to reset your
                                                                                    password.
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <span class="form-text text-muted">
															For extra security, this requires you to confirm your email or phone number when you reset your password.
															<a href="add-user.html#" class="kt-link">Learn more</a>.
														</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row kt-margin-t-10 kt-margin-b-10">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <button type="button"
                                                                                    class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">
                                                                                Deactivate your account ?
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 2-->

                                            <!--begin: Form Wizard Step 3-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">Setup Your Address</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="form-group">
                                                            <label>Address Line 1</label>
                                                            <input type="text" class="form-control" name="address1"
                                                                   placeholder="Address Line 1" value="Address Line 1">
                                                            <span class="form-text text-muted">Please enter your Address.</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address Line 2</label>
                                                            <input type="text" class="form-control" name="address2"
                                                                   placeholder="Address Line 2" value="Address Line 2">
                                                            <span class="form-text text-muted">Please enter your Address.</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Postcode</label>
                                                                    <input type="text" class="form-control"
                                                                           name="postcode" placeholder="Postcode"
                                                                           value="2000">
                                                                    <span class="form-text text-muted">Please enter your Postcode.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control" name="state"
                                                                           placeholder="City" value="London">
                                                                    <span class="form-text text-muted">Please enter your City.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" class="form-control" name="state"
                                                                           placeholder="State" value="VIC">
                                                                    <span class="form-text text-muted">Please enter your Postcode.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Country:</label>
                                                                    <select name="country" class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AX">Åland Islands</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AS">American Samoa</option>
                                                                        <option value="AD">Andorra</option>
                                                                        <option value="AO">Angola</option>
                                                                        <option value="AI">Anguilla</option>
                                                                        <option value="AQ">Antarctica</option>
                                                                        <option value="AG">Antigua and Barbuda</option>
                                                                        <option value="AR">Argentina</option>
                                                                        <option value="AM">Armenia</option>
                                                                        <option value="AW">Aruba</option>
                                                                        <option value="AU" selected="">Australia
                                                                        </option>
                                                                        <option value="AT">Austria</option>
                                                                        <option value="AZ">Azerbaijan</option>
                                                                        <option value="BS">Bahamas</option>
                                                                        <option value="BH">Bahrain</option>
                                                                        <option value="BD">Bangladesh</option>
                                                                        <option value="BB">Barbados</option>
                                                                        <option value="BY">Belarus</option>
                                                                        <option value="BE">Belgium</option>
                                                                        <option value="BZ">Belize</option>
                                                                        <option value="BJ">Benin</option>
                                                                        <option value="BM">Bermuda</option>
                                                                        <option value="BT">Bhutan</option>
                                                                        <option value="BO">Bolivia, Plurinational State
                                                                            of
                                                                        </option>
                                                                        <option value="BQ">Bonaire, Sint Eustatius and
                                                                            Saba
                                                                        </option>
                                                                        <option value="BA">Bosnia and Herzegovina
                                                                        </option>
                                                                        <option value="BW">Botswana</option>
                                                                        <option value="BV">Bouvet Island</option>
                                                                        <option value="BR">Brazil</option>
                                                                        <option value="IO">British Indian Ocean
                                                                            Territory
                                                                        </option>
                                                                        <option value="BN">Brunei Darussalam</option>
                                                                        <option value="BG">Bulgaria</option>
                                                                        <option value="BF">Burkina Faso</option>
                                                                        <option value="BI">Burundi</option>
                                                                        <option value="KH">Cambodia</option>
                                                                        <option value="CM">Cameroon</option>
                                                                        <option value="CA">Canada</option>
                                                                        <option value="CV">Cape Verde</option>
                                                                        <option value="KY">Cayman Islands</option>
                                                                        <option value="CF">Central African Republic
                                                                        </option>
                                                                        <option value="TD">Chad</option>
                                                                        <option value="CL">Chile</option>
                                                                        <option value="CN">China</option>
                                                                        <option value="CX">Christmas Island</option>
                                                                        <option value="CC">Cocos (Keeling) Islands
                                                                        </option>
                                                                        <option value="CO">Colombia</option>
                                                                        <option value="KM">Comoros</option>
                                                                        <option value="CG">Congo</option>
                                                                        <option value="CD">Congo, the Democratic
                                                                            Republic of the
                                                                        </option>
                                                                        <option value="CK">Cook Islands</option>
                                                                        <option value="CR">Costa Rica</option>
                                                                        <option value="CI">Côte d'Ivoire</option>
                                                                        <option value="HR">Croatia</option>
                                                                        <option value="CU">Cuba</option>
                                                                        <option value="CW">Curaçao</option>
                                                                        <option value="CY">Cyprus</option>
                                                                        <option value="CZ">Czech Republic</option>
                                                                        <option value="DK">Denmark</option>
                                                                        <option value="DJ">Djibouti</option>
                                                                        <option value="DM">Dominica</option>
                                                                        <option value="DO">Dominican Republic</option>
                                                                        <option value="EC">Ecuador</option>
                                                                        <option value="EG">Egypt</option>
                                                                        <option value="SV">El Salvador</option>
                                                                        <option value="GQ">Equatorial Guinea</option>
                                                                        <option value="ER">Eritrea</option>
                                                                        <option value="EE">Estonia</option>
                                                                        <option value="ET">Ethiopia</option>
                                                                        <option value="FK">Falkland Islands (Malvinas)
                                                                        </option>
                                                                        <option value="FO">Faroe Islands</option>
                                                                        <option value="FJ">Fiji</option>
                                                                        <option value="FI">Finland</option>
                                                                        <option value="FR">France</option>
                                                                        <option value="GF">French Guiana</option>
                                                                        <option value="PF">French Polynesia</option>
                                                                        <option value="TF">French Southern Territories
                                                                        </option>
                                                                        <option value="GA">Gabon</option>
                                                                        <option value="GM">Gambia</option>
                                                                        <option value="GE">Georgia</option>
                                                                        <option value="DE">Germany</option>
                                                                        <option value="GH">Ghana</option>
                                                                        <option value="GI">Gibraltar</option>
                                                                        <option value="GR">Greece</option>
                                                                        <option value="GL">Greenland</option>
                                                                        <option value="GD">Grenada</option>
                                                                        <option value="GP">Guadeloupe</option>
                                                                        <option value="GU">Guam</option>
                                                                        <option value="GT">Guatemala</option>
                                                                        <option value="GG">Guernsey</option>
                                                                        <option value="GN">Guinea</option>
                                                                        <option value="GW">Guinea-Bissau</option>
                                                                        <option value="GY">Guyana</option>
                                                                        <option value="HT">Haiti</option>
                                                                        <option value="HM">Heard Island and McDonald
                                                                            Islands
                                                                        </option>
                                                                        <option value="VA">Holy See (Vatican City
                                                                            State)
                                                                        </option>
                                                                        <option value="HN">Honduras</option>
                                                                        <option value="HK">Hong Kong</option>
                                                                        <option value="HU">Hungary</option>
                                                                        <option value="IS">Iceland</option>
                                                                        <option value="IN">India</option>
                                                                        <option value="ID">Indonesia</option>
                                                                        <option value="IR">Iran, Islamic Republic of
                                                                        </option>
                                                                        <option value="IQ">Iraq</option>
                                                                        <option value="IE">Ireland</option>
                                                                        <option value="IM">Isle of Man</option>
                                                                        <option value="IL">Israel</option>
                                                                        <option value="IT">Italy</option>
                                                                        <option value="JM">Jamaica</option>
                                                                        <option value="JP">Japan</option>
                                                                        <option value="JE">Jersey</option>
                                                                        <option value="JO">Jordan</option>
                                                                        <option value="KZ">Kazakhstan</option>
                                                                        <option value="KE">Kenya</option>
                                                                        <option value="KI">Kiribati</option>
                                                                        <option value="KP">Korea, Democratic People's
                                                                            Republic of
                                                                        </option>
                                                                        <option value="KR">Korea, Republic of</option>
                                                                        <option value="KW">Kuwait</option>
                                                                        <option value="KG">Kyrgyzstan</option>
                                                                        <option value="LA">Lao People's Democratic
                                                                            Republic
                                                                        </option>
                                                                        <option value="LV">Latvia</option>
                                                                        <option value="LB">Lebanon</option>
                                                                        <option value="LS">Lesotho</option>
                                                                        <option value="LR">Liberia</option>
                                                                        <option value="LY">Libya</option>
                                                                        <option value="LI">Liechtenstein</option>
                                                                        <option value="LT">Lithuania</option>
                                                                        <option value="LU">Luxembourg</option>
                                                                        <option value="MO">Macao</option>
                                                                        <option value="MK">Macedonia, the former
                                                                            Yugoslav Republic of
                                                                        </option>
                                                                        <option value="MG">Madagascar</option>
                                                                        <option value="MW">Malawi</option>
                                                                        <option value="MY">Malaysia</option>
                                                                        <option value="MV">Maldives</option>
                                                                        <option value="ML">Mali</option>
                                                                        <option value="MT">Malta</option>
                                                                        <option value="MH">Marshall Islands</option>
                                                                        <option value="MQ">Martinique</option>
                                                                        <option value="MR">Mauritania</option>
                                                                        <option value="MU">Mauritius</option>
                                                                        <option value="YT">Mayotte</option>
                                                                        <option value="MX">Mexico</option>
                                                                        <option value="FM">Micronesia, Federated States
                                                                            of
                                                                        </option>
                                                                        <option value="MD">Moldova, Republic of</option>
                                                                        <option value="MC">Monaco</option>
                                                                        <option value="MN">Mongolia</option>
                                                                        <option value="ME">Montenegro</option>
                                                                        <option value="MS">Montserrat</option>
                                                                        <option value="MA">Morocco</option>
                                                                        <option value="MZ">Mozambique</option>
                                                                        <option value="MM">Myanmar</option>
                                                                        <option value="NA">Namibia</option>
                                                                        <option value="NR">Nauru</option>
                                                                        <option value="NP">Nepal</option>
                                                                        <option value="NL">Netherlands</option>
                                                                        <option value="NC">New Caledonia</option>
                                                                        <option value="NZ">New Zealand</option>
                                                                        <option value="NI">Nicaragua</option>
                                                                        <option value="NE">Niger</option>
                                                                        <option value="NG">Nigeria</option>
                                                                        <option value="NU">Niue</option>
                                                                        <option value="NF">Norfolk Island</option>
                                                                        <option value="MP">Northern Mariana Islands
                                                                        </option>
                                                                        <option value="NO">Norway</option>
                                                                        <option value="OM">Oman</option>
                                                                        <option value="PK">Pakistan</option>
                                                                        <option value="PW">Palau</option>
                                                                        <option value="PS">Palestinian Territory,
                                                                            Occupied
                                                                        </option>
                                                                        <option value="PA">Panama</option>
                                                                        <option value="PG">Papua New Guinea</option>
                                                                        <option value="PY">Paraguay</option>
                                                                        <option value="PE">Peru</option>
                                                                        <option value="PH">Philippines</option>
                                                                        <option value="PN">Pitcairn</option>
                                                                        <option value="PL">Poland</option>
                                                                        <option value="PT">Portugal</option>
                                                                        <option value="PR">Puerto Rico</option>
                                                                        <option value="QA">Qatar</option>
                                                                        <option value="RE">Réunion</option>
                                                                        <option value="RO">Romania</option>
                                                                        <option value="RU">Russian Federation</option>
                                                                        <option value="RW">Rwanda</option>
                                                                        <option value="BL">Saint Barthélemy</option>
                                                                        <option value="SH">Saint Helena, Ascension and
                                                                            Tristan da Cunha
                                                                        </option>
                                                                        <option value="KN">Saint Kitts and Nevis
                                                                        </option>
                                                                        <option value="LC">Saint Lucia</option>
                                                                        <option value="MF">Saint Martin (French part)
                                                                        </option>
                                                                        <option value="PM">Saint Pierre and Miquelon
                                                                        </option>
                                                                        <option value="VC">Saint Vincent and the
                                                                            Grenadines
                                                                        </option>
                                                                        <option value="WS">Samoa</option>
                                                                        <option value="SM">San Marino</option>
                                                                        <option value="ST">Sao Tome and Principe
                                                                        </option>
                                                                        <option value="SA">Saudi Arabia</option>
                                                                        <option value="SN">Senegal</option>
                                                                        <option value="RS">Serbia</option>
                                                                        <option value="SC">Seychelles</option>
                                                                        <option value="SL">Sierra Leone</option>
                                                                        <option value="SG">Singapore</option>
                                                                        <option value="SX">Sint Maarten (Dutch part)
                                                                        </option>
                                                                        <option value="SK">Slovakia</option>
                                                                        <option value="SI">Slovenia</option>
                                                                        <option value="SB">Solomon Islands</option>
                                                                        <option value="SO">Somalia</option>
                                                                        <option value="ZA">South Africa</option>
                                                                        <option value="GS">South Georgia and the South
                                                                            Sandwich Islands
                                                                        </option>
                                                                        <option value="SS">South Sudan</option>
                                                                        <option value="ES">Spain</option>
                                                                        <option value="LK">Sri Lanka</option>
                                                                        <option value="SD">Sudan</option>
                                                                        <option value="SR">Suriname</option>
                                                                        <option value="SJ">Svalbard and Jan Mayen
                                                                        </option>
                                                                        <option value="SZ">Swaziland</option>
                                                                        <option value="SE">Sweden</option>
                                                                        <option value="CH">Switzerland</option>
                                                                        <option value="SY">Syrian Arab Republic</option>
                                                                        <option value="TW">Taiwan, Province of China
                                                                        </option>
                                                                        <option value="TJ">Tajikistan</option>
                                                                        <option value="TZ">Tanzania, United Republic
                                                                            of
                                                                        </option>
                                                                        <option value="TH">Thailand</option>
                                                                        <option value="TL">Timor-Leste</option>
                                                                        <option value="TG">Togo</option>
                                                                        <option value="TK">Tokelau</option>
                                                                        <option value="TO">Tonga</option>
                                                                        <option value="TT">Trinidad and Tobago</option>
                                                                        <option value="TN">Tunisia</option>
                                                                        <option value="TR">Turkey</option>
                                                                        <option value="TM">Turkmenistan</option>
                                                                        <option value="TC">Turks and Caicos Islands
                                                                        </option>
                                                                        <option value="TV">Tuvalu</option>
                                                                        <option value="UG">Uganda</option>
                                                                        <option value="UA">Ukraine</option>
                                                                        <option value="AE">United Arab Emirates</option>
                                                                        <option value="GB">United Kingdom</option>
                                                                        <option value="US">United States</option>
                                                                        <option value="UM">United States Minor Outlying
                                                                            Islands
                                                                        </option>
                                                                        <option value="UY">Uruguay</option>
                                                                        <option value="UZ">Uzbekistan</option>
                                                                        <option value="VU">Vanuatu</option>
                                                                        <option value="VE">Venezuela, Bolivarian
                                                                            Republic of
                                                                        </option>
                                                                        <option value="VN">Viet Nam</option>
                                                                        <option value="VG">Virgin Islands, British
                                                                        </option>
                                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                                        <option value="WF">Wallis and Futuna</option>
                                                                        <option value="EH">Western Sahara</option>
                                                                        <option value="YE">Yemen</option>
                                                                        <option value="ZM">Zambia</option>
                                                                        <option value="ZW">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 3-->

                                            <!--begin: Form Wizard Step 4-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">Review your Details and Submit
                                                </div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v4__review">
                                                        <div class="kt-wizard-v4__review-item">
                                                            <div class="kt-wizard-v4__review-title">
                                                                Your Account Details
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                John Wick
                                                                <br/> Phone: +61412345678
                                                                <br/> Email: johnwick@reeves.com
                                                            </div>
                                                        </div>
                                                        <div class="kt-wizard-v4__review-item">
                                                            <div class="kt-wizard-v4__review-title">
                                                                Your Address Details
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                Address Line 1
                                                                <br/> Address Line 2
                                                                <br/> Melbourne 3000, VIC, Australia
                                                            </div>
                                                        </div>
                                                        <div class="kt-wizard-v4__review-item">
                                                            <div class="kt-wizard-v4__review-title">
                                                                Payment Details
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                Card Number: xxxx xxxx xxxx 1111
                                                                <br/> Card Name: John Wick
                                                                <br/> Card Expiry: 01/21
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 4-->

                                            <!--begin: Form Actions -->
                                            <div class="kt-form__actions">
                                                <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                                     data-ktwizard-type="action-prev">
                                                    Previous
                                                </div>
                                                <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                                     data-ktwizard-type="action-submit">
                                                    Submit
                                                </div>
                                                <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                                     data-ktwizard-type="action-next">
                                                    Next Step
                                                </div>
                                            </div>
                                            <!--end: Form Actions -->
                                        </form>
                                        <!--end: Form Wizard Form-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end:: Content -->                </div>

            <!-- begin:: Footer -->
            <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-footer__copyright">
                        2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
                    </div>
                    <div class="kt-footer__menu">
                        <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
                    </div>
                </div>
            </div>
            <!-- end:: Footer -->            </div>
    </div>
</div>

<!-- end:: Page -->

<!-- begin::Quick Panel -->
<div id="kt_quick_panel" class="kt-quick-panel">
    <a href="add-user.html#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i
                class="flaticon2-delete"></i></a>

    <div class="kt-quick-panel__nav">
        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x"
            role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="add-user.html#kt_quick_panel_tab_notifications"
                   role="tab">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="add-user.html#kt_quick_panel_tab_logs" role="tab">Audit
                    Logs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="add-user.html#kt_quick_panel_tab_settings" role="tab">Settings</a>
            </li>
        </ul>
    </div>

    <div class="kt-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                <div class="kt-notification">
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-line-chart kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been received
                            </div>
                            <div class="kt-notification__item-time">
                                2 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-box-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-chart2 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Application has been approved
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-image-file kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New file has been uploaded
                            </div>
                            <div class="kt-notification__item-time">
                                5 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-drop kt-font-info"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New user feedback received
                            </div>
                            <div class="kt-notification__item-time">
                                8 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                System reboot has been successfully completed
                            </div>
                            <div class="kt-notification__item-time">
                                12 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-favourite kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been placed
                            </div>
                            <div class="kt-notification__item-time">
                                15 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item kt-notification__item--read">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-safe kt-font-primary"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Company meeting canceled
                            </div>
                            <div class="kt-notification__item-time">
                                19 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-psd kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New report has been received
                            </div>
                            <div class="kt-notification__item-time">
                                23 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-download-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Finance report has been generated
                            </div>
                            <div class="kt-notification__item-time">
                                25 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-security kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer comment recieved
                            </div>
                            <div class="kt-notification__item-time">
                                2 days ago
                            </div>
                        </div>
                    </a>
                    <a href="add-user.html#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                                3 days ago
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                <div class="kt-notification-v2">
                    <a href="add-user.html#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-bell kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                5 new user generated report
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>
                    </a>

                    <a href="add-user.html#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-box kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                2 new items submited
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                by Grog John
                            </div>
                        </div>
                    </a>

                    <a href="add-user.html#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-psd kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                79 PSD files generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>
                    </a>

                    <a href="add-user.html#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-supermarket kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                $2900 worth producucts sold
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Total 234 items
                            </div>
                        </div>
                    </a>

                    <a href="add-user.html#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-paper-plane-1 kt-font-success"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>

                    <a href="add-user.html#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-information kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                Database server is down
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                10 mins ago
                            </div>
                        </div>
                    </a>

                    <a href="add-user.html#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-mail-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                System report has been generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>

                    <a href="add-user.html#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-hangouts-logo kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end::Quick Panel -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->


<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#2c77f4",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>
<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="../../../../../themes/metronic/theme/default/demo3/dist/assets/plugins/global/plugins.bundle.js"
        type="text/javascript"></script>
<script src="../../../../../themes/metronic/theme/default/demo3/dist/assets/js/scripts.bundle.js"
        type="text/javascript"></script>
<!--end::Global Theme Bundle -->


<!--begin::Page Scripts(used by this page) -->
<script src="../../../../../themes/metronic/theme/default/demo3/dist/assets/js/pages/custom/user/add-user.js"
        type="text/javascript"></script>
<!--end::Page Scripts -->
</body>
<!-- end::Body -->
</html>
