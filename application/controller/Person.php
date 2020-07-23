<?php


namespace application\controller;
require 'application/model/PersonModel.php';

use application\model\PersonModel;

class Person extends Controller
{
    // get all actors
    public function actors()
    {
        $personModel = new PersonModel();
        $actors = $personModel->all('actors');

        return $this->view('celebrity-grid', compact('actors'));
    }

    // get actor information such as name, picture and ...
    public function actor($id)
    {
        $personModel = new PersonModel();
        $actor = $personModel->getActor($id[0]);
        $actor = $actor[0];

        $personModel = new PersonModel();
        $actorPictures = $personModel->getActorPicture($id[0]);

        $movieModel = new PersonModel();
        $actorMovies = $movieModel->getActorMovies($id[0]);

        return $this->view('celebrity-single', compact('actor', 'actorPictures', 'actorMovies'));
    }

    // get director information such as name, picture and ...
    public function director()
    {
        $personModel = new PersonModel();
        $director = $personModel->getDirector('1');
        $director = $director[0];

        $personModel = new PersonModel();
        $directorPictures = $personModel->getDirectorPicture('1');

//        $movieModel = new PersonModel();
//        $directorMovies = $movieModel->getActorMovies('1');

        return $this->view('director-single', compact('director', 'directorPictures'));
    }

    public function pagination($pageNumber)
    {
        $personModel = new PersonModel();
        $actors = $personModel->all('actors');

        $actorsCount = sizeof($actors);
        $numberOfPages = $actorsCount / 25;
        $endPage = $actorsCount % 25;
        $ac = array();

        if ($pageNumber != $numberOfPages) {
            for ($i = ($pageNumber - 1) * 25; $i < $pageNumber * 25; $i++)
                $ac[$i] = $actors[$i];
        } else {
            for ($i = ($pageNumber - 1) * 25 + 1; $i < sizeof($actors) - (($pageNumber - 1) * 25) * 25; $i++)
                $ac[$i] = $actors[$i];
        }

        return $this->view('celebrity-grid', compact('actors'));
    }
}