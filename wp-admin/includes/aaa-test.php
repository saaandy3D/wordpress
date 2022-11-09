<?php
protected function get_column_info() {
                 // $_column_headers is already set / cached.
                 if ( isset( $this->_column_headers ) && is_array( $this->_column_headers ) ) {
                         /*
                          * Backward compatibility for `$_column_headers` format prior to WordPress 4.3.
                          *
                          * In WordPress 4.3 the primary column name was added as a fourth item in the
                          * column headers property. This ensures the primary column name is included
                          * in plugins setting the property directly in the three item format.
                          */
                         $column_headers = array( array(), array(), array(), $this->get_primary_column_name() );
                         foreach ( $this->_column_headers as $key => $value ) {
                                 $column_headers[ $key ] = $value;
                         }

                         return $column_headers;
                 }

                 $columns = get_column_headers( $this->screen );
                 $hidden  = get_hidden_columns( $this->screen );

                 $sortable_columns = $this->get_sortable_columns();
                 /**
                  * Filters the list table sortable columns for a specific screen.
                  *
                  * The dynamic portion of the hook name, `$this->screen->id`, refers
                  * to the ID of the current screen.
                  *
                  * @since 3.1.0
                  *
                  * @param array $sortable_columns An array of sortable columns.
                  */
                 $_sortable = apply_filters( "manage_{$this->screen->id}_sortable_columns", $sortable_columns );

                 $sortable = array();
                 foreach ( $_sortable as $id => $data ) {
                         if ( empty( $data ) ) {
                                 continue;
                         }

                         $data = (array) $data;
                         if ( ! isset( $data[1] ) ) {
                                 $data[1] = false;
                         }

                         $sortable[ $id ] = $data;
                 }

                 $primary               = $this->get_primary_column_name();
                 $this->_column_headers = array( $columns, $hidden, $sortable, $primary );

                 return $this->_column_headers;
         } 
var_dump($column_headers)
