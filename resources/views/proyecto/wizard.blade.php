<!--!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="A multi-step form is a long-form broken down into multiple pieces/steps to make an otherwise long form less intimidating for visitors to complete." name="description">
    <meta content="Sam Norton" name="author">
    <title>Bootstrap 5 Multi-Step Form</title-->
<!-- FAVICONS -->
<!--link href="favicons/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="favicons/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
    <link href="favicons/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="favicons/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
    <link href="favicons/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="favicons/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
    <link href="favicons/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <link href="favicons/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
    <link href="favicons/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
    <link href="favicons/android-icon-192x192.png" rel="icon" sizes="192x192" type="image/png">
    <link href="favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="favicons/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
    <link href="favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="/manifest.json" rel="manifest">
    <meta content="#ffffff" name="msapplication-TileColor">
    <meta content="favicons/ms-icon-144x144.png" name="msapplication-TileImage">
    <meta content="#ffffff" name="theme-color"-->
<!-- CSS -->
<!--link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"-->
<!-- FONT -->
<!--link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head-->

<!--body-->
<!-- CONTAINER -->
@extends('cliente.layouts.app')

@section('template_title')
{{ $proyecto->name ?? 'Show Proyecto' }}
@endsection

@section('content')

<!-- start page title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title">
                    <h4>Panel De Control</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Panel</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Usuario</a></li>
                        <li class="breadcrumb-item active">{{ __('Proyecto') }}</li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-end d-none d-sm-block">
                    <a href="{{ route('proyectos.create') }}" class="btn btn-success">Agregar Nuevo</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->



<div class="container-fluid">

    <div class="page-content-wrapper">

        <div class="row">



            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Inicio de creación de Proyecto
                        </h4>

                        <div id="progrss-wizard" class="twitter-bs-wizard">
                            <ul class="twitter-bs-wizard-nav nav-justified">
                                <li class="nav-item wizard-border">
                                    <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                        <span class="step-number">01. Detalles De Proyecto</span>
                                    </a>
                                </li>
                                <li class="nav-item wizard-border">
                                    <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                        <span class="step-number">02. Datos Suelo</span>
                                    </a>
                                </li>

                                <li class="nav-item wizard-border">
                                    <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                        <span class="step-number">03. Plantaciones</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#progress-confirm-detail" class="nav-link" data-toggle="tab">
                                        <span class="step-number">04. Confirmar</span>
                                    </a>
                                </li>
                            </ul>

                            <div id="bar" class="progress mt-4">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                            </div>
                            <div class="tab-content twitter-bs-wizard-tab-content">
                                <div class="tab-pane" id="progress-seller-details">
                                    <form id="form-proyecto">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="progreso-nombre-proyecto">Nombre Proyecto</label>
                                                    <input type="text" class="form-control" id="nomb_proy" name="nomb_proy" required>
                                                </div>
                                            </div>
                                            <!--div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="progress-basicpill-lastname-input">Last name</label>
                                        <input type="text" class="form-control" id="progress-basicpill-lastname-input">
                                    </div>
                                </div-->
                                        </div>

                                        <!--div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="progress-basicpill-phoneno-input">Phone</label>
                                        <input type="text" class="form-control" id="progress-basicpill-phoneno-input">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="progress-basicpill-email-input">Email</label>
                                        <input type="email" class="form-control" id="progress-basicpill-email-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="progress-basicpill-address-input">Address</label>
                                        <textarea id="progress-basicpill-address-input" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div-->
                                    </form>

                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="next"><a href="#" id="link-next1">datos suelo <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="progress-company-document">
                                    <div>
                                        <form id="form-suelo">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="progreso-anchura">Ancho del área de cultivo</label>
                                                        <input type="text" class="form-control" id="anch_suel" name="anch_suel">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="progreso-longitud">longitud del área</label>
                                                        <input type="text" class="form-control" id="larg_suel" name="larg_suel">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="progreso-hume">Humedad</label>
                                                        <input type="text" class="form-control" id="hume_suel" name="hume_suel">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="progreso-ph">ph de área de cultivo</label>
                                                        <input type="text" class="form-control" id="ph_suel" name="ph_suel">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i> Detalles De Proyecto</a></li>
                                            <li class="next"><a href="#">Detalles de cultivo <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="progress-plantas">
                                    <div>
                                        <form id="form-cultivo">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label>Tipo Planta</label>
                                                        <select class="form-select" name="tipo_id_plan" id="tipo_id_plan">
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label>Planta</label>
                                                        <select class="form-select" name="id_plan" id="id_plan">

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label>Guias</label>
                                                        <select class="form-select" name="id_guia" id="id_guia">

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3" id="div-link_requ">
                                                        <a href="#" id="link_requ"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3" id="div-link_data_plan">
                                                        <a href="#" id="link_data_plan"></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i> área de cultivo</a></li>
                                            <li class="next"><a href="#">confirmar datos<i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="progress-confirm-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                </div>
                                                <div>
                                                    <h5>Confirmar Detalles</h5>
                                                    <p class="text-muted">Todos los datos ingresados</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i> Detalles del cultivo</a></li>
                                        <li class="float-end"><a href="#" data-action="{{route('validar-wizard')}}" data-token="{{csrf_token() }}" id="lnkConfirmar">Confirmar <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')

