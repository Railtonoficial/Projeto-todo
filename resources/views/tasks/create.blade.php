<x-layout page="login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Criar Tarefa</h1>
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
            <x-form.text_input name="title" label="Titulo da Tarefa" placeholder="Digite o titulo da tarefa"/>
            <x-form.text_input type="datetime-local" name="due_date" label="Data de Realização" placeholder="Digite o titulo da tarefa"/>
            <x-form.select_input name="category_id" label="Categoria" placeholder="Digite o titulo da tarefa">

                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input name="description" label="Descrição da Tarefa"
                                   placeholder="Digite uma descrição para tarefa"/>

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa"/>
        </form>
    </section>
</x-layout>
