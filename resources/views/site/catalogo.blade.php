@extends("templates.default")

@section("title", "App Gestão - Catalogo")

@section("content")
    @component("componentes.site.header",["currentRoute" => "home"]) @endcomponent

    <div class="body-container">
        <h2>Catalogo aqui</h2>
    </div>

@endsection