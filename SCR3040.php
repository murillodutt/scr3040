<?php

// Códigos de serviço do BCB - SCR3040
// Última atualização 06/07/2011 

/*
----------
  INDÍCE
----------

use 'include 'SCR3040.php';'

$codVencimento -  {Anexo 1: Código do Vencimento - (atributo vCOD, onde COD = domínio da tabela abaixo)}
$codNatOp -  {Anexo 2: Natureza da Operação - NatuOp}
$codModalidade -  {Anexo 3: Modalidade Operação - Mod}
$codVarCambial -  {Anexo 4: Origem dos Recursos - OrigemRec}
$codIndx -  {Anexo 5: Taxa referencial ou Indexador - Indx}
$codVarCamp -  {Anexo 6: Variação Cambial - VarCamb}
$codLocaliz -  {Anexo 7: Localização - Localiz}
$codCaracEspecial -  {Anexo 8: Característica Especial - CaracEspecial}
$codTpCtrl -  {Anexo 10: Tipo de Controle - TpCtrl}
$codTp -  {Anexo 11: Tipo de Pessoa - Tp}
$codGarantias -  {Anexo 12: Garantias}
$codFaixaVlr -  {Anexo 14: Faixa de valor da operação - FaixaVlr}
$codTpArq -  {Anexo 15: Tipo de Arquivo - TpArq}
$codClassCli -  {Anexo 16: Classificação de risco - ClassCli}
$codClassOp -  {Anexo 17: Classificação de risco - ClassOp }
$codVincME -  {Anexo 18: Vinculação à Moeda Estrangeira - VincME}
$codPrzProvm -  {Anexo 19: Prazo em Dobro para Provisionamento - PrzProvm}
$codAutorzc -  {Anexo 20: Autorização - Autorzc}
$codPorteCliPJ -  {Anexo 24: Porte do Cliente PJ - PorteCliPJ}
$codPorteCliPF -  {Anexo 25: Porte do Cliente PF - PorteCliPF}
$codOperacao -  {Anexo 28: Desempenho da Operação}
$codIdentExt -  {Anexo 29: Tipo identificação do cliente no exterior}
$codPais -  {Anexo 30: Código do país}
$codTipBem -  {Anexo 31: Tipo do bem}
$codSitSicor -  {Anexo 32: Situação Sicor}
$codBonusReb -  {Anexo 33: Tipo de bônus/rebate}
$codMotSaidIPOC -  {(NR) Anexo 34: Motivo de saída IPOC}
$codMotReestruturac -  {Anexo 35: Motivo de Reestruturação}
$codTipInstrumento -  {Anexo 36: Tipo de Instrumento}
$codTipUsoReculat {(NR) Anexo 37: Tipo de Uso Regulatório}

*/

// Anexo 1: Código do Vencimento - (atributo vCOD, onde COD = domínio da tabela abaixo)
// -------------------------------------------------------------------------------------
$codVencimento = [
    // Limite de crédito
    "20"  => "Limite de crédito com vencimento até 360 dias", 
    "40"  => "Limite de crédito com vencimento acima de 360 dias",

    // Créditos a liberar
    "60"  => "Créditos a liberar até 360 dias",
    "80"  => "Créditos a liberar acima de 360 dias",

    // Créditos a vencer
    "110" => "Créditos a vencer até 30 dias", 
    "120" => "Créditos a vencer de 31 a 60 dias",
    "130" => "Créditos a vencer de 61 a 90 dias",
    "140" => "Créditos a vencer de 91 a 180 dias",
    "150" => "Créditos a vencer de 181 a 360 dias",
    "160" => "Créditos a vencer de 361 a 720 dias",
    "165" => "Créditos a vencer de 721 a 1080 dias",
    "170" => "Créditos a vencer de 1081 a 1440 dias",
    "175" => "Créditos a vencer de 1441 a 1800 dias",
    "180" => "Créditos a vencer de 1801 a 5400 dias",
    "190" => "Créditos a vencer acima de 5400 dias",
    "199" => "Créditos a vencer com prazo indeterminado",
    "205" => "Créditos vencidos de 1 a 14 dias",  

    // Créditos vencidos de 205 a 290
    "210" => "Créditos vencidos de 15 a 30 dias",
    "220" => "Créditos vencidos de 31 a 60 dias",
    "230" => "Créditos vencidos de 61 a 90 dias",
    "240" => "Créditos vencidos de 91 a 120 dias",
    "245" => "Créditos vencidos de 121 a 150 dias",
    "250" => "Créditos vencidos de 151 a 180 dias",
    "255" => "Créditos vencidos de 181 a 240 dias",
    "260" => "Créditos vencidos de 241 a 300 dias",
    "270" => "Créditos vencidos de 301 a 360 dias",
    "280" => "Créditos vencidos de 361 a 540 dias",
    "290" => "Créditos vencidos acima de 540 dias",

    // Créditos baixados como prejuízo
    "310" => "Créditos baixados como prejuízo até 12 meses",
    "320" => "Créditos baixados como prejuízo há mais de 12m e até 48 meses",
    "330" => "Créditos baixados como prejuízo há mais de 48 meses",
];


