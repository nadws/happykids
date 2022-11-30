<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800;900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #787878;
        }

        h1 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        h2 {
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        #multi-step-form-container {
            margin-top: 2rem;
        }

        .text-center {
            text-align: center;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .pl-0 {
            padding-left: 0;
        }

        .button {
            padding: 0.7rem 1.5rem;
            border: 1px solid #4361ee;
            background-color: #4361ee;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn {
            border: 1px solid #0e9594;
            background-color: #0e9594;
        }

        .mt-3 {
            margin-top: 2rem;
        }

        .d-none {
            display: none;
        }

        .form-step {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem;
        }

        .font-normal {
            font-weight: normal;
        }

        ul.form-stepper {
            counter-reset: section;
            margin-bottom: 3rem;
        }

        ul.form-stepper .form-stepper-circle {
            position: relative;
        }

        ul.form-stepper .form-stepper-circle span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
        }

        .form-stepper-horizontal {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        ul.form-stepper>li:not(:last-of-type) {
            margin-bottom: 0.625rem;
            -webkit-transition: margin-bottom 0.4s;
            -o-transition: margin-bottom 0.4s;
            transition: margin-bottom 0.4s;
        }

        .form-stepper-horizontal>li:not(:last-of-type) {
            margin-bottom: 0 !important;
        }

        .form-stepper-horizontal li {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: start;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .form-stepper-horizontal li:not(:last-child):after {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 1px;
            content: "";
            top: 32%;
        }

        .form-stepper-horizontal li:after {
            background-color: #dee2e6;
        }

        .form-stepper-horizontal li.form-stepper-completed:after {
            background-color: #4da3ff;
        }

        .form-stepper-horizontal li:last-child {
            flex: unset;
        }

        ul.form-stepper li a .form-stepper-circle {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 0;
            line-height: 1.7rem;
            text-align: center;
            background: rgba(0, 0, 0, 0.38);
            border-radius: 50%;
        }

        .form-stepper .form-stepper-active .form-stepper-circle {
            background-color: #4361ee !important;
            color: #fff;
        }

        .form-stepper .form-stepper-active .label {
            color: #4361ee !important;
        }

        .form-stepper .form-stepper-active .form-stepper-circle:hover {
            background-color: #4361ee !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-unfinished .form-stepper-circle {
            background-color: #f8f7ff;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle {
            background-color: #0e9594 !important;
            color: #fff;
        }

        .form-stepper .form-stepper-completed .label {
            color: #0e9594 !important;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle:hover {
            background-color: #0e9594 !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-active span.text-muted {
            color: #fff !important;
        }

        .form-stepper .form-stepper-completed span.text-muted {
            color: #fff !important;
        }

        .form-stepper .label {
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        .form-stepper a {
            cursor: default;
        }

        .conten {
            padding: 60px;
        }
    </style>
</head>

<body>
    <div class="conten">
        <center>
            <img src="{{ asset('assets') }}/img_awal/logo.png" alt="" width="80px">
        </center>
        <div id="multi-step-form-container">
            <!-- Form Steps / Progress Bar -->
            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                <!-- Step 1 -->
                <li class="form-stepper-active form-stepper-unfinished1 text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle">
                            <span>1</span>
                        </span>
                        <div class="label">Psikomotorik</div>
                    </a>
                </li>
                <!-- Step 2 -->
                <li class="form-stepper-unfinished form-stepper-unfinished2  text-center form-stepper-list"
                    step="2">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>2</span>
                        </span>
                        <div class="label text-muted">KPSP Pada Anak</div>
                    </a>
                </li>
                <!-- Step 3 -->
                <li class="form-stepper-unfinished form-stepper-unfinished3 text-center form-stepper-list"
                    step="3">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>3</span>
                        </span>
                        <div class="label text-muted">PEDS</div>
                    </a>
                </li>
                <li class="form-stepper-unfinished text-center form-stepper-list" step="4">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>4</span>
                        </span>
                        <div class="label text-muted">M-Chat-R</div>
                    </a>
                </li>
            </ul>

            <!-- Step 1 Content -->
            <section id="step-1" class="form-step ">
                <h2 class="font-normal">Riwayat perkembangan psikomotorik</h2>
                <!-- Step 1 input fields -->
                <form id="save_per1">
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    @foreach ($per as $p)
                                        <tr>
                                            <td width="40%">{{ $p->pertanyaan }}</td>
                                            <td width="4%">:</td>
                                            <td width="20%">
                                                <input type="text" name="jawaban[]" class="form-control" required>
                                                <input type="hidden" name="id_pertanyaan[]"
                                                    value="{{ $p->id_pertanyaan }}">
                                            </td>
                                            <td>&nbsp;Bulan</td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">

                                    @foreach ($per2 as $p)
                                        <tr>
                                            <td width="40%">{{ $p->pertanyaan }}</td>
                                            <td width="4%">:</td>
                                            <td width="20%">
                                                <input type="text" name="jawaban[]" class="form-control" required>
                                                <input type="hidden" name="id_pertanyaan[]"
                                                    value="{{ $p->id_pertanyaan }}">
                                            </td>
                                            <td>&nbsp;Bulan</td>

                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                            <div class="col-lg-4">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                                    style="border-radius: 14px;">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('assets') }}/carosel/gambar1.jpg"
                                                style="border-radius: 14px;" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets') }}/carosel/gambar2.jpg"
                                                style="border-radius: 14px;" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets') }}/carosel/gambar3.jpg"
                                                style="border-radius: 14px;" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="mt-3">
                        <button class="button btn-navigate-form-step" type="submit" step_number="2">Save</button>
                    </div>
                </form>
            </section>
            <!-- Step 2 Content, default hidden on page load. -->
            <section id="step-2" class="form-step d-none">
                <h2 class="font-normal">KPSP Pada Anak</h2>
                <!-- Step 2 input fields -->
                <div class="mt-3">
                    <table class="table table-bordered" style="color: #787878">
                        <thead>
                            <tr>
                                <th colspan="2"></th>
                                <th></th>
                                <th>Ya</th>
                                <th>Tidak</th>
                            </tr>
                            <tr>
                                <th colspan="2">Anak dipangku ibunya/duduk sendiri di tepi meja diperiksa</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Beri kubus didepannya. Dapatkah anak meletakkan 8 buah kubus satu persatu di atas
                                    yang lain tanpa menjatuhkan kubus tersebut ?
                                </td>
                                <td style="white-space: nowrap;vertical-align: middle;">Gerak Halus</td>
                                <td style="vertical-align: middle; text-align: center"><input type="radio"
                                        name="jawaban1" id=""></td>
                                <td style="vertical-align: middle; text-align: center"><input type="radio"
                                        name="jawaban1" id=""></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Beri kubus didepannya. Dapatkah anak meletakkan 8 buah kubus satu persatu di atas
                                    yang lain tanpa menjatuhkan kubus tersebut ?
                                </td>
                                <td style="white-space: nowrap;vertical-align: middle;">Gerak Halus</td>
                                <td style="vertical-align: middle; text-align: center"><input type="radio"
                                        name="jawaban2" id=""></td>
                                <td style="vertical-align: middle; text-align: center"><input type="radio"
                                        name="jawaban2" id=""></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Beri kubus didepannya. Dapatkah anak meletakkan 8 buah kubus satu persatu di atas
                                    yang lain tanpa menjatuhkan kubus tersebut ?
                                </td>
                                <td style="white-space: nowrap;vertical-align: middle;">Gerak Halus</td>
                                <td style="vertical-align: middle; text-align: center"><input type="radio"
                                        name="jawaban3" id=""></td>
                                <td style="vertical-align: middle; text-align: center"><input type="radio"
                                        name="jawaban3" id=""></td>
                            </tr>
                        </tbody>



                    </table>
                </div>
                <div class="mt-3">
                    <button class="button btn-navigate-form-step back1" type="button" step_number="1">Prev</button>
                    <button class="button btn-navigate-form-step next3" type="button" step_number="3">Next</button>
                </div>
            </section>
            <section id="step-3" class="form-step d-none">
                <h2 class="font-normal">Social Profiles 3</h2>
                <!-- Step 2 input fields -->
                <div class="mt-3">
                    Step 3 input fields goes here..
                </div>
                <div class="mt-3">
                    <button class="button btn-navigate-form-step back1" type="button" step_number="2">Prev</button>
                    <button class="button btn-navigate-form-step" type="button" step_number="4">Next</button>
                </div>
            </section>
            <section id="step-4" class="form-step d-none">
                <h2 class="font-normal">Social Profiles</h2>
                <!-- Step 2 input fields -->
                <div class="mt-3">
                    Step 2 input fields goes here..
                </div>
                <div class="mt-3">
                    <button class="button btn-navigate-form-step" type="button" step_number="3">Prev</button>
                    <button class="button btn-navigate-form-step" type="button" step_number="5">Next</button>
                </div>
            </section>
            <!-- Step 3 Content, default hidden on page load. -->

        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $(document).on('submit', '#save_per1', function(event) {
            event.preventDefault();
            var pesanan_new = $("#save_per1").serialize()
            Swal.fire({
                title: 'Apakah kamu yakin ?',
                text: "Pastikan data yg disimpan sudah benar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya, saya yakin!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('tbh_pertanyaan1') }}?" + pesanan_new,
                        method: 'GET',
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                icon: 'success',
                                title: 'Data berhasil disimpan'
                            });
                            $("#step-1").addClass("d-none");
                            $(".form-stepper-active").addClass(
                                "form-stepper-completed");

                            $("#step-2").removeClass("d-none");
                            $(".form-stepper-unfinished2").addClass(
                                "form-stepper-active");
                        }
                    });
                } else {

                }
            })


        });
        $(document).on('click', '.back1', function(event) {
            $.ajax({
                type: "GET",
                url: "{{ route('dlt_pertanyaan1') }}",
                success: function(response) {
                    $("#step-2").addClass("d-none");
                    $(".form-stepper-unfinished2").removeClass("form-stepper-active");

                    $("#step-1").removeClass("d-none");
                    $(".form-stepper-unfinished1").addClass("form-stepper-active");
                    $(".form-stepper-unfinished1").removeClass("form-stepper-completed");
                }
            });

        });
        $(document).on('click', '.next3', function(event) {
            $("#step-2").addClass("d-none");
            $(".form-stepper-active").addClass(
                "form-stepper-completed");

            $("#step-3").removeClass("d-none");
            $(".form-stepper-unfinished3").addClass(
                "form-stepper-active");

        });
    });
