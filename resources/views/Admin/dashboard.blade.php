@extends('Admin.layouts.master')
@section('content')
        <!-- BEGIN: Subheader -->
        <div class="sub-header">
            <div class="m-container">
                <div>
                    <h3 class="m-subheader__title text-center">Dashboard</h3>
                </div>
            </div>
        </div>

        <!-- END: Subheader -->

        <!-- end::Header -->

        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
            <div class="m-grid__item m-grid__item--fluid m-wrapper">

                <div class="m-content">

                    <!--Begin::Section-->
                    <div class="m-portlet">
                        <div class="m-portlet__body main-content">
                            <div class="row">
                                <div class="col-xl-3">

                                    <!--begin:: Widgets/Daily Sales-->
                                    <div class="widget">
                                        <div class="d-flex align-items-center">
                                            <div class="widget-icon text-center primary-gradient"><img src="{{ url('admin_assets/assets/app/media/img/icons/cart-checked.png') }}" alt=""></div>
                                            <div>
                                                <div class="d-flex justify-content-center">
                                                    <span class="hero-fig1 mr-2">73 </span>
                                                    <h3 class="widget-subtitle"> SALES / $7.567</h3>
                                                </div>
                                                <div class="widget-time">December / 15 / 2018</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end:: Widgets/Daily Sales-->
                                </div>
                                <div class="col-xl-3">

                                    <!--begin:: Widgets/Profit Share-->
                                    <div class="widget primary-gradient text-center">
                                        <div>
                                            <img src="{{ url('admin_assets/assets/app/media/img/icons/user-plus.png') }}" alt="">
                                        </div>
                                        <h3 class="widget-title2">
                                            36 New Customers
                                        </h3>
                                        <p class="lil-title">from 9 countries</p>
                                    </div>

                                    <!--end:: Widgets/Profit Share-->
                                </div>
                                <div class="col-xl-3">

                                    <!--begin:: Widgets/Support Stats-->
                                    <div class="widget">

                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <div id="book-stock"></div>
                                            </div>
                                            <div>
                                                <div class="d-flex justify-content-center">
                                                    <span class="hero-fig1 mr-2">543 </span>
                                                    <h3 class="widget-subtitle"> AVAILABLE</h3>
                                                </div>
                                                <div class="widget-subtitle">BOOK STOCK REPORT</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end:: Widgets/Support Stats-->
                                <div class="col-xl-3">
                                    <div class="widget">
                                        <div class="d-flex">
                                            <div>
                                                <div>
                                                    <span class="hero-fig1 mr-2">985</span>
                                                </div>
                                                <div class="widget-subtitle">LAST WEEK ( SHORT VISITS )</div>
                                            </div>
                                            <div class="col">
                                                <div class="week-chart">
                                                   <div id="weekly-visiters"></div>
                                                   <!--  <img src="{{ url('admin_assets/assets/app/media/img/icons/week-chart-bar.png') }}" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3">
                                    <!--begin:: Widgets/Daily Sales-->
                                    <div class="widget text-center never-purchased">
                                        <h2 class="widget-title1">PRODUCTS NEVER PURCHASED</h2>
                                        <div class="widget-time">December / 15 / 2018</div>
                                        <img src="{{ url('admin_assets/assets/app/media/img/business-incubator.png') }}" alt="">

                                    </div>
                                </div>
                                <div class="col-xl-3">

                                    <!--begin:: Widgets/Profit Share-->
                                    <div class="widget">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="widget-time">December / 15 / 2018</div>
                                            <img src="{{ url('admin_assets/assets/app/media/img/icons/user-plus.png') }}" alt="">
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col">
                                                <span class="hero-fig1 mr-2">$29.360</span>
                                                <p class="lil-title">Gross sales</p>
                                            </div>
                                            <div class="col text-right">
                                                <div class="tax-box mb-3"><span class="widget-subtitle mr-2">TAX</span><span class="widget-badge">-24%</span></div>
                                                <span class="hero-fig1 mr-2">$22.313</span>
                                                <p class="lil-title">Net sales</p>
                                            </div>
                                        </div>
                                        <div class="week-ends text-center">
                                            <div id="monthly-chart"></div>
                                        </div>
                                    </div>

                                    <!--end:: Widgets/Profit Share-->
                                </div>
                                <div class="col-xl-3">
                                    <div class="widget">
                                        <h2 class="widget-title1 mb-1">MONTHLY GROSS SALES</h2>
                                        <p>FOR THE LAST 3 MONTHS</p>
                                        <div class="m-section__content">
                                            <p class="lil-title mb-1">December <span class="value float-right">$31.555</span></p>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar m--bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <div class="m--space-10"></div>

                                            <p class="lil-title mb-1">November <span class="value float-right">$29.360</span></p>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar m--bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <div class="m--space-10"></div>

                                            <p class="lil-title mb-1">October <span class="value float-right">$33.450</span></p>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar m--bg-accent" role="progressbar" style="width: 75%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="widget">
                                        <div class="text-center mb-5">
                                            <div class="widget-time">December 2018</div>
                                        </div>
                                        <div class="row my-4">
                                            <div class="col">
                                                <span class="hero-fig1 mr-2">1529</span>
                                                <p class="lil-title">Unique Visitors</p>
                                            </div>
                                            <div class="col text-right">

                                                <span class="hero-fig1 mr-2">763</span>
                                                <p class="lil-title">Create Account</p>
                                            </div>
                                        </div>
                                        <div class="week-ends text-center">
                                            <div id="monthly-chart1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Begin::Section-->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="widget">
                                        <div class="widget-header">
                                            <div class="widget-title">Sales by Category</div>
                                        </div>
											<div class="sales-by-category">
												<div id="sales-by-category"></div>
											</div>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="widget">
                                        <div class="widget-header">
                                            <div class="widget-title">Sales by Products</div>
                                        </div>
                                        <div class="week-ends text-center">
                                            <div id="sales-by-products"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::Section-->
                            
                            <!--Begin::Section-->
                            <div class="row">
                                
                                <div class="col-xl-4">
                                    <div class="widget">
                                        <div class="widget-header">
                                            <div class="widget-title">Registered Customers</div>
                                        </div>
                                            <div class="registered-customers">
                                                <div id="registered-customers"></div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="widget">
                                        <div class="widget-header">
                                            <div class="widget-title">Customer Reports</div>
                                        </div>
                                        <div class="week-ends text-center">
                                            <div id="customer-reports"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::Section-->

                            <!--Begin::Section-->
                            <div class="row row-col-group">
                                <div class="col-xl-6">
                                    <div class="d-flex flex-column">
                                        <div class="widget">
                                        <div class="widget-header">
                                            <div class="widget-title">Registered Customers</div>
                                        </div>
                                           <div class="total-sales">
                                               <div id="total-sales"></div>
                                           </div>
                                    </div>
                                    <div class="widget">
                                        <div class="widget-header">
                                            <div class="widget-title">Sales by Products</div>
                                        </div>
                                        <div class="customer-gender">
                                            <div id="customer-gender"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="f-flex flex-column">
                                    <div class="widget">
                                        <div class="widget-header">
                                            <div class="widget-title">Registered Customers</div>
                                        </div>
                                            <div class="payment-methods d-flex justify-content-between">
                                                <div id="bank-transfer"></div>
                                                <div id="paypal-transfer"></div>
                                                <div id="credit-card-transfer"></div>
                                            </div>
                                    </div>
                                    <div class="widget">
                                        <div class="widget-header">
                                            <div class="widget-title">Registered Customers</div>
                                        </div>
                                            <div class="payment-methods sales-by-shipment d-flex justify-content-between">
                                                <div id="type-ups"></div>
                                                <div id="type-fedex"></div>
                                                <div id="type-dhl"></div>
                                            </div>
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--End::Section-->
                        <div class="row">
                            <div class="col-12">
                           <div class="widget">
                                        <div class="widget-header">
                                            <div class="widget-title">Registered Customers</div>
                                        </div>
                                            <div class="m-widget14__chart" style="height:120px;">
                                                <canvas id="m_chart_daily_sales"></canvas>
                                            </div>
                                    </div>

                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- end:: Page -->
@endsection
@section('after_script')
<script src="{{ url('admin_assets/assets/app/js/dashboard.js') }}" type="text/javascript"></script>
@endsection