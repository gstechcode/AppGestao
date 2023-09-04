@extends("templates.default")

@section("title", "App Gestão - Home")

@section("content")
    @component("componentes.app.header",["currentRoute" => "home"]) @endcomponent

    <div class="body-container">
        <h2>Home aqui</h2>
    </div>
@endsection