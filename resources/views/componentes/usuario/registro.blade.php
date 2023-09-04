@if($msg != "")
<h3 class="flash-message">
    {{$msg}}     
</h3>
@endif

<form action="/cliente/registro" method="POST">
    @csrf
    <h1 class="title">Registre-se</h1>    
    <input type="text" name="usuario" placeholder="Nome de Usuário">
    <h5 class="error"> {{ $errors->first("usuario") ?? ""}} </h5> 
    <input type="email" name="email" placeholder="E-mail de Usuário">
    <h5 class="error"> {{ $errors->first("email") ?? "" }} </h5> 
    <input type="password" name="password" placeholder="Digite uma senha">
    <h5 class="error"> {{ $errors->first("password") ? str_replace("password","senha",$errors->first("password")) : "" }} </h5> 
    <h5 class="information">Já possui uma conta ? <a href="/cliente/login">Logue-se</a> agora!</h5>
    <button type="submit">Login</button>
</form>