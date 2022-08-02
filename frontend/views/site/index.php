<section class="menu section bd-container" id="menu">
    <h2 class="section-title">Mazzali taomlar</h2>

    <div class="menu__container bd-grid">
        <?php foreach($taomlar as $taom) { ?>
        <div class="menu__content">
            <img src="/rasmlar/<?=$taom->rasmi;?>" alt="" class="menu__img">
            <h3 class="menu__name"><?=$taom->nomi;?></h3>
            <span class="menu__detail"><?=$taom->turi;?></span>
            <span class="menu__prici"><?=$taom->narxi;?></span>
            <a href="#" class="button menu__button">
                <i class="bx bxs-cart"></i>
            </a>
        </div>
        <?php  }?>

    </div>
</section>