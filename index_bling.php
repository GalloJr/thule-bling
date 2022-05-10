<?php $apikey = "98a15c2ad4db7ed4a3fa9dc9866702a27c63993717d626abccbfccc449f645142b637c38";
$outputType = "json";
// $url = 'https://bling.com.br/Api/v2/notasfiscais/page=4/' . $outputType;
// $retorno = executeGetFiscalDocuments($url, $apikey);
// $url2 = 'https://bling.com.br/Api/v2/nfces/page=2/' . $outputType;
// $retorno2 = executeGetFiscalDocuments($url2, $apikey);
$url3 = 'https://bling.com.br/Api/v2/produtos/' . $outputType;
$retorno3 = executeGetProducts($url, $apikey);
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
$dati = "01/11/2021";
$datf = "30/11/2021";

// Analise de todas paginas com dados NFC-e!!!!
// while ($retorno2['retorno']['erros'][0]['erro']['cod'] <> 14) {
//     $url2 = 'https://bling.com.br/Api/v2/nfces/page=' . $pgi . '/' . $outputType;
//     $retorno2 = executeGetFiscalDocuments($url2, $apikey, $dati, $datf);
//     $resultnfc += count($retorno2['retorno']['notasfiscais']);
//     $pgi++;
//     for ($i=0; $i < 100 ; $i++) { 
//         if (($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao) or ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao2)) {
//             $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//             $result += $sum;
//             $nfat++;
//             if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['loja'] == 203750444){
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultm += $sum;
//                 $nfatm++;
//             } else {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultf += $sum;
//                 $nfatf++;
//             } if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'SP') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultsp += $sum;
//                 $nfatsp++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'RJ') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultrj += $sum;
//                 $nfatrj++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'MG') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultmg += $sum;
//                 $nfatmg++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'PR') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultpr += $sum;
//                 $nfatpr++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'RS') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultrs += $sum;
//                 $nfatrs++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'DF') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultdf += $sum;
//                 $nfatdf++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'SC') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultsc += $sum;
//                 $nfatsc++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'BA') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultba += $sum;
//                 $nfatba++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'ES') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultes += $sum;
//                 $nfates++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'PE') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultpe += $sum;
//                 $nfatpe++;
//             } if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Leonardo de Oliveira Rocha') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultleo += $sum;
//                 $nfatleo++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Marcely Gomes de Sousa Neves') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultmarcely+= $sum;
//                 $nfatmarcely++;
//             } else if ($retorno2['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Layane Leal Gonzaga') {
//                 $sum = $retorno2['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//                 $resultlay+= $sum;
//                 $nfatlay++;
//             } 
//         }
//     }
// } 
// echo "Contagem NFC-e total de notas ". $resultnfc?> <br> <?php
// $pgi = 1;

