<?php
    /**
     * @file
     * Default simple view template to all the fields as a row.
     *
     * - $view: The view in use.
     * - $fields: an array of $field objects. Each one contains:
     *   - $field->content: The output of the field.
     *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
     *   - $field->class: The safe class id to use.
     *   - $field->handler: The Views field handler object controlling this field. Do not use
     *     var_export to dump this object, as it can't handle the recursion.
     *   - $field->inline: Whether or not the field should be inline.
     *   - $field->inline_html: either div or span based on the above flag.
     *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
     *   - $field->wrapper_suffix: The closing tag for the wrapper.
     *   - $field->separator: an optional separator that may appear before a field.
     *   - $field->label: The wrap label text to use.
     *   - $field->label_html: The full HTML of the label to use including
     *     configured element type.
     * - $row: The raw result object from the query, with all data it fetched.
     *
     * @ingroup views_templates
     */
?>

<?php
    $ifid = $row->field_field_sub_category_image[0][raw][fid];
    $imgpath = file_load($ifid)->uri;
    $imageurl = file_create_url($imgpath);
?>

<!-- style="background-image: url('<?php print $imageurl; ?>') -->

<div id="wrapperMarquee" class="wrapperMarqueeImg"">
<div id="wrapperMarqueeImgHover">
    <div class="container">
        <div class="col-md-12">
            <h1 class="bigText"> • <?php print $row->node_title; ?> • </h1>
            <p class="marqueeGift"><?php print $row->field_body[0][raw][safe_value]; ?></p>
<!--            <p class="btnDefault">-->
<!--                <a href="#" class="btn btn-lg btn-default videoPlayer">VIEW COLLECTION</a>-->
<!--            </p>-->
        </div>
    </div>
</div>
</div>

