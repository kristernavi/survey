<nav class="navbar ">
  <div class="navbar-brand">
    <a class="navbar-item" href="http://bulma.io">
      <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>

    <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-lg fa-github"></i>
      </span>
    </a>

    <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-lg fa-twitter"></i>
      </span>
    </a>

    <div class="navbar-burger burger" data-target="navMenuDocumentation">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuDocumentation" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{ route('house-hold.index')}}">
          Household
        </a>
        <div class="navbar-dropdown ">
          <a class="navbar-item " href="{{ route('house-hold.create')}}">
            Add Household
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
            View Household
          </a>


          </div>
        </div>
        <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{ route('house-hold.index')}}">
          Survey
        </a>
        <div class="navbar-dropdown ">
          <a class="navbar-item " href="{{ route('survey.add.step1')}}">
            Add Survey
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
            View Survey
          </a>


          </div>
        </div>
      </div>




      </div>

    </div>

    <div class="navbar-end">

 <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="/documentation/overview/start/">
          Ivan Krister Garcia
        </a>
        <div class="navbar-dropdown ">
          <a class="navbar-item " href="/documentation/overview/start/">
            Logout
          </a>


        </div>
      </div>


    </div>
  </div>
</nav>
