<?php
class MainController
{

    public function home()
    {
        $this->show('home');
    }
    public function dailyPicture()
    {
        $data = new DataApiNasa();
        $dataPicture = $data->callApiNasaDailyImage();
        $description =  $dataPicture["explanation"];
        $image = $dataPicture["hdurl"];
        $title = $dataPicture["title"]; 
        $this->show('picture',  [
            "images" => $image,
            "explanation" => $description,
            "title" => $title
        ]);
    }
    public function marsPicture()
    {
        $data = new DataApiNasa();
        $dataPicture = $data->callApiNasaMarsImage();
        var_dump($dataPicture);
        // $this->show('picture',  [
        //     "images" => $image,
        //     "explanation" => $description,
        //     "title" => $title
        // ]);
    }

    //page d'erreur 404
    public function fourofour()
    {
        //on indique aux robots genre Google que c'est une page d'erreur
        header("HTTP/1.0 404 Not Found");
        $this->show('404');
    }
    private function show($templateName, $viewVars = [])
    {
        $page = $templateName;
        require("views/header.tpl.php");
        require("views/$page.tpl.php");
        //ou en version concaténation
        //require("views/".$templateName.".tpl.php");
        require("views/footer.tpl.php");
    }
}
