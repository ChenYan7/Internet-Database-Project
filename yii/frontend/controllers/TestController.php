<?php


namespace frontend\controllers;


use Yii;
use yii\web\Controller;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionExport()//输出excel文件
    {

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('Maarten Balliauw')
            ->setLastModifiedBy('Maarten Balliauw')
            ->setTitle('Office 2007 XLSX Test Document')
            ->setSubject('Office 2007 XLSX Test Document')
            ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
            ->setKeywords('office 2007 openxml php')
            ->setCategory('Test result file');

        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B2', 'world!')
            ->setCellValue('C1', 'Hello')
            ->setCellValue('D2', 'world!');

        // Miscellaneous glyphs, UTF-8
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Miscellaneous glyphs')
            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('Simple');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="01simple.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
    }
    public function actionImport(){//导入excel文件
        #$inputFileType = 'Xlsx';
        #$inputFileName = 'D:\xampp\htdocs\yiiPractice\frontend\web\sampleData\example1.xlsx';//这块用了绝对路径，可以根据sampleData所在位置进行替换

        $inputFileType = 'Csv';
        $inputFileName = 'D:\xampp\htdocs\yiiPractice\frontend\web\sampleData\index_info.csv';
        $reader = IOFactory::createReader($inputFileType);//初始化excel阅读器
        $spreadsheet = $reader->load($inputFileName);

        #$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        $sheetData = $spreadsheet->getActiveSheet();

        $rows = $sheetData->getHighestRow();

        // 遍历，并读取单元格内容
        for($i=1;$i<=$rows;$i++) {
            $value = $sheetData->getCell('B'.$i)->getValue();
        }
        var_dump($sheetData);
    }
