<?php

$logos = [];

$diretorio = __DIR__ . '/../img/logos/';
$urlBase = 'img/logos/';
$extensoesPermitidas = ['jpeg', 'jpg', 'png', 'gif'];

$logos = [
    [
        'src' => 'img/logos/DRA.-GRAZIELE-ENDOCRINO.jpeg',
        'nome' => 'DRA. GRAZIELLE ENDOCRINO',
        'instagram' => '@graziellebastos.endocrino',
        'url' => 'https://www.instagram.com/graziellebastos.endocrino'
    ],
    [
        'src' => 'img/logos/MASTER-ESCRITORIOS.png',
        'nome' => 'MASTER ESCRITÓRIOS',
        'instagram' => '@masterescritorios',
        'url' => 'https://www.instagram.com/masterescritorios'
    ],
    [
        'src' => 'img/logos/PSICOLOGO-LUIZ-FERNANDO.jpeg',
        'nome' => 'PSICÓLOGO LUIZ FERNANDO',
        'instagram' => '@psicologo.luizfernando.nunes',
        'url' => 'https://www.instagram.com/psicologo.luizfernando.nunes'
    ],
    [
        'src' => 'img/logos/RDC-RAD-SERVICE.png',
        'nome' => 'RDC RAD SERVICE',
        'instagram' => '@rdc.radservice',
        'url' => 'https://www.instagram.com/rdc.radservice'
    ],
    [
        'src' => 'img/logos/THALLITA-TORRES-PSICOLOGA-INFANTIL.png',
        'nome' => 'THALLITA TORRES PSICÓLOGA INFANTIL',
        'instagram' => '@thallita.psicoinfantil',
        'url' => 'https://www.instagram.com/thallita.psicoinfantil'
    ],
    [
        'src' => 'img/logos/CONSULTORA-LUIZE-HESS.png',
        'nome' => 'CONSULTORA LUIZE HESS',
        'instagram' => '@luizehess',
        'url' => 'https://www.instagram.com/luizehess',
    ],
    [
        'src' => 'img/logos/3-MARIAS.png',
        'nome' => '3MARIAS SEMIJOIAS',
        'instagram' => '@3mariasjoiasse',
        'url' => 'https://www.instagram.com/3mariasjoiasse',
    ],
    [
        'src' => 'img/logos/SALAO-1985.png',
        'nome' => 'SALÃO 1985',
        'instagram' => '@salao19585aracaju',
        'url' => 'https://www.instagram.com/salao19585aracaju',
    ],
    [
        'src' => 'img/logos/MENINAS-DA-URO.png',
        'nome' => 'MENINAS DA URO',
        'instagram' => '@meninasdauro',
        'url' => 'https://www.instagram.com/meninasdauro',
    ],
];

$depoimentos = [
    [
        'nome' => 'Dra. Grazielle Bastos',
        'foto' => 'img/foto-cliente/Foto-Grazi.png',
        'texto' => 'Depois que Jessica começou a administrar meu Instagram profissional, ele ficou mais interativo, com posts mais criativos e com um layout lindo que se comunica muito bem com a minha área. Além disso ela sempre me dá dicas de assuntos para posts ou vídeos para que tenham mais engajamento. '
    ],
    [
        'nome' => 'Psicologo Luiz Fernando',
        'foto' => 'img/foto-cliente/Foto-Luiz.png',
        'texto' => 'A sua capacidade de compreender e atingir diversos público, adaptar a linguagem e manter uma identidade visual coerente e atrativa demonstra não apenas domínio, mas também sensibilidade estratégica. Os resultados que conseguimos juntos é incontestável, só tenho que parabenizar pelo seu profissionalismo e competência.'
    ],
    [
        'nome' => 'Consultora Luize Hess ',
        'foto' => 'img/foto-cliente/Foto-Luize.png',
        'texto' => 'Sou cliente da Jéssica desde outubro de 2024 e, sinceramente, não consigo mais imaginar minha rotina sem o trabalho dela. Além de talentosa, Jéssica é extremamente inteligente, perspicaz e tem um bom gosto incrível. As artes que ela cria para meus posts profissionais no Instagram são sempre lindas, estratégicas e com um acabamento impecável.
                    Mas o que realmente me conquistou foi o compromisso. Jéssica é extremamente organizada, pontual e responsável. Nunca tive que cobrar, nunca houve desculpas — no dia combinado, as artes estão lá, prontas, sem enrolação. O valor que pago mensalmente compensa demais. É uma parceria que me dá tranquilidade e entrega real resultado.'
    ],
    [
        'nome' => 'Advogada Samyah Santana ',
        'foto' => 'img/foto-cliente/Foto-Samyah.png',
        'texto' => 'Jéssica é uma profissional extremamente perfeccionista, detalhista e criativa! Ela está sempre de prontidão buscando auxiliar e trazer inovações ao perfil do instagram, vendo o que é possível para sempre alcançar mais e mais pessoas com os posts e stories. 
                    Além disso, Jéssica estuda bastante o funcionamento das redes, buscando trazer sempre o que há de novo para poder acrescentar aos conteúdos das redes sociais. 
                    Desde que fui apresentada ao seu trabalho, prontamente me interessei e a contratação foi de imediato. Já vai fazer um ano que usufruo dos seus serviços e pretendo continuar por prazo indefinido!!!'
    ],
    [
        'nome' => 'Master Escritorios',
        'foto' => 'img/foto-cliente/Foto-Master.png',
        'texto' => 'Costumamos dizer que existe a nossa rede social antes e depois de Jéssica tamanha a efetividade, profissionalismo e bom gosto que ela tem deixado o perfil do Master Escritórios. 
Jéssica está sempre deixando o nosso perfil de acordo com o nosso público e segue todas as tendências e ferramentas para sempre conseguir engajamento com os nossos clientes.
Só temos elogios para ela! Desde que contratamos os seus serviços, não vivemos mais sem e não pretendemos romper a parceria! 
Recomendamos seus serviços de olhos fechados para todos que quiserem crescer nas redes sociais!'
    ],
    // ...
];

