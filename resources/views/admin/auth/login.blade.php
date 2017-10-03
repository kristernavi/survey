<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME')}} | Login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../admin/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                        {{ csrf_field() }}
              <h1>Admin Login</h1>
               <div >
               @if ($errors->has('email'))
                                   <span class="help-block label label-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                @if ($errors->has('message'))
                   <span class="help-block label label-danger">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                    @endif
                <input type="text" class="form-control" placeholder="Username" required="" value="{{ old('email') }}" name="email" />

              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
                @if ($errors->has('password'))
                    <span class="help-block label label-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div>
                <div  class="btn btn-danger" onclick="window.location='{{url('')}}';" style="text-shadow: 0px 0px 0px;">
                    Cancel
                </div>
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
                <a class="reset_pass hidden" href="{{ route('password.request') }}">Lost your password?</a>
                </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> {{ env('APP_NAME')}}</h1>
                  <p>©{{ date('Y') }} All Rights Reserved. © {{ env('APP_NAME')}}.<br/> All Rights Reserved. </p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
