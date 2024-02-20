<?php 
namespace app\modules\fronted\assets;

use yii\web\AssetBundle;   

class AdminAsset extends AssetBundle {

    // The directory that contains the source asset files for this asset bundle
    public $sourcePath = '@app/modules/fronted/web/assets';

    // List of CSS files that this bundle contains
    public $css = ['grapesjs/css/grapes.min.css'];
    public $js = [
        'grapesjs/grapes.min.js',
        // 'https://unpkg.com/grapesjs-preset-webpage',
        // 'https://unpkg.com/grapesjs-preset-newsletter',
        // 'grapesjs/@schukai/grapesjs-blocks-bootstrap5.min.js',

        'https://unpkg.com/grapesjs-preset-webpage@1.0.2',
        'https://unpkg.com/grapesjs-blocks-basic@1.0.1',
        'https://unpkg.com/grapesjs-plugin-forms@2.0.5',
        'https://unpkg.com/grapesjs-component-countdown@1.0.1',
        'https://unpkg.com/grapesjs-plugin-export@1.0.11',
        'https://unpkg.com/grapesjs-tabs@1.0.6',
        'https://unpkg.com/grapesjs-custom-code@1.0.1',
        'https://unpkg.com/grapesjs-touch@0.1.1',
        'https://unpkg.com/grapesjs-parser-postcss@1.0.1',
        'https://unpkg.com/grapesjs-tooltip@0.1.7',
        'https://unpkg.com/grapesjs-tui-image-editor@0.1.3',
        'https://unpkg.com/grapesjs-typed@1.0.5',
        'https://unpkg.com/grapesjs-style-bg@2.0.1',
    
    ];

}