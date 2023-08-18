@extends('master-page')

@section('header')

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
        <!--begin::Toolbar container-->
        <div class="d-flex flex-column flex-row-fluid">
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-center pt-1">
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white fw-bold lh-1">
                        <a href="home" class="text-white">
                            <i class="fonticon-home text-white fs-3"></i>
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                        <span class="svg-icon svg-icon-4 svg-icon-white mx-n1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white fw-bold lh-1">Dashboard</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Toolbar wrapper=-->
            <!--begin::Toolbar wrapper=-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                <!--begin::Page title-->
                <div class="page-title d-flex align-items-center me-3">
                    <img alt="Logo" src="assets/media/logos/logo_tunas.png" class="h-60px me-5" />
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">Customer Card Peronalize Assistance
                    <!--begin::Description-->
                    <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4"> Tunas Toyota Mampang</span>
                    <!--end::Description--></h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Items-->
                <div class="d-flex gap-4 gap-lg-13">
                    <!--begin::Item-->
                    <div class="d-flex flex-column">
                        <!--begin::Number-->
                        <span class="text-white fw-bold fs-3 mb-1">{{ $hitung_pengguna }}</span>
                        <!--end::Number-->
                        <!--begin::Section-->
                        <div class="text-white opacity-50 fw-bold">Total Customer</div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-column">
                        <!--begin::Number-->
                        <span class="text-white fw-bold fs-3 mb-1">{{ $hitung_kendaraan }}</span>
                        <!--end::Number-->
                        <!--begin::Section-->
                        <div class="text-white opacity-50 fw-bold">Today Kendaraan</div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
            </div>
            <!--end::Toolbar wrapper=-->
        </div>
        <!--end::Toolbar container=-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
@endsection

