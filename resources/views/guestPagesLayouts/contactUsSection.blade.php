<div class="container">
    <h1 class="mb-2 text-center">Susisiekite Su Mumis</h1>

    @if(session('message'))
        <div class='alert alert-success'>
            {{ session('message') }}
        </div>
    @endif

    <br />

    <div class="row">
        <div class="col-md-6 text-center col-md-offset-3">
            <form class="form-horizontal" method="POST" action="/contactus">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Name">Vardas: </label>
                    <input type="text" class="form-control" id="name" placeholder="Jūsų vardas" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Elektroninis pašto adresas: </label>
                    <input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Žinutė: </label>
                    <textarea type="text" class="form-control luna-message" id="message" placeholder="Įveskite savo žinutę čia"
                              name="message" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Send">Siųsti</button>
                </div>
            </form>
        </div>
    </div>
</div>