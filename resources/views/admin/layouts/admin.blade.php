<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head>
    <title>{{ config('app.name', 'MobinTadabir') }} - @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, حالت تیره, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="پنل ادمین مترونیک  " />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="مترونیک by ساتراس وب" />
    <link rel="canonical" href="http://index.html" />
    <link rel="shortcut icon" href="{{asset('/media/logos/favicon.ico')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/cssfamily=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('/css/admin/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{asset('/css/admin/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
@include('sweet::alert')
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeحالت = "light"; var thememode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { thememode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getitem("data-bs-theme") !== null ) { thememode = localStorage.getitem("data-bs-theme"); } else { thememode = defaultThemeحالت; } } if (thememode === "system") { thememode = window.matchMedia("(prefers-color-scheme: dark)").matches  "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", thememode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::اپلیکیشن-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        @include('admin.sections.header')
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="index.html">
                        <img alt="Logo" src="{{asset('/media/logos/default-dark.svg')}}" class="h-25px app-sidebar-logo-default" />
                        <img alt="Logo" src="{{asset('/media/logos/default-small.svg')}}" class="h-20px app-sidebar-logo-minimize" />
                    </a>
                    <!--end::Logo image-->
                    <!--begin::Sidebar toggle-->
                    <!--begin::به حداقل رساندن sidebar setup:
            if (isset($_COموفقIE["sidebar_minimize_state"]) && $_COموفقIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. افزودن "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
                    <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                        <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Sidebar toggle-->
                </div>
                <!--end::Logo-->
                <!--begin::sidebar menu-->
                @include('admin.sections.sidebar')
                <!--end::sidebar menu-->
                <!--begin::Footer-->
                <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                    <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house کامپوننت ها and 3rd-party plugins">
                        <span class="btn-label">اسناد و کامپوننت ها</span>
                        <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Sidebar-->
            <!--begin::اصلی-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    @include('admin.sections.toolbar')
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    @yield('content')
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                @include('admin.sections.footer')
                <!--end::Footer-->
            </div>
            <!--end:::اصلی-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::اپلیکیشن-->
<!--begin::کشوs-->
<!--begin::فعالیتها drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none border-0 rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
            <h3 class="card-title fw-bold text-gray-900">گزارش ها</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
                <!--begin::تایم لاین items-->
                <div class="تایم لاین تایم لاین-border-dashed">
                    <!--begin::تایم لاین item-->
                    <div class="تایم لاین-item">
                        <!--begin::تایم لاین line-->
                        <div class="تایم لاین-line"></div>
                        <!--end::تایم لاین line-->
                        <!--begin::تایم لاین icon-->
                        <div class="تایم لاین-icon">
                            <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </div>
                        <!--end::تایم لاین icon-->
                        <!--begin::تایم لاین content-->
                        <div class="تایم لاین-content mb-10 mt-n1">
                            <!--begin::تایم لاین heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">در پروژه اپلیکیشن موبایل  کار جدید برای شما وجود دارد:</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="{{asset('/media/avatars/300-14.jpg')}}" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::تایم لاین heading-->
                            <!--begin::تایم لاین details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                    <!--begin::Title-->
                                    <a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">ملاقات با مشتری</a>
                                    <!--end::Title-->
                                    <!--begin::Tags-->
                                    <div class="min-w-175px pe-2">
                                        <span class="badge badge-light text-muted">طراح نرم افزار</span>
                                    </div>
                                    <!--end::Tags-->
                                    <!--begin::users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{asset('/media/avatars/300-2.jpg')}}" alt="img" />
                                        </div>
                                        <!--end::user-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{asset('/media/avatars/300-14.jpg')}}" alt="img" />
                                        </div>
                                        <!--end::user-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::users-->
                                    <!--begin::پردازش-->
                                    <div class="min-w-125px pe-2">
                                        <span class="badge badge-light-primary">درحال پردازش</span>
                                    </div>
                                    <!--end::پردازش-->
                                    <!--begin::Actions-->
                                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Record-->
                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                    <!--begin::Title-->
                                    <a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">آماده سازی تحویل پروژه</a>
                                    <!--end::Title-->
                                    <!--begin::Tags-->
                                    <div class="min-w-175px">
                                        <span class="badge badge-light text-muted">توسعه دهنده سیستم</span>
                                    </div>
                                    <!--end::Tags-->
                                    <!--begin::users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{asset('/media/avatars/300-20.jpg')}}" alt="img" />
                                        </div>
                                        <!--end::user-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::users-->
                                    <!--begin::پردازش-->
                                    <div class="min-w-125px">
                                        <span class="badge badge-light-success">کامل شد</span>
                                    </div>
                                    <!--end::پردازش-->
                                    <!--begin::Actions-->
                                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Record-->
                            </div>
                            <!--end::تایم لاین details-->
                        </div>
                        <!--end::تایم لاین content-->
                    </div>
                    <!--end::تایم لاین item-->
                    <!--begin::تایم لاین item-->
                    <div class="تایم لاین-item">
                        <!--begin::تایم لاین line-->
                        <div class="تایم لاین-line"></div>
                        <!--end::تایم لاین line-->
                        <!--begin::تایم لاین icon-->
                        <div class="تایم لاین-icon me-4">
                            <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::تایم لاین icon-->
                        <!--begin::تایم لاین content-->
                        <div class="تایم لاین-content mb-10 mt-n2">
                            <!--begin::تایم لاین heading-->
                            <div class="overflow-auto pe-3">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">دعوت نامه برای ساخت طراحی های جذاب که کارگاه انسانی را بیان می کنند</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">ارسال شده در ساعت 4:23</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                        <img src="{{asset('/media/avatars/300-1.jpg')}}" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::تایم لاین heading-->
                        </div>
                        <!--end::تایم لاین content-->
                    </div>
                    <!--end::تایم لاین item-->
                    <!--begin::تایم لاین item-->
                    <div class="تایم لاین-item">
                        <!--begin::تایم لاین line-->
                        <div class="تایم لاین-line"></div>
                        <!--end::تایم لاین line-->
                        <!--begin::تایم لاین icon-->
                        <div class="تایم لاین-icon">
                            <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </div>
                        <!--end::تایم لاین icon-->
                        <!--begin::تایم لاین content-->
                        <div class="تایم لاین-content mb-10 mt-n1">
                            <!--begin::تایم لاین heading-->
                            <div class="mb-5 pe-3">
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 پروژه ورودی جدید پرونده ها:</a>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">ارسال شده در ساعت 10:30</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                        <img src="{{asset('/media/avatars/300-23.jpg')}}" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::تایم لاین heading-->
                            <!--begin::تایم لاین details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                    <!--begin::item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3" src="{{asset('/media/svg/files/pdf.svg')}}" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">دارایی، مالیه، سرمایه گذاری </a>
                                            <!--end::Desc-->
                                            <!--begin::شماره کارت-->
                                            <div class="text-gray-500">1.9mb</div>
                                            <!--end::شماره کارت-->
                                        </div>
                                        <!--begin::Info-->
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="apps/projects/project.html" class="w-30px me-3" src="{{asset('/media/svg/files/doc.svg')}}" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bold">مشتری نتایج تست</a>
                                            <!--end::Desc-->
                                            <!--begin::شماره کارت-->
                                            <div class="text-gray-500">18kb</div>
                                            <!--end::شماره کارت-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex flex-aligns-center">
                                        <!--begin::Icon-->
                                        <img alt="apps/projects/project.html" class="w-30px me-3" src="{{asset('/media/svg/files/css.svg')}}" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bold">دارایی، مالیه، سرمایه گذاری گزارشات</a>
                                            <!--end::Desc-->
                                            <!--begin::شماره کارت-->
                                            <div class="text-gray-500">20mb</div>
                                            <!--end::شماره کارت-->
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::item-->
                                </div>
                            </div>
                            <!--end::تایم لاین details-->
                        </div>
                        <!--end::تایم لاین content-->
                    </div>
                    <!--end::تایم لاین item-->
                    <!--begin::تایم لاین item-->
                    <div class="تایم لاین-item">
                        <!--begin::تایم لاین line-->
                        <div class="تایم لاین-line"></div>
                        <!--end::تایم لاین line-->
                        <!--begin::تایم لاین icon-->
                        <div class="تایم لاین-icon">
                            <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::تایم لاین icon-->
                        <!--begin::تایم لاین content-->
                        <div class="تایم لاین-content mb-10 mt-n1">
                            <!--begin::تایم لاین heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">وظیفه
                                    <a href="#" class="text-primary fw-bold me-1">#45890</a>ادغام با
                                    <a href="#" class="text-primary fw-bold me-1">#45890</a>داشبورد پروژه ها:</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">آغاز شده در 4:23 بعد از ظهر توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="{{asset('/media/avatars/300-14.jpg')}}" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::تایم لاین heading-->
                        </div>
                        <!--end::تایم لاین content-->
                    </div>
                    <!--end::تایم لاین item-->
                    <!--begin::تایم لاین item-->
                    <div class="تایم لاین-item">
                        <!--begin::تایم لاین line-->
                        <div class="تایم لاین-line"></div>
                        <!--end::تایم لاین line-->
                        <!--begin::تایم لاین icon-->
                        <div class="تایم لاین-icon">
                            <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::تایم لاین icon-->
                        <!--begin::تایم لاین content-->
                        <div class="تایم لاین-content mb-10 mt-n1">
                            <!--begin::تایم لاین heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">3 مفهوم جدید طراحی برنامه اضافه شده است:</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">ایجاد شده در 4:23 بعد از ظهر توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                        <img src="{{asset('/media/avatars/300-2.jpg')}}" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::تایم لاین heading-->
                            <!--begin::تایم لاین details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                    <!--begin::item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="{{asset('/media/stock/600x400/img-29.jpg')}}" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="{{asset('/media/stock/600x400/img-31.jpg')}}" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="overlay">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="{{asset('/media/stock/600x400/img-40.jpg')}}" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::item-->
                                </div>
                            </div>
                            <!--end::تایم لاین details-->
                        </div>
                        <!--end::تایم لاین content-->
                    </div>
                    <!--end::تایم لاین item-->
                    <!--begin::تایم لاین item-->
                    <div class="تایم لاین-item">
                        <!--begin::تایم لاین line-->
                        <div class="تایم لاین-line"></div>
                        <!--end::تایم لاین line-->
                        <!--begin::تایم لاین icon-->
                        <div class="تایم لاین-icon">
                            <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::تایم لاین icon-->
                        <!--begin::تایم لاین content-->
                        <div class="تایم لاین-content mb-10 mt-n1">
                            <!--begin::تایم لاین heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">کیس جدید
                                    <a href="#" class="text-primary fw-bold me-1">#67890</a>در پروژه چند پلتفرمی دیتابیس دیزاین به شما واگذار شده است</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <a href="#" class="text-primary fw-bold me-1">رضا علی ابادی</a>
                                        <!--end::user-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::تایم لاین heading-->
                        </div>
                        <!--end::تایم لاین content-->
                    </div>
                    <!--end::تایم لاین item-->
                    <!--begin::تایم لاین item-->
                    <div class="تایم لاین-item">
                        <!--begin::تایم لاین line-->
                        <div class="تایم لاین-line"></div>
                        <!--end::تایم لاین line-->
                        <!--begin::تایم لاین icon-->
                        <div class="تایم لاین-icon">
                            <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::تایم لاین icon-->
                        <!--begin::تایم لاین content-->
                        <div class="تایم لاین-content mb-10 mt-n1">
                            <!--begin::تایم لاین heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">رسید به دست شما سفارش جدید</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">در 5:05 صبح توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                        <img src="{{asset('/media/avatars/300-4.jpg')}}" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::تایم لاین heading-->
                            <!--begin::تایم لاین details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">پردازش دیتابی کامل شد</h4>
                                            <div class="fs-6 text-gray-700 pe-7">وارد ادمین داشبورد شوید تا مطمئن شوید که یکپارچگی داده ها موفق است</div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Actions-->
                                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">پردازش</a>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::تایم لاین details-->
                        </div>
                        <!--end::تایم لاین content-->
                    </div>
                    <!--end::تایم لاین item-->
                    <!--begin::تایم لاین item-->
                    <div class="تایم لاین-item">
                        <!--begin::تایم لاین line-->
                        <div class="تایم لاین-line"></div>
                        <!--end::تایم لاین line-->
                        <!--begin::تایم لاین icon-->
                        <div class="تایم لاین-icon">
                            <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </div>
                        <!--end::تایم لاین icon-->
                        <!--begin::تایم لاین content-->
                        <div class="تایم لاین-content mt-n1">
                            <!--begin::تایم لاین heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">سفارش جدید
                                    <a href="#" class="text-primary fw-bold me-1">#67890</a>برای برنامه ریزی کارگاه و برآورد بودجه قرار داده شده است</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">در ساعت 4:23 بعد از ظهر توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <a href="#" class="text-primary fw-bold me-1">محسن علی ابادی</a>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::تایم لاین heading-->
                        </div>
                        <!--end::تایم لاین content-->
                    </div>
                    <!--end::تایم لاین item-->
                </div>
                <!--end::تایم لاین items-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
            <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">نمایش تمام فعالیت ها
                <i class="ki-duotone ki-arrow-left fs-3 text-primary">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i></a>
        </div>
        <!--end::Footer-->
    </div>
