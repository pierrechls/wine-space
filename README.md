[![Version](https://img.shields.io/badge/version-1.0-green.svg)](https://img.shields.io/badge/version-1.1-green.svg) [![Build status](https://img.shields.io/badge/build-passing-green.svg)](https://img.shields.io/badge/build-passing-green.svg) [![CMS](https://img.shields.io/badge/CMS-WordPress-lightgrey.svg)](https://img.shields.io/badge/CMS-WordPress-lightgrey.svg) [![eCommerce](https://img.shields.io/badge/E%20Commerce%20solution-WooCommerce-lightgrey.svg)](https://img.shields.io/badge/E%20Commerce%20solution-WooCommerce-lightgrey.svg)

# Wine Space

![preview](https://raw.githubusercontent.com/pierrechls/wine-space/master/wine-space/images/preview.png)

> Wine Space is a template for WordPress using WooCommerce e-commerce plugin

## How to use it

### Clone the project

    git clone https://github.com/pierrechls/wine-space.git
    
### Add theme to your WordPress

- **Upload** the folder named *wine-space* to `/wp-content/themes/` folder using your favorite FTP Client
- **Activate** it via your admin interface (`Appearance > Themes`)

### Install WooCommerce

- **Download** WooCommerce plugin 
    - from [WordPress](https://fr.wordpress.org/plugins/woocommerce/) website  
    - from [WooThemes](https://www.woothemes.com/woocommerce/) website 
    - from your admin interface (`Plugins > Add`) and search "*WooCommerce*"
    
- **Active** WooCommerce plugin 
    - from your admin interface (`Plugins`) and click to "*Activate*"
    - follow WooCommerce configuration and complete with your settings
    
- **Active** your favorite langage
    - download your langage from the [langage pack](https://translate.wordpress.org/projects/wp-plugins/woocommerce/language-packs)
    - add downloaded files into WooCommerce plugin folder
    
- **Check** if pages created by WooCommerce have these URLs
    - Checkout : *http://your-website-url/commande/*
    - Cart : *http://your-website-url/panier/*
    - My account : *http://your-website-url/mon-compte/*
    - Shop : *http://your-website-url/boutique/*
    
### Configure your map

- Add your personnal Google Map API key into `index.php` file at line *126*
- Custome your position and map style into `home-script.js` file in `js` folder 
 
### Create content

#### Add some pages

- History page
    - Name : Histoire
    - URL : *http://your-website-url/histoire/*
    - Content : 

```html
<div id="background_section_image">
    <img src="YOUR_IMAGE.jpg"/>
</div>
<div id="text">
    <h1>Histoire</h1>
    <div class="pag_1">Some text</div>
    <div class="pag_2">Some text</div>
</div>
```

- Terroir page
    - Name : Le terroir
    - URL : *http://your-website-url/terroir/*
    - Content : 

```html
<div id="background_section_image">
    <img src="YOUR_IMAGE.jpg"/>
</div>
<div id="text">
    <h1 style="text-align: center;">Le terroir</h1>
    <p style="text-align: center;"><img src="YOUR_LOGO.jpg"/></p>
    <div class="pag_1">Some text</div>
    <div class="pag_2">Some text</div>
</div>
```

- Photo gallery page
    - Name : Phototèque
    - URL : *http://your-website-url/phototeque/*
    - Content : your Wordpress photo gallery
        
- Majority page
    - Name : Majorité
    - URL : *http://your-website-url/majority/*
    - Content : none

- Sorry majority page
    - Name : Désolé, vous n'êtes pas majeur
    - URL : *http://your-website-url/sorry-majority/*
    - Content : none
    
- International fee schedule page
    - Name : Grille tarifaire international
    - URL : *http://your-website-url/grille-tarifaire-international/*
    - Content : your international fee schedule

- Terms and conditions page
    - Name : Mentions légales
    - URL : *http://your-website-url/mentions-legales/*
    - Content : your terms and conditions

- General conditions of sale page
    - Name : Conditions Générales de Vente
    - URL : *http://your-website-url/conditions-generales-de-vente/*
    - Content : your general conditions of sale

#### Add some product categories

- **Go** to `Products > Categories` in your WordPress admin interface
- Add these categories, but you can add your personal categories :
    - Bouteille
    - Demi-bouteille
    - Magnum
    - Jéroboam
    - Mathusalem
    - Ratafia

#### Add some products

For each product you add, do not forget to add **product price**, select a **product category**, and add a **product thumbnail**.

- **Go** to `Products > Add product`
- **Add** your product title
- **Add** product price
- **Select** a product category
- **Add** a product thumbnail
- **Add** content (with scenarisation description text on left) : 

```html
<div class="slide_description">
    <img src="YOUR_IMAGE.png" class="photo_cuv" />
</div>
<div class="slide_scena">
    <img src="YOUR_IMAGE.jpg" />
    <img src="YOUR_IMAGE.jpg" />
</div>
<div class="text_scena_description left">
    <h2>Your product title</h2>
    <div class="slide_description">
        <h4>Some text</h4>
        <p><em>Some text</em></p>
        <a href="PRODUCT_LINK">Découvrir</a>
    </div>
    <div class="slide_scena">
        <p>Some text</p>
        <p>Some text</p>
        <a id="fiche_technique" href="FICHE_PRODUCT.pdf" target="_blank">Fiche technique</a>
        <a href="http://your-website-url//#tarifs">Commander</a>
    </div>
</div>
```

- **Add** content (with scenarisation description text on right) : 

```html
<div class="slide_description">
    <img src="YOUR_IMAGE.png" class="photo_cuv" />
</div>
<div class="slide_scena">
    <img src="YOUR_IMAGE.jpg" />
    <img src="YOUR_IMAGE.jpg" />
</div>
<div class="text_scena_description right">
    <h2>Your product title</h2>
    <div class="slide_description">
        <h4>Some text</h4>
        <p><em>Some text</em></p>
        <a href="PRODUCT_LINK">Découvrir</a>
    </div>
    <div class="slide_scena">
        <p>Some text</p>
        <p>Some text</p>
        <a id="fiche_technique" href="FICHE_PRODUCT.pdf" target="_blank">Fiche technique</a>
        <a href="http://your-website-url//#tarifs">Commander</a>
    </div>
</div>
```

#### Add some article categories

- **Go** to `Posts > Categories` in your WordPress admin interface
- Add blog category (to post some news on the blog page) :
    - Name : *Blog*
    - Slug : *blog*
- Add promotion code category (to display the scenarisation code promo on the homepage) :
    - Name : *Code Promo*
    - Slug : *code-promo*

#### Add some articles   

- **Go** to `Posts > Add` in your WordPress admin interface
- Add your promotion code post
    - Title : *Code Promo*
    - Category : *Code Promo*
    - Content : 

```html    
<img id="code_promo_desktop" src="YOUR_IMAGE.jpg" />
<img id="code_promo_mobile" src="YOUR_IMAGE.jpg" />
```

- Add your first blog post
    - Title : *Bienvenue sur le nouveau site de Wine Grower*
    - Category : *Blog*
    - Content : 

```html    
<p>Nous sommes heureux de vous présenter notre nouveau site e-commerce Wine Grower.</p>
<h2>Un outil adapté aux vignerons</h2>
<img src="SLIDER_SCREENSHOT.png" />
<p>À l'aide de notre slider de produits, vous pouvez visionner l'ensemble de nos produits et y trouver des informations techniques. Vous y trouverez aussi des fiches techniques permettant de vous aider à les déguster. Le formulaire de commande a été pensé pour vous faciliter la commande, comme sur un papier, il vous suffit de rentrer le nombre de bouteille que vous désirez.</p>
<h2>Une solution de paiement sécurisée</h2>
<img src="E_TRANSACTIONS_ICON.png"/>
<p>Un paiement en ligne sécurisé via la technologie E-transaction de la banque Crédit Agricole. Vous pourrez payer avec votre carte bancaire en toute sécurité.</p>
<p>Des possibilités de paiement par chèque et par virement bancaire sont aussi disponibles.</p>
```
    
## Prior installation

You have to download [Wordpress](https://wordpress.org/download/) and install it on you server.


