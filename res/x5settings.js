(function ( $, x5engine ) {
	var x = x5engine,
		s = x.settings,
		p = s.currentPath,
		b = x.boot;

	s.siteId = '705679FC02608F17AAB2F64570C61BE7';
	b.push(function () {
		x.setupDateTime();
		x.imAccess.showLogout();
		x.utils.autoHeight();
		x.cart.ui.updateWidget();
		x.imGrid.init();
	});
	s.menu = {
		verticalScroll: false,
		orientation: 'horizontal'
	};
	b.push(function () {
		x.menu({
			target: '#imMnMn',
			showCurrent: false,
			desktopVerticalScroll: false,
			mobileVerticalScroll: true,
			showLogoOnScroll: false,
			orientation: 'horizontal',
			menuHeight: 30,
			menuWidth: 140,
			submenuHeight: 34,
			submenuWidth: 170,
			opacity: 0.8,
			type: 'singleColumn',
			alignment: 'left',
			effect: 'fade'
		});
	});
	b.push(function () { x.utils.imPreloadImages([p + 'menu/hor_main.png',p + 'menu/hor_main_h.png',p + 'menu/hor_main_c.png', p + 'res/imLoad.gif', p + 'res/imClose.png']); });

	// ShowBox
	$.extend(s.imShowBox, {
		'effect' : 'fade',
		'shadow' : '',
		'background' : '#000000',
		'borderWidth' : {
			'top': 1,
			'right': 1,
			'bottom': 1,
			'left': 1
		},
		buttonRight: {
			url: p + 'res/b14_r.png',
			position: {
				x: -28,
				y: 0
			}
		},
		buttonLeft: {
			url: p + 'res/b14_l.png',
			position: {
				x: -28,
				y: 0
			}
		},
		'borderRadius' : '0px 0px 0px 0px',
		'borderColor' : '#000000 #000000 #000000 #000000',
		'textColor' : '#FFFFFF',
		'fontFamily' : 'Tahoma',
		'fontStyle' : 'normal',
		'fontWeight' : 'bold',
		'fontSize' : '9pt',
		'textAlignment' : 'center',
		'boxColor' : '#808080',
		'opacity' : 0.7,
		'radialBg' : true // Works only in Mozilla Firefox and Google Chrome
	});

	// PopUp
	$.extend(s.imPopUp, {
		'effect' : 'fade',
		'width' : 500,
		'shadow' : '',
		'background' : '#000000',
		'borderRadius' : 10,
		'textColor' : '#FFFFFF',
		'boxColor' : '#808080',
		'opacity' : 0.7
	});

	// Tip
	$.extend(s.imTip, {
		'borderRadius' : 14,
		'arrow' : true,
		'position' : 'left',
		'effect' : 'bounce',
		'showTail' : true
	});

	// Captcha
	b.push(function () {
		x5engine.captcha.instance = new x5engine.captcha.recaptcha({
			"sitekey": "rossmoor",

			"phpfile": "captcha/recaptcha.php"
		});
	}, false, 'first');

	// BreakPoints
	s.breakPoints.push({ "hash": "fc23f27c1080aa74e1efeec9f2399630", "name": "Desktop", "start": "max", "end": 960, "fluid": false});
	s.breakPoints.push({ "hash": "dec599558301699dfc271392a082819c", "name": "Breakpoint 1", "start": 959, "end": 720, "fluid": false});
	s.breakPoints.push({ "hash": "b5a6e70dcd45b271d4dbff444ddeed77", "name": "Mobile", "start": 719, "end": 480, "fluid": false});
	s.breakPoints.push({ "hash": "e81e7c6a4cc72fa678403ac3f73710af", "name": "Mobile Fluid", "start": 479, "end": 0, "fluid": true});

	b.push(function() { x.cookielaw.showBanner({id: "cookie-law-message", text: "Этот сайт использует файлы Cookie. Просим ознакомиться с правилами обработки данных.", priority: 1, position: 'top'}); });

	s.loaded = true;
})( _jq, x5engine );
