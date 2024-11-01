<?php
/*
Plugin Name: Social media in the sidebar
Plugin URI: http://wordpress.org/support/profile/fasalusweanscom
Description: WP-Cycle slider as widget
version:1.0
Author: Rahman
Author URI: http://wordpress.org/support/profile/fasalusweanscom
*/


class fr_Social_media extends WP_Widget {
        
        function fr_Social_media() {
		     $this->fr_Socailmedia_init();
            $widget_ops = array( 'description' => 'Social media Widget' );
            parent::WP_Widget( false, 'Social media Widget', $widget_ops );
        }
        function update($new_instance, $old_instance) {
            $instance = $old_instance;
            
            $instance['title'] = strip_tags( $new_instance['title'] );
            $instance['back_color'] = strip_tags( $new_instance['back_color'] );
			$instance['width'] = strip_tags( $new_instance['width'] );
			$instance['height'] = strip_tags( $new_instance['height'] );
			$instance['widget_margin'] = strip_tags( $new_instance['widget_margin'] );		
			$instance['fb'] = strip_tags( $new_instance['fb'] );
			$instance['fb1'] = strip_tags( $new_instance['fb1'] );
			$instance['tw'] = strip_tags( $new_instance['tw'] );
			$instance['tw1'] = strip_tags( $new_instance['tw1'] );
			$instance['rss'] = strip_tags( $new_instance['rss'] );
			$instance['rss1'] = strip_tags( $new_instance['rss1'] );
			$instance['yt'] = strip_tags( $new_instance['yt'] );
			$instance['yt1'] = strip_tags( $new_instance['yt1'] );
			$instance['google_plus'] = strip_tags( $new_instance['google_plus'] );
			$instance['google_plus1'] = strip_tags( $new_instance['google_plus1'] );
			$instance['in'] = strip_tags( $new_instance['in'] );
			$instance['in1'] = strip_tags( $new_instance['in1'] );
			
			$instance['class_for_all'] = strip_tags( $new_instance['class_for_all'] );
			$instance['single_icon'] = strip_tags( $new_instance['single_icon'] );
			
    
            return $instance;
        }
        function widget($args, $instance) {
            extract( $args );
            
            $title = apply_filters('widget_title', $instance['title'] );
    		
			echo '<div class="fr_wrapper" style="background-color: '.$instance['back_color'].'; padding: '.$instance['widget_margin'].'px;width:'.$instance['width'].'px; height:'.$instance['height'].'px;">
								<div class="'.$instance['class_for_all'].'">
									<h3>
										'.$title.'
									</h3>
									<p>'; ?>
                                    <?php if($instance['fb']){ ?>
                                   <div class="<?php echo $instance['single_icon']; ?>"> <a href="<?php echo $instance['fb1']; ?>" target="_blank"><img src="<?php echo $instance['fb'];  ?>" alt="" /></a></div>
                                    <?php } ?>
                                     <?php if($instance['tw']){ ?>
                                  <div class="<?php echo $instance['single_icon']; ?>"> <a href="<?php echo $instance['tw1'];  ?>" target="_blank"><img src="<?php echo $instance['tw'];  ?>" alt="" /></a></div>
                                     <?php } ?>
                                     <?php if($instance['rss']){ ?>
                                <div class="<?php echo $instance['single_icon']; ?>"> <a href="<?php echo $instance['rss1']; ?>" target="_blank"><img src="<?php echo $instance['rss'];  ?>" alt="" /></a></div>
                                     <?php } ?>
                                     <?php if($instance['yt']){ ?>
                                  <div class="<?php echo $instance['single_icon']; ?>"><a href="<?php echo $instance['yt1']; ?>" target="_blank"><img src="<?php echo $instance['yt'];  ?>" alt="" /></a></div>
                                     <?php } ?>
                                     <?php if($instance['google_plus']){ ?>
                                   <div class="<?php echo $instance['single_icon']; ?>"> <a href="<?php echo $instance['google_plus1']; ?>" target="_blank"><img src="<?php echo $instance['google_plus'];  ?>" alt="" /></a>		</div> <?php } ?>
                                   
                                    <?php if($instance['in']){ ?>
                                   <div class="<?php echo $instance['single_icon']; ?>"> <a href="<?php echo $instance['in1']; ?>" target="_blank"><img src="<?php  echo $instance['in']; ?>" alt="" /></a></div>
                                    	 <?php } ?>
									</p>
									</p>
									<div style="clear:both;"></div>
								</div>
							</div>
      <?php   }

		
		
