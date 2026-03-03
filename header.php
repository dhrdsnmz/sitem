<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content"> *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lawgist
 */

$lawgist = get_option( 'lawgist' );
?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
	
	<meta charset="utf-8">
	<title>Avukat Arabulucu Bilge YAKUT SÖNMEZ | Lüleburgaz  KIRKLARELİ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Lüleburgaz&#039;da yer alan Avukat Arabulucu Bilge Yakut Sönmez, hukuki ihtilaflarınızı çözmede uzmanlaşmış bir hukuk profesyonelidir. Deneyimli ve güvenilir bir avukat olarak, medeni hukuk, iş hukuku, aile hukuku ve İcra gibi birçok alanda geniş bir bilgi birikimine sahiptir. Bilge Yakut Sönmez, müvekkillere dürüstlük, şeffaflık ve etkinlikle yaklaşarak adil ve kalıcı çözümler sunmayı hedeflemektedir. Hukuki sorunlarınızı çözmek için güvenebileceğiniz bir avukat arıyorsanız, Bilge Yakut Sönmez size profesyonel yardım sağlayabilir." />
	<meta name="keywords" content="lüleburgaz avukat,lüleburgaz avukatları,lüleburgaz boşanma avukatı,lüleburgaz aile avukat,lüleburgaz en iyi avukat,avukat arama,avukat bul,lüleburgaz en iyi avukat, acil avukat,lüleburgaz barosu avukatları,boşanma avukatı,lülaburgaz arabulucu,lüleburgaz iş avukatı,danışmanlık">
	<meta name="author" content="Avukat Bilge YAKUT SÖNMEZ Lüleburgaz Avukat">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="robots" content="max-image-preview:large" />
	<link rel="canonical" href="https://yakuthukuk.com.tr/" />
	<script type="application/ld+json" class="aioseo-schema">
		{"@context":"https:\/\/schema.org","@graph":[{"@type":"BreadcrumbList","@id":"https:\/\/yakuthukuk.com.tr\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/yakuthukuk.com.tr\/#listItem","position":1,"item":{"@type":"WebPage","@id":"https:\/\/yakuthukuk.com.tr\/","name":"Home","description":"L\u00fcleburgaz'da yer alan Avukat Arabulucu Bilge Yakut S\u00f6nmez, hukuki ihtilaflar\u0131n\u0131z\u0131 \u00e7\u00f6zmede uzmanla\u015fm\u0131\u015f bir hukuk profesyonelidir. Deneyimli ve g\u00fcvenilir bir avukat olarak, medeni hukuk, i\u015f hukuku, aile hukuku ve \u0130cra gibi bir\u00e7ok alanda geni\u015f bir bilgi birikimine sahiptir. Bilge Yakut S\u00f6nmez, m\u00fcvekkillere d\u00fcr\u00fcstl\u00fck, \u015feffafl\u0131k ve etkinlikle yakla\u015farak adil ve kal\u0131c\u0131 \u00e7\u00f6z\u00fcmler sunmay\u0131 hedeflemektedir. Hukuki sorunlar\u0131n\u0131z\u0131 \u00e7\u00f6zmek i\u00e7in g\u00fcvenebilece\u011finiz bir avukat ar\u0131yorsan\u0131z, Bilge Yakut S\u00f6nmez size profesyonel yard\u0131m sa\u011flayabilir.","url":"https:\/\/yakuthukuk.com.tr\/"}}]},{"@type":"Organization","@id":"https:\/\/yakuthukuk.com.tr\/#organization","name":"Yakut Hukuk B\u00fcrosu","url":"https:\/\/yakuthukuk.com.tr\/","contactPoint":{"@type":"ContactPoint","telephone":"+902884124341","contactType":"Customer Support"}},{"@type":"WebPage","@id":"https:\/\/yakuthukuk.com.tr\/#webpage","url":"https:\/\/yakuthukuk.com.tr\/","name":"Yakut Hukuk B\u00fcrosu L\u00fcleburgaz Avukat","description":"L\u00fcleburgaz'da yer alan Avukat Arabulucu Bilge Yakut S\u00f6nmez, hukuki ihtilaflar\u0131n\u0131z\u0131 \u00e7\u00f6zmede uzmanla\u015fm\u0131\u015f bir hukuk profesyonelidir. Deneyimli ve g\u00fcvenilir bir avukat olarak, medeni hukuk, i\u015f hukuku, aile hukuku ve \u0130cra gibi bir\u00e7ok alanda geni\u015f bir bilgi birikimine sahiptir. Bilge Yakut S\u00f6nmez, m\u00fcvekkillere d\u00fcr\u00fcstl\u00fck, \u015feffafl\u0131k ve etkinlikle yakla\u015farak adil ve kal\u0131c\u0131 \u00e7\u00f6z\u00fcmler sunmay\u0131 hedeflemektedir. Hukuki sorunlar\u0131n\u0131z\u0131 \u00e7\u00f6zmek i\u00e7in g\u00fcvenebilece\u011finiz bir avukat ar\u0131yorsan\u0131z, Bilge Yakut S\u00f6nmez size profesyonel yard\u0131m sa\u011flayabilir.","inLanguage":"en-US","isPartOf":{"@id":"https:\/\/yakuthukuk.com.tr\/#website"},"breadcrumb":{"@id":"https:\/\/yakuthukuk.com.tr\/#breadcrumblist"},"datePublished":"2022-12-30T15:35:09+00:00","dateModified":"2023-06-12T10:12:42+00:00"},{"@type":"WebSite","@id":"https:\/\/yakuthukuk.com.tr\/#website","url":"https:\/\/yakuthukuk.com.tr\/","name":"Yakut Hukuk - L\u00fcleburgaz Avukatl\u0131k ve Arabuluculuk B\u00fcrosu","alternateName":"Yakut Hukuk B\u00fcrosu","description":"L\u00fcleburgaz Avukat arabulucu ve Hukuk B\u00fcrosu","inLanguage":"en-US","publisher":{"@id":"https:\/\/yakuthukuk.com.tr\/#organization"},"potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https:\/\/yakuthukuk.com.tr\/?s={search_term_string}"},"query-input":"required name=search_term_string"}}]}
	</script>


	<?php wp_head();?>
</head>


<body <?php body_class();?>>
	<?php wp_body_open();?>

	<!-- preloader  -->

	<?php lawgist_preloader()?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lawgist' );?></a>

		<!-- end lawgist header -->
		<?php if ( get_header_image() ): ?>
			<div id="site-header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php esc_url( header_image() );?>" width="<?php echo esc_attr( absint( get_custom_header()->width ) ); ?>" height="<?php echo esc_attr( absint( get_custom_header()->height ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div>
		<?php endif;?>

		<?php
global $lawgistObj;
lawgist_header_settings();
?>