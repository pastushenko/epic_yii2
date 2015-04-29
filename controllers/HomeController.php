<?php
/**
 * Created by PhpStorm.
 * User: pastushenko
 * Date: 21.04.15
 * Time: 21:21
 */
namespace app\controllers;

use app\models\Movie;
use yii\web\Controller;

class HomeController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionList()
    {
        /** @var Movie[] $movies */
        $movies = Movie::find()->all();
        return $this->render('list', ['movies' => $movies]);
    }

    /**
     * @return string
     */
    public function actionAdd()
    {
        if (!isset($_GET['name']) or !$_GET['name']) {
            return $this->redirect('/home/list');
        }

        $movie = new Movie();
        $movie->name = $_GET['name'];
        $movie->save();

        return $this->redirect('/home/list');
    }

    public function actionDelete($id)
    {
        /** @var Movie $movie */
        $movie = Movie::findOne($id);

        if (!$movie) {
            throw new \Exception(sprintf('No movie with id "%s"', $id));
        }

        $movie->delete();
        return $this->redirect('/home/list');
    }
}