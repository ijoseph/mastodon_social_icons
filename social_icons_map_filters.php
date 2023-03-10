<?php
/**
 * @package Mastodon_Social_Icons
 * @version 0.1.0
 */
/*
Plugin Name: Social Icons for Mastodon
Plugin URI: https://github.com/ijoseph/mastodon_social_icons/
Description: Replace links to the top 100 Mastodon domains with the Mastodon svg
Author: Isaac Joseph
Version: 0.1.0
Author URI: github.com/ijoseph
*/

add_filter(
    'twenty_twenty_one_social_icons_map',
    function ($map) {
        $map['mastodon'] = array(
          'mastodon.social',
          'pawoo.net',
          'mstdn.jp',
          'baraag.net',
          'mastodon.cloud',
          'mstdn.social',
          'mastodon.online',
          'counter.social',
          'mas.to',
          'mastodon.world',
          'gc2.jp',
          'mastodon.lol',
          'techhub.social',
          'mastodon.sdf.org',
          'pixelfed.social',
          'universeodon.com',
          'mastodonapp.uk',
          'masto.ai',
          'mastodon.uno',
          'c.im',
          'fosstodon.org',
          'brighteon.social',
          'infosec.exchange',
          'mastodon.top',
          'mstdn.party',
          'hachyderm.io',
          'mamot.fr',
          'mastodon.nl',
          'sfba.social',
          'ohai.social',
          'troet.cafe',
          'home.social',
          'm.cmx.im',
          'mindly.social',
          'kolektiva.social',
          'mstdn.ca',
          'masthead.social',
          'mastodon.art',
          'toot.community',
          'alive.bar',
          'poa.st',
          'mastodon.scot',
          'fedibird.com',
          'meatbag.app',
          'loforo.com',
          'qoto.org',
          'mastodon.au',
          'nerdculture.de',
          'social.vivaldi.net',
          'ioc.exchange',
          'mastodon.xyz',
          'tkz.one',
          'aus.social',
          'mastodon.gamedev.place',
          'ravenation.club',
          'pixelfed.de',
          'piaille.fr',
          'wxw.moe',
          'spinster.xyz',
          'social.tchncs.de',
          'mastodon.ie',
          'mastodon.bida.im',
          'mastouille.fr',
          'newsie.social',
          'mastodon.com.tr',
          'masto.nu',
          'nrw.social',
          'twingyeo.kr',
          'm.rthome.me',
          'masto.es',
          'mastodontech.de',
          'o3o.ca',
          'abdl.link',
          'mastodon.nu',
          'det.social',
          'glasgow.social',
          'theblower.au',
          'thu.closed.social',
          'sueden.social',
          'toot.wales',
          'planet.moe',
          'bitcoinhackers.org',
          'noc.social',
          'mathstodon.xyz',
          'eldritch.cafe',
          'ieji.de',
          'norden.social',
          'octodon.social',
          'kinky.business',
          'social.cologne',
          'mastodon.green',
          'meow.social',
          'awscommunity.social',
          'framapiaf.org',
          'chaos.social',
          'muenchen.social',
          'mastodon.iriseden.eu',
          'indieweb.social',
          'social.linux.pizza',
          'mstdn.plus',
        );
        return $map;
    }
);
