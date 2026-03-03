<?php
global $lawgist;
$has_site_logo =   (!empty(lawgist_get_site_logo())) ? 'has-site-logo' : '';
?>
<header class="lawgist-header-area header-style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="lawgist-header-wrap">
                    <div class="site-branding <?php echo esc_attr($has_site_logo)  ?>">
                        <a href="<?php echo esc_url(home_url()) ?>">
                            <?php
                            printf("%s", lawgist_get_site_logo());
                            ?>
                        </a>
                    </div><!-- .site-branding -->
                    <div class="lawgist-menu-wrap">
                        <div class="lawgist-main-menu-wrap navbar menu-style-inline justify-content-end">
                            <button class="navbar-toggler open-menu" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" height="384pt" viewBox="0 -53 384 384" width="384pt"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"></path><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"></path><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"></path></svg></span>
                            </button>
                            <!-- end of Nav toggler -->
                            <div class="navbar-inner">
                                <div class="lawgist-mobile-menu"></div>
                                <button class="navbar-toggler close-menu" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" height="329pt" viewBox="0 0 329.26933 329" width="329pt"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"></path></svg></span>
                                </button>
                                <nav id="site-navigation" class="main-navigation ">
                                    <?php
                                    if (has_nav_menu('main-menu')) {
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'main-menu',
                                                'menu_class' => 'navbar-nav',
                                                'menu_id' => 'navbar-nav',
                                                'container_class' => 'lawgist-menu-container'
                                            )
                                        );
                                    }
                                    ?>
                                </nav><!-- #site-navigation -->
                            </div>
                        </div>
                    </div>

                    <!-- Randevu Butonu -->
                    <div class="randevu-header-btn">
                        <button class="randevu-btn" type="button">Randevu Al</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Randevu Modal -->
<div class="randevu-overlay" id="randevu-overlay">
    <div class="randevu-modal" role="dialog" aria-modal="true" aria-labelledby="randevu-baslik">
        <div class="randevu-modal-header">
            <h3 id="randevu-baslik">Randevu Al</h3>
            <button class="randevu-kapat" aria-label="Kapat">&times;</button>
        </div>

        <div class="randevu-progress">
            <div class="randevu-progress-adim aktif"></div>
            <div class="randevu-progress-adim"></div>
            <div class="randevu-progress-adim"></div>
        </div>

        <form id="randevu-form" novalidate>
            <div class="randevu-modal-body">

                <!-- Adım 1: Ad Soyad & Telefon -->
                <div class="randevu-adim aktif" id="randevu-adim-1">
                    <p class="randevu-adim-baslik">İletişim Bilgileriniz</p>
                    <div class="randevu-grup">
                        <label for="randevu-ad-soyad">Ad Soyad *</label>
                        <input type="text" id="randevu-ad-soyad" name="ad_soyad" placeholder="Adınızı ve soyadınızı giriniz">
                        <div class="randevu-hata-mesaj" id="hata-ad-soyad">Lütfen adınızı ve soyadınızı giriniz.</div>
                    </div>
                    <div class="randevu-grup">
                        <label for="randevu-telefon">Telefon Numarası *</label>
                        <input type="tel" id="randevu-telefon" name="telefon" placeholder="05XX XXX XX XX">
                        <div class="randevu-hata-mesaj" id="hata-telefon">Lütfen geçerli bir telefon numarası giriniz.</div>
                    </div>
                </div>

                <!-- Adım 2: Danışmanlık Konusu -->
                <div class="randevu-adim" id="randevu-adim-2">
                    <p class="randevu-adim-baslik">Danışmanlık Konusunu Seçiniz</p>
                    <div class="konu-secenekler">
                        <div class="konu-kart" data-konu="Aile Hukuku">Aile Hukuku</div>
                        <div class="konu-kart" data-konu="Miras Hukuku">Miras Hukuku</div>
                        <div class="konu-kart" data-konu="İş Davaları">İş Davaları</div>
                        <div class="konu-kart" data-konu="Kira Davaları">Kira Davaları</div>
                        <div class="konu-kart" data-konu="Sigorta Davaları">Sigorta Davaları</div>
                        <div class="konu-kart" data-konu="İcra İşleri">İcra İşleri</div>
                        <div class="konu-kart" data-konu="Diğer">Diğer</div>
                    </div>
                    <div class="randevu-hata-mesaj" id="hata-konu" style="margin-top:10px;">Lütfen bir danışmanlık konusu seçiniz.</div>
                </div>

                <!-- Adım 3: Tarih & Saat -->
                <div class="randevu-adim" id="randevu-adim-3">
                    <p class="randevu-adim-baslik">Tarih ve Saat Seçiniz</p>
                    <div class="randevu-grup">
                        <label for="randevu-tarih">Randevu Tarihi *</label>
                        <input type="date" id="randevu-tarih" name="tarih">
                        <div class="randevu-hata-mesaj" id="hata-tarih">Lütfen bir tarih seçiniz.</div>
                    </div>
                    <div class="randevu-grup">
                        <label>Randevu Saati *</label>
                        <div class="saat-secenekler">
                            <div class="saat-kart" data-saat="10:00">10:00</div>
                            <div class="saat-kart" data-saat="11:00">11:00</div>
                            <div class="saat-kart" data-saat="12:00">12:00</div>
                            <div class="saat-kart" data-saat="13:00">13:00</div>
                            <div class="saat-kart" data-saat="14:00">14:00</div>
                            <div class="saat-kart" data-saat="15:00">15:00</div>
                            <div class="saat-kart" data-saat="16:00">16:00</div>
                        </div>
                        <div class="randevu-hata-mesaj" id="hata-saat" style="margin-top:8px;">Lütfen bir saat seçiniz.</div>
                    </div>
                </div>

                <!-- Başarı Ekranı -->
                <div class="randevu-basari" style="display:none;">
                    <div class="randevu-basari-ikon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <h4>Randevunuz Alındı!</h4>
                    <p>Randevu talebiniz başarıyla iletildi.<br>En kısa sürede sizinle iletişime geçeceğiz.</p>
                </div>

                <div class="randevu-yukleniyor">Gönderiliyor, lütfen bekleyiniz...</div>

            </div><!-- .randevu-modal-body -->

            <div class="randevu-modal-footer">
                <button type="button" class="randevu-geri-btn" id="randevu-geri" style="display:none;">Geri</button>
                <button type="button" class="randevu-ileri-btn" id="randevu-ileri">Devam Et</button>
            </div>
        </form>
    </div>
</div>
<!-- /Randevu Modal -->