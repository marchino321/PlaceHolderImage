<?php
namespace PlaceHolderImage;

class PlaceHolderImage
{
	public static function PlaceImage(array $params = [])
	{
		$params['size'] ??= '150x150';
		$queryString = '';
		if(isset($params['text']))
		{
			$queryString = '?text=' . urlencode ($params['text']);
			unset($params['text']);
		}
		return "https://via.placeholder.com/" . \implode('/', $params) . $queryString;

	}
}
