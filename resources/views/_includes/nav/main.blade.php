<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item m-r-40" href="{{ route('home')}}">
        <img src="http://cdn.dota2.com/apps/dota2/images/nav/logo.png" alt="Community">
      </a>

      <button class="button navbar-burger m-r-5" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>    <!-- END NAVBAR-BRAND -->
    <div class="navbar-menu"  id="navMenu">
      <div class="navbar-start">
        <a class="navbar-item is-tab " href="#">
          HOME
        </a>
        <a class="navbar-item is-tab" href="#">
          BLOG
        </a>
        <a class="navbar-item is-tab" href="#">
          HERO
        </a>
      </div>    <!-- END NAVBAR-START -->

      <div class="navbar-end">
        @if (Auth::guest())
        <div class="navbar-item p-t-15">
          <form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="field is-grouped">
              <div class="field">
                <label class="label is-small">E-Mail Address</label>
                <div class="control has-icons-left">
                  <input class="input is-small" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="email@email.com">
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>

                  @if ($errors->has('email'))
                  <p class="help is-danger">
                    {{ $errors->first('email') }}
                  </p>
                  @endif
                  <p class="help">
                    <b-checkbox size="is-small" name="remember" >remember me</b-checkbox>
                    
                  </div>
                </div>
                <div class="field">
                  <label class="label is-small">Password</label>
                  <div class="control has-icons-left">
                    <input class="input is-small" id="password" type="password" name="password" required autofocus placeholder="password">
                    <span class="icon is-small is-left">
                      <i class="fa fa-lock"></i>
                    </span>

                    @if ($errors->has('password'))
                    <p class="help is-danger">
                      {{ $errors->first('password') }}
                    </p>
                    @endif
                    <p class="help">
                      <a href="{{ route('password.request') }}"><p class="is-size-7">Forgot Your Password ?</a></p>
                    </div>
                  </div>
                  <div class="field">
                    <label class="label is-small is-invisible">aa</label>
                    <div class="control">
                      <button type="submit" class="button is-info is-outlined is-small">Log in</button>
                    </div>
                    <p class="help">
                      <a href="{{ route('password.request') }}"><p class="is-size-7">Create an Account ?</a></p>
                    </div>
                  </form>
                </div>
                @else
                <div class="navbar-item is-paddingless is-hoverable">
                  <a class="navbar-link">Hey {{Auth::user()->name}}</a>
                  <div class="navbar-dropdown  is-right m-t-0" >
                    <a href="#" class="navbar-item">
                      <span class="icon">
                        <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                      </span>Profile
                    </a>

                    <a href="#" class="navbar-item">
                      <span class="icon">
                        <i class="fa fa-fw fa-bell m-r-5"></i>
                      </span>Notifications
                    </a>
                    <a href="{{ route('manage.dashboard') }}" class="navbar-item">
                      <span class="icon">
                        <i class="fa fa-fw fa-cog m-r-5"></i>
                      </span>Manage
                    </a>
                    <hr class="navbar-divider">
                    <a href="" class="navbar-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <span class="icon">
                      <i class="fa fa-fw fa-sign-out m-r-5"></i>
                    </span>
                    Logout
                  </a>
                  @include('_includes.forms.logout')
                </div>
              </div>
              @endif
            </div>
          </div>
        </nav>

        <script>
          document.addEventListener('DOMContentLoaded', function () {

          // Get all "navbar-burger" elements
          var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

          // Check if there are any navbar burgers
          if ($navbarBurgers.length > 0) {

          // Add a click event on each of them
          $navbarBurgers.forEach(function ($el) {
          $el.addEventListener('click', function () {

          // Get the target from the "data-target" attribute
          var target = $el.dataset.target;
          var $target = document.getElementById(target);

          // Toggle the class on both the "navbar-burger" and the "navbar-menu"
          $el.classList.toggle('is-active');
          $target.classList.toggle('is-active');

        });
      });
    }

  });
</script>