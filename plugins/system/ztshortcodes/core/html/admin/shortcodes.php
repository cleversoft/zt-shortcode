<?php
$jsonFile = realpath(__DIR__ . '/../../assets') . '/shortcodes.json';
$buffer = file_get_contents($jsonFile);
$shortcodes = json_decode($buffer);
// Grouping

// Awesome
function getAwesome(){
    $jsonAwesome = realpath(__DIR__ . '/../../assets/font-awesome') . '/awesome.json';
    $bufferAwesome = file_get_contents($jsonAwesome);
    $listAwesome = json_decode($bufferAwesome);

    $html = '';
    $html .= '<div class="list-awesome-font"><ul>';
    foreach($listAwesome as $key => $fontName){
        $html .= '<li><a href="#"><i class="fa '. $key .'"></i></a></li>';
    }

    $html .= '</ul></div>';
    return $html;
}

// Path Uri
$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);
array_pop($uri);
array_pop($uri);
$uri = implode('/', $uri) . '/plugins/system/ztshortcodes/core/assets/';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet"
      href="<?php echo $uri . 'font-awesome/css/font-awesome.min.css'; ?>"/>

<link rel="stylesheet"
      href="<?php echo $uri . 'css/shortcode.css'; ?>"/>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<div id="zo2-shortcode-plugin" class="zo2-shortcode-wrap">

    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <?php
            foreach ($shortcodes as $key => $shortcode) {
                echo '<li role="presentation" class="item-shortcode ' . 'item-' . $shortcode->tag . '"><a href="#' . $shortcode->tag . '" id="' . $shortcode->tag . '-tab" role="tab" data-toggle="tab" aria-controls="' . $shortcode->tag . '" aria-expanded="false"><i class="' . $shortcode->icon . '"></i>' . $shortcode->name . '</a></li>';
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