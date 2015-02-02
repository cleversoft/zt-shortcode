<?php
$jsonFile = realpath(__DIR__ . '/../../assets') . '/shortcodes.json';
$buffer = file_get_contents($jsonFile);
$shortcodes = json_decode($buffer);
// Grouping

$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);
array_pop($uri);
array_pop($uri);
array_pop($uri);
$uri = implode('/', $uri) . '/assets/';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet"
      href="<?php echo $uri. '/font-awesome/css/font-awesome.min.css'; ?>"/>

<link rel="stylesheet"
      href="<?php echo $uri. '/css/shortcode.css'; ?>"/>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<div id="zo2-shortcode-plugin" class="zo2-shortcode-wrap">

<!-- Button call modal shortcode -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Insert Shortcode
</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Shortcode</h4>
            </div>
            <div class="modal-body">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <?php
                        foreach ($shortcodes as $key => $shortcode) {
                            echo '<li role="presentation" class="item-shortcode '. 'item-'. $shortcode->tag .'"><a href="#' . $shortcode->tag . '" id="' . $shortcode->tag . '-tab" role="tab" data-toggle="tab" aria-controls="' . $shortcode->tag . '" aria-expanded="false"><i class="' . $shortcode->icon . '"></i>' . $shortcode->name . '</a></li>';
                        }
                        ?>
                    </ul>
                    <div id="myTabContent" class="tab-content">

                        <?php
                        foreach ($shortcodes as $key => $shortcode): ?>
                            <div role="tabpanel" class="tab-pane fade" id="<?php echo $shortcode->tag; ?>"
                                 aria-labelledby="<?php echo $shortcode->tag; ?>-tab"><?php include_once(__DIR__ . '/' . $shortcode->tag . '.php'); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>