// Anexo 2: Natureza da Operação - NatuOp	
// ---------------------------------------
$codNatOp = [
    "01" => "Operações concedidas pela própria instituição",
    "02" => "Operações adquiridas em negociação com pessoa integrante do SFN sem retenção substancial  de  risco e de benefícios ou de controle pelo  interveniente ou cedente",
    "03" => "Operações adquiridas em negociação com pessoa não integrante do SFN sem retenção substancial de risco e de benefícios ou de controle pelo interveniente ou cedente",
    "04" => "Operações adquiridas em negociação com pessoa integrante do SFN com retenção substancial de risco e de benefícios ou de controle pelo interveniente ou cedente",
    "05" => "Operações adquiridas em negociação com pessoa não integrante do SFN com retenção substancial de risco e de benefícios ou de controle pelo interveniente ou cedente (utilização exclusiva por FIDCs)",
    "11" => "Operações transferidas a pessoa integrante do SFN em negociação com retenção substancial  de risco e de benefícios ou de controle pelo cedente",
    "12" => "Operações transferidas a pessoa não integrante do SFN e controlada, em negociação sem retenção substancial  de risco e de benefícios ou de controle pelo cedente",
    "13" => "Operações transferidas a pessoa não integrante do SFN e controlada, em negociação com retenção substancial  de risco e de benefícios ou de controle pelo cedente",
    "14" => "Operações transferidas a pessoa não integrante do SFN e não controlada, em negociação com retenção substancial  de risco e de benefícios ou de controle pelo cedente",
    "15" => "Operações transferidas a fundo de investimento com retenção substancial de riscos e benefícios",
    "16" => "Operações transferidas a fundo de investimento administrado pela instituição financeira, sem retenção substancial de riscos e benefícios ou de controle",
    "32" => "Operações realizadas por dependências e empresas localizadas no exterior que  tenham  suas demonstrações consolidadas nos termos da Resolução nº 2.723",
    "33" => "Operações realizadas por empresas que tenham  suas demonstrações consolidadas nos termos da Resolução nº 2.723",
    "34" => "(NR) Operações de crédito de programas ou fundos públicos",
];


// Anexo 3: Modalidade Operação - Mod 
// -----------------------------------    
$codModalidade = [
    // 01 Adiantamentos a depositantes
    "0101" => "Adiantamentos a depositantes",

    // 02 Empréstimos
    "0201" => "cheque especial e conta garantida",
    "0202" => "crédito pessoal - com consignação em folha de pagam.",
    "0203" => "crédito pessoal - sem consignação em folha de pagam.",
    "0204" => "crédito rotativo vinculado a cartão de crédito",
    "0205" => "capital de giro com prazo de vencimento inferior a 30 d",
    "0206" => "capital de giro com prazo vencim. igual ou superior 30 d",
    "0207" => "vendor",
    "0208" => "compror",
    "0209" => "ARO - adiantamento de receitas orçamentárias",
    "0210" => "cartão de crédito – compra, fatura parcelada ou saque financiado pela instituição emitente do cartão",
    "0211" => "home equity",
    "0212" => "microcrédito",
    "0213" => "cheque especial",
    "0214" => "conta garantida",
    "0215" => "capital de giro com prazo de vencimento até 365 d",
    "0216" => "capital de giro com prazo vencimento superior 365 d", 
    "0217" => "capital de giro com teto rotativo",
    "0218" => "cartão de crédito - não migrado",
    "0250" => "recebíveis adquiridos",
    "0290" => "financiamento de projeto",
    "0299" => "outros empréstimos",

    // 03 Títulos descontados Direitos creditórios descontados
    "0301" => "desconto de duplicatas",
    "0302" => "desconto de cheques",
    "0303" => "antecipação de fatura de cartão de crédito",
    "0398" => "outros direitos creditórios descontados",
    "0399" => "outros títulos descontados",

    // 04 Financiamentos
    "0401" => "aquisição de bens – veículos automotores",
    "0402" => "aquisição de bens – outros bens",
    "0403" => "microcrédito",
    "0404" => "vendor",
    "0405" => "compror",
    "0406" => "cartão de crédito – compra ou fatura parcelada pela instituição financeira emitente do cartão",
    "0407" => "aquisição de bens – veículos automotores acima de 2 toneladas",
    "0440" => "financiamentos agroindustriais",
    "0450" => "recebíveis adquiridos",
    "0490" => "financiamento de projeto",
    "0499" => "outros financiamentos",

    // 05 Financiamentos à exportação
    "0501" => "financiamento à exportação",
    "0502" => "adiantamento sobre contratos de câmbio",
    "0503" => "adiantamento sobre cambiais entregues",
    "0504" => "créd decorrentes de contratos de exportação-export note",
    "0590" => "financiamento de projeto",
    "0599" => "outros financiamentos à exportação",

    // 06 Financiamentos à importação
    "0601" => "financiamento à importação",
    "0690" => "financiamento de projeto",

    // 07 Financiamentos com interveniência
    "0701" => "aquisição de bens com interveniência – veículos autom.",
    "0702" => "aquisição de bens com interveniência – outros bens",
    "0790" => "financiamento de projeto",
    "0799" => "outros financiamentos com interveniência",

    // 08 Financiamentos rurais e agroindustriais
    "0801" => "custeio e pré-custeio",
    "0802" => "investimento e capital de giro de financiam. agroindustr.",
    "0803" => "comercialização e pré-comercialização",
    "0804" => "industrialização",
    "0890" => "financiamento de projeto-",

    // 09 Financiamentos imobiliários
    "0901" => "financiamento habitacional – SFH",
    "0902" => "financiamento habitacional – exceto SFH",
    "0903" => "financiamento imobiliário – empreendim, exceto habitac.",
    "0990" => "financiamento de projeto",

    // 10 Financiamentos de títulos e valores mobiliários
    "1001" => "financiamento de TVM",

    // 11 Financiamentos de infraestrutura e desenvolvimento
    "1101" => "financiamento de infraestrutura e desenvolvimento",
    "1190" => "financiamento de projeto",

    // 12 Operações de arrendamento
    "1201" => "arrendamento financeiro exceto veículos automotores e imóveis",
    "1202" => "arrendamento financeiro imobiliário",
    "1203" => "subarrendamento",
    "1205" => "arrendamento operacional",
    "1206" => "arrendamento financeiro de veículos automotores",
    "1207" => "arrendamento financeiro de veículos automotores acima de 2 toneladas",
    "1290" => "financiamento de projeto",

    // 13 Outros créditos
    "1301" => "avais e fianças honrados",
    "1302" => "devedores por compra de valores e bens",
    "1303" => "títulos e créditos a receber",
    "1304" => "cartão de crédito - compra à vista e parcelado lojista",
    "1350" => "recebíveis adquiridos",
    "1390" => "financiamento de projeto",
    "1399" => "outros com característica de crédito",

    // 14 Relações Interfinanceiras
    "1401" => "repasses interfinanceiros",
    "1402" => "recebíveis de arranjo de pagamento",
    "1403" => "outros valores a receber relativos a transações de pagamento",

    // 15 Coobrigações
    "1501" => "beneficiários de garantias prestadas para operações com PJ financeira",
    "1502" => "beneficiários de garantias prestadas para operações com outras pessoas",
    "1503" => "beneficiários de garantias prestadas para fundos constitucionais",
    "1504" => "beneficiários de garantias prestadas para participação em processo licitatório",
    "1505" => "carta de crédito de importação",
    "1511" => "coobrigação assumida em cessão com coobrigação para pessoa integrante do SFN",
    "1512" => "coobrigação assumida em cessão com coobrigação para pessoa não integrante do SFN, inclusive securitizadora e fundos de investimento",
    "1513" => "beneficiários de outras coobrigações",
    "1590" => "financiamento de projeto",
    "1599" => "beneficiários de outras garantias prestadas",

    // 18 Títulos de crédito (fora da carteira classificada)
    "1801" => "CPR - Cédula de Produto Rural",
    "1802" => "EN - Nota de Exportação",
    "1803" => "Debêntures",
    "1804" => "Notas comerciais",
    "1899" => "outros",

    // 19 (NR) Limite
    "1901" => "limite contratado e não utilizado global",
    "1902" => "cheque especial",
    "1903" => "conta garantida",
    "1904" => "cartão de crédito",
    "1905" => "capital de giro",
    "1906" => "crédito pessoal",
    "1907" => "vendor",
    "1908" => "compror",
    "1909" => "descontos",
    "1910" => "aquisição de bens",
    "1999" => "outros",

    // 20 Retenção de risco  
    "2001" => "retenção de risco assumida por aquisição de cotas de fundos",
    "2002" => "retenção de risco assumida por aquisição de instrumentos com lastros em operações de crédito",
];


