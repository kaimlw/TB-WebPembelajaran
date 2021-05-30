<!DOCTYPE html>
<?php 

$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $pesan = $_POST['message'];
    
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($nama) && !empty($nomor) && !empty($pesan)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'arkthe40@gmail.com';
            $emailSubject = 'kontak dari '.$nama;
            $htmlContent = '<h2> via Form Kontak US</h2>
                <h4>nama</h4><p>'.$nama.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Sub</h4><p>'.$nomor.'</p>
                <h4>Message</h4><p>'.$pesan.'</p>';
            
            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Header tambahan
            $headers .= 'From: '.$nama.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Pesan Anda sudah terkirim dengan sukses !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}

?>