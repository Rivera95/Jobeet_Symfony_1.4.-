<?php

class sfJobeetlanguageComponents extends sfComponents
{
    public function executeLanguage(sfWebRequest $request)
    {
        $this->form = new sfFormLanguage(
            $this->getUser(),
            array('languages' => array('en', 'fr'))
        );
    }
}
