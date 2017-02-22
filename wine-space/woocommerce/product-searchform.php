<form role="search" id="product-search-form" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<input id="input-search-product" type="search" class="search-field" placeholder="Rechercher un produit..." value="<?php echo get_search_query(); ?>" name="s" title="Recherchez un produit..." />
	<button id="cancel-search">Annuler</button>
	<input id="input-submit-search-product" type="submit" value="Rechercher" />
	<input type="hidden" name="post_type" value="product" />
</form>
