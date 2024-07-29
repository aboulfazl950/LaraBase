@extends('account.layouts.profile')

@section('ac-content')
    <!--begin::Row-->
    <div class="row g-xxl-9">
        <!--begin::Col-->
        <div class="col-xxl-8">
            <!--begin::امنیت summary-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3 class="m-0 text-gray-900">امنیت خلاصه</h3>
                    </div>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bold" id="kt_security_summary_tabs">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary active" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_security_summary_tab_pane_hours">12 ساعت</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="kt_security_summary_tab_day" href="#kt_security_summary_tab_pane_day">روز</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab" id="kt_security_summary_tab_week" href="#kt_security_summary_tab_pane_week">هفته</a>
                            </li>
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-7 pb-0 px-0">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours" role="tabpanel">
                            <!--begin::Row-->
                            <div class="row p-0 mb-5 px-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-success d-block">کاربر ورود</span>
                                        <span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="36899">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-primary d-block">ورود مدیر</span>
                                        <span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="72">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-danger d-block">تلاش های ناموفق</span>
                                        <span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="291">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Container-->
                            <div class="pt-2">
                                <!--begin::Tabs-->
                                <div class="d-flex align-items-center pb-6 px-9">
                                    <!--begin::Title-->
                                    <h3 class="m-0 text-gray-900 flex-grow-1">نمودار فعالیت</h3>
                                    <!--end::Title-->
                                    <!--begin::Nav pills-->
                                    <ul class="nav nav-pills nav-line-pills border rounded p-1">
                                        <li class="nav-item me-2">
                                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-500 py-2 px-5 fs-6 fw-semibold active" data-bs-toggle="tab" id="kt_security_summary_tab_hours_agents" href="#kt_security_summary_tab_pane_hours_agents">آژانس</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-500 py-2 px-5 fs-6 fw-semibold" data-bs-toggle="tab" id="kt_security_summary_tab_hours_clients" href="#kt_security_summary_tab_pane_hours_clients">مشتری ها</a>
                                        </li>
                                    </ul>
                                    <!--end::Nav pills-->
                                </div>
                                <!--end::Tabs-->
                                <!--begin::Tab content-->
                                <div class="tab-content px-3">
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours_agents" role="tabpanel">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_hours_agents" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Tab pane-->
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade" id="kt_security_summary_tab_pane_hours_clients" role="tabpanel">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_hours_clients" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div class="tab-pane fade" id="kt_security_summary_tab_pane_day" role="tabpanel">
                            <!--begin::Row-->
                            <div class="row p-0 mb-5 px-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-success d-block">کاربر ورود</span>
                                        <span class="fs-2hx fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="30467">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-primary d-block">ورود مدیر</span>
                                        <span class="fs-2hx fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="120">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-danger d-block">تلاش های ناموفق</span>
                                        <span class="fs-2hx fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="23">0</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Container-->
                            <div class="pt-2">
                                <!--begin::Tabs-->
                                <div class="d-flex align-items-center pb-9 px-9">
                                    <h3 class="m-0 text-gray-800 flex-grow-1">نمودار فعالیت</h3>
                                    <!--begin::Nav pills-->
                                    <ul class="nav nav-pills nav-line-pills border rounded p-1">
                                        <li class="nav-item me-2">
                                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-500 py-2 px-5 fs-6 fw-semibold active" data-bs-toggle="tab" id="kt_security_summary_tab_day_agents" href="#kt_security_summary_tab_pane_day_agents">آژانس</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-active-light btn-active-color-gray-700 btn-color-gray-500 py-2 px-5 fs-6 fw-semibold" data-bs-toggle="tab" id="kt_security_summary_tab_day_clients" href="#kt_security_summary_tab_pane_day_clients">مشتری ها</a>
                                        </li>
                                    </ul>
                                    <!--end::Nav pills-->
                                </div>
                                <!--end::Tabs-->
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_day_agents" role="tabpanel">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_day_agents" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_security_summary_tab_pane_day_clients" role="tabpanel">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_day_clients" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div class="tab-pane fade" id="kt_security_summary_tab_pane_week" role="tabpanel">
                            <!--begin::Row-->
                            <div class="row p-0 mb-5 px-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-lg-4 fs-6 fw-semibold text-success d-block">کاربر ورود</span>
                                        <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="340">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-lg-4 fs-6 fw-semibold text-primary d-block">ورود مدیر</span>
                                        <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="90">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-lg-4 fs-6 fw-semibold text-danger d-block">تلاش های ناموفق</span>
                                        <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true" data-kt-countup-value="230">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Container-->
                            <div class="pt-2">
                                <!--begin::Tabs-->
                                <div class="d-flex align-items-center pb-9 px-9">
                                    <h3 class="m-0 text-gray-800 flex-grow-1">نمودار فعالیت</h3>
                                    <!--begin::Nav pills-->
                                    <ul class="nav nav-pills nav-line-pills border rounded p-1">
                                        <li class="nav-item me-2">
                                            <a class="nav-link btn btn-active-light py-2 px-5 fs-6 btn-active-color-gray-700 btn-color-gray-500 fw-semibold active" data-bs-toggle="tab" id="kt_security_summary_tab_week_agents" href="#kt_security_summary_tab_pane_week_agents">آژانس</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-active-light py-2 px-5 btn-active-color-gray-700 btn-color-gray-500 fs-6 fw-semibold" data-bs-toggle="tab" id="kt_security_summary_tab_week_clients" href="#kt_security_summary_tab_pane_week_clients">مشتری ها</a>
                                        </li>
                                    </ul>
                                    <!--end::Nav pills-->
                                </div>
                                <!--end::Tabs-->
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_week_agents" role="tabpanel">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_week_agents" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_security_summary_tab_pane_week_clients" role="tabpanel">
                                        <!--begin::Chart-->
                                        <div id="kt_security_summary_chart_week_clients" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::امنیت summary-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xxl-4">
            <!--begin::امنیت recent alerts-->
            <div class="card card-xxl-stretch-50 mb-5 mb-xl-10">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Carousel-->
                    <div id="kt_security_recent_alerts" class="carousel carousel-custom carousel-stretch slide" data-bs-ride="carousel" data-bs-interval="8000">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack align-items-center flex-wrap">
                            <h4 class="text-gray-500 fw-semibold mb-0 pe-2">اخرین هشدارها</h4>
                            <!--begin::Carousel Indicatیاs-->
                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="0" class="ms-1 active"></li>
                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="1" class="ms-1"></li>
                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="2" class="ms-1"></li>
                            </ol>
                            <!--end::Carousel Indicatیاs-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Carousel inner-->
                        <div class="carousel-inner pt-6">
                            <!--begin::item-->
                            <div class="carousel-item active">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::توضیحات-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">آخرین اطلاعاتی ها </a>
                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">در سال گذشته ، احتمالاً مجبور شده اید خود را با شیوه های جدید زندگی و کار وفق دهید.</p>
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::خلاصه-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Jun 10, 2021</span>
                                        <a href="#" class="btn btn-sm btn-light">بیشتر بدانید</a>
                                    </div>
                                    <!--end::خلاصه-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::item-->
                            <!--begin::item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::توضیحات-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">تلاش ورود ناموفق بود</a>
                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">همانطور که به یک سال کار از راه دور نزدیک می شویم ، می خواهیم نگاهی به گذشته بیندازیم و برخی از روش های همکاری موثر تیم های سراسر جهان را به اشتراک بگذاریم.</p>
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::خلاصه-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Oct 05, 2021</span>
                                        <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">پیوستن</a>
                                    </div>
                                    <!--end::خلاصه-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::item-->
                            <!--begin::item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::توضیحات-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">انتخاب برای شما</a>
                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">امروز ما از اشتراک یک فرصت صدور گواهینامه شگفت انگیز که برای آموزش همه چیز به شما طراحی شده است هیجان زده هستیم</p>
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::خلاصه-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Sep 11, 2021</span>
                                        <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Collabیاate</a>
                                    </div>
                                    <!--end::خلاصه-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::item-->
                        </div>
                        <!--end::Carousel inner-->
                    </div>
                    <!--end::Carousel-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::امنیت recent alerts-->
            <!--begin::امنیت guidelines-->
            <div class="card card-xxl-stretch-50 mb-5 mb-xl-10">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Carousel-->
                    <div id="kt_security_guidelines" class="carousel carousel-custom carousel-stretch slide" data-bs-ride="carousel" data-bs-interval="8000">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack align-items-center flex-wrap">
                            <h4 class="text-gray-500 fw-semibold mb-0 pe-2">رهنمودهای امنیتی</h4>
                            <!--begin::Carousel Indicatیاs-->
                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="0" class="ms-1 active"></li>
                                <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="1" class="ms-1"></li>
                                <li data-bs-target="#kt_security_guidelines" data-bs-slide-to="2" class="ms-1"></li>
                            </ol>
                            <!--end::Carousel Indicatیاs-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Carousel inner-->
                        <div class="carousel-inner pt-6">
                            <!--begin::item-->
                            <div class="carousel-item active">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::توضیحات-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">شروع به کار کنید</a>
                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">در سال گذشته ، احتمالاً مجبور شده اید خود را با شیوه های جدید زندگی و کار وفق دهید.</p>
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::خلاصه-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="text-muted fw-semibold fs-6 pe-2">توکیو</span>
                                        <a href="#" class="btn btn-sm btn-light">ثبت نام</a>
                                    </div>
                                    <!--end::خلاصه-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::item-->
                            <!--begin::item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::توضیحات-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">امنیت بروزرسانی</a>
                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">همانطور که به یک سال کار از راه دور نزدیک می شویم ، می خواهیم نگاهی به گذشته بیندازیم و برخی از روش های همکاری موثر تیم های سراسر جهان را به اشتراک بگذاریم.</p>
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::خلاصه-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Oct 05, 2021</span>
                                        <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">کاوش کنید</a>
                                    </div>
                                    <!--end::خلاصه-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::item-->
                            <!--begin::item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::توضیحات-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">تیم ها از سند استفاده</a>
                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">امروز ما از اشتراک یک فرصت صدور گواهینامه شگفت انگیز که برای آموزش همه چیز به شما طراحی شده است هیجان زده هستیم</p>
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::خلاصه-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Nov 10, 2021</span>
                                        <a href="#" class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">کشف کردن</a>
                                    </div>
                                    <!--end::خلاصه-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::item-->
                        </div>
                        <!--end::Carousel inner-->
                    </div>
                    <!--end::Carousel-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::امنیت guidelines-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Login sessions-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::کارت header-->
        <div class="card-header">
            <!--begin::Heading-->
            <div class="card-title">
                <h3>جلسات ورود به سیستم</h3>
            </div>
            <!--end::Heading-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
                <div class="my-1 me-4">
                    <!--begin::انتخاب-->
                    <select class="form-select form-select-sm form-select-solid w-125px" data-control="select2" data-placeholder="انتخاب ساعت" data-hide-search="true">
                        <option value="1" selected="selected">1 ساعت</option>
                        <option value="2">6 ساعت</option>
                        <option value="3">12 ساعت</option>
                        <option value="4">24 ساعت</option>
                    </select>
                    <!--end::انتخاب-->
                </div>
                <a href="#" class="btn btn-sm btn-primary my-1">نمایش همه</a>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::کارت header-->
        <!--begin::کارت body-->
        <div class="card-body p-0">
            <!--begin::Table wrapper-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                    <!--begin::Thead-->
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                    <tr>
                        <th class="min-w-250px">مکان</th>
                        <th class="min-w-100px">وضعیت</th>
                        <th class="min-w-150px">دستگاه</th>
                        <th class="min-w-150px">ادرس ای پی</th>
                        <th class="min-w-150px">زمان</th>
                    </tr>
                    </thead>
                    <!--end::Thead-->
                    <!--begin::Tbody-->
                    <tbody class="fw-6 fw-semibold text-gray-600">
                    <tr>
                        <td>
                            <a href="#" class="text-hover-primary text-gray-600">USA(5)</a>
                        </td>
                        <td>
                            <span class="badge badge-light-success fs-7 fw-bold">موفق</span>
                        </td>
                        <td>Chrome - Windows</td>
                        <td>236.125.56.78</td>
                        <td>دو دقیقه پیش</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                        </td>
                        <td>
                            <span class="badge badge-light-success fs-7 fw-bold">موفق</span>
                        </td>
                        <td>Safari - Mac OS</td>
                        <td>236.125.56.78</td>
                        <td>ده دقیقه پیش</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-hover-primary text-gray-600">Nیاway(-)</a>
                        </td>
                        <td>
                            <span class="badge badge-light-danger fs-7 fw-bold">خطا</span>
                        </td>
                        <td>Firefox - Windows</td>
                        <td>236.125.56.10</td>
                        <td>بیست دقیقه پیش</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-hover-primary text-gray-600">Japan(112)</a>
                        </td>
                        <td>
                            <span class="badge badge-light-success fs-7 fw-bold">موفق</span>
                        </td>
                        <td>iOS - iphone</td>
                        <td>236.125.56.54</td>
                        <td>سی دقیقه پیش</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-hover-primary text-gray-600">Italy(5)</a>
                        </td>
                        <td>
                            <span class="badge badge-light-warning fs-7 fw-bold">هشدار</span>
                        </td>
                        <td>Samsung Noted 5- Android</td>
                        <td>236.100.56.50</td>
                        <td>چهل دقیقه پیش</td>
                    </tr>
                    </tbody>
                    <!--end::Tbody-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table wrapper-->
        </div>
        <!--end::کارت body-->
    </div>
    <!--end::Login sessions-->
@endsection


@section('title')
    پروفایل من
@endsection
