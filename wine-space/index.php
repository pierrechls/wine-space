<?php
/**
 *
 * @package winespace
 */

 include (TEMPLATEPATH . '/to-cart.php');
 include (TEMPLATEPATH . '/mail-wine-grower.php');
 
 get_header(); ?>

 	<div class="main-container nobg container-video" id="presentation"></div>
        
        <div id="code_promo" class="main-container" style="background-color: rgba(247,247,247,0.8)">
        	 <?php
		     		$args = array(
						'category_name' 	 => 'code-promo',
						'numberposts' 		 => 1,
						'posts_per_page' 	 => 1,
						'order'    			 => 'ASC'
					);
					query_posts( $args );
					$the_query = new WP_Query( $args );
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							the_content();
						endwhile;
					wp_reset_postdata(); 
			?>
        </div> 
        
         <div class="main-container" style="background-color: rgba(247,247,247,0.8)">
            <article id="cuvees">
                <div class="bxslider">
			        <div class="slider1">
			        	
			        	<?php
				            $args = array( 'post_type' => 'product', 'numberposts' => -1, 'posts_per_page' => -1, 'orderby' =>'date','order' => 'ASC' );
				            $loop = new WP_Query( $args );
				            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
				        ?>
				        
				        	<?php if($product->post->post_name != 'financement-participatif') {?>

			        	<div class="slide">
                          <?php the_content(); ?>
                          <div class="add-to-cart">
                          	<p><strong>Prix public conseillé :</strong><br/><?php echo $product->get_price(); ?>€ TTC</p>
						  	<!--<a href="<?php echo get_site_url(); ?>/panier/?add-to-cart=<?php the_ID(); ?>">Ajouter au panier</a>-->
                          </div>
						</div>
						<?php } ?>
						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
		        </div>
            </article>
        </div>
        
        <!-- 
        
         <div class="main-container">
            <div class="main wrapper clearfix">
                <article id="tarifs">
                	<section>
                        <h2>TARIFS / BON DE COMMANDE</h2>
                        <p>Merci de remplir la colonne quantité.</p>
                        
                        <form id="form_bon_commande" action="panier/" method="post" id="bdc" onsubmit="send_form_cuv()">
                        
                        	<?php
					            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'numberposts' => -1, 'stock' => 1, 'orderby' =>'date','order' => 'ASC' );
					            $loop = new WP_Query( $args );
					            $cpt=0;
					            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
					            	$cpt++;
					            endwhile; ?>
					        <?php wp_reset_query(); ?>
                            
                            <input type="hidden" value="<?php echo($cpt); ?>" name="nb_ligne" id="nb_ligne" />                    
                        <table>
                            <thead>
                              <tr>
                                <th>Cuvée</th>
                                <th>Contenant</th>
                                <th class="chiffre">PU TTC</th>
                                <th class="chiffre">Qté</th>
                                <th class="chiffre">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                            
                             <?php
					            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'numberposts' => -1, 'stock' => 1, 'orderby' =>'date','order' => 'ASC' );
					            $loop = new WP_Query( $args );
					            $cpt=1;
					            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
					            
					            
					        ?>
		                       <tr class="cuv_num" value="<?php the_ID(); ?>">
		                            <td><?php the_title(); ?></td><td><?php echo $product->get_categories( ', ', '</span>' ); ?><input type="hidden" value="<?php echo($cpt); ?>" id="equivalence_<?php echo($cpt); ?>" name="equivalence_<?php echo($cpt); ?>" /><input type="text" name="nom_<?php echo($cpt); ?>" id="nom_<?php echo($cpt); ?>" value="<?php the_title(); ?>" class="hide" /></td>
									<td class="chiffre"><input type="text" name="prix_<?php echo($cpt); ?>" id="prix_<?php echo($cpt); ?>" class="hide" readonly value="<?php echo $product->get_price(); ?>" /><input type="text" name="prix_aff_<?php echo($cpt); ?>" id="prix_aff_<?php echo($cpt); ?>" readonly value="<?php echo $product->get_price(); ?> €" /></td>
									<td class="chiffre"><input class="quantity" type="text" name="qte_<?php echo($cpt); ?>" id="qte_<?php echo($cpt); ?>" onkeyup="calcul()" onfocusout="calcul()"/></td>
									<td class="chiffre"><input type="text" name="total_<?php echo($cpt); ?>" id="total_<?php echo($cpt); ?>" class="hide" readonly /><input type="text" name="total_aff_<?php echo($cpt); ?>" id="total_aff_<?php echo($cpt); ?>" readonly /></td>
		                       </tr>
		                       
		                      <?php $cpt++; ?>
		                       
		                    <?php endwhile; ?>
					        <?php wp_reset_query(); ?>
      
                        </tbody>
                 </table>
                   
                 		<p class="tot"><strong>Total produits :</strong> <input type="text" name="total" class="hide" id="total" /> <input type="text" readonly name="total_aff" id="total_aff" /></p>
                 		<p class="tot"><strong>Frais de port :</strong> <input type="text" name="total_fdp" class="hide" id="total_fdp" /> <input type="text" readonly name="total_fdp_aff" id="total_fdp_aff" /></p>
						<p class="tot"><strong>Total :</strong> <input type="text" name="total_total" class="hide" id="total_total" /> <input type="text" readonly name="total_total_aff" id="total_total_aff" /></p>       
						
                        <input type="submit" class="bouton" value="Commander" style="float:right;"/>
                        <img id="ajax-loader-form-cuv" src="<?php bloginfo('template_directory'); ?>/images/form_cuv/ajax-loader.gif" style="display:none; width: 20px; height: auto; margin-right: 1em; margin-top: 0.4em; float: right;"/>
</div>
                        
                          
                     </form> 
                   </section>
                </article>
            </div> 
        </div>   
        
        -->
        
         <div class="main-container">
         
         <div id="map-canvas">
         
         <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQj19bhjOYQec1_CBi_Hp638fLO23QBfY&sensor=false"></script>
         <script src="<?php bloginfo('template_directory'); ?>/js/home-script.js"></script>
		</div>
         
         
            <div class="main wrapper clearfix">
                <article id="contact">
                    <section class="col1 margr">
                    	<h2>Formulaire de contact</h2>
                    	<form id="formSendMail">
                        	   
                        	   <fieldset>
                                  <p><input type="text" name="nom_c" id="nom_c" placeholder="Votre nom *"></p>
                                  <p><input type="text" name="email_c" id="email_c" placeholder="Votre email *"></p>
                                  <p><textarea name="message_c" id="message_c" placeholder="Votre message *"></textarea></p>
                                  <p><small>* Champs obligatoires</small></p>
                                  
                                  <p style="text-align: left;font-weight: 800;" id="alertformSendMail"></p>
                                  
                              <input type="submit" id="submitformSendMail"value="Envoyer" class="bouton"> 
                            </fieldset>
                        </form>
                    </section>
                    <section class="col2" style="float:right;">
                    	<h2 style="text-align:right;">Coordonnées</h2>
                        <p style="text-align:right;">Valor Vignes SAS<br/>
                        CD 118<br/>
                        ZAC Charles Cros<br/>
						11300 PIEUSSE<br/>
						FRANCE<br/>
						Mail : <a href="mailto:henrip009@gmail.com" style="color:#38393a">henrip009@gmail.com</a><br>
						Tél : <a href="tel:+33695868738" style="color:#38393a">06 95 86 87 38</a>
						<br clear="all"></p>
                    </section>
                </article>
            </div> 
        </div> 

<?php get_footer(); ?>
