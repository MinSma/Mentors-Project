<div class="jumbotron text-center">
    <div class="container-fluid">
        <img style="max-width:40%; margin-top: -100px; opacity: 1" src="{{ asset('images/logo_black.png') }}">
        <p>Mokytis daug lengviau, kai šalia patikimas mokytojas!</p>

    <form action="/mentors/found" method="GET" role="search">
        <div class="form-group">
            <label for="topic">Pasirinkti temą</label>

            <select name="topic" id="topic" class="form-control">
                <option value="mathematics">Matematika</option>
                <option value="english">Anglų Kalba</option>
                <option value="it">Informacinės Technologijos</option>
                <option value="chemistry">Chemija</option>
                <option value="physics">Fizika</option>
                <option value="biology">Biologija</option>
                <option value="geography">Geografija</option>
                <option value="history">Istorija</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ieškoti</button>
        </div>
    </form>
    </div>
</div>