// Analise de todas paginas com dados pedidos!!!!
while ($retorno['retorno']['erros'][0]['erro']['cod'] <> 14) {
    $url = 'https://bling.com.br/Api/v2/pedidos/page=' . $pgi . '/' . $outputType;
    $retorno = executeGetOrder($url, $apikey, $dati, $datf);
    print_r($retorno['retorno']['pedidos'][1]['pedido']['totalvenda']);
    $resultnf += count($retorno['retorno']['pedidos']);
    $pgi++;
    for ($i=0; $i < 100 ; $i++) { 
        if (($retorno['retorno']['pedidos'][$i]['pedido']['situacao'] == $situacao) or ($retorno['retorno']['pedidos'][$i]['pedido']['situacao'] == $situacao2)) {
            $sum = $retorno['retorno']['pedidos'][$i]['pedido']['totalvenda'];
            $result += $sum;
            $nfat++;
            if ($retorno['retorno']['pedidos'][$i]['pedido']['loja'] == 203750444){
                $sum = $retorno['retorno']['pedidos'][$i]['pedido']['totalvenda'];
                $resultm += $sum;
                $nfatm++;
            } else {
                $sum = $retorno['retorno']['pedidos'][$i]['pedido']['totalvenda'];
                $resultf += $sum;
                $nfatf++;
            } if ($retorno['retorno']['pedidos'][$i]['pedido']['cliente']['uf'] == 'SP') {
                $sum = $retorno['retorno']['pedidos'][$i]['pedido']['totalvenda'];
                $resultsp += $sum;
                $nfatsp++;
            } else if ($retorno['retorno']['pedidos'][$i]['pedido']['cliente']['uf'] == 'RJ') {
                $sum = $retorno['retorno']['pedidos'][$i]['pedido']['totalvenda'];
                $resultrj += $sum;
                $nfatrj++;
            } else if ($retorno['retorno']['pedidos'][$i]['pedido']['cliente']['uf'] == 'MG') {
                $sum = $retorno['retorno']['pedidos'][$i]['pedido']['totalvenda'];
                $resultmg += $sum;
                $nfatmg++;
            } if ($retorno['retorno']['pedidos'][$i]['pedido']['vendedor'] == 'Leonardo de Oliveira Rocha') {
                $sum = $retorno['retorno']['pedidos'][$i]['pedido']['totalvenda'];
                $resultleo += $sum;
                $nfatleo++;
            } else if ($retorno['retorno']['pedidos'][$i]['pedido']['vendedor'] == 'Marcely Gomes de Sousa Neves') {
                $sum = $retorno['retorno']['pedidos'][$i]['pedido']['totalvenda'];
                $resultmarcely+= $sum;
                $nfatmarcely++;
            } else if ($retorno['retorno']['pedidos'][$i]['pedido']['vendedor'] == 'Layane Leal Gonzaga') {
                $sum = $retorno['retorno']['pedidos'][$i]['pedido']['totalvenda'];
                $resultlay+= $sum;
                $nfatlay++;
            } 
        }
    }
}
echo "Contagem NF total de notas ". $resultnf?> <br> <?php
print_r("Soma das notas faturadas R$".$result);?> <br> <?php
print_r("Total de vendas faturadas: ".$nfat);?> <br> <?php
print_r("Soma das notas Matriz R$".$resultm);?> <br> <?php
print_r("Total de vendas Matriz: ".$nfatm);?> <br> <?php
print_r("Soma das notas Filial R$".$resultf);?> <br> <?php
print_r("Total de vendas Filial: ".$nfatf);?> <br> <?php
print_r("Soma das notas São Paulo R$".$resultsp);?> <br> <?php
print_r("Total de vendas São Paulo: ".$nfatsp);?> <br> <?php
print_r("Soma das notas Rio de Janeiro R$".$resultrj);?> <br> <?php
print_r("Total de vendas Rio de Janeiro: ".$nfatrj);?> <br> <?php
print_r("Soma das notas Minas Gerais R$".$resultmg);?> <br> <?php
print_r("Total de vendas Minas Gerais: ".$nfatmg);?> <br> <?php
print_r("Soma das notas Leonardo R$".$resultleo);?> <br> <?php
print_r("Total de vendas Leonardo: ".$nfatleo);?> <br> <?php
print_r("Soma das notas Marcely R$".$resultmarcely);?> <br> <?php
print_r("Total de vendas Marcely: ".$nfatmarcely);?> <br> <?php
print_r("Soma das notas Layane R$".$resultlay);?> <br> <?php
print_r("Total de vendas Layane: ".$nfatlay);?> <br> <?php

// CONTAGEM GERAL DE NOTAS NA BUSCA
// echo "Contagem NF ".count($retorno['retorno']['notasfiscais']);?> <br> <?php 
// echo "Contagem NFC-e ".count($retorno2['retorno']['notasfiscais']);?> <br> <?php 
echo "Contagem produtos ".count($retorno3['retorno']['produtos']);?> <br> <?php

// EXIBICAO DO VALOR DA PRIMEIRA NOTA NA BUSCA GERAL
// print_r("Valor ".$retorno['retorno']['notasfiscais'][0]['notafiscal']['valorNota']);
// print_r($retorno['retorno']['notasfiscais'][0]['notafiscal']['loja']);

