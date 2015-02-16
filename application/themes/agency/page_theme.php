<?php
namespace Application\Theme\agency;
class PageTheme extends \Concrete\Core\Page\Theme\Theme {

	public function registerAssets() {
        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('css', 'font-awesome');
        $this->providesAsset('css', 'bootstrap/*');
        $this->providesAsset('javascript', 'bootstrap/*');
	}

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

}
