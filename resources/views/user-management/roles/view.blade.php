@extends('admin.layouts.admin')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::قالب بندی-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">
                    <!--begin::کارت-->
                    <div class="card card-flush">
                        <!--begin::کارت header-->
                        <div class="card-header">
                            <!--begin::کارت title-->
                            <div class="card-title">
                                <h2 class="mb-0">توسعه دهنده</h2>
                            </div>
                            <!--end::کارت title-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body pt-0">
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
                                <div class="d-flex align-items-center py-2 d-none">
                                    <span class='bullet bg-primary me-3'></span>
                                    <em>بیشتر</em>
                                </div>
                            </div>
                            <!--end::مجوزها-->
                        </div>
                        <!--end::کارت body-->
                        <!--begin::کارت footer-->
                        <div class="card-footer pt-0">
                            <button type="button" class="btn btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">سطح دسترسی</button>
                        </div>
                        <!--end::کارت footer-->
                    </div>
                    <!--end::کارت-->
                    <!--begin::Modal-->
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
                                                                        <input class="form-check-input" type="checkbox" value="" name="repیاting_read" />
                                                                        <span class="form-check-label">خواندن</span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input" type="checkbox" value="" name="repیاting_write" />
                                                                        <span class="form-check-label">نوشتن</span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox" value="" name="repیاting_create" />
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
                                                            <td class="text-gray-800">Repositیاy مدیریت</td>
                                                            <!--end::Tags-->
                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input" type="checkbox" value="" name="repositیاy_management_read" />
                                                                        <span class="form-check-label">خواندن</span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input" type="checkbox" value="" name="repositیاy_management_write" />
                                                                        <span class="form-check-label">نوشتن</span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox" value="" name="repositیاy_management_create" />
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
                    <!--end::Modal-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-10">
                    <!--begin::کارت-->
                    <div class="card card-flush mb-6 mb-xl-9">
                        <!--begin::کارت header-->
                        <div class="card-header pt-5">
                            <!--begin::کارت title-->
                            <div class="card-title">
                                <h2 class="d-flex align-items-center">کاربران اختصاصی
                                    <span class="text-gray-600 fs-6 ms-1">(14)</span></h2>
                            </div>
                            <!--end::کارت title-->
                            <!--begin::کارت toolbar-->
                            <div class="card-toolbar">
                                <!--begin::جستجو-->
                                <div class="d-flex align-items-center position-relative my-1" data-kt-view-roles-table-toolbar="base">
                                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" data-kt-roles-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="جستجو کاربران" />
                                </div>
                                <!--end::جستجو-->
                                <!--begin::گروه actions-->
                                <div class="d-flex justify-content-end align-items-center d-none" data-kt-view-roles-table-toolbar="selected">
                                    <div class="fw-bold me-5">
                                        <span class="me-2" data-kt-view-roles-table-select="selected_count"></span>انتخاب شده</div>
                                    <button type="button" class="btn btn-danger" data-kt-view-roles-table-select="delete_selected">حذف انتخاب شده</button>
                                </div>
                                <!--end::گروه actions-->
                            </div>
                            <!--end::کارت toolbar-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_roles_view_table">
                                <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_roles_view_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-50px">شناسه</th>
                                    <th class="min-w-150px">کاربر</th>
                                    <th class="min-w-125px">پیوستنed تاریخ</th>
                                    <th class="text-end min-w-100px">عملیات</th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه9018</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label">
                                                    <img src="{{asset('/media/avatars/300-6.jpg')}}" alt="مرادی نیا" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">مرادی نیا</a>
                                            <span>smith@kpmg.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>10 Nov 2024, 11:05 am</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه9850</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">میلاد مرادی</a>
                                            <span>melody@altbox.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>15 Apr 2024, 8:43 pm</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه3033</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label">
                                                    <img src="{{asset('/media/avatars/300-1.jpg')}}" alt="جلالی" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">جلالی</a>
                                            <span>max@kt.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>24 Jun 2024, 8:43 pm</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه1111</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label">
                                                    <img src="{{asset('/media/avatars/300-5.jpg')}}" alt="محسن برومند" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">محسن برومند</a>
                                            <span>sean@dellito.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>10 Nov 2024, 11:05 am</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه2255</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label">
                                                    <img src="{{asset('/media/avatars/300-25.jpg')}}" alt="رضا علی ابادی" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">رضا علی ابادی</a>
                                            <span>brian@exchange.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>15 Apr 2024, 8:43 pm</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه6444</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">میکائیل کرمانی</a>
                                            <span>mik@pex.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>10 Mar 2024, 6:43 am</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه5991</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label">
                                                    <img src="{{asset('/media/avatars/300-9.jpg')}}" alt="محمد رصایی" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">محمد رصایی</a>
                                            <span>f.mit@kpmg.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>20 Jun 2024, 11:05 am</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه6151</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">امید وحیدی</a>
                                            <span>olivia@corpmail.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>20 Dec 2024, 2:40 pm</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه3333</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">محسن برومند</a>
                                            <span>owen.neil@gmail.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>22 Sep 2024, 10:10 pm</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه9116</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label">
                                                    <img src="{{asset('/media/avatars/300-23.jpg')}}" alt="علی کاربر" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">علی کاربر</a>
                                            <span>dam@consilting.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>25 Oct 2024, 11:05 am</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه8813</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">الهام بارانی</a>
                                            <span>emma@intenso.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>24 Jun 2024, 10:10 pm</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه4045</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label">
                                                    <img src="{{asset('/media/avatars/300-12.jpg')}}" alt="آنا کوهی" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">آنا کوهی</a>
                                            <span>ana.cf@limtel.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>24 Jun 2024, 11:30 am</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه6658</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">رابرت دو</a>
                                            <span>robert@benko.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>20 Dec 2024, 8:43 pm</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>شناسه2825</td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: آواتار -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label">
                                                    <img src="{{asset('/media/avatars/300-13.jpg')}}" alt="جواد مولای" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربر details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">جواد مولای</a>
                                            <span>miller@mapple.com</span>
                                        </div>
                                        <!--begin::کاربر details-->
                                    </td>
                                    <td>21 Feb 2024, 11:05 am</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 m-0"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="apps/user-management/users/view.html" class="menu-link px-3">نمایش</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">حذف</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::کارت body-->
                    </div>
                    <!--end::کارت-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::قالب بندی-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('title')
    نقش
@endsection
