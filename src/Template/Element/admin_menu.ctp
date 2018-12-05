<nav class="uk-navbar-container" uk-navbar style="background:#009246">
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <a class="uk-navbar-item uk-logo" href="<?= $this->Url->build(['controller'=>'Admin','action'=>'index'])?>">
                    <span class="uk-text-bold">Falcon service</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Admin</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