        function form($instance) {
            
            $defaults = array( 'title' => 'Social media widget', 'back_color' => '#ffffff', 'width' => ' ', 'widget_margin' => '20' );
            $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
                <input class="widefat fr_name" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
            </p>
    		
    		
    		<p>
    			<label for="<?php echo $this->get_field_id( 'back_color' ); ?>">Box color:</label>
    			<select class="widefat " onchange="jQuery(this).parent().parent().find('textarea').css('backgroundColor', this.value);" id="<?php echo $this->get_field_id( 'back_color' ); ?>" name="<?php echo $this->get_field_name( 'back_color' ); ?>">
    				<?php
    					$colors = array( '#ffffff',
    									'#05b8fd',
    									'#569239',
    									'#c5dace',
    									'#fdf061',
    									'#d2e4fc',
    									'#ff6666',
    									'#666666',
    									'#77cca4',
    									'#556270',
    									'#05c690',
    									'#f2d694',
    									'#bee0f8',
										'#000000');
						
						$colorNames = array( 'White',
    									'Blue down',
    									'Primeval Mother',
    									'White green',
    									'Sonce',
    									'Lovelest',
    									'Big Foots Delight',
    									'Darth Gray',
    									'Minted Peas',
    									'Mighty Slate',
    									'Marziene winter green',
    									'Koi Carp',
    									'Retro',
										'black');
										
						for ($i=0; $i < count($colors); $i++) { 
							echo '<option value="'.$colors[$i].'" '.($instance['back_color']==$colors[$i] ? 'selected="selected"' : '').'>'.$colorNames[$i].'</option>';
						}
    				?>
    			</select>
    		</p>
    		      
            <p>
                <label for="<?php echo $this->get_field_id( 'widget_margin' ); ?>">Widget margin:</label>
                <input class="fr_padding" id="<?php echo $this->get_field_id( 'widget_margin' ); ?>" name="<?php echo $this->get_field_name( 'widget_margin' ); ?>" value="<?php echo $instance['widget_margin']; ?>" />
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id( 'width' ); ?>">Width :</label>
                <input class="fr_padding" id="<?php echo $this->get_field_id( 'width' ); ?>" name="<?php echo $this->get_field_name('width'); ?>" value="<?php echo $instance['width']; ?>" />
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id( 'height' ); ?>">height :</label>
                <input class="fr_padding" id="<?php echo $this->get_field_id( 'height' ); ?>" name="<?php echo $this->get_field_name( 'height' ); ?>" value="<?php echo $instance['height']; ?>" />
            </p>
            
            
            
             <p>
                <label for="<?php echo $this->get_field_id( 'class_for_all' ); ?>">Wrapper Class For All Icons:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'class_for_all' ); ?>" name="<?php echo $this->get_field_name( 'class_for_all' ); ?>" value="<?php echo $instance['class_for_all']; ?>" />
            </p>
            