</script>

{{-- <script>
    const navigateToFormStep = (stepNumber) => {
        /**
         * Hide all form steps.
         */
        document.querySelectorAll(".form-step").forEach((formStepElement) => {
            formStepElement.classList.add("d-none");
        });
        /**
         * Mark all form steps as unfinished.
         */
        document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
            formStepHeader.classList.add("form-stepper-unfinished");
            formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
        });
        /**
         * Show the current form step (as passed to the function).
         */
        document.querySelector("#step-" + stepNumber).classList.remove("d-none");
        /**
         * Select the form step circle (progress bar).
         */
        const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
        /**
         * Mark the current form step as active.
         */
        formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
        formStepCircle.classList.add("form-stepper-active");
        /**
         * Loop through each form step circles.
         * This loop will continue up to the current step number.
         * Example: If the current step is 3,
         * then the loop will perform operations for step 1 and 2.
         */
        for (let index = 0; index < stepNumber; index++) {
            /**
             * Select the form step circle (progress bar).
             */
            const formStepCircle = document.querySelector('li[step="' + index + '"]');
            /**
             * Check if the element exist. If yes, then proceed.
             */
            if (formStepCircle) {
                /**
                 * Mark the form step as completed.
                 */
                formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
                formStepCircle.classList.add("form-stepper-completed");
            }
        }
    };
    /**
     * Select all form navigation buttons, and loop through them.
     */
    document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
        /**
         * Add a click event listener to the button.
         */
        formNavigationBtn.addEventListener("click", () => {
            /**
             * Get the value of the step.
             */
            const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
            /**
             * Call the function to navigate to the target form step.
             */
            navigateToFormStep(stepNumber);
        });
    });
</script> --}}

</html>
