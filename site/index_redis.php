<?php
//���ӱ��ص� Redis ����
   $redis = new Redis();
   $redis->connect(redis, 6379);
   echo "Connection to server sucessfully";
   //�洢���ݵ��б���
   $redis->lpush("tutorial-list", "Redis");
   $redis->lpush("tutorial-list", "Mongodb");
   $redis->lpush("tutorial-list", "Mysql");
   // ��ȡ�洢�����ݲ����
   $arList = $redis->lrange("tutorial-list", 0 ,5);
   echo "Stored string in redis";
   print_r($arList);
?>