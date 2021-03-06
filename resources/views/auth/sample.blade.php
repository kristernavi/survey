<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Free Bulma template</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" id="bulma" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.2/css/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <style type="text/css">
    .help.is-danger{
      padding-left: 18px;
      padding-bottom: 3px;
    }
  </style>
</head>
<body>
  <div class="login-wrapper columns">
    <div class="column is-8 is-hidden-mobile hero-banner">
      <section class="hero is-fullheight is-dark">
        <div class="hero-body">
          <div class="container section">
            <div class="has-text-right">
              <h1 class="title is-1">Login</h1> <br>
              <p class="title is-3">Secure User Account Login</p>
            </div>
          </div>
        </div>
        <div class="hero-footer">
          <p class="has-text-centered">Team @2017</p>
        </div>
      </section>
    </div>
    <div class="column is-4">
      <section class="hero is-fullheight">
        <div class="hero-heading">
          <div class="section has-text-centered">
            <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo" width="150px">
          </div>
        </div>
        <div class="hero-body">
          <div class="container">
            <div class="columns">
              <div class="column is-8 is-offset-2">
                <h1 class="avatar has-text-centered section">
                  <img src="https://placehold.it/128x128">
                </h1>
                 <form  method="POST" action="{{ route('surverior.login') }}">
                  {{ csrf_field()}}
                <div class="login-form">
                  <p class="control has-icon has-icon-right">
                    <input class="input email-input {{ $errors->has('email') ? ' is-danger' : '' }} {{ $errors->has('message') ? ' is-danger' : '' }}" name="email" type="email" placeholder="jsmith@example.org" value="{{ old('email') }}">
                    <span class="icon user">
                      <i class="fa fa-user"></i>
                    </span>
                  </p>
                   @if ($errors->has('email'))
                    <p class="help is-danger">
                    {{ $errors->first('email') }}
                    </p>
                     @endif
                     @if ($errors->has('message'))
                    <p class="help is-danger">
                    {{ $errors->first('message') }}
                    </p>
                     @endif
                  <p class="control has-icon has-icon-right">
                    <input class="input password-input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" type="password" placeholder="●●●●●●●">
                    <span class="icon user">
                      <i class="fa fa-lock"></i>
                    </span>
                  </p>
                  @if ($errors->has('password'))
                                    <p class="help is-danger">
                    {{ $errors->first('password') }}
                    </p>
                                @endif
                  <p class="control login">
                    <button class="button is-success is-outlined is-large is-fullwidth">Login</button>
                  </p>
                </div>
              </form>
                <div class="section forgot-password">
                  {{-- <p class="has-text-centered">
                    <a href="#">Forgot password</a>
                    <a href="#">Need help?</a>
                  </p> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

</body>
</html>
