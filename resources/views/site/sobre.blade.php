@extends("templates.default")

@section("title", "App Gestão - Sobre")

@section("content")
    @component("componentes.site.header",["currentRoute" => "home"]) @endcomponent

    <div class="body-container">
        <h2>Sobre aqui</h2>
    </div>

@endsection