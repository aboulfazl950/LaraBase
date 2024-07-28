<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head>
    <base href="../../../" />
    <title>پنل ادمین مترونیک  </title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, حالت تیره, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="پنل ادمین مترونیک  " />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="مترونیک by ساتراس وب" />
    <link rel="canonical" href="http://authentication/layouts/creative/sign-up.html" />
    <link rel="shortcut icon" href="{{asset('/media/logos/favicon.ico')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/cssfamily=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/css/admin/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeحالت = "light"; var thememode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { thememode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getitem("data-bs-theme") !== null ) { thememode = localStorage.getitem("data-bs-theme"); } else { thememode = defaultThemeحالت; } } if (thememode === "system") { thememode = window.matchMedia("(prefers-color-scheme: dark)").matches  "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", thememode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>body { background-image: url('{{asset('/media/auth/bg4.jpg')}}'); } [data-bs-theme="dark"] body { background-image: url('{{asset('/media/auth/bg4-dark.jpg')}}'); }</style>
    <!--end::Page bg image-->
    <!--begin::احراز هویت - ثبت نام -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::کناری-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::کناری-->
            <div class="d-flex flex-center flex-lg-start flex-column">
                <!--begin::Logo-->
                <a href="index.html" class="mb-7">
                    <img alt="Logo" src="{{asset('/media/logos/custom-3.svg')}}" />
                </a>
                <!--end::Logo-->
                <!--begin::Title-->
                <h2 class="text-white fw-normal m-0">ابزارهای برندسازی که برای کسب و کار شما طراحی شده اند</h2>
                <!--end::Title-->
            </div>
            <!--begin::کناری-->
        </div>
        <!--begin::کناری-->
        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
            <!--begin::کارت-->
            <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                    <!--begin::form-->
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="authentication/layouts/creative/sign-in.html" action="#">
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-gray-900 fw-bolder mb-3">ثبت نام</h1>
                            <!--end::Title-->
                            <!--begin::Subtitle-->
                            <div class="text-gray-500 fw-semibold fs-6">شماr سوشیال کمپین ها</div>
                            <!--end::Subtitle=-->
                        </div>
                        <!--begin::Heading-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::ایمیل-->
                            <input type="text" placeholder="ایمیل" name="email" autocomplete="off" class="form-control bg-transparent" />
                            <!--end::ایمیل-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-8" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control bg-transparent" type="password" placeholder="کلمه عبور" name="password" autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-2"></i>
												<i class="ki-duotone ki-eye fs-2 d-none"></i>
											</span>
                                </div>
                                <!--end::Input wrapper-->
                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <div class="text-muted">از 8 یا بیشتر کاراکتر با ترکیبی از حروف، اعداد و نمادها استفاده کنید.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->
                        <!--end::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::تکرار رمز عبور-->
                            <input placeholder="تکرار رمز عبور" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
                            <!--end::تکرار رمز عبور-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Accept-->
                        <div class="fv-row mb-8">
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">من قبول میکنم
										<a href="#" class="ms-1 link-primary">تیم ها</a></span>
                            </label>
                        </div>
                        <!--end::Accept-->
                        <!--begin::ثبت button-->
                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                <!--begin::Indicatیا label-->
                                <span class="indicator-label">ثبت نام</span>
                                <!--end::Indicatیا label-->
                                <!--begin::Indicatیا progress-->
                                <span class="indicator-progress">لطفا صبر کنید...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicatیا progress-->
                            </button>
                        </div>
                        <!--end::ثبت button-->
                        <!--begin::ثبت نام-->
                        <div class="text-gray-500 text-center fw-semibold fs-6">از قبل اکانت دارید
                            <a href="{{route('login')}}" class="link-primary fw-semibold">ورود</a></div>
                        <!--end::ثبت نام-->
                    </form>
                    <!--end::form-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Footer-->
                <div class="d-flex flex-stack px-lg-10">
                    <!--begin::زبانs-->
                    <div class="me-0">
                        <!--begin::Toggle-->
                        <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-offset="0px, 0px">
                            <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="{{asset('/media/flags/united-states.svg')}}" alt="" />
                            <span data-kt-element="current-lang-name" class="me-1">انگلیسی</span>
                            <i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
                        </button>
                        <!--end::Toggle-->
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="انگلیسی">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="{{asset('/media/flags/united-states.svg')}}" alt="" />
											</span>
                                    <span data-kt-element="lang-name">انگلیسی</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="اسپانیایی">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="{{asset('/media/flags/spain.svg')}}" alt="" />
											</span>
                                    <span data-kt-element="lang-name">اسپانیایی</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="آلمانی">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="{{asset('/media/flags/germany.svg')}}" alt="" />
											</span>
                                    <span data-kt-element="lang-name">آلمانی</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="ژاپنی">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="{{asset('/media/flags/japan.svg')}}" alt="" />
											</span>
                                    <span data-kt-element="lang-name">ژاپنی</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="فرانسه">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="{{asset('/media/flags/france.svg')}}" alt="" />
											</span>
                                    <span data-kt-element="lang-name">فرانسه</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::زبانs-->
                    <!--begin::Links-->
                    <div class="d-flex fw-semibold text-primary fs-base gap-5">
                        <a href="pages/team.html" target="_blank">تیم ها</a>
                        <a href="pages/pricing/column.html" target="_blank">برنامه ریزی ها</a>
                        <a href="pages/contact.html" target="_blank">تماس با ما</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::کارت-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::احراز هویت - ثبت نام-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('/js/admin/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::سفارشی Javascript(used for this page only)-->
<script src="{{asset('/js/custom/authentication/sign-up/general.js')}}"></script>
<!--end::سفارشی Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