<!-- twitter-bootstrap-wizard js -->
<script src="{{asset('backend/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

<script src="{{asset('backend/libs/twitter-bootstrap-wizard/prettify.js')}}"></script>

<!-- form wizard init -->
<script src="{{asset('backend/js/pages/form-wizard.init.js')}}"></script>
<!-- Static App Form Collection Script -->
<!--script src="https://static.app/js/static-forms.js" type="text/javascript"></script-->

<!-- Static App Form Collection Script -->
<!--script src="" type="text/javascript">
    const progress = (value) => {
        document.getElementsByClassName('progress-bar')[0].style.width = `${value}%`;
    }

    let step = document.getElementsByClassName('step');
    let prevBtn = document.getElementById('prev-btn');
    let nextBtn = document.getElementById('next-btn');
    let submitBtn = document.getElementById('submit-btn');
    let form = document.getElementsByTagName('form')[0];
    let preloader = document.getElementById('preloader-wrapper');
    let bodyElement = document.querySelector('body');
    let succcessDiv = document.getElementById('success');

    form.onsubmit = () => {
        return false
    }

    let current_step = 0;
    let stepCount = 6
    step[current_step].classList.add('d-block');
    if (current_step == 0) {
        prevBtn.classList.add('d-none');
        submitBtn.classList.add('d-none');
        nextBtn.classList.add('d-inline-block');
    }


    nextBtn.addEventListener('click', () => {
        current_step++;
        let previous_step = current_step - 1;
        if ((current_step > 0) && (current_step <= stepCount)) {
            prevBtn.classList.remove('d-none');
            prevBtn.classList.add('d-inline-block');
            step[current_step].classList.remove('d-none');
            step[current_step].classList.add('d-block');
            step[previous_step].classList.remove('d-block');
            step[previous_step].classList.add('d-none');
            if (current_step == stepCount) {
                submitBtn.classList.remove('d-none');
                submitBtn.classList.add('d-inline-block');
                nextBtn.classList.remove('d-inline-block');
                nextBtn.classList.add('d-none');
            }
        } else {
            if (current_step > stepCount) {
                form.onsubmit = () => {
                    return true
                }
            }
        }
        progress((100 / stepCount) * current_step);
    });


    prevBtn.addEventListener('click', () => {
        if (current_step > 0) {
            current_step--;
            let previous_step = current_step + 1;
            prevBtn.classList.add('d-none');
            prevBtn.classList.add('d-inline-block');
            step[current_step].classList.remove('d-none');
            step[current_step].classList.add('d-block')
            step[previous_step].classList.remove('d-block');
            step[previous_step].classList.add('d-none');
            if (current_step < stepCount) {
                submitBtn.classList.remove('d-inline-block');
                submitBtn.classList.add('d-none');
                nextBtn.classList.remove('d-none');
                nextBtn.classList.add('d-inline-block');
                prevBtn.classList.remove('d-none');
                prevBtn.classList.add('d-inline-block');
            }
        }

        if (current_step == 0) {
            prevBtn.classList.remove('d-inline-block');
            prevBtn.classList.add('d-none');
        }
        progress((100 / stepCount) * current_step);
    });


    submitBtn.addEventListener('click', () => {
        preloader.classList.add('d-block');

        const timer = ms => new Promise(res => setTimeout(res, ms));

        timer(3000)
            .then(() => {
                bodyElement.classList.add('loaded');
            }).then(() => {
                step[stepCount].classList.remove('d-block');
                step[stepCount].classList.add('d-none');
                prevBtn.classList.remove('d-inline-block');
                prevBtn.classList.add('d-none');
                submitBtn.classList.remove('d-inline-block');
                submitBtn.classList.add('d-none');
                succcessDiv.classList.remove('d-none');
                succcessDiv.classList.add('d-block');
            })

    });
</script-->
<script>
    /*$(document).ready(function() {
        $("#progrss-wizard").bootstrapWizard({*/
    /*onNext: function(tab, navigation, index) {
                if (index == 2) {
                    // Make sure we entered the name
                    /*if(!$('#name').val()) {
					alert('You must enter your name');
					$('#name').focus();
					return false;
                }console.log("holis");
                }
                // Set the name for the next tab
                $('#tab3').html('Hello, ' + $('#name').val());
            },*/
    /*        onTabShow: function(tab, navigation, index) {
                console.log("holis2");
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#rootwizard .progress-bar').css({
                    width: $percent + '%'
                });
            }
        });


        $("#link-next1").click(function(e) {
            if ($("#nomb_proy").val() == "") {

            }
        });
        //e.preventDefault();
        let proyecto = $("#form-proyecto").serialize();
        console.log(proyecto);




    })*/
</script>
@endsection

<!--/body>


</html-->