// Anexo 4: Origem dos Recursos - OrigemRec
// ----------------------------------------
$codVarCambial = [
    // 01 Recursos livres
    "0101" => "não liberados",
    "0102" => "repasses do exterior ",
    "0199" => "outros",

    // 02 Recursos direcionados
    "0201" => "não liberados",
    "0202" => "BNDES - Banco Nacional de Desenvolvimento Econômico e Social",
    "0203" => "Finame - Agência Especial de Financiamento Industrial",
    "0204" => "FCO - Fundo Constitucional do Centro Oeste",
    "0205" => "FNE - Fundo Constitucional do Nordeste",
    "0206" => "FNO - Fundo Constitucional do Norte",
    "0207" => "fundos estaduais ou distritais",
    "0208" => "recursos captados em depósitos de poupança pelas entidades integrantes do SBPE destinados à operações de financiamento imobiliário",
    "0209" => "financiamentos concedidos ao amparo de recursos controlados do crédito rural",
    "0210" => "repasses de organismos multilaterais no exterior",
    "0211" => "outros repasses do exterior",
    "0212" => "fundos ou programas especiais do governo federal",
    "0213" => "FGTS – Fundo de Garantia do Tempo de Serviço",
    "0299" => "outros",
];


// Anexo 5: Taxa referencial ou Indexador - Indx 
// ---------------------------------------------
$codIndx = [
    // 1 Prefixado
    "11" => "Prefixado",

    // 2 Pós-fixado
    "21" => "TR / TBF",
    "22" => "TJLP",
    "23" => "Libor",
    "24" => "TLP",
    "29" => "Outras taxas pós-fixadas",    

    // 3 Flutuantes
    "31" => "CDI",
    "32" => "Selic",
    "39" => "Outras taxas flutuantes",

    // 4 Índices de preços
    "41" => "IGPM",
    "42" => "IPCA",
    "43" => "IPCC",
    "49" => "Outros índices de preço",

    // 5 Crédito rural
    "51" => "TCR - pré",
    "52" => "TCR - pós",
    "53" => "TRFC - pré",
    "54" => "TRFC - pós",

    // 9 Outros indexadores
    "99" => "Outros indexadores",
];


