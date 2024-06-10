<?

function render($user) {
    $template = "<div>".
                    "<h2>{$user['username']}</h2>".
                "</div>";
    return $template;
}