$planos = [
    [
        'titulo' => 'Plano Diamante',
        'descricao' => 'Estratégia completa e posicionamento premium. Ideal para empresas que querem crescer com autoridade, constância e diferenciação.',
        'beneficios' => [
            'Planejamento estratégico mensal completo',
            '20 a 25 artes por mês (estáticas + carrosséis + vídeos curtos)',
            'Reels com roteiro, edição e legenda personalizada',
            'Legendas com copywriting persuasivo + CTA',
            '15 stories personalizados por semana',
            'Relatório mensal de desempenho com análise de métricas',
            'Reunião mensal de alinhamento'
        ]
    ],
    [
        'titulo' => 'Plano Platina',
        'descricao' => 'Fortalecimento de marca e constância estratégica. Para profissionais e empresas que querem crescer com consistência e engajamento.',
        'beneficios' => [
            'Planejamento estratégico mensal',
            '15 a 20 artes por mês (estáticas + carrosséis)',
            '2 Reels por semana com edição simples',
            'Legendas com copy + CTA',
            '10 stories por semana',
            'Relatório mensal com métricas principais'
        ]
    ],
    [
        'titulo' => 'Plano Ouro',
        'descricao' => 'Presença digital profissional. Para quem precisa de frequência e estética profissional sem gestão total.',
        'beneficios' => [
            '12 a 15 artes por mês (estáticas + carrosséis)',
            '1 Reel por semana (edição simples)',
            'Legendas com copy e chamadas para ação',
            '6 stories por semana (templates personalizados)',
            'Sugestões de pauta e hashtags',
            'Relatório simples com dados de alcance e engajamento',
            'Suporte para dúvidas pontuais'
        ]
    ],
    [
        'titulo' => 'Plano Prata',
        'descricao' => 'Estética e presença digital básica. Para quem está começando ou quer manter o perfil ativo com regularidade.',
        'beneficios' => [
            '8 a 10 posts por mês (estáticos e carrosséis leves)',
            'Legendas informativas',
            '3 stories por semana',
            'Entrega mensal via drive ou agendamento por app'
        ]
    ],
    [
        'titulo' => 'Plano Bronze',
        'descricao' => 'Essencial para estar presente. Para quem quer começar a marcar presença sem investir muito.',
        'beneficios' => [
            '5 posts mensais (estáticos simples)',
            'Legendas básicas com dicas ou frases',
            '1 story por semana (template fixo)',
            'Sem ajustes após entrega',
            'Ideal para pequenos negócios ou autônomos que estão iniciando'
        ]
    ],
    [
        'titulo' => 'Serviços Avulsos',
        'descricao' => 'Soluções sob demanda para complementar sua presença digital ou atender necessidades pontuais.',
        'beneficios' => [
            'Edição de vídeos para Reels e redes sociais',
            'Criação de logotipo e identidade visual completa',
            'Consultoria estratégica personalizada para redes sociais',
            'Criação de calendário de posts com base no nicho, objetivos e datas importantes'
        ]
    ]
];


// infos.php

// Coleta as imagens da pasta /img/metricas/
$metricasDir = __DIR__ . '/../img/metricas/';
$urlBaseMetricas = 'img/metricas/';
$extensoesPermitidas = ['jpeg', 'jpg', 'png', 'gif'];
$metricas = [];

if (is_dir($metricasDir)) {
    $arquivos = scandir($metricasDir);
    foreach ($arquivos as $arquivo) {
        $ext = pathinfo($arquivo, PATHINFO_EXTENSION);
        if (is_file($metricasDir . $arquivo) && in_array(strtolower($ext), $extensoesPermitidas)) {
            $metricas[] = $urlBaseMetricas . $arquivo;
        }
    }
}



