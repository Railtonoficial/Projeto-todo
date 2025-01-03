<x-layout page="login">

    <section id="task_section">
        <h1>Autenticação</h1>

        @if($errors->any())
            <ul class="alert alert-error">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{route('user.login_action')}}">
            @csrf
            <x-form.text_input type="email" name="email" label="Seu E-mail" placeholder="Digite o seu E-mail"/>
            <x-form.text_input type="password" name="password" label="Sua senha" placeholder="Digite a sua senha"/>
            <x-form.form_button resetTxt="Limpar" submitTxt="login"/>
        </form>
    </section>
</x-layout>
