<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html class="loading" lang="pt-BR" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php include 'includes/head.php'; ?>
</head>


<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

<?php include 'includes/topo.php'; ?>



<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span>
            </div>
        </a></li>
</ul>
<!-- END: Header-->

<?php include 'includes/menu.php'; ?>


<!-- BEGIN: Main Menu-->


<!-- END: Main Menu-->


<!-- BEGIN: Content-->
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <?php
                        require("connections/conn.php");
                        $pegaid = (int)$_GET['id'];
                        $sql = "select * FROM eventos where id = '$pegaid'";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<h2 class='content-header-title float-left mb-0'>$row[titulo]</h2>";
                        }
                        mysqli_close($conn);
                        ?>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="eventos.php">Eventos</a></li>
                                <li class="breadcrumb-item active">Editar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Basic Inputs start -->
            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <!--                            <div class="card-header">-->
                            <!--                                <h4 class="card-title">Módulo de SEO</h4>-->
                            <!--                            </div>-->
                            <div class="card-content">
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data" action="functions/eventos_editar.php">

                                        <?php
                                        require("connections/conn.php");
                                        $pegaid = (int)$_GET['id'];
                                        $sql = "select * FROM eventos where id = '$pegaid'";
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<input type='hidden' name='id' value='$row[id]'>";



                                            echo "<div class='row'>";
                                            echo "<div class='col-xl-12 col-md-12 col-12 mb-1'>";
                                            echo "<fieldset class='form-group'>";
                                            echo "<p>Título</p>";
                                            echo "<input type='text' class='form-control' name='titulo' id='basicInput' value='$row[titulo]'>";
                                            echo "</fieldset>";
                                            echo "</div>";
                                            echo "</div>";

                                            echo "<div class='row'>";
                                            echo "<div class='col-xl-12 col-md-12 col-12 mb-1'>";
                                            echo "<fieldset class='form-group'>";
                                            echo "<p>Subtítulo</p>";
                                            echo "<input type='text' class='form-control' name='subtitulo' id='basicInput' value='$row[subtitulo]'>";
                                            echo "</fieldset>";
                                            echo "</div>";
                                            echo "</div>";

                                            $pegaopcaoselecionada = "select * from eventos_modalidades where id = '$row[modalidade]'";
                                            $resultpegaopcaoselecionada = mysqli_query($conn, $pegaopcaoselecionada);

                                            $mostratodasopcoes = "select * from eventos_modalidades";
                                            $resultmostratodasopcoes = mysqli_query($conn, $mostratodasopcoes);

                                            $pegatiposelecionado = "select * from eventos_tipo where id = '$row[tipo]'";
                                            $resultpegatiposelecionado = mysqli_query($conn, $pegatiposelecionado);

                                            $mostratodastipos = "select * from eventos_tipo";
                                            $resultmostratodostipos = mysqli_query($conn, $mostratodastipos);

                                            echo "<div class='row'>";
                                            echo "<div class='col-xl-6 col-md-6 col-6 mb-1'>";
                                            echo "<fieldset class='form-group'>";
                                            echo "<p>Modalidade</p>";
                                            echo "<select name='modalidade' class='form-control'>";

                                            while ($rowpegaopcaoselecionada = mysqli_fetch_assoc($resultpegaopcaoselecionada)) {
                                                echo "<option style='background-color: #1B874B;color:#fff' selected value='$rowpegaopcaoselecionada[id]'>$rowpegaopcaoselecionada[modalidade]</option>";
                                            }
                                            while ($rowmostratodasopcoes = mysqli_fetch_assoc($resultmostratodasopcoes)) {
                                                echo "<option value='$rowmostratodasopcoes[id]'>$rowmostratodasopcoes[modalidade]</option>";
                                            }
                                            echo "</select>";
                                            echo "</fieldset>";
                                            echo "</div>";
                                            echo "<div class='col-xl-6 col-md-6 col-6 mb-1'>";
                                            echo "<fieldset class='form-group'>";
                                            echo "<p>Tipo</p>";
                                            echo "<select name='tipo' class='form-control'>";

                                            while ($rowpegatiposelecionado = mysqli_fetch_assoc($resultpegatiposelecionado)) {
                                                echo "<option style='background-color: #1B874B;color:#fff' selected value='$rowpegatiposelecionado[id]'>$rowpegatiposelecionado[tipo]</option>";
                                            }
                                            while ($rowmostratodostipos = mysqli_fetch_assoc($resultmostratodostipos)) {
                                                echo "<option value='$rowmostratodostipos[id]'>$rowmostratodostipos[tipo]</option>";
                                            }
                                            echo "</select>";
                                            echo "</fieldset>";
                                            echo "</div>";
                                            echo "</div>";

                                            echo "<p>Descrição</p>";
                                            echo "<div class='row'>";
                                            echo "<div class='col-12'>";
                                            echo "<fieldset class='form-group'>";
                                            echo "<textarea class='form-control' id='basicTextarea' name='descricao' rows='3'>$row[descricao]</textarea>";
                                            echo "</fieldset>";
                                            echo "</div>";
                                            echo "</div>";

                                            echo "<hr/>";
                                            echo "<div style='margin-bottom: 30px; margin-left:-20px' class='card-header'>";
                                            echo "<h4 class='card-title'>Personalize a página do evento</h4>";
                                            echo "</div>";

                                            echo "<div class='row'>";
                                            echo "<div class='col-xl-4 col-md-4 col-4 mb-1'>";
                                            echo "<fieldset class='form-group'>";
                                            echo "<p>Cor de fundo</p>";
                                            echo "<input type='color' style='height:100px' class='form-control' name='corfundo' id='basicInput' value='$row[corfundo]'>";
                                            echo "</fieldset>";
                                            echo "</div>";
                                            echo "<div class='col-xl-4 col-md-4 col-4 mb-1'>";
                                            echo "<fieldset class='form-group'>";
                                            echo "<p>Cor dos títulos</p>";
                                            echo "<input type='color' style='height:100px' class='form-control' name='cortitulos' id='basicInput' value='$row[cortitulos]'>";
                                            echo "</fieldset>";
                                            echo "</div>";
                                            echo "<div class='col-xl-4 col-md-4 col-4 mb-1'>";
                                            echo "<fieldset class='form-group'>";
                                            echo "<p>Cor dos botões</p>";
                                            echo "<input type='color' style='height:100px' class='form-control' name='corbotoes' id='basicInput' value='$row[corbotoes]'>";
                                            echo "</fieldset>";
                                            echo "</div>";
                                            echo "</div>";

                                        }
                                        mysqli_close($conn);
                                        ?>

                                        <div class="row">
                                            <div class="col-12">
                                                <button style="float: right;"
                                                        class="btn btn-primary waves-effect waves-light" type="submit">
                                                    Atualizar dados
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Inputs end -->
        </div>
    </div>
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">Copyright &copy; 2020<a
                class="text-bold-800 grey darken-2" href="https://www.payevents.com" target="_blank">Payevents,</a>Todos os direitos reservados</span><span
            class="float-md-right d-none d-md-block">Desenvolvido com <i class="feather icon-heart pink"></i> por <a
                href="http://www.grudigital.com.br">Grudigital</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="app-assets/vendors/js/extensions/shepherd.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<script src="app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!--<script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script>-->
<!-- END: Page JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
</body>
<script>
    $(function() {
        $('#preco').maskMoney({ decimal: '.', thousands: '', precision: 2 });
    })

</script>
<!-- END: Body-->

</html>