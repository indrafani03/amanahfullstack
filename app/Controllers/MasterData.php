<?php

namespace App\Controllers;

class MasterData extends BaseController
{
    
    public function formatBarang()
    {
        $codeAwalModels = new \App\Models\codeAwalModels();
        $codeBranchModels = new \App\Models\codeBranchModels();

        $list = $codeAwalModels->where('deletedAt')->findAll();
        $cabang = $codeBranchModels->where('deletedAt')->findAll();
        $data['code'] = $list;
        $data['cabang'] = $cabang;
        return view('pages/formatbarang', $data);
    }

    public function SaveDigitAwal()
    {
        $codeAwalModels = new \App\Models\codeAwalModels();

        $nama =   $this->request->getPost('nama');
        $code = $this->request->getPost('code');
        $id = $this->request->getPost('id');

        if($id != "") {
            $data = [
                'nama' => $nama,
                'code' => $code,
                'updatedAt' => date('Y-m-d H:i:s')  
            ];
            
           $save = $codeAwalModels->update($id, $data);
           if($save) {
                echo json_encode(["code" => 200, "message" => "berhasil update data"]);
            } else {
                echo json_encode(["code" => 204, "message" => "gagal update data"]);
            }
        } else {
            
            $data = [
                'nama' => $nama,
                'code' => $code,
                'createdAt' => date('Y-m-d H:i:s')
               
            ];
    
            $save =  $codeAwalModels->insert($data);
            if($save) {
                echo json_encode(["code" => 200, "message" => "berhasil menambahkan data"]);
            } else {
                echo json_encode(["code" => 204, "message" => "gagal menambahkan data"]);
            }
        }
    }

     // =================================================================================================================================================
     public function HapusDigitAwal() {
        $codeAwalModels = new \App\Models\codeAwalModels();
        $id = $this->request->getPost('id');
        $data = [
            'deletedAt' => date('Y-m-d H:i:s')  
        ];
        $save = $codeAwalModels->update($id, $data);
           if($save) {
            echo json_encode(["code" => 200, "message" => "berhasil hapus data"]);
        } else {
            echo json_encode(["code" => 204, "message" => "gagal hapus data"]);
        }
    }

    // ===================================================================================================================================================
    public function SaveKodeCabang()
    {
        $codeBranchModels = new \App\Models\codeBranchModels();

        $nama =   $this->request->getPost('nama');
        $code = $this->request->getPost('code');
        $id = $this->request->getPost('id');

        if($id != "") {
            $data = [
                'nama' => $nama,
                'code' => $code,
                'updatedAt' => date('Y-m-d H:i:s')  
            ];
            
           $save = $codeBranchModels->update($id, $data);
           if($save) {
                echo json_encode(["code" => 200, "message" => "berhasil update data"]);
            } else {
                echo json_encode(["code" => 204, "message" => "gagal update data"]);
            }
        } else {
            
            $data = [
                'nama' => $nama,
                'code' => $code,
                'createdAt' => date('Y-m-d H:i:s')
               
            ];
    
            $save =  $codeBranchModels->insert($data);
            if($save) {
                echo json_encode(["code" => 200, "message" => "berhasil menambahkan data"]);
            } else {
                echo json_encode(["code" => 204, "message" => "gagal menambahkan data"]);
            }
        }
    }

    // ==========================================================================================================================================================
    public function HapusKodeCabang()
    {
        $codeBranchModels = new \App\Models\codeBranchModels();
        $id = $this->request->getPost('id');
        $data = [
            'deletedAt' => date('Y-m-d H:i:s')  
        ];
        $save = $codeBranchModels->update($id, $data);
           if($save) {
            echo json_encode(["code" => 200, "message" => "berhasil hapus data"]);
        } else {
            echo json_encode(["code" => 204, "message" => "gagal hapus data"]);
        }
    }

}
// HapusDigitAwal