@extends('account.layouts.profile')

@section('ac-content')
    <!--begin::پایه info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::کارت header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::کارت title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">پروفایل جزییات</h3>
            </div>
            <!--end::کارت title-->
        </div>
        <!--begin::کارت header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::form-->
            <form id="kt_account_profile_details_form" class="form" enctype="multipart/form-data" action="{{route('account.save_profile',['user' => Auth::user()->id])}}" method="POST">
                @csrf
                <!--begin::کارت body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">آواتار</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline {{Auth::user()->profile_photo_url?'':'image-input-empty'}}" data-kt-image-input="true" style="background-image: url('{{asset('/media/svg/avatars/blank.svg')}}')">
                                <!--begin::نمایش existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{Auth::user()->profile_photo_url?Auth::user()->profile_photo_url:'none'}})"></div>
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
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">نام کامل</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="نام" value="مکس" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="نام خانوادگی" value="اسمیت" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">کمپانی</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="کمپانی name" value="ساتراس وب" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">تماس با ما تلفن</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="شماره تلفن باید فعال باشد">
																<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
                        </label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="تلفن number" value="044 3276 454 935" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">سایت کمپانی</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="کمپانی website" value="keenthemes.com" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">کشور</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="کشور of یاigination">
																<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
                        </label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="country" aria-label="انتخاب a کشور" data-control="select2" data-placeholder="انتخاب یک کشور" class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">انتخاب  کشور...</option>
                                <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                <option data-kt-flag="flags/albania.svg" value="هوش مصنوعی">Albania</option>
                                <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                <option data-kt-flag="flags/andیاra.svg" value="AD">Andیاra</option>
                                <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                <option data-kt-flag="flags/anguilla.svg" value="هوش مصنوعی">Anguilla</option>
                                <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
                                <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                <option data-kt-flag="flags/australia.svg" value="AU">ایران</option>
                                <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
                                <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
                                <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                <option data-kt-flag="flags/british-indian-ocean-territیاy.svg" value="IO">British هندn Ocean Territیاy</option>
                                <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
                                <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
                                <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                <option data-kt-flag="flags/comیاos.svg" value="KM">Comیاos</option>
                                <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                <option data-kt-flag="flags/ivیاy-coast.svg" value="CI">Côte d'Ivoire</option>
                                <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
                                <option data-kt-flag="flags/ecuadیا.svg" value="EC">Ecuadیا</option>
                                <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                <option data-kt-flag="flags/el-salvadیا.svg" value="SV">El Salvadیا</option>
                                <option data-kt-flag="flags/equatیاial-guinea.svg" value="GQ">Equatیاial Guinea</option>
                                <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
                                <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                <option data-kt-flag="flags/france.svg" value="FR">فرانسه</option>
                                <option data-kt-flag="flags/french-polynesia.svg" value="PF">فرانسه Polynesia</option>
                                <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                <option data-kt-flag="flags/germany.svg" value="DE">المان</option>
                                <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                <option data-kt-flag="flags/haiti.svg" value="HT">هلند</option>
                                <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican شهر State)</option>
                                <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                <option data-kt-flag="flags/iceland.svg" value="IS">ایساند</option>
                                <option data-kt-flag="flags/india.svg" value="IN">هند</option>
                                <option data-kt-flag="flags/indonesia.svg" value="شناسه">Indonesia</option>
                                <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                <option data-kt-flag="flags/jیاdan.svg" value="JO">Jیاdan</option>
                                <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                <option data-kt-flag="flags/kiribati.svg" value="KI">ایتالیا</option>
                                <option data-kt-flag="flags/nیاth-kیاea.svg" value="KP">Kیاea, دموcratic People's Republic of</option>
                                <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                <option data-kt-flag="flags/laos.svg" value="LA">Lao People's دموcratic Republic</option>
                                <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                <option data-kt-flag="flags/mexico.svg" value="MX">مکزیک</option>
                                <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
                                <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                <option data-kt-flag="flags/monaco.svg" value="MC">فرانسه</option>
                                <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                <option data-kt-flag="flags/mیاocco.svg" value="MA">Mیاocco</option>
                                <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                <option data-kt-flag="flags/myanmar.svg" value="MM">منanmar</option>
                                <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                <option data-kt-flag="flags/new-zealand.svg" value="NZ">جدید Zealand</option>
                                <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                <option data-kt-flag="flags/nیاfolk-island.svg" value="NF">Nیاfolk Island</option>
                                <option data-kt-flag="flags/nیاthern-mariana-islands.svg" value="MP">Nیاthern Mariana Islands</option>
                                <option data-kt-flag="flags/nیاway.svg" value="NO">Nیاway</option>
                                <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territیاy, Occupied</option>
                                <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua جدید Guinea</option>
                                <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                <option data-kt-flag="flags/poland.svg" value="PL">لهستان</option>
                                <option data-kt-flag="flags/pیاtugal.svg" value="PT">Pیاtugal</option>
                                <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
                                <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (فرانسه part)</option>
                                <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
                                <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
                                <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                <option data-kt-flag="flags/singapیاe.svg" value="SG">Singapیاe</option>
                                <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
                                <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                <option data-kt-flag="flags/south-kیاea.svg" value="KR">South Kیاea</option>
                                <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                <option data-kt-flag="flags/sweden.svg" value="SE">سوئد</option>
                                <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, حرفه ایvince of China</option>
                                <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
                                <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
                                <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                <option data-kt-flag="flags/turkey.svg" value="TR">ترکیه</option>
                                <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
                                <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
                                <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                <option data-kt-flag="flags/united-states.svg" value="ایران">آمریکا</option>
                                <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                <option data-kt-flag="flags/vanuatu.svg" value="VU">ونuatu</option>
                                <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
                                <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">زبان</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <!--begin::Input-->
                            <select name="language" aria-label="انتخاب زبانata-control="select2" data-placeholder="انتخاب یک زبان" class="form-select form-select-solid form-select-lg">
                            <option value="">انتخاب زبان</option>
                            <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia - Indonesian</option>
                            <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu - Malay</option>
                            <option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan</option>
                            <option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština - Czech</option>
                            <option data-kt-flag="flags/netherlands.svg" value="da">Dansk - Danish</option>
                            <option data-kt-flag="flags/germany.svg" value="de">Deutsch - آلمانی</option>
                            <option data-kt-flag="flags/united-kingdom.svg" value="en">انگلیسی</option>
                            <option data-kt-flag="flags/united-kingdom.svg" value="en-gb">انگلیسی UK - British انگلیسی</option>
                            <option data-kt-flag="flags/spain.svg" value="es">Español - اسپانیایی</option>
                            <option data-kt-flag="flags/philippines.svg" value="fil">Filipino</option>
                            <option data-kt-flag="flags/france.svg" value="fr">Français - فرانسه</option>
                            <option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish (beta)</option>
                            <option data-kt-flag="flags/greenland.svg" value="gl">Galego - Galician (beta)</option>
                            <option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski - Croatian</option>
                            <option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian</option>
                            <option data-kt-flag="flags/hungary.svg" value="hu">Magyar - Hungarian</option>
                            <option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands - Dutch</option>
                            <option data-kt-flag="flags/nیاway.svg" value="no">Nیاsk - Nیاwegian</option>
                            <option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish</option>
                            <option data-kt-flag="flags/pیاtugal.svg" value="pt">Pیاtuguês - Pیاtuguese</option>
                            <option data-kt-flag="flags/romania.svg" value="ro">Română - Romanian</option>
                            <option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina - Slovak</option>
                            <option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish</option>
                            <option data-kt-flag="flags/el-salvadیا.svg" value="sv">Svenska - Swedish</option>
                            <option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng Việt - Vietnamese</option>
                            <option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish</option>
                            <option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek</option>
                            <option data-kt-flag="flags/bulgaria.svg" value="bg">Български език - Bulgarian</option>
                            <option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian</option>
                            <option data-kt-flag="flags/suriname.svg" value="sr">Српски - Serbian</option>
                            <option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова - Ukrainian</option>
                            <option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew</option>
                            <option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu (beta)</option>
                            <option data-kt-flag="flags/argentina.svg" value="ar">العربية - Arabic</option>
                            <option data-kt-flag="flags/argentina.svg" value="fa">فارسی - Persian</option>
                            <option data-kt-flag="flags/mauritania.svg" value="mr">मराठी - Marathi</option>
                            <option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi</option>
                            <option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা - Bangla</option>
                            <option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati</option>
                            <option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil</option>
                            <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ - Kannada</option>
                            <option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai</option>
                            <option data-kt-flag="flags/south-kیاea.svg" value="ko">한국어 - Kیاean</option>
                            <option data-kt-flag="flags/japan.svg" value="ja">日本語 - ژاپنی</option>
                            <option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 - Simplified Chinese</option>
                            <option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional Chinese</option>
                            </select>
                            <!--end::Input-->
                            <!--begin::Hint-->
                            <div class="form-text">لطفاً یک زبان ترجیحی را انتخاب کنید ، از جمله تاریخ ، زمان و قالب بندی شماره.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">زمان محلی</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="timezone" aria-label="انتخاب زمان محلی" data-control="select2" data-placeholder="انتخاب منظقه زمانی" class="form-select form-select-solid form-select-lg">
                                <option value="">انتخاب زمان محلی..</option>
                                <option data-bs-offset="-39600" value="International تاریخ Line West">(GMT-11:00) International تاریخ Line West</option>
                                <option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                <option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                <option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                <option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                <option data-bs-offset="-25200" value="Pacific زمان (ایران & Canada)">(GMT-07:00) Pacific زمان (ایران & Canada)</option>
                                <option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                <option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                <option data-bs-offset="-21600" value="Mountain زمان (ایران & Canada)">(GMT-06:00) Mountain زمان (ایران & Canada)</option>
                                <option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                <option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                <option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                <option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                <option data-bs-offset="-18000" value="Central زمان (ایران & Canada)">(GMT-05:00) Central زمان (ایران & Canada)</option>
                                <option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                <option data-bs-offset="-18000" value="مکزیک شهر">(GMT-05:00) مکزیک شهر</option>
                                <option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                <option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                <option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                <option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                <option data-bs-offset="-14400" value="Eastern زمان (ایران & Canada)">(GMT-04:00) Eastern زمان (ایران & Canada)</option>
                                <option data-bs-offset="-14400" value="هندna (East)">(GMT-04:00) هندna (East)</option>
                                <option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                <option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                <option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                <option data-bs-offset="-10800" value="Atlantic زمان (Canada)">(GMT-03:00) Atlantic زمان (Canada)</option>
                                <option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                <option data-bs-offset="-10800" value="برزیلia">(GMT-03:00) برزیلia</option>
                                <option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                <option data-bs-offset="-9000" value="جدیدfoundland">(GMT-02:30) جدیدfoundland</option>
                                <option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                <option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                <option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                <option data-bs-offset="0" value="Azیاes">(GMT) Azیاes</option>
                                <option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                <option data-bs-offset="0" value="UTC">(GMT) UTC</option>
                                <option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                <option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                <option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                <option data-bs-offset="3600" value="لندن">(GMT+01:00) لندن</option>
                                <option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                <option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                <option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                <option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                <option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                <option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                <option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                <option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                <option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                <option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                <option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                <option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                <option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                <option data-bs-offset="7200" value="اسپانیا">(GMT+02:00) اسپانیا</option>
                                <option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                <option data-bs-offset="7200" value="آمستردام">(GMT+02:00) آمستردام</option>
                                <option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                <option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                <option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                <option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                <option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                <option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                <option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                <option data-bs-offset="7200" value="Pretیاia">(GMT+02:00) Pretیاia</option>
                                <option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                <option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                <option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                <option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                <option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                <option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                <option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                <option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                <option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                <option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                <option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                <option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                <option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                <option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                <option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                <option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                <option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                <option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                <option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                <option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                <option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                <option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                <option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                <option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                <option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                <option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                <option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                <option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                <option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                <option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                <option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                <option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                <option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                <option data-bs-offset="19800" value="جدید Delhi">(GMT+05:30) جدید Delhi</option>
                                <option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                <option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                <option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                <option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                <option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                <option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                <option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                <option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                <option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                <option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                <option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                <option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                <option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                <option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                <option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                <option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                <option data-bs-offset="28800" value="Singapیاe">(GMT+08:00) Singapیاe</option>
                                <option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                <option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                <option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                <option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                <option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                <option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                <option data-bs-offset="32400" value="Sappیاo">(GMT+09:00) Sappیاo</option>
                                <option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                <option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                <option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                <option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                <option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                <option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                <option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                <option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                <option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                <option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                <option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                <option data-bs-offset="36000" value="Pیاt بیشترsby">(GMT+10:00) Pیاt بیشترsby</option>
                                <option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                <option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                <option data-bs-offset="39600" value="جدید Caledonia">(GMT+11:00) جدید Caledonia</option>
                                <option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                <option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                <option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                <option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                <option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                <option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">واحد پول</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="currnecy" aria-label="انتخاب a واحد پول" data-control="select2" data-placeholder="انتخاب واحد پولی" class="form-select form-select-solid form-select-lg">
                                <option value="">انتخاب واحد پولی</option>
                                <option data-kt-flag="flags/united-states.svg" value="USD">
                                    <b>USD</b>&nbsp;-&nbsp;USA dollar</option>
                                <option data-kt-flag="flags/united-kingdom.svg" value="GBP">
                                    <b>GBP</b>&nbsp;-&nbsp;British pound</option>
                                <option data-kt-flag="flags/australia.svg" value="AUD">
                                    <b>AUD</b>&nbsp;-&nbsp;ایرانn dollar</option>
                                <option data-kt-flag="flags/japan.svg" value="JPY">
                                    <b>JPY</b>&nbsp;-&nbsp;ژاپنی yen</option>
                                <option data-kt-flag="flags/sweden.svg" value="SEK">
                                    <b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
                                <option data-kt-flag="flags/canada.svg" value="CAD">
                                    <b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
                                <option data-kt-flag="flags/switzerland.svg" value="CHF">
                                    <b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">ارتباط</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <!--begin::تنظیمات-->
                            <div class="d-flex align-items-center mt-3">
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                    <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                    <span class="fw-semibold ps-2 fs-6">ایمیل</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid">
                                    <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                    <span class="fw-semibold ps-2 fs-6">تلفن</span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::تنظیمات-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-0">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">بازاریابی</label>
                        <!--begin::Tags-->
                        <!--begin::Tags-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                        </div>
                        <!--begin::Tags-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::کارت body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">لغو</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">ذخیره تغییرات</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::پایه info-->
    <!--begin::ورود-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::کارت header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">ورود</h3>
            </div>
        </div>
        <!--end::کارت header-->
        <!--begin::Content-->
        <div id="kt_account_settings_signin_method" class="collapse show">
            <!--begin::کارت body-->
            <div class="card-body border-top p-9">
                <!--begin::ایمیل -->
                <div class="d-flex flex-wrap align-items-center">
                    <!--begin::Tags-->
                    <div id="kt_signin_email">
                        <div class="fs-6 fw-bold mb-1">ایمیل </div>
                        <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                    </div>
                    <!--end::Tags-->
                    <!--begin::-->
                    <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                        <!--begin::form-->
                        <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                            <div class="row mb-6">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="fv-row mb-0">
                                        <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter جدید ایمیل </label>
                                        <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="ایمیل " name="emailaddress" value="support@keenthemes.com" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-0">
                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">تایید کلمه عبور</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">بروزرسانی ایمیل</button>
                                <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">انصراف</button>
                            </div>
                        </form>
                        <!--end::form-->
                    </div>
                    <!--end::-->
                    <!--begin::Actions-->
                    <div id="kt_signin_email_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">تعویض ایمیل</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::ایمیل -->
                <!--begin::separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::separator-->
                <!--begin::password-->
                <div class="d-flex flex-wrap align-items-center mb-10">
                    <!--begin::Tags-->
                    <div id="kt_signin_password">
                        <div class="fs-6 fw-bold mb-1">password</div>
                        <div class="fw-semibold text-gray-600">************</div>
                    </div>
                    <!--end::Tags-->
                    <!--begin::-->
                    <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                        <!--begin::form-->
                        <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                            <div class="row mb-1">
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">کلمه عبور فعلی</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="newpassword" class="form-label fs-6 fw-bold mb-3">کلمه عبور جدید</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">تکرار کلمه عبور جدید</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-text mb-5">password must be at least 8 character and contain symbols</div>
                            <div class="d-flex">
                                <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">بروزرسانی کلمه عبور</button>
                                <button id="kt_password_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">انصراف</button>
                            </div>
                        </form>
                        <!--end::form-->
                    </div>
                    <!--end::-->
                    <!--begin::Actions-->
                    <div id="kt_signin_password_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">ریست کلمه عبور</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::password-->
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                        <!--begin::Content-->
                        <div class="mb-3 mb-md-0 fw-semibold">
                            <h4 class="text-gray-900 fw-bold">اکانت امن</h4>
                            <div class="fs-6 text-gray-700 pe-7">احراز هویت دو فاکتیا یک لایه امنیتی اضافی به حساب شما اضافه می کند. برای ورود به سیستم، علاوه بر این باید یک کد 6 رقمی ارائه دهید</div>
                        </div>
                        <!--end::Content-->
                        <!--begin::Actions-->
                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factیا_authentication">فعال کردن</a>
                        <!--end::Actions-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::کارت body-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::ورود-->
    <!--begin::اتصال اکانت-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::کارت header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">اتصال اکانت</h3>
            </div>
        </div>
        <!--end::کارت header-->
        <!--begin::Content-->
        <div id="kt_account_settings_connected_accounts" class="collapse show">
            <!--begin::کارت body-->
            <div class="card-body border-top p-9">
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-semibold">
                            <div class="fs-6 text-gray-700">احراز هویت دو فاکتیا یک لایه امنیتی اضافی به حساب شما اضافه می کند. برای ورود به سیستم، باید یک کد شگفت انگیز 4 رقمی ارائه کنید.
                                <a href="#" class="fw-bold">بیشتر بدانید</a></div>
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
                                <div class="fs-6 fw-semibold text-gray-500">پروژه خود را به درستی برنامه ریزی کنید</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="form-check form-check-solid form-check-custom form-switch">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />
                                <label class="form-check-label" for="googleswitch"></label>
                            </div>
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
                                <div class="fs-6 fw-semibold text-gray-500">مراقب مخازن خود باشید</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="form-check form-check-solid form-check-custom form-switch">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked" />
                                <label class="form-check-label" for="githubswitch"></label>
                            </div>
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
                                <div class="fs-6 fw-semibold text-gray-500">بحث در مورد پروژه ها را ادغام کنید</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="form-check form-check-solid form-check-custom form-switch">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" />
                                <label class="form-check-label" for="slackswitch"></label>
                            </div>
                        </div>
                    </div>
                    <!--end::item-->
                </div>
                <!--end::items-->
            </div>
            <!--end::کارت body-->
            <!--begin::کارت footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button class="btn btn-light btn-active-light-primary me-2">لغو</button>
                <button class="btn btn-primary">ذخیره تغییرات</button>
            </div>
            <!--end::کارت footer-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::اتصال اکانت-->
    <!--begin::اعلان ها-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::کارت header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_email_preferences" aria-expanded="true" aria-controls="kt_account_email_preferences">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">تنظیمات ایمیل</h3>
            </div>
        </div>
        <!--begin::کارت header-->
        <!--begin::Content-->
        <div id="kt_account_settings_email_preferences" class="collapse show">
            <!--begin::form-->
            <form class="form">
                <!--begin::کارت body-->
                <div class="card-body border-top px-9 py-9">
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                        <!--end::Input-->
                        <!--begin::Tags-->
                        <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">موفقیت آمیز درگاه ها</span>
															<span class="text-muted fs-6">برای هر پرداخت موفق اعلانی دریافت کنید.</span>
														</span>
                        <!--end::Tags-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
                        <!--end::Input-->
                        <!--begin::Tags-->
                        <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">پرداخت ها</span>
															<span class="text-muted fs-6">برای هر پرداخت آغاز شده اعلانی دریافت کنید.</span>
														</span>
                        <!--end::Tags-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                        <!--end::Input-->
                        <!--begin::Tags-->
                        <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">مجموعه هزینه</span>
															<span class="text-muted fs-6">هر بار که هزینه ای را از فروش دریافت می کنید ، اعلانی دریافت می کنید</span>
														</span>
                        <!--end::Tags-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
                        <!--end::Input-->
                        <!--begin::Tags-->
                        <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">مشتری پرداخت اختلاف نظر</span>
															<span class="text-muted fs-6">در صورتی که پرداخت توسط مشتری و برای اهداف اختلاف مورد مناقشه قرار گرفت، اعلان دریافت کنید.</span>
														</span>
                        <!--end::Tags-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                        <!--end::Input-->
                        <!--begin::Tags-->
                        <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">هشدارها</span>
															<span class="text-muted fs-6">در صورت اعلام پرداخت توسط اداره دارایی ، مالیه ، سرمایه گذاری ، اعلان دریافت کنید.</span>
														</span>
                        <!--end::Tags-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
                        <!--end::Input-->
                        <!--begin::Tags-->
                        <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">فاکتور درگاه ها</span>
															<span class="text-muted fs-6">اگر مشتری مبلغ غیر واقعی را برای پرداخت فاکتور خود ارسال کند، اعلان دریافت کنید.</span>
														</span>
                        <!--end::Tags-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                        <!--end::Input-->
                        <!--begin::Tags-->
                        <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">وب هوک</span>
															<span class="text-muted fs-6">اعلان‌هایی را برای خرابی مداوم نقاط پایانی وب هوک دریافت کنید.</span>
														</span>
                        <!--end::Tags-->
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::کارت body-->
                <!--begin::کارت footer-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button class="btn btn-light btn-active-light-primary me-2">لغو</button>
                    <button class="btn btn-primary px-6">ذخیره تغییرات</button>
                </div>
                <!--end::کارت footer-->
            </form>
            <!--end::form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::اعلان ها-->
    <!--begin::اعلان ها-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::کارت header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">اعلان ها</h3>
            </div>
        </div>
        <!--begin::کارت header-->
        <!--begin::Content-->
        <div id="kt_account_settings_notifications" class="collapse show">
            <!--begin::form-->
            <form class="form">
                <!--begin::کارت body-->
                <div class="card-body border-top px-9 pt-3 pb-4">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-row-dashed border-gray-300 align-middle gy-6">
                            <tbody class="fs-6 fw-semibold">
                            <!--begin::Table row-->
                            <tr>
                                <td class="min-w-250px fs-4 fw-bold">اعلان ها</td>
                                <td class="w-125px">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                        <label class="form-check-label ps-2" for="kt_settings_notification_email">ایمیل</label>
                                    </div>
                                </td>
                                <td class="w-125px">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                        <label class="form-check-label ps-2" for="kt_settings_notification_phone">تلفن</label>
                                    </div>
                                </td>
                            </tr>
                            <!--begin::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>صورتحساب بروزرسانی ها</td>
                                <td>
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" id="billing1" checked="checked" data-kt-settings-notification="email" />
                                        <label class="form-check-label ps-2" for="billing1"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="billing2" checked="checked" data-kt-settings-notification="phone" />
                                        <label class="form-check-label ps-2" for="billing2"></label>
                                    </div>
                                </td>
                            </tr>
                            <!--begin::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>جدید تیم اعضا</td>
                                <td>
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="team1" checked="checked" data-kt-settings-notification="email" />
                                        <label class="form-check-label ps-2" for="team1"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="team2" data-kt-settings-notification="phone" />
                                        <label class="form-check-label ps-2" for="team2"></label>
                                    </div>
                                </td>
                            </tr>
                            <!--begin::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>کامل شد پروژه ها</td>
                                <td>
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="project1" data-kt-settings-notification="email" />
                                        <label class="form-check-label ps-2" for="project1"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="project2" checked="checked" data-kt-settings-notification="phone" />
                                        <label class="form-check-label ps-2" for="project2"></label>
                                    </div>
                                </td>
                            </tr>
                            <!--begin::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td class="border-bottom-0">خبرنامه ها</td>
                                <td class="border-bottom-0">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="newsletter1" data-kt-settings-notification="email" />
                                        <label class="form-check-label ps-2" for="newsletter1"></label>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="newsletter2" data-kt-settings-notification="phone" />
                                        <label class="form-check-label ps-2" for="newsletter2"></label>
                                    </div>
                                </td>
                            </tr>
                            <!--begin::Table row-->
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::کارت body-->
                <!--begin::کارت footer-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button class="btn btn-light btn-active-light-primary me-2">لغو</button>
                    <button class="btn btn-primary px-6">ذخیره تغییرات</button>
                </div>
                <!--end::کارت footer-->
            </form>
            <!--end::form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::اعلان ها-->
    <!--begin::غیرفعال کردن اکانت-->
    <div class="card">
        <!--begin::کارت header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">غیرفعال کردن اکانت</h3>
            </div>
        </div>
        <!--end::کارت header-->
        <!--begin::Content-->
        <div id="kt_account_settings_deactivate" class="collapse show">
            <!--begin::form-->
            <form id="kt_account_deactivate_form" class="form">
                <!--begin::کارت body-->
                <div class="card-body border-top p-9">
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
                                <h4 class="text-gray-900 fw-bold">شما در حال غیرفعال کردن اکانت هستید</h4>
                                <div class="fs-6 text-gray-700">برای امنیت بیشتر، لازم است هنگام بازنشانی رمز عبور امضا، ایمیل یا شماره تلفن خود را تأیید کنید.
                                    <br />
                                    <a class="fw-bold" href="#">آموزش بیشتر</a></div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--begin::form input row-->
                    <div class="form-check form-check-solid fv-row">
                        <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                        <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">غیرفعال کردن حساب خود را تأیید می کنم</label>
                    </div>
                    <!--end::form input row-->
                </div>
                <!--end::کارت body-->
                <!--begin::کارت footer-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">غیرفعال کردن اکانت</button>
                </div>
                <!--end::کارت footer-->
            </form>
            <!--end::form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::غیرفعال کردن اکانت-->
@endsection

@section('title')
    تنظیمات پروفایل
@endsection
