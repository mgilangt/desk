@extends('layouts.master')
@section('title')
    Registration
@endsection
@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('page-title')
    Registration
@endsection
@section('body')

    <body data-layout="horizontal" data-bs-theme="dark">
    @endsection
    @section('content')
        <div class="row">
            <div class="col-xxl-12">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Search Participant</h4>
                            </div>
                            <div class="card-body">
                                <form id="search-participant">
                                    <div class="mb-4">
                                        {{-- <label for="formrow-firstname-input" class="form-label">Booking Number</label> --}}
                                        <input type="text" class="form-control" placeholder="Booking Number"
                                            id="formrow-firstname-input">
                                    </div>

                                    <div class="mb-4">
                                        {{-- <label for="formrow-firstname-input" class="form-label">NIK</label> --}}
                                        <input type="text" class="form-control" placeholder="NIK"
                                            id="formrow-firstname-input">
                                    </div>

                                    <div class="mb-4">
                                        {{-- <label for="formrow-firstname-input" class="form-label">Email</label> --}}
                                        <input type="text" class="form-control" placeholder="Email"
                                            id="formrow-firstname-input">
                                    </div>

                                    <div class="mb-4">
                                        {{-- <label for="formrow-firstname-input" class="form-label">Phone Number</label> --}}
                                        <input type="text" class="form-control" placeholder="Phone Number"
                                            id="formrow-firstname-input">
                                    </div>

                                    <div class="d-grid pt-1">
                                        <button type="submit" class="btn btn-primary">Find</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>

                    <div class="col-xl-8 d-none" id="participant-detail">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start mb-2">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">Result</h5>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="popular-product-img p-2">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLU7h0cdnX8yFq-73gpabJjRLSJDVu7oQZ4w&s"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12">
                                        <div class="flex-grow-1 align-self-center">
                                            <p class="text-muted mb-2">Name</p>
                                            <h6 class="mb-0">dr. Andi Nurfalah Sp.OG</h6>
                                        </div>

                                        <div class="row g-0 mt-1 pt-1 align-items-end">
                                            <div class="col-md-5 col-sm-12">
                                                <div class="mt-1">
                                                    <p class="text-muted mb-1">NIK</p>
                                                    <h6 class="mb-0">3223031924151523</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="mt-1">
                                                    <p class="text-muted mb-1">Phone Number</p>
                                                    <h6 class="mb-0">08223012341</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="mt-1">
                                                    <p class="text-muted mb-1">Lanyard Color</p>
                                                    <div class="bg-danger p-2"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-0 mt-1 pt-1 align-items-end">
                                            <div class="col-md-3 col-sm-12">
                                                <div class="mt-1">
                                                    <p class="text-muted mb-1">Gender</p>
                                                    <h6 class="mb-0">Male</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="mt-1">
                                                    <p class="text-muted mb-1">BoD</p>
                                                    <h6 class="mb-0">10 Jan 2000</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="mt-1">
                                                    <p class="text-muted mb-1">Email</p>
                                                    <h6 class="mb-0">andi@mail.com</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 pt-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    {{-- <label for="formrow-email-input" class="form-label">Enter Email</label> --}}
                                                    <input type="text" class="form-control" placeholder="QR CODE Lanyard"
                                                        id="formrow-qr-input">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    {{-- <label for="formrow-password-input" class="form-label">Password</label> --}}
                                                    <input type="text" class="form-control" placeholder="NFC ID"
                                                        id="formrow-nfc-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 pt-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary disabled"
                                                            id="btn-regis">Register</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <div class="d-grid">
                                                        {{-- <button type="submit" class="btn btn-primary">Print Label & QR
                                                            Code</button> --}}
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect btn-label waves-light disabled"
                                                            id="btn-print"><i class="bx bx-printer label-icon"></i> Print
                                                            Label & QR
                                                            Code</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="mx-n4" data-simplebar style="max-height: 205px;">
                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-primary-subtle border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-1.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-body">Wood Chair dark Brown</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-body">$62300.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">562 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-success-subtle border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-8.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-body">Home & Office Chair Crime</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$190.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-body">$25698.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">856 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-danger-subtle border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-3.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-body">Office Chair Blue</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$420.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-body">$64351.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">524 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-success-subtle border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-4.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-body">Home & Office Chair Green</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-body">$96485.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">634 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-danger-subtle border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-5.png') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-body">Wood Chair dark Brown</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-body">$56230.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">964 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const form = document.getElementById("search-participant");
                const targetDiv = document.getElementById("participant-detail");
                const inputs = form.querySelectorAll("input");

                form.addEventListener("submit", function(e) {
                    e.preventDefault(); // Mencegah default submit

                    let isFormFilled = false;

                    // Loop untuk mengecek apakah ada input yang terisi
                    inputs.forEach((input) => {
                        if (input.value.trim() !== "") {
                            isFormFilled = true;
                        }
                    });

                    // Kondisi untuk memunculkan atau menyembunyikan div
                    if (isFormFilled) {
                        targetDiv.classList.remove("d-none");
                        targetDiv.classList.add("d-block");
                    } else {
                        targetDiv.classList.remove("d-block");
                        targetDiv.classList.add("d-none");
                        alert("Please fill in at least one field!");
                    }
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                const qrInput = document.getElementById("formrow-qr-input");
                const nfcInput = document.getElementById("formrow-nfc-input");
                const registerButton = document.getElementById("btn-regis");
                const printButton = document.getElementById("btn-print");

                // Event listener untuk input QR CODE atau NFC ID
                [qrInput, nfcInput].forEach((input) => {
                    input.addEventListener("input", function() {
                        if (qrInput.value.trim() !== "" || nfcInput.value.trim() !== "") {
                            registerButton.classList.remove("disabled");
                        } else {
                            registerButton.classList.add("disabled");
                        }
                    });
                });

                // Event listener untuk klik tombol register
                registerButton.addEventListener("click", function(e) {
                    e.preventDefault(); // Mencegah submit form default
                    if (!registerButton.classList.contains("disabled")) {
                        printButton.classList.remove("disabled");
                    }
                });
            });
        </script>
    @endsection
