<!DOCTYPE html>
<html lang="en">
<head>

    @section('title', 'Pagrindinis')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    {{--<script src="{{ url(asset('js/homePage.js')) }}"></script>--}}
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}" />

</head>




<body id="Mentors_Project" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('guestPages.home') }}" title="Pagrindinis puslapis">
                <img style="max-width:125px; margin-top: -10px;"
                     src="https://photos-5.dropbox.com/t/2/AADve4kzj_QFtxVXH-t3C3NkFBvZX2xt-jrA1eMBSkfwow/12/188438244/png/32x32/1/_/1/2/Logo_orange.png/EM3Z8Y4BGLQkIAIoAg/rNsbajfa6XCU8rrM9L9BykVd8bSyhpnOmsDlwMESBr4?preserve_transparency=1&size=1600x1200&size_mode=3">
            </a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">APIE SVETAINĘ</a></li>
                <li><a href="#services">TOPIC 2</a></li>
                <li><a href="#portfolio">TOPIC 3</a></li>
                <li><a href="#Registruotis">REGISTRUOTIS</a></li>
                <li><a href="#Prisijungti">PRISIJUNGTI</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <div class="container-fluid">
        <img style="max-width:600px; margin-top: -100px; opacity: 1" src="https://photos-4.dropbox.com/t/2/AADdRbzBNygHL4K4t3FtmAHG2FGZGm-8te3eIsufTmO8VA/12/188438244/png/32x32/1/_/1/2/logo_black.png/EM3Z8Y4BGLQkIAIoAg/2mdfmRc8vURySOhJZ7H9Du3MOYCE4Z4LvYaiF0yT5aU?preserve_transparency=1&size=1600x1200&size_mode=3">
        <p>Mokytis daug lengviau, kai šalia patikimas mokytojas!</p>
    </div>
    <form>
        <div class="input-group" style="margin-top: -50px">
            <input type="Subject" class="form-control" size="50" placeholder="Dalykinė sritis" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger">Ieškoti mentorių</button>
            </div>
        </div>
    </form>
</div>






<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>Apie svatainę</h2><br>
            <h4>Jada jada</h4><br>
            <p>blah blah blah</p>
            <div class="panel-footer">
                <a href="#Registruotis" class="btn btn-lg">Registruotis</a>
            </div>

        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-education logo"></span>
        </div>
    </div>
</div>

<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo slideanim"></span>
        </div>
        <div class="col-sm-8">
            <h2>TOPIC 1</h2><br>
            <h4><strong>MISSION:</strong> ULIALIAA</h4><br>
            <p><strong>VISION:</strong> ..................</p>
        </div>
    </div>
</div>




<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h2>TOPIC 2</h2>
    <h4>Something</h4>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-off logo-small"></span>
            <h4>POWER</h4>
            <p>....</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart logo-small"></span>
            <h4>LOVE</h4>
            <p>...</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo-small"></span>
            <h4>JOB DONE</h4>
            <p>....</p>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small"></span>
            <h4>GREEN</h4>
            <p>....</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small"></span>
            <h4>CERTIFIED</h4>
            <p>....</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small"></span>
            <h4 style="color:#303030;">HARD WORK</h4>
            <p>....</p>
        </div>
    </div>
</div>




<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>TOPIC 3</h2><br>
    <h4>Sumting nais</h4>

</div><br>

<h2>Atsiliepimai</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <h4>"Ho ho ho ho ho ho"<br><span>Ponulis</span></h4>
        </div>
        <div class="item">
            <h4>"JAS!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
        </div>
        <div class="item">
            <h4>"Ameizin"<br><span>asd</span></h4>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>




<!-- Container (Sign up Section) -->
<div id="Registruotis" class="container-fluid">
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
                                    Salptažodis:
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

                            <div class="form-group">
                                <button type="submit" class="btn btn-lg">Registruotis</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container (Sign in Section) -->
<div id="Prisijungti" class="container-fluid bg-grey">
    <h2 class="text-center">Prisijungti</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
            <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
        </div>
        <div class="col-sm-7 slideanim">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="container-fluid text-center">
    <a href="#Mentors_Project" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Mentors_Project <a href="{{ route('guestPages.home') }}" title="Visit Mentors_project"></a></p>
</footer>

<script>
    $(document).ready(function() {
        $('#reg_form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                first_name: {
                    validators: {
                        stringLength: {
                            min: 2,
                            message: 'Vardas per trumpas!'
                        },
                        notEmpty: {
                            message: 'Prašome įrašyti savo vardą.'
                        }
                    }
                },
                last_name: {
                    validators: {
                        stringLength: {
                            min: 2,
                            message: 'Pavardė yra per trumpa!'
                        },
                        notEmpty: {
                            message: 'Prašome įrašyti savo pavardę.'
                        }
                    }
                },

                city: {
                    validators: {
                        stringLength: {
                            min: 3,
                            message: 'Miesto pavadinimas per trumpas!'
                        },
                        notEmpty: {
                            message: 'Prašome įrašyti miestą, iš kurio esate.'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Prašome įrašyti savo elektroninį paštą.'
                        },
                        emailAddress: {
                            message: 'Elektroninis paštas neteisingas!'
                        }
                    }
                },

                password: {
                    validators: {
                        stringLength: {
                            min: 6,
                            message: 'Slaptažodis yra per trumpas.'
                        },
                    }
                },
                password_confirmation: {
                    validators: {
                        identical: {
                            field: 'password',
                            message: 'Įvesti slaptažodžiai nesutampa!'
                        }
                    }
                },
                age: {
                    validators: {
                        notEmpty: {
                            message: 'Įveskite savo amžių.'
                        },
                    }
                },

            }
        })


            .on('success.form.bv', function(e) {
                $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#reg_form').data('bootstrapValidator').resetForm();

                // Prevent form submission
                e.preventDefault();

                // Get the form instance
                var $form = $(e.target);

                // Get the BootstrapValidator instance
                var bv = $form.data('bootstrapValidator');

                // Use Ajax to submit form data
                $.post($form.attr('action'), $form.serialize(), function(result) {
                    console.log(result);
                }, 'json');
            });
    });


    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='\{{ URL::to('/') }}\']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>