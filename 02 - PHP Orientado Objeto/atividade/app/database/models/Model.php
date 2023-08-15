<?php

    namespace app\database\models;
    
    use app\traits\Connection;
    use app\traits\Create;
    use app\traits\Read;

    abstract class Model {
        use Create, Read, Connection;
    }