@section('content')
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-400px mb-10">
                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body pt-15">
                        <!--begin::Summary-->
                        <div class="d-flex flex-center flex-column mb-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-100px symbol-circle mb-7">
                                <img src="assets/media/avatars/300-1.jpg" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold mb-1">{{ $find_sin->customername }}</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fs-5 fw-semibold text-muted mb-6">{{ $find_sin->idvalid }} - {{ $find_sin->retail_fleet }}</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap flex-center table-responsive">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-75px">No Polisi</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="fw-semibold text-muted">@if($dicari != null) {{ $dicari }} @endif</div>
                                            </div>
                                            <!--end::Stats-->
                                        </td>
                                        <td>
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-50px">Vehicle Age</span>
                                                </div>
                                                <div class="fw-semibold text-muted">{{ $find_sin->vehicleage }}</div>
                                            </div>
                                            <!--end::Stats-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-50px">No KTP:</span>
                                                </div>
                                                <div class="fw-semibold text-muted">{{ $find_sin->noktp }}</div>
                                            </div>
                                            <!--end::Stats-->
                                        </td>
                                        <td>
                                            <!--begin::Stats-->
                                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                                <div class="fs-4 fw-bold text-gray-700">
                                                    <span class="w-50px">No NPWP</span>
                                                </div>
                                                <div class="fw-semibold text-muted">{{ $find_sin->nonpwp }}</div>
                                            </div>
                                            <!--end::Stats-->
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Summary-->
                        <!--begin::Details toggle-->
                        <div class="d-flex flex-stack fs-4 py-3">
                            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span></div>
                        </div>
                        <!--end::Details toggle-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--begin::Details content-->
                        <div id="kt_customer_view_details" class="collapse show">
                            <div class="py-5 fs-6">
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Nomor HP</div>
                                <div class="text-gray-600">{{ $find_sin->notlp_hp }} <br> {{ $find_sin->decisionmakerphone }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Alamat</div>
                                <div class="text-gray-600">
                                    <a href="#" class="text-gray-600 text-hover-primary">{{ $find->customeraddress ?? '' }}</a>
                                </div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Cakupan</div>
                                <div class="text-gray-600">{{ $find->ringarea ?? 0 }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Total Kendaraan</div>
                                <div class="text-gray-600">{{ $hitung }}</div>
                                <div class="table-responsive">
                                    <table class="table table-striped gy-7 gs-7">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                                <th class="min-w-100px"></th>
                                                <th class="min-w-100px">Exp. Annual Tax</th>
                                                <th class="min-w-100px">Exp. STNK</th>
                                                <th class="min-w-200px">Suggest</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tax Validity Period</td>
                                                @if($find_sin->stnk != "")
                                                    <td>{{ date('d/m/Y', strtotime('+365 day', strtotime($find_sin->stnk))) }}</td>
                                                    <td>{{ date('d/m/Y', strtotime($find_sin->expiredstnk)); }}</td>
                                                    <td>
                                                        @if($find_sin->stnk <= date('d/m/Y'))
                                                            Reminder Call Vehicle Tax
                                                        @else
                                                            Vehicle Tax Valid
                                                        @endif
                                                    </td>
                                                @else
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                @endif
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Connected Accounts-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <div class="card-title">
                            <h3 class="fw-bold m-0">Detail Unit Kendaraan</h3>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-2 table-responsive">
                        <table width="100%">
                            <tr>
                                <th>Sales Date</th>
                                <th>Expired FS</th>
                                <th>Sales Branch</th>
                            </tr>
                            <tr>
                                <td>@if($find_sin->salesdate == null) - @else {{ date('d/m/Y', strtotime($find_sin->salesdate)) }} @endif</td>
                                <td>@if($find_sin->expiredfs == null) - @else {{ date('d/m/Y', strtotime($find_sin->expiredfs)) }} @endif</td>
                                <td>{{ $find_sin->salesbranch }}</td>
                            </tr>
                            <tr>
                                <th>Status Kend.</th>
                                <td colspan="2">{{ $find_sin->statusvehicle }}</td>
                            </tr>
                            <tr>
                                <th>Financing Company</th>
                                <td colspan="2">{{ $find_sin->financingcompany }}</td>
                            </tr>
                            <tr>
                                <th>Insurance Company</th>
                                <td colspan="2">{{ $find_sin->insurancecompany }}</td>
                            </tr>
                            <tr>
                                <th>Insurance Type</th>
                                <td colspan="2">{{ $find_sin->insurancetype }}</td>
                            </tr>
                            <tr>
                                <th>Leasing Tenor</th>
                                <td colspan="2">{{ $find_sin->leasingtenor }}</td>
                            </tr>
                        </table>
                        <br>
                        <hr>
                        <br>
                        <table width="100%">
                            <tr>
                                <th>VN</th>
                                <th>Nopol</th>
                                <th>Years</th>
                            </tr>
                            <tr>
                                <td>{{ $find_sin->vinnumber }}</td>
                                <td>{{ $find_sin->policeregno }}</td>
                                <td>{{ $find_sin->tahunproduksi }}</td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <th colspan="2">Program Serv</th>
                            </tr>
                            <tr>
                                <td>{{ $find_sin->tipekendaraan }}</td>
                                <td colspan="2">{{ $find_sin->freepart }}</td>
                            </tr>
                            <tr>
                                <th>Last Serv. Date</th>
                                <th colspan="2">Last Serv Adv</th>
                            </tr>
                            <tr>
                                <td>{{ date('d/m/Y', strtotime($find_sin->pkbdate)); }}</td>
                                <td colspan="2">{{ $find_sin->serviceadvisor }}</td>
                            </tr>
                        </table>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer border-0 d-flex justify-content-center pt-0">
                        {{-- <button class="btn btn-sm btn-light-primary">Save Changes</button> --}}
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Connected Accounts-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Data Kendaraan</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">History Service</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements">Other Information</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bold mb-0">Summary Suggest for Function :</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div id="kt_customer_view_payment_method" class="card-body pt-0">
                                <!--begin::Option-->
                                <div class="py-0" data-kt-customer-payment-method="row">
                                    <!--begin::Body-->
                                    <div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
                                        <!--begin::Details-->
                                        <div class="d-flex flex-wrap py-5">
                                            <!--begin::Col-->
                                            <div class="flex-equal me-5">
                                                <table class="table table-flush fw-semibold gy-1">
                                                    <tr>
                                                        <td class="fw-bold min-w-125px w-125px">Sales</td>
                                                        <td class="text-gray-600">: {{ $find_sin->prospectsales }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold min-w-125px w-125px">After Sales</td>
                                                        <td class="text-gray-600">: {{ $find_sin->suggestrevenue }} @if($find_sin->vehicleage >= 3) & OFFERING EMISSION TEST @else & EMISSION VALID @endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold min-w-125px w-125px">CR</td>
                                                        <td class="text-gray-600">: {{ $treatment->treatmentcr }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold min-w-125px w-125px">Annual Veh Tax</td>
                                                        <td class="text-gray-600">
                                                            @if($find_sin->stnk <= date('d/m/Y'))
                                                                : REMINDER CALL VEHICLE TAX
                                                            @else
                                                                : VEHICLE TAX VALID
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="flex-equal">
                                                <table class="table table-flush fw-semibold gy-1">
                                                    <tr>
                                                        <td class="fw-bold min-w-125px w-125px">Segment Offering</td>
                                                        <td class="text-gray-600">: {{ $treatment->offering }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold min-w-125px w-125px">TMO Offering</td>
                                                        <td class="text-gray-600">: {{ $find_sin->historyoil }} &nbsp; {{ $find_sin->suggesttire }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold min-w-125px w-125px">Others Info</td>
                                                        <td class="text-gray-600">: {{ $find_sin->tintouch }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Data Kendaraan</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-row-bordered" id="kt_datatable_vertical_scrolla">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-gray-800">
                                                <th>Unit ke</th>
                                                <th>Nopol</th>
                                                <th>Nomor Rangka</th>
                                                <th>Tipe</th>
                                                <th>Free Part</th>
                                                <th>Last Serv</th>
                                                <th>Next Serv</th>
                                                <th>Status</th>
                                                <th>Last Job</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <span class="badge badge-light-success"><a href="caridata?search={{ $find_sin->policeregno}}"> {{ $find_sin->policeregno }} </a></span>
                                                </td>
                                                <td>{{ $find->vinnumber }}</td>
                                                <td>{{ $find->tipekendaraan }}</td>
                                                <td>{{ $find->freepart }}</td>
                                                <td>
                                                    @if($find_sin->pkbdate == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin->pkbdate)); }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($find_sin->pkbdate == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime('+180 day', strtotime($find_sin->pkbdate))) }}
                                                    @endif
                                                </td>
                                                <td>Safe</td>
                                                <td>{{ $find_sin->operationdescription }}</td>
                                            </tr>
                                            @php $no =1; @endphp
                                            @if($hitung > 1)
                                                @foreach ($find_sin_all as $a)
                                                    @php $no = $no+1; @endphp
                                                    <tr>
                                                        <td>{{ $no }}</td>
                                                        <td>
                                                            <span class="badge badge-light-success"><a href="caridata?search={{ $a->policeregno}}">{{ $a->policeregno }}</a></span>
                                                        </td>
                                                        <td>{{ $a->vinnumber }}</td>
                                                        <td>{{ $a->tipekendaraan }}</td>
                                                        <td>{{ $a->freepart }}</td>
                                                        <td>
                                                            @if($a->pkbdate == null)
                                                                -
                                                            @else
                                                                {{ date('d/m/Y', strtotime($a->pkbdate)); }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($a->pkbdate == null)
                                                                -
                                                            @else
                                                                {{ date('d/m/Y', strtotime('+180 day', strtotime($a->pkbdate))) }}
                                                            @endif
                                                        </td>
                                                        <td>Safe</td>
                                                        <td>{{ $a->operationdescription }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>History Service</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-0">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed gy-5 table-responsive" id="kt_table_customers_payment">
                                        <!--begin::Table head-->
                                        <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                            <!--begin::Table row-->
                                            <tr class="text-start text-uppercase gs-0">
                                                <th>Perawatan berkala</th>
                                                <th>Estimasi Service Date</th>
                                                <th>Actual Service Date</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                            <!--begin::Table row-->
                                            <tr>
                                                <td>1.000 KM</td>
                                                <td>
                                                    @if($find_sin_hst->estimasi1k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->estimasi1k)); }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($find_sin_hst->dt1k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->dt1k)); }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10.000 KM</td>
                                                <td>
                                                    @if($find_sin_hst->estimasi10k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->estimasi10k)); }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($find_sin_hst->dt10k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->dt10k)); }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20.000 KM</td>
                                                <td>
                                                    @if($find_sin_hst->estimasi20k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->estimasi20k)); }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($find_sin_hst->dt20k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->dt20k)); }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30.000 KM</td>
                                                <td>
                                                    @if($find_sin_hst->estimasi30k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->estimasi30k)); }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($find_sin_hst->dt30k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->dt30k)); }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>40.000 KM</td>
                                                <td>
                                                    @if($find_sin_hst->estimasi40k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->estimasi40k)); }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($find_sin_hst->dt40k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->dt40k)); }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>50.000 KM</td>
                                                <td>
                                                    @if($find_sin_hst->estimasi50k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->estimasi50k)); }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($find_sin_hst->dt50k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->dt50k)); }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>60.000 KM</td>
                                                <td>
                                                    @if($find_sin_hst->estimasi60k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->estimasi60k)); }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($find_sin_hst->dt60k == null)
                                                        -
                                                    @else
                                                        {{ date('d/m/Y', strtotime($find_sin_hst->dt60k)); }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Others</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-0">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
                                    <!--begin::Table head-->
                                    <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                        <!--begin::Table row-->
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <!--begin::Table row-->
                                    </tbody>
                                </table>
                                <!--begin::Table-->
                                <table width="100%" class="table" id="kt_table_customers_events">
                                    <tr class="fw-bold mt-5">
                                        <th>Potency Service</th>
                                        <th>Initial Status</th>
                                        <th>Status Today</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $find_sin->potencynextservice }}</td>
                                        <td>{{ $find_sin->initialstatus }}</td>
                                        <td>{{ $find_sin->statustoday }}</td>
                                    </tr>
                                    <tr class="fw-bold mt-5">
                                        <th>Last Reminder</th>
                                        <th>Date Last Reminder</th>
                                        <th>Seq. Service</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $find_sin->lastreminder }}</td>
                                        <td>
                                            @if($find_sin->datereminder == null)
                                                -
                                            @else
                                                {{ date('d/m/Y', strtotime($find_sin->datereminder)); }}
                                            @endif
                                        </td>
                                        <td>{{ $find_sin->sequencesbe }}</td>
                                    </tr>
                                    <tr class="fw-bold mt-5">
                                        <th colspan="2">Last Job</th>
                                        <th>Job Category</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">{{ $find_sin->operationdescription }}</td>
                                        <td>{{ $find_sin->lookupjob }}</td>
                                    </tr>
                                </table>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel">
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bold">Revenue/Unit</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="fw-bold fs-2">
                                    <span data-kt-countup="true" data-kt-countup-value="{{ $find_sin->totalrev }}">0</span>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Earnings-->
                        <div class="card mb-6 mb-xl-9">
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <!--begin::Left Section-->
                                <div class="d-flex flex-wrap flex-stack mb-5">
                                    <!--begin::Row-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Col-->
                                        <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                            <span class="fs-1 fw-bold text-gray-800 lh-1">
                                                <span data-kt-countup="true" data-kt-countup-value="{{ $find_sin->jasa }}">0</span>
                                            </span>
                                            <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Jasa</span>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                            <span class="fs-1 fw-bold text-gray-800 lh-1">
                                            <span class="" data-kt-countup="true" data-kt-countup-value="{{ $find_sin->part }}">0</span>
                                            <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Part</span>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                            <span class="fs-1 fw-bold text-gray-800 lh-1">
                                                <span data-kt-countup="true" data-kt-countup-value="{{ $find_sin->oil }}">0</span>
                                            </span>
                                            <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Oil</span>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                            <span class="fs-1 fw-bold text-gray-800 lh-1">
                                                <span data-kt-countup="true" data-kt-countup-value="{{ $find_sin->material }}">0</span>
                                            </span>
                                            <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Material</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Left Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Earnings-->
                        <!--begin::Statements-->
                        <div class="card mb-6 mb-xl-9">
                            <!--begin::Card body-->
                            <div class="card-body pb-5">
                                <!--begin::Tab Content-->
                                <div id="kt_customer_view_statement_tab_content" class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_view_statement_1" class="py-0 tab-pane fade show active" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_view_statement_table_1" class="table align-middle table-row-dashed fs-6 fw-semibold gy-4">
                                            <!--begin::Table head-->
                                            <thead class="border-bottom border-gray-200">
                                                <!--begin::Table row-->
                                                <tr class="text-start text-uppercase gs-0">
                                                    <th class="fw-bold w-125px">Last History Oil</th>
                                                    <th class="fw-bold w-100px">Suggest Upsell Oil</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>{{ $find_sin->historyoil }}</td>
                                                    <td>{{ $find_sin->suggestoil }}</td>
                                                </tr>
                                                <tr>
                                                    <th>SSC :</th>
                                                    <td>-</td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                        <br>
                                        <hr>
                                        <br>
                                        <!--begin::Table-->
                                        <table class="table align-middle table-bordered">
                                            <tr class="fw-bold mt-5">
                                                <th>CR7 Date</th>
                                                <th>CR7 Area</th>
                                                <th>CR7 SA</th>
                                            </tr>
                                            <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="fw-bold mt-5">
                                                <th>Pekerjaan</th>
                                                <th>Range Gaji</th>
                                                <th>Interest</th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>{{ $find_sin->interest }}</td>
                                            </tr>
                                            <tr class="fw-bold mt-5">
                                                <th>Customer Class</th>
                                                <th>History NPS</th>
                                            </tr>
                                            <tr>
                                                <td>{{ $find_sin->customerclass }}</td>
                                                <td>{{ $find_sin->historynps }}</td>
                                            </tr>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Statements-->
                    </div>
                    <!--end:::Tab pane-->
                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@endsection

@section('judul')
    CCPA - Dashboard
@endsection

@section('js')
@if ($modalempty == "showalertempty")
<script>
    alert('data yang anda cari tidak ditemukan')
</script>

@else
<script>

    $("#kt_datatable_vertical_scrolla").DataTable({
    "scrollY": "700px",
    "scrollX": "100%",
    "scrollCollapse": true,
    "paging": false,
});
</script>
@endif
@endsection
