<?php
class PatchNotesAppSchema extends CakeSchema
{
	public $file = 'schema.php';

	public function before($event = [])
	{
		return true;
	}

	public function after($event = [])
	{
	}
    
    public $patchnotes__lists = [
		'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false, 'key' => 'primary'],
		'name' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false],
        'url' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false],
        'list' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 10000, 'unsigned' => false],
        'news_id' => ['type' => 'integer', 'null' => false, 'default' => 0, 'length' => 20, 'unsigned' => false],
        'created' => ['type' => 'datetime', 'null' => false, 'default' => null]
	];
}
