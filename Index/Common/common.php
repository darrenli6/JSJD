<?php

/*check file validate  for example doc/docx
 return @return [Array]
 */
function checkdocFile($_File){
    $result =array();
    $type=$_File['type'];
    
    switch ($type){
         
        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
            $okType=true;
            break;  
        case 'application/msword':
            $okType=true;
            break;      

    }

    if($okType){
        $error=$_File['error'];

        if ($error==1){

            $result = array('status'=>0,'imagepath'=>null,'msg'=>'超过了文件大小，在php.ini文件中设置');

        }elseif ($error==2){
             
            $result  = array('status'=>0,'imagepath'=>null,'msg'=>'超过了文件的大小MAX_FILE_SIZE选项指定的值');

        }elseif ($error==3){
             
            $result = array('status'=>0,'imagepath'=>null,'msg'=>'文件只有部分被上传');
             
        }elseif ($error==4){

            $result = array('status'=>0,'imagepath'=>null,'msg'=>'没有文件被上传');

        }else if($error==5){
             
            $result = array('status'=>0,'imagepath'=>null,'msg'=>'上传文件大小为0');
             
        }

        return $result;

    }else{

        $result= array('status'=>0,'imagepath'=>null,'msg'=>'请上传doc/docx格式的文件！');
        return $result;
    }

}

