<?php

namespace Drupal\friend\Controller;

use Drupal\Core\Controller\ControllerBase;

class FriendController extends ControllerBase {

  public function showFriends() {
    return array(
      '#markup' => friend_friend_list(),
    );
  }
}