// Anexo 6: Variação Cambial - VarCamb
// -----------------------------------
$codVarCamp = [
    "790"=> "Real",
    "220"=> "Dólar dos EUA",
    "425"=> "Franco Suíço",
    "470"=> "Iene",
    "540"=> "Libra Esterlina",
    "706"=> "Peso Argentino",
    "715"=> "Peso Chileno",
    "978"=> "Euro",
    "999"=> "Outras moedas",
];


// Anexo 7: Localização - Localiz
// ------------------------------
$codLocaliz = [
    "10012" => "AC - Acre",
    "10036" => "AL - Alagoas",
    "10013" => "AM - Amazonas",
    "10014" => "AP - Amapá",
    "10039" => "BA - Bahia",
    "10032" => "CE - Ceará",
    "10096" => "DF - Distrito Federal",
    "10052" => "ES - Espírito Santo",
    "10092" => "GO - Goiás",
    "10030" => "MA - Maranhão",
    "10050" => "MG - Minas Gerais",
    "10091" => "MS - Mato Grosso do Sul",
    "10090" => "MT - Mato Grosso",
    "10017" => "PA - Pará",
    "10034" => "PB - Paraíba",
    "10035" => "PE - Pernambuco",
    "10031" => "PI - Piauí",
    "10073" => "PR - Paraná",
    "10054" => "RJ - Rio de Janeiro",
    "10033" => "RN - Rio Grande do Norte",
    "10093" => "RO - Rondônia",
    "10018" => "RR - Roraima",
    "10077" => "RS - Rio Grande do Sul",
    "10075" => "SC - Santa Catarina",
    "10038" => "SE - Sergipe",
    "10058" => "SP - São Paulo",
    "10094" => "TO - Tocantins",
    "10100" => "Créditos concedidos no exterior",
];


// Anexo 8: Característica Especial - CaracEspecial
// ------------------------------------------------
$codCaracEspecial = [
    "1"  => "renegociação",
    "2"  => "recuperação do prejuízo",
    "3"  => "renegociação nos termos da Res. 2471 (Pesa)",
    "4"  => "renegociação nos termos da Recoop",
    "5"  => "dívida considerada não vencível por força de norma",
    "6"  => "dívida com data de vencimento postergada por força de norma",
    "7"  => "pagamento de operação deferido por órgão ou programa oficial aguardando liberação dos recursos",
    "9"  => "cobrança judicial",
    "10" => "operação vinculada",
    "11" => "operações em inadimplemento por prazo igual ou superior a 60 meses, na data-base ou operações com vencimentos baixados como prejuízo há mais de 48 meses ",
    "12" => "operação portada (advinda segundo Resolução nº 3.401) ",
    "13" => "operação de  varejo",
    "14" => "operações concedidas com destaque de capital segundo a Resolução nº 4.589",
    "15" => "operações direcionadas segundo a Lei 10.735",
    "16" => "operação alienada ao FGC conforme Resolução 4.115 de 26 de julho de 2012",
    "17" => "taxa regulada",
    "18" => "financiamento do saldo remanescente do crédito rotativo, conforme art. 2º da Resolução 4.549.",
    "19" => "ativo problemático",
    "20" => "operação com parte relacionada",
    "21" => "Atividade Produtiva",
    "22" => "Operação contratada e cedida sem retenção substancial de risco na mesma data-base ",
    "23" => "Renegociação Covid-19  (Resolução 4.803/2020)",
    "24" => "PESE - Programa Emergencial de Suporte a Empregos (MP 944/2020 e Res.4800/2020)",
    "25" => "(NR) Limite não cancelável unilateralmente",
    "35" => "operações cedidas nos termos da Resolução 3.533/08.",
    "36" => "(NR) Operações com garantias em alienação fiduciária compartilhada (Resolução 4.837/2020)",
    "99" => "outras características especiais (domínios 03 a 10, 12 e 14) ",
];

// Anexo 10: Tipo de Controle - TpCtrl
// -----------------------------------
$codTpCtrl = [
    "01" => "privado",
    "02" => "público federal",
    "03" => "público estadual ou distrital",
    "04" => "público municipal",
];

// Anexo 11: Tipo de Pessoa - Tp
// -----------------------------
$codTp = [
    "1" => "pessoa física - CPF",
    "2" => "pessoa jurídica - CNPJ",
    "3" => "pessoa física no exterior",
    "4" => "pessoa jurídica no exterior",
    "5" => "pessoa física sem CPF",
    "6" => "pessoa jurídica sem CNPJ",
];

// Anexo 12: Garantias
// -------------------

