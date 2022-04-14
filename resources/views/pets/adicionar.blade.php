Adicionar novo pet:

<form action="/pets" method="post">
    @csrf

    <label for="name">Nome</label>
    <input id="name" name="name" type="text" /> <br/>

    <label for="color">Cor</label>
    <input id="color" name="color" type="text" /> <br/>

    <label for="specie">Especie</label>
    <select name="specie" id="specie">
        <option value="bunny">bunny</option>
        <option value="dragao de komodo">dragão de komodo</option>
        <option value="mamba">mamba negra</option>
        <option value="dog">cachorro</option>
    </select>



    <label for="size">Size</label>
    <select name="size" id="size">
        <option value="xs">XS</option>
        <option value="SM">SM</option>
        <option value="m">M</option>
        <option value="l">L</option>
        <option value="xl">XL</option>
    </select>

    <br/>
    <button type="submit">
        Cadastrar
    </button>
</form>

<a href="/pets">Voltar</a>
