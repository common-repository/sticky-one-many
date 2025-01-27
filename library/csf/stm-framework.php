<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * ------------------------------------------------------------------------------------------------
 *
 
 
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * ------------------------------------------------------------------------------------------------
 *
 */

// ------------------------------------------------------------------------------------------------
require_once plugin_dir_path( __FILE__ ) .'/stm-framework-path.php';
// ------------------------------------------------------------------------------------------------

if( ! function_exists( 'cs_framework_init' ) && ! class_exists( 'CSFramework' ) ) {
  function cs_framework_init() {

    // active modules
    defined( 'CS_ACTIVE_FRAMEWORK' )   or  define( 'CS_ACTIVE_FRAMEWORK',   true  );
    defined( 'CS_ACTIVE_METABOX'   )   or  define( 'CS_ACTIVE_METABOX',     false  );
    defined( 'CS_ACTIVE_TAXONOMY'   )  or  define( 'CS_ACTIVE_TAXONOMY',    false  );
    defined( 'CS_ACTIVE_SHORTCODE' )   or  define( 'CS_ACTIVE_SHORTCODE',   false  );
    defined( 'CS_ACTIVE_CUSTOMIZE' )   or  define( 'CS_ACTIVE_CUSTOMIZE',   false  );
    defined( 'CS_ACTIVE_LIGHT_THEME' ) or  define( 'CS_ACTIVE_LIGHT_THEME', false );

    // helpers
    cs_locate_template( 'functions/deprecated.php'     );
    cs_locate_template( 'functions/fallback.php'       );
    cs_locate_template( 'functions/helpers.php'        );
    cs_locate_template( 'functions/actions.php'        );
    cs_locate_template( 'functions/enqueue.php'        );
    cs_locate_template( 'functions/sanitize.php'       );
    cs_locate_template( 'functions/validate.php'       );

    // classes
    cs_locate_template( 'classes/abstract.class.php'   );
    cs_locate_template( 'classes/options.class.php'    );
    cs_locate_template( 'classes/framework.class.php'  );
  
    // configs
    cs_locate_template( 'config/framework.config.php'  );
    

  }
  add_action( 'init', 'cs_framework_init', 10 );
}