$codGarantias = [
    // 01 Cessão de direitos creditórios
    "0101" => "duplicatas",
    "0102" => "cheques",
    "0103" => "fatura de cartão de crédito",
    "0104" => "aplicações financeiras – renda fixa",
    "0105" => "aplicações financeiras – renda variável",
    "0106" => "ações e debêntures",
    "0107" => "tributos e receitas orçamentárias",
    "0108" => "direitos sobre aluguéis",
    "0199" => "notas promissórias e outros direitos de crédito",
    "0101" => "duplicatas",

    // 02 Caução
    "0201" => "duplicatas",
    "0202" => "cheques",
    "0203" => "fatura de cartão de crédito",
    "0204" => "aplicações financeiras – renda fixa",
    "0205" => "aplicações financeiras – renda variável",
    "0206" => "ações e debêntures",
    "0207" => "tributos e receitas orçamentárias",
    "0208" => "direitos sobre aluguéis",
    "0209" => "depósito de títulos emitidos pelas entidades de que trata o art. 23, incisos I e II, que atendam, cumulativamente, aos seguintes requisitos: (artigo 39, inciso III, alíneas a, b, c e d da Circular nº 3.644 de 2013, com nova redação dada pelo artigo 1º da Circular nº 3.714 de 2014) 
                \n a) sejam mantidos na própria instituição ou custodiados em seu nome
                \n b) tenham por finalidade exclusiva a constituição de garantia para as operações a que se vinculem
                \n c) estejam sujeitos a movimentação, exclusivamente, por ordem da instituição depositária
                \n d) estejam imediatamente disponíveis para a instituição depositária, no caso de inadimplência do devedor ou de necessidade de realização da garantia prestada",
    "0210" => "depósitos à vista, depósitos a prazo, depósitos de poupança, em ouro ou em títulos públicos federais de que trata o art. 36, § 3º, inciso V - artigo 37, inciso VIII da Circular nº 3.644 de 2013",
    "0299" => "notas promissórias e outros direitos de crédito",

    // 03 Penhor
    "0321" => "produtos agropecuários - com warrant",
    "0322" => "produtos agropecuários - sem warrant",
    "0323" => "equipamentos",
    "0324" => "veículos",
    "0325" => "imóveis",
    "0350" => "civil",
    "0399" => "outros ",

    // 04 Alienação Fiduciária
    "0423" => "equipamentos",
    "0424" => "veículos",
    "0426" => "imóveis residenciais",
    "0427" => "outros imóveis",
    "0428" => "Bens e direitos integrantes de patrimônio de afetação",
    "0499" => "outros ",

    // 05 Hipoteca
    "0562" => "outros graus",
    "0563" => "primeiro grau – imóveis residenciais",
    "0564" => "primeiro grau – outros tipos de imóveis",
    "0565" => "Primeiro Grau - bens e direitos integrantes de patrimônio de afetação",

    // 06 Operações garantidas pelo governo
    "0671" => "federal",
    "0672" => "estadual ou distrital ",
    "0673" => "municipal",
    "0674" => "garantia prestada pelo Tesouro Nacional ou pelo Banco Central do Brasil - artigo 37, inciso II da Circular nº 3.644, de 2013",

    // 07 Outras garantias não fidejussórias
    "0799"=> "outras",

    // 08 Seguros e assemelhados
    "0881" => "seguro rural",
    "0882" => "Proagro",
    "0883" => "SBCE - Sociedade Brasileira de Crédito à Exportação",
    "0884" => "FCVS - Fundo de Compensação de Variações Salariais",
    "0885" => "apólices de crédito a exportação",
    "0886" => "fundo garantidor / de aval",
    "0887" => "CCR - Convênio de Créditos Recíprocos",
    "0888" => "FGPC - Fundo de Garantia p/ a Promoção da Competit.",
    "0889" => "FGTS - Fundo de Garantia do Tempo de Serviço",
    "0890" => "FGI - Fundo Garantidor para Investimentos",
    "0899" => "outros seguros e assemelhados",    

    // 09 Garantia fidejussória
    "0901" => "pessoa física",
    "0902" => "pessoa jurídica",
    "0903" => "pessoa física no exterior",
    "0904" => "pessoa jurídica no exterior",

    // 10 Bens arrendados
    "1001" => "Veículos automotores",
    "1002" => "Outros bens",

    // 11 Garantias internacionais
    "01" => "Mitigadoras",
    "02" => "Não Mitigadoras",    

    // 12 Operações garantidas por outras entidades
    "1201" => "Entidades Multilaterais de Desenvolvimento (EMD) - artigo 37, inciso III da Circular nº 3.644 de 2013",
    "1202" => "garantia prestada por fundos ou quaisquer outros mecanismos de cobertura do risco de crédito instituídos pela Constituição Federal ou lei federal, por lei do Distrito Federal, estadual ou municipal, ou criados por organismos oficiais ou privados, desde que os recursos garantidores das operações estejam disponíveis ou aplicados em ativos de liquidez imediata e segregados em montante equivalente ao das garantias prestadas pelos referidos fundos ou mecanismos, de modo a cobrir, de imediato, eventual inadimplência por parte do respectivo tomador - artigo 37, inciso V da Circular nº 3.644 de 2013",
    "1203" => "garantia prestada pelo FGPC, criado pela Lei nº 9.531, de 10 de dezembro de 1997, a operações de financiamento realizadas por instituições financeiras, inclusive pelo BNDES, com recursos próprios e da Finame - artigo 37, inciso VI da Circular nº 3.644 de 2013",
    "1204" => "garantia prestada por fundos com as seguintes características, cumulativamente: (artigo 39, inciso II da Circular nº 3.644 de 2013)
            \n a) tenham por finalidade, alternativa ou cumulativamente, garantir o risco em operações de crédito, direta ou indiretamente
            \n b) sejam criados, administrados, geridos e representados judicial e extrajudicialmente por instituição financeira controlada, direta ou indiretamente, pela União, exceto aqueles enquadrados no art. 37
            \n c) limitem o montante das garantias prestadas (alavancagem limitada), de forma a resguardar, mesmo em situações de elevada inadimplência, o patrimônio do fundo 
            \n d) caso prevejam limitação para a cobertura da inadimplência suportada pelo fundo (stop-loss), estabeleçam os respectivos limites de maneira a permitir a efetiva mitigação do risco de crédito das operações garantidas",    

    // 13 Acordos de Compensação
    "1301" => "acordos para a compensação e liquidação de obrigações no âmbito do SFN, nos termos da Resolução nº 3.263, de 2005 - artigo 37, inciso IV da Circular nº 3.644 de 2013",
];


