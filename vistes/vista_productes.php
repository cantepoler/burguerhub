<section class="productes">

<?php foreach ($productes as $prod) { //Millorar les direccions a les imatges?>
    <div class="caixa">
        <a href="/index.php?accio=detall-producte&id=<?=$prod['id']?>"> <!-- TODO -->
        <img src="../../<?php echo $prod['imatge']?>" alt="<?php echo $prod['nom'] ?>"> 
        <div class="information">
            <h2><?php echo $prod['nom'] ?></h2>
            <!-- <div><?php //echo $prod['descripcio'] ?></div> -->
        </div>
        </a>
    </div>
<?php } ?>
</section>