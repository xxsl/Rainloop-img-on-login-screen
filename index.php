<?php

class ImgOnLoginScreenPlugin extends \RainLoop\Plugins\AbstractPlugin
{
	public function Init()
	{
		$this->addJs('js/include.js');
	}

	public function configMapping()
	{
		return array(
			\RainLoop\Plugins\Property::NewInstance('url')->SetLabel('Url of your picture')
				->SetPlaceholder('http://')
				->SetAllowedInJs(true)
				->SetDefaultValue(''),
		);
	}

}