             <p>
                <label for="<?php echo $this->get_field_id( 'single_icon' ); ?>">Class for one Icon:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'single_icon' ); ?>" name="<?php echo $this->get_field_name( 'single_icon' ); ?>" value="<?php echo $instance['single_icon']; ?>" />
            </p>
           
              
             <p>
                <label for="<?php echo $this->get_field_id( 'fb' ); ?>">Social Icon 1  :</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'fb' ); ?>" name="<?php echo $this->get_field_name( 'fb' ); ?>" value="<?php echo $instance['fb']; ?>" />
            </p>
             <p>
                <label for="<?php echo $this->get_field_id( 'fb1' ); ?>">Icon 1 link:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'fb1' ); ?>" name="<?php echo $this->get_field_name( 'fb1' ); ?>" value="<?php echo $instance['fb1']; ?>" />
            </p>
            
           <!-- twitter -->
            
              <p>
                <label for="<?php echo $this->get_field_id( 'tw' ); ?>"> Social Icon 2 :</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'tw' ); ?>" name="<?php echo $this->get_field_name( 'tw' ); ?>" value="<?php echo $instance['tw']; ?>" />
            </p>
            
             <p>
                <label for="<?php echo $this->get_field_id( 'tw1' ); ?>">Icon 2 link:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'tw1' ); ?>" name="<?php echo $this->get_field_name( 'tw1' ); ?>" value="<?php echo $instance['tw1']; ?>" />
            </p>
            
            <!-- rss -->
              <p>
                <label for="<?php echo $this->get_field_id( 'rss' ); ?>">Social Icon 3 :</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'rss' ); ?>" name="<?php echo $this->get_field_name( 'rss' ); ?>" value="<?php echo $instance['rss']; ?>" />
            </p>
             <p>
                <label for="<?php echo $this->get_field_id( 'rss1' ); ?>">Icon 3 Link :</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'rss1' ); ?>" name="<?php echo $this->get_field_name( 'rss1' ); ?>" value="<?php echo $instance['rss1']; ?>" />
            </p>
            
            <!-- you tube -->
            
              <p>
                <label for="<?php echo $this->get_field_id( 'yt' ); ?>">Social Icon 4 :</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'yt' ); ?>" name="<?php echo $this->get_field_name( 'yt' ); ?>" value="<?php echo $instance['yt']; ?>" />
            </p>
              <p>
                <label for="<?php echo $this->get_field_id( 'yt1' ); ?>">Icon 4 link :</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'yt1' ); ?>" name="<?php echo $this->get_field_name( 'yt1' ); ?>" value="<?php echo $instance['yt1']; ?>" />
            </p>
            
            <!-- google plus -->
              <p>
                <label for="<?php echo $this->get_field_id( 'google_plus' ); ?>">Social Icon 5 :</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'google_plus' ); ?>" name="<?php echo $this->get_field_name( 'google_plus' ); ?>" value="<?php echo $instance['google_plus']; ?>" />
            </p>
            
               <p>
                <label for="<?php echo $this->get_field_id( 'google_plus1' ); ?>">Icon 5 link:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'google_plus1' ); ?>" name="<?php echo $this->get_field_name( 'google_plus1' ); ?>" value="<?php echo $instance['google_plus1']; ?>" />
            </p>
            <!-- linked in URL-->
            
             <p>
                <label for="<?php echo $this->get_field_id( 'in' ); ?>">Social Icon 6 :</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'in' ); ?>" name="<?php echo $this->get_field_name( 'in' ); ?>" value="<?php echo $instance['in']; ?>" />
            </p>
            
             <p>
                <label for="<?php echo $this->get_field_id( 'in1' ); ?>">Icon 6  Link:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'in1' ); ?>" name="<?php echo $this->get_field_name( 'in1' ); ?>" value="<?php echo $instance['in1']; ?>" />
            </p>
            
               

        <?php  }
		 private function fr_Socailmedia_init() { 
   			 if(!defined('fr_Social_media')) { 
      		define('fr_Social_media', 'Social media Widget'); 
    		}
  		} 
		
		
    }
    add_action( 'widgets_init', 'fr_Social_media' );
    function fr_Social_media(){ 
        register_widget('fr_Social_media');
    }
?>