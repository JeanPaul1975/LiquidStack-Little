<div class="megamenu">
    <div class="col">
        <p><?=$col_01?></p> 
        <ul>
            <li>
                <a href="<?=$_ENV['RAIZ']."/".$lang?>">
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                    <span><?=$url0Text?></span>
                </a>
            </li>
            <li>
                <div>
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">                          
                    <span><a href="<?=$_ENV['RAIZ']."/".$lang."/".$url1?>"><?=$url1Text?></a></span>
                    <div class="submenu">
                        <ul>
                            <li>
                                <a href="<?=$_ENV['RAIZ']."/".$lang."/".$url1a?>">
                                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                                    <span><?=$url1aText?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$_ENV['RAIZ']."/".$lang."/".$url1b?>">
                                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                                    <span><?=$url1bText?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$_ENV['RAIZ']."/".$lang."/".$url1c?>">
                                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                                    <span><?=$url1cText?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$_ENV['RAIZ']."/".$lang."/".$url1d?>">
                                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                                    <span><?=$url1dText?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$_ENV['RAIZ']."/".$lang."/".$url1e?>">
                                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                                    <span><?=$url1eText?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="<?=$_ENV['RAIZ']."/".$lang."/".$url2?>">
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                    <span><?=$url2Text?></span>
                </a>
            </li>   
            <li>
                <a href="<?=$_ENV['RAIZ']."/".$lang."/".$url3?>">
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                    <span><?=$url3Text?></span>
                </a>
            </li>                  
        </ul>
    </div>
    <div class="col">
        <p><?=$col_03?></p>
        <ul>
            <li>
                <a href="https://infoda.eus/">
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                    <span><?=$col_05?></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/chevron-forward-outline.svg" alt="">
                    <span><?=$col_06?></span>
                </a>
            </li>                    
        </ul>
        <a href="#" class="boton"><?=$col_04?></a>
        <span><?=$col_07?></span>
        <div class="rrss">
            <a href="https://codepen.io/igor-aranaz" target="_blank"><img src="<?=$_ENV['RAIZ']?>/assets/img/cp.svg" alt=""></a>
            <a href="https://github.com/LiquidArtDevelopers" target="_blank"><img src="<?=$_ENV['RAIZ']?>/assets/img/gh.svg" alt=""></a>                    
            <a href="https://www.youtube.com/@LiquidArtDevelopers" target="_blank"><img src="<?=$_ENV['RAIZ']?>/assets/img/yt.svg" alt=""></a>
            <a href="https://x.com/liquidartdev" target="_blank"><img src="<?=$_ENV['RAIZ']?>/assets/img/x.svg" alt=""></a>
            <a href="https://www.linkedin.com/company/85639967/admin/feed/posts/" target="_blank"><img src="<?=$_ENV['RAIZ']?>/assets/img/in.svg" alt=""></a>
        </div>
    </div>
    <div class="col">
        <p><?=$col_08?></p>
        <ul>
            <li>
                <a href="mailto:aranaz@gmail.com">
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/mail.svg" alt="">
                    <span>info@webda.eus</span>
                </a>
            </li>
            <li>
                <a href="tel:+34628749350">
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/wa.svg" alt="">
                    <span>+34 628 749 350</span>
                </a>
            </li>
            <li>
                <a href="tel:+34943325136">
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/tel.svg" alt="">
                    <span>+34 943 325 136</span>
                </a>
            </li>
            <li>
                <a href="https://maps.app.goo.gl/grStktp2DmCAL8pB7" target="_blank">
                    <img src="<?=$_ENV['RAIZ']?>/assets/img/wp.svg" alt="">
                    <span>Portuetxe 23B oficina 413-4 20218 Donostia San Sebastián</span>
                </a>
            </li>                    
        </ul>
        <form action="validar.php" method="post">
            
            <input type="text" minlength="3" maxlength="100" name="nombre" placeholder="<?=$col_09?>" required>

            <input type="email" name="email" placeholder="<?=$col_10?>" required>
            <input class="boton" type="submit" value="<?=$col_11?>">
        </form>
    </div>
    <div class="idiomas">
        <p><?=$col_02?></p>
        <ul>
            <li><a href="<?=$_ENV['RAIZ']."/es"?>" hreflang="es" id="es" class="btn_idioma">ES</a></li>
            <li><a href="<?=$_ENV['RAIZ']."/eu"?>" hreflang="eu" id="eu" class="btn_idioma">EU</a></li>
            <li><a href="<?=$_ENV['RAIZ']."/en"?>" hreflang="en" id="en" class="btn_idioma">EN</a></li>
            <li><a href="<?=$_ENV['RAIZ']."/fr"?>" hreflang="fr" id="fr" class="btn_idioma">FR</a></li>
        </ul>
    </div>
</div>