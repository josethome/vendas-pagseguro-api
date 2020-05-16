<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagseguro</title>
</head>
<body>
<!--    URL em Produção: POST https://ws.pagseguro.uol.com.br/v2/checkout-->

<!--    URL em Sandbox: POST https://ws.sandbox.pagseguro.uol.com.br/v2/checkout-->

<!--    Header:-->
<!--    Content-Type: application/x-www-form-urlencoded; charset=ISO-8859-1-->

<!-- INICIO DO BOTAO PAGSEGURO -->
    <form name="FormPagamento" id="FormPagamento" action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post" />

    <!-- <input type="text" name="itemCode" id="itemCode" value="788D92F53C3C32E774BCDF903D0A62D8" /> -->

    <input type="text" name="itemCode" id="itemCode" value="" />
    <input type="hidden" name="iot" value="button" />
    <input id="BotaoPagamento" type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-azul-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />

    <!--<input id="BotaoPagamento" type="image" src="https://pag.ae/7W1xDtZzv/button" target="_blank" title="Pagar com PagSeguro">-->
    <!--<img src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-azul-assina.gif" name="submit" alt="Pague com Pagseguro - é rápido, grátis e seguro!" />-->

    </form>
<!-- FIM DO BOTAO PAGSEGURO -->

    <script src="Libraries/zepto.min.js"></script>
    <script src="Libraries/Javascript.js"></script>
</body>
</html>
