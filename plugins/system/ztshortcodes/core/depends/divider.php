<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready( function(){
        // Animate Top Links
        jQuery('.animate-top').on('click', function(e) {
            e.preventDefault();
            jQuery('body,html').animate({scrollTop: 0}, 800, 'easeOutCubic');
        });
    });
</script>
<style rel="stylesheet" type="text/css">
    .zo2-divider-wrap{
        position: relative;
    }
    .zo2-divider {
        border-bottom-width: 1px;
        display: block;
        margin-bottom: 30px;
    }
    .divider-hr {
        background-color: #000;
        height: 1px;
        margin: 20px auto 25px;
        width: 50px;
    }
    .divider-fat {
        border-bottom-style: solid;
        border-bottom-width: 2px;
    }
    .divider-thin {
        border-bottom-style: solid;
    }
    .divider-dotted {
        border-bottom-style: dotted;
    }
    .zo2-divider.go-to-top a {
        border-bottom: 1px solid #e4e4e4;
        display: block;
        margin-bottom: 30px;
        text-align: right;
        text-decoration: none;
        color: #1dc6df;
    }
    .go-to-top-icon-1 a, .go-to-top-icon-2 a {
        display: block;
        padding: 0 0 0 10px;
        position: absolute;
        right: 0;
        text-decoration: none;
        background-color: #fff;
        color: #444444;
    }
    .go-to-top-icon-1 a:hover, .go-to-top-icon-2 a:hover{
        color: #1dc6df;
    }
    .zo2-divider.go-to-top {
        padding: 0;
    }
    .zo2-divider.go-to-top-icon-1 {
        border-bottom: 1px solid #e4e4e4;
        height: 9px;
        position: relative;
    }
    .zo2-divider.go-to-top-icon-2 {
        border-bottom: 1px solid #e4e4e4;
        height: 10px;
        position: relative;
    }
</style>

