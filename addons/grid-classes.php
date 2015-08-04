<?php

/**
 * You can enable/disable this feature in functions.php):
 * add_theme_support('bsg-grid-classes');
 */


function genesis_add_bs_widgets_form($t,$return,$instance) {
    $instance = wp_parse_args(
        (array)$instance,
        array(
          'genesis_bs_row_start'        => '',
          'genesis_bs_row_end'          => '',
          'genesis_bs_col_lg'           => '',
          'genesis_bs_col_lg_offset'    => '',
          'genesis_bs_col_md'           => '',
          'genesis_bs_col_md_offset'    => '',      
          'genesis_bs_col_sm'           => '',
          'genesis_bs_col_sm_offset'    => '',  
          'genesis_bs_col_xs'           => '',
          'genesis_bs_col_xs_offset'    => '',
          'genesis_bs_hide_lg'          => '',
          'genesis_bs_hide_md'          => '',
          'genesis_bs_hide_sm'          => '',
          'genesis_bs_hide_xs'          => '',
        )
    );
    $cols = array(0,1,2,3,4,5,6,7,8,9,10,11,12);
    ?>
    <div class="genesis-bs-widget-columns">
      <h3><a href="#" class="genesis-bs-widget-columns-handle"><?php _e('Bootstrap grid class', 'genesis-bscol'); ?> <span class="dashicons dashicons-arrow-down-alt"></span></a></h3>
      <div class="genesis-bs-widget-columns-inner">
        <hr>
    <!-- Rows -->
        <div class="form-group">
          <label for="<?php echo $t->get_field_id('genesis_bs_row_start'); ?>">
          <input
            class="genesis-bs-grid-input"
            id="<?php echo $t->get_field_id('genesis_bs_row_start'); ?>"
            name="<?php echo $t->get_field_name('genesis_bs_row_start'); ?>"
            type="checkbox"
            value="1"
            <?php echo $instance['genesis_bs_row_start'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Open a .row', 'genesis-bscol'); ?></label>
        </div>
    
        <div class="form-group">
          <label for="<?php echo $t->get_field_id('genesis_bs_row_end'); ?>">
          <input
            class="genesis-bs-grid-input"
            id="<?php echo $t->get_field_id('genesis_bs_row_end'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('genesis_bs_row_end'); ?>"
            value="1"
            <?php echo $instance['genesis_bs_row_end'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Close a .row', 'genesis-bscol'); ?></label>
        </div>
        <hr>
    
    
    <p>
    <!-- <i class="fa fa-desktop"></i> -->
    <span class="dashicons dashicons-desktop"></span> <?php _e('Desktops ', 'genesis-bscol'); ?>
    </p>
    <div class="form-inline">
        <div class="form-group">          
    <label for="<?php echo $t->get_field_id('genesis_bs_col_lg'); ?>"><?php _e('.col-lg- ', 'genesis'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('genesis_bs_col_lg'); ?>" name="<?php echo $t->get_field_name('genesis_bs_col_lg'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['genesis_bs_col_lg'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">          
          <label for="<?php echo $t->get_field_id('genesis_bs_col_lg_offset'); ?>"><?php _e('.col-lg-offset- ', 'genesis'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('genesis_bs_col_lg_offset'); ?>" name="<?php echo $t->get_field_name('genesis_bs_col_lg_offset'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['genesis_bs_col_lg_offset'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
    </div>  
    
    <hr>
        
    <p>
    <!-- <i class="fa fa-laptop"></i> -->
    <span class="dashicons dashicons-tablet"></span> <?php _e('Labtops ', 'genesis-bscol'); ?>
    </p>
        
    <div class="form-inline">
        
        <div class="form-group">          
          <label for="<?php echo $t->get_field_id('genesis_bs_col_md'); ?>"><?php _e('.col-md- ', 'genesis'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('genesis_bs_col_md'); ?>" name="<?php echo $t->get_field_name('genesis_bs_col_md'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['genesis_bs_col_md'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>    
        
        <div class="form-group">          
          <label for="<?php echo $t->get_field_id('genesis_bs_col_md_offset'); ?>"><?php _e('.col-md-offset- ', 'genesis'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('genesis_bs_col_md_offset'); ?>" name="<?php echo $t->get_field_name('genesis_bs_col_md_offset'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['genesis_bs_col_md_offset'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>        
    </div>  
        
    <hr>  
    
    <p>
    <!-- <i class="fa fa-tablet"></i> -->
    <span class="dashicons dashicons-smartphone"></span> <?php _e('Tablets ', 'genesis-bscol'); ?>
    </p>

    <div class="form-inline">
    <div class="form-group">          
          <label for="<?php echo $t->get_field_id('genesis_bs_col_sm'); ?>"><?php _e('.col-sm- ', 'genesis'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('genesis_bs_col_sm'); ?>" name="<?php echo $t->get_field_name('genesis_bs_col_sm'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['genesis_bs_col_sm'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>  
        
        <div class="form-group">          
          <label for="<?php echo $t->get_field_id('genesis_bs_col_sm_offset'); ?>"><?php _e('.col-sm-offset- ', 'genesis'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('genesis_bs_col_sm_offset'); ?>" name="<?php echo $t->get_field_name('genesis_bs_col_sm_offset'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['genesis_bs_col_sm_offset'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>        
        </div>
        
    <hr>
    
    <p>
    <!-- <i class="fa fa-mobile"></i> -->
    <span class="dashicons dashicons-phone"></span> <?php _e('Phones ', 'genesis-bscol'); ?> 
    </p>

    <div class="form-inline">
    <div class="form-group">          
          <label for="<?php echo $t->get_field_id('genesis_bs_col_xs'); ?>"><?php _e('.col-xs- ', 'genesis'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('genesis_bs_col_xs'); ?>" name="<?php echo $t->get_field_name('genesis_bs_col_xs'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['genesis_bs_col_xs'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>        

        <div class="form-group">              
          <label for="<?php echo $t->get_field_id('genesis_bs_col_xs_offset'); ?>"><?php _e('.col-xs-offset- ', 'genesis'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('genesis_bs_col_xs_offset'); ?>" name="<?php echo $t->get_field_name('genesis_bs_col_xs_offset'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['genesis_bs_col_xs_offset'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>        
        </div>
        
        
    <hr>
        <p>
          <label for="<?php echo $t->get_field_id('genesis_bs_hide_lg'); ?>">
          <input
            class="genesis-bs-grid-input"
            id="<?php echo $t->get_field_id('genesis_bs_hide_lg'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('genesis_bs_hide_lg'); ?>"
            value="1"
            <?php echo $instance['genesis_bs_hide_lg'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Hide on .col-lg', 'genesis'); ?></label>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('genesis_bs_hide_md'); ?>">
          <input
            class="genesis-bs-grid-input"
            id="<?php echo $t->get_field_id('genesis_bs_hide_md'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('genesis_bs_hide_md'); ?>"
            value="1"
            <?php echo $instance['genesis_bs_hide_md'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Hide on .col-md', 'genesis'); ?></label>
        </p>
        <p>
            <label for="<?php echo $t->get_field_id('genesis_bs_hide_sm'); ?>">
            <input
              class="genesis-bs-grid-input"
              id="<?php echo $t->get_field_id('genesis_bs_hide_sm'); ?>"
              type="checkbox"
              name="<?php echo $t->get_field_name('genesis_bs_hide_sm'); ?>"
              value="1"
              <?php echo $instance['genesis_bs_hide_sm'] == '1' ? ' checked="checked"' : ''; ?>>
              <?php _e('Hide on .col-sm', 'genesis'); ?></label>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('genesis_bs_hide_xs'); ?>">
          <input
            class="genesis-bs-grid-input"
            id="<?php echo $t->get_field_id('genesis_bs_hide_xs'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('genesis_bs_hide_xs'); ?>"
            value="1"
            <?php echo $instance['genesis_bs_hide_xs'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Hide on .col-xs', 'genesis'); ?></label>
        </p>
        
      </div>
    </div>
    <?php
    $return = null;
    return array($t,$return,$instance);
}
add_action('in_widget_form', 'genesis_add_bs_widgets_form',5,3);
function genesis_add_bs_widgets_form_update($instance, $new_instance, $old_instance){
    $instance['genesis_bs_row_start'] = $new_instance['genesis_bs_row_start'];
    $instance['genesis_bs_row_end']   = $new_instance['genesis_bs_row_end'];
    $instance['genesis_bs_col_lg']    = $new_instance['genesis_bs_col_lg'];
  $instance['genesis_bs_col_lg_offset']    = $new_instance['genesis_bs_col_lg_offset'];
    $instance['genesis_bs_col_md']    = $new_instance['genesis_bs_col_md'];
    $instance['genesis_bs_col_md_offset']    = $new_instance['genesis_bs_col_md_offset'];
    $instance['genesis_bs_col_sm']    = $new_instance['genesis_bs_col_sm'];
    $instance['genesis_bs_col_sm_offset']    = $new_instance['genesis_bs_col_sm_offset'];
    $instance['genesis_bs_col_xs']    = $new_instance['genesis_bs_col_xs'];
    $instance['genesis_bs_col_xs_offset']    = $new_instance['genesis_bs_col_xs_offset'];
    $instance['genesis_bs_hide_lg']   = $new_instance['genesis_bs_hide_lg'];
    $instance['genesis_bs_hide_md']   = $new_instance['genesis_bs_hide_md'];
    $instance['genesis_bs_hide_sm']   = $new_instance['genesis_bs_hide_sm'];
    $instance['genesis_bs_hide_xs']   = $new_instance['genesis_bs_hide_xs'];
  
    return $instance;
}
add_filter('widget_update_callback', 'genesis_add_bs_widgets_form_update',5,3);
function genesis_add_bs_widgets_dynamic_sidebar_params($params){
    global $wp_registered_widgets;
    $widget_id = $params[0]['widget_id'];
    $widget_obj = $wp_registered_widgets[$widget_id];
    $widget_opt = get_option($widget_obj['callback'][0]->option_name);
    $widget_num = $widget_obj['params'][0]['number'];
    $classes = array();
    $cols = array(
      'genesis_bs_col_lg'         =>'col-lg-',
      'genesis_bs_col_lg_offset'  =>'col-lg-offset-',
      'genesis_bs_col_md'         =>'col-md-',
      'genesis_bs_col_md_offset'  =>'col-md-offset-',
      'genesis_bs_col_sm'         =>'col-sm-',
      'genesis_bs_col_sm_offset'  =>'col-sm-offset-',
      'genesis_bs_col_xs'         =>'col-xs-',
      'genesis_bs_col_xs_offset'  =>'col-xs-offset-',
      'genesis_bs_hide_lg'        =>'hidden-lg',
      'genesis_bs_hide_md'        =>'hidden-md',
      'genesis_bs_hide_sm'        =>'hidden-sm',
      'genesis_bs_hide_sm'        =>'hidden-xs',
    );
    foreach($cols as $col_opt => $col)
    {
      if(isset($widget_opt[$widget_num][$col_opt]) && $widget_opt[$widget_num][$col_opt] != '0')
        $classes[] = strpos($col_opt, 'hide') ? $col : $col.$widget_opt[$widget_num][$col_opt];
    }
        $params[0]['before_widget'] = str_replace(
        'class="',
        'class="' . join(' ', $classes ) . ' ',
        $params[0]['before_widget']
    );
    if(isset($widget_opt[$widget_num]['genesis_bs_row_start']) && $widget_opt[$widget_num]['genesis_bs_row_start'] == '1')
      $params[0]['before_widget'] = '<div class="row">'.$params[0]['before_widget'];
    if(isset($widget_opt[$widget_num]['genesis_bs_row_end']) && $widget_opt[$widget_num]['genesis_bs_row_end'] == '1')
      $params[0]['after_widget'] = $params[0]['after_widget'].'</div><!-- /.row -->';
    return $params;
}
add_filter('dynamic_sidebar_params', 'genesis_add_bs_widgets_dynamic_sidebar_params');
function genesis_add_bs_widgets_head_style()
{
    echo '<style>.genesis-bs-widget-columns label{font-weight: bold;}.genesis-bs-widget-columns>h3 {background:#0074a2;color:#fff;border-top:3px solid #0074a2;text-align:center;border-radius:4px}.genesis-bs-widget-columns>h3>a{line-height:30px;color:#fff}.genesis-bs-widget-columns>h3>a span{line-height:30px;color:#fff}.genesis-bs-widget-columns-inner{display:none;}.genesis-bs-widget-columns-handle{text-decoration:none;}</style>';    
    echo '<script type="text/javascript">
            jQuery(document).ready(function($){
              $("body").on("click", ".genesis-bs-widget-columns-handle", function(){
                $(this).parent().siblings(".genesis-bs-widget-columns-inner").slideToggle();
                return false;
              });
            });
        </script>';
  }
add_action('admin_head-widgets.php', 'genesis_add_bs_widgets_head_style');
add_action('customize_controls_print_scripts', 'genesis_add_bs_widgets_head_style', 9999);
