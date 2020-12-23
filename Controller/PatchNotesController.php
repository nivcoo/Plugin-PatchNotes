<?php

class PatchNotesController extends PatchNotesAppController
{

    public function index($slug = false)
    {
        if ($slug != false) {
            $this->loadModel('PatchNotes.PatchNotesList');
            $get_patch_notes = $this->PatchNotesList->find('first', array('conditions' => array('url' => $slug)));
            if (!empty($get_patch_notes)) {
                $this->layout = $this->Configuration->getKey('layout');
                $this->set('title_for_layout', $get_patch_notes['name']);
                $get_patch_notes = $get_patch_notes['PatchNotesList'];
                $get_list = json_decode($get_patch_notes["list"], true);
                $get_list_shop = $get_list["shop"];

                $this->set(compact('get_patch_notes', 'get_list', 'get_list_shop'));
            } else {
                throw new NotFoundException();
            }

        } else {
            throw new NotFoundException();
        }
    }

    public function admin_index()
    {
        if ($this->isConnected AND $this->User->isAdmin()) {
            $this->layout = 'admin';

            $this->loadModel('PatchNotes.PatchNotesList');
            $get_patch = $this->PatchNotesList->find('all');
            $this->set(compact('get_patch'));


        } else {
            $this->redirect('/');
        }
    }

    public function admin_add()
    {
        if ($this->isConnected AND $this->User->isAdmin()) {
            $this->layout = 'admin';
            $this->loadModel('PatchNotes.PatchNotesList');

            if ($this->request->is('ajax')) {
                $this->response->type('json');
                $this->autoRender = null;
                if (!empty($this->request->data['name']) AND !empty($this->request->data['url'])) {
                    $this->PatchNotesList->add(
                        $this->request->data['name'],
                        $this->slugify($this->request->data['url']),
                        json_encode($this->request->data['lists'])

                    );
                    $this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('PATCHNOTES__GLOBAL_ADD_SUCCESS'))));
                } else {
                    $this->response->body(json_encode(array('statut' => false, 'msg' => $this->Lang->get('ERROR__FILL_ALL_FIELDS'))));
                }
            } else {
                $this->response->body(json_encode(array('statut' => false, 'msg' => $this->Lang->get('ERROR__BAD_REQUEST'))));
            }

        } else {
            $this->redirect('/');
        }
    }


    public function admin_edit($id = 0)
    {
        if ($this->isConnected AND $this->User->isAdmin()) {
            $this->layout = 'admin';
            $this->loadModel('PatchNotes.PatchNotesList');
            $get_patch_notes = $this->PatchNotesList->find('first', array('conditions' => array('id' => $id)));
            if (!$get_patch_notes) $this->redirect('/admin/patch-notes/');
            $get_patch_notes = $get_patch_notes['PatchNotesList'];
            $list = json_decode($get_patch_notes['list'], true);

            if ($this->request->is('ajax')) {
                $this->autoRender = false;
                if (!empty($this->request->data['name']) AND !empty($this->request->data['url'])) {
                    $this->PatchNotesList->edit(
                        $get_patch_notes['id'],
                        $this->request->data['name'],
                        $this->slugify($this->request->data['url']),
                        json_encode($this->request->data['lists'])
                    );
                    $this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('PATCHNOTES__GLOBAL_EDIT_SUCCESS'))));
                } else {
                    $this->response->body(json_encode(array('statut' => false, 'msg' => $this->Lang->get('ERROR__FILL_ALL_FIELDS'))));
                }
            } else {
                $this->response->body(json_encode(array('statut' => false, 'msg' => $this->Lang->get('ERROR__BAD_REQUEST'))));
            }
            $this->set(compact('get_patch_notes', 'list'));
        } else {
            $this->redirect('/');
        }
    }

    private function slugify($string, $delimiter = '-') {
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, 'en_US.UTF-8');
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower($clean);
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        $clean = trim($clean, $delimiter);
        setlocale(LC_ALL, $oldLocale);
        return $clean;
    }

    public function admin_delete($id = null)
    {
        if ($this->isConnected AND $this->User->isAdmin()) {
            if (!isset($id)) $this->redirect('/admin/patch-notes/');
            $this->loadModel('PatchNotes.PatchNotesList');
            $this->autoRender = null;
            $this->PatchNotesList->delete($id);
            $this->redirect('/admin/patch-notes/');

        } else {
            $this->redirect('/');
        }
    }

}