</div>
<!--end::فعالیتها drawer-->
<!--begin::چت drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::کارت header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::user-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">رضا علی ابادی</a>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">فعال</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::user-->
            </div>
            <!--end::Title-->
            <!--begin::کارت toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-dots-square fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">مخاطبین</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">افزودن مخاطب</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">دعوت مخاطبین
                                <span class="ms-2" data-bs-toggle="tooltip" title="برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">گروه ها</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">ساختن گروه</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">دعوت کاربران</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">تنظیمات</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">تنظیمات</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::کارت toolbar-->
        </div>
        <!--end::کارت header-->
        <!--begin::کارت body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::پیام ها-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">دو دقیقه پیش</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">چقدر احتمال دارد که شرکت ما را به دوستان و خانواده خود پیشنهاد دهید </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5دقیقه پیش</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset('/media/avatars/300-1.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">سلام ، ما فقط در حال نوشتن هستیم تا به شما اطلاع دهیم که در مخزن گیت هاب مشترک شده اید.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(out)-->
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">یکساعت پیش</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">بله فهمیدم</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 ساعت</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset('/media/avatars/300-1.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">شما برای همه موارد اعلان دریافت خواهید کرد ، درخواستها را بکشید!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(out)-->
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">3 ساعت</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">شما می توانید با کلیک بر روی اینجا فوراً این مخزن را تماشا کنید:
                            <a href="https://keenthemes.com">satrasweb.ir</a></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 ساعت</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset('/media/avatars/300-1.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">بیشتر دوره های بازرگانی خریداری شده در طول این فروش!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(out)-->
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">5 ساعت</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">شرکت BBQ برای جشن گرفتن دستاوردها و اهداف سه ماهه آخر. غذا و نوشیدنی ارائه شده است</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">فقط</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset('/media/avatars/300-1.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(template for out)-->
                <!--begin::پیام(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">فقط</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Bigمعامله for you.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(template for in)-->
            </div>
            <!--end::پیام ها-->
        </div>
        <!--end::کارت body-->
        <!--begin::کارت footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="نوشتن پیام"></textarea>
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="بزودی">
                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="بزودی">
                        <i class="ki-duotone ki-cloud-add fs-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
                <!--end::Actions-->
                <!--begin::ارسال-->
                <button class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                <!--end::ارسال-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::کارت footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::چت drawer-->
<!--begin::چت drawer-->
<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
    <!--begin::Messenger-->
    <div class="card card-flush w-100 rounded-0">
        <!--begin::کارت header-->
        <div class="card-header">
            <!--begin::Title-->
            <h3 class="card-title text-gray-900 fw-bold">سبد خرید</h3>
            <!--end::Title-->
            <!--begin::کارت toolbar-->
            <div class="card-toolbar">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                    <i class="ki-duotone ki-cross fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::کارت toolbar-->
        </div>
        <!--end::کارت header-->
        <!--begin::کارت body-->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">
            <!--begin::item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">ایبلندر</a>
                        <span class="text-gray-500 fw-semibold d-block">بهترین گجت آشپزخانه در سال 2022</span>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">5</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="{{asset('/media/stock/600x400/img-1.jpg')}}" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::item-->
            <!--begin::separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::separator-->
            <!--begin::item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">پاک کننده هوشمند</a>
                        <span class="text-gray-500 fw-semibold d-block">ابزار هوشمند برای پخت و پز</span>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">4</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="{{asset('/media/stock/600x400/img-3.jpg')}}" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::item-->
            <!--begin::separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::separator-->
            <!--begin::item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">دوربین</a>
                        <span class="text-gray-500 fw-semibold d-block">دوربین حرفه ای حرفه ای برای لبه</span>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">3</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="{{asset('/media/stock/600x400/img-8.jpg')}}" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::item-->
            <!--begin::separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::separator-->
            <!--begin::item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D پرینتer</a>
                        <span class="text-gray-500 fw-semibold d-block">ساخت اشیاء منحصر به فرد</span>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="{{asset('/media/stock/600x400/img-26.jpg')}}" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::item-->
            <!--begin::separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::separator-->
            <!--begin::item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
                        <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="{{asset('/media/stock/600x400/img-21.jpg')}}" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::item-->
            <!--begin::separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::separator-->
            <!--begin::item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
                        <span class="text-gray-500 fw-semibold d-block">پروفایل info,تایم لاین etc</span>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">6</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="{{asset('/media/stock/600x400/img-34.jpg')}}" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::item-->
            <!--begin::separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::separator-->
            <!--begin::item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D پرینتer</a>
                        <span class="text-gray-500 fw-semibold d-block">ساخت اشیاء منحصر به فرد</span>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">8</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="{{asset('/media/stock/600x400/img-27.jpg')}}" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::item-->
        </div>
        <!--end::کارت body-->
        <!--begin::کارت footer-->
        <div class="card-footer">
            <!--begin::item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">کل</span>
                <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
            </div>
            <!--end::item-->
            <!--begin::item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">زیر مجموع</span>
                <span class="text-primary fw-bolder fs-5">$ 246.35</span>
            </div>
            <!--end::item-->
            <!--end::Actions-->
            <div class="d-flex justify-content-end mt-9">
                <a href="#" class="btn btn-primary d-flex justify-content-end">ثبت سفارش</a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::کارت footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::چت drawer-->
<!--end::کشوs-->
<!--begin::Scrolltop-->
@include('admin.sections.scrolltop')
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - ارتقا دهید plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">یک برنامه را ارتقا کنید</h1>
                    <div class="text-muted fw-semibold fs-5">اگر به اطلاعات لازم دارید ، لطفاً بررسی کنید
                        <a href="#" class="link-primary fw-bold">دستورالعمل قیمت گذاری</a>.</div>
                </div>
                <!--end::Heading-->
                <!--begin::برنامه ریزی ها-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">ماهانه</button>
                        <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">سالانه</button>
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                <!--begin::Tab link-->
                                <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">استارت آپ</div>
                                            <div class="fw-semibold opacity-75">برای استارت آپ ها</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <span class="mb-2">ت</span>
                                        <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </label>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">پیشرفته</div>
                                            <div class="fw-semibold opacity-75">برتر for 100+ team size</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <span class="mb-2">ت</span>
                                        <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </label>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">شرکت، پروژه
                                                <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">محبوب</span></div>
                                            <div class="fw-semibold opacity-75">ارزش برتر برای تیم 1000+</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <span class="mb-2">ت</span>
                                        <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </label>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="custom" />
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">سفارشی</div>
                                            <div class="fw-semibold opacity-75">دوباره مجوز سفارشی را دوباره تهیه کنید</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <a href="#" class="btn btn-sm btn-success">تماس با ما</a>
                                    </div>
                                    <!--end::قیمت-->
                                </label>
                                <!--end::Tab link-->
                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-gray-900">برنامه ی استارت اپ شما چیست؟</h2>
                                        <div class="text-muted fw-semibold">بهینه برای تیم بیش از 10 نفر و استارت آپ جدید</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فعال ترین کاربران</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام پروژه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">ماژول حسابداری</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">بستر شبکه</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">فضای نامحدود ابر</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-gray-900">برنامه ی استارت اپ شما چیست؟</h2>
                                        <div class="text-muted fw-semibold">بهینه برای تیم 100+ شششرکت الکترونیکی و رشد یافته</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فعال ترین کاربران</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام پروژه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول حسابداری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">بستر شبکه</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">فضای نامحدود ابر</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-gray-900">برنامه ی استارت اپ شما چیست؟</h2>
                                        <div class="text-muted fw-semibold">Optimal for 1000+ team و بنگاه اقتصادی</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فعال ترین کاربران</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام پروژه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول حسابداری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">بستر شبکه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فضای نامحدود ابر</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-gray-900">برنامه ی استارت اپ شما چیست؟</h2>
                                        <div class="text-muted fw-semibold">بهینه برای شرکت ها</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">نامحدود کاربران</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">نامحدود پروژه ادغام ها</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول حسابداری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">بستر شبکه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فضای نامحدود ابر</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::برنامه ریزی ها-->
                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">انصراف</button>
                    <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                        <!--begin::Indicatیا label-->
                        <span class="indicator-label">ارتقا طرح</span>
                        <!--end::Indicatیا label-->
                        <!--begin::Indicatیا progress-->
                        <span class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicatیا progress-->
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - ارتقا دهید plan-->
<!--begin::Modal - ساختن اپ-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>ساختن اپ</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                    <!--begin::کناری-->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav ps-lg-10">
                            <!--begin::مرحله 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">جزییات</h3>
                                        <div class="stepper-desc">نام اپلیکیشن شما</div>
                                    </div>
                                    <!--end::Tags-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::مرحله 1-->
                            <!--begin::مرحله 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">فریمورک</h3>
                                        <div class="stepper-desc">چارچوب برنامه خود را تعریف کنید</div>
                                    </div>
                                    <!--begin::Tags-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::مرحله 2-->
                            <!--begin::مرحله 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">دیتابیس</h3>
                                        <div class="stepper-desc">انتخاب نوع دیتابیس</div>
                                    </div>
                                    <!--end::Tags-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::مرحله 3-->
                            <!--begin::مرحله 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">صورتحساب</h3>
                                        <div class="stepper-desc">جزییات پرداخت</div>
                                    </div>
                                    <!--end::Tags-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::مرحله 4-->
                            <!--begin::مرحله 5-->
                            <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">کامل شد</h3>
                                        <div class="stepper-desc">بازبینی و ثبت</div>
                                    </div>
                                    <!--end::Tags-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::مرحله 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--begin::کناری-->
                    <!--begin::Content-->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!--begin::form-->
                        <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                            <!--begin::مرحله 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required">اپلیکیشن نام</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="نام برنامه منحصر به فرد خود را مشخص کنید">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                            <span class="required">دسته بندی</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="انتخاب دسته بندی اپلیکیشن">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin:تنظیمات-->
                                        <div class="fv-row">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-compass fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">دوره های آنلاین سریع</span>
																<span class="fs-7 text-muted">ایجاد یک ساختار متن واضح فقط یک  سئو است</span>
															</span>
                                                    <!--end:Info-->
														</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1" />
														</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<i class="ki-duotone ki-element-11 fs-1 text-danger">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
															</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">بحث های چهره به چهره</span>
																<span class="fs-7 text-muted">ایجاد یک ساختار متن روشن فقط یک جنبه است</span>
															</span>
                                                    <!--end:Info-->
														</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2" />
														</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<i class="ki-duotone ki-timer fs-1 text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">آموزش مقدماتی کامل</span>
																<span class="fs-7 text-muted">ایجاد یک متن متن روشن برای نوشتن متن</span>
															</span>
                                                    <!--end:Info-->
														</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3" />
														</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end:تنظیمات-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::مرحله 1-->
                            <!--begin::مرحله 2-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                            <span class="required">انتخاب فریمورک</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="فریمویاک برنامه های خود را مشخص کنید">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-html fs-2x text-warning">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">HTML5</span>
															<span class="fs-7 text-muted">Base Web حرفه ایjec</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-react fs-2x text-success">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">ReactJS</span>
															<span class="fs-7 text-muted">فریمویاک برنامه قوی و انعطاف پذیر</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2" />
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="ki-duotone ki-angular fs-2x text-danger">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Angular</span>
															<span class="fs-7 text-muted">مدیریت قوی دیتاها</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="3" />
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="ki-duotone ki-vue fs-2x text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Vue</span>
															<span class="fs-7 text-muted">چارچوب سبک و پاسخگو</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4" />
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::مرحله 2-->
                            <!--begin::مرحله 3-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Tags-->
                                        <label class="required fs-5 fw-semibold mb-2">نام دیتابیس</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                            <span class="required">انتخاب موتور دیتابیس</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="انتخاب your app database engine">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Tags-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-note text-success fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">MYSQL</span>
															<span class="fs-7 text-muted">دیتابیس پایه</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
													</span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Tags-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="ki-duotone ki-google text-danger fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">فایربیس</span>
															<span class="fs-7 text-muted">گوگل بیس</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2" />
													</span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer">
                                            <!--begin::Tags-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-microsoft text-warning fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</span>
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">DynamoDB</span>
															<span class="fs-7 text-muted">Microsoft Fast NoSQL دیتابیس</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="3" />
													</span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::مرحله 3-->
                            <!--begin::مرحله 4-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">نام بر روی کارت</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="نام دارنده کارت را مشخص کنید">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="مکس اندره" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Tags-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">شماره کارت</label>
                                        <!--end::Tags-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder="شماره کارت را وارد کنید" name="card_number" value="4111 1111 1111 1111" />
                                            <!--end::Input-->
                                            <!--begin::کارت logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="{{asset('/media/svg/card-logos/visa.svg')}}" alt="" class="h-25px" />
                                                <img src="{{asset('/media/svg/card-logos/mastercard.svg')}}" alt="" class="h-25px" />
                                                <img src="{{asset('/media/svg/card-logos/american-express.svg')}}" alt="" class="h-25px" />
                                            </div>
                                            <!--end::کارت logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Tags-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">تاریخ انقضا</label>
                                            <!--end::Tags-->
                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="ماه">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="سال">
                                                        <option></option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                        <option value="2033">2033</option>
                                                        <option value="2034">2034</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Tags-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">CVV</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                <!--end::Input-->
                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <i class="ki-duotone ki-credit-cart fs-2hx">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Tags-->
                                        <div class="me-5">
                                            <label class="fs-6 fw-semibold form-label">کارت را برای صورتحساب بیشتر ذخیره کنید؟</label>
                                            <div class="fs-7 fw-semibold text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را بررسی کنید</div>
                                        </div>
                                        <!--end::Tags-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            <span class="form-check-label fw-semibold text-muted">ذخیره کارت</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::مرحله 4-->
                            <!--begin::مرحله 5-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100 text-center">
                                    <!--begin::Heading-->
                                    <h1 class="fw-bold text-gray-900 mb-3">ریلیز !</h1>
                                    <!--end::Heading-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fw-semibold fs-3">برنامه خود را برای شروع پروژه خود ثبت کنید.</div>
                                    <!--end::توضیحات-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-4 py-15">
                                        <img src="{{asset('/media/illustrations/sketchy-1/9.png')}}" alt="" class="mw-100 mh-300px" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::مرحله 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous"><i class="ki-duotone ki-arrow-right fs-3 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>برگشت</button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">ثبت
												<i class="ki-duotone ki-arrow-left fs-3 ms-2 me-0">
													<span class="path1"></span>
													<span class="path2"></span>
												</i></span>
                                        <span class="indicator-progress">لطفا صبر کنید...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">ادامه
                                        <i class="ki-duotone ki-arrow-left fs-3 ms-1 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i></button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - ساختن اپ-->
<!--begin::Modal - هدف جدید-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:form-->
                <form id="kt_modal_new_target_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">تنظیم اولین هدف</h1>
                        <!--end::Title-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fw-semibold fs-5">اگر به اطلاعات لازم دارید ، لطفاً بررسی کنید
                            <a href="#" class="fw-bold link-primary">دستورالعمل های پروژه</a>.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Tags-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">عنوان هدف</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="یک نام هدف را برای استفاده و مرجع در آینده مشخص کنید">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                        </label>
                        <!--end::Tags-->
                        <input type="text" class="form-control form-control-solid" placeholder="عنوان" name="target_title" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">اختصاص دادن</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="انتخاب عضو" name="target_assign">
                                <option value="">انتخاب user...</option>
                                <option value="1">کارینا کالرک</option>
                                <option value="2">رابرت دو</option>
                                <option value="3">قلی رضایی</option>
                                <option value="4">امید وحیدی</option>
                                <option value="5">محسن برومند</option>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">سررسید</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::تاریخpicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="انتخاب یک تاریخ" name="due_date" />
                                <!--end::تاریخpicker-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">جزییات</label>
                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="نوع جزییات"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Tags-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">برچسب ها</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="اولویت هدف را مشخص کنید">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                        </label>
                        <!--end::Tags-->
                        <input class="form-control form-control-solid" value="وارد کردن, فوری" name="tags" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Tags-->
                        <div class="me-5">
                            <label class="fs-6 fw-semibold">افزودن کاربران</label>
                            <div class="fs-7 fw-semibold text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را بررسی کنید</div>
                        </div>
                        <!--end::Tags-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Tags-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">اعلان ها</label>
                                <div class="fs-7 text-muted">اجازه اعلان ها توسط تلفن یا ایمیل</div>
                            </div>
                            <!--end::Tags-->
                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
                                    <span class="form-check-label fw-semibold">ایمیل</span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
                                    <span class="form-check-label fw-semibold">تلفن</span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">انصراف</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">ثبت</span>
                            <span class="indicator-progress">لطفا صبر کنید...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - هدف جدید-->
<!--begin::Modal - نمایش users-->
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">مرور کاربران</h1>
                    <!--end::Title-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fw-semibold fs-5">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را بررسی کنید
                        <a href="#" class="link-primary fw-bold">کاربران مستقیم</a>.</div>
                    <!--end::توضیحات-->
                </div>
                <!--end::Heading-->
                <!--begin::users-->
                <div class="mb-15">
                    <!--begin::لیست-->
                    <div class="mh-375px scroll-y me-n7 pe-7">
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-6.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">مرادی نیا
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">کارگردان هنری</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">میلاد مرادی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">بازاریابی تحلیلی</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$50,500</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-1.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">جلالی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">مهندس نرم افزار</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">max@kt.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$75,900</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-5.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">محسن برومند
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">توسعه دهنده وب</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$10,500</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">رضا علی ابادی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">طراح یو ای و یوایکس</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$20,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">میکائیل کرمانی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">سرپرست بازاریابی</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">mik@pex.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$9,300</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-9.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">محمد رصایی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">معمار نرم افزار</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$15,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">امید وحیدی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">مدیر سیستم</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">محسن برومند
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">مدیریت اکانت</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$45,800</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-23.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">علی کاربر
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">طراح سایت</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$90,500</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">الهام بارانی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2"> دارایی، مالیه، سرمایه گذاری</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$5,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-12.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">آنا کوهی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">ارتباط مشتری</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$70,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">رابرت دو
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">بازاریابی اجرایی</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">robert@benko.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-gray-900">$45,500</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                    </div>
                    <!--end::لیست-->
                </div>
                <!--end::users-->
                <!--begin::Notice-->
                <div class="d-flex justify-content-between">
                    <!--begin::Tags-->
                    <div class="fw-semibold">
                        <label class="fs-6">افزودن کاربران</label>
                        <div class="fs-7 text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را بررسی کنید</div>
                    </div>
                    <!--end::Tags-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" checked="checked" />
                        <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - نمایش users-->
<!--begin::Modal - Users جستجو-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">جستجو کاربران</h1>
                    <div class="text-muted fw-semibold fs-5">دعوت از همکاران به پروژه شما</div>
                </div>
                <!--end::Content-->
                <!--begin::جستجو-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(افزودنed to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="جستجو..." data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
                        <!--end::Spinner-->
                        <!--begin::ریست-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
                        <!--end::ریست-->
                    </form>
                    <!--end::form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::پیشنهادات-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold mb-5">اخیرly searched:</h3>
                            <!--end::Heading-->
                            <!--begin::users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="{{asset('/media/avatars/300-6.jpg')}}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">مرادی نیا</span>
                                        <span class="badge badge-light">کارگردان هنری</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">میلاد مرادی</span>
                                        <span class="badge badge-light">بازاریابی تحلیلی</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="{{asset('/media/avatars/300-1.jpg')}}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">جلالی</span>
                                        <span class="badge badge-light">مهندس نرم افزار</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="{{asset('/media/avatars/300-5.jpg')}}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">محسن برومند</span>
                                        <span class="badge badge-light">توسعه دهنده وب</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">رضا علی ابادی</span>
                                        <span class="badge badge-light">طراح یو ای و یوایکس</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                            </div>
                            <!--end::users-->
                        </div>
                        <!--end::پیشنهادات-->
                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-6.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">مرادی نیا</a>
                                            <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میلاد مرادی</a>
                                            <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-1.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جلالی</a>
                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-5.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                                            <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا علی ابادی</a>
                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میکائیل کرمانی</a>
                                            <div class="fw-semibold text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-9.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد رصایی</a>
                                            <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">امید وحیدی</a>
                                            <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-23.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">علی کاربر</a>
                                            <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">الهام بارانی</a>
                                            <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-12.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">آنا کوهی</a>
                                            <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رابرت دو</a>
                                            <div class="fw-semibold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-13.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جواد مولای</a>
                                            <div class="fw-semibold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">لقمان کامرانی</a>
                                            <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-21.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">احسان ورزقانی</a>
                                            <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا علی ابادی</a>
                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                            </div>
                            <!--end::users-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">انصراف</button>
                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">کاربران انتخاب شده را اضافه کنید</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-semibold py-10">
                                <div class="text-gray-600 fs-3 mb-2">کاربری پیدا نشد</div>
                                <div class="text-muted fs-6">سعی کنید با نام کاربری، نام کامل یا ایمیل جستجو کنید...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="{{asset('/media/illustrations/sketchy-1/1.png')}}" alt="" class="w-100 h-200px h-sm-325px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::جستجو-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users جستجو-->
<!--begin::Modal - دعوت دوستs-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">دعوت از دوستان</h1>
                    <!--end::Title-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fw-semibold fs-5">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را بررسی کنید
                        <a href="#" class="link-primary fw-bold">صفحه سوالات متداول</a>.</div>
                    <!--end::توضیحات-->
                </div>
                <!--end::Heading-->
                <!--begin::Google Contacts دعوت-->
                <div class="btn btn-light-primary fw-bold w-100 mb-8">
                    <img alt="Logo" src="{{asset('/media/svg/brand-logos/google-icon.svg')}}" class="h-20px me-3" />دعوت از مخاطبین جمیل</div>
                <!--end::Google Contacts دعوت-->
                <!--begin::separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">یا</span>
                </div>
                <!--end::separator-->
                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="ایمیل خود را وارد کنید"></textarea>
                <!--end::Textarea-->
                <!--begin::users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-semibold mb-2">دعوت از کاربران</div>
                    <!--end::Heading-->
                    <!--begin::لیست-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-6.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">مرادی نیا</a>
                                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میلاد مرادی</a>
                                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-1.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جلالی</a>
                                    <div class="fw-semibold text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-5.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-25.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا علی ابادی</a>
                                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میکائیل کرمانی</a>
                                    <div class="fw-semibold text-muted">mik@pex.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-9.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد رصایی</a>
                                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">امید وحیدی</a>
                                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-23.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">علی کاربر</a>
                                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">الهام بارانی</a>
                                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-12.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">آنا کوهی</a>
                                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رابرت دو</a>
                                    <div class="fw-semibold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-13.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جواد مولای</a>
                                    <div class="fw-semibold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">لقمان کامرانی</a>
                                    <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/media/avatars/300-21.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">احسان ورزقانی</a>
                                    <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">امید وحیدی</a>
                                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                    </div>
                    <!--end::لیست-->
                </div>
                <!--end::users-->
                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Tags-->
                    <div class="me-5 fw-semibold">
                        <label class="fs-6">افزودن کاربران</label>
                        <div class="fs-7 text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را بررسی کنید</div>
                    </div>
                    <!--end::Tags-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - دعوت دوست-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('/js/admin/plugins.bundle.js')}}"></script>
<script src="{{asset('/js/admin/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{asset('/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::سفارشی Javascript(used for this page only)-->
<script src="{{asset('/js/widgets.bundle.js')}}"></script>
<script src="{{asset('/js/custom/widgets.js')}}"></script>
<script src="{{asset('/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('/js/custom/utilities/modals/new-target.js')}}"></script>
<script src="{{asset('/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::سفارشی Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
