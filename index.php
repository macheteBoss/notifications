<?php

include_once 'classes/IosRenderer.php';
include_once 'classes/AndroidRenderer.php';
include_once 'classes/EmailNotification.php';
include_once 'classes/PushNotification.php';
include_once 'classes/PhoneNotification.php';
include_once 'classes/User.php';
include_once 'classes/Worker.php';

$ios = new IosRenderer();
$android = new AndroidRenderer();

$user1 = new User('rburd@bk.ru', '23905', $ios, '123');
$user2 = new User('test@bk.ru', '23905', $android, '456');

$notification1 = new EmailNotification([$user1, $user2], 'Просто сообщение');
$notification2 = new PushNotification([$user1, $user2], 'Обычное сообщение');
$notification3 = new PhoneNotification($user1, 'Типичное сообщение на телефон');

echo Worker::getResult($notification1);
echo Worker::getResult($notification2);
echo Worker::getResult($notification3);

?>
