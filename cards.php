
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reguistro</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HUJMB <sup>1</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administración
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Herramientas</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin</h6>
                        <a class="collapse-item" href="/buttons.php">Internos</a>
                        <a class="collapse-item active" href="/cards.php">Reguistro</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
           

            <!-- Nav Item - Charts -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <div>
                        <h3><b>Registro de Internado</b></h3>
                    </div>
                    <!-- Topbar Navbar -->
                </nav>
                <!-- End of Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <h4 align="center">Recuerde verificar cada uno de los datos suministrados en este formulario,
                        la información será verificada </h4>
                    <hr>
                    <form class="row g-3 needs-validation" action="" method="post">

                        <div class="col-12">
                            <h2 align="center">Datos Personales</h>
                        </div>
                        <div class="col-6"><label for="id" class="form-label">Id Consecutivo:</label><input type="text"
                                class="form-control" id="id" name="id" readonly></div>
                        <div class="col-6"><label for="reg_form" class="form-label">Registro de
                                Formulario:</label><input type="text" class="form-control" id="reg_form" name="reg_form"
                                value="2022-04-21, 5:03 pm" readonly></div>

                        <div class="col-3"><label for="pApellido" class="form-label">Primer Apellido:</label><input
                                type="text" class="form-control" id="pApellido" name="pApellido"
                                onkeyup="javascript:this.value=this.value.toUpperCase();" required></div>
                        <div class="col-3"><label for="sApellido" class="form-label">Segundo Apellido:</label><input
                                type="text" class="form-control" id="sApellido" name="sApellido"
                                onkeyup="javascript:this.value=this.value.toUpperCase();" required></div>
                        <div class="col-3"><label for="pNombre" class="form-label">Primer Nombre:</label><input
                                type="text" class="form-control" id="pNombre" name="pNombre"
                                onkeyup="javascript:this.value=this.value.toUpperCase();" required></div>
                        <div class="col-3"><label for="sNombre" class="form-label">Segundo Nombre:</label><input
                                type="text" class="form-control" id="sNombre" name="sNombre"
                                onkeyup="javascript:this.value=this.value.toUpperCase();" required></div>

                        <div class="col-3"><label for="tipoDoc" class="form-label">Tipo de Documento:</label><select
                                name="tipoDoc" class="form-control" required>
                                <option value="">Selecciona uno...</option>
                                <option value="CC">C.C.</option>
                                <option value="CE">C.E.</option>
                                <option value="PE">P.E.</option>
                            </select>
                            <div class="invalid-feedback">Seleccione el tipo de Documento.</div>
                        </div>

                        <div class="col-3"><label for="nDocumento" class="form-label">No. de Documento</label>
                            <input type="text" autocomplete="off" class="form-control" id="nDocumento" name="nDocumento"
                                maxlength="15"
                                onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                required>
                        </div>

                        <div class="col-3"><label for="expEn" class="form-label">Expedida en:</label><input type="text"
                                class="form-control" id="expEn" name="expEn"
                                onkeyup="javascript:this.value=this.value.toUpperCase();" required></div>

                        <div class="col-3"><label for="fecExp" class="control-label">Fecha de Expedición:</label>
                            <input type="text" autocomplete="off" name="fecExp" id="fecExp"
                                class="input-group date form-control" date="" data-date-format="yyyy/mm/dd"
                                placeholder="AAAA/MM/DD" required>
                        </div>

                        <div class="col-3"><label for="sexo" class="form-label">Sexo:</label><select id="sexo"
                                name="sexo" class="form-control" required>
                                <option value="">Selecciona uno...</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                            <div class="invalid-feedback">Seleccione el sexo.</div>
                        </div>

                        <div class="col-3"><label for="estCivil" class="form-label">Estado Civil:</label><select
                                id="estCivil" name="estCivil" class="form-control" required>
                                <option value="">Selecciona uno...</option>
                                <option value="UNION LIBRE">Unión libre</option>
                                <option value="CASADO(A)">Casado(A)</option>
                                <option value="DIVORCIADO(A)">Divorciado(a)</option>
                                <option value="SEPARADO(A)">Separado(a)</option>
                                <option value="VIUDO(A)">Viudo(a)</option>
                                <option value="SOLTERO(A)">Soltero(a)</option>
                            </select>
                            <div class="invalid-feedback">Seleccione el estado civil.</div>
                        </div>

                        <div class="col-3"><label for="nacionalidad" class="form-label">Nacionalidad:</label><select
                                id="nacionalidad" name="nacionalidad" class="form-control" required>
                                <option value="">Selecciona uno...</option>
                                <option value="COLOMBIANO">Colombiano</option>
                                <option value="OTRO">Otra</option>
                            </select>
                            <div class="invalid-feedback">Seleccione la nacionalidad.</div>
                        </div>

                        <div class="col-3"><label for="otronacionalidad" class="form-label">Otra:</label><input
                                type="text" class="form-control" id="otronacionalidad" name="otronacionalidad"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"></div>

                        <div class="col-4"><label for="fecNacimiento" class="control-label">Fecha de Nacimiento:</label>
                            <input type="text" autocomplete="off" name="fecNacimiento" id="fecNacimiento"
                                class="input-group date form-control" date="" data-date-format="yyyy/mm/dd"
                                placeholder="AAAA/MM/DD" required>
                        </div>

                        <div class="col-4"><label for="depNacimiento" class="form-label">Departamento de
                                Nacimiento:</label><select name="depNacimiento" id="depNacimiento" class="form-control"
                                required>
                                <option value="">Seleccione...</option>
                                <option value="91">AMAZONAS</option>
                                <option value="5">ANTIOQUIA</option>
                                <option value="81">ARAUCA</option>
                                <option value="88">ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA</option>
                                <option value="8">ATLÁNTICO</option>
                                <option value="11">BOGOTÁ D.C.</option>
                                <option value="13">BOLÍVAR</option>
                                <option value="15">BOYACÁ</option>
                                <option value="17">CALDAS</option>
                                <option value="18">CAQUETÁ</option>
                                <option value="85">CASANARE</option>
                                <option value="19">CAUCA</option>
                                <option value="20">CESAR</option>
                                <option value="27">CHOCÓ</option>
                                <option value="23">CÓRDOBA</option>
                                <option value="25">CUNDINAMARCA</option>
                                <option value="94">GUAINÍA</option>
                                <option value="95">GUAVIARE</option>
                                <option value="41">HUILA</option>
                                <option value="44">LA GUAJIRA</option>
                                <option value="47">MAGDALENA</option>
                                <option value="50">META</option>
                                <option value="52">NARIÑO</option>
                                <option value="54">NORTE DE SANTANDER</option>
                                <option value="86">PUTUMAYO</option>
                                <option value="63">QUINDÍO</option>
                                <option value="66">RISARALDA</option>
                                <option value="68">SANTANDER</option>
                                <option value="70">SUCRE</option>
                                <option value="73">TOLIMA</option>
                                <option value="76">VALLE DEL CAUCA</option>
                                <option value="99">VICHADA</option>
                            </select></div>

                        <div class="col-4"><label for="munNacimiento" class="form-label">Municipio de
                                Nacimiento:</label><select name="munNacimiento" id="munNacimiento" class="form-control"
                                required></select></div>


                        <div class="col-4"><label for="dirResidencia" class="form-label">Dirección de
                                Residencia:</label><input type="text" class="form-control" id="dirResidencia"
                                name="dirResidencia" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                        </div>

                        <div class="col-4"><label for="depResidencia" class="form-label">Departamento de
                                Residencia:</label><select name="depResidencia" id="depResidencia" class="form-control"
                                required>
                                <option value="">Seleccione...</option>
                                <option value="91">AMAZONAS</option>
                                <option value="5">ANTIOQUIA</option>
                                <option value="81">ARAUCA</option>
                                <option value="88">ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA</option>
                                <option value="8">ATLÁNTICO</option>
                                <option value="11">BOGOTÁ D.C.</option>
                                <option value="13">BOLÍVAR</option>
                                <option value="15">BOYACÁ</option>
                                <option value="17">CALDAS</option>
                                <option value="18">CAQUETÁ</option>
                                <option value="85">CASANARE</option>
                                <option value="19">CAUCA</option>
                                <option value="20">CESAR</option>
                                <option value="27">CHOCÓ</option>
                                <option value="23">CÓRDOBA</option>
                                <option value="25">CUNDINAMARCA</option>
                                <option value="94">GUAINÍA</option>
                                <option value="95">GUAVIARE</option>
                                <option value="41">HUILA</option>
                                <option value="44">LA GUAJIRA</option>
                                <option value="47">MAGDALENA</option>
                                <option value="50">META</option>
                                <option value="52">NARIÑO</option>
                                <option value="54">NORTE DE SANTANDER</option>
                                <option value="86">PUTUMAYO</option>
                                <option value="63">QUINDÍO</option>
                                <option value="66">RISARALDA</option>
                                <option value="68">SANTANDER</option>
                                <option value="70">SUCRE</option>
                                <option value="73">TOLIMA</option>
                                <option value="76">VALLE DEL CAUCA</option>
                                <option value="99">VICHADA</option>
                            </select></div>

                        <div class="col-4"><label for="munResidencia" class="form-label">Municipio de
                                Residencia:</label><select name="munResidencia" id="munResidencia" class="form-control"
                                required></select></div>

                        <div class="col-4"><label for="edad" class="form-label">Edad:</label>
                            <input type="text" autocomplete="off" class="form-control" id="edad" name="edad"
                                maxlength="3"
                                onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                required>
                        </div>

                        <div class="col-4"><label for="hijos" class="form-label">Hijos:</label>
                            <input type="text" autocomplete="off" class="form-control" id="hijos" name="hijos"
                                maxlength="3"
                                onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                required>
                        </div>

                        <div class="col-4"><label for="perCargo" class="form-label">Personas a cargo:</label>
                            <input type="text" autocomplete="off" class="form-control" id="perCargo" name="perCargo"
                                maxlength="3"
                                onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                required>
                        </div>

                        <div class="col-6"><label for="correo" class="form-label">Correo Electrónico:</label><input
                                type="email" class="form-control" id="correo" name="correo"
                                onkeyup="javascript:this.value=this.value.toUpperCase();" required></div>

                        <div class="col-3"><label for="celular" class="form-label">Celular:</label>
                            <input type="text" autocomplete="off" class="form-control" id="celular" name="celular"
                                maxlength="10"
                                onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                required>
                        </div>

                        <div class="col-3"><label for="telefono" class="form-label">Teléfono:</label>
                            <input type="text" autocomplete="off" class="form-control" id="telefono" name="telefono"
                                maxlength="10"
                                onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                        </div>

                        <div class="col-6"><label for="tipoOcu" class="form-label">Tipo de Ocupación:</label><select
                                name="tipoOcu" class="form-control" required>
                                <option value="">Selecciona uno...</option>
                                <option value="EMPLEADO">Empleado</option>
                                <option value="PENSIONADO">Pensionado</option>
                                <option value="EMPLEADO CON NEGOCIO">Empleado con negocio</option>
                                <option value="INDEPENDIENTE">Independiente</option>
                                <option value="RENTISTA">Rentista</option>
                            </select>
                            <div class="invalid-feedback">Seleccione el tipo de Ocupación.</div>
                        </div>

                        <div class="col-6"><label for="tipoViv" class="form-label">Tipo de Vivienda:</label><select
                                name="tipoViv" class="form-control" required>
                                <option value="">Selecciona uno...</option>
                                <option value="PROPIA">Propia</option>
                                <option value="ARRIENDO">Arriendo</option>
                                <option value="FAMILIAR">Familiar</option>
                            </select>
                            <div class="invalid-feedback">Seleccione el tipo de Vivienda.</div>
                        </div>

                        <div class="col-6"><label for="tipoViv" class="form-label">Carrera:</label><select
                                name="tipoViv" class="form-control" required>
                                <option value="">Selecciona uno...</option>
                                <option value="Medicina">Medicina</option>
                            </select>
                            <div class="invalid-feedback">Seleccione el tipo de Vivienda.</div>
                        </div>

                        <div class="col-6"><label for="tipoViv" class="form-label">Tipó De Convenio</label><select
                                name="tipoViv" class="form-control" required>
                                <option value="">Selecciona uno...</option>


                                <option value="Medicina">Universidad Sergio Arboleda</option>
                                <option value="Medicina"> Universidad del Magdalena</option>
                                <option value="Medicina">Universidad Cooperativa de Colombia</option>
                                <option value="Medicina">Universidad Libre</option>
                                <option value="Medicina">Universidad del Atlántico</option>
                                <option value="Medicina"> Universidad Del Rosario</option>
                                <option value="Medicina">Corporación Bolivariana del Norte</option>
                                <option value="Medicina">Sena</option>
                                <option value="Medicina">INSTITUTO TÉCNICO DEL NORTE</option>
                                <option value="Medicina"> Corporación Asmedas Magdalena</option>
                            </select>
                            <div class="invalid-feedback">Seleccione el tipo de Convenio.</div>
                        </div>


                        <div class="col-12">
                            <h2 align="center"><br>Documentos Solicitados</br></h2>

                            <div>
                                <h5>
                                    Convenio Vigente
                                </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>

                            </div>


                            <div>
                                <h5>
                                    Carta De Presentacion
                                </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>
                            <div>
                                <h5>
                                    Certificado original de calificaciones de la universidad de origen con promedio
                                    igual o superior a 3.5 en una escala de 0-5
                                </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>

                            <div>
                                <h5>
                                    Carla de solicitud personal donde el estudiante manifieste su compromiso de realizar
                                    el año
                                    completo y <br> cumplir con el reglamento de internado de la E.S.E HUJMB y de la
                                    Universidad de origen.
                                </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>

                            <div>
                                <h5>
                                    Certificado de afiliación a la ARL. </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>

                            <div>
                                <h5>
                                    Certificado de toma de pólizas de responsabilidad civil. </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>

                            <div>
                                <h5>
                                    Certificación de afiliación a la EPS. </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>

                            <div>
                                <h5>
                                    Fotocopia aumentada al 150% del documento de identidad. </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>

                            <div>
                                <h5>
                                    Certificado de la póliza estudiantil. </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>

                            <div>
                                <h5>
                                    Fotocopia del carnet de vacunación con esquema completo de toxoide tetânico
                                    y diftérico, triple viral fiebre amarilla, <br> una (1) dosis de varicela, tres (3)
                                    dosis,covid 19 esquema comlpeto(3),hepatitis b esquema completo (3)

                                </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>

                            <div>
                                <h5>
                                    Hoja de vida (únicamente la información personal y académica).
                                </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">subir</label>
                            </div>

                            <div>
                                <h5>
                                    Acta de Grado
                                </h5>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Subir</label>
                            </div>
                        </div>

                        <div class="col-6"><label for="tiProf" class="form-label">Título Obtenido:</label><input
                                type="text" class="form-control" id="tiProf" name="tiProf"
                                onkeyup="javascript:this.value=this.value.toUpperCase();" required></div>

                        <div class="col-3"><label for="fecGrado" class="control-label">Fecha de Grado:</label>
                            <input type="text" autocomplete="off" name="fecGrado" id="fecGrado"
                                class="input-group date form-control" date="" data-date-format="yyyy/mm/dd"
                                placeholder="AAAA/MM/DD" required>
                        </div>
                        <div class="col-12">
                            <h2 align="center"><br>**************</br></h2>
                        </div>
                        <div class="col-12">
                            <p align="justify">Con el diligenciamiento de mi información personal, manifiesto que autorizo de manera expresa e inequívoca a la para recolectar, almacenar, tratar y eventualmente transmitir o transferir a nivel nacional o internacional mi información personal, la cual será utilizada para: i) realizar la promoción, ejecución, desarrollo y evaluación de actividades académicas REALIZADAS POR DOCENCIA HUJMB, ii) desarrollo de actividades de tipo administrativo y operativo; iii) ser contactado para la promoción de programas académicos propios y de terceros aliados, iv) compartir mis datos con terceros aliados en el desarrollo de actividades académicas. Manifiesto que conozco los derechos sobre mis datos personales, y que el canal de consultas y reclamos es:docencia@hujmb. Así mismo, manifiesto que conozco que mis datos personales serán tratados conforme a la Política de Protección de Datos Personales publicada en la página web www.hujmb.com
                            </p>
                            <label for="origen" class="form-label">Acepta o no Acepta</label><input
                                type="text" class="form-control" id="origen" name="origen"
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>

                        <div class="col-12">
                            <h2 align="center"><br>Afiliación a Seguridad Social</br></h2>
                        </div>
                        <div class="col-12">
                            <h6 align="center">En caso de no aplicar a esta información, favor no diligenciar.</h6>
                        </div>

                        <div class="col-4"><label for="eps" class="form-label">EPS:</label><select id="eps" name="eps"
                                class="form-control">
                                <option value="">Selecciona una...</option>
                                <option value="AIC">AIC</option>
                                <option value="ALIANSALUD">ALIANSALUD</option>
                                <option value="ASMETSALUD">ASMETSALUD</option>
                                <option value="CAFESALUD">CAFESALUD</option>
                                <option value="CAJACOPI">CAJACOPI</option>
                                <option value="CAPITAL SALUD">CAPITAL SALUD</option>
                                <option value="COLPATRIA">COLPATRIA</option>
                                <option value="COMFAMILIAR HUILA">COMFAMILIAR HUILA</option>
                                <option value="COMFENALCO ANTIOQUIA">COMFENALCO ANTIOQUIA</option>
                                <option value="COMFENALCO VALLE">COMFENALCO VALLE</option>
                                <option value="COMPARTA">COMPARTA</option>
                                <option value="COMPENSAR">COMPENSAR</option>
                                <option value="CONVIDA">CONVIDA</option>
                                <option value="COOMEVA">COOMEVA</option>
                                <option value="COOSALUD">COOSALUD</option>
                                <option value="CRUZ BLANCA">CRUZ BLANCA</option>
                                <option value="ECOOPSOS">ECOOPSOS</option>
                                <option value="EMDISALUD">EMDISALUD</option>
                                <option value="EMSSANAR">EMSSANAR</option>
                                <option value="FAMIASANAR">FAMISANAR</option>
                                <option value="GOLDEN CROSS">GOLDEN CROSS</option>
                                <option value="HUMANA VIVIR">HUMANA VIVIR</option>
                                <option value="LA NUEVA EPS">LA NUEVA EPS</option>
                                <option value="MALLAMAS">MALLAMAS</option>
                                <option value="MEDIMAS">MEDIMAS</option>
                                <option value="MUTUAL SER">MUTUAL SER</option>
                                <option value="PIJAOS SALUD">PIJAOS SALUD</option>
                                <option value="SALUD COLOMBIA">SALUD COLOMBIA</option>
                                <option value="SALUD MIA">SALUD MIA</option>
                                <option value="SALUD TOTAL">SALUD TOTAL</option>
                                <option value="SALUDCOOP">SALUDCOOP</option>
                                <option value="SALUDVIDA">SALUDVIDA</option>
                                <option value="SANITAS">SANITAS</option>
                                <option value="SAVIA SALUD">SAVIA SALUD</option>
                                <option value="SOS">SOS</option>
                                <option value="SURA">SURA</option>
                            </select>
                            <div class="invalid-feedback">Seleccione la EPS.</div>
                        </div>


                        <div class="col-4"><label for="afp" class="form-label">Fondo de Pensiones:</label><select
                                id="afp" name="afp" class="form-control">
                                <option value="">Selecciona uno...</option>
                                <option value="CAXDAC">CAXDAC</option>
                                <option value="COLFONDOS">COLFONDOS</option>
                                <option value="COLPENSIONES">COLPENSIONES</option>
                                <option value="FONPRECON">FONPRECON</option>
                                <option value="OLD MUTUAL">OLD MUTUAL</option>
                                <option value="OLD MUTUAL ALTERNATIVO">OLD MUTUAL ALTERNATIVO</option>
                                <option value="PORVENIR">PORVENIR</option>
                                <option value="PROTECCION">PROTECCION</option>
                            </select>
                            <div class="invalid-feedback">Seleccione el Fondo de Pensiones.</div>
                        </div>


                        <div class="col-4"><label for="arl" class="form-label">ARL:</label><select id="arl" name="arl"
                                class="form-control">
                                <option value="">Selecciona una...</option>
                                <option value="COLMENA">COLMENA</option>
                                <option value="COLPATRIA">COLPATRIA</option>
                                <option value="LA EQUIDAD SEGUROS">LA EQUIDAD SEGUROS</option>
                                <option value="LIBERTY SEGUROS">LIBERTY SEGUROS</option>
                                <option value="MAPFRE">MAPFRE</option>
                                <option value="POSITIVA">POSITIVA</option>
                                <option value="SEGUROS ALFA">SEGUROS ALFA</option>
                                <option value="SEGUROS AURORA">SEGUROS AURORA</option>
                                <option value="SEGUROS BOLIVAR">SEGUROS BOLIVAR</option>
                                <option value="SURA">SURA</option>
                            </select>
                            <div class="invalid-feedback">Seleccione la ARL.</div>
                        </div>


                        <div class="container-fluid">
                            <hr>
                            <div class="form-check form-check-inline"><input type="checkbox" name="polDatos"
                                    id="polDatos" required><label for="polDatos" align="justify">Acepto los términos y
                                    condiciones de la Política de Tratamiento de Datos Personales y declaro haber leído,
                                    entendido, aceptado y
                                    autorizado lo estipulado en este formulario, la información suministrada es exacta y
                                    correcta.</label></div>
                            <br>
                            <div class="form-check form-check-inline"><input type="checkbox" name="infDatos"
                                    id="infDatos" required><label for="infDatos" align="justify">EL PROVEEDOR se obliga
                                    con el HOSPITAL UNIVERSITARIO JULIO MÉNDEZ BARRENECHE E.S.E. a entregar información
                                    veraz
                                    y verificable y a actualizar su información personal, comercial y financiera, por lo
                                    menos una (1) vez al año, o cada vez que así lo solicite, suministrando la totalidad
                                    de los soportes documentales exigidos.
                                    El incumplimiento de esta obligación, faculta al HOSPITAL UNIVERSITARIO JULIO MÉNDEZ
                                    BARRENECHE E.S.E. para terminar de manera inmediata y unilateral cualquier tipo de
                                    relación contractual o comercial que tenga.</label></div>
                        </div>



                        <div class="col-12">
                            <hr>
                            <button type="submit" name="add" class="btn btn-success"><i class="fas fa-save"></i> Guardar
                                Registro</button> &nbsp;&nbsp;&nbsp;
                            <a href="/hj-admin/" class="btn btn-primary"><i class="fas fa-undo"></i> Regresar</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="../proveedores/consulta/natural.php" class="btn btn-info"><i
                                    class="fas fa-search"></i> Consultar</a> &nbsp;&nbsp;&nbsp;
                            <a href="../proveedores/consulta1/natural.php" class="btn btn-warning"><i
                                    class="fas fa-search"></i> Consultar Versión Anterior</a>
                        </div>



                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; HUJMB 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Preparado para partir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión
                    actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/login.phpl">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>