<?php 


function print_view (string $tpl_name, array $vars = []): void {
    if (!empty($vars)) {
        foreach ($vars as $name => $value) {
            $$name = $value;
        }
    }
    $content = 'views/pages/'.$tpl_name.'.php';
    include 'views/layout/header.php';
    if (file_exists($content)) {
        include $content;
    }
    include 'views/layout/footer.php';
}