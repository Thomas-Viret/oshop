

  <section>
    <div class="container-fluid">
      <div class="row mx-0">

        <?php foreach($homeFiveCategory as $currentCategory) : ?>
          <?php if(($currentCategory->getHome_order()) <= 2): ?>
          <div class="col-md-6">
          <div class="card border-0 text-white text-center"><img src="<?=$currentCategory->getPicture() ?>"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-3 font-weight-bold mb-4"><?= $currentCategory->getName();?></h2><a href="<?= $router->generate('catalog-category', ['id' => $currentCategory->getId()]) ?>" class="btn btn-light"><?= $currentCategory->getSubtitle() ?></a>
              </div>
            </div>
          </div>
        </div>
        <?php endif ;?>
        <?php endforeach; ?>
      </div>
      
      <div class="row mx-0">
        <?php foreach($homeFiveCategory as $currentCategory) : ?>
          <?php if(($currentCategory->getHome_order()) >= 3): ?>
              <div class="col-lg-4">
                <div class="card border-0 text-center text-<?php echo ($currentCategory->getHome_order() == 4) ? 'dark' : 'white' ?>"><img src="<?=$currentCategory->getPicture() ?>"
                    alt="Card image" class="card-img">
                  <div class="card-img-overlay d-flex align-items-center">
                    <div class="w-100">
                      <h2 class="display-4 mb-4"><?= $currentCategory->getName();?></h2><a href="<?= $router->generate('catalog-category', ['id' => $currentCategory->getId()]) ?>" class="btn btn-link text-<?php echo ($currentCategory->getHome_order() == 4) ? 'dark' : 'white' ?>"><?= $currentCategory->getSubtitle() ?>
                        <i class="fa-arrow-right fa ml-2"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              
        <?php endif ;?>
        <?php endforeach; ?>     
        
        
      </div>
    </div>
  </section>
