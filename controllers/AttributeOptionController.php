<?php

namespace artsoft\eav\controllers;

use artsoft\controllers\admin\BaseController;

/**
 * AttributeOptionController implements the CRUD actions for artsoft\eav\models\EavAttributeOption model.
 */
class AttributeOptionController extends BaseController
{
    public $modelClass = 'artsoft\eav\models\EavAttributeOption';
    public $modelSearchClass = 'artsoft\eav\models\search\EavAttributeOptionSearch';

    public $disabledActions = ['view', 'bulk-activate', 'bulk-deactivate'];

    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'update':
                return ['update', 'id' => $model->id];
                break;
            case 'create':
                return ['update', 'id' => $model->id];
                break;
            default:
                return parent::getRedirectPage($action, $model);
        }
    }
}