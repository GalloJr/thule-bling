<?php $apikey = "98a15c2ad4db7ed4a3fa9dc9866702a27c63993717d626abccbfccc449f645142b637c38";
$outputType = "json"; 
$result = 0;
$resultsp = 0;
$resultleo = 0;
$nfat = 0;
$nfatsp = 0;
$nfatleo = 0;
$situacao = "Autorizada";
$situacao2 = "Emitida DANFE";
$resultf = 0;
$nfatf = 0;
$resultm = 0;
$nfatm = 0;
$pgi = 1;
$resultnfc = 0;
$resultnf = 0;

while ($retorno2['retorno']['erros'][0]['erro']['cod'] <> 14) {
    $url2 = 'https://bling.com.br/Api/v2/nfces/page=' . $pgi . '/' . $outputType;
    $retorno2 = executeGetFiscalDocuments($url2, $apikey, $dati, $datf);
    $resultnfc += count($retorno2['retorno']['notasfiscais']);
    $pgi++;
    for ($i=0; $i < 100 ; $i++) { 
        if (($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao) or ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao2)) {
            $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
            $result += $sum;
            $nfat++;
            if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['loja'] == 203750444){
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultm += $sum;
                $nfatm++;
            } else {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultf += $sum;
                $nfatf++;
            } if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'SP') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultsp += $sum;
                $nfatsp++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'RJ') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultrj += $sum;
                $nfatrj++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'MG') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultmg += $sum;
                $nfatmg++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'PR') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultpr += $sum;
                $nfatpr++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'RS') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultrs += $sum;
                $nfatrs++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'DF') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultdf += $sum;
                $nfatdf++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'SC') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultsc += $sum;
                $nfatsc++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'BA') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultba += $sum;
                $nfatba++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'ES') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultes += $sum;
                $nfates++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'PE') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultpe += $sum;
                $nfatpe++;
            } if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Leonardo de Oliveira Rocha') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultleo += $sum;
                $nfatleo++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Marcely Gomes de Sousa Neves') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultmarcely+= $sum;
                $nfatmarcely++;
            } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Layane Leal Gonzaga') {
                $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultlay+= $sum;
                $nfatlay++;
            } 
        }
    }
} 

$pgi=1;

while ($retorno['retorno']['erros'][0]['erro']['cod'] <> 14) {
    $url = 'https://bling.com.br/Api/v2/notasfiscais/page=' . $pgi . '/' . $outputType;
    $retorno = executeGetFiscalDocuments($url, $apikey);
    $resultnf += count($retorno['retorno']['notasfiscais']);
    $pgi++;
    for ($i=0; $i < 100 ; $i++) { 
        if (($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao) or ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao2)) {
            $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
            $result += $sum;
            $nfat++;
            if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['loja'] == 203750444){
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultm += $sum;
                $nfatm++;
            } else {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultf += $sum;
                $nfatf++;
            } if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'SP') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultsp += $sum;
                $nfatsp++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'RJ') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultrj += $sum;
                $nfatrj++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'MG') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultmg += $sum;
                $nfatmg++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'PR') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultpr += $sum;
                $nfatpr++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'RS') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultrs += $sum;
                $nfatrs++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'DF') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultdf += $sum;
                $nfatdf++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'SC') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultsc += $sum;
                $nfatsc++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'BA') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultba += $sum;
                $nfatba++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'ES') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultes += $sum;
                $nfates++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'PE') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultpe += $sum;
                $nfatpe++;
            } if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Leonardo de Oliveira Rocha') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultleo += $sum;
                $nfatleo++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Marcely Gomes de Sousa Neves') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultmarcely+= $sum;
                $nfatmarcely++;
            } else if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Layane Leal Gonzaga') {
                $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
                $resultlay+= $sum;
                $nfatlay++;
            } 
        }
    }
}

// echo "Contagem NF total de notas ". $resultnf?> <br> <?php

