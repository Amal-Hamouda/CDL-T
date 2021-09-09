
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Excel_export extends CI_Controller {
 
 function index()
 {
 
 }  

 function action()
 {  $fileName = 'data-'.time().'.xlsx';
    // load excel library
    $this->load->library('excel');
    $listInfo = $this->db->get('contact')->result();
    $objPHPExcel = new PHPExcel();
    $objPHPExcel->setActiveSheetIndex(0);
    // set Header
    $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'nom');
    $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'prenom');
    $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'id');
    $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'datejour');

    // set Row
    $rowCount = 2;
    foreach ($listInfo as $list) {
        $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->nom);
        $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->prenom);
        $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->id);
        $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->datejour);
          $rowCount++;
    }
    $filename = "tutsmake". date("Y-m-d-H-i-s").".csv";
    header('Content-Type: application/vnd.ms-excel'); 
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0'); 
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
    $objWriter->save('php://output');
 }

/*public function get_excel_report(){
     $result = $this->db->get('users')->result_array();
     $timestamp = time();
     $filename ="Export_excel_" . $timestamp . '.xls';
     header('Content-Type: application/vnd.ms-excel');
     header('Content-Disposition: attachement; filename=\")
}*/
 
 
}