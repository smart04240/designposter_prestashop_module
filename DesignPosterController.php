<?php
/**
 * controllers/front
 */
class DesignPosterControllerCore extends FrontController
{
    public $php_self = 'designposter';
    public $ssl = true;

    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
        $link = $this->context->link->getModuleLink('designposter', 'design', [], true);
        
        Tools::redirect($link);
    }
}
