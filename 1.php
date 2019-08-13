<?php
/*
      Cảm ơn đặc biệt đến : 
             https://github.com/tomiashari/fb-autoreaction
             https://github.com/dfmcvn/getFBtoken
             https://github.com/tro1d/bot-reaction-gettoken
*/
//////UPLOADED BY K90 HACK GAME MOBILE//////
function code($user1, $pass1, $r_male1,$r_female1,$max_status1){
$buat = '<?php
$user = "'.$user1.'";
$pass = "'.$pass1.'";
$r_male = "'.$r_male1.'";
$r_female = "'.$r_female1.'";
$max_status = "'.$max_status1.'";
?>';
$file = fopen('lib/config.php','w');
fputs($file,$buat);
fclose($file);
echo "Sukses Disetting";
}
echo "\033[1;35m  ___ ___ _____   _    ___   ___ ___ _  _ \n";
echo "ĐĂNG NHẬP TÀI KHOẢN FACEBOOK/n";


echo "\033[1mBẠN CÓ CHẮC MUỐN TIẾP TỤC?\n";
echo "Gõ yes để tiếp tục: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
     echo "THOÁT!\n"; 
    exit;
} 
echo "\n";
echo "\033[1m======BOT THẢ CẢM XÚC FACEBOOK======\n";
print "|       LOẠI CẢM XÚC        |\n";
print "| 1 LÀ THÍCH     3 LÀ WOW    |\n";
print "| 2 LÀ YÊU      4 LÀ HAHA   |\n";
print "| 7 for BUỒN      8 LÀ PHẪN NỘ   |\n";
print "--------------★★★★★★-------------\n";
print "\n";
print "\n";
echo "\033[0m \n"; 
echo "Tên người dùng/Email : ";
$user1 = trim(fgets(STDIN));
echo "Mật Khẩu : ";
$pass1 = trim(fgets(STDIN));
echo "Cứ ghi là 1 : ";
$r_male1 = trim(fgets(STDIN));
echo "Cứ ghi là 2: ";
$r_female1 = trim(fgets(STDIN));
echo "Thả cảm xúc tối đa(ví dụ:100) : ";
$max_status1 = trim(fgets(STDIN));
$execute = code($user1, $pass1, $r_male1,$r_female1,$max_status1);
print $execute;
?>
