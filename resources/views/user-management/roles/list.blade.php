@extends('admin.layouts.admin')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Row-->
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                <!--begin::Col-->
                <div class="col-md-4">
                    <!--begin::کارت-->
                    <div class="card card-flush h-md-100">
                        <!--begin::کارت header-->
                        <div class="card-header">
                            <!--begin::کارت title-->
                            <div class="card-title">
                                <h2>مدیریت</h2>
                            </div>
                            <!--end::کارت title-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body pt-1">
                            <!--begin::users-->
                            <div class="fw-bold text-gray-600 mb-5">کل کاربران با این نقش: 5</div>
                            <!--end::users-->
                            <!--begin::مجوزها-->
                            <div class="d-flex flex-column text-gray-600">
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>همه کنترل های ادمین</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش مالی</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>فعال گزارشات</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش پرداخت ها</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش اختلاف نظرات</div>
                                <div class='d-flex align-items-center py-2'>
                                    <span class='bullet bg-primary me-3'></span>
                                    <em>بیشتر</em>
                                </div>
                            </div>
                            <!--end::مجوزها-->
                        </div>
                        <!--end::کارت body-->
                        <!--begin::کارت footer-->
                        <div class="card-footer flex-wrap pt-0">
                            <a href="apps/user-management/roles/view.html" class="btn btn-light btn-active-primary my-1 me-2">نمایش سطح دسترسی</a>
                            <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">سطح دسترسی</button>
                        </div>
                        <!--end::کارت footer-->
                    </div>
                    <!--end::کارت-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4">
                    <!--begin::کارت-->
                    <div class="card card-flush h-md-100">
                        <!--begin::کارت header-->
                        <div class="card-header">
                            <!--begin::کارت title-->
                            <div class="card-title">
                                <h2>توسعه دهنده</h2>
                            </div>
                            <!--end::کارت title-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body pt-1">
                            <!--begin::users-->
                            <div class="fw-bold text-gray-600 mb-5">کل کاربران با این نقش: 14</div>
                            <!--end::users-->
                            <!--begin::مجوزها-->
                            <div class="d-flex flex-column text-gray-600">
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>برخی از کنترل های سرپرست</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش فقط خلاصه های مالی</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش کنترل های کلید دسترسی</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش پرداخت ها </div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش اختلاف نظرات</div>
                                <div class='d-flex align-items-center py-2'>
                                    <span class='bullet bg-primary me-3'></span>
                                    <em>بیشتر</em>
                                </div>
                            </div>
                            <!--end::مجوزها-->
                        </div>
                        <!--end::کارت body-->
                        <!--begin::کارت footer-->
                        <div class="card-footer flex-wrap pt-0">
                            <a href="apps/user-management/roles/view.html" class="btn btn-light btn-active-primary my-1 me-2">نمایش سطح دسترسی</a>
                            <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">سطح دسترسی</button>
                        </div>
                        <!--end::کارت footer-->
                    </div>
                    <!--end::کارت-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4">
                    <!--begin::کارت-->
                    <div class="card card-flush h-md-100">
                        <!--begin::کارت header-->
                        <div class="card-header">
                            <!--begin::کارت title-->
                            <div class="card-title">
                                <h2>تحلیلگر</h2>
                            </div>
                            <!--end::کارت title-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body pt-1">
                            <!--begin::users-->
                            <div class="fw-bold text-gray-600 mb-5">کل کاربران با این نقش: 4</div>
                            <!--end::users-->
                            <!--begin::مجوزها-->
                            <div class="d-flex flex-column text-gray-600">
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>بدون کنترل ادمین</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش مالی</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>فعال گزارشات</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش پرداخت ها </div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش اختلاف نظرات</div>
                                <div class='d-flex align-items-center py-2'>
                                    <span class='bullet bg-primary me-3'></span>
                                    <em>نمایش بیشتر..</em>
                                </div>
                            </div>
                            <!--end::مجوزها-->
                        </div>
                        <!--end::کارت body-->
                        <!--begin::کارت footer-->
                        <div class="card-footer flex-wrap pt-0">
                            <a href="apps/user-management/roles/view.html" class="btn btn-light btn-active-primary my-1 me-2">نمایش سطح دسترسی</a>
                            <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">سطح دسترسی</button>
                        </div>
                        <!--end::کارت footer-->
                    </div>
                    <!--end::کارت-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4">
                    <!--begin::کارت-->
                    <div class="card card-flush h-md-100">
                        <!--begin::کارت header-->
                        <div class="card-header">
                            <!--begin::کارت title-->
                            <div class="card-title">
                                <h2>پشتیبانی</h2>
                            </div>
                            <!--end::کارت title-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body pt-1">
                            <!--begin::users-->
                            <div class="fw-bold text-gray-600 mb-5">کل کاربران با این نقش: 23</div>
                            <!--end::users-->
                            <!--begin::مجوزها-->
                            <div class="d-flex flex-column text-gray-600">
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>بدون کنترل ادمین</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش فقط خلاصه های مالی</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش پرداخت ها </div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش اختلاف نظرات</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نظرات مشتریان</div>
                            </div>
                            <!--end::مجوزها-->
                        </div>
                        <!--end::کارت body-->
                        <!--begin::کارت footer-->
                        <div class="card-footer flex-wrap pt-0">
                            <a href="apps/user-management/roles/view.html" class="btn btn-light btn-active-primary my-1 me-2">نمایش سطح دسترسی</a>
                            <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">سطح دسترسی</button>
                        </div>
                        <!--end::کارت footer-->
                    </div>
                    <!--end::کارت-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4">
                    <!--begin::کارت-->
                    <div class="card card-flush h-md-100">
                        <!--begin::کارت header-->
                        <div class="card-header">
                            <!--begin::کارت title-->
                            <div class="card-title">
                                <h2>آزمایش</h2>
                            </div>
                            <!--end::کارت title-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body pt-1">
                            <!--begin::users-->
                            <div class="fw-bold text-gray-600 mb-5">کل کاربران با این نقش: 546</div>
                            <!--end::users-->
                            <!--begin::مجوزها-->
                            <div class="d-flex flex-column text-gray-600">
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>بدون کنترل ادمین</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش فقط خلاصه های مالی</div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش گزارشات </div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش پرداخت ها </div>
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>نمایش اختلاف نظرات</div>
                            </div>
                            <!--end::مجوزها-->
                        </div>
                        <!--end::کارت body-->
                        <!--begin::کارت footer-->
                        <div class="card-footer flex-wrap pt-0">
                            <a href="apps/user-management/roles/view.html" class="btn btn-light btn-active-primary my-1 me-2">نمایش سطح دسترسی</a>
                            <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">سطح دسترسی</button>
                        </div>
                        <!--end::کارت footer-->
                    </div>
                    <!--end::کارت-->
                </div>
                <!--end::Col-->
                <!--begin::افزودن new card-->
                <div class="ol-md-4">
                    <!--begin::کارت-->
                    <div class="card h-md-100">
                        <!--begin::کارت body-->
                        <div class="card-body d-flex flex-center">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
                                <!--begin::Illustration-->
                                <img src="{{asset('/media/illustrations/sketchy-1/4.png')}}" alt="" class="mw-100 mh-150px mb-7" />
                                <!--end::Illustration-->
                                <!--begin::Tags-->
                                <div class="fw-bold fs-3 text-gray-600 text-hover-primary">سطح دسترسی جدید</div>
                                <!--end::Tags-->
                            </button>
                            <!--begin::Button-->
                        </div>
                        <!--begin::کارت body-->
                    </div>
                    <!--begin::کارت-->
                </div>
                <!--begin::افزودن new card-->
            </div>
            <!--end::Row-->
            <!--begin::Modals-->
            <!--begin::Modal - افزودن role-->
            <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-750px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">افزودن سطح دسترسی</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-lg-5 my-7">
                            <!--begin::form-->
                            <form id="kt_modal_add_role_form" class="form" action="{{ route('user-management.roles.store') }}" method="POST">
                                @csrf
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_role_header" data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Tags-->
                                        <label class="fs-5 fw-bold form-label mb-2">
                                            <span class="required">نام سطح دسترسی</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="سطح دسترسی خود را وارد نمایید" name="role_name" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="fv-row mb-10">
                                        <!--begin::Tags-->
                                        <label class="fs-5 fw-bold form-label mb-2">
                                            <span class="required">نام نمایشی سطح دسترسی</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="سطح دسترسی خود را وارد نمایید" name="role_display_name" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::مجوزها-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="fs-5 fw-bold form-label mb-2">سطح دسترسی مجوزها</label>
                                        <!--end::Tags-->
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                <!--begin::Table body-->
                                                <tbody class="text-gray-600 fw-semibold">
                                                <!--begin::Table row-->
                                                <tr>
                                                    <td class="text-gray-800">مدیریت Access
                                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="همهows a full access to the system">
																					<i class="ki-duotone ki-information fs-7">
																						<span class="path1"></span>
																						<span class="path2"></span>
																						<span class="path3"></span>
																					</i>
																				</span></td>
                                                    <td>
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-9">
                                                            <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                            <span class="form-check-label" for="kt_roles_select_all">انتخاب همه</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </td>
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">کاربر مدیریت</td>
                                                    <!--end::Tags-->
                                                    <!--begin::تنظیمات-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="user_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="user_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="user_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::تنظیمات-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">مدیریت محتوا</td>
                                                    <!--end::Tags-->
                                                    <!--begin::تنظیمات-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="content_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="content_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="content_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::تنظیمات-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">مدیریت مالی</td>
                                                    <!--end::Tags-->
                                                    <!--begin::تنظیمات-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::تنظیمات-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">گزارش</td>
                                                    <!--end::Tags-->
                                                    <!--begin::تنظیمات-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="reporting_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="reporting_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="reporting_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::تنظیمات-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">حقوق و دستمزد</td>
                                                    <!--end::Tags-->
                                                    <!--begin::تنظیمات-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="payroll_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="payroll_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="payroll_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::تنظیمات-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">اختلاف نظرات مدیریت</td>
                                                    <!--end::Tags-->
                                                    <!--begin::تنظیمات-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="disputes_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="disputes_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="disputes_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::تنظیمات-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">کنترل های کلید دسترسی</td>
                                                    <!--end::Tags-->
                                                    <!--begin::تنظیمات-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="api_controls_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="api_controls_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="api_controls_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::تنظیمات-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">دیتابیس مدیریت</td>
                                                    <!--end::Tags-->
                                                    <!--begin::تنظیمات-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="database_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="database_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="database_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::تنظیمات-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">Repository مدیریت</td>
                                                    <!--end::Tags-->
                                                    <!--begin::تنظیمات-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="repository_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="repository_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="repository_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::تنظیمات-->
                                                </tr>
                                                <!--end::Table row-->
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::مجوزها-->
                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">لغو</button>
                                    <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
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
            <!--end::Modal - افزودن role-->
            <!--begin::Modal - بروزرسانی role-->
            <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-750px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">بروزرسانی سطح دسترسی</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 my-7">
                            <!--begin::form-->
                            <form id="kt_modal_update_role_form" class="form" action="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Tags-->
                                        <label class="fs-5 fw-bold form-label mb-2">
                                            <span class="required">نام سطح دسترسی</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="سطح دسترسی خود را وارد نمایید" name="role_name" value="توسعه دهنده" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::مجوزها-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="fs-5 fw-bold form-label mb-2">سطح دسترسی مجوزها</label>
                                        <!--end::Tags-->
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                <!--begin::Table body-->
                                                <tbody class="text-gray-600 fw-semibold">
                                                <!--begin::Table row-->
                                                <tr>
                                                    <td class="text-gray-800">مدیریت Access
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="همهows a full access to the system">
																					<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																						<span class="path1"></span>
																						<span class="path2"></span>
																						<span class="path3"></span>
																					</i>
																				</span></td>
                                                    <td>
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                            <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                            <span class="form-check-label" for="kt_roles_select_all">انتخاب همه</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </td>
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">کاربر مدیریت</td>
                                                    <!--end::Tags-->
                                                    <!--begin::Input group-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="user_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="user_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="user_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Input group-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">مدیریت محتوا</td>
                                                    <!--end::Tags-->
                                                    <!--begin::Input group-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="content_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="content_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="content_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Input group-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">مدیریت مالی</td>
                                                    <!--end::Tags-->
                                                    <!--begin::Input group-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Input group-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">گزارش</td>
                                                    <!--end::Tags-->
                                                    <!--begin::Input group-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="reporting_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="reporting_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="reporting_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Input group-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">حقوق و دستمزد</td>
                                                    <!--end::Tags-->
                                                    <!--begin::Input group-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="payroll_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="payroll_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="payroll_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Input group-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">اختلاف نظرات مدیریت</td>
                                                    <!--end::Tags-->
                                                    <!--begin::Input group-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="disputes_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="disputes_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="disputes_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Input group-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">کنترل های کلید دسترسی</td>
                                                    <!--end::Tags-->
                                                    <!--begin::Input group-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="api_controls_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="api_controls_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="api_controls_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Input group-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">دیتابیس مدیریت</td>
                                                    <!--end::Tags-->
                                                    <!--begin::Input group-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="database_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="database_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="database_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Input group-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Tags-->
                                                    <td class="text-gray-800">Repository مدیریت</td>
                                                    <!--end::Tags-->
                                                    <!--begin::Input group-->
                                                    <td>
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="repository_management_read" />
                                                                <span class="form-check-label">خواندن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox" value="" name="repository_management_write" />
                                                                <span class="form-check-label">نوشتن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="repository_management_create" />
                                                                <span class="form-check-label">ساختن</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Input group-->
                                                </tr>
                                                <!--end::Table row-->
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::مجوزها-->
                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">لغو</button>
                                    <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
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
            <!--end::Modals-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('title')
    لیست نقش ها
@endsection

@section('script')
    <script src="{{asset('/js/custom/apps/user-management/roles/list/add.js')}}"></script>
    <script src="{{asset('/js/custom/apps/user-management/roles/list/update-role.js')}}"></script>
@endsection
