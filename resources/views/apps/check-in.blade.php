@extends('layouts.master')
@section('title')
    Check In
@endsection
@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('page-title')
    Check In
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
                                <h4 class="card-title mb-0">Check-In Participant</h4>
                            </div>
                            <div class="card-body">
                                <form id="search-participant">
                                    <div class="mb-4">
                                        {{-- <label for="formrow-firstname-input" class="form-label">Booking Number</label> --}}
                                        <select class="form-select">
                                            <option>Select Category</option>
                                            <option>Symposium</option>
                                            <option>Workshop</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        {{-- <label for="formrow-firstname-input" class="form-label">NIK</label> --}}
                                        <select class="form-select">
                                            <option>Select Event</option>
                                            <option>Symposium 1 Topic 1</option>
                                            <option>Symposium 1 Topic 2</option>
                                            <option>Symposium 2 Topic 1</option>
                                            <option>Symposium 3 Topic 1</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        {{-- <label for="formrow-firstname-input" class="form-label">Email</label> --}}
                                        <select class="form-select">
                                            <option>Select Room</option>
                                            <option>Room 1 Nusa 1</option>
                                            <option>Room 1 Nusa 2</option>
                                            <option>Room 2 Nusa 1</option>
                                            <option>Room 3 Nusa 1</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        {{-- <label for="formrow-firstname-input" class="form-label">Phone Number</label> --}}
                                        <input type="text" class="form-control" placeholder="NFC/QR-ID"
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

                    <div class="col-xl-8" id="participant-detail">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Participant</h4>
                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-end nav-pills card-header-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#profile3" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#ticket3" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Ticket</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#history3" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">History</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="tab-content text-muted">
                                    <div class="tab-pane active" id="profile3" role="tabpanel">
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
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="ticket3" role="tabpanel">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="popular-product-box rounded my-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12 mb-2">
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <p class="text-muted fw-semibold mb-0 text-truncate">
                                                                        Category
                                                                    </p>
                                                                    <h6 class="mb-1 text-truncate"><a href=""
                                                                            class="font-size-15 text-body">Symposium</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <p class="text-muted fw-semibold mb-0 text-truncate">
                                                                        Event
                                                                    </p>
                                                                    <h6 class="mb-1 text-truncate"><a href=""
                                                                            class="font-size-15 text-body">Symposium Topic
                                                                            1</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="popular-product-box rounded my-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12 mb-2">
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <p class="text-muted fw-semibold mb-0 text-truncate">
                                                                        Category
                                                                    </p>
                                                                    <h6 class="mb-1 text-truncate"><a href=""
                                                                            class="font-size-15 text-body">Symposium</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <p class="text-muted fw-semibold mb-0 text-truncate">
                                                                        Event
                                                                    </p>
                                                                    <h6 class="mb-1 text-truncate"><a href=""
                                                                            class="font-size-15 text-body">Symposium Topic
                                                                            2</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="history3" role="tabpanel">
                                        <div class="row align-items-center">
                                            <div class="row align-items-center">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="popular-product-box rounded my-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-12 mb-2">
                                                                    <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                        <p
                                                                            class="text-muted fw-semibold mb-0 text-truncate">
                                                                            Category
                                                                        </p>
                                                                        <h6 class="mb-1 text-truncate"><a href=""
                                                                                class="font-size-15 text-body">Symposium</a>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mb-2">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                                <p
                                                                                    class="text-muted fw-semibold mb-0 text-truncate">
                                                                                    Room
                                                                                </p>
                                                                                <h6 class="mb-1 text-truncate"><a
                                                                                        href=""
                                                                                        class="font-size-15 text-body">Room
                                                                                        1</a>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                                <p
                                                                                    class="text-muted fw-semibold mb-0 text-truncate">
                                                                                    Date
                                                                                </p>
                                                                                <h6 class="mb-1 text-truncate"><a
                                                                                        href=""
                                                                                        class="font-size-15 text-body">12
                                                                                        June 2025</a>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                                <p
                                                                                    class="text-muted fw-semibold mb-0 text-truncate">
                                                                                    Check In
                                                                                </p>
                                                                                <h6 class="mb-1 text-truncate"><a
                                                                                        href=""
                                                                                        class="font-size-15 text-body">10.15</a>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                                <p
                                                                                    class="text-muted fw-semibold mb-0 text-truncate">
                                                                                    Check Out
                                                                                </p>
                                                                                <h6 class="mb-1 text-truncate"><a
                                                                                        href=""
                                                                                        class="font-size-15 text-body">11.00</a>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
