<?php

namespace App\Controllers;
use chillerlan\QRCode\{QRCode, QROptions};
class Barang extends BaseController
{
    
    public function SaveBarang()
    {
        
        $codeAwalModels = new \App\Models\codeAwalModels();
        $codeBranchModels = new \App\Models\codeBranchModels();

        // $list = $codeAwalModels->where('deletedAt')->findAll();
        // $cabang = $codeBranchModels->where('deletedAt')->findAll();


        $barangModels = new \App\Models\barangModels();

        $nama =   $this->request->getPost('nama');
        $jumlah = $this->request->getPost('jumlah');
        $tanggal = $this->request->getPost('tanggal');
        $keterangan = $this->request->getPost('keterangan');
        $kode = $this->request->getPost('kode');
        $cabang = $this->request->getPost('cabang');
        $id = $this->request->getPost('id');

        $nama_kode = $codeAwalModels->where('code', $kode)->first();
        $nama_cabang = $codeBranchModels->where('code', $cabang)->first();
        // $date = new DateTime($tanggal." 00:00:00");
              //15/03/2015
       
              
        if($id != "") {
            $data = [
                'nama' => $nama,
                'jumlah' => $jumlah,
                'tanggal_masuk' => $tanggal,
                'keterangan' => $keterangan,
                'kode_cabang' => $cabang,
                'first_code' => $kode,
                'updatedAt' => date('Y-m-d H:i:s')  
            ];
            
           $save = $barangModels->update($id, $data);
           if($save) {
                    
                    define('UPLOAD_DIR', 'qrcode/');
                    // “Switch area jakarta pembelian bulan Juni tahun 2021 ke 5” 

                    $img = $this->GenerateQr($nama_kode['nama']." area ".$nama_cabang['nama']." bulan ". date('M Y', strtotime($tanggal))." ke ". $id);
                    $code_save = $kode.$cabang.date('mY', strtotime($tanggal)).$id;
                    $img = str_replace('data:image/svg+xml;base64,', '', $img);
                    $img = str_replace(' ', '+', $img);
                    $data = base64_decode($img);
                    $file = UPLOAD_DIR . $code_save . '.svg';
                    $success = file_put_contents($file, $data);

                    $datas = [
                        'code' => $code_save,
                        'qr' => $code_save.".svg",
                    ];
                    $barangModels->update($id, $datas);
                echo json_encode(["code" => 200, "message" => "berhasil update data "]);
            } else {
                echo json_encode(["code" => 204, "message" => "gagal update data"]);
            }
        } else {
            
            $data = [
                'nama' => $nama,
                'jumlah' => $jumlah,
                'tanggal_masuk' => $tanggal,
                'keterangan' => $keterangan,
                'kode_cabang' => $cabang,
                'first_code' => $kode,
                'createdAt' => date('Y-m-d H:i:s')
               
            ];

            // 'code' => $kode.$cabang.date('m-Y'),
    
            $save =  $barangModels->insert($data);
            

            if($save) {
                $last_id = $barangModels->getInsertID();
                define('UPLOAD_DIR', 'qrcode/');
                // “Switch area jakarta pembelian bulan Juni tahun 2021 ke 5” 

                $img = $this->GenerateQr($nama_kode['nama']." area ".$nama_cabang['nama']." bulan ". date('M Y', strtotime($tanggal))." ke ". $last_id);
                $code_save = $kode.$cabang.date('mY', strtotime($tanggal)).$last_id;
                $img = str_replace('data:image/svg+xml;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $file = UPLOAD_DIR . $code_save . '.svg';
                $success = file_put_contents($file, $data);

                $datas = [
                    'code' => $code_save,
                    'qr' => $code_save.".svg",
                ];
                $barangModels->update($last_id, $datas);
                echo json_encode(["code" => 200, "message" => "berhasil menambahkan data"]);
            } else {
                echo json_encode(["code" => 204, "message" => "gagal menambahkan data"]);
            }
        }
    }
    // ======================================================================================================================================
    public function HapusBarang()
    {
        $barangModels = new \App\Models\barangModels();

        $id = $this->request->getPost('id');
        $data = [
            'deletedAt' => date('Y-m-d H:i:s')  
        ];
        $save = $barangModels->update($id, $data);
           if($save) {
            echo json_encode(["code" => 200, "message" => "berhasil hapus data"]);
        } else {
            echo json_encode(["code" => 204, "message" => "gagal hapus data"]);
        }
    }

    // =======================================================================================================================================
    public function GenerateQr($data)
    {
      
       
        $gzip = false;
        
        $options = new QROptions([
            'version'      => 7,
            'outputType'   => QRCode::OUTPUT_MARKUP_SVG,
            'eccLevel'     => QRCode::ECC_L,
            'svgViewBoxSize' => 100,
            'addQuietzone' => true,
            'cssClass'     => 'my-css-class',
            'svgOpacity'   => 1.0,
            'svgDefs'      => '
                <linearGradient id="g2">
                    <stop offset="0%" stop-color="#39F" />
                    <stop offset="100%" stop-color="#F3F" />
                </linearGradient>
                <linearGradient id="g1">
                    <stop offset="0%" stop-color="#F3F" />
                    <stop offset="100%" stop-color="#39F" />
                </linearGradient>
                <style>rect{shape-rendering:crispEdges}</style>',
            'moduleValues' => [
                // finder
                1536 => 'url(#g1)', // dark (true)
                6    => '#fff', // light (false)
                // alignment
                2560 => 'url(#g1)',
                10   => '#fff',
                // timing
                3072 => 'url(#g1)',
                12   => '#fff',
                // format
                3584 => 'url(#g1)',
                14   => '#fff',
                // version
                4096 => 'url(#g1)',
                16   => '#fff',
                // data
                1024 => 'url(#g2)',
                4    => '#fff',
                // darkmodule
                512  => 'url(#g1)',
                // separator
                8    => '#fff',
                // quietzone
                18   => '#fff',
            ],
        ]);
        
        $qrcode = (new QRCode($options))->render($data);
        
        // header('Content-type: image/svg+xml');
        
        // if($gzip === true){
        //     header('Vary: Accept-Encoding');
        //     header('Content-Encoding: gzip');
        //     $qrcode = gzencode($qrcode ,9);
        // }
        return $qrcode;
        
    }

     
}
// HapusDigitAwal