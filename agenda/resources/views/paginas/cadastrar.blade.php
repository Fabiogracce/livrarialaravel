<x-layout titulo="Cadastrar livro">
    <form action="cadastrar/salvar" method="GET">
        @csrf <!--libera as portas de cadastro-->
        <label name="dataCompromisso">Data Compromisso</label>
        <input type="date" name="dataEvento">
        <br><br>

        <label name="descricao">Descrição</label>        
        <textArea type="text" name="descricao"></textArea>        
        <br><br>

        <label name="codigo livro">Codigo Livro</label>
        <textArea type="text" name="codigolivro"></textArea>
        <br><br>

        <label name="Genero">Genero</label>
        <textArea type="text" name="genero"></textArea>
        <br><br>

        <label name="Autor">Autor</label>
        <textArea type="text" name="Autor"></textArea>
        <br><br>

        <label name="isbn">ISBN</label>
        <textArea type="text" name="ISBN"></textArea>
        <br><br>

        <button type="submit">Salvar</button>
        

    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>