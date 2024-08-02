@extends('admin.layouts.admin')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::کارت-->
            <div class="card">
                <!--begin::کارت header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <!--begin::جستجو-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="جستجو کاربر" />
                        </div>
                        <!--end::جستجو-->
                    </div>
                    <!--begin::کارت title-->
                    <!--begin::کارت toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::فیلتر-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>فیلتر</button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">فیلتر تنظیمات</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::separator-->
                                <!--begin::Content-->
                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">سطح دسترسی:</label>
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                            <option></option>
                                            <option value="مدیریت">مدیریت</option>
                                            <option value="تحلیلگر">تحلیلگر</option>
                                            <option value="توسعه دهنده">توسعه دهنده</option>
                                            <option value="پشتیبانی">پشتیبانی</option>
                                            <option value="آزمایش">آزمایش</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">ورود دو مرحله ای:</label>
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                            <option></option>
                                            <option value="فعال">فعال</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">ریست</button>
                                        <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">تایید</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::فیلتر-->
                            <!--begin::خروجی-->
                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_expیاt_users">
                                <i class="ki-duotone ki-exit-up fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>خروجی</button>
                            <!--end::خروجی-->
                            <!--begin::افزودن user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                <i class="ki-duotone ki-plus fs-2"></i>افزودن کاربر</button>
                            <!--end::افزودن user-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::گروه actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                            <div class="fw-bold me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>انتخاب شده</div>
                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">حذف انتخاب شده</button>
                        </div>
                        <!--end::گروه actions-->
                        <!--begin::Modal - Adjust تعادل-->
                        <div class="modal fade" id="kt_modal_expیاt_users" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">خروجی کاربران</h2>
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
                                        <form id="kt_modal_expیاt_users_form" class="form" action="#">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Tags-->
                                                <label class="fs-6 fw-semibold form-label mb-2">انتخاب سطح دسترسی:</label>
                                                <!--end::Tags-->
                                                <!--begin::Input-->
                                                <select name="role" data-control="select2" data-placeholder="انتخاب نقش" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                    <option></option>
                                                    <option value="مدیریت">مدیریت</option>
                                                    <option value="تحلیلگر">تحلیلگر</option>
                                                    <option value="توسعه دهنده">توسعه دهنده</option>
                                                    <option value="پشتیبانی">پشتیبانی</option>
                                                    <option value="آزمایش">آزمایش</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Tags-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">انتخاب خروجی format:</label>
                                                <!--end::Tags-->
                                                <!--begin::Input-->
                                                <select name="format" data-control="select2" data-placeholder="انتخاب a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                    <option></option>
                                                    <option value="excel">Excel</option>
                                                    <option value="pdf">PDF</option>
                                                    <option value="cvs">CVS</option>
                                                    <option value="zip">ZIP</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="text-center">
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
                        <!--end::Modal - کارت جدید-->
                        <!--begin::Modal - افزودن task-->
                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">افزودن کاربر</h2>
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
                                    <div class="modal-body px-5 my-7">
                                        <!--begin::form-->
                                        <form id="kt_modal_add_user_form" class="form" action="#">
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Tags-->
                                                    <label class="d-block fw-semibold fs-6 mb-5">آواتار</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Image placeholder-->
                                                    <style>.image-input-placeholder { background-image: url('{{asset('/media/svg/files/blank-image.svg')}}'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{asset('/media/svg/files/blank-image-dark.svg')}}'); }</style>
                                                    <!--end::Image placeholder-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                        <!--begin::نمایش existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('/media/avatars/300-6.jpg')}});"></div>
                                                        <!--end::نمایش existing avatar-->
                                                        <!--begin::Tags-->
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
                                                        <!--end::Tags-->
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
                                                    <!--begin::Hint-->
                                                    <div class="form-text">همه بدهکار هستیم file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Tags-->
                                                    <label class="required fw-semibold fs-6 mb-2">نام کامل</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="مرادی نیا" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Tags-->
                                                    <label class="required fw-semibold fs-6 mb-2">ایمیل</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="smith@kpmg.com" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <!--begin::Tags-->
                                                    <label class="required fw-semibold fs-6 mb-5">سطح دسترسی</label>
                                                    <!--end::Tags-->
                                                    <!--begin::سطح دسترسی-->
                                                    <!--begin::Input row-->
                                                    <div class="d-flex fv-row">
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
                                                    <div class="d-flex fv-row">
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
                                                    <div class="d-flex fv-row">
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
                                                    <div class="d-flex fv-row">
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
                                                    <div class="d-flex fv-row">
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
                                                    <!--end::سطح دسترسی-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Scroll-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-10">
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
                    </div>
                    <!--end::کارت toolbar-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                </div>
                            </th>
                            <th class="min-w-125px">کاربر</th>
                            <th class="min-w-125px">سطح دسترسی</th>
                            <th class="min-w-125px">اخرین ورود</th>
                            <th class="min-w-125px">دو مرحله ای </th>
                            <th class="min-w-125px">پیوستنed تاریخ</th>
                            <th class="text-end min-w-100px">عملیات</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        @foreach ($users as $key => $user)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <!--begin:: آواتار -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            @if($user->profile_photo_url)
                                            <img src="{{ $user->profile_photo_url }}" alt="{{$user->name}}" class="w-100" />
                                            @else
                                                <div class="symbol-label fs-3 {{ app(\App\Actions\GetThemeType::class)->handle('bg-light-? text-?', $user->name) }}">
                                                    {{ substr($user->name, 0, 1) }}
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::کاربر details-->
                                <div class="d-flex flex-column">
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}</a>
                                    <span>{{ $user->email }}</span>
                                </div>
                                <!--begin::کاربر details-->
                            </td>
                            <td>مدیریت</td>
                            <td>
                                <div class="badge badge-light fw-bold">{{$user->last_login_at?friendlyTime($user->last_login_at->timestamp):'22'}}</div>
                            </td>
                            <td></td>
                            <td>{{ verta($user->created_at) }}</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3"></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
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
                            <td>تحلیلگر</td>
                            <td>
                                <div class="badge badge-light fw-bold">بیست دقیقه پیش</div>
                            </td>
                            <td>
                                <div class="badge badge-light-success fw-bold">فعال</div>
                            </td>
                            <td>20 Dec 2024, 6:05 pm</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3"></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
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
        <!--end::Content container-->
    </div>
@endsection

@section('title')
    لیست کاربران
@endsection
