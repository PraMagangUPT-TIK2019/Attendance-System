<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use yii\web\Controller;

class UserController extends Controller
{
    public $layout = 'sidebar';

    public $sidebar_items;
    
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->sidebar_items = [
            [
                'url' => Url::to(['/user/index']),
                'view' => 'index',
                'label' => 'Home',
                'icon' => 'home',
            ],
            [
                'url' => Url::to(['/user/laporan']),
                'view' => 'laporan',
                'label' => 'Laporan',
                'icon' => 'book',
            ]
        ];
    }

    private function _render($view, $context = []) {
        $this->sidebar_items = array_map(function ($item) use($view) {
            if ($item['view'] == $view) {
                $item['active'] = true;
            }

            return $item;
        }, $this->sidebar_items);

        return $this->render($view, $context);
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index','laporan'],
                        'roles' => ['@'],
                        'matchCallback' => function($rule, $action) {
                            // TODO: Change this
                            return Yii::$app->user->identity->username != 'admin';
                        }
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->_render('index');
    }
    public function actionLaporan()
    {
        return $this->_render('laporan');
    }
}