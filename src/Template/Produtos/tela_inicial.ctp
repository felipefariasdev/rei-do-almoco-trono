<div class="container">
    <p>
        <a class="btn btn-md btn-success" href="/produtos" role="button">QUERO VOTAR &raquo;</a>
    </p>
    <div class="jumbotron">
        <h2>O REI DE HOJE É O (<STRONG><span style="color:#29a229"><?php echo strtoupper($nome_rei)?>)</span></STRONG> com <?php echo $qtdVotos;?> votos!</h2>
    </div>

    <h2>REIS MENOS AMADOS</h2>
    <div class="jumbotron">
        <ul class="list-group">
        <?php foreach ($menos_votados as $produto): ?>



            <li class="list-group-item justify-content-between">
                <?= strtoupper($produto["name"]) ?>
                <span class="badge badge-default badge-pill"><?= h($produto["qtdVotos"]) ?></span>
            </li>



        <?php endforeach; ?>

        </ul>

    </div>
</div>

