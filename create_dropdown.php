<?php
	        
			function get_times( $default = '00:00', $interval = '+30 minutes' ) {
            $output = '';
        
            $current = strtotime( '00:00' );
            $end = strtotime( '23:59' );
        
            while( $current <= $end ) {
                $time = date( 'H:i', $current );
                $sel = ( $time == $default ) ? ' selected' : '';
        
                $output .= "<option value=\"{$time}\"{$sel}>" . date( 'h.i A', $current ) .'</option>';
                $current = strtotime( $interval, $current );
            }
            echo $output;
            return $output;
            
            
            }
            get_times();
        
?>