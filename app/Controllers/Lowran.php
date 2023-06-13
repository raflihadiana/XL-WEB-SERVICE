<?php

namespace App\Controllers;

use App\Models\LowranModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Lowran extends BaseController
{
    protected $lowranModel;
    public function __construct()
    {
        $this->lowranModel = new LowranModel();
    }
    public function lowran()
    {
        $lowran = $this->lowranModel->findAll();

        $data = [
            'title' => 'Data LowRAN',
            'lowran' => $lowran
        ];
        return view('/Lowran/IndexView', $data);
    }

    public function export()
    {
        $lowran = $this->lowranModel->findAll();

        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('A1', 'No.');
        $activeWorksheet->setCellValue('B1', 'Tower ID NE');
        $activeWorksheet->setCellValue('C1', 'Site Name');
        $activeWorksheet->setCellValue('D1', 'Long');
        $activeWorksheet->setCellValue('E1', 'Lat');
        $activeWorksheet->setCellValue('F1', 'Priority');
        $activeWorksheet->setCellValue('G1', 'Tower ID FE');
        $activeWorksheet->setCellValue('H1', 'Site Name');
        $activeWorksheet->setCellValue('I1', 'Long');
        $activeWorksheet->setCellValue('J1', 'Lat');
        $activeWorksheet->setCellValue('K1', 'Priority');
        $activeWorksheet->setCellValue('L1', 'BA Desain');
        $activeWorksheet->setCellValue('M1', 'BA Design Status');
        $activeWorksheet->setCellValue('N1', 'PAG Link');
        $activeWorksheet->setCellValue('O1', 'Link Name');
        $activeWorksheet->setCellValue('P1', 'City Design');
        $activeWorksheet->setCellValue('Q1', 'City Dominan');
        $activeWorksheet->setCellValue('R1', 'Status Design');
        $activeWorksheet->setCellValue('S1', 'Span Seq');
        $activeWorksheet->setCellValue('T1', 'Plan Ring');
        $activeWorksheet->setCellValue('U1', 'Type Design');
        $activeWorksheet->setCellValue('V1', 'FLP');
        $activeWorksheet->setCellValue('W1', 'Plan Distance (Km)');
        $activeWorksheet->setCellValue('X1', 'X-C');
        $activeWorksheet->setCellValue('Y1', 'Status Design_xc');
        $activeWorksheet->setCellValue('Z1', 'Syncron Own');
        
        $column = 2;

        foreach ($lowran as $key => $value) {
            $activeWorksheet->setCellValue('A'.$column, ($column-1));
            $activeWorksheet->setCellValue('B'.$column, $value->tower_id_ne);
            $activeWorksheet->setCellValue('C'.$column, $value->site_name);
            $activeWorksheet->setCellValue('D'.$column, $value->long);
            $activeWorksheet->setCellValue('E'.$column, $value->lat);
            $activeWorksheet->setCellValue('F'.$column, $value->priority);
            $activeWorksheet->setCellValue('G'.$column, $value->tower_id_fe);
            $activeWorksheet->setCellValue('H'.$column, $value->site_name_nd);
            $activeWorksheet->setCellValue('I'.$column, $value->long_nd);
            $activeWorksheet->setCellValue('J'.$column, $value->lat_nd);
            $activeWorksheet->setCellValue('K'.$column, $value->priority_nd);
            $activeWorksheet->setCellValue('L'.$column, $value->ba_desain);
            $activeWorksheet->setCellValue('M'.$column, $value->ba_design_status);
            $activeWorksheet->setCellValue('N'.$column, $value->pag_link);
            $activeWorksheet->setCellValue('O'.$column, $value->link_name);
            $activeWorksheet->setCellValue('P'.$column, $value->city_design);
            $activeWorksheet->setCellValue('Q'.$column, $value->city_dominan);
            $activeWorksheet->setCellValue('R'.$column, $value->status_design);
            $activeWorksheet->setCellValue('S'.$column, $value->span_seq);
            $activeWorksheet->setCellValue('T'.$column, $value->plan_ring);
            $activeWorksheet->setCellValue('U'.$column, $value->type_design);
            $activeWorksheet->setCellValue('V'.$column, $value->flp);
            $activeWorksheet->setCellValue('W'.$column, $value->plan_distance_km);
            $activeWorksheet->setCellValue('X'.$column, $value->x_c);
            $activeWorksheet->setCellValue('Y'.$column, $value->status_design_xc);
            $activeWorksheet->setCellValue('Z'.$column, $value->syncron_own);
            $column++;
        }

        $activeWorksheet->getStyle('A1:Z1')->getFont()->setBold(true);
        $activeWorksheet->getStyle('A1:Z1')->getFill()
            ->setFillType(\Phpoffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('FFFFFF00');

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];

        $activeWorksheet->getStyle('A1:Z1'.($column-1))->applyFromArray($styleArray);
         
        for ($col = 'A'; $col <= 'Z'; $col++) {
            $activeWorksheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header ('Content-Disposition: attachment;filename=lowran.xlsx');
        header ('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit();
    }

    public function import()
    {
        $file = $this->request->getFile('file_excel');
        $extension = $file->getClientExtension();
        if ($extension == 'xlsx' || $extension == 'xls') {
            if ($extension == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($file);
            $lowran = $spreadsheet->getActiveSheet();
            foreach ($lowran as $key => $value) {
                if ($key == '@') {
                    continue;
                }
                $data = [
                    'tower_id_ne' => $value[1],
                    'site_name' => $value[2],
                    'long' => $value[3],
                    'lat' => $value[4],
                    'priority' => $value[5],
                    'tower_id_fe' => $value[6],
                    'site_name_nd' => $value[7],
                    'long_nd' => $value[8],
                    'lat_nd' => $value[9],
                    'priority_nd' => $value[10],
                    'ba_desain' => $value[11],
                    'ba_design_status' => $value[12],
                    'pag_link' => $value[13],
                    'link_name' => $value[14],
                    'city_design' => $value[15],
                    'city_dominan' => $value[16],
                    'status_design' => $value[17],
                    'span_seq' => $value[18],
                    'plan_ring' => $value[19],
                    'type_design' => $value[20],
                    'flp' => $value[21],
                    'plan_distance_km' => $value[22],
                    'x_c' => $value[23],
                    'status_design_xc' => $value[24],
                    'syncron_own' => $value[25],
                    'id' => 0
                ];                
                $this->$lowran->insert($data);
            }
            return redirect()->back()->with('success', 'Data Excel Berhasil Diimport');
        } else {
            return redirect()->back()->with('error', 'Format File Tidak Sesuai');
        }
        
    }
}

