<?php

/**
 * [extcf7_clean]
 * @param  [JSON] $var
 * @return [array]
 */
function extcf7_clean( $varr ) {
    if ( is_array( $varr ) ) {
        return array_map( 'extcf7_clean', $varr );
    } else {
        return is_scalar( $varr ) ? sanitize_text_field( $varr ) : $varr;
    }
}

/**
 * Get option value
 * 
 * Look at the new option name first
 * if does not exists that option, then look the old option key
 *
 * @return string
 */
if( !function_exists('htcf7ext_get_option') ){
    function htcf7ext_get_option( $section = '', $option_key = '', $default = '' ){
        $new_options = array();
    
        if( $section === 'htcf7ext_opt' ){
            $new_options = get_option('htcf7ext_opt');
        }
    
        if( $section === 'htcf7ext_opt_extensions' ){
            $new_options = get_option('htcf7ext_opt_extensions');
        }
    
        // 1. look for new settings data
        // 2. look for old settings data
        // 3. look for default param
    
        if( isset($new_options[$option_key]) ){
            return $new_options[$option_key];
        } elseif( get_option($option_key) ) {
            return get_option($option_key);
        } elseif( $default ){
            return $default;
        }
    
        return '';
    }
}

/**
 * Get module option value
 * @input section, option_id, option_key, default
 * @return mixed
 */
if( !function_exists('htcf7ext_get_module_option') ) {
    function htcf7ext_get_module_option( $section = '', $option_id = '', $option_key = '', $default = null ){

        $module_settings = get_option( $section );
        
        if( $option_id && is_array( $module_settings ) && count( $module_settings ) > 0 ) {


            if( isset ( $module_settings[ $option_id ] ) && '' != $module_settings[ $option_id ] ) {

                $option_value = json_decode( $module_settings[ $option_id ], true );

                if( $option_key && is_array( $option_value  ) && count( $option_value  ) > 0 ) {

                    if ( isset($option_value[$option_key] ) && '' != $option_value[$option_key] ) {
                        return $option_value[$option_key];
                    } else {
                        return $default;
                    }
                } else {
                    return $module_settings[ $option_id ];
                }
                
            } else {
                return $default;;
            }

        } else {
            return $module_settings;
        }

    }
}