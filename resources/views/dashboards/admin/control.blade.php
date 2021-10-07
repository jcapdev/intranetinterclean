<style>
    .img_ref {
        width: 100%;
        display: flex;
        align-content: center;
    }
    
    .card {
        background-color: rgba(20, 121, 236, 0.877);
    }
    
    .zoom {
        transition: transform .2s;
        /* Animacion */
    }
    
    .zoom:hover {
        transform: scale(1.1);
        /* (150% zoom)*/
    }
    
    .fondo-enlace {
        background-color: rgba(20, 121, 236, 0.877);
    }
    
    .fondo-enlace:hover {
        background-color: rgba(20, 121, 236, 0.877);
    }
    
    .boton1 {
        display: block;
        width: 100%;
        border: none;
        background-color: rgba(237, 244, 252, 0.966);
        color: rgb(80, 80, 80);
        padding: 0.3rem;
    }
    
    .boton1:hover {
        background-color: rgba(193, 208, 224, 0.966);
        color: black;
    }
    /* OMNILIFE */
    
    .boton2 {
        display: block;
        width: 100%;
        border: none;
        background-color: rgba(241, 196, 255, 0.966);
        color: rgb(80, 80, 80);
        padding: 0.3rem;
    }
    
    .boton2:hover {
        background-color: rgba(228, 138, 255, 0.966);
        color: black;
    }
    /* OMNILIFE */
    /* C&A */
    
    .boton3 {
        display: block;
        width: 100%;
        border: none;
        background-color: rgb(45, 80, 159);
        color: rgb(255, 255, 255);
        padding: 0.3rem;
    }
    
    .boton3:hover {
        background-color: rgb(53, 92, 182);
        color: rgb(255, 255, 255);
    }
    /* C&A */
    /* Lester */
    
    .boton4 {
        display: block;
        width: 100%;
        border: none;
        background-color: #0471dd;
        color: rgb(255, 255, 255);
        padding: 0.3rem;
    }
    
    .boton4:hover {
        background-color: #0367ca;
        color: rgb(255, 255, 255);
    }
    /* Lester */
    /* Lester */
    
    .boton5 {
        display: block;
        width: 100%;
        border: none;
        background-color: #ff6560;
        color: rgb(255, 255, 255);
        padding: 0.3rem;
    }
    
    .boton5 :hover {
        background-color: #ff6560;
        color: rgb(255, 255, 255);
    }
    
    .Titulos-C {
        background-color: #d92229;
        color: rgb(255, 255, 255);
        margin: 1rem;
        padding: 1rem;
    }
    
    .Titulos-C2 {
        background-color: rgba(45, 79, 159, 0.856);
        color: rgb(255, 255, 255);
        margin: 1rem;
        padding: 1rem;
    }
    
    .Titulos-C3 {
        background-color: rgb(224, 115, 46);
        color: rgb(255, 255, 255);
        margin: 1rem;
        padding: 1rem;
    }
    
    .Titulos-C4 {
        background-color: #67197f;
        color: rgb(255, 255, 255);
        margin: 1rem;
        padding: 1rem;
    }
    
    .Titulos-C5 {
        background-color: #0055a9;
        color: rgb(255, 255, 255);
        margin: 1rem;
        padding: 1rem;
    }
    
    .Titulos-C6 {
        background-color: #e83934;
        color: rgb(255, 255, 255);
        margin: 1rem;
        padding: 1rem;
    }
    /* Lester */
</style>

@extends('layouts.theme.tablero') @section('content')

<div class="text-center" style="background-color: #1a1d27;">
    <img class="img-fluid" style="max-width: 40%; height: 20%;" src="https://interclean.live/intranet/formularios-inter/imagen/banner1.png" alt="">
</div>

