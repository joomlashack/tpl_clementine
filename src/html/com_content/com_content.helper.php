<?php
/**
 * @package     Voyage
 * @subpackage  Content Helper
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

/**
 * Voyage Article Legend.
 *
 * @param   bool    $divideLegends  The file being scanned.
 * @param   string  $activeLink     Afsadf s sned s.
 * @param   object  &$legendTop     Bat pizza eing scanned ss.
 * @param   object  &$legendBottom  Co se que pa.
 * @param   object  &$introText     Sg scanned ss.
 * @param   object  &$text          Aeing scanned ss.
 *
 * @return void
 */
function voyageArticleLegend($divideLegends, $activeLink, &$legendTop, &$legendBottom, &$introText, &$text)
{
	$legendTop = '';

	if (preg_match('/<p([^>]*)class="legend">([^<]*)<\/p>/i', $introText, $matches))
	{
		$introText = preg_replace('/<p([^>]*)class="legend">([^<]*)<\/p>/i', '', $introText);

		if (isset($text))
		{
			$text = preg_replace('/<p([^>]*)class="legend">([^<]*)<\/p>/i', '', $text);
		}

		$legenditems = json_decode($matches[2]);

		$subtitle = '';
		$link = '';
		$icons = '';
		$arrow = '';

		if (isset($legenditems->Link))
		{
			if ($activeLink != '')
			{
				$link = '<a href="' . $activeLink . '">';
			}

			if (isset($legenditems->Subtitle))
			{
				$subtitle = '<span class="subtitle">' . $legenditems->Subtitle . '</span>';
			}

			if ($divideLegends)
			{
				$link .= $subtitle;
			}

			$link .= '<span class="wrapp-link">';
			$link .= '<span class="link">';
			$link .= $legenditems->Link;
			$link .= '</span>';

			$arrow .= "<span class='pull-left'>&nbsp;&gt;</span>";

			if ($divideLegends)
			{
				$link .= $arrow;
			}

			$link .= '</span>';

			if (isset($legenditems->Icons))
			{
				$icons = '<span class="icons">';

				foreach ($legenditems->Icons as $icon => $iconlink)
				{
					if (substr($iconlink, 0, 1) == '#')
					{
						$iconlink = $activeLink . $iconlink;
					}

					$icons .= '<a href="' . $iconlink . '"><i class="' . $icon . '"></i></a>';
				}

				$icons .= '</span>';
			}

			if ($activeLink != '')
			{
				$link .= '</a>';
			}
		}

		if ($divideLegends)
		{
			$legendTop = $link;
			$legendBottom = $icons;
		}
		else
		{
			$legendTop = $subtitle . $link . $icons;
			$legendBottom = '';
		}
	}
}
