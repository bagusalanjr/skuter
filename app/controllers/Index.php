<?php

class Index extends Controller{

    public function index(){
        $data["judul"] = "halaman utama";

        $skuters = $this->model("Skuter_model")->getAllSkuter();

        $this->view("templates/header",$data);
        $this->view("index/index",$skuters);
        $this->view("templates/footer");
    }

}