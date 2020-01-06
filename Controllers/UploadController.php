<?php

require_once 'AppController.php';

class UploadController extends AppController {

    public function upload()
    {   
		if ($this->isPost()) {
			if(isset($_FILES['file'])){
				$file = $_FILES['file'];
				$file_name = $file['name'];
				$file_tmp = $file['tmp_name'];
				$file_size = $file['size'];
				$file_error = $file['error'];
				unset($_FILES);
				
				$file_ext = explode('.', $file_name);
				$file_ext = strtolower(end($file_ext));
				$allowed = array('jpg', 'jpeg', 'png');
				if(in_array($file_ext, $allowed)){
					if($file_error === 0){
						if($file_size <= 1048576){
							
							$file_name_new = uniqid('', true).'.'.$file_ext;
							$file_destination = 'Uploads/'.$file_name_new;
							
							if(move_uploaded_file($file_tmp, $file_destination)){
								$this->render('upload', ['messages' => ['Wkrótce administrator rozważy wysłane zdjęcie']]);
								return;
							}
							$this->render('upload', ['messages' => ['error, proszę spróbować później']]);
							return;
						}
						$this->render('upload', ['messages' => ['Zbyt duży rozmiar pliku']]);
						return;
					}
					$this->render('upload', ['messages' => ['error, proszę spróbować później']]);
					return;
				}
				
				$this->render('upload', ['messages' => ['Nieprawidłowy format pliku']]);
				return;
			}
		}
		$this->render('upload');
		return;
    }
}