function executeGetFiscalDocuments($url, $apikey){
    $curl_handle = curl_init();
    if (isset($_REQUEST['dati']) && !empty($_REQUEST['dati']) && isset($_REQUEST['datf']) && !empty($_REQUEST['datf'])) {
        curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey . '&filters=dataEmissao[' . $_REQUEST['dati'] . '%20TO%20' . $_REQUEST['datf'] .']');
    } else {
    curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey);
    }
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handle);
    curl_close($curl_handle);
    return json_decode($response,true);
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thule Store Colinas | Bling </title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
    Product Admin CSS Template
    https://templatemo.com/tm-524-product-admin
    -->
</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.php">
                    <img src="https://images.tcdn.com.br/img/img_prod/1039253/1629162119_thulestore.svg">
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Reports <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Daily Report</a>
                                <a class="dropdown-item" href="#">Weekly Report</a>
                                <a class="dropdown-item" href="#">Yearly Report</a>
                            </div>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="products.html">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.php">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <form method="POST">
                <div class="row" style="margin-top: 23px;">
                    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 tm-block-col">
                        <input type="text" class="form-control" placeholder="Data inicial - dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" autocomplete="off" id="dati" name="dati" value=<?php echo $_REQUEST['dati']; ?>>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 tm-block-col">
                        <input type="text" class="form-control" placeholder="Data final - dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" autocomplete="off" id="datf" name="datf" value=<?php echo $_REQUEST['datf']; ?>> 
                    </div> 
                    <button type="SUBMIT" style="height: 50px;width: 150px;margin-left: 35%;background-color: black;color: white;">ATUALIZAR</button>
                </div>
            </form>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title"></h2>
                        <!-- <canvas id="lineChart"></canvas> -->
                        <h5 class="mb-2" style="margin-top: 10%;"><b>Soma das notas faturadas</b></h5>
                        <p class="mb-2" style="font-size: xxx-large;"><?php setlocale(LC_MONETARY, 'pt_BR'); echo $resulte=money_format('%i', $result) ?></p>
                        <h5 class="mb-2" style="margin-top: 10%;"><b>Total de vendas faturadas</b></h5><p class="mb-2" style="font-size: xx-large;"> <?php echo $nfat ?></p>
                    </div>
                </div>
                <!-- <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                        <div class="tm-notification-items">
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle" style="text-align: center;"><img src="img/lay.jpg" alt="Avatar Image" class="rounded-circle"><b>Layane</b></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Soma das notas</b></p>
                                    <p class="mb-2">R$ <?php echo $resultlay ?></p>
                                    <p class="mb-2"><b>Total de vendas</b> <?php echo $nfatlay ?></p>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle" style="text-align: center;"><img src="img/leo.jpg" alt="Avatar Image" class="rounded-circle"><b>Leonardo</b></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Soma das notas</b> R$ <?php echo $resultleo ?></p>
                                    <p class="mb-2"><b>Total de vendas</b> <?php echo $nfatleo ?></p>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle" style="text-align: center;"><img src="img/marcely.jpg" alt="Avatar Image" class="rounded-circle"><b>Marcely</b></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Soma das notas</b> R$ <?php echo $resultmarcely ?></p>
                                    <p class="mb-2"><b>Total de vendas</b> <?php echo $nfatmarcely ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title" style="font-size: 1,5rem;text-align: center;">Faturamento por Estado</h2>
                        <!-- <div id="pieChartContainer">
                            <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                        </div>  -->    
                        <h5 class="mb-2"><b>São Paulo</b></h5>
                        <?php $porcsp = ($resultsp/$result)*100;?>
                        <p class="mb-2"><?php echo $resultspe=money_format('%i', $resultsp) ?> (<?php echo $porcsp=number_format($porcsp, 2, '.', ''); ?>%) <?php echo $nfatsp ?> notas</p>
                        <!-- <h5 class="mb-2"><b>Notas São Paulo </b></h5>
                        <p class="mb-2"><?php echo $nfatsp ?></p> -->
                        <h5 class="mb-2"><b>Rio de Janeiro</b> </h5>
                        <?php $porcrj = ($resultrj/$result)*100;?>
                        <p class="mb-2"><?php echo $resultrje=money_format('%i', $resultrj) ?> (<?php echo $porcrj=number_format($porcrj, 2, '.', ''); ?>%) <?php echo $nfatrj ?> notas</p>
                        <h5 class="mb-2"><b>Minas Gerais</b> </h5>
                        <?php $porcmg = ($resultmg/$result)*100;?>
                        <p class="mb-2"><?php echo $resultmge=money_format('%i', $resultmg) ?> (<?php echo $porcmg=number_format($porcmg, 2, '.', ''); ?>%) <?php echo $nfatmg ?> notas</p>
                        <h5 class="mb-2"><b>Paraná</b> </h5>
                        <?php $porcpr = ($resultpr/$result)*100;?>
                        <p class="mb-2"><?php echo $resultpre=money_format('%i', $resultpr) ?> (<?php echo $porcpr=number_format($porcpr, 2, '.', ''); ?>%) <?php echo $nfatpr ?> notas</p>
                        <h5 class="mb-2"><b>Rio Grande do Sul</b> </h5>
                        <?php $porcrs = ($resultrs/$result)*100;?>
                        <p class="mb-2"><?php echo $resultrse=money_format('%i', $resultrs) ?> (<?php echo $porcrs=number_format($porcrs, 2, '.', ''); ?>%) <?php echo $nfatrs ?> notas</p>
                        <h5 class="mb-2"><b>Distrito Federal</b> </h5>
                        <?php $porcdf = ($resultdf/$result)*100;?>
                        <p class="mb-2"><?php echo $resultdfe=money_format('%i', $resultdf) ?> (<?php echo $porcdf=number_format($porcdf, 2, '.', ''); ?>%) <?php echo $nfatdf ?> notas</p>
                        <h5 class="mb-2"><b>Santa Catarina</b> </h5>
                        <?php $porcsc = ($resultsc/$result)*100;?>
                        <p class="mb-2"><?php echo $resultsce=money_format('%i', $resultsc) ?> (<?php echo $porcsc=number_format($porcsc, 2, '.', ''); ?>%) <?php echo $nfatsc ?> notas</p>
                        <h5 class="mb-2"><b>Bahia</b> </h5>
                        <?php $porcba = ($resultba/$result)*100;?>
                        <p class="mb-2"><?php echo $resultbae=money_format('%i', $resultba) ?> (<?php echo $porcba=number_format($porcba, 2, '.', ''); ?>%) <?php echo $nfatba ?> notas</p>
                        <h5 class="mb-2"><b>Espírito Santo</b> </h5>
                        <?php $porces = ($resultes/$result)*100;?>
                        <p class="mb-2"><?php echo $resultese=money_format('%i', $resultes) ?> (<?php echo $porces=number_format($porces, 2, '.', ''); ?>%) <?php echo $nfates ?> notas</p>
                        <h5 class="mb-2"><b>Pernambuco</b> </h5>
                        <?php $porcpe = ($resultpe/$result)*100;?>
                        <p class="mb-2"><?php echo $resultpee=money_format('%i', $resultpe) ?> (<?php echo $porcpe=number_format($porcpe, 2, '.', ''); ?>%) <?php echo $nfatpe ?> notas</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title"></h2>
                        <!-- <canvas id="barChart"></canvas> -->
                        <table border="1" style="width: 100%;height: 90%;text-align: center;">
                            <tr>
                                <td><h1 class="tm-block-title"><b>Empresa</b></h1></td>
                                <td><h1 class="tm-block-title"><b>Valor</b></h1></td>
                                <td><h1 class="tm-block-title"><b>Quantidade</b></h1></td>
                            </tr>
                            <tr>
                                <td><h1 class="tm-block-title"><b>Matriz</b></h1></td>
                                <td><p class="mb-2"><?php echo $resultme=money_format('%i', $resultm) ?></p></td>
                                <td><p class="mb-2"><?php echo $nfatm ?></p></td>
                            </tr>
                            <tr>
                                <td><h1 class="tm-block-title"><b>Filial</b></h1></td>
                                <td><p class="mb-2"><?php echo $resultfe=money_format('%i', $resultf) ?></p></td>
                                <td><p class="mb-2"><?php echo $nfatf ?></p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title"></h2>
                        <!-- <canvas id="barChart"></canvas> -->
                        <table border="1" style="width: 100%;height: 50%;text-align: center;">
                            <tr>
                                <td><h1 class="tm-block-title"><b>S&C</b></h1></td>
                                <td><h1 class="tm-block-title"><b>PBL</b></h1></td>
                                <td><h1 class="tm-block-title"><b>AWK</b></h1></td>
                            </tr>
                            <tr>
                                <td><p class="mb-2">59%</p></td>
                                <td><p class="mb-2">30%</p></td>
                                <td><p class="mb-2">11%</p></td>
                            </tr>
                           <!--  <tr>
                                <td><h1 class="tm-block-title"><b>Filial</b></h1></td>
                                <td><h1 class="tm-block-title">55%</h1></td>
                                <td><h1 class="tm-block-title">40%</h1></td>
                                <td><h1 class="tm-block-title">5%</h1></td>
                            </tr> -->
                        </table>
                    </div>
                </div>
                <!-- <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Orders List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">NF</th>
                                    <th scope="col">DATA</th>
                                    <th scope="col">EMPRESA</th>
                                    <th scope="col">VALOR</th>
                                    <th scope="col">UF</th>
                                    <th scope="col">CATEGORIA</th>
                                    <th scope="col">VENDEDOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><b>#122349</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Oliver Trag</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>485 km</b></td>
                                    <td>16:00, 12 NOV 2018</td>
                                    <td>08:00, 18 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122348</b></th>
                                    <td>
                                        <div class="tm-status-circle pending">
                                        </div>Pending
                                    </td>
                                    <td><b>Jacob Miller</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>360 km</b></td>
                                    <td>11:00, 10 NOV 2018</td>
                                    <td>04:00, 14 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122347</b></th>
                                    <td>
                                        <div class="tm-status-circle cancelled">
                                        </div>Cancelled
                                    </td>
                                    <td><b>George Wilson</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>340 km</b></td>
                                    <td>12:00, 22 NOV 2018</td>
                                    <td>06:00, 28 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122346</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>William Aung</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>218 km</b></td>
                                    <td>15:00, 10 NOV 2018</td>
                                    <td>09:00, 14 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122345</b></th>
                                    <td>
                                        <div class="tm-status-circle pending">
                                        </div>Pending
                                    </td>
                                    <td><b>Harry Ryan</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>280 km</b></td>
                                    <td>15:00, 11 NOV 2018</td>
                                    <td>09:00, 17 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122344</b></th>
                                    <td>
                                        <div class="tm-status-circle pending">
                                        </div>Pending
                                    </td>
                                    <td><b>Michael Jones</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>218 km</b></td>
                                    <td>18:00, 12 OCT 2018</td>
                                    <td>06:00, 18 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122343</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Timmy Davis</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>218 km</b></td>
                                    <td>12:00, 10 OCT 2018</td>
                                    <td>08:00, 18 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122342</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Oscar Phyo</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>420 km</b></td>
                                    <td>15:30, 06 OCT 2018</td>
                                    <td>09:30, 16 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122341</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Charlie Brown</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>300 km</b></td>
                                    <td>11:00, 10 OCT 2018</td>
                                    <td>03:00, 14 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122340</b></th>
                                    <td>
                                        <div class="tm-status-circle cancelled">
                                        </div>Cancelled
                                    </td>
                                    <td><b>Wilson Cookies</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>218 km</b></td>
                                    <td>17:30, 12 OCT 2018</td>
                                    <td>08:30, 22 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122339</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Richard Clamon</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>150 km</b></td>
                                    <td>15:00, 12 OCT 2018</td>
                                    <td>09:20, 26 OCT 2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
            </div>
        </div>
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center mb-0 px-4 small">
                    Thule Store Colinas | Bling
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/jquery.mask.min.js"></script>
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
