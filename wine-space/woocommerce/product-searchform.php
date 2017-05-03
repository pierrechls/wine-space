<div style="margin:0 auto; text-align:center;">
	<span class="custom-dropdown custom-dropdown--white">
		<select id="select-option-post-type" class="custom-dropdown__select custom-dropdown__select--white">
		    <option id="select-option-product" value="1">Produit</option>
			<option id="select-option-domaine" value="2">Domaine</option>
		</select>
	</span>
</div>

<form role="search" id="product-search-form" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<!-- <input id="input-search-product" type="search" class="search-field" placeholder="Rechercher un produit..." value="<?php echo get_search_query(); ?>" name="s" title="Recherchez un produit..." /> -->
	<input id="input-search-product" type="search" class="search-field" placeholder="Rechercher un produit..." value="" name="s" title="Recherchez un produit..." />
	<button class="cancel-search">Annuler</button>
	<input class="input-submit-search" id="input-submit-search-product" type="submit" value="Rechercher" />
	<input type="hidden" name="post_type" value="product" />
</form>

<form role="search" id="domaine-search-form" method="get" class="woocommerce-domaine-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<!-- <input id="input-search-domaine" type="search" class="search-field" placeholder="Rechercher un domaine..." value="<?php echo get_search_query(); ?>" name="s" title="Recherchez un domaine..." /> -->
	<input id="input-search-domaine" type="search" class="search-field" placeholder="Rechercher un domaine..." value="" name="s" title="Recherchez un domaine..." />
	<button class="cancel-search">Annuler</button>
	<input class="input-submit-search" id="input-submit-search-domaine" type="submit" value="Rechercher" />
	<input type="hidden" name="post_type" value="domaine" />
</form>