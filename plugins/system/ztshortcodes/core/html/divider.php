<?php
/**
 * Created by PhpStorm.
 * User: chinhlv
 * Date: 1/30/15
 * Time: 1:37 AM
 */
?>

<?php
    $html = $classTop = '';
    if($options->get('type') == 'text-only'){
        $classTop = 'go-to-top';
    } else if($options->get('type') == 'icon-type-1'){
        $classTop = 'go-to-top-icon-1';
    } else if($options->get('type') == 'icon-type-2'){
        $classTop = 'go-to-top-icon-2';
    }

    $html .= '<div class="zo2-divider-wrap">';
    $html .= '<div class="zo2-divider '. $classTop .' divider-'. $options->get('type') .'">';
    if($options->get('type') == 'text-only' || $options->get('type') == 'icon-type-1' || $options->get('type') == 'icon-type-2'){
        $html .= '<a href="#" class="animate-top">';
        if($options->get('type') == 'text-only'){
            $html .= $options->get('text');
        } else if($options->get('type') == 'text-only'){
            $html .= '<i class="'. $options->get('icon') .'"></i>';
        } else {
            $html .= $options->get('text').' <i class="'. $options->get('icon') .'"></i>';
        }
        $html .= '</a>';
    }
    $html .= '</div>';
    $html .= '</div>';
    echo $html;
?>