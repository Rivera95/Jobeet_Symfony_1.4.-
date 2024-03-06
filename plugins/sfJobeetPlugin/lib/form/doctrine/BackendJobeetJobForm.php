<?php

class BackendJobeetJobForm extends JobeetJobForm
{
    public function setup()
    {
        parent::setup();
        $this->removeFields();
    }

    protected function removeFields()
    {
        unset($this['created_at']);
        unset($this['updated_at']);
        unset($this['token']);
    }
}