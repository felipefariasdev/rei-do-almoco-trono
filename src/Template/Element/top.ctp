<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/produtos/telaInicial"><span><img src="/img/staroff.svg"></span> REI DO ALMOÇO</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">


        </ul>
        <div class="navbar-nav mt-2 mt-md-0">

                <span class="nav-item-menu">
                    <span class="nav-item-menu"><?php if($usuario['name']){ ?><img src="/img/user.svg"><strong><?php echo strtoupper($usuario['name']); ?></strong><?php }?></span>
                </span>


        </div>
        <div class="navbar-nav mt-2 mt-md-0">
            <ul>

                <?php if ($usuario['name']){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/users/logout" style="font-size: 12px;">LOGOUT <img src="/img/undo.svg"></a>
                </li>
                <?php } ?>
            <ul/>
        </div>
    </div>
</nav>