@extends("templates.default")

@section("title", "App Gestão - Produto")

@section("content")
    @component("componentes.app.header",["currentRoute" => "home"]) @endcomponent

    <div class="body-container">
        <h2>Produto aqui</h2>
    </div>
@endsection