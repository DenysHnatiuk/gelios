<?php
/*
* Plugin Name: utk Services Meta Box Template
* Plugin URI: http://utk.com/
* Description: Provides a starting point for creating custom meta boxes for services.
* Author: utk
* Version: 0.1.0
* Author URI: https://github.com/DenysHnatiuk/
*/

/**
*   Add meta box
*/ 
function utk_services_custom_meta() {
	add_meta_box( 'utk_services_meta', __( 'service', 'utk' ), 'utk_meta_callback', 'post' );
}
add_action( 'add_meta_boxes', 'utk_services_custom_meta' );
/**
*   Callback
*/ 
function utk_meta_callback( $post ){
    wp_nonce_field( basename( __FILE__ ), 'utk_nonce' );
	$utk_stored_meta = get_post_meta( $post->ID );
	?>




	<div class="row section services-single-stages">
      <div class="container">
        <span class="section-header-sup">снова немноо о нас</span>
        <h2 class="section-header stages-header">Как достигается результат</h2>
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="row">
              <div class="col-xs-2">
                <svg class="lightbulb-icon" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 512 512">
                		<path d="M493.545,4.67c-3.16-4.52-9.4-5.62-13.92-2.45c-4.53,3.16-5.63,9.4-2.46,13.92c3.17,4.53,9.4,5.63,13.93,2.46    C495.615,15.43,496.715,9.2,493.545,4.67z"/>
                		<path d="M491.095,322.414c-4.53-3.17-10.76-2.07-13.93,2.46c-3.17,4.52-2.07,10.76,2.46,13.92c4.52,3.17,10.76,2.07,13.92-2.45    C496.715,331.814,495.615,325.584,491.095,322.414z"/>
                		<path d="M32.374,2.22c-4.52-3.17-10.76-2.07-13.92,2.45c-3.17,4.53-2.07,10.76,2.45,13.93c4.53,3.17,10.76,2.07,13.93-2.46    C38.004,11.62,36.904,5.38,32.374,2.22z"/>
                		<path d="M34.834,324.874c-3.17-4.53-9.4-5.63-13.93-2.46c-4.52,3.17-5.62,9.4-2.45,13.93c3.16,4.52,9.4,5.62,13.92,2.45    C36.904,335.633,38.004,329.394,34.834,324.874z"/>
                		<path d="M369.366,43.33c-17.596-15.757-37.837-27.473-60.164-34.824c-23.307-7.676-47.72-10.173-72.562-7.425    c-36.213,4.011-71.005,20.37-97.964,46.063c-27.005,25.737-44.959,59.717-50.554,95.676c-4.953,31.833-1.098,64.001,11.146,93.023    c11.693,27.714,30.668,51.953,54.874,70.091c7.426,5.57,11.86,14.441,11.86,23.73v26.339v65.149    c0,13.766,9.064,25.45,21.536,29.409c1.874,15.449,8.784,29.751,19.966,40.944C220.732,504.721,238.31,512,257,512    c35.964,0,65.668-27.266,69.555-62.211c11.396-4.59,19.444-15.841,19.444-28.637v-65.149v-26.339    c0-9.296,4.4-18.138,11.773-23.655c20.706-15.502,37.863-35.807,49.62-58.721c12.346-24.065,18.606-50.066,18.606-77.283    C425.997,121.73,405.355,75.558,369.366,43.33z M257,492c-13.351,0-25.91-5.201-35.354-14.637    c-7.04-7.047-11.719-15.822-13.646-25.363h97.993C301.347,474.796,281.146,492,257,492z M325.999,421.152    c0,5.577-4.335,10.319-9.871,10.797c-0.039,0.003-0.079,0.007-0.119,0.011c-0.286,0.028-0.567,0.042-0.861,0.042H196.85    c-5.983,0-10.85-4.867-10.85-10.85v-12.15h0.001h139.997V421.152z M325.999,389.002H186.001v-23h29.999h79.998h29.999V389.002z     M256,216.543c10.301,0,20.597-2.386,29.999-7.125v136.585h-59.999V209.418C235.403,214.157,245.699,216.543,256,216.543z     M228.419,187.531L256,132.368l27.581,55.163C267.24,199.559,244.76,199.559,228.419,187.531z M345.787,289.997    c-12.391,9.272-19.789,24.101-19.789,39.666v16.34h-20V190.011c0-0.361-0.024-0.722-0.063-1.082    c-0.011-0.103-0.03-0.203-0.044-0.305c-0.036-0.258-0.079-0.515-0.135-0.77c-0.024-0.111-0.052-0.22-0.08-0.329    c-0.064-0.251-0.138-0.5-0.222-0.746c-0.034-0.098-0.066-0.197-0.103-0.294c-0.101-0.269-0.216-0.534-0.342-0.796    c-0.024-0.051-0.041-0.104-0.066-0.155l-0.075-0.15c-0.007-0.013-0.013-0.027-0.02-0.04l-39.904-79.808    c-1.694-3.388-5.157-5.528-8.944-5.528c-3.788,0-7.25,2.14-8.944,5.528l-39.904,79.808c-0.007,0.013-0.013,0.027-0.02,0.04    l-0.075,0.15c-0.025,0.05-0.042,0.104-0.066,0.155c-0.125,0.262-0.24,0.526-0.342,0.796c-0.037,0.097-0.069,0.196-0.103,0.294    c-0.084,0.246-0.158,0.495-0.222,0.746c-0.028,0.11-0.056,0.219-0.08,0.329c-0.056,0.255-0.099,0.512-0.135,0.77    c-0.014,0.102-0.033,0.203-0.044,0.305c-0.039,0.36-0.063,0.72-0.063,1.082v155.992h-20v-16.34    c0-15.551-7.424-30.402-19.863-39.731c-44.56-33.391-66.882-88.582-58.254-144.038C118.015,80.783,173.091,28.24,238.842,20.959    c43.367-4.801,84.986,8.438,117.184,37.27C387.785,86.667,406,127.41,406,170.007C405.997,217.617,384.05,261.352,345.787,289.997    z"/>
                		<path d="M342.68,73.121c-4.114-3.686-10.436-3.337-14.121,0.777c-3.685,4.114-3.337,10.436,0.777,14.121    c23.299,20.869,36.661,50.753,36.661,81.989c0,5.523,4.477,10,10,10c5.523,0,10-4.477,10-10    C385.997,133.091,370.209,97.777,342.68,73.121z"/>
                		<path d="M56.004,160.007H10.005c-5.523,0-10,4.477-10,10s4.477,10,10,10h45.999c5.523,0,10-4.477,10-10    C66.004,164.484,61.527,160.007,56.004,160.007z"/>
                		<path d="M501.995,160.007h-45.999c-5.523,0-10,4.477-10,10s4.477,10,10,10h45.999c5.523,0,10-4.477,10-10    S507.518,160.007,501.995,160.007z"/>
                		<path d="M100.365,278.99c-3.167-4.524-9.403-5.624-13.927-2.457l-32.769,22.94c-4.524,3.167-5.625,9.403-2.458,13.927    c1.946,2.779,5.048,4.266,8.201,4.266c1.98,0,3.981-0.587,5.726-1.809l32.769-22.94    C102.431,289.749,103.532,283.513,100.365,278.99z"/>
                		<path d="M460.789,26.615c-3.167-4.524-9.402-5.625-13.927-2.458l-32.769,22.94c-4.524,3.167-5.625,9.403-2.458,13.927    c1.946,2.78,5.048,4.267,8.201,4.267c1.98,0,3.981-0.587,5.726-1.809l32.769-22.94C462.855,37.374,463.956,31.138,460.789,26.615z    "/>
                		<path d="M97.907,47.097l-32.769-22.94c-4.524-3.167-10.76-2.067-13.927,2.458s-2.066,10.759,2.458,13.926l32.769,22.94    c1.746,1.222,3.746,1.809,5.726,1.809c3.153,0,6.256-1.487,8.201-4.266C103.532,56.5,102.432,50.264,97.907,47.097z"/>
                		<path d="M458.331,299.472l-32.769-22.94c-4.525-3.167-10.76-2.067-13.927,2.458c-3.167,4.524-2.067,10.76,2.458,13.927    l32.769,22.94c1.746,1.222,3.746,1.809,5.726,1.809c3.153,0,6.256-1.487,8.201-4.266    C463.956,308.875,462.855,302.639,458.331,299.472z"/>
                </svg>
              </div>
              <div class="col-xs-10">
                <h4 class="stages-item-header">АНАЛИЗИРУЕМ,<br> А НЕ ПРЕДПОЛАГАЕМ</h4>
                <p class="stages-item-description">Вы получите конкретное и обоснованное решение бизнес-задач.</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="row">
              <div class="col-xs-2">
                <svg class="lightbulb-icon" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 512 512">
                		<path d="M493.545,4.67c-3.16-4.52-9.4-5.62-13.92-2.45c-4.53,3.16-5.63,9.4-2.46,13.92c3.17,4.53,9.4,5.63,13.93,2.46    C495.615,15.43,496.715,9.2,493.545,4.67z"/>
                		<path d="M491.095,322.414c-4.53-3.17-10.76-2.07-13.93,2.46c-3.17,4.52-2.07,10.76,2.46,13.92c4.52,3.17,10.76,2.07,13.92-2.45    C496.715,331.814,495.615,325.584,491.095,322.414z"/>
                		<path d="M32.374,2.22c-4.52-3.17-10.76-2.07-13.92,2.45c-3.17,4.53-2.07,10.76,2.45,13.93c4.53,3.17,10.76,2.07,13.93-2.46    C38.004,11.62,36.904,5.38,32.374,2.22z"/>
                		<path d="M34.834,324.874c-3.17-4.53-9.4-5.63-13.93-2.46c-4.52,3.17-5.62,9.4-2.45,13.93c3.16,4.52,9.4,5.62,13.92,2.45    C36.904,335.633,38.004,329.394,34.834,324.874z"/>
                		<path d="M369.366,43.33c-17.596-15.757-37.837-27.473-60.164-34.824c-23.307-7.676-47.72-10.173-72.562-7.425    c-36.213,4.011-71.005,20.37-97.964,46.063c-27.005,25.737-44.959,59.717-50.554,95.676c-4.953,31.833-1.098,64.001,11.146,93.023    c11.693,27.714,30.668,51.953,54.874,70.091c7.426,5.57,11.86,14.441,11.86,23.73v26.339v65.149    c0,13.766,9.064,25.45,21.536,29.409c1.874,15.449,8.784,29.751,19.966,40.944C220.732,504.721,238.31,512,257,512    c35.964,0,65.668-27.266,69.555-62.211c11.396-4.59,19.444-15.841,19.444-28.637v-65.149v-26.339    c0-9.296,4.4-18.138,11.773-23.655c20.706-15.502,37.863-35.807,49.62-58.721c12.346-24.065,18.606-50.066,18.606-77.283    C425.997,121.73,405.355,75.558,369.366,43.33z M257,492c-13.351,0-25.91-5.201-35.354-14.637    c-7.04-7.047-11.719-15.822-13.646-25.363h97.993C301.347,474.796,281.146,492,257,492z M325.999,421.152    c0,5.577-4.335,10.319-9.871,10.797c-0.039,0.003-0.079,0.007-0.119,0.011c-0.286,0.028-0.567,0.042-0.861,0.042H196.85    c-5.983,0-10.85-4.867-10.85-10.85v-12.15h0.001h139.997V421.152z M325.999,389.002H186.001v-23h29.999h79.998h29.999V389.002z     M256,216.543c10.301,0,20.597-2.386,29.999-7.125v136.585h-59.999V209.418C235.403,214.157,245.699,216.543,256,216.543z     M228.419,187.531L256,132.368l27.581,55.163C267.24,199.559,244.76,199.559,228.419,187.531z M345.787,289.997    c-12.391,9.272-19.789,24.101-19.789,39.666v16.34h-20V190.011c0-0.361-0.024-0.722-0.063-1.082    c-0.011-0.103-0.03-0.203-0.044-0.305c-0.036-0.258-0.079-0.515-0.135-0.77c-0.024-0.111-0.052-0.22-0.08-0.329    c-0.064-0.251-0.138-0.5-0.222-0.746c-0.034-0.098-0.066-0.197-0.103-0.294c-0.101-0.269-0.216-0.534-0.342-0.796    c-0.024-0.051-0.041-0.104-0.066-0.155l-0.075-0.15c-0.007-0.013-0.013-0.027-0.02-0.04l-39.904-79.808    c-1.694-3.388-5.157-5.528-8.944-5.528c-3.788,0-7.25,2.14-8.944,5.528l-39.904,79.808c-0.007,0.013-0.013,0.027-0.02,0.04    l-0.075,0.15c-0.025,0.05-0.042,0.104-0.066,0.155c-0.125,0.262-0.24,0.526-0.342,0.796c-0.037,0.097-0.069,0.196-0.103,0.294    c-0.084,0.246-0.158,0.495-0.222,0.746c-0.028,0.11-0.056,0.219-0.08,0.329c-0.056,0.255-0.099,0.512-0.135,0.77    c-0.014,0.102-0.033,0.203-0.044,0.305c-0.039,0.36-0.063,0.72-0.063,1.082v155.992h-20v-16.34    c0-15.551-7.424-30.402-19.863-39.731c-44.56-33.391-66.882-88.582-58.254-144.038C118.015,80.783,173.091,28.24,238.842,20.959    c43.367-4.801,84.986,8.438,117.184,37.27C387.785,86.667,406,127.41,406,170.007C405.997,217.617,384.05,261.352,345.787,289.997    z"/>
                		<path d="M342.68,73.121c-4.114-3.686-10.436-3.337-14.121,0.777c-3.685,4.114-3.337,10.436,0.777,14.121    c23.299,20.869,36.661,50.753,36.661,81.989c0,5.523,4.477,10,10,10c5.523,0,10-4.477,10-10    C385.997,133.091,370.209,97.777,342.68,73.121z"/>
                		<path d="M56.004,160.007H10.005c-5.523,0-10,4.477-10,10s4.477,10,10,10h45.999c5.523,0,10-4.477,10-10    C66.004,164.484,61.527,160.007,56.004,160.007z"/>
                		<path d="M501.995,160.007h-45.999c-5.523,0-10,4.477-10,10s4.477,10,10,10h45.999c5.523,0,10-4.477,10-10    S507.518,160.007,501.995,160.007z"/>
                		<path d="M100.365,278.99c-3.167-4.524-9.403-5.624-13.927-2.457l-32.769,22.94c-4.524,3.167-5.625,9.403-2.458,13.927    c1.946,2.779,5.048,4.266,8.201,4.266c1.98,0,3.981-0.587,5.726-1.809l32.769-22.94    C102.431,289.749,103.532,283.513,100.365,278.99z"/>
                		<path d="M460.789,26.615c-3.167-4.524-9.402-5.625-13.927-2.458l-32.769,22.94c-4.524,3.167-5.625,9.403-2.458,13.927    c1.946,2.78,5.048,4.267,8.201,4.267c1.98,0,3.981-0.587,5.726-1.809l32.769-22.94C462.855,37.374,463.956,31.138,460.789,26.615z    "/>
                		<path d="M97.907,47.097l-32.769-22.94c-4.524-3.167-10.76-2.067-13.927,2.458s-2.066,10.759,2.458,13.926l32.769,22.94    c1.746,1.222,3.746,1.809,5.726,1.809c3.153,0,6.256-1.487,8.201-4.266C103.532,56.5,102.432,50.264,97.907,47.097z"/>
                		<path d="M458.331,299.472l-32.769-22.94c-4.525-3.167-10.76-2.067-13.927,2.458c-3.167,4.524-2.067,10.76,2.458,13.927    l32.769,22.94c1.746,1.222,3.746,1.809,5.726,1.809c3.153,0,6.256-1.487,8.201-4.266    C463.956,308.875,462.855,302.639,458.331,299.472z"/>
                </svg>
              </div>
              <div class="col-xs-10">
                <span class="stage-header-sup"></span>
                <h4 class="stages-item-header">АНАЛИЗИРУЕМ,<br> А НЕ ПРЕДПОЛАГАЕМ</h4>
                <p class="stages-item-description">Вы получите конкретное и обоснованное решение бизнес-задач.</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="row">
              <div class="col-xs-2">
                <svg class="lightbulb-icon" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 512 512">
                		<path d="M493.545,4.67c-3.16-4.52-9.4-5.62-13.92-2.45c-4.53,3.16-5.63,9.4-2.46,13.92c3.17,4.53,9.4,5.63,13.93,2.46    C495.615,15.43,496.715,9.2,493.545,4.67z"/>
                		<path d="M491.095,322.414c-4.53-3.17-10.76-2.07-13.93,2.46c-3.17,4.52-2.07,10.76,2.46,13.92c4.52,3.17,10.76,2.07,13.92-2.45    C496.715,331.814,495.615,325.584,491.095,322.414z"/>
                		<path d="M32.374,2.22c-4.52-3.17-10.76-2.07-13.92,2.45c-3.17,4.53-2.07,10.76,2.45,13.93c4.53,3.17,10.76,2.07,13.93-2.46    C38.004,11.62,36.904,5.38,32.374,2.22z"/>
                		<path d="M34.834,324.874c-3.17-4.53-9.4-5.63-13.93-2.46c-4.52,3.17-5.62,9.4-2.45,13.93c3.16,4.52,9.4,5.62,13.92,2.45    C36.904,335.633,38.004,329.394,34.834,324.874z"/>
                		<path d="M369.366,43.33c-17.596-15.757-37.837-27.473-60.164-34.824c-23.307-7.676-47.72-10.173-72.562-7.425    c-36.213,4.011-71.005,20.37-97.964,46.063c-27.005,25.737-44.959,59.717-50.554,95.676c-4.953,31.833-1.098,64.001,11.146,93.023    c11.693,27.714,30.668,51.953,54.874,70.091c7.426,5.57,11.86,14.441,11.86,23.73v26.339v65.149    c0,13.766,9.064,25.45,21.536,29.409c1.874,15.449,8.784,29.751,19.966,40.944C220.732,504.721,238.31,512,257,512    c35.964,0,65.668-27.266,69.555-62.211c11.396-4.59,19.444-15.841,19.444-28.637v-65.149v-26.339    c0-9.296,4.4-18.138,11.773-23.655c20.706-15.502,37.863-35.807,49.62-58.721c12.346-24.065,18.606-50.066,18.606-77.283    C425.997,121.73,405.355,75.558,369.366,43.33z M257,492c-13.351,0-25.91-5.201-35.354-14.637    c-7.04-7.047-11.719-15.822-13.646-25.363h97.993C301.347,474.796,281.146,492,257,492z M325.999,421.152    c0,5.577-4.335,10.319-9.871,10.797c-0.039,0.003-0.079,0.007-0.119,0.011c-0.286,0.028-0.567,0.042-0.861,0.042H196.85    c-5.983,0-10.85-4.867-10.85-10.85v-12.15h0.001h139.997V421.152z M325.999,389.002H186.001v-23h29.999h79.998h29.999V389.002z     M256,216.543c10.301,0,20.597-2.386,29.999-7.125v136.585h-59.999V209.418C235.403,214.157,245.699,216.543,256,216.543z     M228.419,187.531L256,132.368l27.581,55.163C267.24,199.559,244.76,199.559,228.419,187.531z M345.787,289.997    c-12.391,9.272-19.789,24.101-19.789,39.666v16.34h-20V190.011c0-0.361-0.024-0.722-0.063-1.082    c-0.011-0.103-0.03-0.203-0.044-0.305c-0.036-0.258-0.079-0.515-0.135-0.77c-0.024-0.111-0.052-0.22-0.08-0.329    c-0.064-0.251-0.138-0.5-0.222-0.746c-0.034-0.098-0.066-0.197-0.103-0.294c-0.101-0.269-0.216-0.534-0.342-0.796    c-0.024-0.051-0.041-0.104-0.066-0.155l-0.075-0.15c-0.007-0.013-0.013-0.027-0.02-0.04l-39.904-79.808    c-1.694-3.388-5.157-5.528-8.944-5.528c-3.788,0-7.25,2.14-8.944,5.528l-39.904,79.808c-0.007,0.013-0.013,0.027-0.02,0.04    l-0.075,0.15c-0.025,0.05-0.042,0.104-0.066,0.155c-0.125,0.262-0.24,0.526-0.342,0.796c-0.037,0.097-0.069,0.196-0.103,0.294    c-0.084,0.246-0.158,0.495-0.222,0.746c-0.028,0.11-0.056,0.219-0.08,0.329c-0.056,0.255-0.099,0.512-0.135,0.77    c-0.014,0.102-0.033,0.203-0.044,0.305c-0.039,0.36-0.063,0.72-0.063,1.082v155.992h-20v-16.34    c0-15.551-7.424-30.402-19.863-39.731c-44.56-33.391-66.882-88.582-58.254-144.038C118.015,80.783,173.091,28.24,238.842,20.959    c43.367-4.801,84.986,8.438,117.184,37.27C387.785,86.667,406,127.41,406,170.007C405.997,217.617,384.05,261.352,345.787,289.997    z"/>
                		<path d="M342.68,73.121c-4.114-3.686-10.436-3.337-14.121,0.777c-3.685,4.114-3.337,10.436,0.777,14.121    c23.299,20.869,36.661,50.753,36.661,81.989c0,5.523,4.477,10,10,10c5.523,0,10-4.477,10-10    C385.997,133.091,370.209,97.777,342.68,73.121z"/>
                		<path d="M56.004,160.007H10.005c-5.523,0-10,4.477-10,10s4.477,10,10,10h45.999c5.523,0,10-4.477,10-10    C66.004,164.484,61.527,160.007,56.004,160.007z"/>
                		<path d="M501.995,160.007h-45.999c-5.523,0-10,4.477-10,10s4.477,10,10,10h45.999c5.523,0,10-4.477,10-10    S507.518,160.007,501.995,160.007z"/>
                		<path d="M100.365,278.99c-3.167-4.524-9.403-5.624-13.927-2.457l-32.769,22.94c-4.524,3.167-5.625,9.403-2.458,13.927    c1.946,2.779,5.048,4.266,8.201,4.266c1.98,0,3.981-0.587,5.726-1.809l32.769-22.94    C102.431,289.749,103.532,283.513,100.365,278.99z"/>
                		<path d="M460.789,26.615c-3.167-4.524-9.402-5.625-13.927-2.458l-32.769,22.94c-4.524,3.167-5.625,9.403-2.458,13.927    c1.946,2.78,5.048,4.267,8.201,4.267c1.98,0,3.981-0.587,5.726-1.809l32.769-22.94C462.855,37.374,463.956,31.138,460.789,26.615z    "/>
                		<path d="M97.907,47.097l-32.769-22.94c-4.524-3.167-10.76-2.067-13.927,2.458s-2.066,10.759,2.458,13.926l32.769,22.94    c1.746,1.222,3.746,1.809,5.726,1.809c3.153,0,6.256-1.487,8.201-4.266C103.532,56.5,102.432,50.264,97.907,47.097z"/>
                		<path d="M458.331,299.472l-32.769-22.94c-4.525-3.167-10.76-2.067-13.927,2.458c-3.167,4.524-2.067,10.76,2.458,13.927    l32.769,22.94c1.746,1.222,3.746,1.809,5.726,1.809c3.153,0,6.256-1.487,8.201-4.266    C463.956,308.875,462.855,302.639,458.331,299.472z"/>
                </svg>
              </div>
              <div class="col-xs-10">
                <span class="stage-header-sup"></span>
                <h4 class="stages-item-header">АНАЛИЗИРУЕМ,<br> А НЕ ПРЕДПОЛАГАЕМ</h4>
                <p class="stages-item-description">Вы получите конкретное и обоснованное решение бизнес-задач.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	
	<?php
}