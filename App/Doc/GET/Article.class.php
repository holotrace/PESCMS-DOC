<?php

namespace App\Doc\GET;

/**
 * 查看文档
 */
class Article extends \Core\Controller\Controller {

    /**
     * 管理文档
     */
    public function manage() {
        $this->display();
    }

    /**
     * 发表文档
     */
    public function action() {
        $this->display();
    }

}
