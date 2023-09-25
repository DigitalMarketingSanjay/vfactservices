<?php
Redux::setSection( $opt_name, array(
	'title'   => esc_html__( 'Portfolio Options', 'modins' ),
	'icon'    => 'el-icon-website',
	'fields'  => array(
		array(
		  	'id'  => 'slug_portfolio_post_type',
		  	'type'  => 'info',
		  	'raw' => '<h3 style="margin: 0;">' . esc_html__( 'Slug url portfolio post type', 'modins' ) . '</h3>'
		),
		array(
		  	'id' => 'slug_portfolio',
		  	'type' => 'text',
		  	'title' => esc_html__('Slug Portfolio', 'modins'),
		  	'default' => 'case'
		),
		array(
		  	'id'  => 'portfolio_archive_info',
		  	'type'  => 'info',
		  	'icon'  => true,
		  	'raw' => '<h3 style="margin: 0;">' . esc_html__( 'Archive/Listing', 'modins' ) . '</h3>',
		),
		array(
		  	'id' => 'portfolio_columns_lg',
		  	'type' => 'select',
		  	'title' => esc_html__('Display Columns for Large Screen', 'modins'),
		  	'options' => array(
			  	'1'      => '1',
			  	'2'      => '2',
			  	'3'      => '3',
			  	'4'      => '4',
			  	'5'      => '5',
			  	'6'      => '6'
		  	),
		  	'default' => '3'
		),
		array(
		  'id' => 'portfolio_columns_md',
		  'type' => 'select',
		  'title' => esc_html__('Display Columns for Medium Screen', 'modins'),
		  'options' => array(
			  	'1'      => '1',
			  	'2'      => '2',
			  	'3'      => '3',
			  	'4'      => '4',
			  	'5'      => '5',
			  	'6'      => '6'
		  ),
		  'default' => '2'
		),
		array(
		  	'id' => 'portfolio_columns_sm',
		  	'type' => 'select',
		  	'title' => esc_html__('Display Columns for Small Screen', 'modins'),
		  	'options' => array(
			  	'1'      => '1',
			  	'2'      => '2',
			  	'3'      => '3',
			  	'4'      => '4',
			  	'5'      => '5',
			  	'6'      => '6'
		  	),
		  'default' => '2'
		),
		array(
		  	'id' => 'portfolio_columns_xs',
		  	'type' => 'select',
		  	'title' => esc_html__('Display Columns for Extra Small Screen', 'modins'),
		  	'options' => array(
			  	'1'      => '1',
			  	'2'      => '2',
			  	'3'      => '3',
			  	'4'      => '4',
			  	'5'      => '5',
			  	'6'      => '6'
		  	),
		  'default' => '1'
		),
	)
));