<div class="container">
    <p><br />
        <a class="btn btn-lg btn-primary" href="#" role="button">QUERO VOTAR &raquo;</a>
    </p>
    <div class="jumbotron">
        <h1>O REI DE HOJE É O <STRONG><?php echo $produto->name?></STRONG></h1>
        <p class="lead">Semana 1, <STRONG><?php echo $produto->name?></STRONG> foi eleito Segunda, Terça e Quarta como rei do almoço, logo na semana
            1 ele será o rei da semana.</p>
    </div>


    <div class="jumbotron">
        <h1>lISTA DE REIS MENOS AMADOS</h1>
        <?php foreach ($produtos as $produto): ?>
            <p class="lead"><?= h($produto->name) ?></p>
        <?php endforeach; ?>

    </div>
</div>

