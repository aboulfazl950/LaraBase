@extends('admin.layouts.admin')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Navbar-->
            @include('account.sections.navbar')
            <!--end::Navbar-->
            @yield('ac-content')
        </div>
        <!--end::Content container-->
    </div>
@endsection
