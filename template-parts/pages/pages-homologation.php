<!-- homologation -->
 <section class="homologation py-s">
     <div class="container">

         <!-- header -->
         <?= title('homologation__header', 'Conheça todas as nossas', 'Homologações em Andamento'); ?>
         <!-- end of header -->
         
         <!-- row -->
         <div class="homologation__row owl-carousel">
             <?php
             $jsonHomologation = file_get_contents(__DIR__ . '/../../includes/homologation.json');
             $homologationList = json_decode($jsonHomologation, true);
             
             foreach ($homologationList['homologation'] as $item):
             ?>
             
             <!-- card -->
              <article class="homologation__row__card">
                  <!-- header -->
                   <header class="homologation__row__card__header d-none">
                       <h3><?= $item['title']; ?></h3>
                   </header> 
                  <!-- end of header -->
                  
                  <!-- body -->
                   <div class="homologation__row__card__body">
                       <?= picture($item['image'], 'Homologação ' . $item['title'], '"homologation__row__card__body__image'); ?>
                   </div> 
                  <!-- end of body -->
              </article> 
             <!-- end of card -->
             
             <?php endforeach; ?>
         </div> 
         <!-- end of row -->
     </div>
 </section> 
<!-- end of homologation -->