{{--
<div class="container-fluid "> --}}

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">LALA</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">C&A</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">NUPLEN</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="omnilife-tab" data-toggle="tab" href="#omnilife" role="tab" aria-controls="omnilife" aria-selected="false">OMNILIFE</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="lester-tab" data-toggle="tab" href="#lester" role="tab" aria-controls="lester" aria-selected="false">LESTER</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="talisis-tab" data-toggle="tab" href="#talisis" role="tab" aria-controls="talisis" aria-selected="false">TALISIS</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container-fluid" style="width: 100%; height:70%;">
                <div class="Titulos-C">
                    <h3>Lavadores</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgba(237, 244, 252, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.paredro.com/wp-content/uploads/2018/10/Leches-La-Laguna-el-significado-del-logo-de-LALA2.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:rgb(204, 34, 41); font-weight:600;">Zona Norte</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <a href="https://interclean.live/intranet/administrador/ControlDiario.php" class="boton1">Ver
                        mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(237, 244, 252, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.paredro.com/wp-content/uploads/2018/10/Leches-La-Laguna-el-significado-del-logo-de-LALA2.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:rgb(204, 34, 41); font-weight:600;">Zona Sur</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <a href="https://interclean.live/intranet/administrador/ControlDiario.php" class="boton1">Ver
                        mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(237, 244, 252, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.paredro.com/wp-content/uploads/2018/10/Leches-La-Laguna-el-significado-del-logo-de-LALA2.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:rgb(204, 34, 41); font-weight:600;">Zona Centro</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <a href="https://interclean.live/intranet/administrador/ControlDiario.php" class="boton1">Ver
                        mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgba(237, 244, 252, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.paredro.com/wp-content/uploads/2018/10/Leches-La-Laguna-el-significado-del-logo-de-LALA2.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:rgb(204, 34, 41); font-weight:600;">Zona Noreste</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <a href="https://interclean.live/intranet/administrador/ControlDiario.php" class="boton1">Ver
                        mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(237, 244, 252, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.paredro.com/wp-content/uploads/2018/10/Leches-La-Laguna-el-significado-del-logo-de-LALA2.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:rgb(204, 34, 41); font-weight:600;">Zona Occidente</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <a href="https://interclean.live/intranet/administrador/ControlDiario.php" class="boton1">Ver
                        mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(237, 244, 252, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.paredro.com/wp-content/uploads/2018/10/Leches-La-Laguna-el-significado-del-logo-de-LALA2.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:rgb(204, 34, 41); font-weight:600;">Zona valle de México</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <a href="https://interclean.live/intranet/administrador/ControlDiario.php" class="boton1">Ver
                        mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" Titulos-C">
                    <h3>Limpieza</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgba(237, 244, 252, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.paredro.com/wp-content/uploads/2018/10/Leches-La-Laguna-el-significado-del-logo-de-LALA2.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:rgb(204, 34, 41); font-weight:600;">Zona Sur</h5>
                                        <p class="card-text">Servicios de Limpieza</p>
                                        <div class="text-center ">
                                            <a href="https://interclean.live/intranet/administrador/ControlDiario.php" class="boton1">Ver
                        mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>






        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container-fluid" style="width: 100%; height:70%;">
                <div class="Titulos-C2">
                    <h3>Lavadores</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgb(45, 80, 159);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://cdn.freebiesupply.com/logos/large/2x/c-a-2-logo-png-transparent.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Norte
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton3">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgb(45, 80, 159);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://cdn.freebiesupply.com/logos/large/2x/c-a-2-logo-png-transparent.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Sur</h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton3">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div style="background-color: rgb(45, 80, 159);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://cdn.freebiesupply.com/logos/large/2x/c-a-2-logo-png-transparent.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Centro
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton3">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgb(45, 80, 159);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://cdn.freebiesupply.com/logos/large/2x/c-a-2-logo-png-transparent.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Noreste
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton3">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgb(45, 80, 159);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://cdn.freebiesupply.com/logos/large/2x/c-a-2-logo-png-transparent.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Occidente
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton3">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgb(45, 80, 159);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://cdn.freebiesupply.com/logos/large/2x/c-a-2-logo-png-transparent.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona valle de México
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton3">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="Titulos-C2">
                    <h3>Limpieza</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgb(45, 80, 159);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://cdn.freebiesupply.com/logos/large/2x/c-a-2-logo-png-transparent.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Sur</h5>
                                        <p class="card-text" style="color:white;">Servicios de Limpieza</p>

                                        <div class="text-center ">
                                            <button class="boton3">Ver mas</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="" style=" width: 100%; height:70%;">
                <div class="Titulos-C3">
                    <h3>Lavadores</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgba(255, 255, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://nuplen.facturacionb2b.com/images/nuplen-logo.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:rgb(204 34 41); font-weight:600;">Zona Norte
                                        </h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton1">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(255, 255, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://nuplen.facturacionb2b.com/images/nuplen-logo.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Zona Sur</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton1">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(255, 255, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://nuplen.facturacionb2b.com/images/nuplen-logo.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Zona Centro</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton1">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgba(255, 255, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://nuplen.facturacionb2b.com/images/nuplen-logo.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Zona Noreste</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton1">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(255, 255, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://nuplen.facturacionb2b.com/images/nuplen-logo.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Zona Occidente</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton1">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(255, 255, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://nuplen.facturacionb2b.com/images/nuplen-logo.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Zona valle de México</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton1">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Titulos-C3">
                    <h3>Limpieza</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgba(255, 255, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://nuplen.facturacionb2b.com/images/nuplen-logo.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Zona Sur</h5>
                                        <p class="card-text">Servicios de Limpieza</p>

                                        <div class="text-center ">
                                            <button class="boton1">Ver mas</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="omnilife" role="tabpanel" aria-labelledby="omnilife-tab">
            <div>
                <div class="Titulos-C4">
                    <h3>Limpieza</h3>
                </div>
                <div class="row">

                    <div class="col">
                        <div style="background-color: rgba(241, 196, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.telefonoysucursales.com/wp-content/uploads/2018/11/60CrNAqf_400x400.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight:600;">Zona Norte</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton2">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(241, 196, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.telefonoysucursales.com/wp-content/uploads/2018/11/60CrNAqf_400x400.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight:600;">Zona Sur</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton2">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(241, 196, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.telefonoysucursales.com/wp-content/uploads/2018/11/60CrNAqf_400x400.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight:600;">Zona Centro</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton2">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgba(241, 196, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.telefonoysucursales.com/wp-content/uploads/2018/11/60CrNAqf_400x400.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight:600;">Zona Noreste</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton2">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(241, 196, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.telefonoysucursales.com/wp-content/uploads/2018/11/60CrNAqf_400x400.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight:600;">Zona Occidente</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton2">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: rgba(241, 196, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.telefonoysucursales.com/wp-content/uploads/2018/11/60CrNAqf_400x400.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight:600;">Zona valle de México</h5>
                                        <p class="card-text">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton2">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" Titulos-C4">
                    <h3>Cajero</h3>
                </div>

                <div class="row">
                    <div class="col">
                        <div style="background-color: rgba(241, 196, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.telefonoysucursales.com/wp-content/uploads/2018/11/60CrNAqf_400x400.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight:600;">Zona Sur</h5>
                                        <p class="card-text">Servicios de Limpieza</p>

                                        <div class="text-center ">
                                            <button class="boton2">Ver mas</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
                <div class="  -fluid Titulos-C4">
                    <h3>Almacenista</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: rgba(241, 196, 255, 0.966);" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://www.telefonoysucursales.com/wp-content/uploads/2018/11/60CrNAqf_400x400.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight:600;">Zona Sur</h5>
                                        <p class="card-text">Servicios de Limpieza</p>

                                        <div class="text-center ">
                                            <button class="boton2">Ver mas</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="lester" role="tabpanel" aria-labelledby="lester-tab">
            <div class="container-fluid" style="width: 100%; height:70%;">
                <div class="container-fluid Titulos-C5">
                    <h3>Lavadores</h3>
                </div>
                <div class="row">

                    <div class="col">
                        <div style="background-color: #0471dd;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="http://www.distribuidorabast.com/images/colchones-en-monterrey-lester.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Norte
                                        </h5>
                                        <p class="card-text" style="color: white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton4">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: #0471dd;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="http://www.distribuidorabast.com/images/colchones-en-monterrey-lester.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Sur</h5>
                                        <p class="card-text" style="color: white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton4">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: #0471dd;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="http://www.distribuidorabast.com/images/colchones-en-monterrey-lester.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Centro
                                        </h5>
                                        <p class="card-text" style="color: white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton4">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: #0471dd;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="http://www.distribuidorabast.com/images/colchones-en-monterrey-lester.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Noreste
                                        </h5>
                                        <p class="card-text" style="color: white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton4">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: #0471dd;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="http://www.distribuidorabast.com/images/colchones-en-monterrey-lester.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Occidente
                                        </h5>
                                        <p class="card-text" style="color: white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton4">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: #0471dd;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="http://www.distribuidorabast.com/images/colchones-en-monterrey-lester.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona valle de México
                                        </h5>
                                        <p class="card-text" style="color: white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton4">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid Titulos-C5">
                    <h3>Limpieza</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: #0471dd;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="http://www.distribuidorabast.com/images/colchones-en-monterrey-lester.png" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Sur</h5>
                                        <p class="card-text" style="color: white;">Servicios de Limpieza</p>

                                        <div class="text-center ">
                                            <button class="boton4">Ver mas</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="talisis" role="tabpanel" aria-labelledby="talisis-tab">
            <div class="container-fluid" style="width: 100%; height:70%;">
                <div class=" Titulos-C6">
                    <h3>Lavadores</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: #ff6560;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://interclean.live/intranet/formularios-inter/imagen/talisis.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Norte
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton5">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: #ff6560;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://interclean.live/intranet/formularios-inter/imagen/talisis.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Sur</h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton5">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: #ff6560;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://interclean.live/intranet/formularios-inter/imagen/talisis.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Centro
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton5">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: #ff6560;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://interclean.live/intranet/formularios-inter/imagen/talisis.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Noreste
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton5">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: #ff6560;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://interclean.live/intranet/formularios-inter/imagen/talisis.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Occidente
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton5">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div style="background-color: #ff6560;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://interclean.live/intranet/formularios-inter/imagen/talisis.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona valle de México
                                        </h5>
                                        <p class="card-text" style="color:white;">Servicios de Lavado</p>
                                        <div class="text-center ">
                                            <button class="boton5">Ver mas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Titulos-C6">
                    <h3>Limpieza</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div style="background-color: #ff6560;" class="card mb-3 zoom" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img_ref" src="https://interclean.live/intranet/formularios-inter/imagen/talisis.jpg" alt="img_ref">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:white; font-weight:600;">Zona Sur</h5>
                                        <p class="card-text" style="color:white;">Servicios de Limpieza</p>

                                        <div class="text-center ">
                                            <button class="boton5">Ver mas</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
    @endsection