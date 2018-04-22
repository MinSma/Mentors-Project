<!-- Container (Sign in Section) -->
<div id="Prisijungti" class="container-fluid bg-grey">
    <h2 class="text-center">Prisijungti</h2>
    <div class="row">
        <form class="form-horizontal" id="reg_form" action="{{route('login.connect')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label" for="email">Elektroninis paštas:</label>
                <div class="col-md-12  inputGroupContainer">
                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="vardaitis.pavardaitis@pastas.lt" class="form-control"  type="email" id="email" required>
                    </div>
                </div>
            </div>

            <div class="form-group has-feedback">
                <label for="password"  class="control-label">
                    Slaptažodis:
                </label>
                <div class="col-md-12  inputGroupContainer">
                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" id="password" type="password" placeholder="Slaptažodis"
                               name="password" data-minLength="6"
                               data-error="some error"
                               required/>
                        <span class="glyphicon form-control-feedback"></span>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
            </div>
            <button type="submit" style="background-color:#f4511e; color:#fff" class="btn btn-lg">Prisijungti</button>
        </form>
    </div>
</div>