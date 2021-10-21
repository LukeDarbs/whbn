<?php

// Sitewide values associated with any given post.
// ================================================

$post_info = array

	(


	"home" => array
		(
		'id' => 0,
		'post_name' => "home",
		'post_url' => "",
		'description' => "Luke Darbyshire, senior digital designer.",
		'title' => "Graphic design",
		'parent' => true,
		'parent_menu_id' => 0
		),

		"about" => array
			(
			'id' => 1,
			'post_name' => "about",
			'post_url' => "about",
			'description' => "Luke Darbyshire, senior digital designer.",
			'title' => "Luke Darbyshire, senior digital designer.",
			'parent_menu_id' => 0
			),


		// Portfolio
		// =============================

		"work" => array
			(
			'id' => 2,
			'post_name' => "work",
			'post_url' => "work",
			'description' => "Recent work by Luke Darbyshire, senior digital designer.",
			'title' => "Recent work",
			'parent' => true,
			'parent_menu_id' => 0
			),

				"reward_brand" => array
					(
					'id' => 200,
					'post_name' => "reward-brand",
					'post_url' => "sneak-peek/reward-brand",
					'description' => "A comprehensive rebrand to completely change the way Reward were seen by clients and staff.",
					'title' => "Reward brand and website",
					'parent_menu_id' => 2
					),

				"cashback_plus" => array
					(
					'id' => 202,
					'post_name' => "cashback-plus",
					'post_url' => "sneak-peek/cashback-plus",
					'description' => "I built and led the Reward design and development team, to deliver the NatWest and RBS Cashback Plus websites",
					'title' => "NatWest and RBS Cashback&nbsp;Plus",
					'parent_menu_id' => 2
					),

				"brit_row_website" => array
					(
					'id' => 203,
					'post_name' => "brit-row-website",
					'post_url' => "sneak-peek/brit-row-website",
					'description' => "Wordpress powered site for the UK’s leading audio hire specialist, Britannia Row Productions.",
					'title' => "Britannia Row Productions website",
					'parent_menu_id' => 2
					),

				"mountain_tracks_brochures" => array
					(
					'id' => 204,
					'post_name' => "mountain-tracks-brochures",
					'post_url' => "sneak-peek/mountain-tracks-brochures",
					'description' => "I built and led the Reward design and development team, to deliver the NatWest and RBS Cashback Plus websites",
					'title' => "Mountain Tracks brochures",
					'parent_menu_id' => 2
					),

				"santander" => array
					(
					'id' => 205,
					'post_name' => "santander",
					'post_url' => "sneak-peek/santander",
					'description' => "Campaigns, websites and more for Santander.",
					'title' => "Santander",
					'parent_menu_id' => 2
					),

				"gzba_leaflet" => array
					(
					'id' => 207,
					'post_name' => "gzba-leaflet",
					'post_url' => "sneak-peek/gzba-leaflet",
					'description' => "These promotional leaflets for Grimentz-Zinal Backcountry Adventures.",
					'title' => "Grimentz-Zinal Backcountry Adventures",
					'parent_menu_id' => 2
					),

				"msi_candw" => array
					(
					'id' => 208,
					'post_name' => "msi-c-and-w",
					'post_url' => "sneak-peek/msi-c-and-w",
					'description' => "Marie Stopes International’s flagship publication - Cries &amp; Whispers.",
					'title' => "Marie Stopes International - Cries &amp; Whispers",
					'parent_menu_id' => 2
					),

				"nba_payback" => array
					(
					'id' => 209,
					'post_name' => "nba-payback",
					'post_url' => "sneak-peek/nba-payback",
					'description' => "Logo, website and comms to complement the NBA’s All-Access brand.",
					'title' => "NBA Payback",
					'parent_menu_id' => 2
					),

				"penny_for_london" => array
					(
					'id' => 210,
					'post_name' => "penny-for-london",
					'post_url' => "sneak-peek/penny-for-london",
					'description' => "Mobile-first website for The Mayor’s Fund for London.",
					'title' => "Penny for London",
					'parent_menu_id' => 2
					),
				// Previous – Before merge with Baby Dove
				"dove-only" => array
					(
					'id' => 2111,
					'post_name' => "dove-only",
					'post_url' => "sneak-peek/dove-only",
					'description' => "Dove global website.",
					'title' => "Dove",
					'parent_menu_id' => 2
					),

				"dove" => array
					(
					'id' => 211,
					'post_name' => "dove",
					'post_url' => "sneak-peek/dove",
					'description' => "Dove and Baby Dove global websites.",
					'title' => "Dove",
					'parent_menu_id' => 2
					),

				"baby_dove" => array
					(
					'id' => 212,
					'post_name' => "baby-dove",
					'post_url' => "sneak-peek/baby-dove",
					'description' => "Baby Dove sub-brand as part of the Dove global website.",
					'title' => "Baby Dove",
					'parent_menu_id' => 2
					),

				"microsoft_calendar" => array
					(
					'id' => 213,
					'post_name' => "microsoft-calendar",
					'post_url' => "sneak-peek/microsoft-calendar",
					'description' => "Calendar promoting Microsoft Office 365 and the new Nokia Windows devices.",
					'title' => "Microsoft Office 365 calendar",
					'parent_menu_id' => 2
					),

				"nationwide" => array
					(
					'id' => 214,
					'post_name' => "nationwide",
					'post_url' => "sneak-peek/nationwide",
					'description' => "Concepts for various savings tools for Nationwide customers",
					'title' => "Nationwide Savings Tools",
					'parent_menu_id' => 2
					),

				"virgin_holidays" => array
					(
					'id' => 218,
					'post_name' => "virgin-holidays",
					'post_url' => "sneak-peek/virgin-holidays",
					'description' => "Design lead on Virgin Holidays’ first app.",
					'title' => "Virgin Holidays",
					'parent_menu_id' => 2
					),

				"change_inc" => array
					(
					'id' => 219,
					'post_name' => "change-inc",
					'post_url' => "sneak-peek/change-inc",
					'description' => "Design lead for a brand new publishing platform from Vice.",
					'title' => "Change Incorporated",
					'parent_menu_id' => 2
					),

				"lego_klik" => array
					(
					'id' => 220,
					'post_name' => "lego-klik",
					'post_url' => "sneak-peek/lego-klik",
					'description' => "Digital design lead for a brand new design system, for LEGO.",
					'title' => "LEGO Klik",
					'parent_menu_id' => 2
					),

				"content_by_design" => array
					(
					'id' => 221,
					'post_name' => "content-by-design",
					'post_url' => "sneak-peek/content-by-design",
					'description' => "Brand, website and comms design for a brand new conference.",
					'title' => "Content by Design",
					'parent_menu_id' => 2
					),

				"ux_fest" => array
					(
					'id' => 222,
					'post_name' => "ux-fest",
					'post_url' => "sneak-peek/ux-fest",
					'description' => "Brand, website and comms design for a new virtual conference.",
					'title' => "UX Fest 2021",
					'parent_menu_id' => 2
					),

				"lloyds" => array
					(
					'id' => 223,
					'post_name' => "lloyds",
					'post_url' => "work/lloyds",
					'description' => "Design for Lloyds of London’s new Services Hub product.",
					'title' => "Lloyds of London",
					'parent_menu_id' => 2
					),

				"ingenuity" => array
					(
					'id' => 224,
					'post_name' => "ingenuity",
					'post_url' => "work/ingenuity",
					'description' => "Prototype for Ingenuity Insider a professional social platform.",
					'title' => "Ingenuity Insider",
					'parent_menu_id' => 2
					),

		"404" => array
			(
			'id' => 9404,
			'post_name' => "404",
			'post_url' => "404",
			'description' => "Page not found",
			'title' => "Page not found",
			'parent_menu_id' => 0
			),

	);



?>
