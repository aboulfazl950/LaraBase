@extends('admin.layouts.admin')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::قالب بندی-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                    <!--begin::کارت-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::کارت body-->
                        <div class="card-body">
                            <!--begin::خلاصه-->
                            <!--begin::کاربر Info-->
                            <div class="d-flex flex-center flex-column py-5">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-100px symbol-circle mb-7">
                                    <img src="{{asset('/media/avatars/300-6.jpg')}}" alt="image" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::نام-->
                                <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">مرادی نیا</a>
                                <!--end::نام-->
                                <!--begin::جایگاه-->
                                <div class="mb-9">
                                    <!--begin::Badge-->
                                    <div class="badge badge-lg badge-light-primary d-inline">مدیریت</div>
                                    <!--begin::Badge-->
                                </div>
                                <!--end::جایگاه-->
                                <!--begin::Info-->
                                <!--begin::Info heading-->
                                <div class="fw-bold mb-3">تیکت های اختصاص داده شده
                                    <span class="ms-2" ddata-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="شماره کارت of support tickets assigned, closed and pending this week.">
															<i class="ki-duotone ki-information fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></div>
                                <!--end::Info heading-->
                                <div class="d-flex flex-wrap flex-center">
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                        <div class="fs-4 fw-bold text-gray-700">
                                            <span class="w-75px">243</span>
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <div class="fw-semibold text-muted">کل</div>
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                        <div class="fs-4 fw-bold text-gray-700">
                                            <span class="w-50px">56</span>
                                            <i class="ki-duotone ki-arrow-down fs-3 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <div class="fw-semibold text-muted">بسته شده</div>
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                        <div class="fs-4 fw-bold text-gray-700">
                                            <span class="w-50px">188</span>
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <div class="fw-semibold text-muted">باز</div>
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::کاربر Info-->
                            <!--end::خلاصه-->
                            <!--begin::جزییات toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">جزییات
                                    <span class="ms-2 rotate-180">
															<i class="ki-duotone ki-down fs-3"></i>
														</span></div>
                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title=" customer details">
															<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details"></a>
														</span>
                            </div>
                            <!--end::جزییات toggle-->
                            <div class="separator"></div>
                            <!--begin::جزییات content-->
                            <div id="kt_user_view_details" class="collapse show">
                                <div class="pb-5 fs-6">
                                    <!--begin::جزییات item-->
                                    <div class="fw-bold mt-5">اکانت شناسه</div>
                                    <div class="text-gray-600">شناسه-45453423</div>
                                    <!--begin::جزییات item-->
                                    <!--begin::جزییات item-->
                                    <div class="fw-bold mt-5">ایمیل</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
                                    </div>
                                    <!--begin::جزییات item-->
                                    <!--begin::جزییات item-->
                                    <div class="fw-bold mt-5">آدرس</div>
                                    <div class="text-gray-600">اهواز - کوی نفت
                                        <br />خیابان سوم - پلاک 3
                                        <br />ایران</div>
                                    <!--begin::جزییات item-->
                                    <!--begin::جزییات item-->
                                    <div class="fw-bold mt-5">زبان</div>
                                    <div class="text-gray-600">انگلیسی</div>
                                    <!--begin::جزییات item-->
                                    <!--begin::جزییات item-->
                                    <div class="fw-bold mt-5">آخرین لاگین</div>
                                    <div class="text-gray-600">20 Dec 2024, 2:40 pm</div>
                                    <!--begin::جزییات item-->
                                </div>
                            </div>
                            <!--end::جزییات content-->
                        </div>
                        <!--end::کارت body-->
                    </div>
                    <!--end::کارت-->
                    <!--begin::اتصال اکانت-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::کارت header-->
                        <div class="card-header border-0">
                            <div class="card-title">
                                <h3 class="fw-bold m-0">اتصال اکانت</h3>
                            </div>
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body pt-2">
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-semibold">
                                        <div class="fs-6 text-gray-700">با اتصال یک حساب ، بدین وسیله با ما موافقت می کنید
                                            <a href="#" class="me-1">privacy policy</a>and
                                            <a href="#">شرایط استفاده</a>.</div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                            <!--begin::items-->
                            <div class="py-2">
                                <!--begin::item-->
                                <div class="d-flex flex-stack">
                                    <div class="d-flex">
                                        <img src="{{asset('/media/svg/brand-logos/google-icon.svg')}}" class="w-30px me-6" alt="" />
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">گوگل</a>
                                            <div class="fs-6 fw-semibold text-muted">پروژه خود را به درستی برنامه ریزی کنید</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
                                            <!--end::Input-->
                                            <!--begin::Tags-->
                                            <span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_google"></span>
                                            <!--end::Tags-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::item-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--begin::item-->
                                <div class="d-flex flex-stack">
                                    <div class="d-flex">
                                        <img src="{{asset('/media/svg/brand-logos/github.svg')}}" class="w-30px me-6" alt="" />
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">گیت هاب</a>
                                            <div class="fs-6 fw-semibold text-muted">مراقب مخازن خود باشید</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
                                            <!--end::Input-->
                                            <!--begin::Tags-->
                                            <span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_github"></span>
                                            <!--end::Tags-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::item-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--begin::item-->
                                <div class="d-flex flex-stack">
                                    <div class="d-flex">
                                        <img src="{{asset('/media/svg/brand-logos/slack-icon.svg')}}" class="w-30px me-6" alt="" />
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">اسلاک</a>
                                            <div class="fs-6 fw-semibold text-muted">بحث در مورد پروژه ها را ادغام کنید</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
                                            <!--end::Input-->
                                            <!--begin::Tags-->
                                            <span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_slack"></span>
                                            <!--end::Tags-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::item-->
                            </div>
                            <!--end::items-->
                        </div>
                        <!--end::کارت body-->
                        <!--begin::کارت footer-->
                        <div class="card-footer border-0 d-flex justify-content-center pt-0">
                            <button class="btn btn-sm btn-light-primary">ذخیره تغییرات</button>
                        </div>
                        <!--end::کارت footer-->
                    </div>
                    <!--end::اتصال اکانت-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">بررسی اجمالی</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">امنیت</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">رویدادها & گزارش</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item ms-auto">
                            <!--begin::عملیات menu-->
                            <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">عملیات
                                <i class="ki-duotone ki-down fs-2 me-0"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">درگاه ها</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">ساختن فاکتور</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link flex-stack px-5">ساختن پرداخت
                                        <span class="ms-2" data-bs-toggle="tooltip" title="یک نام هدف را برای استفاده و مرجع در آینده مشخص کنید">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">اشتراک</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">اپلیکیشن</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">صورتحساب</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">بیانه ها</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
                                                    <span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">اعلان ها</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-3"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">اکانت</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">گزارشات</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="#" class="menu-link px-5">اکانت تنظیمات</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link text-danger px-5">حذف مشتری</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu-->
                        </li>
                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                            <!--begin::کارت-->
                            <div class="card card-flush mb-6 mb-xl-9">
                                <!--begin::کارت header-->
                                <div class="card-header mt-6">
                                    <!--begin::کارت title-->
                                    <div class="card-title flex-column">
                                        <h2 class="mb-1">وظایف کاربران</h2>
                                        <div class="fs-6 fw-semibold text-muted">2 جلسه پیش رو</div>
                                    </div>
                                    <!--end::کارت title-->
                                    <!--begin::کارت toolbar-->
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
                                            <i class="ki-duotone ki-brush fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>افزودن برنامه</button>
                                    </div>
                                    <!--end::کارت toolbar-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body p-9 pt-4">
                                    <!--begin::تاریخs-->
                                    <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                <span class="fs-6 fw-bolder">21</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                <span class="fs-6 fw-bolder">22</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                <span class="fs-6 fw-bolder">23</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                                <span class="opacity-50 fs-7 fw-semibold">We</span>
                                                <span class="fs-6 fw-bolder">24</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                                <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                                <span class="fs-6 fw-bolder">25</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                                <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                                <span class="fs-6 fw-bolder">26</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                                <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                                <span class="fs-6 fw-bolder">27</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                <span class="fs-6 fw-bolder">28</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                <span class="fs-6 fw-bolder">29</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                <span class="fs-6 fw-bolder">30</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                        <!--begin::تاریخ-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_10">
                                                <span class="opacity-50 fs-7 fw-semibold">We</span>
                                                <span class="fs-6 fw-bolder">31</span>
                                            </a>
                                        </li>
                                        <!--end::تاریخ-->
                                    </ul>
                                    <!--end::تاریخs-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_0" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">13:00 - 14:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">اپلیکیشن آموزشی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Mark Randall</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">فروش پیچ حرفه ای</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Michael Walters</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">11:00 - 11:45
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">طراحی داشبورد</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Bob Harris</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">اپلیکیشن آموزشی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">بهروز ازادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">تست و بازبینی پروژه</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">محمد مرادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">توسعه دهنده تیم ظرفیت بازبینی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Peter Marcus</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">طراحی داشبورد</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">مرضیه مرادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_2" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">کمیسیون بازاریابی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">محمد مرادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">13:00 - 14:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">برگشت کمیسیون</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">محمد مرادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">تست و بازبینی پروژه</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">کارینا کالرک</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">تست و بازبینی پروژه</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">جواد عزتی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">14:30 - 15:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">طراحی داشبورد</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">بهروز ازادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_3" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">11:00 - 11:45
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">توسعه دهنده تیم ظرفیت بازبینی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Walter White</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">اپلیکیشن آموزشی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">بهروز ازادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">پروژه های انجام شده </a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">محمد مرادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">11:00 - 11:45
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">توسعه دهنده تیم ظرفیت بازبینی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Bob Harris</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_4" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">ابتکار محتوای خلاقانه</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Kendell Trevیا</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">ناهار & Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">کارینا کالرک</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">13:00 - 14:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">ناهار & Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Mark Randall</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">ناهار & Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">کارینا کالرک</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">13:00 - 14:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">هفتهly تیم Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Bob Harris</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_5" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">طراحی داشبورد</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">یونس گرگانی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">برگشت کمیسیون</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Walter White</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">ناهار & Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Kendell Trevیا</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_6" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">14:30 - 15:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">هفتهly تیم Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">کارینا کالرک</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">هفتهly تیم Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">جواد عزتی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">16:30 - 17:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">ناهار & Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Bob Harris</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_7" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">کمیسیون بازاریابی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">محسن برومند</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">13:00 - 14:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">توسعه دهنده تیم ظرفیت بازبینی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Michael Walters</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">ابتکار محتوای خلاقانه</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Mark Randall</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">فروش پیچ حرفه ای</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">مرضیه مرادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_8" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">14:30 - 15:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">کمیسیون بازاریابی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Kendell Trevیا</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">توسعه دهنده تیم ظرفیت بازبینی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Mark Randall</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">توسعه دهنده تیم ظرفیت بازبینی</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">کارینا کالرک</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_9" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">10:00 - 11:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">پروژه های انجام شده </a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Peter Marcus</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">ابتکار محتوای خلاقانه</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">Bob Harris</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">14:30 - 15:30
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">هفتهly تیم Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">مرضیه مرادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">هفتهly تیم Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">محسن برومند</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                        <!--begin::روز-->
                                        <div id="kt_schedule_day_10" class="tab-pane fade show">
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">طراحی داشبورد</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">بهروز ازادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">9:00 - 10:00
                                                        <span class="fs-7 text-muted text-uppercase">am</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">هفتهly تیم Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">محمد مرادی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                            <!--begin::زمان-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5">
                                                    <!--begin::زمان-->
                                                    <div class="fs-7 mb-1">12:00 - 13:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::زمان-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">هفتهly تیم Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::user-->
                                                    <div class="fs-7 text-muted">توسط
                                                        <a href="#">یونس گرگانی</a></div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">نمایش</a>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::زمان-->
                                        </div>
                                        <!--end::روز-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::کارت-->
                            <!--begin::وظیفه ها-->
                            <div class="card card-flush mb-6 mb-xl-9">
                                <!--begin::کارت header-->
                                <div class="card-header mt-6">
                                    <!--begin::کارت title-->
                                    <div class="card-title flex-column">
                                        <h2 class="mb-1">کاربر وظیفه ها</h2>
                                        <div class="fs-6 fw-semibold text-muted">کل 25 کار در پس مانده</div>
                                    </div>
                                    <!--end::کارت title-->
                                    <!--begin::کارت toolbar-->
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
                                            <i class="ki-duotone ki-add-files fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>افزودن</button>
                                    </div>
                                    <!--end::کارت toolbar-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body d-flex flex-column">
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center position-relative mb-7">
                                        <!--begin::Tags-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                        <!--end::Tags-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">ساختن FureStibe branding logo</a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">سررسید 1 روز دیگر
                                                <a href="#">کارینا کالرک</a></div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-setting-3 fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                        <!--begin::وظیفه menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-gray-900 fw-bold">بروزرسانی وضعیت</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Tags-->
                                                    <label class="form-label fs-6 fw-semibold">وضعیت:</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">تایید شده</option>
                                                        <option value="2">در انتظار</option>
                                                        <option value="3">در حال پردازش</option>
                                                        <option value="4">رد شد</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">ریست</button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">تایید</span>
                                                        <span class="indicator-progress">لطفا صبر کنید...
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::form-->
                                        </div>
                                        <!--end::وظیفه menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center position-relative mb-7">
                                        <!--begin::Tags-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                        <!--end::Tags-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">یک قرار ملاقات تنظیم کنید</a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">سررسید 3 روزه
                                                <a href="#">رضا حسینی</a></div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-setting-3 fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                        <!--begin::وظیفه menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-gray-900 fw-bold">بروزرسانی وضعیت</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Tags-->
                                                    <label class="form-label fs-6 fw-semibold">وضعیت:</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">تایید شده</option>
                                                        <option value="2">در انتظار</option>
                                                        <option value="3">در حال پردازش</option>
                                                        <option value="4">رد شد</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">ریست</button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">تایید</span>
                                                        <span class="indicator-progress">لطفا صبر کنید...
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::form-->
                                        </div>
                                        <!--end::وظیفه menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center position-relative mb-7">
                                        <!--begin::Tags-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                        <!--end::Tags-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">پروژه های انجام شده</a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">سررسید در یک هفته
                                                <a href="#">محسن برومند</a></div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-setting-3 fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                        <!--begin::وظیفه menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-gray-900 fw-bold">بروزرسانی وضعیت</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Tags-->
                                                    <label class="form-label fs-6 fw-semibold">وضعیت:</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">تایید شده</option>
                                                        <option value="2">در انتظار</option>
                                                        <option value="3">در حال پردازش</option>
                                                        <option value="4">رد شد</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">ریست</button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">تایید</span>
                                                        <span class="indicator-progress">لطفا صبر کنید...
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::form-->
                                        </div>
                                        <!--end::وظیفه menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center position-relative mb-7">
                                        <!--begin::Tags-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                        <!--end::Tags-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">داشبورد UI & UX for Leafr سیستم مدیریت محتوا</a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">سررسید در یک هفته
                                                <a href="#">امید وحیدی</a></div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-setting-3 fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                        <!--begin::وظیفه menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-gray-900 fw-bold">بروزرسانی وضعیت</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Tags-->
                                                    <label class="form-label fs-6 fw-semibold">وضعیت:</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">تایید شده</option>
                                                        <option value="2">در انتظار</option>
                                                        <option value="3">در حال پردازش</option>
                                                        <option value="4">رد شد</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">ریست</button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">تایید</span>
                                                        <span class="indicator-progress">لطفا صبر کنید...
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::form-->
                                        </div>
                                        <!--end::وظیفه menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center position-relative">
                                        <!--begin::Tags-->
                                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                        <!--end::Tags-->
                                        <!--begin::Details-->
                                        <div class="fw-semibold ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">اپلیکیشن </a>
                                            <!--begin::Info-->
                                            <div class="fs-7 text-muted">سررسید 2 هفته دیگر
                                                <a href="#">محسن برومند</a></div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-setting-3 fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                        <!--begin::وظیفه menu-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-gray-900 fw-bold">بروزرسانی وضعیت</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::form-->
                                            <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Tags-->
                                                    <label class="form-label fs-6 fw-semibold">وضعیت:</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">تایید شده</option>
                                                        <option value="2">در انتظار</option>
                                                        <option value="3">در حال پردازش</option>
                                                        <option value="4">رد شد</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">ریست</button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
                                                        <span class="indicator-label">تایید</span>
                                                        <span class="indicator-progress">لطفا صبر کنید...
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::form-->
                                        </div>
                                        <!--end::وظیفه menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::item-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::وظیفه ها-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                            <!--begin::کارت-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::کارت header-->
                                <div class="card-header border-0">
                                    <!--begin::کارت title-->
                                    <div class="card-title">
                                        <h2>پروفایل</h2>
                                    </div>
                                    <!--end::کارت title-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>ایمیل</td>
                                                <td>smith@kpmg.com</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
                                                        <i class="ki-duotone ki-pencil fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>کلمه عبور</td>
                                                <td>******</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
                                                        <i class="ki-duotone ki-pencil fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>سطح دسترسی</td>
                                                <td>مدیریت</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
                                                        <i class="ki-duotone ki-pencil fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::کارت-->
                            <!--begin::کارت-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::کارت header-->
                                <div class="card-header border-0">
                                    <!--begin::کارت title-->
                                    <div class="card-title flex-column">
                                        <h2 class="mb-1">احراز هویت دو مرحله ای</h2>
                                        <div class="fs-6 fw-semibold text-muted">با مرحله دوم احراز هویت ، حساب خود را بیشتر ایمن نگه دارید.</div>
                                    </div>
                                    <!--end::کارت title-->
                                    <!--begin::کارت toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::افزودن-->
                                        <button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-fingerprint-scanning fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>مرحله احراز هویت را اضافه کنید</button>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_auth_app">استفاده از اپلیکیشن</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">رمز یکبار مصرف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::افزودن-->
                                    </div>
                                    <!--end::کارت toolbar-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body pb-5">
                                    <!--begin::item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Content-->
                                        <div class="d-flex flex-column">
                                            <span>پیامک</span>
                                            <span class="text-muted fs-6">+61 412 345 678</span>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end align-items-center">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                                <i class="ki-duotone ki-pencil fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <!--end::Button-->
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" id="kt_users_delete_two_step">
                                                <i class="ki-duotone ki-trash fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::item-->
                                    <!--begin:separator-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--end:separator-->
                                    <!--begin::Disclaimer-->
                                    <div class="text-gray-600">If you lose your mobile device یا security key, you can
                                        <a href='#' class="me-1">یک کد پشتیبان ایجاد کنید</a>برای ورود به سیستم حساب خود</div>
                                    <!--end::Disclaimer-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::کارت-->
                            <!--begin::کارت-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::کارت header-->
                                <div class="card-header border-0">
                                    <!--begin::کارت title-->
                                    <div class="card-title flex-column">
                                        <h2>ایمیل اعلان ها</h2>
                                        <div class="fs-6 fw-semibold text-muted">Choose what messages you’d like to receive for each of your accounts.</div>
                                    </div>
                                    <!--end::کارت title-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body">
                                    <!--begin::form-->
                                    <form class="form" id="kt_users_email_notification_form">
                                        <!--begin::item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_0" type="checkbox" value="0" id="kt_modal_update_email_notification_0" checked='checked' />
                                                <!--end::Input-->
                                                <!--begin::Tags-->
                                                <label class="form-check-label" for="kt_modal_update_email_notification_0">
                                                    <div class="fw-bold">موفقیت آمیز درگاه ها</div>
                                                    <div class="text-gray-600">برای هر پرداخت موفق یک اعلان دریافت کنید.</div>
                                                </label>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::item-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_1" type="checkbox" value="1" id="kt_modal_update_email_notification_1" />
                                                <!--end::Input-->
                                                <!--begin::Tags-->
                                                <label class="form-check-label" for="kt_modal_update_email_notification_1">
                                                    <div class="fw-bold">پرداخت ها</div>
                                                    <div class="text-gray-600">برای هر پرداخت شروع شده یک اعلان دریافت کنید.</div>
                                                </label>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::item-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_2" type="checkbox" value="2" id="kt_modal_update_email_notification_2" />
                                                <!--end::Input-->
                                                <!--begin::Tags-->
                                                <label class="form-check-label" for="kt_modal_update_email_notification_2">
                                                    <div class="fw-bold">نرم افزار فید</div>
                                                    <div class="text-gray-600">هر بار که هزینه ای را از حساب خود دریافت می کنید ، اعلانی دریافت کنید.</div>
                                                </label>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::item-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_3" type="checkbox" value="3" id="kt_modal_update_email_notification_3" checked='checked' />
                                                <!--end::Input-->
                                                <!--begin::Tags-->
                                                <label class="form-check-label" for="kt_modal_update_email_notification_3">
                                                    <div class="fw-bold">اختلاف نظرات</div>
                                                    <div class="text-gray-600">Receive a notification if a payment is disputed by a customer and for dispute resolutions.</div>
                                                </label>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::item-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_4" type="checkbox" value="4" id="kt_modal_update_email_notification_4" checked='checked' />
                                                <!--end::Input-->
                                                <!--begin::Tags-->
                                                <label class="form-check-label" for="kt_modal_update_email_notification_4">
                                                    <div class="fw-bold">پرداخت</div>
                                                    <div class="text-gray-600">اگر یک پرداخت به عنوان یک خطر بالا مشخص شده است ، اعلانی دریافت کنید.</div>
                                                </label>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::item-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_5" type="checkbox" value="5" id="kt_modal_update_email_notification_5" />
                                                <!--end::Input-->
                                                <!--begin::Tags-->
                                                <label class="form-check-label" for="kt_modal_update_email_notification_5">
                                                    <div class="fw-bold">تذکرها</div>
                                                    <div class="text-gray-600">Receive a notification if a teammate mentions you in a note.</div>
                                                </label>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::item-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_6" type="checkbox" value="6" id="kt_modal_update_email_notification_6" />
                                                <!--end::Input-->
                                                <!--begin::Tags-->
                                                <label class="form-check-label" for="kt_modal_update_email_notification_6">
                                                    <div class="fw-bold">فاکتور </div>
                                                    <div class="text-gray-600">اگر مشتری مبلغ غیر واقعی را برای پرداخت فاکتور خود ارسال کند، اعلان دریافت کنید.</div>
                                                </label>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::item-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_7" type="checkbox" value="7" id="kt_modal_update_email_notification_7" />
                                                <!--end::Input-->
                                                <!--begin::Tags-->
                                                <label class="form-check-label" for="kt_modal_update_email_notification_7">
                                                    <div class="fw-bold">وب هوک ها</div>
                                                    <div class="text-gray-600">اعلانهایی را در مورد نقاط پایانی وب قلاب که مرتباً خراب هستند دریافت کنید.</div>
                                                </label>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::item-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::item-->
                                        <div class="d-flex">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="email_notification_8" type="checkbox" value="8" id="kt_modal_update_email_notification_8" />
                                                <!--end::Input-->
                                                <!--begin::Tags-->
                                                <label class="form-check-label" for="kt_modal_update_email_notification_8">
                                                    <div class="fw-bold">آزمایش</div>
                                                    <div class="text-gray-600">Receive helpful tips when you try out our products.</div>
                                                </label>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::item-->
                                        <!--begin::عملیات buttons-->
                                        <div class="d-flex justify-content-end align-items-center mt-12">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-light me-5" id="kt_users_email_notification_cancel">انصراف</button>
                                            <!--end::Button-->
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-primary" id="kt_users_email_notification_submit">
                                                <span class="indicator-label">ذخیره</span>
                                                <span class="indicator-progress">لطفا صبر کنید...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                        <!--begin::عملیات buttons-->
                                    </form>
                                    <!--end::form-->
                                </div>
                                <!--end::کارت body-->
                                <!--begin::کارت footer-->
                                <!--end::کارت footer-->
                            </div>
                            <!--end::کارت-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                            <!--begin::کارت-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::کارت header-->
                                <div class="card-header border-0">
                                    <!--begin::کارت title-->
                                    <div class="card-title">
                                        <h2>جلسات ورود به سیستم</h2>
                                    </div>
                                    <!--end::کارت title-->
                                    <!--begin::کارت toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::فیلتر-->
                                        <button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">
                                            <i class="ki-duotone ki-entrance-right fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>پاک کردن سشن ها</button>
                                        <!--end::فیلتر-->
                                    </div>
                                    <!--end::کارت toolbar-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                            <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                            <tr class="text-start text-muted text-uppercase gs-0">
                                                <th class="min-w-100px">مکان</th>
                                                <th>دستگاه</th>
                                                <th>ادرس ای پی</th>
                                                <th class="min-w-125px">زمان</th>
                                                <th class="min-w-70px">عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>ایران</td>
                                                <td>Chome - Windows</td>
                                                <td>207.31.19.199</td>
                                                <td>23 ثانیه قبل</td>
                                                <td>سشن فعلی</td>
                                            </tr>
                                            <tr>
                                                <td>ایران</td>
                                                <td>Safari - iOS</td>
                                                <td>207.14.42.22</td>
                                                <td>سه روز پیش </td>
                                                <td>
                                                    <a href="#" data-kt-users-sign-out="single_user">خروج</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ایران</td>
                                                <td>Chrome - Windows</td>
                                                <td>207.43.21.369</td>
                                                <td>هفته قبل</td>
                                                <td>تاریخ گدشته</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::کارت-->
                            <!--begin::کارت-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::کارت header-->
                                <div class="card-header border-0">
                                    <!--begin::کارت title-->
                                    <div class="card-title">
                                        <h2>گزارش</h2>
                                    </div>
                                    <!--end::کارت title-->
                                    <!--begin::کارت toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-sm btn-light-primary">
                                            <i class="ki-duotone ki-cloud-download fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>دانلود گزارش</button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::کارت toolbar-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body py-0">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
                                            <tbody>
                                            <tr>
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-warning">404 هشدار</div>
                                                </td>
                                                <td>POST /v1/customer/c_66063863960bf/not_found</td>
                                                <td class="pe-0 text-end min-w-200px">22 Sep 2024, 11:30 am</td>
                                            </tr>
                                            <tr>
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-success">200</div>
                                                </td>
                                                <td>POST /v1/invoices/in_4250_4932/payment</td>
                                                <td class="pe-0 text-end min-w-200px">20 Jun 2024, 11:05 am</td>
                                            </tr>
                                            <tr>
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-warning">404 هشدار</div>
                                                </td>
                                                <td>POST /v1/customer/c_66063863960c1/not_found</td>
                                                <td class="pe-0 text-end min-w-200px">25 Oct 2024, 11:05 am</td>
                                            </tr>
                                            <tr>
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-danger">500</div>
                                                </td>
                                                <td>POST /v1/invoice/in_2887_7117/invalid</td>
                                                <td class="pe-0 text-end min-w-200px">20 Jun 2024, 5:20 pm</td>
                                            </tr>
                                            <tr>
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-warning">404 هشدار</div>
                                                </td>
                                                <td>POST /v1/customer/c_66063863960c1/not_found</td>
                                                <td class="pe-0 text-end min-w-200px">19 Aug 2024, 2:40 pm</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::کارت-->
                            <!--begin::کارت-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::کارت header-->
                                <div class="card-header border-0">
                                    <!--begin::کارت title-->
                                    <div class="card-title">
                                        <h2>رویدادها</h2>
                                    </div>
                                    <!--end::کارت title-->
                                    <!--begin::کارت toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-sm btn-light-primary">
                                            <i class="ki-duotone ki-cloud-download fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>دانلود گزارش</button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::کارت toolbar-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body py-0">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
                                        <tbody>
                                        <tr>
                                            <td class="min-w-400px">فاکتور
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#DER-45645</a>
                                                <span class="badge badge-light-info me-1">درحال پردازش</span>to
                                                <span class="badge badge-light-primary">در جابجایی</span></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2024, 5:20 pm</td>
                                        </tr>
                                        <tr>
                                            <td class="min-w-400px">
                                                <a href="#" class="text-gray-600 text-hover-primary me-1">جلالی</a>پرداخت کرده است به
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2024, 11:30 am</td>
                                        </tr>
                                        <tr>
                                            <td class="min-w-400px">فاکتور
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#DER-45645</a>
                                                <span class="badge badge-light-info me-1">درحال پردازش</span>to
                                                <span class="badge badge-light-primary">در جابجایی</span></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2024, 5:30 pm</td>
                                        </tr>
                                        <tr>
                                            <td class="min-w-400px">
                                                <a href="#" class="text-gray-600 text-hover-primary me-1">جلالی</a>پرداخت کرده است به
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2024, 9:23 pm</td>
                                        </tr>
                                        <tr>
                                            <td class="min-w-400px">فاکتور
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>
                                                <span class="badge badge-light-warning me-1">در انتظار</span>to
                                                <span class="badge badge-light-info">درحال پردازش</span></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2024, 11:05 am</td>
                                        </tr>
                                        <tr>
                                            <td class="min-w-400px">فاکتور
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>
                                                <span class="badge badge-light-warning me-1">در انتظار</span>to
                                                <span class="badge badge-light-info">درحال پردازش</span></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2024, 11:30 am</td>
                                        </tr>
                                        <tr>
                                            <td class="min-w-400px">فاکتور
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>
                                                <span class="badge badge-light-warning me-1">در انتظار</span>to
                                                <span class="badge badge-light-info">درحال پردازش</span></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2024, 2:40 pm</td>
                                        </tr>
                                        <tr>
                                            <td class="min-w-400px">فاکتور
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is
                                                <span class="badge badge-light-info">درحال پردازش</span></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2024, 11:05 am</td>
                                        </tr>
                                        <tr>
                                            <td class="min-w-400px">
                                                <a href="#" class="text-gray-600 text-hover-primary me-1">مرادی نیا</a>پرداخت کرده است به
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2024, 6:43 am</td>
                                        </tr>
                                        <tr>
                                            <td class="min-w-400px">
                                                <a href="#" class="text-gray-600 text-hover-primary me-1">رضا علی ابادی</a>پرداخت کرده است به
                                                <a href="#" class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2024, 8:43 pm</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::کارت-->
                        </div>
                        <!--end:::Tab pane-->
                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::قالب بندی-->
            <!--begin::Modals-->
            <!--begin::Modal - بروزرسانی user details-->
            <div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::form-->
                        <form class="form" action="#" id="kt_modal_update_user_form">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_update_user_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">بروزرسانی کاربر جزییات</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header" data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::کاربر toggle-->
                                    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_user_info">کاربر Information
                                        <span class="ms-2 rotate-180">
																<i class="ki-duotone ki-down fs-3"></i>
															</span></div>
                                    <!--end::کاربر toggle-->
                                    <!--begin::کاربر form-->
                                    <div id="kt_modal_update_user_user_info" class="collapse show">
                                        <!--begin::Input group-->
                                        <div class="mb-7">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span>بروزرسانی آواتار</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="همه بدهکار هستیم file types: png, jpg, jpeg.">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Image input wrapper-->
                                            <div class="mt-1">
                                                <!--begin::Image placeholder-->
                                                <style>.image-input-placeholder { background-image: url('{{asset('/media/svg/avatars/blank.svg')}}'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{asset('/media/svg/avatars/blank-dark.svg')}}'); }</style>
                                                <!--end::Image placeholder-->
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                    <!--begin::نمایش existing avatar-->
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('/media/avatars/300-6.jpg')}})"></div>
                                                    <!--end::نمایش existing avatar-->
                                                    <!--begin::-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تعویض آواتار">
                                                        <i class="ki-duotone ki-pencil fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::-->
                                                    <!--begin::انصراف-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="انصراف avatar">
																				<i class="ki-duotone ki-cross fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
                                                    <!--end::انصراف-->
                                                    <!--begin::حذف-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="حذف آواتار">
																				<i class="ki-duotone ki-cross fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
                                                    <!--end::حذف-->
                                                </div>
                                                <!--end::Image input-->
                                            </div>
                                            <!--end::Image input wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">نام</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="مرادی نیا" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span>ایمیل</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="ایمیل address must be active">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="smith@kpmg.com" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">توضیحات</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="description" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-15">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">زبان</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <select name="language" aria-label="انتخاب زبانata-control="select2" data-placeholder="انتخاب زبان" class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
                                            <option></option>
                                            <option value="id">Bahasa Indonesia - Indonesian</option>
                                            <option value="msa">Bahasa Melayu - Malay</option>
                                            <option value="ca">Català - Catalan</option>
                                            <option value="cs">Čeština - Czech</option>
                                            <option value="da">Dansk - Danish</option>
                                            <option value="de">Deutsch - آلمانی</option>
                                            <option value="en">انگلیسی</option>
                                            <option value="en-gb">انگلیسی UK - British انگلیسی</option>
                                            <option value="es">Español - اسپانیایی</option>
                                            <option value="fil">Filipino</option>
                                            <option value="fr">Français - فرانسه</option>
                                            <option value="ga">Gaeilge - Irish (beta)</option>
                                            <option value="gl">Galego - Galician (beta)</option>
                                            <option value="hr">Hrvatski - Croatian</option>
                                            <option value="it">Italiano - Italian</option>
                                            <option value="hu">Magyar - Hungarian</option>
                                            <option value="nl">Nederlands - Dutch</option>
                                            <option value="no">Nیاsk - Nیاwegian</option>
                                            <option value="pl">Polski - Polish</option>
                                            <option value="pt">Pیاtuguês - Pیاtuguese</option>
                                            <option value="ro">Română - Romanian</option>
                                            <option value="sk">Slovenčina - Slovak</option>
                                            <option value="fi">Suomi - Finnish</option>
                                            <option value="sv">Svenska - Swedish</option>
                                            <option value="vi">Tiếng Việt - Vietnamese</option>
                                            <option value="tr">Türkçe - Turkish</option>
                                            <option value="el">Ελληνικά - Greek</option>
                                            <option value="bg">Български език - Bulgarian</option>
                                            <option value="ru">Русский - Russian</option>
                                            <option value="sr">Српски - Serbian</option>
                                            <option value="uk">Українська мова - Ukrainian</option>
                                            <option value="he">עִבְרִית - Hebrew</option>
                                            <option value="ur">اردو - Urdu (beta)</option>
                                            <option value="ar">العربية - Arabic</option>
                                            <option value="fa">فارسی - Persian</option>
                                            <option value="mr">मराठी - Marathi</option>
                                            <option value="hi">हिन्दी - Hindi</option>
                                            <option value="bn">বাংলা - Bangla</option>
                                            <option value="gu">ગુજરાતી - Gujarati</option>
                                            <option value="ta">தமிழ் - Tamil</option>
                                            <option value="kn">ಕನ್ನಡ - Kannada</option>
                                            <option value="th">ภาษาไทย - Thai</option>
                                            <option value="ko">한국어 - Kیاean</option>
                                            <option value="ja">日本語 - ژاپنی</option>
                                            <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                            <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::کاربر form-->
                                    <!--begin::آدرس toggle-->
                                    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_address" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_address">آدرس جزییات
                                        <span class="ms-2 rotate-180">
																<i class="ki-duotone ki-down fs-3"></i>
															</span></div>
                                    <!--end::آدرس toggle-->
                                    <!--begin::آدرس form-->
                                    <div id="kt_modal_update_user_address" class="collapse show">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">ادرس1</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">ادرس2</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder="" name="address2" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">شهر</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row g-9 mb-7">
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Tags-->
                                                <label class="fs-6 fw-semibold mb-2">استان</label>
                                                <!--end::Tags-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="" name="state" value="ویکتیایا" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Tags-->
                                                <label class="fs-6 fw-semibold mb-2">کدپستی</label>
                                                <!--end::Tags-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span>کشور</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="کشور of یاigination">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <select name="country" aria-label="انتخاب a کشور" data-control="select2" data-placeholder="انتخاب  کشور..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
                                                <option value="">انتخاب  کشور...</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Aland Islands</option>
                                                <option value="هوش مصنوعی">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andیاra</option>
                                                <option value="AO">Angola</option>
                                                <option value="هوش مصنوعی">Anguilla</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">ایران</option>
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
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British هندn Ocean Territیاy</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comیاos</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuadیا</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvadیا</option>
                                                <option value="GQ">Equatیاial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">فرانسه</option>
                                                <option value="PF">فرانسه Polynesia</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">المان</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="HT">هلند</option>
                                                <option value="VA">Holy See (Vatican شهر State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">ایساند</option>
                                                <option value="IN">هند</option>
                                                <option value="شناسه">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jیاdan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">ایتالیا</option>
                                                <option value="KP">Kیاea, دموcratic People's Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's دموcratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
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
                                                <option value="MX">مکزیک</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">فرانسه</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Mیاocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">منanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NZ">جدید Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Nیاfolk Island</option>
                                                <option value="MP">Nیاthern Mariana Islands</option>
                                                <option value="NO">Nیاway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territیاy, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua جدید Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PL">لهستان</option>
                                                <option value="PT">Pیاtugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (فرانسه part)</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapیاe</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="KR">South Kیاea</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">سوئد</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, حرفه ایvince of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">ترکیه</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="ایران">آمریکا</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">ونuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VI">Virgin Islands</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::آدرس form-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">لغو</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                    <span class="indicator-label">ثبت</span>
                                    <span class="indicator-progress">لطفا صبر کنید...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - بروزرسانی user details-->
            <!--begin::Modal - افزودن schedule-->
            <div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">افزودن رویداد</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::form-->
                            <form id="kt_modal_add_schedule_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">نام رویداد</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="event_name" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">تاریخ & زمان</span>
                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="انتخاب یک تاریخ & time.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="انتخاب تاریخ & time" name="event_datetime" id="kt_modal_add_schedule_datepicker" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">برگزار کننده رویداد</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="event_org" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">ارسال رویداد جزییات To</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input id="kt_modal_add_schedule_tagify" type="text" class="form-control form-control-solid" name="event_invitees" value="smith@kpmg.com, melody@altbox.com" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">لغو</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - افزودن schedule-->
            <!--begin::Modal - افزودن task-->
            <div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">افزودن وظیفه</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::form-->
                            <form id="kt_modal_add_task_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">وظیفه نام</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="task_name" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">وظیفه سررسید</span>
                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="انتخاب a due date.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="انتخاب تاریخ" name="task_duedate" id="kt_modal_add_task_datepicker" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">وظیفه توضیحات</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid rounded-3"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">لغو</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - افزودن task-->
            <!--begin::Modal - بروزرسانی email-->
            <div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">بروزرسانی ایمیل </h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::form-->
                            <form id="kt_modal_update_email_form" class="form" action="#">
                                <!--begin::Notice-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-information fs-2tx text-primary me-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-semibold">
                                            <div class="fs-6 text-gray-700">لطفاً توجه داشته باشید که برای تکمیل تأیید نامه ایمیل ، آدرس ایمیل معتبری لازم است.</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--end::Notice-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">ایمیل </span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="profile_email" value="smith@kpmg.com" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">لغو</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - بروزرسانی email-->
            <!--begin::Modal - بروزرسانی کلمه عبور-->
            <div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">بروزرسانی کلمه عبور</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::form-->
                            <form id="kt_modal_update_password_form" class="form" action="#">
                                <!--begin::Input group=-->
                                <div class="fv-row mb-10">
                                    <label class="required form-label fs-6 mb-2">کلمه عبور فعلی</label>
                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off" />
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Tags-->
                                        <label class="form-label fw-semibold fs-6 mb-2">کلمه عبور جدید</label>
                                        <!--end::Tags-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" />
                                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
																		<i class="ki-duotone ki-eye-slash fs-1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																		<i class="ki-duotone ki-eye d-none fs-1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
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
                                <!--begin::Input group=-->
                                <div class="fv-row mb-10">
                                    <label class="form-label fw-semibold fs-6 mb-2">تکرار کلمه عبور جدید</label>
                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off" />
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">لغو</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - بروزرسانی کلمه عبور-->
            <!--begin::Modal - بروزرسانی role-->
            <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">بروزرسانی کاربرسطح دسترسی</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::form-->
                            <form id="kt_modal_update_role_form" class="form" action="#">
                                <!--begin::Notice-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-information fs-2tx text-primary me-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-semibold">
                                            <div class="fs-6 text-gray-700">لطفاً توجه داشته باشید که با کاهش رتبه نقش کاربر ، این کاربر کلیه امتیازاتی را که به نقش قبلی اختصاص داده شده بود ، از دست خواهد داد.</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--end::Notice-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-5">
                                        <span class="required">انتخای نقش کاربری</span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                                            <!--end::Input-->
                                            <!--begin::Tags-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                <div class="fw-bold text-gray-800">مدیریت</div>
                                                <div class="text-gray-600">برتر for business owners and company administratیاs</div>
                                            </label>
                                            <!--end::Tags-->
                                        </div>
                                        <!--end::رادیو-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
                                            <!--end::Input-->
                                            <!--begin::Tags-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                <div class="fw-bold text-gray-800">توسعه دهنده</div>
                                                <div class="text-gray-600">برتر for developers یا people primarily using the API</div>
                                            </label>
                                            <!--end::Tags-->
                                        </div>
                                        <!--end::رادیو-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
                                            <!--end::Input-->
                                            <!--begin::Tags-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                <div class="fw-bold text-gray-800">تحلیلگر</div>
                                                <div class="text-gray-600">برتر for people who need full access to analytics data, but don't need to update business settings</div>
                                            </label>
                                            <!--end::Tags-->
                                        </div>
                                        <!--end::رادیو-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
                                            <!--end::Input-->
                                            <!--begin::Tags-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                <div class="fw-bold text-gray-800">پشتیبانی</div>
                                                <div class="text-gray-600">برتر for employees who regularly refund payments and respond to disputes</div>
                                            </label>
                                            <!--end::Tags-->
                                        </div>
                                        <!--end::رادیو-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
                                            <!--end::Input-->
                                            <!--begin::Tags-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                <div class="fw-bold text-gray-800">آزمایش</div>
                                                <div class="text-gray-600">برتر for people who need to preview content data, but don't need to make any updates</div>
                                            </label>
                                            <!--end::Tags-->
                                        </div>
                                        <!--end::رادیو-->
                                    </div>
                                    <!--end::Input row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">لغو</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - بروزرسانی role-->
            <!--begin::Modal - افزودن task-->
            <div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">افزودن Authenticatیا اپلیکیشن</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Content-->
                            <div class="fw-bold d-flex flex-column justify-content-center mb-5">
                                <!--begin::Tags-->
                                <div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">دانلود
                                    <a href="#">اپلیکیشن</a>, یک حساب جدید اضافه کنید ، سپس این بارکد را اسکن کنید تا حساب خود را راه اندازی کنید.</div>
                                <div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">دانلود
                                    <a href="#">اپلیکیشن</a>، یک حساب جدید اضافه کنید ، سپس برای تنظیم حساب خود این کد را وارد کنید.</div>
                                <!--end::Tags-->
                                <!--begin::QR code-->
                                <div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
                                    <img src="{{asset('/media/misc/qr.png')}}" alt="Scan this QR code" />
                                </div>
                                <!--end::QR code-->
                                <!--begin::Text code-->
                                <div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
                                    <div class="fs-1">gi2kdnb54is709j</div>
                                </div>
                                <!--end::Text code-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center">
                                <div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">کد را به صورت دستی وارد کنید</div>
                                <div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button"> بارکد را اسکن کنید</div>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - افزودن task-->
            <!--begin::Modal - افزودن task-->
            <div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">فعال کردن رمز یک بار مصرف</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::form-->
                            <form class="form" id="kt_modal_add_one_time_password_form">
                                <!--begin::Tags-->
                                <div class="fw-bold mb-9">برای دریافت پیامک هنگام ورود به سیستم ، شماره تلفن جدید را وارد کنید.</div>
                                <!--end::Tags-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">شماره موبایل</span>
                                        <span class="ms-2" data-bs-toggle="tooltip" title="A valid mobile number is required to receive the one-time password to validate your account login.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::separator-->
                                <div class="separator saperator-dashed my-5"></div>
                                <!--end::separator-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">ایمیل</span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">تایید کلمه عبور</span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">انصراف</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - افزودن task-->
            <!--end::Modals-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('title')
    کاربر
@endsection
