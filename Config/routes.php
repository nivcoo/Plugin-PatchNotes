<?php

Router::connect('/admin/patch-notes', array('plugin' => 'PatchNotes', 'controller' => 'PatchNotes', 'action' => 'index', 'admin' => true));
Router::connect('/admin/patch-notes/add', array('plugin' => 'PatchNotes', 'controller' => 'PatchNotes', 'action' => 'add', 'admin' => true));
Router::connect('/admin/patch-notes/edit/*', array('plugin' => 'PatchNotes', 'controller' => 'PatchNotes', 'action' => 'edit', 'admin' => true));
Router::connect('/admin/patch-notes/delete/*', array('plugin' => 'PatchNotes', 'controller' => 'PatchNotes', 'action' => 'delete', 'admin' => true));


Router::connect('/patch-notes/*', array('plugin' => 'PatchNotes', 'controller' => 'PatchNotes', 'action' => 'index'));