<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="Headline">Headline</label>
        <input id="Headline"
            type="text"
            name="Headline"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'Headline', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="Subhead">Subhead</label>
        <input id="Subhead"
            type="text"
            name="Subhead"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'Subhead', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="External-Link">link</label>
        <input id="External-Link"
            type="text"
            name="External-Link"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'External-Link', true ) ); ?>">
    </p>
</div>