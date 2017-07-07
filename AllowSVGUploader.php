<?php

namespace IMI\SVGProductImages;

use Magento\Framework\File\Uploader;

class AllowSVGUploader extends Uploader
{
	/**
	 * Add SVG to the list of files
	 *
	 * Made with love for the call in
	 * @see \Magento\Catalog\Controller\Adminhtml\Product\Gallery\Upload::execute
	 *
	 * @param array $extensions
	 * @param bool $addSvgAutomatically
	 *
	 * @return $this
	 */
	public function setAllowedExtensions( $extensions = [], $addSvg = true) {
		if ($addSvg) {
			if (!in_array('svg', $extensions)) {
				$extensions[] = 'svg';
			}
		}
		return parent::setAllowedExtensions( $extensions ); // TODO: Change the autogenerated stub
	}

}