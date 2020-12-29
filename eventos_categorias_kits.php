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
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">

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
                        $sql = "select e.id eid, e.titulo etitulo, ec.id ecid, ec.evento ecevento, ec.titulo ectitulo, eck.id eckid, eck.categoria eckcategoria, eck.item eckitem, eck.quantidade eckquantidade, eki.id ekiid, eki.item ekiitem from eventos as e inner join eventos_categorias as ec on e.id = ec.evento left join eventos_categorias_kits as eck on ec.id = eck.categoria left join eventos_kit_item as eki on eck.item = eki.id where ec.id = '$pegaid' group by eid";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<h2 class='content-header-title float-left mb-0'>$row[etitulo]</h2>";
                            echo "<div class='breadcrumb-wrapper col-12'>";
                            echo "<ol class='breadcrumb'>";
                            echo "<li class='breadcrumb-item'><a href='index.php'>Home</a></li>";
                            echo "<li class='breadcrumb-item'><a href='eventos.php'>Eventos</a></li>";
                            echo "<li class='breadcrumb-item'><a href='eventos_categorias.php?id=$row[ecevento]'>$row[ectitulo]</a></li>";

                            echo "<li class='breadcrumb-item active'>$row[ectitulo]</li>";
                            echo "</ol>";
                            echo "</div>";
                        }
                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Basic Inputs start -->
            <!-- Column selectors with Export Options and print table -->
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>Evento</th>
                                                <th>Categoria</th>
                                                <th>Item</th>
                                                <th>Quantidade disp.</th>
                                                <th>Imagens</th>
                                                <th>Excluir</th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            <?php
                                            require("connections/conn.php");
                                            $pegaid = (int)$_GET['id'];
                                            $sql = "select e.id eid, e.titulo etitulo, ec.id ecid, ec.evento ecevento, ec.titulo ectitulo, eck.id eckid, eck.categoria eckcategoria, eck.item eckitem, eck.quantidade eckquantidade, eki.id ekiid, eki.item ekiitem from eventos as e inner join eventos_categorias as ec on e.id = ec.evento left join eventos_categorias_kits as eck on ec.id = eck.categoria left join eventos_kit_item as eki on eck.item = eki.id where ec.id = '$pegaid' ";
                                            $result = mysqli_query($conn, $sql);

                                            while ($row = mysqli_fetch_assoc($result)) {


                                                echo "<tr>";
                                                echo "<td>$row[etitulo]</td>";
                                                echo "<td>$row[ectitulo]</td>";
                                                echo "<td>$row[ekiitem]</td>";
                                                echo "<td>$row[eckquantidade]</td>";


                                                echo "<td><a href='eventos_categorias_kits_imagens.php?id=$row[eckid]'><i class='feather icon-gift'></i></a></td>";
                                                echo "<td><a href='functions/eventos_categorias_kits_excluir.php?id=$row[eckid]'><i class='feather icon-trash-2'></i></a></td>";
                                                echo "</tr>";
                                            }
                                            mysqli_close($conn);
                                            ?>


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Evento</th>
                                                <th>Categoria</th>
                                                <th>Item</th>
                                                <th>Quantidade disp.</th>
                                                <th>Imagens</th>
                                                <th>Excluir</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vincular item ao kit</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data" action="functions/eventos_categorias_kits_adicionar.php">


                                        <?php
                                        require("connections/conn.php");
                                        $pegaid = (int)$_GET['id'];
                                        $sql = "select * FROM eventos_categorias where id = '$pegaid'";
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<input type='hidden' name='categoria' value='$pegaid'>";
                                        }
                                        mysqli_close($conn);
                                        ?>


                                        <div class='row'>
                                            <div class='col-xl-7 col-md-7 col-7 mb-1'>
                                                <fieldset class='form-group'>
                                                    <p>Item</p>
                                                    <select name="item" class="form-control">
                                                        <option value="" disabled selected>Selecione um item</option>
                                                        <?php
                                                        require("connections/conn.php");
                                                        $sql = "select * FROM eventos_kit_item order by item ";
                                                        $result = mysqli_query($conn, $sql);

                                                        while ($row = mysqli_fetch_assoc($result))
                                                        {
                                                            echo "<option value='$row[id]'>$row[item]</option>";
                                                        }
                                                        mysqli_close($conn);
                                                        ?>
                                                    </select>
                                                </fieldset>
                                            </div>

                                            <div class='col-xl-2 col-md-2 col-2 mb-1'>
                                                <fieldset class='form-group'>
                                                    <p>Quantidade</p>
                                                    <input type="number" class="form-control" name="quantidade">
                                                </fieldset>
                                            </div>
                                            <div class='col-xl-3 col-md-3 col-3 mb-1'>
                                                <button style="float: left; margin-top:35px" class="btn btn-primary waves-effect waves-light" type="submit">Adicionar</button>
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
<script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<script src="app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/datatables/datatable.js"></script>
<!-- END: Page JS-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
</body>
<script>
    $(function() {
        $('#preco').maskMoney({ decimal: '.', thousands: '', precision: 2 });
    })

</script>

</html>