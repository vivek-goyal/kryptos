<?php

class Application_Model_RegistryEntriesEntitiesMatrixRelationItem extends Application_Model_RegistryEntriesEntitiesRelationItem
{
    public $injections = [
        'relation' => ['RegistryEntriesEntitiesMatrixRelation', 'entry_id', 'getList', ['eev.id IN (?)' => null], 'id', 'relation', false],
    ];
}