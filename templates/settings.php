<div class="wrap">
    <div class="welcome-panel">
        <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
        <h2 class="nav-tab-wrapper definance-nav-tabs wp-clearfix">
            <a href="#definance-tab-1" class="nav-tab nav-tab-active">
                <?php esc_html_e('Main Setting', 'definance'); ?>
            </a>
        </h2>

        <div class="welcome-panel-column-container definance-panel-tab panel-tab-active" id="definance-tab-1">
            <div class="definance-shortcode-panel-row">
                <form action="#" method="post" class="wp-definance-widget-form">

                    <table class="form-table">
                        <tbody>
                        <tr>
                            <th scope="row">
                                <label><?php esc_html_e('Logo url 1', 'definance'); ?></label>
                            </th>
                            <td>
                                <div class="definance-form-inline">
                                    <input value="<?php echo esc_attr(get_option('definance_icon')); ?>"
                                           name="definance_icon" type="text" class="large-text js-definance-load-icon ">
                                    <button class="button button-secondary definance-input-icon"><?php esc_html_e('Upload icon',
                                            'definance'); ?></button>

                                </div>
                            </td>
                        </tr>
<!--                        <tr>-->
<!--                            <th scope="row">-->
<!--                                <label>--><?php //esc_html_e('Logo url 2', 'definance'); ?><!--</label>-->
<!--                            </th>-->
<!--                            <td>-->
<!--                                <div class="definance-form-inline">-->
<!--                                    <input value="--><?php //echo esc_attr(get_option('definance_icon2')); ?><!--"-->
<!--                                           name="definance_icon2"-->
<!--                                           type="text" class="large-text js-definance-load-icon2 ">-->
<!--                                    <button class="button button-secondary definance-input-icon2">-->
<!--                                        --><?php //esc_html_e('Upload icon', 'definance'); ?>
<!--                                    </button>-->
<!---->
<!--                                </div>-->
<!--                            </td>-->
<!--                        </tr>-->
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <input type="submit" name="mcwallet-add-token"
                                       class="button button-primary mcwallet-add-token"
                                       value="<?php esc_attr_e('Save', 'definance'); ?>">
                                <span class="spinner"></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>


                </form>

            </div>
        </div>
    </div>

</div>