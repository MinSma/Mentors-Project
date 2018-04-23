<!-- Container (Sign up Section) -->
<div id="Registruotis" class="container-fluid text-center bg-grey">
    <div class="text-center">
        <h2>Registruotis</h2>
        <h4>Užsiregistruok jau dabar!</h4>
    </div>

    <div class="row slideanim alig">
        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Mentoriaus registracija</h1>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-lg">Registruotis</button>
                </div>
            </div>
        </div>

        <!-- Student registration -->
        <div class="col-sm-6 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Mokinio registracija</h1>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form class="form-horizontal" id="reg_form" action="{{route('students.store')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="first_name" class="control-label">Vardas</label>
                                <div class="col-md-12  inputGroupContainer">
                                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="first_name" placeholder="Vardaitis" class="form-control"  type="text" id="first_name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="last_name">Pavardė:</label>
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="last_name" placeholder="Pavardaitis" class="form-control" id="last_name" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label"for="email">Elektroninis paštas:</label>
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

                            <div class="form-group has-feedback">
                                <label for="password_confirmation"  class="control-label">
                                    Slaptažodžio patvirtinimas
                                </label>
                                <div class="col-md-12  inputGroupContainer">
                                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-cog"></i></span>
                                        <input class="form-control {$borderColor}" id="userPw2" type="password" placeholder="Pakartokite spaltažodį"
                                               name="password_confirmation" data-match="#password_confirmation" data-minLength="6"
                                               data-match-error="some error 2"
                                               required/>
                                        <span class="glyphicon form-control-feedback"></span>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label"for="gender">Lytis:</label>
                                <div class="col-md-12  inputGroupContainer">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="man">Vyras</option>
                                        <option value="woman">Moteris</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label"for="age">Amžius:</label>
                                <div class="col-md-12  inputGroupContainer">
                                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                        <input name="age" placeholder="20" class="form-control"  type="number" id="age" min="6" data-bind="value:replyNumber" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label"for="city">Miestas:</label>
                                <div class="col-md-12  inputGroupContainer">
                                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                        <input name="city" placeholder="Vilnius" class="form-control"  type="text" id="city" required>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <button type="submit" class="btn btn-lg">Registruotis</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>