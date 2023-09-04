@if($msg != "")
<h3 class="flash-message">
    {{$msg}}     
</h3>
@endif

@if(session()->get("msg") !== null)
<h3 class="flash-message">
    {{session()->get("msg")}}      
</h3>
@endif

<form action="/cliente/login" method="POST">
    @csrf
    <h1 class="title">Logue-se</h1>
    <input type="text" name="usuario" placeholder="Usuário ou E-mail">
    <h5 class="error"> {{ $errors->first("usuario") ?? "" }} </h5> 
    <input type="password" name="password" placeholder="Digite uma senha">
    <h5 class="error"> {{ $errors->first("password") ? str_replace("password","senha",$errors->first("password")) : "" }} </h5> 
    <h5 class="information">Não possui uma conta ? <a href="/cliente/registro">Registre-se</a> agora!</h5>
    <button type="submit">Login</button>
</form>