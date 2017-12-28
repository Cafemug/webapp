function render_policy() {
	if($("#webpolicy").is(":hidden")) {
		$(window).scrollTop(0);
		var temp = $("div.layerPop_topBg3");
		var Dheight = $(document).height();
		if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '-'+temp.outerHeight()/2+'px');
		else temp.css('top', '0px');
		if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '-'+temp.outerWidth()/2+'px');
		else temp.css('left', '0px');	

		$("#webpolicy").show();
	} else $("#webpolicy").hide();
}

function render_guide() {
	if($("#webguide").is(":hidden")) {
		$(window).scrollTop(0);
		var temp = $("div.layerPop_topBg3");
		var Dheight = $(document).height();
		if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '-'+temp.outerHeight()/2+'px');
		else temp.css('top', '0px');
		if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '-'+temp.outerWidth()/2+'px');
		else temp.css('left', '0px');	

		$("#webguide").show();
	} else $("#webguide").hide();
}

function render_emailreject() {
	if($("#emailreject").is(":hidden")) {
		$(window).scrollTop(0);
		var temp = $("div.layerPop_topBg");
		var Dheight = $(document).height();
		if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '-'+temp.outerHeight()/2+'px');
		else temp.css('top', '0px');
		if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '-'+temp.outerWidth()/2+'px');
		else temp.css('left', '0px');	

		$("#emailreject").show();
	} else $("#emailreject").hide();
}

// PROTOTYPE
String.prototype.cutStr = function(len) {
	var str = this;
	//if (isNaN(str)) str = '';
	var l = 0;
	for (var i = 0; i < str.length; i++) {
		l += (str.charCodeAt(i) > 128) ? 2 : 1;
		if (l > len) return str.substring(0, i) + "..";
	}
	return str;
}

String.prototype.starStr = function(len) {
	var str = this;
	var vstr =  str.substring(0, str.length-len) + "**";
	return vstr;
}

// 臾몄옄�� 湲몄씠 寃���
String.prototype.isLength = function() {
	var varCk = this;
	var varLen = 0;
	var agr = navigator.userAgent;

	for (i = 0; i < varCk.length; i++) {
		ch = varCk.charAt(i);
		if ((ch == "\n") || ((ch >= "��") && (ch <= "��")) || ((ch >= "��") && (ch <= "��")))
			varLen += 2;
		else
			varLen += 1;
	}
	return (varLen);
}

//�レ옄媛� �꾨땲寃쎌슦 parm 媛� �곸슜
String.prototype.isNumber = function(parm) {
	var str = this;
	var num = "0123456789.";
	var ChkStr = ''
	isNumberFalg = true;
	str = str.toUpperCase();
	for (var i = 0; i < str.length; i++) {
		ChkStr = num.indexOf(str.charAt(i))
		if (-1 == ChkStr) {
			isNumberFalg = false;
			break;
		}
	}
	if (!isNumberFalg || str == '' || str == null || str == undefined || str == 'undefined') {
		if (parm != null) {
			str = parm;
		} else {
			str = '0';
		}
	}
	return str;
}

//�욌뮘 怨듬갚�쒓굅
String.prototype.trim = function() {
	return this.replace(/^\s+|\s+$/g, '');
}

//�⑥뼱�� 泥� 湲��먮� ��臾몄옄  
String.prototype.capitalize = function() { 
    return this.replace(/\b([a-z])/g, function($1){ 
        return $1.toUpperCase(); 
    }) ;
}

String.prototype.CutPrice = function(num) {
	var returnAmount = parseInt(this);
	if (num == 0) {
		reAmount = Math.floor(returnAmount);
	} else {
		var reAmount = returnAmount / num;
		reAmount = Math.floor(reAmount) * num;
	}
	return parseInt(returnAmount);
}

String.prototype.Mid = function(start, len) {
    if (start < 0 || len < 0) return "";

    var iEnd, iLen = this.length;

    if (start + len > iLen) iEnd = iLen;
    else iEnd = start + len;

    return this.substring(start,iEnd);
}

String.prototype.inStr = function(string, str) {
    for(i=0; i<string.length; i++) {
        if(str == string.Mid(i, 1)) return i;
    }
    return -1;
}

function stripTags(text) {
     var objReg = new RegExp();  //  �뺢퇋 �쒗쁽�� 媛앹껜瑜� �앹꽦�쒕떎
     objReg = /[<][^>]*[>]/gi;  
      // <...> �쒓렇瑜� ���뚮Ц�� 援щ텇 �놁씠[/gi �듭뀡](g=global / i=insensitive) 紐⑤몢 李얜뒗��.
      text= text.replace(objReg, "");
      return text;
}

//anchor �쒓렇瑜� �놁븷�� �ㅽ겕由쏀듃 
function stripAnchor(text){
    text = text.replace(/<a(.*?)>/gi,"");  //<a href�� �ы븿�� 紐⑤뱺 �댁슜 �쒓굅 
    text = text.replace(/<(\/?)a>/gi,"");  //</a>�쒓렇 �쒓굅   
    return text;
} 

