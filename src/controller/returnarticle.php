<?php
include_once "../connect.php";
include_once "../dao/articleDao.php";
$id = $_GET['article_id'];
$article = getArticle($id);
$class = new MyClassName();
$article = $class->decode($article);
echo json_encode($article);

class MyClassName {
    function encode($data) {
        if (is_array($data)) {
            return array_map(array($this,'encode'), $data);
        }
        if (is_object($data)) {
            $tmp = clone $data; // avoid modifing original object
            foreach ( $data as $k => $var )
                $tmp->{$k} = $this->encode($var);
            return $tmp;
        }
        return htmlentities($data);
    }

    function decode($data) {
        if (is_array($data)) {
            return array_map(array($this,'decode'), $data);
        }
        if (is_object($data)) {
            $tmp = clone $data; // avoid modifing original object
            foreach ( $data as $k => $var )
                $tmp->{$k} = $this->decode($var);
            return $tmp;
        }
        return html_entity_decode($data);
    }
}