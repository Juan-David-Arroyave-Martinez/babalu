<?php
/* Smarty version 3.1.32, created on 2019-01-31 20:49:58
  from '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c53a5c6766325_01821330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35375bac795cce8dcdd441f82aba14b57ac4f396' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/index.tpl',
      1 => 1543382735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53a5c6766325_01821330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5944662135c53a5c6739a53_19999983', 'page_content_container');
?>















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'hook_home'} */
class Block_19687263675c53a5c673b835_56762602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3390842505c53a5c673aca4_93689546 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19687263675c53a5c673b835_56762602', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5944662135c53a5c6739a53_19999983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_5944662135c53a5c6739a53_19999983',
  ),
  'page_content' => 
  array (
    0 => 'Block_3390842505c53a5c673aca4_93689546',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19687263675c53a5c673b835_56762602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="content" class="page-home">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3390842505c53a5c673aca4_93689546', 'page_content', $this->tplIndex);
?>


        
        <div class="slid-hom">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHome','mod'=>'ps_imageslider'),$_smarty_tpl ) );?>

        </div>
        <div class="babalu-home-products">
            <div class="pro-title">Nuestras Categorías</div>
            <div class="desck-cats">
                <div class="col-products">
                    <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/p-1-deportiva-mujer.jpg"></a>
                    <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/p-2-deportiva-hombre.jpg"></a>
                    <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/p-3-complementos.jpg"></a>
                </div>
                <div class="col-products">
                    <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/p-4-trajes-bano-mujer.jpg"></a>
                    <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/p-5-interior-hombre.jpg"></a>
                    <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/p-6-infantil.jpg"></a>
                </div>
                <div class="col-products">
                    <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/p-7-lingerie.jpg"></a>
                    <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/p-8-outlet.jpg"></a>
                    <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/p-9-tarrao-interior.jpg"></a>
                </div>
            </div>
            <div class="mob-cats">
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/mob-p-1-deportiva-mujer.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/mob-p-4-trajes-bano-mujer.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/mob-p-7-lingerie.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/mob-p-2-deportiva-hombre.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/mob-p-5-interior-hombre.jpg');" href="#"> </a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/mob-p-3-complementos.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/mob-p-6-infantil.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/mob-p-9-tarrao-interior.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/mob-p-8-outlet.jpg');" href="#"> </a>
                </div>
                <div class="col-xs-6"></div>
            </div>
        </div>
        <div class="new-arrivals">
            <div class="col-lg-6 col-md-6 left">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/left-new-arrivals-esp.jpg">
            </div>
            <div class="col-lg-6 col-md-6 right hidden-xs-down hidden-sm-down">
                <div class="col-lg-6 col-md-6">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/right-one-new-arrivals.jpg">
                </div>
                <div class="col-lg-6 col-md-6 hidden-xs-down hidden-sm-down">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/right-two-new-arrivals.jpg">
                </div>
            </div>
        </div>
        <div class="babalu-brands">
            <h2>Nuestras marcas</h2>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/logo-babalu_1.png" class="brand"></a>
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/logo-inizio-active.png" class="brand"></a>
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/logo-tarrao_1.png" class="brand"></a>
            </div>
        </div>
        <div class="babalu-sellers">
            <div class="col-md-6 col-xs-12 col-sm-12 sellers-col sellers-white sll-wht-bg">
                <div>
                    <h3>INICIA TU PROPIO NEGOCIO</h3>
                    <p style="font-weight: 600;">Únete a nuestra novedosa venta por catálogo y aumenta tus ingresos
                        <br><br><br><br><br>
                        <a class="square-lnk lnk-svg-sell" href="#">CONOCE MÁS</a>
                    </p>
                </div>
            </div>
            <div class="col-md-6 sellers-col hidden-xs-down hidden-sm-down">
                <div>
                    <h3>¿Cómo hacer parte de nuestra novedosa venta por catálogo?</h3>
                    <p>Hacer parte de nuestra novedosa venta por catálogo es muy fácil. Sólo debes hacer clic en el botón "Registrarme" y completar la información solicitada. Una vez estés registrado, podrás adquirir nuestros catálogos físicos o descargarlos en su versión digital (PDF)</p>
                    <a class="square-lnk" href="#"> REGISTRARME </a>
                </div>
            </div>
        </div>
        <div class="babalu-video-content">
            <div class="babalu-videos-title">
                <span>Nuestros Videos</span> 
                <span>
                    <a href="videos">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/plus-symbol-in-a-rounded-black-square.svg" class="plsqr-icc"> <span class="hidden-xs hidden-sm">Ver más</span>
                    </a>
                </span>
            </div>
            <div class="cms-cont-video">
                <div class="col-lg-12 col-xs-12 no-padding">
                    <div class="cont-videos">
                        <div class="row mar-0">
                            <div class="video left vid-full-mob">
                                <iframe src="https://www.youtube.com/embed/vpDF6d6uCAQ?showinfo=0" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                            <div class="two-videos hid-mobl">
                                <div class="video">
                                    <iframe src="https://www.youtube.com/embed/fNA2yqqPXhA?showinfo=0" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                                <div class="video hid-mobl">
                                    <iframe src="https://www.youtube.com/embed/Gq-DR9NqYmM?showinfo=0" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="video right hid-mobl">
                                <iframe src="https://www.youtube.com/embed/9jpZan1PqrI?showinfo=0" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="row mar-0 hid-mobl">
                            <div class="video right">
                                <iframe src="https://www.youtube.com/embed/lMpLGxaPsFY?showinfo=0" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                            <div class="two-videos">
                                <div class="video">
                                    <iframe src="https://www.youtube.com/embed/oJtCmyKnfaU?showinfo=0" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                                <div class="video">
                                    <iframe src="https://www.youtube.com/embed/ZyYjUgBWYpc?showinfo=0" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="video left">
                                <iframe src="https://www.youtube.com/embed/xde8DAIgedQ?showinfo=0" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-section points-sale">
            <h2 class="title">Puntos de Venta</h2>
            <ul>
                <li>
                    <a href="puntos-venta"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/plus-symbol-in-a-rounded-black-square.svg" class="plsqr-icc"><span>Ver más</span></a>
                </li>
            </ul>
        </div>
        <div class="babalu-contact">
            <div class="col-md-6 contact-content hidden-xs-down hidden-sm-down">
                <h2>SERVICIO AL CLIENTE</h2>
                <p>Comunícate con nosotros</p>
                <ul class="store-info">
                    <li><img class="icc-clndr" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/calendar-with-spring-binder-and-date-blocks.svg"> Lunes a Viernes 8:00 am - 05:30 pm (GMT-5)</li>
                    <li><img class="icc-clndr" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/calendar-with-spring-binder-and-date-blocks.svg"> Sábado 8:00 am - 12:00 pm (GMT-5)</li>
                    <li><img class="icc-cllaw" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/call-answer.svg"> (+57 4) 444 1078 Opción 1 (Ciudad de Medellín)<br/><img class="icc-cllaw" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/call-answer.svg"> 018000424999 Línea gratuita en Colombia<br/><img class="icc-cllaw" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/call-answer.svg"> 3054001527 Línea gratuita en EEUU, Puerto Rico, Canadá</li>
                    <li><img class="icc-envml" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/envelope.svg"> <a href="mailto:servicioalcliente@babalufashion.com">servicioalcliente@babalufashion.com</a>  (Servicio al cliente nacional)<br/><a href="mailto:comercioexterior@babalufashion.com">comercioexterior@babalufashion.com</a>  (Servicio al cliente internacional)</li>
                    <li><img class="icc-mpnt" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/maps-and-flags.svg"> Calle 46 Nº 53-14- CC La Gran Esquina Local 401 - Medellín</li>
                </ul>
            </div>
            <div class="col-md-6 contact-block-quitar hidden-xs-down hidden-sm-down">
                <a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/servicio_cliente.jpg"></a>
            </div>
        </div>
        <div class="social-section">
            <h2 class="title">Síguenos</h2>
            <ul>
                <li>
                    <a href="https://www.facebook.com/BabaluFashionOficial/">
                        <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/icon-facebook.png" alt="Faceboook">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/babalufashion/">
                        <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/icon-instagram.png" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/user/BabaluFashion1">
                        <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/icon-youtube.png" alt="Youtube">
                    </a>
                </li>
            </ul>
        </div>
    

        </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
