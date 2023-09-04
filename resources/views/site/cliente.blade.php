@extends("templates.default")

@section("title", "App Gestão - Cliente")

@section("content")
    @component("componentes.site.header",["currentRoute" => "home"]) @endcomponent
    
    <div class="body-container">
        @if($action == "login")
            @component("componentes.usuario.login", ["msg" => $msg ?? ""]) @endcomponent
        @else
            @component("componentes.usuario.registro", ["msg" => $msg ?? ""]) @endcomponent
        @endif
    </div>
@endsection