// Anexo 14: Faixa de valor da operação - FaixaVlr
// -----------------------------------------------
$codFaixaVlr = [
    "1" => "acima de 0 a R$ 99,99",
    "2" => "R$ 100,00 a R$ 499,99",
    "3" => "R$ 500,00 a R$ 999,99",
    "4" => "R$ 1.000,00 a R$ 4.999,99",
    "5" => "acima de R$4999,99",
];


// Anexo 15: Tipo de Arquivo - TpArq
// ---------------------------------
$codTpArq = [
    "F" => "Arquivo final",
];


// Anexo 16: Classificação de risco - ClassCli
// -------------------------------------------
$codClassCli = [
    "AA" => "Classificação de risco AA",
    "A"  => "Classificação de risco A",
    "B"  => "Classificação de risco B",
    "C"  => "Classificação de risco C",
    "D"  => "Classificação de risco D",
    "E"  => "Classificação de risco E",
    "F"  => "Classificação de risco F",
    "G"  => "Classificação de risco G",
    "H"  => "Classificação de risco H",
    "01" => "Classificação de risco default para Fundos Administrados",
];


// Anexo 17: Classificação de risco - ClassOp 
// ------------------------------------------

$codClassOp = [
    "AA" => "Classificação de risco AA",
    "A"  => "Classificação de risco A",
    "B"  => "Classificação de risco B",
    "C"  => "Classificação de risco C",
    "D"  => "Classificação de risco D",
    "E"  => "Classificação de risco E",
    "F"  => "Classificação de risco F",
    "G"  => "Classificação de risco G",
    "H"  => "Classificação de risco H",
    "HH" => "Classificação de risco HH - créditos baixados como prejuízo",
    "01" => "Classificação de risco default para Fundos Administrados",
];


// Anexo 18: Vinculação à Moeda Estrangeira - VincME
// -------------------------------------------------
$codVincME = [
    "S" => "Sim",
    "N" => "Não",
];


// Anexo 19: Prazo em Dobro para Provisionamento - PrzProvm
// --------------------------------------------------------
$codPrzProvm = [
    "S" => "Sim",
    "N" => "Não - default",
];


// Anexo 20: Autorização - Autorzc
// -------------------------------
$codAutorzc = [
   "S"=> "Sim",
   "N"=> "Não - default",
];


// Anexo 24: Porte do Cliente PJ - PorteCliPJ
// ------------------------------------------
$codPorteCliPJ = [
    "0" => "Indisponível",
    "1" => "Micro",
    "2" => "Pequeno",
    "3" => "Médio",
    "4" => "Grande",
];

// Anexo 25: Porte do Cliente PF - PorteCliPF
// ------------------------------------------
$codPorteCliPF = [
    "0" => "Indisponível",
    "1" => "sem rendimento",
    "2" => "até 1 salário mínimo",
    "3" => "Mais de 1 a 2 salários mínimos",
    "4" => "Mais de 2 a 3 salários mínimos",
    "5" => "Mais de 3 a 5 salários mínimos ",
    "6" => "Mais de 5 a 10 salários mínimos",
    "7" => "Mais de 10 a 20 salários mínimos",
    "8" => "Acima de 20 salários mínimos",
];


// Anexo 28: Desempenho da Operação
// --------------------------------
$codOperacao = [
    "01" => "Operações a Vencer",
    "02" => "Operações Vencidas de 15 a 30 dias",
    "03" => "Operações Vencidas de 31 a 60 dias",
    "04" => "Operações Vencidas de 61 a 90 dias",
    "05" => "Operações Vencidas acima de 90 dias",
    "06" => "Operações em Prejuízo ",
];

// Anexo 29: Tipo identificação do cliente no exterior
// ---------------------------------------------------
$codIdentExt = [
    "01" => "LEI – Legal Entity Identifier",
    "02" => "Número da identificação tributária vigente no país",
    "99" => "Outro código de identificação aceito na jurisdição",
];


