@extends("templates.default")

@section("title", "App Gestão - Cliente")

@section("content")
    @component("componentes.app.header",["currentRoute" => "home"]) @endcomponent

    <div class="body-container">
        <h2>Cliente aqui</h2>
    </div>
@endsection