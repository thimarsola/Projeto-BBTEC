<section class="certification">
    <!-- row -->
     <div class="certification__row">
         <!-- content -->
          <div class="certification__row__content bg-blue-500 clr-white-500">

              <!-- header -->
              <header class="certification__row__content__header mb-4">
                  <h2 class="f-5 clr-white-500">Empresas certificadas ISO 9001</h2>
              </header>
              <!-- end of header -->

              <!-- body -->
               <div class="certification__row__content__body t-justify mb-8">
                   <p>As Indústrias RC tem orgulho de ser um grupo de empresas certificadas ISO 9001. Certificação que reafirma o nosso compromisso com a qualidade dos nossos produtos!</p>
                   <br>
                   <p>A certificação ISO visa promover a normatização de produtos, serviços e processos, com o objetivo de garantir a forma como trabalhamos e rastreabilidade dos mesmos.</p>
                   <br>
                   <p>O processo de certificação define os requisitos indispensáveis para a melhoria dos processos internos, a maior capacitação do grupo interno e externo, o monitoramento do ambiente de trabalho, a satisfação dos clientes, colaboradores e fornecedores, sempre com o objetivo da melhoria contínua do sistema de gestão da qualidade e do meio ambiente.</p>
               </div>
              <!-- end of body -->

              <!-- view -->
               <div class="certification__row__content__view d-flex">
                   <?php
                   $baseurl = wp_get_upload_dir();
                   ?>

                   <a class="t-center" href="<?= $baseurl['baseurl']  . '/2021/certificado-ISO9001.pdf'; ?>" title="Confira o nosso certificado ISO 9001 na versão em português" target="_blank">
                       <?= picture('imagem-certificado-iso', 'Confira o nosso certificado ISO 9001 na versão em português', null, 'png'); ?>
                       <span class="link-white-500 t-small">Confira o nosso Certificado de Qualidade ISO 9001<br>(versão em português)</span>
                   </a>

                   <a class="t-center" href="<?= $baseurl['baseurl']  . '/2021/certification-ISO9001.pdf'; ?>" title="Confira o nosso certificado ISO 9001 na versão em inglês" target="_blank">
                       <?= picture('imagem-certificado-iso', 'Confira o nosso certificado ISO 9001 na versão em português', null, 'png'); ?>
                       <span class="link-white-500 t-small">Confira o nosso Certificado de Qualidade ISO 9001<br>(versão em inglês)</span>
                   </a>
               </div>
              <!-- end of view -->

          </div>
         <!-- end of content -->

         <!-- image -->
          <div class="certification__row__image">
              <?= picture('background-certificacao', 'Empresa Certificada ISO 9001', 'img-fluid'); ?>
          </div>
         <!-- end of image -->
     </div>
    <!-- end of row -->
</section>