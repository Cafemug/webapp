Master = {
  ID: "#",
	// 湲�   �� : ID �대떦�섎뒗 Form 媛믪쓣 由ы꽩�쒕떎.
	// 由ы꽩媛� : ID �대떦�섎뒗 Form 媛믪쓣 由ы꽩�쒕떎.

	$_: function(id) {
		return $(Master.ID + id);
	},

	// 湲�   �� : ID �대떦�섎뒗 Value 媛믪쓣 媛�吏�怨좎삩��.
	// 由ы꽩媛� : ID �대떦�섎뒗 Value 媛믪쓣 由ы꽩�쒕떎.
	$F: function(id) {
		return $(Master.ID + id).val();
	},

    // �⑸룄 : �ㅻ뒛�좎쭨
    DateToday: function() {
        var strDate = new Date();
        var GetYear = strDate.getFullYear();
        var GetMonth = strDate.getMonth() + 1;
        var GetDay = strDate.getDate();
        if (GetMonth <= 9) GetMonth = '0' + GetMonth;
        if (GetDay <= 9) GetDay = '0' + GetDay;
        var now = GetYear + '' + GetMonth + '' + GetDay;

        return now;
    },

	 // �⑸룄 : new icon 泥섎━
	 GetNewIcon : function(dateVal) {
		var newIcon = "";
		var strDate = new Date();
        var GetYear = strDate.getFullYear();
        var GetMonth = strDate.getMonth() + 1;
        var GetDay = strDate.getDate();
        if (GetMonth <= 9) GetMonth = '0' + GetMonth;
        if (GetDay <= 9) GetDay = '0' + GetDay;
        var now = GetYear + '' + GetMonth + '' + GetDay;

		if(now == dateVal.substring(8, 0)) return true;
		else return false;
	 },

	// �� �� : �좎옄瑜� 8�먮━ �뺤닔濡�(20090703)
	DateNumber: function(strDate) {
		var arrDate = strDate.split('-');
		var seFullYear = eval(arrDate[0]);
		var seMonth = eval(arrDate[1]) - 1;
		var seDay = eval(arrDate[2]);
		var strDate = new Date(seFullYear, seMonth, seDay);
		var GetYear = strDate.getFullYear();
		var GetMonth = strDate.getMonth() + 1;
		var GetDay = strDate.getDate();
		if (GetMonth <= 9) {
			GetMonth = '0' + GetMonth;
		}
		if (GetDay <= 9) {
			GetDay = '0' + GetDay
		}
		return GetYear + '' + GetMonth + '' + GetDay;
	},

	//�� �� : �좎옄瑜� �좎쭨�뺥깭濡� 蹂���
	DateFormat: function(dataObject) {
		var str = null;
		var month = dataObject.getMonth();
		var day = dataObject.getDate();
		if (month < 10) {
			month = '0' + dataObject;
		}
		if (day < 10) {
			day = '0' + day;
		}
		str = dataObject.getYear() + '.' + month + '.' + day;
		return str;
	},

	//�� �� : 8�먮━ �뺤닔瑜� �좎쭨濡�(20090703)
	NumberDate: function(strDate) {
		var ToDay = strDate.toString();
		var GetYear = ToDay.substr(0, 4);
		var GetMonth = ToDay.substr(4, 2);
		var GetDay = ToDay.substr(6, 2);
		ToDay = GetYear + '-' + GetMonth + '-' + GetDay;
		return ToDay;
	},

	NumberDateShort: function(strDate) {
		var ToDay = strDate.toString();
		var GetYear = ToDay.substr(2, 2);
		var GetMonth = ToDay.substr(4, 2);
		var GetDay = ToDay.substr(6, 2);
		ToDay = GetYear + '-' + GetMonth + '-' + GetDay;
		return ToDay;
	},

	NumberFullDate: function(strDate) {
		var ToDay = strDate.toString();
		var GetYear = ToDay.substr(0, 4);
		var GetMonth = ToDay.substr(4, 2);
		var GetDay = ToDay.substr(6, 2);
		var GetHour = ToDay.substr(8, 2);
		var GetMinute = ToDay.substr(10, 2);
		var GetSecond = ToDay.substr(12, 2);
		ToDay = GetYear + '-' + GetMonth + '-' + GetDay + ' ' + GetHour + ':' + GetMinute + ':' + GetSecond;
		return ToDay;
	},

	// 湲�   �� : Num 媛� �レ옄 �몄옄由� 留덈떎 肄ㅻ쭏瑜� 李띿뼱 �섍꺼以���.
	// 由ы꽩媛� : Num 媛믪뿉 �몄옄由� 留덈떎 肄ㅻ쭏瑜� 李띿�媛�
	CommaStr: function(Num) {
		var reg = /(^[+-]?\d+)(\d{3})/;
		Num += "";
		while (reg.test(Num))
			Num = Num.replace(reg, '$1' + ',' + '$2');
		return Num;
	},

    // 湲�  �� :  �ㅻ낫�� �낅젰媛믪쓣 �レ옄留� �낅젰�좎닔 �덇쾶 �쒕떎.
	keyPress: function() {
		if (event != null) {
			var key = event.keyCode;
			if (!(key == 8 || key == 9 || key == 13 || key == 46 || key == 144 ||
              (key >= 48 && key <= 57) || key == 110 || key == 190)) {
				event.returnValue = false;
			}
		}
	},

    // 湲�  �� : �レ옄�� �낅젰�� �낅젰嫄곕�(keydown)
	isNumber: function() {
		var e1 = event.srcElement;
		var num = "0123456789";
		var ChkStr = ''
		event.returnValue = true;
		e1.value = e1.value.toUpperCase();
		for (var i = 0; i < e1.value.length; i++) {
			ChkStr = num.indexOf(e1.value.charAt(i))
			if (-1 == ChkStr) {
				event.returnValue = false;
				e1.value = '';
				e1.focus();
				break;
			}
		}
	},

	// 湲�  �� : 荑좏궎媛믪꽕��
	setCookie: function(name, value, expiredays, close) {
		var todayDate = new Date();
		var expiredate;
		
		if(expiredays) {
			todayDate.setDate(todayDate.getDate() + expiredays);
			expiredate = todayDate.toGMTString();
		} else expiredate = "";

		document.cookie = name + "=" + escape(value) + "; path=/; expires=" + expiredate;

		switch(close) {
			case "Y": window.close(); break;
			case "C": $("#"+name).fadeOut(); break;
			default: break;
		}
	},
	
	// 湲�  �� : 荑좏궎媛믨��몄삤湲�
	getCookie: function(uName) {
		var flag = document.cookie.indexOf(uName + '=');
		if (flag != -1) {
			flag += uName.length + 1
			end = document.cookie.indexOf(';', flag)
			if (end == -1) end = document.cookie.length
			var CookieValue = unescape(document.cookie.substring(flag, end));
			if (CookieValue == undefined || CookieValue == 'undefined') {
				CookieValue = '';
			}
		} else {
			CookieValue = '';
		}
		return CookieValue;
	},

	getSubCookie: function(uName, sName) {
		var CookieStr = Master.getCookie(uName);
		var flag = CookieStr.indexOf(sName + '=');
		if (flag != -1) {
			flag += sName.length + 1
			end = CookieStr.indexOf('&', flag)
			if (end == -1) end = CookieStr.length
			var CookieValue = unescape(CookieStr.substring(flag, end));
			if (CookieValue == undefined || CookieValue == 'undefined') {
				CookieValue = '';
			}
		} else {
			CookieValue = '';
		}
		return CookieValue;
	},

	// 湲�  �� : get �뚮씪誘명꽣 異붿텧  
	GET_params: null,
	parseQuery: function() {
		var _params = [];
		var query = location.search;
		if (query) {
			var paramStrs = query.substring(1).split("&");
			for (var i = 0; i < paramStrs.length; i++) {
				var position = paramStrs[i].indexOf("=");
				if (position >= 0) {
					_params[paramStrs[i].substring(0, position)] = paramStrs[i].substring(position + 1);
				}
			}
		}
		if (_params == null) {
			_params = '';
		}

		return _params;
	},

	// 湲�  �� : get �뚮씪誘명꽣 媛��몄삤湲�
	// ��  �� : key - �뚮씪誘명꽣 �대쫫    
	getParameter: function(key) {
		Master.GET_params || (Master.GET_params = Master.parseQuery());
		if (Master.GET_params[key] == undefined) {
			Master.GET_params[key] = '';
		}
		return Master.GET_params[key];
	}, 
	
	// 泥댄겕�щ��뺤씤
	CheckRadio: function(nm) {
		var check = $("[name=" + nm + "]").toArray();
		var flag = null;
		for (var i = 0; i < check.length; i++) {
			if (check[i].checked) {
				flag = i;
				break
			}
		}
		return flag;
	},
	
	StepFadeTo: function(stime) {
		var msec = 0;
		$("body").find("[name='object']").each(function(){
			$(this).fadeTo(0, 0.01).delay(msec).fadeTo(600, 1);
			msec += stime;
		});
	}
}