<?php
    $html = '';

    if($options->get('type') == "link"){
        $html .= '<a href="'. $options->get('link') .'">'. $options->get('text') .' <span class="badge">'. $content .'</span></a>';
    } else {
        $html .= '<button class="btn btn-'. $options->get('buttonType') .'" type="button">'. $options->get('text') .' <span class="badge">'. $content .'</span></button>';
    }

    echo $html;
?>