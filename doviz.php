<?php
$baglanti = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

//USD
$usd_deger = $baglanti->Currency[0]->Unit;
$usd_isim = $baglanti->Currency[0]->CurrencyName;
$usd_alis = $baglanti->Currency[0]->BanknoteSelling;
$usd_satis = $baglanti->Currency[0]->BanknoteBuying;

//AUD
$aud_deger = $baglanti->Currency[1]->Unit;
$aud_isim = $baglanti->Currency[1]->CurrencyName;
$aud_alis = $baglanti->Currency[1]->BanknoteSelling;
$aud_satis = $baglanti->Currency[1]->BanknoteBuying;

//DKK
$dkk_deger = $baglanti->Currency[2]->Unit;
$dkk_isim = $baglanti->Currency[2]->CurrencyName;
$dkk_alis = $baglanti->Currency[2]->BanknoteSelling;
$dkk_satis = $baglanti->Currency[2]->BanknoteBuying;

//EUR
$eur_deger = $baglanti->Currency[3]->Unit;
$eur_isim = $baglanti->Currency[3]->CurrencyName;
$eur_alis = $baglanti->Currency[3]->BanknoteSelling;
$eur_satis = $baglanti->Currency[3]->BanknoteBuying;

//GBP
$gbp_deger = $baglanti->Currency[4]->Unit;
$gbp_isim = $baglanti->Currency[4]->CurrencyName;
$gbp_alis = $baglanti->Currency[4]->BanknoteSelling;
$gbp_satis = $baglanti->Currency[4]->BanknoteBuying;

//CHF
$chf_deger = $baglanti->Currency[5]->Unit;
$chf_isim = $baglanti->Currency[5]->CurrencyName;
$chf_alis = $baglanti->Currency[5]->BanknoteSelling;
$chf_satis = $baglanti->Currency[5]->BanknoteBuying;

//SEK
$sek_deger = $baglanti->Currency[6]->Unit;
$sek_isim = $baglanti->Currency[6]->CurrencyName;
$sek_alis = $baglanti->Currency[6]->BanknoteSelling;
$sek_satis = $baglanti->Currency[6]->BanknoteBuying;

//CAD
$cad_deger = $baglanti->Currency[7]->Unit;
$cad_isim = $baglanti->Currency[7]->CurrencyName;
$cad_alis = $baglanti->Currency[7]->BanknoteSelling;
$cad_satis = $baglanti->Currency[7]->BanknoteBuying;

//KWD
$kwd_deger = $baglanti->Currency[8]->Unit;
$kwd_isim = $baglanti->Currency[8]->CurrencyName;
$kwd_alis = $baglanti->Currency[8]->BanknoteSelling;
$kwd_satis = $baglanti->Currency[8]->BanknoteBuying;

//NOK
$nok_deger = $baglanti->Currency[9]->Unit;
$nok_isim = $baglanti->Currency[9]->CurrencyName;
$nok_alis = $baglanti->Currency[9]->BanknoteSelling;
$nok_satis = $baglanti->Currency[9]->BanknoteBuying;

//SAR
$sar_deger = $baglanti->Currency[10]->Unit;
$sar_isim = $baglanti->Currency[10]->CurrencyName;
$sar_alis = $baglanti->Currency[10]->BanknoteSelling;
$sar_satis = $baglanti->Currency[10]->BanknoteBuying;

//JPY
$jpy_deger = $baglanti->Currency[11]->Unit;
$jpy_isim = $baglanti->Currency[11]->CurrencyName;
$jpy_alis = $baglanti->Currency[11]->BanknoteSelling;
$jpy_satis = $baglanti->Currency[11]->BanknoteBuying;
?>