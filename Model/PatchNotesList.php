<?php

class PatchNotesList extends PatchNotesAppModel
{
    public $useTable = "lists";
    public function edit($id, $name, $url, $lists)
    {
        $name = $this->getDataSource()->value($name, 'string');
        $url = $this->getDataSource()->value($url, 'string');
        $lists = $this->getDataSource()->value($lists, 'string');
		
		return $this->updateAll([
			'name' => $name,
            'url' => $url,
            'list' => $lists
		], ['id' => $id]);
	}
    
    public function add($name, $url, $list)
    {
        $this->create();
        $this->set([
            'name' => $name,
            'url' => $url,
            'list' => $list
        ]);
        $this->save();
	}
}