<form id="kt_modal_update_role_form" class="form" action="{{route('user-management.roles.update',['role'=>$role->id])}}" method="POST">
    @csrf
    @method('put')
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
            <input class="form-control form-control-solid" placeholder="سطح دسترسی خود را وارد نمایید" name="role_name" value="{{$role->name}}" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Tags-->
            <label class="fs-5 fw-bold form-label mb-2">
                <span class="required">نام نمایشی سطح دسترسی</span>
            </label>
            <!--end::Tags-->
            <!--begin::Input-->
            <input class="form-control form-control-solid" placeholder="سطح دسترسی خود را وارد نمایید" name="role_display_name" value="{{$role->display_name}}" />
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
                    @foreach($permissions as $permission)
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Tags-->
                            <td class="text-gray-800">{{$permission->display_name}}</td>
                            <!--end::Tags-->
                            <!--begin::Input group-->
                            <td>
                                <!--begin::Wrapper-->
                                <div class="d-flex">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                        <input class="form-check-input" type="checkbox" value="{{$permission->name}}" name="{{$permission->name}}"
                                            {{ in_array( $permission->name , $role->permissions->pluck('name')->toArray() ) ? 'checked' : '' }}
                                        />
                                        <span class="form-check-label">مشاهده</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    @if(in_array($permission->name."_c",$crud_permissions->pluck('name')->toArray()))
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                        <input class="form-check-input" type="checkbox" value="{{$permission->name}}_c" name="{{$permission->name}}_c"
                                            {{ in_array( $permission->name."_c" , $role->permissions->pluck('name')->toArray() ) ? 'checked' : '' }}
                                        />
                                        <span class="form-check-label">افزودن</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    @endif
                                    @if(in_array($permission->name."_u",$crud_permissions->pluck('name')->toArray()))
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                        <input class="form-check-input" type="checkbox" value="{{$permission->name}}_u" name="{{$permission->name}}_u"
                                            {{ in_array( $permission->name."_u" , $role->permissions->pluck('name')->toArray() ) ? 'checked' : '' }}
                                        />
                                        <span class="form-check-label">ویرایش</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    @endif
                                    @if(in_array($permission->name."_d",$crud_permissions->pluck('name')->toArray()))
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="{{$permission->name}}_d" name="{{$permission->name}}_d"
                                            {{ in_array( $permission->name."_d" , $role->permissions->pluck('name')->toArray() ) ? 'checked' : '' }}
                                        />
                                        <span class="form-check-label">حذف</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    @endif
                                </div>
                                <!--end::Wrapper-->
                            </td>
                            <!--end::Input group-->
                        </tr>
                        <!--end::Table row-->
                    @endforeach
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
