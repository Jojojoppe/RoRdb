<?php

namespace RoRdb\RdKafka;

class KafkaConsumerTopic extends Topic
{
    private function __construct()
    {
    }
    /**
     * @param int $partition
     * @param int $offset
     *
     * @return void
     */
    public function offsetStore($partition, $offset)
    {
    }
}
