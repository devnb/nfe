<?php
require_once "vendor/autoload.php";

$nfe = new Make();
$std = new \stdClass();

$std->versao = '4.00';
$std->Id = null;
$std->pk_nItem = '';
$nfe->taginfNFe($std);

$std = new \stdClass();
$std->cUF = 35; //coloque um código real e válido
$std->cNF = '80070008';
$std->natOp = 'VENDA';
$std->mod = 55;
$std->serie = 1;
$std->nNF = 10;
$std->dhEmi = '2018-07-27T20:48:00-02:00';
$std->dhSaiEnt = '2018-07-27T20:48:00-02:00';
$std->tpNF = 1;
$std->idDest = 1;
$std->cMunFG = 3506003; //Código de município precisa ser válido
$std->tpImp = 1;
$std->tpEmis = 1;
$std->cDV = 2;
$std->tpAmb = 2; // Se deixar o tpAmb como 2 você emitirá a nota em ambiente de homologação(teste) e as notas fiscais aqui não tem valor fiscal
$std->finNFe = 1;
$std->indFinal = 0;
$std->indPres = 0;
$std->procEmi = '0';
$std->verProc = 1;
$nfe->tagide($std);

$std = new \stdClass();
$std->xNome = 'Razão social válida';
$std->IE = 'IE válido';
$std->CRT = 3;
$std->CNPJ = 'CNPJ válido';
$nfe->tagemit($std);

$std = new \stdClass();
$std->xLgr = "Rua Teste";
$std->nro = '203';
$std->xBairro = 'Centro';
$std->cMun = 3506003; //Código de município precisa ser válido e igual o  cMunFG
$std->xMun = 'Bauru';
$std->UF = 'SP';
$std->CEP = '80045190';
$std->cPais = '1058';
$std->xPais = 'BRASIL';
$nfe->tagenderEmit($std);

$std = new \stdClass();
$std->xNome = 'Empresa destinatário teste';
$std->indIEDest = 2;
$std->IE = 'IE válido';
$std->CNPJ = 'CNPJ válido';
$nfe->tagdest($std);

$std = new \stdClass();
$std->xLgr = "Rua Teste";
$std->nro = '203';
$std->xBairro = 'Centro';
$std->cMun = '3506003';
$std->xMun = 'Bauru';
$std->UF = 'SP';
$std->CEP = '80045190';
$std->cPais = '1058';
$std->xPais = 'BRASIL';
$nfe->tagenderDest($std);

$std = new \stdClass();
$std->item = 1;
$std->cEAN = 'SEM GTIN';
$std->cEANTrib = 'SEM GTIN';
$std->cProd = '0001';
$std->xProd = 'Produto teste';
$std->NCM = '84669330';
$std->CFOP = '5102';
$std->uCom = 'PÇ';
$std->qCom = '1.0000';
$std->vUnCom = '10.99';
$std->vProd = '10.99';
$std->uTrib = 'PÇ';
$std->qTrib = '1.0000';
$std->vUnTrib = '10.99';
$std->indTot = 1;
$nfe->tagprod($std);

$std = new \stdClass();
$std->item = 1;
$std->vTotTrib = 10.99;
$nfe->tagimposto($std);

$std = new \stdClass();
$std->item = 1;
$std->orig = 0;
$std->CST = '00';
$std->modBC = 0;
$std->vBC = '0.20';
$std->pICMS = '18.0000';
$std->vICMS = '0.04';
$nfe->tagICMS($std);

$std = new \stdClass();
$std->item = 1;
$std->cEnq = '999';
$std->CST = '50';
$std->vIPI = 0;
$std->vBC = 0;
$std->pIPI = 0;
$nfe->tagIPI($std);

$std = new \stdClass();
$std->item = 1;
$std->CST = '07';
$std->vBC = 0;
$std->pPIS = 0;
$std->vPIS = 0;
$nfe->tagPIS($std);

$std = new \stdClass();
$std->item = 1;
$std->vCOFINS = 0;
$std->vBC = 0;
$std->pCOFINS = 0;

$nfe->tagCOFINSST($std);

$std = new \stdClass();
$std->item = 1;
$std->CST = '01';
$std->vBC = 0;
$std->pCOFINS = 0;
$std->vCOFINS = 0;
$std->qBCProd = 0;
$std->vAliqProd = 0;
$nfe->tagCOFINS($std);

$std = new \stdClass();
$std->vBC = '0.20';
$std->vICMS = 0.04;
$std->vICMSDeson = 0.00;
$std->vBCST = 0.00;
$std->vST = 0.00;
$std->vProd = 10.99;
$std->vFrete = 0.00;
$std->vSeg = 0.00;
$std->vDesc = 0.00;
$std->vII = 0.00;
$std->vIPI = 0.00;
$std->vPIS = 0.00;
$std->vCOFINS = 0.00;
$std->vOutro = 0.00;
$std->vNF = 11.03;
$std->vTotTrib = 0.00;
$nfe->tagICMSTot($std);

$std = new \stdClass();
$std->modFrete = 1;
$nfe->tagtransp($std);

$std = new \stdClass();
$std->item = 1;
$std->qVol = 2;
$std->esp = 'caixa';
$std->marca = 'OLX';
$std->nVol = '11111';
$std->pesoL = 10.00;
$std->pesoB = 11.00;
$nfe->tagvol($std);

$std = new \stdClass();
$std->nFat = '002';
$std->vOrig = 100;
$std->vLiq = 100;
$nfe->tagfat($std);

$std = new \stdClass();
$std->nDup = '001';
$std->dVenc = date('Y-m-d');
$std->vDup = 11.03;
$nfe->tagdup($std);

$std = new \stdClass();
$std->vTroco = 0;
$nfe->tagpag($std);

$std = new \stdClass();
$std->indPag = 0;
$std->tPag = "01";
$std->vPag = 10.99;
$std->indPag=0;
$nfe->tagdetPag($std);

$xml = $nfe->getXML(); // O conteúdo do XML fica armazenado na variável $xml