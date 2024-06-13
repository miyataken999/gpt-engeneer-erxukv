<form action="{{ route('diamond.calculate') }}" method="post">
    @csrf
    <label for="carat">Carat:</label>
    <input type="number" id="carat" name="carat"><br><br>
    <label for="cut">Cut:</label>
    <select id="cut" name="cut">
        <option value="round">Round</option>
        <option value="princess">Princess</option>
        <option value="emerald">Emerald</option>
    </select><br><br>
    <label for="color">Color:</label>
    <select id="color" name="color">
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
    </select><br><br>
    <label for="clarity">Clarity:</label>
    <select id="clarity" name="clarity">
        <option value="FL">FL</option>
        <option value="IF">IF</option>
        <option value="VVS">VVS</option>
    </select><br><br>
    <input type="submit" value="Calculate">
</form>