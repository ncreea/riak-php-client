<?php

/*
Licensed to the Apache Software Foundation (ASF) under one or more contributor license agreements.  See the NOTICE file
distributed with this work for additional information regarding copyright ownership.  The ASF licenses this file
to you under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance
with the License.  You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an
"AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the License for the
specific language governing permissions and limitations under the License.
*/

namespace Basho\Riak\Command;

use Basho\Riak\Bucket;
use Basho\Riak\Command;
use Basho\Riak\Object;

/**
 * Class Builder
 *
 * This class follows the Builder design pattern and is the preferred method for creating Basho\Riak\Node objects for
 * connecting to your Riak node cluster.
 *
 * <code>
 * use Basho\Riak\Command\Builder as CommandBuilder;
 *
 * $command = (new CommandBuilder)
 *     ->withHost('127.0.0.1')
 *     ->buildLocalhost([10018, 10028, 10038, 10048, 10058]);
 * </code>
 *
 * @package     Basho\Riak\Command
 * @author      Christopher Mancini <cmancini at basho d0t com>
 * @copyright   2011-2014 Basho Technologies, Inc.
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0 License
 * @since       2.0
 */
class Builder {
    protected $bucket = null;
    protected $object = null;

    public function __construct()
    {
    }

    public function build(Command $command)
    {
    }

    public function withBucket(Bucket $bucket)
    {
    }

    public function withObject(Object $object)
    {
    }
} 