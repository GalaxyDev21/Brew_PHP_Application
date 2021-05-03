jQuery(document).ready(function(){
    jQuery( "#slider-bar" ).slider({
        min: 24,
        range: "min",
        step: 24,
        max: 288,
        value: 24,
        slide: function( event, ui ) {
            jQuery("#value").text(Math.round(ui.value));
            jQuery("input[name='amount']").val(Math.round(ui.value));
            if(ui.value == 24) {
                jQuery(".slideInfo").show();
            } else {
                jQuery(".slideInfo").hide();
            }
            multiplier = ui.value/24;
            price = 36*multiplier
            jQuery("#howmany").text(ui.value);
            jQuery("#howmuch").text("£" + price.toFixed(2));
        }
    });

    jQuery('input[type=radio][name=plantype]').change(function() {
        jQuery("#what").text(this.value);
    });

    jQuery('input[type=radio][name=frequency]').change(function() {
        if(this.value == 1) {
            jQuery("#when1").text("MONTHLY");
            jQuery("#when2").text("ONCE A MONTH");
        } else if(this.value == 2) {
            jQuery("#when1").text("EVERY 2 WEEKS");
            jQuery("#when2").text("EVERY 2 WEEKS");
        } else {
            jQuery("#when1").text("EVERY WEEK");
            jQuery("#when2").text("EVERY WEEK");
        }
    });
})