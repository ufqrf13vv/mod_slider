<?php

// No direct access
defined( '_JEXEC' ) or die;

/**
 * Class Module Helper
 * @author mragulin
 */
class modSliderHelper
{

	/**
	 * getData method
	 * @param $params
	 * @return array
	 */
	static function getData( $params )
	{
		$db = JFactory::getDbo();
		return array();
	}

	public static function getItems($params)
	{
		$images = array();

		$repeatList = $params->get('addnew');
		$json = json_decode($repeatList, true);
		if (isset($json['image'])) {
			foreach ($json['image'] as $key => $value) {
				if (!empty($json['image'][$key])) {
					$img = new stdClass();
					$img->src = $json['image'][$key];
					$img->title = $json['title'][$key];
					$img->subtitle = $json['subtitle'][$key];
					$img->href = $json['href'][$key];
					$images[] = $img;
				}
			}
		}

		return $images;
	}

	public static function getAjax()
	{
		jimport('joomla.application.module.helper');
		$module = JModuleHelper::getModule('slider');
		$params = json_decode($module->params);

		return $params;
	}
}