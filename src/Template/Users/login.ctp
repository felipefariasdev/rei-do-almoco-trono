

<div class="container">
    <p>
    <h4 class="header-title-success">LOGIN NO REI DO ALMOÇO &raquo;</h4>
    </p>
    <div class="jumbotron">



            <?= $this->Form->create() ?>
            <div class="form-group">
                <?= $this->Form->input('email', array('label'=>'Email','class'=>'form-control')) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('password', array('label'=>'Senha','class'=>'form-control')) ?>
            </div>


        <button class="btn btn-md btn-success" type="submit">ENTRAR <img src="/img/log-in.svg"></button>

            <?= $this->Form->end() ?>

        <br />
        <div class="form-group">
            <p><a href="/users/add" class="btn btn-pq btn-success">NÃO SOU CADASTRADO &raquo;</a></p>
        </div>

    </div>
</div>