//    phpspreadsheet样式可以借鉴下面代码
//    public function actionExport2()
//    {
//        //要使用的数据
//        #$g_model = new Gifts;
//        #$gifts = $g_model::find()->asArray()->all();
//        //实例化
//        $objPHPExcel = new \PHPExcel();
//        $objWriter = new \PHPExcel_Writer_Excel5($objPHPExcel);
//        //phpexcel在使用时必须先设置值再进行其他设置
//        //设置标题
//        $objPHPExcel->getActiveSheet()->setCellValue('A1',  '2017年学术礼品会议情况');
//        //设置居中
//        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//        //合并单元格
//        $objPHPExcel->getActiveSheet()->mergeCells('A1:G1');
//        //设置宽度
//        //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
//        //也可以设置为固定
//        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
//
//        //设置表头的值还有颜色
//        $objPHPExcel->getActiveSheet()->setCellValue('A2',  '序号');//这里是设置A2单元格的内容
//        $objPHPExcel->getActiveSheet()->getStyle('A2')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('#ADDE79');
//        $objPHPExcel->getActiveSheet()->setCellValue('B2',  '名称');
//        $objPHPExcel->getActiveSheet()->getStyle('B2')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('#ADDE79');
//        $objPHPExcel->getActiveSheet()->setCellValue('C2',  '单价（元）');
//        $objPHPExcel->getActiveSheet()->getStyle('C2')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('#ADDE79');
//        $objPHPExcel->getActiveSheet()->setCellValue('D2',  '库存');
//        $objPHPExcel->getActiveSheet()->getStyle('D2')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('#ADDE79');
//
//        //动态生成列，从f开始，f对应的ascii吗为69
//        $r_model = new Records;
//        $records = $r_model::find()->asArray()->all();
//        $ascii=69;
//        foreach ($records as $key => $value) {
//            $cell=chr($ascii).'2';
//            $objPHPExcel->getActiveSheet()->setCellValue($cell,  $value['name']);
//            $objPHPExcel->getActiveSheet()->getStyle($cell)->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('#ADDE79');
//            $data[chr($ascii)]=json_decode($value['used'],true);
//            $last_count[chr($ascii)]['price']=$value['price'];
//            $last_count[chr($ascii)]['stock']=$value['num'];
//            $ascii+=1;
//        }
//
//        //在最后一列加上库存
//        $objPHPExcel->getActiveSheet()->setCellValue(chr($ascii).'2',  '');
//        $objPHPExcel->getActiveSheet()->getStyle(chr($ascii).'2')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('#ADDE79');
//        $objPHPExcel->getActiveSheet()->setCellValue(chr($ascii+1).'2',  '库存');
//        $objPHPExcel->getActiveSheet()->getStyle(chr($ascii+1).'2')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('#ADDE79');
//        $last['price']='';
//        $last['stock']='';
//
//        //遍历数据
//        foreach ($gifts as $key => $value) {
//            $i=$key+3;
//            $temp_num='0';
//            $objPHPExcel->getActiveSheet()->setCellValue('A'.$i,  $key+1);
//            $objPHPExcel->getActiveSheet()->setCellValue('B'.$i,  $value['name']);
//            $objPHPExcel->getActiveSheet()->setCellValue('C'.$i,  $value['price']);
//            $objPHPExcel->getActiveSheet()->setCellValue('D'.$i,  $value['stock']);
//            //处理used字段中的记录
//            foreach ($data as $k => $v) {
//                $objPHPExcel->getActiveSheet()->setCellValue($k.$i,  isset($v[$value['id']])?'-'.$v[$value['id']]:0);
//                if(isset($v[$value['id']])){
//                    $temp_num+=$v[$value['id']];
//                }
//            }
//            //计算单行的库存
//            $objPHPExcel->getActiveSheet()->setCellValue(chr($ascii+1).$i,  $value['stock']-$temp_num);
//            $last['price']+=$value['stock']*$value['price'];
//            $last['stock']+=$value['stock'];
//        }
//
//
//        //合并单元格,最后两行的统计
//        $temp_l=$i+3;
//        $temp_l2=$i+4;
//        $objPHPExcel->getActiveSheet()->setCellValue('A'.$temp_l,  '合计');
//        $objPHPExcel->getActiveSheet()->setCellValue('B'.$temp_l,  '金额');
//        $objPHPExcel->getActiveSheet()->setCellValue('C'.$temp_l,  $last['price']);
//        $objPHPExcel->getActiveSheet()->setCellValue('B'.$temp_l2,  '数量');
//        $objPHPExcel->getActiveSheet()->setCellValue('D'.$temp_l2,  $last['stock']);
//        $str='A'.($temp_l).':A'.($temp_l2);
//        $objPHPExcel->getActiveSheet()->mergeCells($str);
//
//
//
//        //计算单列会议的消耗
//        $allprice='';
//        $allstock='';
//        foreach ($last_count as $key => $value) {
//            $objPHPExcel->getActiveSheet()->setCellValue($key.$temp_l, '-'.$value['price']);
//            $objPHPExcel->getActiveSheet()->setCellValue($key.$temp_l2, '-'.$value['stock']);
//            $allprice += $value['price'];
//            $allstock += $value['stock'];
//        }
//
//
//        //计算最后一列的统计
//        $objPHPExcel->getActiveSheet()->setCellValue(chr($ascii+1).$temp_l,  $allprice);
//        $objPHPExcel->getActiveSheet()->setCellValue(chr($ascii+1).$temp_l2,   $allstock);
//
//        //下载这个表格，在浏览器输出
//        $file_name = '院外预算会议评估';
//        header("Pragma: public");
//        header("Expires: 0");
//        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
//        header("Content-Type:application/force-download");
//        header("Content-Type:application/vnd.ms-execl");
//        header("Content-Type:application/octet-stream");
//        header("Content-Type:application/download");;
//        header('Content-Disposition:attachment;filename='.$file_name.'.xls');
//        header("Content-Transfer-Encoding:binary");
//        $objWriter->save('php://output');
//    }
//    public function actionExport()
//    {
//        // Create new Spreadsheet object
//        $spreadsheet = new Spreadsheet();
//
//        // Set document properties
//        $spreadsheet->getProperties()->setCreator('Maarten Balliauw')
//            ->setLastModifiedBy('Maarten Balliauw')
//            ->setTitle('Office 2007 XLSX Test Document')
//            ->setSubject('Office 2007 XLSX Test Document')
//            ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
//            ->setKeywords('office 2007 openxml php')
//            ->setCategory('Test result file');
//
//        // Add some data
//        $spreadsheet->setActiveSheetIndex(0)
//            ->setCellValue('A1', 'Hello')
//            ->setCellValue('B2', 'world!')
//            ->setCellValue('C1', 'Hello')
//            ->setCellValue('D2', 'world!');
//
//        // Miscellaneous glyphs, UTF-8
//        $spreadsheet->setActiveSheetIndex(0)
//            ->setCellValue('A4', 'Miscellaneous glyphs')
//            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');
//
//        // Rename worksheet
//        $spreadsheet->getActiveSheet()->setTitle('Simple');
//
//        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
//        $spreadsheet->setActiveSheetIndex(0);
//
//        // Redirect output to a client’s web browser (Xlsx)
//        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//        header('Content-Disposition: attachment;filename="01simple.xlsx"');
//        header('Cache-Control: max-age=0');
//        // If you're serving to IE 9, then the following may be needed
//        header('Cache-Control: max-age=1');
//
//        // If you're serving to IE over SSL, then the following may be needed
//        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
//        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
//        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
//        header('Pragma: public'); // HTTP/1.0
//
//        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
//        $writer->save('php://output');
//        exit;
//    }
}
