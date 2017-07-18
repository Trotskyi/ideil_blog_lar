    <div id="sign">
        <nav class="main-nav">
            <ul>
                <!-- inser more links here -->
                <li><a class="cd-signin" href="#0">Sign in</a></li>
                <li><a class="cd-signup" href="#0">Sign up</a></li>
            </ul>
        </nav>
    </div>
    <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li><a href="#0">Sign in</a></li>
                <li><a href="#0">New account</a></li>
            </ul>
            @include('auth.login');
            @include('auth.register');
            @include('auth.passwords.reset');
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->