// ARMAZENAMENTO DA CONTAGEM EM VARIAVEL
// $size =  count($retorno['retorno']['notasfiscais']);

// SOMATORIA DE TODAS AS NOTAS FISCAIS
// for ($i=0; $i < $size ; $i++) { 
//     $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//     $result += $sum;
// }

// print_r("Soma das notas R$".$result);


// START SOMATORIA DE TODAS AS NOTAS AUTORIZADAS E COM DANFE
// for ($i=0; $i < 100 ; $i++) { 
//     if (($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao) or ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao2)) {
//         $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//         $result += $sum;
//         $nfat++;
//     }
// }
// print_r("Soma das notas R$".$result);
// print_r("Total de vendas: ".$nfat);

// END SOMATORIA DE TODAS AS NOTAS AUTORIZADAS E COM DANFE

// START SOMATORIA DE NOTAS AUTORIZADAS E COM DANFE POR EMPRESA
// for ($i=0; $i < 100 ; $i++) { 
//     if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['loja'] == 203750444){
//         if (($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao) or ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao2)) {
//             $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//             $resultm += $sum;
//             $nfatm++;
//         }
//     } 
//     else {
//         if (($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao) or ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao2)) {
//             $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//             $resultf += $sum;
//             $nfatf++;
//         }
//     }
// }
// print_r("Soma das notas Matriz R$".$resultm);
// print_r("Total de vendas Matriz: ".$nfatm);
// print_r("Soma das notas Filial R$".$resultf);
// print_r("Total de vendas Filial: ".$nfatf);

// END SOMATORIA DE NOTAS AUTORIZADAS E COM DANFE POR EMPRESA

// START CONTAGEM VENDAS POR ESTADO
// for ($i=0; $i < $size ; $i++) { 
//     if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['cliente']['uf'] == 'SP') {
//         if (($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao) or ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao2)) {
//             $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//             $resultsp += $sum;
//             $nfatsp++;
//         }
//     }
// }
// print_r("Soma das notas São Paulo R$".$resultsp);
// print_r("Total de vendas São Paulo: ".$nfatsp);

// END CONTAGEM VENDAS POR ESTADO

// START CONTAGEM VENDAS POR VENDEDOR

// for ($i=0; $i < $size ; $i++) { 
//     if ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['vendedor'] == 'Leonardo de Oliveira Rocha') {
//         if (($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao) or ($retorno['retorno']['notasfiscais'][$i]['notafiscal']['situacao'] == $situacao2)) {
//             $sum = $retorno['retorno']['notasfiscais'][$i]['notafiscal']['valorNota'];
//             $resultleo += $sum;
//             $nfatleo++;
//         }
//     }
// }
// print_r("Soma das notas Leonardo R$".$resultleo);
// print_r("Total de vendas Leonardo: ".$nfatleo);


// echo "<pre>";
// print_r($retorno['retorno']['notasfiscais'][1]['notafiscal']['numero']);

// EXIBIR ARRAY 
  print_r($retorno);
// echo "</pre>";
function executeGetOrder($url, $apikey, $dati, $datf){
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey . '&filters=dataEmissao[' . $dati . '%20TO%20' . $datf .']');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handle);
    curl_close($curl_handle);
    return json_decode($response,true);
} 

function executeGetProducts($url, $apikey){
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handle);
    curl_close($curl_handle);
    return json_decode($response,true);
} ?>

<!-- <?php  
$apikey = "98a15c2ad4db7ed4a3fa9dc9866702a27c63993717d626abccbfccc449f645142b637c38";
$documentNumber = 1148;
$documentSerie = 1;
$outputType = "json";
$url = 'https://bling.com.br/Api/v2/notafiscal/' . $documentNumber . '/'. $documentSerie . '/' . $outputType;
$retorno = executeGetFiscalDocument($url, $apikey);
echo $retorno;
function executeGetFiscalDocument($url, $apikey){
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handle);
    curl_close($curl_handle);
    return $response;
}?> -->