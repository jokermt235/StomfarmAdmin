<nav class="uk-navbar-container" uk-navbar >
    <div class="uk-navbar-left uk-tile-primary" id="tm-logo-menu">
        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <a class="uk-navbar-item uk-logo" href="<?= $this->Url->build(['controller'=>'Admin','action'=>'index'])?>">
                    <span class="uk-text-bold">Stomfarm Service</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <a href="#">Admin</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="<?= $this->Url->build(['controller'=>'Users','action'=>'logout'])?>">Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
