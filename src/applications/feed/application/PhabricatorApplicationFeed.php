<?php

final class PhabricatorApplicationFeed extends PhabricatorApplication {

  public function getBaseURI() {
    return '/feed/';
  }

  public function getShortDescription() {
    return 'Review activity.';
  }

  public function getIconName() {
    return 'feed';
  }

  public function getRoutes() {
    return array(
      '/feed/' => array(
        'public/' => 'PhabricatorFeedPublicStreamController',
        '(?:(?P<filter>[^/]+)/)?' => 'PhabricatorFeedMainController',
      ),
    );
  }

  public function getApplicationGroup() {
    return self::GROUP_COMMUNICATION;
  }

}

