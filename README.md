# Black Conteúdo Criativo

Site institucional em PHP da Black Conteúdo Criativo.

## Estrutura

- `index.php`: marcação semântica e renderização das seções.
- `include/infos.php`: SEO, contatos, plugins e conteúdo dinâmico.
- `include/cdns.php`: estilos externos carregados conforme `$plugins`.
- `include/scripts.php`: scripts externos e comportamentos da página.
- `style/sass/`: fonte dos estilos, dividida entre base, componentes e seções.
- `style/css/style.css`: CSS compilado usado em produção.
- `img/`: logos, depoimentos, métricas e identidade visual.

## Atualização de conteúdo

Textos estruturados, clientes, depoimentos e planos devem ser alterados em
`include/infos.php`. Dados institucionais que ainda fazem parte da narrativa da
página permanecem em `index.php`.

Para compilar os estilos:

```bash
npx sass style/sass/style.scss style/css/style.css
```

## Notas de pesquisa e SEO

O projeto já possui título e descrição, Open Graph, Twitter Card, dados
estruturados, hierarquia de títulos, textos alternativos e `robots.txt`.

Antes da publicação definitiva:

1. Informar o domínio em `site_config.url_site`, dentro de `include/infos.php`.
   Isso habilita automaticamente a URL canônica, `og:url`, imagem social
   absoluta e os campos de URL dos dados estruturados.
2. Criar `sitemap.xml` usando o domínio definitivo e cadastrá-lo no Google
   Search Console.
3. Validar a imagem usada em `site_config.imagem_social`; o recomendado para
   compartilhamento é uma arte dedicada de 1200 × 630 px.
4. Confirmar a cidade e área de atendimento da Black. Com esses dados será
   possível completar o schema `ProfessionalService` e pesquisar termos locais.
5. Fazer pesquisa de palavras-chave com dados reais antes de criar novas
   páginas. Priorizar intenção de busca, serviços oferecidos e localização, sem
   repetir termos artificialmente.
6. Medir desempenho com PageSpeed Insights e acessibilidade com Lighthouse após
   a publicação no servidor final.

Não foram inventados domínio, endereço, cidade ou palavras-chave locais: esses
itens dependem de confirmação e pesquisa antes de serem publicados.
