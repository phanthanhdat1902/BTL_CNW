<?php

class HTML {

    private $js = array();

    function shortenUrls($data) {
        $data = preg_replace_callback('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', array(get_class($this), '_fetchTinyUrl'), $data);
        return $data;
    }

    private function _fetchTinyUrl($url) {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, 'http://tinyurl.com/api-create.php?url=' . $url[0]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return '<a href="' . $data . '" target = "_blank" >' . $data . '</a>';
    }

    function sanitize($data) {
        return mysqli_real_escape_string($data);
    }

    function link($text, $path, $prompt = null, $confirmMessage = "Are you sure?") {
        $path = str_replace(' ', '-', $path);
        if ($prompt) {
            $data = '<a href="javascript:void(0);" onclick="javascript:jumpTo(\'' . BASE_PATH . '/' . $path . '\',\'' . $confirmMessage . '\')">' . $text . '</a>';
        } else {
            $data = '<a href="' . BASE_PATH . '/' . $path . '">' . $text . '</a>';
        }
        return $data;
    }

    function includeJs($fileName) {
        $data = '<script src="' . BASE_PATH . '/public/js/' . $fileName . '.js"></script>';
        return $data;
    }

    function includeCss($fileName) {
        $data = '<link rel="stylesheet" href="' . BASE_PATH . '/public/css/' . $fileName . '.css">';
        return $data;
    }

    function asDollars($value) {
        if ($value < 0)
            return "-" . asDollars(-$value);
        return number_format($value, 0) . ' VND';
    }

    function includeImg($fileName) {
        $data = 'style = "background: url(\'http://localhost/BTL_CNW/public/img/'.$fileName.'\') no-repeat center;"';
        return $data;
    }

}
