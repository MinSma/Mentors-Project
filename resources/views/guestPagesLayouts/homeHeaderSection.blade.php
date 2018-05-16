<div class="jumbotron text-center">
    <div class="container-fluid">
        <img style="max-width:40%; margin-top: -100px; opacity: 1" src="{{ asset('images/logo_black.png') }}">
        <p>Mokytis daug lengviau, kai šalia patikimas mokytojas!</p>

    <form action="/mentors/found" method="GET" role="search">
        <div class="form-group">
            <label for="topic">Pasirinkti temą</label>

            <select name="topic" id="topic" class="form-control">
                <option value="mathematics">Mathematics</option>
                <option value="english">English language</option>
                <option value="it">Information Technology</option>
                <option value="chemistry">Chemistry</option>
                <option value="physics">Physics</option>
                <option value="biology">Biology</option>
                <option value="geography">Geography</option>
                <option value="history">History</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ieškoti</button>
        </div>
    </form>
    </div>
</div>