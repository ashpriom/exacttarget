<?php

//function DeadlineNotice(){
	global $select_options; 
    if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; ?>

    <div>
    <?php screen_icon();
        echo "<h2>". __( 'Syn Studio Central Information Panel', 'customtheme' ) . "</h2>";
        echo "<h3>". __( 'Information entered here are distributed to all corresponding pages.', 'customtheme' ) . "</h2>"; 
    ?>

    <?php 
        if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div>
                <p><strong><?php _e( 'Options saved', 'customtheme' ); ?></strong></p></div>
        <?php endif; ?> 

    <form method="post" action="options.php">
        <?php settings_fields( 'sample_options' ); ?>  
        <?php $syn_deadlines = get_option( 'deadline_notice' ); ?>

    <table>

    <!-- <tr valign="top"><th scope="row">
    <?php // _e( 'Display Intro Paragraph', 'customtheme' ); ?></th>
    <td>
    <input id="sample_theme_options[showintro]" name="sample_theme_options[showintro]" type="checkbox" value="1"/>
    <?php // checked( '1', $options['showintro'] ); ?>
    </td>
    </tr>

    <tr valign="top"><th scope="row">
    <?php // _e( 'Sample1', 'customtheme' ); ?></th>
    <td text-align="left">
    <input id="sample_theme_options[late_deadline_en]" type="text" name="sample_theme_options[late_deadline_en]" value="<?php esc_attr_e( $options['late_deadline_en'] ); ?>" />
    <label for="sample_theme_options[sometext]"><?php // _e( 'Example: Late Registration Deadline: Wednesday, July 8th, 11:59 P.M.', 'customtheme' ); ?></label> </td> 
    </tr>-->

    <tr valign="top"><th scope="row"><?php _e( 'Class Registration Notice (English)', 'customtheme' ); ?></th>
    <td>
    <textarea id="sample_theme_options[deadline_en]"
    class="large-text" cols="100" rows="3" placeholder="Example: Late Registration Deadline: Wednesday, July 8th, 11:59 P.M." name="sample_theme_options[deadline_en]"><?php echo esc_textarea( $options['deadline_en'] ); ?></textarea>
    </td>
    </tr>

    <tr valign="top"><th scope="row"><?php _e( 'Class Registration Notice (French)', 'customtheme' ); ?></th>
    <td>
    <textarea id="sample_theme_options[deadline_fr]"
    class="large-text" cols="100" rows="3" placeholder="Example: Date limite d\'inscription finale : mercredi 8 juillet à 23h59." name="sample_theme_options[deadline_fr]"><?php echo esc_textarea( $options['deadline_fr'] ); ?></textarea>
    </td>
    </tr>

    <!--<tr valign="top"><th scope="row"><?php // _e( 'Workshop Registration Notice (English)', 'customtheme' ); ?></th>
    <td>
    <textarea id="sample_theme_options[workshop_deadline_en]"
    class="large-text" cols="100" rows="3" placeholder="Example: Late Registration Deadline: Wednesday, July 8th, 11:59 P.M." name="sample_theme_options[workshop_deadline_en]"><?php echo esc_textarea( $options['workshop_deadline_en'] ); ?></textarea>
    </td>
    </tr>

    <tr valign="top"><th scope="row"><?php // _e( 'Workshop Registration Notice (French)', 'customtheme' ); ?></th>
    <td>
    <textarea id="sample_theme_options[workshop_deadline_fr]"
    class="large-text" cols="100" rows="3" placeholder="Example: Date limite d\'inscription finale : mercredi 8 juillet à 23h59." name="sample_theme_options[workshop_deadline_fr]"><?php echo esc_textarea( $options['workshop_deadline_fr'] ); ?></textarea>
    </td>
    </tr>-->

    </table> 

    <p>
    <input type="submit" value="<?php _e( 'Save Options', 'customtheme' ); ?>" />
    </p>
    </form>
    </div>
    

<?php //}

//DeadlineNotice();

 ?>