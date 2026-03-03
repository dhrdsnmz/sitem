jQuery(document).ready(function ($) {

    var mevcutAdim = 1;
    var toplamAdim = 3;
    var secilenKonu = '';
    var secilenSaat = '';

    // Modalı Aç
    $(document).on('click', '.randevu-btn', function () {
        $('.randevu-overlay').addClass('aktif');
        $('body').css('overflow', 'hidden');
        adimGoster(1);
    });

    // Modalı Kapat
    $(document).on('click', '.randevu-kapat, .randevu-overlay', function (e) {
        if ($(e.target).hasClass('randevu-overlay') || $(e.target).hasClass('randevu-kapat')) {
            modalKapat();
        }
    });

    function modalKapat() {
        $('.randevu-overlay').removeClass('aktif');
        $('body').css('overflow', '');
        formuSifirla();
    }

    function formuSifirla() {
        mevcutAdim = 1;
        secilenKonu = '';
        secilenSaat = '';
        $('#randevu-form')[0].reset();
        $('.konu-kart').removeClass('secili');
        $('.saat-kart').removeClass('secili');
        $('.randevu-hata-mesaj').hide();
        $('.randevu-adim input, .randevu-adim select').removeClass('hata');
        $('.randevu-basari').hide();
        $('.randevu-modal-body .randevu-adim').removeClass('aktif');
        $('.randevu-modal-footer').show();
        ilerlemeGuncelle(1);
    }

    // Adım Göster
    function adimGoster(adim) {
        mevcutAdim = adim;
        $('.randevu-adim').removeClass('aktif');
        $('#randevu-adim-' + adim).addClass('aktif');
        ilerlemeGuncelle(adim);

        // Geri butonu
        if (adim === 1) {
            $('#randevu-geri').hide();
        } else {
            $('#randevu-geri').show();
        }

        // İleri butonu metni
        if (adim === toplamAdim) {
            $('#randevu-ileri').text('Randevu Oluştur');
        } else {
            $('#randevu-ileri').text('Devam Et');
        }
    }

    // İlerleme Güncelle
    function ilerlemeGuncelle(adim) {
        $('.randevu-progress-adim').each(function (index) {
            $(this).removeClass('aktif tamamlandi');
            if (index + 1 < adim) {
                $(this).addClass('tamamlandi');
            } else if (index + 1 === adim) {
                $(this).addClass('aktif');
            }
        });
    }

    // Konu Seçimi
    $(document).on('click', '.konu-kart', function () {
        $('.konu-kart').removeClass('secili');
        $(this).addClass('secili');
        secilenKonu = $(this).data('konu');
    });

    // Saat Seçimi
    $(document).on('click', '.saat-kart', function () {
        $('.saat-kart').removeClass('secili');
        $(this).addClass('secili');
        secilenSaat = $(this).data('saat');
    });

    // Devam Et / Randevu Oluştur
    $(document).on('click', '#randevu-ileri', function () {
        if (!dogrulaAdim(mevcutAdim)) return;

        if (mevcutAdim < toplamAdim) {
            adimGoster(mevcutAdim + 1);
        } else {
            randevuGonder();
        }
    });

    // Geri
    $(document).on('click', '#randevu-geri', function () {
        if (mevcutAdim > 1) {
            adimGoster(mevcutAdim - 1);
        }
    });

    // Adım Doğrulama
    function dogrulaAdim(adim) {
        var gecerli = true;

        if (adim === 1) {
            var adSoyad = $('#randevu-ad-soyad').val().trim();
            var telefon = $('#randevu-telefon').val().trim();

            if (!adSoyad) {
                $('#randevu-ad-soyad').addClass('hata');
                $('#hata-ad-soyad').show();
                gecerli = false;
            } else {
                $('#randevu-ad-soyad').removeClass('hata');
                $('#hata-ad-soyad').hide();
            }

            var telefonRegex = /^[0-9\s\+\-\(\)]{10,15}$/;
            if (!telefon || !telefonRegex.test(telefon)) {
                $('#randevu-telefon').addClass('hata');
                $('#hata-telefon').show();
                gecerli = false;
            } else {
                $('#randevu-telefon').removeClass('hata');
                $('#hata-telefon').hide();
            }
        }

        if (adim === 2) {
            if (!secilenKonu) {
                $('#hata-konu').show();
                gecerli = false;
            } else {
                $('#hata-konu').hide();
            }
        }

        if (adim === 3) {
            var tarih = $('#randevu-tarih').val();
            if (!tarih) {
                $('#randevu-tarih').addClass('hata');
                $('#hata-tarih').show();
                gecerli = false;
            } else {
                $('#randevu-tarih').removeClass('hata');
                $('#hata-tarih').hide();
            }

            if (!secilenSaat) {
                $('#hata-saat').show();
                gecerli = false;
            } else {
                $('#hata-saat').hide();
            }
        }

        return gecerli;
    }

    // Minimum tarih: bugün
    var bugun = new Date().toISOString().split('T')[0];
    $('#randevu-tarih').attr('min', bugun);

    // AJAX ile Gönder
    function randevuGonder() {
        $('#randevu-ileri').prop('disabled', true).text('Gönderiliyor...');
        $('.randevu-yukleniyor').show();

        $.ajax({
            url: randevuAjax.ajaxurl,
            type: 'POST',
            data: {
                action: 'randevu_gonder',
                nonce: randevuAjax.nonce,
                ad_soyad: $('#randevu-ad-soyad').val().trim(),
                telefon: $('#randevu-telefon').val().trim(),
                konu: secilenKonu,
                tarih: $('#randevu-tarih').val(),
                saat: secilenSaat
            },
            success: function (response) {
                $('.randevu-yukleniyor').hide();
                if (response.success) {
                    $('.randevu-adim').removeClass('aktif');
                    $('.randevu-modal-footer').hide();
                    $('.randevu-progress').hide();
                    $('.randevu-basari').show();
                } else {
                    $('#randevu-ileri').prop('disabled', false).text('Randevu Oluştur');
                    alert('Bir hata oluştu. Lütfen tekrar deneyin.');
                }
            },
            error: function () {
                $('.randevu-yukleniyor').hide();
                $('#randevu-ileri').prop('disabled', false).text('Randevu Oluştur');
                alert('Bağlantı hatası. Lütfen tekrar deneyin.');
            }
        });
    }
});