// Anexo 30: Código do país	
// -------------------------
$codPais = [
    "004" => "Afeganistão",
    "008" => "Albânia",
    "010" => "Antárctica",
    "012" => "Argélia",
    "016" => "Samoa Americana",
    "020" => "Andorra",
    "024" => "Angola",
    "028" => "Antígua e Barbuda",
    "031" => "Azerbaijão",
    "032" => "Argentina",
    "036" => "Austrália",
    "040" => "Áustria",
    "044" => "Bahamas",
    "048" => "Bahrain",
    "050" => "Bangladesh",
    "051" => "Armênia",
    "052" => "Barbados",
    "056" => "Bélgica",
    "060" => "Bermudas",
    "064" => "Butão",
    "068" => "Bolívia",
    "070" => "Bósnia e Herzegovina",
    "072" => "Botswana",
    "074" => "Ilha Bouvet",
    "076" => "Brasil",
    "084" => "Belize",
    "086" => "Território Britânico do Oceano Índico",
    "090" => "Ilhas Salomão",
    "092" => "Ilhas Virgens Britânicas",
    "096" => "Brunei",
    "100" => "Bulgária",
    "104" => "Myanmar",
    "108" => "Burundi",
    "112" => "Bielorrússia",
    "116" => "Camboja",
    "120" => "Camarões",
    "124" => "Canadá",
    "132" => "Cabo Verde",
    "136" => "Ilhas Cayman",
    "140" => "República Centro-Africana",
    "144" => "Sri Lanka",
    "148" => "Chade",
    "152" => "Chile",
    "156" => "China",
    "158" => "Taiwan, Província da China",
    "162" => "Ilha Christmas",
    "166" => "Ilhas Cocos (Keeling)",
    "170" => "Colômbia",
    "174" => "Comores",
    "175" => "Mayotte",
    "178" => "Congo",
    "180" => "Congo, a República Democrática do",
    "184" => "Ilhas Cook",
    "188" => "Costa Rica",
    "191" => "Croácia",
    "192" => "Cuba",
    "196" => "Chipre",
    "203" => "República Checa",
    "204" => "Benim",
    "208" => "Dinamarca",
    "212" => "Dominica",
    "214" => "República Dominicana",
    "218" => "Equador",
    "222" => "El Salvador",
    "226" => "Guiné Equatorial",
    "231" => "Etiópia",
    "232" => "Eritreia",
    "233" => "Estónia",
    "234" => "Ilhas Faroé",
    "238" => "Ilhas Falkland",
    "239" => "Ilhas Geórgia do Sul e Sandwich do Sul",
    "242" => "Fiji",
    "246" => "Finlândia",
    "248" => "Ilhas Åland",
    "250" => "França",
    "254" => "Guiana Francesa",
    "258" => "Polinésia Francesa",
    "260" => "Territórios Franceses do Sul",
    "262" => "Djibouti",
    "266" => "Gabão",
    "268" => "Geórgia",
    "270" => "Gâmbia",
    "275" => "Palestina (Territórios Palestinos)",
    "276" => "Alemanha",
    "288" => "Gana",
    "292" => "Gibraltar",
    "296" => "Kiribati",
    "300" => "Grécia",
    "304" => "Gronelândia",
    "308" => "Granada",
    "312" => "Guadalupe",
    "316" => "Guam",
    "320" => "Guatemala",
    "324" => "Guiné",
    "328" => "Guiana",
    "332" => "Haiti",
    "334" => "Ilha Heard e Ilhas McDonald",
    "336" => "Santa Sé (Estado da Cidade do Vaticano)",
    "340" => "Honduras",
    "344" => "Hong Kong",
    "348" => "Hungria",
    "352" => "Islândia",
    "356" => "Índia",
    "360" => "Indonésia",
    "364" => "Irão, República Islâmica do",
    "368" => "Iraque",
    "372" => "República da Irlanda",
    "376" => "Israel",
    "380" => "Itália",
    "384" => "Costa do Marfim",
    "388" => "Jamaica",
    "392" => "Japão",
    "398" => "Cazaquistão",
    "400" => "Jordânia",
    "404" => "Quénia",
    "408" => "Coreia, República Popular Democrática da",
    "410" => "Coreia, República da>",
    "414" => "Kuwait",
    "417" => "Quirguistão",
    "418" => "Laos, República Democrática Popular do",
    "422" => "Líbano",
    "426" => "Lesoto",
    "428" => "Letónia",
    "430" => "Libéria",
    "434" => "Jamahiriya Árabe Líbia",
    "438" => "Liechtenstein",
    "440" => "Lituânia",
    "442" => "Luxemburgo",
    "446" => "Macau",
    "450" => "Madagáscar",
    "454" => "Malawi",
    "458" => "Malásia",
    "462" => "Maldivas",
    "466" => "Mali",
    "470" => "Malta",
    "474" => "Martinica",
    "478" => "Mauritânia",
    "480" => "Maurícia",
    "484" => "México",
    "492" => "Mônaco",
    "496" => "Mongólia",
    "498" => "Moldávia",
    "499" => "Montenegro",
    "500" => "Montserrat",
    "504" => "Marrocos",
    "508" => "Moçambique",
    "512" => "Omã",
    "516" => "Namíbia",
    "520" => "Nauru",
    "524" => "Nepal",
    "528" => "Países Baixos",
    "530" => "Antilhas Holandesas",
    "531" => "Curaçao",
    "533" => "Aruba",
    "534" => "Saint Maarten",
    "535" => "Saint Eustatius, Saba e Bonaire",
    "540" => "Nova Caledónia",
    "548" => "Vanuatu",
    "554" => "Nova Zelândia",
    "558" => "Nicarágua",
    "562" => "Níger",
    "566" => "Nigéria",
    "570" => "Niue",
    "574" => "Ilha Norfolk",
    "578" => "Noruega",
    "580" => "Ilhas Marianas do Norte",
    "581" => "Ilhas Menores Distantes dos Estados Unidos",
    "583" => "Estados Federados da Micronésia",
    "584" => "Ilhas Marshall",
    "585" => "Palau",
    "586" => "Paquistão",
    "591" => "Panamá",
    "598" => "Papua-Nova Guiné",
    "600" => "Paraguai",
    "604" => "Peru",
    "608" => "Filipinas",
    "612" => "Ilhas Pitcairn",
    "616" => "Polônia",
    "620" => "Portugal",
    "624" => "Guiné-Bissau",
    "626" => "Timor-Leste",
    "630" => "Porto Rico",
    "634" => "Qatar",
    "638" => "Reunião",
    "642" => "Romênia",
    "643" => "Federação Russa",
    "646" => "Rwanda",
    "652" => "São Bartolomeu",
    "654" => "Santa Helena (território)",
    "659" => "Saint Kitts e Nevis",
    "660" => "Anguilla",
    "662" => "Santa Lúcia",
    "663" => "Saint-Martin (França)",
    "666" => "Saint Pierre e Miquelon",
    "670" => "São Vicente e Granadinas",
    "674" => "San Marino",
    "678" => "São Tomé e Príncipe",
    "682" => "Arábia Saudita",
    "686" => "Senegal",
    "688" => "Sérvia",
    "690" => "Seychelles",
    "694" => "Serra Leoa",
    "702" => "Singapura",
    "703" => "Eslováquia",
    "704" => "Vietname",
    "705" => "Eslovénia",
    "706" => "Somália",
    "710" => "África do Sul",
    "716" => "Zimbabwe",
    "724" => "Espanha",
    "728" => "Sudão do Sul",
    "729" => "Sudão",
    "732" => "Saara Ocidental",
    "740" => "Suriname",
    "744" => "Svalbard e Jan Mayen",
    "748" => "Suazilândia",
    "752" => "Suécia",
    "756" => "Suíça",
    "760" => "República Árabe Síria",
    "762" => "Tadjiquistão",
    "764" => "Tailândia",
    "768" => "Togo",
    "772" => "Tokelau",
    "776" => "Tonga",
    "780" => "Trinidad e Tobago",
    "784" => "Emirados Árabes Unidos",
    "788" => "Tunísia",
    "792" => "Turquia",
    "795" => "Turquemenistão",
    "796" => "Ilhas Turks e Caicos",
    "798" => "Tuvalu",
    "800" => "Uganda",
    "804" => "Ucrânia",
    "807" => "República da Macedônia",
    "818" => "Egito",
    "826" => "Reino Unido",
    "831" => "Guernsey",
    "832" => "Jersey",
    "833" => "Ilha de Man",
    "834" => "Tanzânia, República Unida da",
    "840" => "Estados Unidos",
    "850" => "Ilhas Virgens Americanas",
    "854" => "Burkina Faso",
    "858" => "Uruguai",
    "860" => "Uzbequistão",
    "862" => "Venezuela",
    "876" => "Wallis e Futuna",
    "882" => "Samoa",
    "887" => "Iémen",
    "894" => "Zâmbia",
];