function htmlspecialchars (string, quote_style, charset, double_encode) {
    // Convert special characters to HTML entities  
    // 
    // version: 1109.2015
    // discuss at: http://phpjs.org/functions/htmlspecialchars
    // +   original by: Mirek Slugen
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   bugfixed by: Nathan
    // +   bugfixed by: Arno
    // +    revised by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +    bugfixed by: Brett Zamir (http://brett-zamir.me)
    // +      input by: Ratheous
    // +      input by: Mailfaker (http://www.weedem.fr/)
    // +      reimplemented by: Brett Zamir (http://brett-zamir.me)
    // +      input by: felix
    // +    bugfixed by: Brett Zamir (http://brett-zamir.me)
    // %        note 1: charset argument not supported
    // *     example 1: htmlspecialchars("<a href='test'>Test</a>", 'ENT_QUOTES');
    // *     returns 1: '&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;'
    // *     example 2: htmlspecialchars("ab\"c'd", ['ENT_NOQUOTES', 'ENT_QUOTES']);
    // *     returns 2: 'ab"c&#039;d'
    // *     example 3: htmlspecialchars("my "&entity;" is still here", null, null, false);
    // *     returns 3: 'my &quot;&entity;&quot; is still here'
    var optTemp = 0,
        i = 0,
        noquotes = false;
    if (typeof quote_style === 'undefined' || quote_style === null) {
        quote_style = 2;
    }
    string = string.toString();
    if (double_encode !== false) { // Put this first to avoid double-encoding
        string = string.replace(/&/g, '&amp;');
    }
    string = string.replace(/</g, '&lt;').replace(/>/g, '&gt;');
 
    var OPTS = {
        'ENT_NOQUOTES': 0,
        'ENT_HTML_QUOTE_SINGLE': 1,
        'ENT_HTML_QUOTE_DOUBLE': 2,
        'ENT_COMPAT': 2,
        'ENT_QUOTES': 3,
        'ENT_IGNORE': 4
    };
    if (quote_style === 0) {
        noquotes = true;
    }
    if (typeof quote_style !== 'number') { // Allow for a single string or an array of string flags
        quote_style = [].concat(quote_style);
        for (i = 0; i < quote_style.length; i++) {
            // Resolve string input to bitwise e.g. 'ENT_IGNORE' becomes 4
            if (OPTS[quote_style[i]] === 0) {
                noquotes = true;
            }
            else if (OPTS[quote_style[i]]) {
                optTemp = optTemp | OPTS[quote_style[i]];
            }
        }
        quote_style = optTemp;
    }
    if (quote_style & OPTS.ENT_HTML_QUOTE_SINGLE) {
        string = string.replace(/'/g, '&#039;');
    }
    if (!noquotes) {
        string = string.replace(/"/g, '&quot;');
    }
 
    return string;
}

function htmlspecialchars_decode (string, quote_style) {
    // Convert special HTML entities back to characters  
    // 
    // version: 1109.2015
    // discuss at: http://phpjs.org/functions/htmlspecialchars_decode
    // +   original by: Mirek Slugen
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   bugfixed by: Mateusz "loonquawl" Zalega
    // +      input by: ReverseSyntax
    // +      input by: Slawomir Kaniecki
    // +      input by: Scott Cariss
    // +      input by: Francois
    // +   bugfixed by: Onno Marsman
    // +    revised by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   bugfixed by: Brett Zamir (http://brett-zamir.me)
    // +      input by: Ratheous
    // +      input by: Mailfaker (http://www.weedem.fr/)
    // +      reimplemented by: Brett Zamir (http://brett-zamir.me)
    // +    bugfixed by: Brett Zamir (http://brett-zamir.me)
    // *     example 1: htmlspecialchars_decode("<p>this -&gt; &quot;</p>", 'ENT_NOQUOTES');
    // *     returns 1: '<p>this -> &quot;</p>'
    // *     example 2: htmlspecialchars_decode("&amp;quot;");
    // *     returns 2: '&quot;'
    var optTemp = 0,
        i = 0,
        noquotes = false;
    if (typeof quote_style === 'undefined') {
        quote_style = 2;
    }
    string = string.toString().replace(/&lt;/g, '<').replace(/&gt;/g, '>');
    var OPTS = {
        'ENT_NOQUOTES': 0,
        'ENT_HTML_QUOTE_SINGLE': 1,
        'ENT_HTML_QUOTE_DOUBLE': 2,
        'ENT_COMPAT': 2,
        'ENT_QUOTES': 3,
        'ENT_IGNORE': 4
    };
    if (quote_style === 0) {
        noquotes = true;
    }
    if (typeof quote_style !== 'number') { // Allow for a single string or an array of string flags
        quote_style = [].concat(quote_style);
        for (i = 0; i < quote_style.length; i++) {
            // Resolve string input to bitwise e.g. 'PATHINFO_EXTENSION' becomes 4
            if (OPTS[quote_style[i]] === 0) {
                noquotes = true;
            } else if (OPTS[quote_style[i]]) {
                optTemp = optTemp | OPTS[quote_style[i]];
            }
        }
        quote_style = optTemp;
    }
    if (quote_style & OPTS.ENT_HTML_QUOTE_SINGLE) {
        string = string.replace(/&#0*39;/g, "'"); // PHP doesn't currently escape if more than one 0, but it should
        // string = string.replace(/&apos;|&#x0*27;/g, "'"); // This would also be useful here, but not a part of PHP
    }
    if (!noquotes) {
        string = string.replace(/&quot;/g, '"');
    }
    // Put this in last place to avoid escape being double-decoded
    string = string.replace(/&amp;/g, '&');
 
    return string;
}