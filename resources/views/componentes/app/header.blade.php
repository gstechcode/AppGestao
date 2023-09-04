<nav class="header">
    <h3 class="brand">App Gestão</h3>
    <div class="menu">
        <h4 class="hello-msg">Olá {{$_SESSION["usuario"][0]["usuario"]}}</h4>

        <a href="/" class="link">Home</a>
        <a href="/app/cliente" class="link">Cliente</a>
        <a href="/app/fornecedor" class="link">Fornecedor</a>
        <a href="/app/produto" class="link">Produto</a>
        <a href="/app/sair" class="link">Sair</a>
    </div>
</nav>