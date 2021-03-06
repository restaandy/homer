<?php

    $minify_or_not = $config['environment'] === 'production' ? '.min' : '';

    // CSS
    if ($load_bootstrap) {
        $this->setCssFile($this->_assetsFolder.'css/bootstrap/bootstrap' . $minify_or_not . '.css');
    }
    if ($load_jquery_ui) {
        $this->setCssFile($this->_assetsFolder.'css/jquery-ui/jquery-ui' . $minify_or_not . '.css');
    }
    $this->setCssFile($this->_assetsFolder.'css/grocery-crud.css');

    // JavaScript
    if ($load_jquery) {
        $this->setJavaScriptFile($this->_assetsFolder . 'js/jquery/jquery' . $minify_or_not .  '.js');
    }
    if ($load_jquery_ui) {
        $this->setJavaScriptFile($this->_assetsFolder . 'js/libraries/jquery-ui' . $minify_or_not . '.js');
    }

    if ($load_texteditor) {
        $this->setJavaScriptFile($this->_assetsFolder . 'js/libraries/ckeditor/ckeditor.js');
        $this->setJavaScriptFile($this->_assetsFolder . 'js/libraries/ckeditor/ckeditor.adapter-jquery.js');
    }

    if ($load_modernizr) {
        $this->setJavaScriptFile($this->_assetsFolder . 'js/libraries/modernizr-custom.js');
    }

    $this->setJavaScriptFile($this->_assetsFolder . 'js/build/grocery-crud' . $minify_or_not . '.js');
?>
<div class="gc-container" data-url="<?php echo $this->getApiUrl(); ?>" data-unique-id="<?php echo $this->getUniqueId(); ?>">
    <?php include(__DIR__ . '/build/main.html'); ?>
</div>