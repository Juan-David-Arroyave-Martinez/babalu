{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='page.tpl'}

    {block name='page_content_container'}
        <section id="content" class="page-home">

        {block name='page_content'}
          {block name='hook_home'}
            {$HOOK_HOME nofilter}
          {/block}
        {/block}

        
        <div class="slid-hom">
            {hook h='displayHome' mod='ps_imageslider'}
        </div>
        <div class="babalu-home-products">
            <div class="pro-title">Nuestras Categorías</div>
            <div class="desck-cats">
                <div class="col-products">
                    <a href="#"><img src="{$urls.img_ps_url}/custom/p-1-deportiva-mujer.jpg"></a>
                    <a href="#"><img src="{$urls.img_ps_url}/custom/p-2-deportiva-hombre.jpg"></a>
                    <a href="#"><img src="{$urls.img_ps_url}/custom/p-3-complementos.jpg"></a>
                </div>
                <div class="col-products">
                    <a href="#"><img src="{$urls.img_ps_url}/custom/p-4-trajes-bano-mujer.jpg"></a>
                    <a href="#"><img src="{$urls.img_ps_url}/custom/p-5-interior-hombre.jpg"></a>
                    <a href="#"><img src="{$urls.img_ps_url}/custom/p-6-infantil.jpg"></a>
                </div>
                <div class="col-products">
                    <a href="#"><img src="{$urls.img_ps_url}/custom/p-7-lingerie.jpg"></a>
                    <a href="#"><img src="{$urls.img_ps_url}/custom/p-8-outlet.jpg"></a>
                    <a href="#"><img src="{$urls.img_ps_url}/custom/p-9-tarrao-interior.jpg"></a>
                </div>
            </div>
            <div class="mob-cats">
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('{$urls.img_ps_url}/custom/mob-p-1-deportiva-mujer.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('{$urls.img_ps_url}/custom/mob-p-4-trajes-bano-mujer.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('{$urls.img_ps_url}/custom/mob-p-7-lingerie.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('{$urls.img_ps_url}/custom/mob-p-2-deportiva-hombre.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('{$urls.img_ps_url}/custom/mob-p-5-interior-hombre.jpg');" href="#"> </a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('{$urls.img_ps_url}/custom/mob-p-3-complementos.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('{$urls.img_ps_url}/custom/mob-p-6-infantil.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('{$urls.img_ps_url}/custom/mob-p-9-tarrao-interior.jpg');" href="#"></a>
                </div>
                <div class="col-xs-6">
                    <a class="col-image" style="background-image: url('{$urls.img_ps_url}/custom/mob-p-8-outlet.jpg');" href="#"> </a>
                </div>
                <div class="col-xs-6"></div>
            </div>
        </div>
        <div class="new-arrivals">
            <div class="col-lg-6 col-md-6 left">
                <img src="{$urls.img_ps_url}/custom/left-new-arrivals-esp.jpg">
            </div>
            <div class="col-lg-6 col-md-6 right hidden-xs-down hidden-sm-down">
                <div class="col-lg-6 col-md-6">
                    <img src="{$urls.img_ps_url}/custom/right-one-new-arrivals.jpg">
                </div>
                <div class="col-lg-6 col-md-6 hidden-xs-down hidden-sm-down">
                    <img src="{$urls.img_ps_url}/custom/right-two-new-arrivals.jpg">
                </div>
            </div>
        </div>
        <div class="babalu-brands">
            <h2>Nuestras marcas</h2>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <a href="#"><img src="{$urls.img_ps_url}/custom/logo-babalu_1.png" class="brand"></a>
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <a href="#"><img src="{$urls.img_ps_url}/custom/logo-inizio-active.png" class="brand"></a>
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <a href="#"><img src="{$urls.img_ps_url}/custom/logo-tarrao_1.png" class="brand"></a>
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
                        <img src="{$urls.img_ps_url}/custom/plus-symbol-in-a-rounded-black-square.svg" class="plsqr-icc"> <span class="hidden-xs hidden-sm">Ver más</span>
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
                    <a href="puntos-venta"><img src="{$urls.img_ps_url}/custom/plus-symbol-in-a-rounded-black-square.svg" class="plsqr-icc"><span>Ver más</span></a>
                </li>
            </ul>
        </div>
        <div class="babalu-contact">
            <div class="col-md-6 contact-content hidden-xs-down hidden-sm-down">
                <h2>SERVICIO AL CLIENTE</h2>
                <p>Comunícate con nosotros</p>
                <ul class="store-info">
                    <li><img class="icc-clndr" src="{$urls.img_ps_url}/custom/calendar-with-spring-binder-and-date-blocks.svg"> Lunes a Viernes 8:00 am - 05:30 pm (GMT-5)</li>
                    <li><img class="icc-clndr" src="{$urls.img_ps_url}/custom/calendar-with-spring-binder-and-date-blocks.svg"> Sábado 8:00 am - 12:00 pm (GMT-5)</li>
                    <li><img class="icc-cllaw" src="{$urls.img_ps_url}/custom/call-answer.svg"> (+57 4) 444 1078 Opción 1 (Ciudad de Medellín)<br/><img class="icc-cllaw" src="{$urls.img_ps_url}/custom/call-answer.svg"> 018000424999 Línea gratuita en Colombia<br/><img class="icc-cllaw" src="{$urls.img_ps_url}/custom/call-answer.svg"> 3054001527 Línea gratuita en EEUU, Puerto Rico, Canadá</li>
                    <li><img class="icc-envml" src="{$urls.img_ps_url}/custom/envelope.svg"> <a href="mailto:servicioalcliente@babalufashion.com">servicioalcliente@babalufashion.com</a>  (Servicio al cliente nacional)<br/><a href="mailto:comercioexterior@babalufashion.com">comercioexterior@babalufashion.com</a>  (Servicio al cliente internacional)</li>
                    <li><img class="icc-mpnt" src="{$urls.img_ps_url}/custom/maps-and-flags.svg"> Calle 46 Nº 53-14- CC La Gran Esquina Local 401 - Medellín</li>
                </ul>
            </div>
            <div class="col-md-6 contact-block-quitar hidden-xs-down hidden-sm-down">
                <a href="#"><img src="{$urls.img_ps_url}/custom/servicio_cliente.jpg"></a>
            </div>
        </div>
        <div class="social-section">
            <h2 class="title">Síguenos</h2>
            <ul class="lst-scl-foot">
                <li>
                    <a href="https://www.facebook.com/BabaluFashionOficial/">
                        <img class="img-responsive" src="{$urls.img_ps_url}/custom/icon-facebook.png" alt="Faceboook">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/babalufashion/">
                        <img class="img-responsive" src="{$urls.img_ps_url}/custom/icon-instagram.png" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/user/BabaluFashion1">
                        <img class="img-responsive" src="{$urls.img_ps_url}/custom/icon-youtube.png" alt="Youtube">
                    </a>
                </li>
            </ul>
        </div>
    

        </section>
    {/block}














