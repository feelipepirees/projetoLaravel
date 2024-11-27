<x-layout titulo="Cadastrar">
    <form method="GEt">
        @csrf <!--- Libera as portas de cadastro-->
        <label name="dataCompromisso">Data Compromisso</label>
        <input type="date" name="dataEvento">

        <label name="descricao">DescriÇão</label>
        <textArea type="text" name="descricaoTExto"></textArea>
        <br><br>

        <button type="submit">SAlvar</button>
        <a href="submit">Salvar</button></a>
        <br><br>
</form>