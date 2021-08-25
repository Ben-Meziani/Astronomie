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
        $title = $dataPicture["title"]; 
        if (isset($dataPicture["hdurl"])) {
            $image = $dataPicture["hdurl"];
            $this->show('picture',  [
                "images" => $image,
                "explanation" => $description,
                "title" => $title,
            ]);
        }
        if ($dataPicture["url"]) {
            $video = $dataPicture["url"];
            $this->show('picture',  [
                "videos" => $video,
                "explanation" => $description,
                "title" => $title,
            ]);
        }
    }
    public function marsPicture()
    {
        $data = new DataApiNasa();
        $dataMars = $data->callApiNasaMarsImage();
        $images =  $dataMars['latest_photos'][0]['img_src'];
        $title = $dataMars['latest_photos'][0]['camera']['full_name'];
        var_dump($title);
         $this->show('mars', [
             'image' => $images,
             'title' => $title
        ]);
    }
        // $this->show('picture',  [
        //     "images" => $image,
        //     "explanation" => $description,
        //     "title" => $title
        // ]);

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
