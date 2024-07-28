@extends('admin.layouts.admin')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                @if(Auth::user()->profile_photo_url)
                                    <img src="{{ \Auth::user()->profile_photo_url }}" alt="image"/>
                                @else
                                    <div class="symbol-label fs-3 {{ app(\App\Actions\GetThemeType::class)->handle('bg-light-? text-?', Auth::user()->name) }}">
                                        {{ substr(Auth::user()->name, 0, 1) }}
                                    </div>
                                @endif
                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::user-->
                                <div class="d-flex flex-column">
                                    <!--begin::نام-->
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{Auth::user()->name}}</a>
                                        <a href="#">
                                            <i class="ki-duotone ki-verify fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </div>
                                    <!--end::نام-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                        <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                            <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>توسعه دهنده</a>
                                        <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                            <i class="ki-duotone ki-geolocation fs-4 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>منطقه زندگی</a>
                                        <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                            <i class="ki-duotone ki-sms fs-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>{{Auth::user()->email}}</a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::user-->
                                <!--begin::Actions-->
                                <div class="d-flex my-4">
                                    <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                                        <i class="ki-duotone ki-check fs-3 d-none"></i>
                                        <!--begin::Indicatیا label-->
                                        <span class="indicator-label">دنبال کردن</span>
                                        <!--end::Indicatیا label-->
                                        <!--begin::Indicatیا progress-->
                                        <span class="indicator-progress">لطفا صبر کنید...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicatیا progress-->
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">من را استخدام کن</a>
                                    <!--begin::Menu-->
                                    <div class="me-0">
                                        <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-solid ki-dots-hیاizontal fs-2x"></i>
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">درگاه ها</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">ساختن فاکتور</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">ساختن پرداخت
                                                    <span class="ms-2" data-bs-toggle="tooltip" title="یک نام هدف را برای استفاده و مرجع در آینده مشخص کنید">
																			<i class="ki-duotone ki-information fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">بیل تولید کنید</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">اشتراک</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">برنامه ریزی ها</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">صورتحساب</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">بیانه ها</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                <!--end::Input-->
                                                                <!--end::Tags-->
                                                                <span class="form-check-label text-muted fs-6">وضعیت</span>
                                                                <!--end::Tags-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">تنظیمات</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::شماره کارت-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                            </div>
                                            <!--end::شماره کارت-->
                                            <!--begin::Tags-->
                                            <div class="fw-semibold fs-6 text-gray-500">درآمد</div>
                                            <!--end::Tags-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::شماره کارت-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="80">0</div>
                                            </div>
                                            <!--end::شماره کارت-->
                                            <!--begin::Tags-->
                                            <div class="fw-semibold fs-6 text-gray-500">پروژه ها</div>
                                            <!--end::Tags-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::شماره کارت-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                            </div>
                                            <!--end::شماره کارت-->
                                            <!--begin::Tags-->
                                            <div class="fw-semibold fs-6 text-gray-500">نرخ موفقیت</div>
                                            <!--end::Tags-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::پردازش-->
                                <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-semibold fs-6 text-gray-500">تکمیل پروفایل</span>
                                        <span class="fw-bold fs-6">50%</span>
                                    </div>
                                    <div class="h-5px mx-3 w-100 bg-light mb-3">
                                        <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::پردازش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Navs-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="account/overview.html">بررسی اجمالی</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/settings.html">تنظیمات</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/security.html">امنیت</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/activity.html">فعالیت</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/billing.html">صورتحساب</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/statements.html">بیانه ها</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/referrals.html">مراجعات</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/api-keys.html">کلید ای پی ای</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/logs.html">گزارش</a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::details نمایش-->
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                <!--begin::کارت header-->
                <div class="card-header cursor-pointer">
                    <!--begin::کارت title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">پروفایل جزییات</h3>
                    </div>
                    <!--end::کارت title-->
                    <!--begin::Actions-->
                    <a href="account/settings.html" class="btn btn-sm btn-primary align-self-center"> پروفایل</a>
                    <!--end::Actions-->
                </div>
                <!--begin::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body p-9">
                    <!--begin::Row-->
                    <div class="row mb-7">
                        <!--begin::Tags-->
                        <label class="col-lg-4 fw-semibold text-muted">نام کامل</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">{{Auth::user()->name}}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Tags-->
                        <label class="col-lg-4 fw-semibold text-muted">کمپانی</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-semibold text-gray-800 fs-6">ساتراس وب</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Tags-->
                        <label class="col-lg-4 fw-semibold text-muted">تماس با ما تلفن
                            <span class="ms-1" data-bs-toggle="tooltip" title="شماره تلفن باید فعال باشد">
													<i class="ki-duotone ki-information fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span></label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <span class="fw-bold fs-6 text-gray-800 me-2">044 3276 454 935</span>
                            <span class="badge badge-success">تایید شده</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Tags-->
                        <label class="col-lg-4 fw-semibold text-muted">سایت کمپانی</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">keenthemes.com</a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Tags-->
                        <label class="col-lg-4 fw-semibold text-muted">کشور
                            <span class="ms-1" data-bs-toggle="tooltip" title="کشور of یاigination">
													<i class="ki-duotone ki-information fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span></label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">المان</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Tags-->
                        <label class="col-lg-4 fw-semibold text-muted">ارتباط</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">ایمیل, تلفن</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Tags-->
                        <label class="col-lg-4 fw-semibold text-muted">همه</label>
                        <!--begin::Tags-->
                        <!--begin::Tags-->
                        <div class="col-lg-8">
                            <span class="fw-semibold fs-6 text-gray-800">بله</span>
                        </div>
                        <!--begin::Tags-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-semibold">
                                <h4 class="text-gray-900 fw-bold">ما به توجه شما نیاز داریم</h4>
                                <div class="fs-6 text-gray-700">پرداخت شما رد شد. لطفاً برای شروع استفاده از ابزارها
                                    <a class="fw-bold" href="account/billing.html">روش پرداخت</a>.</div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::details نمایش-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-8 mb-xl-10">
                    <!--begin::Chart widget 5-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Header-->
                        <div class="card-header flex-nowrap pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">پرفروش ترین دسته بندی ها</span>
                                <span class="text-gray-500 pt-2 fw-semibold fs-6">8 هزار بازدید اجتماعی</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">عملیات سریع</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">تیکت جدید</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">جدید مشتری</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">گروه جدید</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">گروه مدیر</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">گروه کارکنان</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">گروه عضوها</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5 ps-6">
                            <div id="kt_charts_widget_5" class="min-h-auto"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4 mb-5 mb-xl-10">
                    <!--begin::Engage widget 1-->
                    <div class="card h-md-100" dir="ltr">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="fw-semibold text-gray-800 text-center lh-lg">آیا سعی کرده ای
                                    <br />جدید
                                    <span class="fw-bolder">نرم افزار موبایل</span></h1>
                                <!--end::Title-->
                                <!--begin::Illustration-->
                                <div class="py-10 text-center">
                                    <img src="{{asset('/media/svg/illustrations/easy/1.svg')}}" class="theme-light-show w-200px" alt="" />
                                    <img src="{{asset('/media/svg/illustrations/easy/1-dark.svg')}}" class="theme-dark-show w-200px" alt="" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Links-->
                            <div class="text-center mb-1">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">تلاش مجدد</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light" href="apps/invoices/view/invoice-1.html">آموزش بیشتر</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::لیست widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">محصولات تحویل</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">1 میلیون محصول ارسال شده</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">جزییات سفارش</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Scroll-->
                            <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                <!--begin::item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="{{asset('/media/stock/ecommerce/210.png')}}" class="w-50px ms-n1 me-1" alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">فیل 1802</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Actions-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">عملیات سریع</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">گروه جدید</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه مدیر</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه کارکنان</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه عضوها</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::مشتری-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::نام-->
                                        <span class="text-gray-500 fw-bold">به:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">جیسون بورن</a></span>
                                        <!--end::نام-->
                                        <!--begin::Tags-->
                                        <span class="badge badge-light-success">سفارش داده شده</span>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::مشتری-->
                                </div>
                                <!--end::item-->
                                <!--begin::item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="{{asset('/media/stock/ecommerce/209.png')}}" class="w-50px ms-n1 me-1" alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">لباس</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Actions-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">عملیات سریع</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">گروه جدید</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه مدیر</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه کارکنان</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه عضوها</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::مشتری-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::نام-->
                                        <span class="text-gray-500 fw-bold">به:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">مریم رجبی</a></span>
                                        <!--end::نام-->
                                        <!--begin::Tags-->
                                        <span class="badge badge-light-primary">حمل دریایی</span>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::مشتری-->
                                </div>
                                <!--end::item-->
                                <!--begin::item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="{{asset('/media/stock/ecommerce/214.png')}}" class="w-50px ms-n1 me-1" alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">تی شرت زرد</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Actions-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">عملیات سریع</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">گروه جدید</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه مدیر</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه کارکنان</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه عضوها</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::مشتری-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::نام-->
                                        <span class="text-gray-500 fw-bold">به:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">علی کاربر</a></span>
                                        <!--end::نام-->
                                        <!--begin::Tags-->
                                        <span class="badge badge-light-danger">تایید شده</span>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::مشتری-->
                                </div>
                                <!--end::item-->
                                <!--begin::item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="{{asset('/media/stock/ecommerce/211.png')}}" class="w-50px ms-n1 me-1" alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">فیل 1802</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Actions-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">عملیات سریع</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">گروه جدید</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه مدیر</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه کارکنان</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه عضوها</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::مشتری-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::نام-->
                                        <span class="text-gray-500 fw-bold">به:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">محمد ابراهیمی</a></span>
                                        <!--end::نام-->
                                        <!--begin::Tags-->
                                        <span class="badge badge-light-success">سفارش داده شده</span>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::مشتری-->
                                </div>
                                <!--end::item-->
                                <!--begin::item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="{{asset('/media/stock/ecommerce/215.png')}}" class="w-50px ms-n1 me-1" alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">لباس</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Actions-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">عملیات سریع</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">گروه جدید</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه مدیر</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه کارکنان</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه عضوها</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::مشتری-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::نام-->
                                        <span class="text-gray-500 fw-bold">به:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">محمد رضایی</a></span>
                                        <!--end::نام-->
                                        <!--begin::Tags-->
                                        <span class="badge badge-light-primary">حمل دریایی</span>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::مشتری-->
                                </div>
                                <!--end::item-->
                                <!--begin::item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="{{asset('/media/stock/ecommerce/192.png')}}" class="w-50px ms-n1 me-1" alt="" />
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">تی شرت زرد</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Actions-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">عملیات سریع</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">گروه جدید</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه مدیر</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه کارکنان</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">گروه عضوها</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::مشتری-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::نام-->
                                        <span class="text-gray-500 fw-bold">به:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">اتنا رضایی</a></span>
                                        <!--end::نام-->
                                        <!--begin::Tags-->
                                        <span class="badge badge-light-danger">تایید شده</span>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::مشتری-->
                                </div>
                                <!--end::item-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::لیست widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Table Widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::کارت header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">گزارش سهام</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">کل 2,356 قلم موجود در انبار</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <div class="card-toolbar">
                                <!--begin::فیلترها-->
                                <div class="d-flex flex-stack flex-wrap gap-4">
                                    <!--begin::Destination-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Tags-->
                                        <div class="text-muted fs-7 me-2">دسته بندی</div>
                                        <!--end::Tags-->
                                        <!--begin::انتخاب-->
                                        <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="انتخاب ">
                                            <option></option>
                                            <option value="مشاهده همه" selected="selected">مشاهده همه</option>
                                            <option value="a">دسته بندی A</option>
                                            <option value="b">دسته بندی B</option>
                                        </select>
                                        <!--end::انتخاب-->
                                    </div>
                                    <!--end::Destination-->
                                    <!--begin::وضعیت-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Tags-->
                                        <div class="text-muted fs-7 me-2">وضعیت</div>
                                        <!--end::Tags-->
                                        <!--begin::انتخاب-->
                                        <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="انتخاب " data-kt-table-widget-5="filter_status">
                                            <option></option>
                                            <option value="مشاهده همه" selected="selected">مشاهده همه</option>
                                            <option value="موجود">موجود</option>
                                            <option value="ناموجود">ناموجود</option>
                                            <option value="موجودی کم">موجودی کم</option>
                                        </select>
                                        <!--end::انتخاب-->
                                    </div>
                                    <!--end::وضعیت-->
                                    <!--begin::جستجو-->
                                    <a href="apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">نمایش </a>
                                    <!--end::جستجو-->
                                </div>
                                <!--begin::فیلترها-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                <!--begin::Table head-->
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-150px">آیتم</th>
                                    <th class="text-end pe-3 min-w-100px">محصولات شناسه</th>
                                    <th class="text-end pe-3 min-w-150px">تاریخ افزودن</th>
                                    <th class="text-end pe-3 min-w-100px">قیمت</th>
                                    <th class="text-end pe-3 min-w-100px">وضعیت</th>
                                    <th class="text-end pe-0 min-w-75px">تعداد</th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                <tr>
                                    <!--begin::item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Macbook Air M1</a>
                                    </td>
                                    <!--end::item-->
                                    <!--begin::محصولات شناسه-->
                                    <td class="text-end">#XGY-356</td>
                                    <!--end::محصولات شناسه-->
                                    <!--begin::تاریخ added-->
                                    <td class="text-end">02 Apr, 2024</td>
                                    <!--end::تاریخ added-->
                                    <!--begin::قیمت-->
                                    <td class="text-end">$1,230</td>
                                    <!--end::قیمت-->
                                    <!--begin::وضعیت-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">موجود</span>
                                    </td>
                                    <!--end::وضعیت-->
                                    <!--begin::تعداد-->
                                    <td class="text-end" data-order="58">
                                        <span class="text-gray-900 fw-bold">58 مورد</span>
                                    </td>
                                    <!--end::تعداد-->
                                </tr>
                                <tr>
                                    <!--begin::item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Surface Laptop 4</a>
                                    </td>
                                    <!--end::item-->
                                    <!--begin::محصولات شناسه-->
                                    <td class="text-end">#YHD-047</td>
                                    <!--end::محصولات شناسه-->
                                    <!--begin::تاریخ added-->
                                    <td class="text-end">01 Apr, 2024</td>
                                    <!--end::تاریخ added-->
                                    <!--begin::قیمت-->
                                    <td class="text-end">$1,060</td>
                                    <!--end::قیمت-->
                                    <!--begin::وضعیت-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">ناموجود</span>
                                    </td>
                                    <!--end::وضعیت-->
                                    <!--begin::تعداد-->
                                    <td class="text-end" data-order="0">
                                        <span class="text-gray-900 fw-bold">0 مورد</span>
                                    </td>
                                    <!--end::تعداد-->
                                </tr>
                                <tr>
                                    <!--begin::item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Logitech MX 250</a>
                                    </td>
                                    <!--end::item-->
                                    <!--begin::محصولات شناسه-->
                                    <td class="text-end">#SRR-678</td>
                                    <!--end::محصولات شناسه-->
                                    <!--begin::تاریخ added-->
                                    <td class="text-end">24 Mar, 2024</td>
                                    <!--end::تاریخ added-->
                                    <!--begin::قیمت-->
                                    <td class="text-end">$64</td>
                                    <!--end::قیمت-->
                                    <!--begin::وضعیت-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">موجود</span>
                                    </td>
                                    <!--end::وضعیت-->
                                    <!--begin::تعداد-->
                                    <td class="text-end" data-order="290">
                                        <span class="text-gray-900 fw-bold">290 مورد</span>
                                    </td>
                                    <!--end::تعداد-->
                                </tr>
                                <tr>
                                    <!--begin::item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">موتور صوتی HD3</a>
                                    </td>
                                    <!--end::item-->
                                    <!--begin::محصولات شناسه-->
                                    <td class="text-end">#PXF-578</td>
                                    <!--end::محصولات شناسه-->
                                    <!--begin::تاریخ added-->
                                    <td class="text-end">24 Mar, 2024</td>
                                    <!--end::تاریخ added-->
                                    <!--begin::قیمت-->
                                    <td class="text-end">$1,060</td>
                                    <!--end::قیمت-->
                                    <!--begin::وضعیت-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">ناموجود</span>
                                    </td>
                                    <!--end::وضعیت-->
                                    <!--begin::تعداد-->
                                    <td class="text-end" data-order="46">
                                        <span class="text-gray-900 fw-bold">46 مورد</span>
                                    </td>
                                    <!--end::تعداد-->
                                </tr>
                                <tr>
                                    <!--begin::item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">HP Hyper LTR</a>
                                    </td>
                                    <!--end::item-->
                                    <!--begin::محصولات شناسه-->
                                    <td class="text-end">#PXF-778</td>
                                    <!--end::محصولات شناسه-->
                                    <!--begin::تاریخ added-->
                                    <td class="text-end">16 Jan, 2024</td>
                                    <!--end::تاریخ added-->
                                    <!--begin::قیمت-->
                                    <td class="text-end">$4500</td>
                                    <!--end::قیمت-->
                                    <!--begin::وضعیت-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">موجود</span>
                                    </td>
                                    <!--end::وضعیت-->
                                    <!--begin::تعداد-->
                                    <td class="text-end" data-order="78">
                                        <span class="text-gray-900 fw-bold">78 مورد</span>
                                    </td>
                                    <!--end::تعداد-->
                                </tr>
                                <tr>
                                    <!--begin::item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Dell 32</a>
                                    </td>
                                    <!--end::item-->
                                    <!--begin::محصولات شناسه-->
                                    <td class="text-end">#XGY-356</td>
                                    <!--end::محصولات شناسه-->
                                    <!--begin::تاریخ added-->
                                    <td class="text-end">22 Dec, 2024</td>
                                    <!--end::تاریخ added-->
                                    <!--begin::قیمت-->
                                    <td class="text-end">$1,060</td>
                                    <!--end::قیمت-->
                                    <!--begin::وضعیت-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">موجودی کم</span>
                                    </td>
                                    <!--end::وضعیت-->
                                    <!--begin::تعداد-->
                                    <td class="text-end" data-order="8">
                                        <span class="text-gray-900 fw-bold">8 مورد</span>
                                    </td>
                                    <!--end::تعداد-->
                                </tr>
                                <tr>
                                    <!--begin::item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary"> Pixel 6 </a>
                                    </td>
                                    <!--end::item-->
                                    <!--begin::محصولات شناسه-->
                                    <td class="text-end">#XVR-425</td>
                                    <!--end::محصولات شناسه-->
                                    <!--begin::تاریخ added-->
                                    <td class="text-end">27 Dec, 2024</td>
                                    <!--end::تاریخ added-->
                                    <!--begin::قیمت-->
                                    <td class="text-end">$1,060</td>
                                    <!--end::قیمت-->
                                    <!--begin::وضعیت-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">موجود</span>
                                    </td>
                                    <!--end::وضعیت-->
                                    <!--begin::تعداد-->
                                    <td class="text-end" data-order="124">
                                        <span class="text-gray-900 fw-bold">124 مورد</span>
                                    </td>
                                    <!--end::تعداد-->
                                </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::کارت body-->
                    </div>
                    <!--end::Table Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
