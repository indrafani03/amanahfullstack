<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $codeAwalModels = new \App\Models\codeAwalModels();
        $codeBranchModels = new \App\Models\codeBranchModels();
        $barangModels = new \App\Models\barangModels();

        $list = $codeAwalModels->where('deletedAt')->findAll();
        $cabang = $codeBranchModels->where('deletedAt')->findAll();
        $barang = $barangModels->where('deletedAt')->findAll();


       

        $data = [
            "code" =>  $list,
            "cabang" => $cabang,
            "barang" => $barang
        ];

        return view('pages/dashboard', $data);
    }
}