// Anexo 31: Tipo do bem
// ---------------------
$codTipBem = [
    "01" => "Imóvel urbano residencial",
    "02" => "Imóvel urbano comercial",
    "03" => "Imóvel urbano rural",
    "04" => "Planta industrial",
    "05" => "Navio, aeroplano, plataforma marítima ou equivalente",
    "09" => "Outro imóvel",
    "10" => "Automóvel ou camionete",
    "11" => "Motocicleta ou equivalente",
    "12" => "Caminhão",
    "19" => "Outro veículo terrestre",
    "21" => "Maquinário comercial ou fabril",
    "22" => "Maquinário agrícola",
    "31" => "Produto fabril",
    "32" => "Produto agrícola (inclusive semoventes)",
    "41" => "Instrumento financeiro",
    "91" => "Direitos de uso",
    "99" => "Outros bens e direitos",
];


// Anexo 32: Situação Sicor
// ------------------------
$codSitSicor = [
    "03" => "SOR03 - Prorrogada",
    "05" => "SOR05 - Renegociada parcialmente com nova operação",
    "08" => "SOR08 - Desclassificada Totalmente",
    "11" => "SOR11 - Inscrita em Dívida Ativa da União",
    "13" => "SOR13 - Desclassificada Parcialmente",
];


// Anexo 33: Tipo de bônus/rebate
// ------------------------------
$codBonusReb = [
    "01" => "Bônus de adimplência",
    "02" => "Bônus do PGPAF",
    "03" => "Outros rebates/bônus",
];


// (NR) Anexo 34: Motivo de saída IPOC
// -----------------------------------
$codMotSaidIPOC = [
    "01" => "alteração de código de contrato ou modalidade/submodalidade",
    "02" => "renegociada",
    "03" => "modificação do cliente da operação",
];


// Anexo 35: Motivo de Reestruturação
// ----------------------------------
$codMotReestruturac = [
    "01" => "COVID-19 (Resolução 4.782/2020)",
];


// Anexo 36: Tipo de Instrumento
// -----------------------------
$codTipInstrumento = [
    "01" => "LTEL-LFG – Resolução 4.795",
    "02" => "LTEL - Resolução 4.786",
];


// (NR) Anexo 37: Tipo de Uso Regulatório
// --------------------------------------
$codTipUsoReculat = [
    "01" => "Operações contratadas no âmbito do Pronampe (Lei 13.999/2020 - Programa Nacional de Apoio às Microempresas e Empresas de Pequeno Porte)",
    "02" => "(NR) Operações concedidas no âmbito do FGI PEAC (Medida Provisória nº 975 - Programa Emergencial de Acesso a Crédito) Operações concedidas no âmbito do FGI PEAC (Lei nº 14.042 - Programa Emergencial de Acesso a Crédito)",
    "03" => "Operações contratadas no âmbito da Circular nº 4.033 - deduções sobre as exigibilidades dos recursos de depósitos de poupança",
    "04" => "Operações contratadas no âmbito do CGPE (Resolução nº 4.838 - Programa de Capital de Giro para Preservação de Empresas)",
    "05" => "(NR) Operações concedidas no âmbito do Peac-Maquininhas (Lei nº 14.042 - Programa Emergencial de Acesso a Crédito)",
    "99" => "Outros",
];
