<?php
class URLS {
	public static function absolute($path = '/'){
		return  INDEX . $path;
	}
}

//user - is_login
function is_login_on($controller) {
	//session
	$controller->load->library ( 'session' );
	$auth = $controller->session->userdata ( 'user' );

	$url = $_SERVER ['REQUEST_URI'];

	if (empty ( $auth )) {
		$controller->session->set_userdata ( array ('from' => $url ) );
		redirect ( $controller->config->item ( 'login_url') );
	}

	return $auth;
}

//utf8
function is_utf8($get_string) {
	if (preg_match ( "/^([" . chr ( 228 ) . "-" . chr ( 233 ) . "]{1}[" . chr ( 128 ) . "-" . chr ( 191 ) . "]{1}[" . chr ( 128 ) . "-" . chr ( 191 ) . "]{1}){1}/", $get_string ) == true || preg_match ( "/([" . chr ( 228 ) . "-" . chr ( 233 ) . "]{1}[" . chr ( 128 ) . "-" . chr ( 191 ) . "]{1}[" . chr ( 128 ) . "-" . chr ( 191 ) . "]{1}){1}$/", $get_string ) == true || preg_match ( "/([" . chr ( 228 ) . "-" . chr ( 233 ) . "]{1}[" . chr ( 128 ) . "-" . chr ( 191 ) . "]{1}[" . chr ( 128 ) . "-" . chr ( 191 ) . "]{1}){2,}/", $get_string ) == true) {
		return $get_string;
	} else {
		$get_string = iconv ( "GBK", "UTF-8//IGNORE", $get_string );
		return $get_string;
	}
}

//get_domain  -  back .com
function get_domain($url) {
	$pattern = '/[\w-]+\.(com|net|org|gov|cc|biz|info|cn|ru|me|info)(\.(cn|hk))*/';
	preg_match ( $pattern, $url, $matches );
	if (count ( $matches ) > 0) {
		return $matches [0];
	} else {
		$rs = parse_url ( $url );
		$main_url = $rs ["host"];
		if (! strcmp ( long2ip ( sprintf ( "%u", ip2long ( $main_url ) ) ), $main_url )) {
			return $main_url;
		} else {
			$arr = explode ( ".", $main_url );
			$count = count ( $arr );
			$endArr = array ("com", "net", "org", "3322" ); //com.cn  net.cn 等情况
			if (in_array ( $arr [$count - 2], $endArr )) {
				$domain = $arr [$count - 3] . "." . $arr [$count - 2] . "." . $arr [$count - 1];
			} else {
				$domain = $arr [$count - 2] . "." . $arr [$count - 1];
			}
			return $domain;
		}
	}
}
function get_domain_simple ($url) {
	preg_match('/[\w]*\.[\w][\w-]*\.(?:com\.cn|com|cn|co|net|org|gov|cc|biz|info)(\/|$)/isU', $url, $domain);
	return  rtrim($domain[0], '/');
}

//标签云颜色
function getTagStyle($minFontSize=12,$maxFontSize=25){
	return 'font-size:'.($minFontSize+lcg_value()*(abs($maxFontSize-$minFontSize))).'px;color:#'.dechex(rand(0,255)).dechex(rand(0,196)).dechex(rand(0,255));
}




