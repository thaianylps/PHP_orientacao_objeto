<h1>DADOS DE USUÁRIO</h1>
<section>
    <p class="center"><img src="<?=$info['img']?>" width="300px"></p>
    <p>Nome: <?= $info['name'] ?> </p>
    <p>E-mail: <?= $info['email'] ?> </p>
    <p>CPF: <?= $info['cpf'] ?> </p>
   
    <hr>
    <form action="https://www.youtube.com/results" target="_blank" method="get">
        <p>Que música você curte ? </p>
        <p><input type="text" name="search_query"></p>
        <p><input type="submit" value="pesquisar"></p>
    </form>
</section>