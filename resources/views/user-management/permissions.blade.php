@extends('admin.layouts.admin')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::کارت-->
            <div class="card card-flush">
                <!--begin::کارت header-->
                <div class="card-header mt-6">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <!--begin::جستجو-->
                        <div class="d-flex align-items-center position-relative my-1 me-5">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="جستجو مجوزها" />
                        </div>
                        <!--end::جستجو-->
                    </div>
                    <!--end::کارت title-->
                    <!--begin::کارت toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_permission">
                            <i class="ki-duotone ki-plus-square fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>افزودن مجوز</button>
                        <!--end::Button-->
                    </div>
                    <!--end::کارت toolbar-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                        <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">نام</th>
                            <th class="min-w-250px">اختصاص دادن</th>
                            <th class="min-w-125px">زمان ایجاد تاریخ</th>
                            <th class="text-end min-w-100px">عملیات</th>
                        </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                        <tr>
                            <td>کاربر مدیریت</td>
                            <td>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">مدیریت</a>
                            </td>
                            <td>05 May 2024, 10:10 pm</td>
                            <td class="text-end">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                    <i class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>مدیریت محتوا</td>
                            <td>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">مدیریت</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">توسعه دهنده</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-success fs-7 m-1">تحلیلگر</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-info fs-7 m-1">پشتیبانی</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-warning fs-7 m-1">آزمایش</a>
                            </td>
                            <td>20 Dec 2024, 5:30 pm</td>
                            <td class="text-end">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                    <i class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>مدیریت مالی</td>
                            <td>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">مدیریت</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-success fs-7 m-1">تحلیلگر</a>
                            </td>
                            <td>10 Nov 2024, 6:43 am</td>
                            <td class="text-end">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                    <i class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>گزارش</td>
                            <td>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">مدیریت</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-success fs-7 m-1">تحلیلگر</a>
                            </td>
                            <td>05 May 2024, 5:20 pm</td>
                            <td class="text-end">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                    <i class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>حقوق و دستمزد</td>
                            <td>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">مدیریت</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-success fs-7 m-1">تحلیلگر</a>
                            </td>
                            <td>10 Nov 2024, 5:20 pm</td>
                            <td class="text-end">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                    <i class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>اختلاف نظرات مدیریت</td>
                            <td>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">مدیریت</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">توسعه دهنده</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-info fs-7 m-1">پشتیبانی</a>
                            </td>
                            <td>25 Oct 2024, 5:20 pm</td>
                            <td class="text-end">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                    <i class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>کنترل های کلید دسترسی</td>
                            <td>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">مدیریت</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">توسعه دهنده</a>
                            </td>
                            <td>25 Jul 2024, 10:10 pm</td>
                            <td class="text-end">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                    <i class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>دیتابیس مدیریت</td>
                            <td>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">مدیریت</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">توسعه دهنده</a>
                            </td>
                            <td>19 Aug 2024, 10:30 am</td>
                            <td class="text-end">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                    <i class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Repositیاy مدیریت</td>
                            <td>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">مدیریت</a>
                                <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">توسعه دهنده</a>
                            </td>
                            <td>21 Feb 2024, 10:30 am</td>
                            <td class="text-end">
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                    <i class="ki-duotone ki-setting-3 fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::کارت-->
            <!--begin::Modals-->
            <!--begin::Modal - افزودن permissions-->
            <div class="modal fade" id="kt_modal_add_permission" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">یک مجوز را اضافه کنید</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-permissions-modal-action="close">
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
                            <form id="kt_modal_add_permission_form" class="form" action="{{ route('user-management.permissions.store') }}" method="POST">
                                @csrf
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">نام دسترسی</span>
                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="نام مجوزها باید منحصر به فرد باشد.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter a permission name" name="permission_name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">نام نمایشی دسترسی</span>
                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="نام مجوزها باید منحصر به فرد باشد.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter a permission display name" name="permission_display_name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-9">
                                        <input class="form-check-input" type="checkbox" name="permissions_core" id="kt_permissions_core" />
                                        <span class="form-check-label" for="kt_permissions_core">Set as core permission</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Disclaimer-->
                                <div class="text-gray-600">Permission set as a <strong class="me-1">Core Permission</strong> will be locked and <strong class="me-1">not editable</strong> in future</div>
                                    <!--end::Disclaimer-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" data-kt-permissions-modal-action="cancel">لغو</button>
                                        <button type="submit" class="btn btn-primary" data-kt-permissions-modal-action="submit">
                                            <span class="indicator-label">ثبت</span>
                                            <span class="indicator-progress">لطفا صبر کنید...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                            </form>
                            <!--end::form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - افزودن permissions-->
            <!--begin::Modal - بروزرسانی permissions-->
            <div class="modal fade" id="kt_modal_update_permission" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">بروزرسانی Permission</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-permissions-modal-action="close">
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
                            <!--begin::Notice-->
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
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
                                        <div class="fs-6 text-gray-700">
                                            <strong class="me-1">هشدار!</strong>By editing the permission name, you might break the system permissions functionality. Please ensure you're absolutely certain before proceeding.</div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                            <!--end::Notice-->
                            <!--begin::form-->
                            <form id="kt_modal_update_permission_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">نام دسترسی</span>
                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="نام مجوزها باید منحصر به فرد باشد.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                    </label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Enter a permission name" name="permission_name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" data-kt-permissions-modal-action="cancel">لغو</button>
                                    <button type="submit" class="btn btn-primary" data-kt-permissions-modal-action="submit">
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
            <!--end::Modal - بروزرسانی permissions-->
            <!--end::Modals-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('title')
    مجوزها
@endsection
