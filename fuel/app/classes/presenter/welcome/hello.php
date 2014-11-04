<?php

/**
 * The welcome hello presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class presenter_welcome_hello extends Presenter
{
    /**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
    public function view()
    {
        $this->name = $this->request()->param('name', 'World');
    }
}
